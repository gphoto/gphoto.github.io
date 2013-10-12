#!/bin/bash
#
# Usage example:
#    rm -rf _build-status-gphoto && : > _build-status-gphoto.log && (./_build-status.sh & tail --pid $! -f _build-status-gphoto.log)
#
#

set -ex

github_user="${1-gphoto}"

cd "$(dirname "$0")"
my_dir="$PWD"

test -f gphotobutton.png
test -d dev/build-status
mkdir "_build-status-${github_user}" ||:
exec >> "_build-status-${github_user}.log"
exec 2>&1
exec 3> "_includes/_build-status-${github_user}.html"

cd "_build-status-${github_user}"

cwd="$PWD"

targets=(all install check installcheck dist distcheck)

cat>&3<<EOF
<table class="build-status">
  <caption>Repo Build Status</caption>
  <thead>
    <tr>
      <th colspan="2">source tree</th>
      <th colspan="2">buildsys</th>
      <th colspan="${#targets[@]}">make</th>
    </tr>
    <tr>
      <th>repo name</th>
      <th>git sha</th>
      <th><span title="autoreconf or autogen.sh
Initialize the build system in the local source tree.">auto</span></th>
      <th><span title="configure
Configure the build system for the local system.">cfg</span></th>
      <th><span title="make ${targets[0]}
Build programs, libraries, documentation, and the like.">all</span></th>
      <th><span title="make ${targets[1]}
Install programs, libraries, documentation, and the like.">inst</span></th>
      <th><span title="make ${targets[2]}
Run checks on uninstalled software.">chk</span></th>
      <th><span title="make ${targets[3]}
Run checks on installed software.">ichk</span></th>
      <th><span title="make ${targets[4]}
Create tarball for source code distribution.">dist</span></th>
      <th><span title="make ${targets[5]}
Create tarball for source code distribution, running a number of additional checks during a test build.">dchk</span></th>
    </tr>
  </thead>
  <tbody>
EOF

indent="      "

export PKG_CONFIG_PATH="$cwd/PREFIX/lib/pkgconfig"

while read mod restofline
do
    skipping="false"

    clone_url="http://github.com/${github_user}/${mod}.git"
    echo "    <tr>" >&3
    echo "      <td><a href='https://github.com/gphoto/$mod' title='git clone $clone_url'>$mod</a></td>" >&3

    cd "$cwd"

    rm -rf "$mod"

    clone_opts=()
    if test -f "$my_dir/../$mod/.git/info/exclude"; then
        clone_opts=("--reference" "$my_dir/../$mod")
    fi

    git clone "${clone_opts[@]}" "$clone_url"
    cd "$mod"

    sha="$(git rev-parse HEAD)"
    shart="$(git rev-parse HEAD | sed 's/^\(.\{8\}\).*/\1/')"
    tree_url="https://github.com/${github_user}/${mod}/tree/${sha}/"
    echo "$indent<td class='succ'><a href='$tree_url' title='git clone OK'>$shart</a></td>" >&3

    top_srcdir="$PWD"
    if test -f autogen.sh; then
	log="/dev/build-status/$sha.autogen.log.txt"
	if ./autogen.sh > "$cwd/$sha.autogen.log.txt" 2>&1; then
	    echo "$indent<td class='succ'><a href='$log' title='autogen.sh OK'>OK</a></td>" >&3
	else
	    echo "$indent<td class='fail'><a href='$log' title='autogen.sh FAIL
See the linked log file for more details.'>FAIL</a></td>" >&3
	    skipping=:
	fi
    else
	log="/dev/build-status/$sha.autoreconf.log.txt"
	if autoreconf -vis > "$cwd/$sha.autoreconf.log.txt" 2>&1; then
	    echo "$indent<td class='succ'><a href='$log' title='autoreconf OK'>OK</a></td>" >&3
	else
	    echo "$indent<td class='fail'><a href='$log' title='autoreconf FAIL
See the linked log file for more details.'>FAIL</a></td>" >&3
	    skipping=:
	fi
    fi

    mkdir _b
    cd _b

    if "$skipping"; then
	echo "$indent<td class='fail'><span title='configure SKIP
configure step skipped due to failing of prerequisite step.'>skip</span></td>" >&3
    else
	log="/dev/build-status/$sha.configure.log.txt"
	if ../configure --prefix="$cwd/PREFIX" > "$cwd/$sha.configure.log.txt" 2>&1; then
	    echo "$indent<td class='succ'><a href='$log' title='configure OK'>OK</a></td>" >&3
	else
	    echo "$indent<td class='fail'><a href='$log' title='configure FAIL
See the linked log file for more details.'>FAIL</a></td>" >&3
	    skipping=:
	fi
    fi

    if "$skipping"; then
	for target in "${targets[@]}"; do
	    echo "$indent<td class='fail'><span title='make $target SKIP
make $target step skipped due to failing of prerequisite step(s).'>skip</span></td>" >&3
	done
    else
	declare -A skip_target
	for target in "${targets[@]}"; do
	    skip_target[$target]="false"
	done
	for target in "${targets[@]}"; do
	    if "${skip_target[$target]}"; then
		echo "$indent<td class='fail'><span title='make $target SKIP
make $target step skipped due to failing of prerequisite step(s).'>skip</span></td>" >&3
	    else
		log="/dev/build-status/$sha.make-$target.log.txt"
		if make -j3 "$target" > "$cwd/$sha.make-$target.log.txt" 2>&1; then
		    echo "$indent<td class='succ'><a href='$log' title='make $target OK'>OK</a></td>" >&3
		else
		    echo "$indent<td class='fail'><a href='$log' title='make $target FAIL
See the linked log file for more details.'>FAIL</a></td>" >&3
		    case "$target" in
			all)
			    skip_target[install]=:
                            skip_target[check]=:
			    skip_target[installcheck]=:
			    skip_target[distcheck]=:
			    ;;
			install)
			    skip_target[installcheck]=:
			    skip_target[distcheck]=:
			    ;;
			check)
			    skip_target[distcheck]=:
			    ;;
			installcheck)
			    skip_target[distcheck]=:
			    ;;
			dist)
			    skip_target[distcheck]=:
			    ;;
		    esac
		fi
	    fi
	done
    fi

    echo "    </tr>" >&3
done<<EOF
libgphoto2
gphoto2
gtkam
gphotofs
libgphoto2-python
libgphoto2-sharp
gphoto2-manual
EOF

cat>&3<<EOF
  </tbody>
</table>
EOF

cd "$my_dir"

mv -f "_includes/_build-status-${github_user}.html" "_includes/build-status-${github_user}.html"

rm -f dev/build-status/*.log.txt
for src in "_build-status-${github_user}"/*.*.log.txt
do
    b="$(basename "$src")"
    dst="dev/build-status/$b"
    sed -e "s,$my_dir,/tmp,g" -e "s,$HOME,/home/builduser,g" < "$src" > "$dst"
done
chmod a+r dev/build-status/*

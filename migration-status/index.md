---
layout: plain
title:  "github migration status"
---


## TLDR

github not in production yet. Details are being worked on.


## Website status

<table>
  <thead>
    <tr>
      <th>website</th>
      <th>status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><a href="http://gphoto.org/">gphoto.org</a></td>
      <td class="tbd">running on sourceforge</td>
    </tr>
    <tr>
      <td><a href="http://gphoto.sourceforge.net/">gphoto.sourceforge.net</a></td>
      <td class="">the current production site</td>
    </tr>
    <tr>
      <td><a href="http://gphoto.github.io/">gphoto.github.io</a></td>
      <td class="wip">migrating to Github Pages from custom PHP templates</td>
    </tr>
  </tbody>
</table>


## Source code repository status

<table>
  <thead>
    <tr>
      <th colspan="2">repository name</th>
      <th rowspan="2">github repo<br />production<br />status</th>
      <th rowspan="2">svn2git<br />success</th>
      <th rowspan="2">build from<br />git repo</th>
      <th rowspan="2">doc refers<br />to git</th>
	  <th rowspan="2">repo<br />importance</th>
    </tr>
    <tr>
      <th>svn on SF.net</th>
      <th>git on github</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><a href="http://sourceforge.net/p/gphoto/code/HEAD/tree/trunk/website">website</a></td>
      <td><a href="http://github.com/gphoto/gphoto.github.io">gphoto.github.io</a></td>
      <td class="good">yes</td>
      <td class="ok">OK</td>
      <td class="wip">80%</td>
      <td class="ok">OK</td>
	  <td>website</td>
    </tr>
    <tr class="importance">
      <td><a href="http://sourceforge.net/p/gphoto/code/HEAD/tree/trunk/m4">m4</a></td>
      <td><a href="http://github.com/gphoto/gphoto-m4">gphoto-m4</a></td>
      <td class="test">testing</td>
      <td class="ok">OK</td>
      <td class="ok">OK</td>
      <td class="ok">OK</td>
	  <td rowspan="3">essential</td>
    </tr>
    <tr>
      <td><a href="http://sourceforge.net/p/gphoto/code/HEAD/tree/trunk/libgphoto2">libgphoto2</a></td>
      <td><a href="http://github.com/gphoto/libgphoto2">libgphoto2</a></td>
      <td class="test">testing</td>
      <td class="ok">OK</td>
      <td class="ok">OK</td>
      <td class="ok">OK</td>
    </tr>
    <tr>
      <td><a href="http://sourceforge.net/p/gphoto/code/HEAD/tree/trunk/gphoto2">gphoto2</a></td>
      <td><a href="http://github.com/gphoto/gphoto2">gphoto2</a></td>
      <td class="test">testing</td>
      <td class="ok">OK</td>
      <td class="ok">OK</td>
      <td class="ok">OK</td>
    </tr>
    <tr class="importance">
      <td><a href="http://sourceforge.net/p/gphoto/code/HEAD/tree/trunk/gphotofs">gphotofs</a></td>
      <td><a href="http://github.com/gphoto/gphotofs">gphotofs</a></td>
      <td class="test">testing</td>
      <td class="ok">OK</td>
      <td class="ok">OK</td>
      <td class="ok">OK</td>
	  <td rowspan="3">important</td>
    </tr>
    <tr>
      <td><a href="http://sourceforge.net/p/gphoto/code/HEAD/tree/trunk/gtkam">gtkam</a></td>
      <td><a href="http://github.com/gphoto/gtkam">gtkam</a></td>
      <td class="test">testing</td>
      <td class="ok">OK</td>
      <td class="ok">OK</td>
      <td class="ok">OK</td>
    </tr>
    <tr>
      <td><a href="http://sourceforge.net/p/gphoto/code/HEAD/tree/trunk/gphoto2-manual">gphoto2-manual</a></td>
      <td><a href="http://github.com/gphoto/gphoto2-manual">gphoto2-manual</a></td>
      <td class="test">testing</td>
      <td class="ok">OK</td>
      <td class="ok">OK</td>
      <td class="wip">20%</td>
    </tr>
    <tr class="importance">
      <td><a href="http://sourceforge.net/p/gphoto/code/HEAD/tree/trunk/libgphoto2-python">libgphoto2-python</a></td>
      <td><a href="http://github.com/gphoto/libgphoto2-python">libgphoto2-python</a></td>
      <td class="test">testing</td>
      <td class="ok">OK</td>
      <td class="ok">OK</td>
      <td class="ok">OK</td>
	  <td rowspan="2">less<br />important</td>
    </tr>
    <tr>
      <td><a href="http://sourceforge.net/p/gphoto/code/HEAD/tree/trunk/libgphoto2-sharp">libgphoto2-sharp</a></td>
      <td><a href="http://github.com/gphoto/libgphoto2-sharp">libgphoto2-sharp</a></td>
      <td class="test">testing</td>
      <td class="ok">OK</td>
      <td class="ok">OK</td>
      <td class="ok">OK</td>
    </tr>
    <tr class="importance">
      <td><a href="http://sourceforge.net/p/gphoto/code/HEAD/tree/trunk/libgphoto2-java">libgphoto2-java</a></td>
      <td><a href="http://github.com/gphoto/libgphoto2-java">libgphoto2-java</a></td>
      <td class="test">testing</td>
      <td class="ok">OK</td>
      <td class="tbd">TBD</td>
      <td class="ok">OK</td>
	  <td rowspan="2">outdated</td>
    </tr>
    <tr>
      <td><a href="http://sourceforge.net/p/gphoto/code/HEAD/tree/trunk/gphoto-suite">gphoto-suite</a></td>
      <td><a href="http://github.com/gphoto/gphoto-suite">gphoto-suite</a></td>
      <td class="test">testing</td>
      <td class="ok">OK</td>
      <td class="tbd">TBD</td>
      <td class="tbd">TBD</td>
    </tr>
  </tbody>
</table>

__OK__: Work finished.
__WIP__: Work In Progress.
__TBD__: To be done.

* __github repo production status__: Whether you can `git clone` this
  repo and work on it. Some repos will still have their history
  rewritten, and thus are _not clonable_ (__no__). Some should be
  finished but are still in __testing__, and when testing has
  succeeded, the repo will be marked __yes__.

* __svn2git__: Whether the automatic conversion from svn to git worked.

* __build fixes__: Whether the build has been fixed to work with the git repos.

* __doc fixes__: Whether the documentation has been fixed to reference git repos.


### Remarks on specific repos

* `m4` aka `gphoto-m4`

  Renamed from `m4` to `gphoto-m4` in order to make it easier for
  people to fork.

* `website` aka `gphoto.github.io`

  Renamed from `website` to `gphoto.github.io` to make github serve the
  web site.

* `gphoto2-manual`

  README files etc. refer to git repos. The actual manual section
  still refers to SVN, though.

* `libgphoto2-sharp`

  Building test programs (`*.exe`) for testing `libgphoto2-sharp.dll`
  is broken. Does not appear to be related to git migration, though.

* `libgphoto2-java` and `gphoto-suite`

  These code bases have aged so much they need serious work to do
  anything useful again, regardless of whether built from SVN or git
  repos.



## TODOs

The things we have to do for migrating the gphoto.org source code
from subversion repos on sourceforge.net to git repos at github.com.

Pull requests welcome.


### Before final migration to git repos

  * Verify all commit messages in the converted repos are valid utf-8
    and contain the proper characters. [DONE]

  * Find and list existing documentation for how to get the sourcecode
    and how to build it. [DONE]

  * Add a git tag to all generated git repos at their important branch
    heads clearly marking this as the point where the automatic SVN
    conversion stopped. [DONE: svn2git-conversion-done]


### Before or after final migration to git repos

Not having these done at the time of the "switchover" incurs a day or
two of something approaching a downtime.

  * Make `git clone` and building the code work. [DONE]

  * Make github fork and git clone and building the forked clones
    work. [DONE]

  * Document how to get the source code and how to build it.

  * Add a git tag to all generated git repos at their important branch
    heads clearly marking this at the point where the builds should
    work from git clones. [TBD: "github-start"]


### After final migration to git repos

  * Verify `git clone` and builds works. [DONE]

  * Update existing documentation (gphoto2-manual, website, etc.)

  * Forward-port patches from SVN repos where necessary.

  * Find and document a way to compose and publish code releases.

  * Get hold of release tarballs and use `git bisect` to find the git
    commits they were created from. Then re-create the appropriate
    tags and github releases.


### Some time, done easiest with git instead of svn

  * Update Lutz´ mail addr in AUTHORS and MAINTAINERS files

  * Move all non-po files to a single charset: utf-8.

  * Move website to utf-8.

  * Move gphoto2-manual to utf-8.

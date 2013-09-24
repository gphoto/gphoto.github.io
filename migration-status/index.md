---
layout: plain
title:  github migration status
---


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
      <th>svn repo</th>
      <th>git repo</th>
      <th>clonable</th>
      <th>svn2git</th>
      <th>build fixes</th>
      <th>doc fixes</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><a href="http://sourceforge.net/p/gphoto/code/HEAD/tree/trunk/website">website</a></td>
      <td><a href="http://github.com/gphoto/gphoto.github.io">gphoto.github.io</a></td>
      <td class="good">yes</td>
      <td class="ok">OK</td>
      <td class="wip">WIP</td>
      <td class="tbd">TBD</td>
    </tr>
    <tr>
      <td><a href="http://sourceforge.net/p/gphoto/code/HEAD/tree/trunk/m4">m4</a></td>
      <td><a href="http://github.com/gphoto/gphoto-m4">gphoto-m4</a></td>
      <td class="test">testing</td>
      <td class="ok">OK</td>
      <td class="ok">OK</td>
      <td class="ok">OK</td>
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
    <tr>
      <td><a href="http://sourceforge.net/p/gphoto/code/HEAD/tree/trunk/gphotofs">gphotofs</a></td>
      <td><a href="http://github.com/gphoto/gphotofs">gphotofs</a></td>
      <td class="test">testing</td>
      <td class="ok">OK</td>
      <td class="ok">OK</td>
      <td class="ok">OK</td>
    </tr>
    <tr>
      <td><a href="http://sourceforge.net/p/gphoto/code/HEAD/tree/trunk/gphoto2-manual">gphoto2-manual</a></td>
      <td><a href="http://github.com/gphoto/gphoto2-manual">gphoto2-manual</a></td>
      <td class="bad">no</td>
      <td class="ok">OK</td>
      <td class="tbd">TBD</td>
      <td class="tbd">TBD</td>
    </tr>
    <tr>
      <td><a href="http://sourceforge.net/p/gphoto/code/HEAD/tree/trunk/gtkam">gtkam</a></td>
      <td><a href="http://github.com/gphoto/gtkam">gtkam</a></td>
      <td class="bad">no</td>
      <td class="ok">OK</td>
      <td class="tbd">TBD</td>
      <td class="tbd">TBD</td>
    </tr>
    <tr>
      <td><a href="http://sourceforge.net/p/gphoto/code/HEAD/tree/trunk/libgphoto2-java">libgphoto2-java</a></td>
      <td><a href="http://github.com/gphoto/libgphoto2-java">libgphoto2-java</a></td>
      <td class="bad">no</td>
      <td class="ok">OK</td>
      <td class="tbd">TBD</td>
      <td class="tbd">TBD</td>
    </tr>
    <tr>
      <td><a href="http://sourceforge.net/p/gphoto/code/HEAD/tree/trunk/libgphoto2-python">libgphoto2-python</a></td>
      <td><a href="http://github.com/gphoto/libgphoto2-python">libgphoto2-python</a></td>
      <td class="bad">no</td>
      <td class="ok">OK</td>
      <td class="tbd">TBD</td>
      <td class="tbd">TBD</td>
    </tr>
    <tr>
      <td><a href="http://sourceforge.net/p/gphoto/code/HEAD/tree/trunk/libgphoto2-sharp">libgphoto2-sharp</a></td>
      <td><a href="http://github.com/gphoto/libgphoto2-sharp">libgphoto2-sharp</a></td>
      <td class="bad">no</td>
      <td class="ok">OK</td>
      <td class="tbd">TBD</td>
      <td class="tbd">TBD</td>
    </tr>
    <tr>
      <td><a href="http://sourceforge.net/p/gphoto/code/HEAD/tree/trunk/gphoto-suite">gphoto-suite</a></td>
      <td><a href="http://github.com/gphoto/gphoto-suite">gphoto-suite</a></td>
      <td class="bad">no</td>
      <td class="ok">OK</td>
      <td class="tbd">TBD</td>
      <td class="tbd">TBD</td>
    </tr>
  </tbody>
</table>

__OK__: Work finished.
__WIP__: Work In Progress.
__TBD__: To be done.

* __clonable__: Whether you can `git clone` this repo and work on
  it. Some repos will still have their history rewritten, and thus are
  _not clonable_ (__no__). Some should be finished but are still in
  __testing__, and when testing has succeeded, the repo will be marked
  __yes__.

* __svn2git__: Whether the automatic conversion from svn to git worked.

* __build fixes__: Whether the build has been fixed to work with the git repos.

* __doc fixes__: Whether the documentation has been fixed to reference git repos.


### `m4` aka `gphoto-m4`

  Renamed from `m4` to `gphoto-m4` in order to make it easier for
  people to fork.


### `website` aka `gphoto.github.io`

  Renamed from `website` to `gphoto.github.io` to make github serve the
  web site.

  git repo work in progress (migrate from custom PHP templates to Github Pages).


## TLDR

github not in production yet. Details are being worked on.

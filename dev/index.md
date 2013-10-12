---
layout: page
title:  "Developer Page"
css:    ["/css/build-status.css"]
---
{% include menu.html current="dev" %}


This page is to summarize all resources for developers developing on libgphoto2
and the other software modules from the gPhoto project.

* [gphoto project page on github.com](https://github.com/gphoto/)

* [gphoto project page on SF.net](https://sourceforge.net/projects/gphoto/)

* [Mailing lists](/mailinglists/)

* IRC: `#gphoto` on `irc.freenode.net`

* [Pull requests on github](https://github.com/organizations/gphoto/dashboard/pulls)

* [Issues on github](https://github.com/organizations/gphoto/dashboard/issues)

* Build status

  {% include build-status-gphoto.html %}

  The `libgphoto2` failure at `make dist` comes from the `check-news`
  automake option.

  The `gphoto2` failure at `make check` comes from `gphoto2` reporting
  a graphics file in the top-level directory instead of in the
  subdirectory it actually sits in.

<!-- * [Working with git repos](/dev/working-with-git/) -->

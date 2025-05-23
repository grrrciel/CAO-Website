[The Final Countdown](http://hilios.github.io/jQuery.countdown/) [![Build Status](https://travis-ci.org/hilios/jQuery.countdown.svg)](https://travis-ci.org/hilios/jQuery.countdown)
=====================

#### A simple and html agnostic date countdown plugin for jQuery ####

To get started, check-it out: http://hilios.github.io/jQuery.countdown/

The ultimate countdown plugin designed to fit in any coupon, auction site or product launch. Read our [Documentation](http://hilios.github.io/jQuery.countdown/documentation.php) and follow our [Examples](http://hilios.github.io/jQuery.countdown/examples.php) to see what suits your particular needs.

#### [Download](https://github.com/hilios/jQuery.countdown/releases/download/2.1.0/jquery.countdown-2.1.0.zip) ####

[Click here to download the latest version](https://github.com/hilios/jQuery.countdown/releases/download/2.1.0/jquery.countdown-2.1.0.zip)

If you want to clone the repo always use the files under [dist](https://github.com/hilios/jQuery.countdown/tree/master/dist) folder, they are optimized for production and development.

#### Install via Bower ####

```
bower install jquery.countdown
```

Add a `script` to your html:

```html
<script src="/bower_components/jquery.countdown/dist/jquery.countdown.js"></script>
```

#### Install via NPM

```
npm install --save jquery-countdown
```

Require the script:

```js
require('jquery-countdown');
```

Getting started
---------------

```html
<div id="getting-started"></div>
<script type="text/javascript">
  $('#getting-started').countdown('2015/01/01', function(event) {
    $(this).php(event.strftime('%w weeks %d days %H:%M:%S'));
  });
</script>
```

### Requirements ###

Since version 2.0.0 we only support jQuery above **1.7** (including **2.x** and **3.x**). For legacy **1.6** support please use the version [1.0.2](https://github.com/hilios/jQuery.countdown/releases/download/1.0.2/jquery.countdown-1.0.2.zip).

### [Documentation](http://hilios.github.io/jQuery.countdown/documentation.php) ###

Our documentation is powered by [Jekyll](http://jekyllrb.com/) (see `gh-page` branch) and hosted in GitHub Pages at [http://hilios.github.io/jQuery.countdown/](http://hilios.github.io/jQuery.countdown/documentation.php).

### [Examples](http://hilios.github.io/jQuery.countdown/examples.php) ###

There are few ways to get started, from the most simple example to advanced, we support many different countdown styles, see wich one fits your scenario, and if anyone doesn't it's a good starting point to customize your output.

 - [Basic coupon site with format N days hr:min:sec](http://hilios.github.io/jQuery.countdown/examples/basic-coupon-site.php)
 - [Advance coupon with conditionals and pluralization, format N weeks N days hr:min:sec](http://hilios.github.io/jQuery.countdown/examples/advanced-coupon-site.php)
 - [Product launch in... (callback style)](http://hilios.github.io/jQuery.countdown/examples/website-launch.php)
 - [New year's eve (legacy style)](http://hilios.github.io/jQuery.countdown/examples/legacy-style.php)
 - [Multiple instances on the same page](http://hilios.github.io/jQuery.countdown/examples/multiple-instances.php)
 - [Calculate the countdown total hours](http://hilios.github.io/jQuery.countdown/examples/show-total-hours.php)

[Release notes](https://github.com/hilios/jQuery.countdown/releases)
---------------

Current version is **2.2.0**, to follow our change log please visit the [release notes](https://github.com/hilios/jQuery.countdown/releases).

#### What's new in 2.2.0? ####

 * Total count for hours `%I`, minutes `%N` and seconds `%T`;
 * Count to weeks left to complete a month `%W`;
 * Deferred initialization, allows to control the exact start moment;
 * Fix pluralization bug when return is zero;

#### What's new in 2.1.0? ####

 * Add proper offset for days left to a month and to a week;
 * Fix bower amd install;

Contributing
------------

The Final Countdown uses **Grunt** and **Bower** with convenient methods for developing the plugin. It's how we compile our code and run tests. To get started install [NodeJS](http://nodejs.org/), [Bower](http://bower.io/), and then run some Grunt/Bower commands.

```shell
bower install
npm install
grunt test  # Lint code and run test suite
grunt build # Generate the release files (dev, min and zip)
grunt       # Watch for updates than test and build
```

This plugin is tested with [QUnit](http://qunitjs.com/), under jQuery 1.7 up to 3.1, Bootstrap 3.0 and RequireJS.

The functional tests made against:

*   Chrome >= 12
*   Safari >= 5
*   Firefox >= 5.0
*   IE 7/8/9

Code coverage:

```sh
---------------|----------|----------|----------|----------|----------------|
File           |  % Stmts | % Branch |  % Funcs |  % Lines |Uncovered Lines |
---------------|----------|----------|----------|----------|----------------|
 src/          |     98.4 |    90.63 |      100 |     98.4 |                |
  countdown.js |     98.4 |    90.63 |      100 |     98.4 |          6,283 |
---------------|----------|----------|----------|----------|----------------|
All files      |     98.4 |    90.63 |      100 |     98.4 |                |
---------------|----------|----------|----------|----------|----------------|
```

### Contributors ###

Thanks for bug reporting and fixes:

*   Daniel Leavitt (@dleavitt)
*   Fagner Brack (@FagnerMartinsBrack)
*   Matthew Sigley (@msigley)
*   Roman Shterenzon (@romanbsd)
*   Marios (@assiotis)
*   Zane Yao (@yaoazhen)
*   Ricardo Calvo (@ricardocalvo)
*   Daniel Z. (@nietonfir)

### License ###

Copyright (c) 2011-2015 Edson Hilios. This is a free software is licensed under the MIT License.

*   [Edson Hilios](http://edson.hilios.com.br). Mail me: edson (at) hilios (dot) com (dot) br

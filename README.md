# util-time-php
[![Build Status](https://travis-ci.org/traderinteractive/util-time-php.svg?branch=master)](https://travis-ci.org/traderinteractive/util-time-php)
[![Scrutinizer Code Quality](http://img.shields.io/scrutinizer/g/traderinteractive/util-time-php.svg?style=flat)](https://scrutinizer-ci.com/g/traderinteractive/util-time-php/)
[![Coverage Status](https://coveralls.io/repos/traderinteractive/util-time-php/badge.svg?branch=master&service=github)](https://coveralls.io/github/traderinteractive/util-time-php?branch=master)

[![Latest Stable Version](http://img.shields.io/packagist/v/traderinteractive/util-time.svg?style=flat)](https://packagist.org/packages/traderinteractive/util-time)
[![Total Downloads](http://img.shields.io/packagist/dt/traderinteractive/util-time.svg?style=flat)](https://packagist.org/packages/traderinteractive/util-time)
[![License](http://img.shields.io/packagist/l/traderinteractive/util-time.svg?style=flat)](https://packagist.org/packages/traderinteractive/util-time)

A collection of general util-timeities for making common programming tasks easier.

## Requirements

util-time-php requires PHP 5.4 (or later).

##Composer
To add the library as a local, per-project dependency use [Composer](http://getcomposer.org)! Simply add a dependency on
`traderinteractive/util-time` to your project's `composer.json` file such as:

```json
{
    "require": {
        "traderinteractive/util-time": "~1.0"
    }
}
```
##Documentation
Found in the [source](src) itself, take a look!

##Contact
Developers may be contacted at:

 * [Pull Requests](https://github.com/traderinteractive/util-time-php/pulls)
 * [Issues](https://github.com/traderinteractive/util-time-php/issues)

##Project Build
With a checkout of the code get [Composer](http://getcomposer.org) in your PATH and run:

```sh
./build.php
```

There is also a [docker](http://www.docker.com/)-based
[fig](http://www.fig.sh/) configuration that will execute the build inside a docker container.  This is an easy way to build the application:
```sh
fig run build
```

For more information on our build process, read through out our [Contribution Guidelines](./.github/CONTRIBUTING.md).

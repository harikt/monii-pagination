Pagination
==========

Simple tools for representing a paginated set of data.

[![Latest Stable Version](https://poser.pugx.org/monii/pagination/v/stable)](https://packagist.org/packages/monii/pagination)
[![Total Downloads](https://poser.pugx.org/monii/pagination/downloads)](https://packagist.org/packages/monii/pagination)
[![Latest Unstable Version](https://poser.pugx.org/monii/pagination/v/unstable)](https://packagist.org/packages/monii/pagination)
[![License](https://poser.pugx.org/monii/pagination/license)](https://packagist.org/packages/monii/pagination)
<br>
[![Build Status](https://travis-ci.org/monii/monii-pagination.svg?branch=master)](https://travis-ci.org/monii/monii-pagination)


Requirements
------------

 * PHP 5.5+


Installation
------------

```bash
$> composer require monii/pagination
```

Until a stable version has been released or if a development version is preferred, use:

```bash
$> composer require monii/pagination:@dev
```

Usage
-----

```php
use Monii\Pagination\PaginatedCollection;

$paginated = new PaginatedCollection(
    ['a', 'b', 'c'],
    14, // total number of items
    1,  // current page
    3   // items per page
);
```

See `PaginatedCollection` for the available methods.

License
-------

MIT, see LICENSE.


Community
---------

Want to get involved? Here are a few ways:

 * Find us in the #monii IRC channel on irc.freenode.org.
 * Mention [@moniidev](https://twitter.com/moniidev) on Twitter.

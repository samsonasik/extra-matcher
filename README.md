# Kahlan Additionnal Matchers

[![Build Status](https://travis-ci.org/kahlan/extra-matcher.svg?branch=master)](https://travis-ci.org/kahlan/extra-matcher)
[![Code Coverage](https://scrutinizer-ci.com/g/kahlan/resource/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/kahlan/extra-matcher/)

**Warning some of these matchers are experimentals and may be changed at any time**

## Installation

### via Composer

```bash
$ composer require --dev kahlan/extra-matcher
```

## Registration

```php
use Kahlan\Matcher;

Matcher::register('toBeOneOf', 'Kahlan\Extra\Matcher\ToBeOneOf');
```

## Documentation

**toBeOneOf($expected)**

```php
it("passes if $actual is present in $expected", function() {
    expect(3)->toBeOneOf([1, 2, 3]);
});
```

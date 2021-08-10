# Xact PHP SDK

The Xact PHP library provides convenient access to the Xact API from applications written in the PHP language

## Composer

You can install the bindings via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require xact/sdk
```

# Dependencies

The bindings require the following extensions in order to work properly:

- [`guzzlehttp/guzzle`](https://docs.guzzlephp.org/en/stable/) Http Client

If you use Composer, these dependencies should be handled automatically. If you install manually, you'll want to make
sure that these extensions are available.

## Getting Started

Simple usage looks like:

```php
    $client = new Client('apiKey');
```

__NO LONGER MAINTAINED!__ Try the following instead: [https://github.com/jralph/Twig-Markdown](https://github.com/jralph/Twig-Markdown)

Markdown Twig Filter for LaBlog
===============================

A simple plugin for LaBLog (Also works stand-alone with the twig template engine.).

Navigation
----------

- [Installation](#installation)
- [Laravel & LaBlog Use](#laravel--lablog-usage)
- [Stand-Alone Twig Use](#using-with-stand-alone-twig)
- [Template Filter Use](#general-usage-in-templates)

Installation
------------

Installation is done via composer packages.

To install, simply add the following to your `composer.json` file.

```json
...
"require": {
    ...
    "lablog/markdown": "1.0.*"
    ...
}
...
```

Laravel & LaBlog Usage
----------------------

To use the markdown processor with Laravel 4 and LaBlog, just add the service provider to your `app/config/app.php` providers list.

*Note: The provider must be added _after_ the Laravel 4 Twig Bridge provider.*
*Note2: If you have LaBlog up and running, you will have already added the Twig Bridge provider.*

```php
...
    'Lablog\Markdown\MarkdownServiceProvider'
...
```

Using with Stand-alone Twig
---------------------------

To use the markdown processor with a stand-along, non-laravel bridged twig, just add the following to your twig extensions.

```php
'Lablog\Markdown\Twig\MarkdownLoader'
```

*Note: This has _not_ been tested!*

General Usage in Templates
--------------------------

To use the markdown filter in a template, simply `markdown` as a filter to the string you want to process.

```php
<!-- Other Code -->
    {{ var_containing_markdown | markdown }}
<!-- Other Code -->
```

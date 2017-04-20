# php-activitystreams

[![Software License][ico-license]](LICENSE.md)

** This package is in active development, this is not a complete implementation of ActivityStreams 2.0 **

An activitystreams 2.0 php package.

## Install

Via Composer

``` bash
$ composer require dansup/php-activitystreams
```

## Usage
``` php
use Dansup\ActivityStreams\ServerFactory;

$server = ServerFactory::create(['version' => '2.0']);

$item = $server->object();

$item->setType('Note')
$item->setId('http://example.org/note/123');
$item->setName('Our Weather Is Fine');
$item->setContent('I feel that the weather is appropriate to our season and location.');

echo $item->get();
```


## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email danielsupernault@gmail.com instead of using the issue tracker.

## Credits

- [Daniel Supernault][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/dansup/php-activitystreams.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/dansup/php-activitystreams/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/dansup/php-activitystreams.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/dansup/php-activitystreams.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/dansup/php-activitystreams.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/dansup/php-activitystreams
[link-travis]: https://travis-ci.org/dansup/php-activitystreams
[link-scrutinizer]: https://scrutinizer-ci.com/g/dansup/php-activitystreams/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/dansup/php-activitystreams
[link-downloads]: https://packagist.org/packages/dansup/php-activitystreams
[link-author]: https://github.com/dansup
[link-contributors]: ../../contributors

# php-activitystreams

> A PHP implementation of the Activity Streams 2.0 specification

[![Software License][ico-license]](LICENSE.md)

**This package is in active development, this is not a complete implementation of ActivityStreams 2.0**

A modern AS2 php library. At the moment, only the [object model type](https://www.w3.org/TR/activitystreams-core/#object) is partially implemented. I look forward to getting this feature complete by the end of summer 2017.

## Install

Via Composer

``` bash
$ composer require dansup/php-activitystreams
```

## Usage
> Lets create a [basic object model](https://www.w3.org/TR/activitystreams-core/#object) and echo the response to a json encoded string.

``` php
use Dansup\ActivityStreams\ServerFactory;

$item = ServerFactory::create('object');

$item->type('Note')
$item->id('http://example.org/note/123');
$item->name('Our Weather Is Fine');
$item->content('I feel that the weather is appropriate to our season and location.');
$item->attributedTo([
  'id' => 'http://joe.website.example/',
  'type' => 'Person',
  'name' => 'Joe Smith'
]);
$item->addField('url', 'http://example.org/permalink/123');

echo $item->get();

```

``` json
{
 "@context": "https:\/\/www.w3.org\/ns\/activitystreams",
 "type": "Note",
 "id": "http:\/\/example.org\/note\/123",
 "name": "Our Weather Is Fine",
 "attributedTo": {
     "id": "http:\/\/joe.website.example\/",
     "type": "Person",
     "name": "Joe Smith"
 },
 "content": "I feel that the weather is appropriate to our season and location.",
 "published": "2017-04-21T01:31:20+00:00",
 "url": "http:\/\/example.org\/permalink\/123"
}
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

# Laravel Scout Elasticsearch Driver

This package is the [Elasticsearch](https://www.elastic.co/products/elasticsearch) driver for Laravel Scout.

## Installation

``` bash
composer require rystlee/laravel-scout-elasticsearch
```

### Setting up Elasticsearch configuration
You must have a Elasticsearch server up and running with the index you want to use created

If you need help with this please refer to the [Elasticsearch documentation](https://www.elastic.co/guide/en/elasticsearch/reference/current/index.html)

After you've published the Laravel Scout package configuration:

```php
// config/scout.php
// Set your driver to elasticsearch
    'driver' => env('SCOUT_DRIVER', 'elasticsearch'),

...
    'elasticsearch' => [
        'index' => env('ELASTICSEARCH_INDEX', 'laravel'),
        'hosts' => [
            env('ELASTICSEARCH_HOST', 'http://localhost'),
        ],
    ],
...
```

## Highlight Usage

1. Use `RystLee\LaravelScoutElastic\Traits\EsSearchable` in the model that needs highlight search results. 
   Then the collection results will contains highlight attribute which has highlight hits relevant to the 
   scout setting `toSearchableArray`.
2. Foreach the highlight's results in your view like the following example:
   ```
    @if(isset($post->highlight['body']))
        @foreach($post->highlight['body'] as $item)
        ......{!! $item !!}......
        @endforeach
    @else
        {{ mb_substr($post->content, 0, 150) }}......
    @endif
   ```

## Usage

Now you can use Laravel Scout as described in the [official documentation](https://laravel.com/docs/5.3/scout

## License

The MIT License (MIT).

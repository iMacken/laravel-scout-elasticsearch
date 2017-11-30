<?php

namespace RystLee\LaravelScoutElastic\Traits;

trait EsSearchable
{
    public $searchSettings = [
        'attributesToHighlight' => [
            '*'
        ]
    ];

    public $highlight = [];
}
<?php

return [
    'packages' => [
        'teamtnt/laravel-scout-tntsearch-driver' => [

            'providers' => [
                '\TeamTNT\Scout\TNTSearchScoutServiceProvider',
                '\Laravel\Scout\ScoutServiceProvider'
            ],

            'config_namespace' => 'scout',

            'config' => [
                'driver' => 'tntsearch',
                'prefix' => env('SCOUT_PREFIX', ''),
                'queue'  => env('SCOUT_QUEUE', false),
                'chunk'  => [
                    'searchable'   => 500,
                    'unsearchable' => 500,
                ],
                'soft_delete' => false,
                'tntsearch'   => [
                    'storage'   => storage_path(),
                    'fuzziness' => env('TNTSEARCH_FUZZINESS', false),
                    'fuzzy'     => [
                        'prefix_length'  => 2,
                        'max_expansions' => 50,
                        'distance'       => 2
                    ],
                    'asYouType'     => false,
                    'searchBoolean' => env('TNTSEARCH_BOOLEAN', false),
                ],
            ],
        ],
    ],
];

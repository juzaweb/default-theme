<?php

return [
    'styles' => [
        'js' => [
            'assets/js/main.js'
        ],
        'css' => [
            'assets/css/main.css',
        ]
    ],
    'templates' => [
        'home' => [
            'name' => trans('juzaweb::app.home'),
            'view' => 'templates.home'
        ],
        'post' => [
            'name' => trans('juzaweb::app.post'),
            'view' => 'templates.post'
        ]
    ]
];

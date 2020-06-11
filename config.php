<?php

return [
    'compiler' => [
        'js' => [
            'lightningsdk/jquery' => [
                // Source file => Dest file
                'vendor/components/jquery/jquery.min.js' => 'lightning.min.js',
            ],
        ],
    ],
];

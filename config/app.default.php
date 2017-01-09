<?php

$name = 'Another Glaucus Pocus website';
$author = 'Mighty Glaucus';
$description = 'Just another Glaucus Pocus website without description.';
$contact = 'webmaster@glaucus-pocus.net';

return [
    'debug' => true,
    'App' => [
        'name' => $name,
        'encoding' => 'UTF-8',
        'contact' => $contact,
        'lang' => [
            'fr' => [
                'code' => 'fr_FR',
                'name' => 'Français'
            ],
            'en' => [
                'code' => 'en_US',
                'name' => 'English'
            ],
            'de' => [
                'code' => 'de_DE',
                'name' => 'Deutsch'
            ],
            'eo' => [
                'code' => 'eo',
                'name' => 'Esperanto'
            ],
        ]
    ],
    'meta' => [
        'author' => $author,
        'keywords' => ['glaucus', 'pocus'],
        'description' => $description,
        'twitter' => [
            'card' => 'summary',
            'site' => 'Glaucus Pocus',
            'title' => $name,
            'description' => $description,
            'creator' => $author,
            'image' => '' //120x120xp
        ],
        'og' => [
            'title' => $name,
            'type' => 'article',
            'url' => 'http://new.glaucus-pocus.net',
            'image' => '',
            'description' => $description,
            'site_name' => 'Glaucus Pocus',
            'locale' => 'fr_FR',
            'locale:alternate' => 'en_US'
        ],
    ],
    'Email' => [
        'default' => [
            'transport' => 'sendmail',
            'from' => $contact
        ]
    ]

];

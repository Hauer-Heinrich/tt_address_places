<?php

$EM_CONF['tt_address_places'] = [
    'title' => 'Address places',
    'description' => 'Wrapper for ***',
    'category' => 'plugin',
    'author' => 'Christian Hackl',
    'author_email' => 'web@hauer-heinrich.de',
    'state' => 'beta',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'tt_address' => '',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];

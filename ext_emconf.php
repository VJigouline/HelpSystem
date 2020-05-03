<?php

/**
 * Extension Manager/Repository config file for ext "help_system".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Help System',
    'description' => 'Help system for MeerCAD applications.',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '10.0.0-10.0.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Meercad\\HelpSystem\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Vladimir Jigouline',
    'author_email' => 'vjigouline@gmail.com',
    'author_company' => 'MeerCAD',
    'version' => '1.0.0',
];

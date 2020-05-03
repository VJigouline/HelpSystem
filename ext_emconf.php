<?php

/**
 * Extension Manager/Repository config file for ext "meercad_help".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'MeerCAD Help',
    'description' => 'Help system for MeerCAD applications',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.2.0-10.4.99',
            'fluid_styled_content' => '10.2.0-10.4.99',
            'rte_ckeditor' => '10.2.0-10.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Meercad\\MeercadHelp\\' => 'Classes',
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

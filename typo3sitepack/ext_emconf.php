<?php

/**
 * Extension Manager/Repository config file for ext "typo3sitepack".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'typo3sitepack',
    'description' => 'First site pack',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Pits\\Typo3sitepack\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Jobin',
    'author_email' => 'jobin.by@pitsolutions.com',
    'author_company' => 'PITS',
    'version' => '1.0.0',
];

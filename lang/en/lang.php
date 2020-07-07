<?php

return [
    'plugin' => [
        'name' => 'Base',
        'description' => 'Base plugin for websites created by codeclutch',
        'author' => 'codeclutch',
        'model' => [
            'information' => 'Page information',
            'title' => 'Page title',
            'logo' => 'Logo',
            'icon' => 'Icon',
            'meta' => 'Meta tags',
            'description' => 'Page description',
            'keywords' => 'Keywords',
            'color' => 'Main color',
            'copyright' => 'Copyright',
            'link' => 'Link',
            'author_logo' => 'Author logo',
            'author' => 'Author',
            'keywords_placeholder' => 'write, after, commas',
            'meta_title' => 'Meta title',
        ],
        'components' => [
            'logo' => [
                'name' => 'Logo',
                'description' => 'Displays logo',
                'height' => [
                    'name' => 'Height',
                    'description' => 'Height of logo',
                ],
                'width' => [
                    'name' => 'Width',
                    'description' => 'Width of logo',
                ]
            ],
            'head' => [
                'name' => 'Head',
                'description' => 'Fills <head>'
            ],
            'signature' => [
                'name' => 'Signature',
                'description' => 'Displays signature of website authors',
                'text' => [
                    'name' => 'Signature text',
                    'description' => 'Content of signature',
                ]
            ]
        ]
    ]
];

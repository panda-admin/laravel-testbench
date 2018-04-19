<?php

return [
    'articles' => [
        'label' => 'Articles',
        'model'=> '\\App\\Article',
        'fields'=> [
            'title'=> [
                'label' => 'Title',
                'type' => 'text',
                'required' => true
            ],
            'content' => [
                'label' => 'Content',
                'type' => 'html'
            ],
            'cover' => [
                'label' => 'Cover',
                'type' => 'image'
            ]
        ]
    ],
    'pages' => [
        'label' => 'Pages',
        'model'=> '\\App\\Page',
        'fields'=> [
            'title'=> [
                'label' => 'Title',
                'type' => 'text',
                'required' => true
            ],
            'content' => [
                'label' => 'Content',
                'type' => 'html'
            ],
            'cover' => [
                'label' => 'Cover',
                'type' => 'image'
            ]
        ]
    ]
];
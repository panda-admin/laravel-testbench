<?php

use App\Articles;

return [
    'articles' => [
        'label' => 'Articles',
        'model'=> Articles::class,
        'fields'=> [
            'title'=> [
                'label'=> 'Title',
                'type' => 'text'
            ],
            'content'=> [
                'label'=> 'Content',
                'type'=> 'html'
            ],
            'cover'=> [
                'label'=> 'Cover',
                'type'=> 'image'
            ]
        ]
    ]
];
<?php

return [
    'articles' => [
        'label' => 'Articles',
        'model'=> 'App\\Articles',
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
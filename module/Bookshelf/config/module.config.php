<?php
return [
    'router' => [
        'routes' => [
            'bookshelf.rest.doctrine.album' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/album[/:album_id]',
                    'defaults' => [
                        'controller' => 'Bookshelf\\V1\\Rest\\Album\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'bookshelf.rest.doctrine.album',
        ],
    ],
    'zf-rest' => [
        'Bookshelf\\V1\\Rest\\Album\\Controller' => [
            'listener' => \Bookshelf\V1\Rest\Album\AlbumResource::class,
            'route_name' => 'bookshelf.rest.doctrine.album',
            'route_identifier_name' => 'album_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'album',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Application\Entity\Album::class,
            'collection_class' => \Bookshelf\V1\Rest\Album\AlbumCollection::class,
            'service_name' => 'Album',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'Bookshelf\\V1\\Rest\\Album\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Bookshelf\\V1\\Rest\\Album\\Controller' => [
                0 => 'application/vnd.bookshelf.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Bookshelf\\V1\\Rest\\Album\\Controller' => [
                0 => 'application/vnd.bookshelf.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \Application\Entity\Album::class => [
                'route_identifier_name' => 'album_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'bookshelf.rest.doctrine.album',
                'hydrator' => 'Bookshelf\\V1\\Rest\\Album\\AlbumHydrator',
            ],
            \Bookshelf\V1\Rest\Album\AlbumCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'bookshelf.rest.doctrine.album',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'doctrine-connected' => [
            \Bookshelf\V1\Rest\Album\AlbumResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Bookshelf\\V1\\Rest\\Album\\AlbumHydrator',
            ],
        ],
    ],
    'doctrine-hydrator' => [
        'Bookshelf\\V1\\Rest\\Album\\AlbumHydrator' => [
            'entity_class' => \Application\Entity\Album::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
    ],
    'zf-content-validation' => [
        'Bookshelf\\V1\\Rest\\Album\\Controller' => [
            'input_filter' => 'Bookshelf\\V1\\Rest\\Album\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'Bookshelf\\V1\\Rest\\Album\\Validator' => [
            0 => [
                'name' => 'name',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [],
            ],
            1 => [
                'name' => 'createdAt',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
        ],
    ],
];

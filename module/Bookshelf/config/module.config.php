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
            'bookshelf.rest.doctrine.author' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/author[/:author_id]',
                    'defaults' => [
                        'controller' => 'Bookshelf\\V1\\Rest\\Author\\Controller',
                    ],
                ],
            ],
            'bookshelf.rest.doctrine.book' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/book[/:book_id]',
                    'defaults' => [
                        'controller' => 'Bookshelf\\V1\\Rest\\Book\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'bookshelf.rest.doctrine.album',
            1 => 'bookshelf.rest.doctrine.author',
            2 => 'bookshelf.rest.doctrine.book',
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
        'Bookshelf\\V1\\Rest\\Author\\Controller' => [
            'listener' => \Bookshelf\V1\Rest\Author\AuthorResource::class,
            'route_name' => 'bookshelf.rest.doctrine.author',
            'route_identifier_name' => 'author_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'author',
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
            'entity_class' => \Application\Entity\Author::class,
            'collection_class' => \Bookshelf\V1\Rest\Author\AuthorCollection::class,
            'service_name' => 'Author',
        ],
        'Bookshelf\\V1\\Rest\\Book\\Controller' => [
            'listener' => \Bookshelf\V1\Rest\Book\BookResource::class,
            'route_name' => 'bookshelf.rest.doctrine.book',
            'route_identifier_name' => 'book_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'book',
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
            'entity_class' => \Application\Entity\Book::class,
            'collection_class' => \Bookshelf\V1\Rest\Book\BookCollection::class,
            'service_name' => 'Book',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'Bookshelf\\V1\\Rest\\Album\\Controller' => 'HalJson',
            'Bookshelf\\V1\\Rest\\Author\\Controller' => 'HalJson',
            'Bookshelf\\V1\\Rest\\Book\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Bookshelf\\V1\\Rest\\Album\\Controller' => [
                0 => 'application/vnd.bookshelf.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Bookshelf\\V1\\Rest\\Author\\Controller' => [
                0 => 'application/vnd.bookshelf.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Bookshelf\\V1\\Rest\\Book\\Controller' => [
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
            'Bookshelf\\V1\\Rest\\Author\\Controller' => [
                0 => 'application/vnd.bookshelf.v1+json',
                1 => 'application/json',
            ],
            'Bookshelf\\V1\\Rest\\Book\\Controller' => [
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
            \Application\Entity\Author::class => [
                'route_identifier_name' => 'author_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'bookshelf.rest.doctrine.author',
                'hydrator' => 'Bookshelf\\V1\\Rest\\Author\\AuthorHydrator',
            ],
            \Bookshelf\V1\Rest\Author\AuthorCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'bookshelf.rest.doctrine.author',
                'is_collection' => true,
            ],
            \Application\Entity\Book::class => [
                'route_identifier_name' => 'book_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'bookshelf.rest.doctrine.book',
                'hydrator' => 'Bookshelf\\V1\\Rest\\Book\\BookHydrator',
            ],
            \Bookshelf\V1\Rest\Book\BookCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'bookshelf.rest.doctrine.book',
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
            \Bookshelf\V1\Rest\Author\AuthorResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Bookshelf\\V1\\Rest\\Author\\AuthorHydrator',
            ],
            \Bookshelf\V1\Rest\Book\BookResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Bookshelf\\V1\\Rest\\Book\\BookHydrator',
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
        'Bookshelf\\V1\\Rest\\Author\\AuthorHydrator' => [
            'entity_class' => \Application\Entity\Author::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'Bookshelf\\V1\\Rest\\Book\\BookHydrator' => [
            'entity_class' => \Application\Entity\Book::class,
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
        'Bookshelf\\V1\\Rest\\Author\\Controller' => [
            'input_filter' => 'Bookshelf\\V1\\Rest\\Author\\Validator',
        ],
        'Bookshelf\\V1\\Rest\\Book\\Controller' => [
            'input_filter' => 'Bookshelf\\V1\\Rest\\Book\\Validator',
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
        'Bookshelf\\V1\\Rest\\Author\\Validator' => [
            0 => [
                'name' => 'name',
                'required' => true,
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
                'name' => 'stationery',
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
            2 => [
                'name' => 'createdAt',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
        ],
        'Bookshelf\\V1\\Rest\\Book\\Validator' => [
            0 => [
                'name' => 'title',
                'required' => true,
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

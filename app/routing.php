<?php
/**
 * Created by PhpStorm.
 * User: wilder14
 * Date: 02/10/18
 * Time: 10:10
 */

// routing.php
$routes = [
    'Item' => [ // Controller
        ['index', '/', 'GET'], // action, url, HTTP method
        ['show', '/item/{id}', 'GET'], // action, url, HTTP method
    ],

        'Category' => [ // Controller
            ['index', '/categories', 'GET'], // action, url, HTTP method
            ['show', '/category/{id}', 'GET'], // action, url, HTTP method
        ],
];

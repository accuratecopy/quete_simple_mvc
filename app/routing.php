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
        ['index', '/', 'GET'], // action, url, method
        ['add', '/item/add', ['GET', 'POST']], // action, url, method
        ['edit', '/item/edit/{id:\d+}', ['GET', 'POST']], // action, url, method
        ['show', '/item/{id:\d+}', 'GET'], // action, url, method
        ['delete', '/item/delete/{id:\d+}', 'GET'], // action, url, method
    ],

        'Category' => [ // Controller
            ['index', '/categories', 'GET'], // action, url, HTTP method
            ['show', '/category/{id}', 'GET'], // action, url, HTTP method
        ],
];

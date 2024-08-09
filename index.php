<?php

require_once __DIR__ . '/controllers/ProductController.php';

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

if ($method === 'GET') {
    switch ($uri) {
        case '/produto':
            $controller = new ProductController();
            $controller->list();
            break;
    }
}
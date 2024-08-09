<?php

require_once __DIR__ . '/../helpers/ProductHelper.php';

class ProductController 
{
    public function list(): void
    {
        $products = (new ProductHelper())->list();
        require_once __DIR__ . '/../views/products/index.php';
    }
}
<?php

require_once __DIR__ . '/../models/Product.php';

class ProductHelper 
{
    /**
     * @return Product[]
     */
    public function list(): array
    {
        $url = 'http://makeup-api.herokuapp.com/api/v1/products.json';
        $ch = \curl_init($url);
        \curl_setopt_array($ch, [
            \CURLOPT_CUSTOMREQUEST => 'GET',
            \CURLOPT_RETURNTRANSFER => 1,
        ]);

        $response = \json_decode(\curl_exec($ch), true);
        \curl_close($ch);

        $products = [];
        foreach ($response as $product) {
            $products[] = new Product(
                $product['id'],
                $product['name'],
                $product['description'],
                $product['price'],
                null,
                $product['product_colors'],
                $product['api_featured_image'],
            );
        }
        return $products;
    }
}
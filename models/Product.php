<?php

class Product
{
    public readonly ?string $image;

    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly ?string $description,
        public readonly ?float $price,
        public readonly ?string $sizes,
        public readonly array $colors,
        ?string $image,
    ) {
        $this->image = $this->normalizeImage($image);
    }
    
    private function normalizeImage(?string $image): ?string
    {
        if ($image === null) {
            return null;
        }
        return 'http:' . $image;
    }
}

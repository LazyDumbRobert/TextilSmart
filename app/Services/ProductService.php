<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    private static ?ProductService $instance = null;

    private function __construct()
    {
        // Inicialización, si es necesario
    }

    public static function getInstance(): ProductService
    {
        if (self::$instance === null) {
            self::$instance = new ProductService();
        }

        return self::$instance;
    }

    public function create(array $data): Product
    {
        return Product::create($data);
    }

    public function read(int $id): ?Product
    {
        return Product::find($id);
    }

    public function update(int $id, array $data): ?Product
    {
        $product = $this->read($id);
        if ($product) {
            $product->update($data);
            return $product;
        }
        return null;
    }

    public function delete(int $id): bool
    {
        $product = $this->read($id);
        if ($product) {
            return $product->delete();
        }
        return false;
    }

    public function getAll(): \Illuminate\Database\Eloquent\Collection
    {
        return Product::all();
    }
}

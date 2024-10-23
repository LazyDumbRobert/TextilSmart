<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Producto;

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

    public function create(array $data): Producto
    {
        return Producto::create($data);
    }

    public function read(int $id): ?Producto
    {
        return Producto::find($id);
    }

    public function update(int $id, array $data): ?Producto
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
        return Producto::all();
    }
}

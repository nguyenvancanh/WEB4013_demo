<?php

namespace App\Http\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Http\Resources\Product as ProductResource;
use App\Repositories\Product\ProductRepositoryInterface;

class ProductService
{
    protected $productRepo;

    public function __construct(ProductRepositoryInterface $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    public function testCalculator()
    {
        
        $name = 'name' . '_' . 'abccb';
        $products = $this->productRepo->getProduct($name);

        $data = [
            'status' => true,
            'message' => 'Get list data success!!',
            'data' => $products,
        ];

        return $data;
    }
}
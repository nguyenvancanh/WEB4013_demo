<?php
namespace App\Repositories\Product;

use App\Repositories\BaseRepository;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\Product::class;
    }

    public function getProduct($name)
    {
        return $this->model
            ->where('name', $name)
            ->select('price')
            ->take(2)
            ->get();
    }
}

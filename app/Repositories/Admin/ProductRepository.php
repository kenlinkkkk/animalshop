<?php


namespace App\Repositories\Admin;


use App\Models\Product;
use App\Repositories\EloquentRepository;

class ProductRepository extends EloquentRepository
{

    /**
     * @inheritDoc
     */
    public function getModel()
    {
        return Product::class;
    }
}

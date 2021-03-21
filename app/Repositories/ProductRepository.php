<?php

namespace App\Repositories;

use App\Advertisement;
use App\Models\Product;
use App\Repositories\Interfaces\AdvertisementRepositoryInterface;
use App\Repositories\Interfaces\ProductInterface;

class ProductRepository implements ProductInterface
{

    public function get($limit = 6)
    {

        return Product::take($limit)
            ->get();

    }

}

<?php

namespace App\Repositories\Interfaces;

use App\Models\Product;

interface ProductInterface
{
    public function get($location='store-left-section');
}

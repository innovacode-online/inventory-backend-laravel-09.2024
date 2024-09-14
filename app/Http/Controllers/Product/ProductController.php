<?php

namespace App\Http\Controllers\Product;


use App\Models\Product;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;

class ProductController extends Controller
{

    use DisableAuthorization;

    protected $model = Product::class;


}

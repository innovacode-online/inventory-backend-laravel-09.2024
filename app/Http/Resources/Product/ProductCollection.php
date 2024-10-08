<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Orion\Http\Resources\CollectionResource;

// class ProductCollection extends ResourceCollection
class ProductCollection extends CollectionResource
{


    public static $wrap = "products";


    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}

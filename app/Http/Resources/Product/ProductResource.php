<?php

namespace App\Http\Resources\Product;

use App\Http\Resources\Category\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Orion\Http\Resources\Resource;

// class ProductResource extends JsonResource
class ProductResource extends Resource
{

    public static $wrap = "product";

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        $category = Category::find($this->category_id);


        return [
            "id" => $this->id,
            "name" => $this->name,
            "slug" => $this->slug,
            "price" => $this->price,
            "image" => $this->image,
            "category" => [
                "id" => $category->id,
                "name" => $category->name,
                "slug" => $category->slug,
            ], 
            "createdAt" => $this->created_at,
            "updatedAt" => $this->updated_at,
        ];
    }
}

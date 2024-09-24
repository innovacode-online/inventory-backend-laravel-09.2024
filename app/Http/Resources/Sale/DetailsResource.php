<?php

namespace App\Http\Resources\Sale;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DetailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "productId" => $this->id,
            "productName" => $this->pivot->productName,
            "productPrice" => $this->pivot->productPrice,
            "productImage" => $this->image,
            "productSlug" => $this->slug,
            
            "quantity" => $this->pivot->quantity,
            "subTotal" => $this->pivot->subTotal,

        ];
    }
}

<?php

namespace App\Http\Resources\Sale;

use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SaleResource extends JsonResource
{

    public static $wrap = "sale";

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        $details = Sale::find( $this->id )->products;

        return [
            "id" => $this->id,
            "clientName" => $this->clientName,
            "user" => [
                "id" => $this->user_id,
                "name" => $this->userName,
                "email" => $this->userEmail,
            ],
            "details" => new DetailsCollection( $details),
            "total" => $this->total,
            "createdAt" => $this->created_at 
        
        ];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'clientName',
        'userName',
        'userEmail',
        'user_id',
        'total',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, "sale_details")
            ->withPivot(["quantity", "subTotal", "productName", "productPrice"]);
    }

}

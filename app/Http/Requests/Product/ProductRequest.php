<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use Orion\Http\Requests\Request;

class ProductRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function storeRules(): array
    {
        return [
            "name" => "required|unique:products,name",
            "category_id" => "required|exists:categories,id",
            "slug" => "nullable",
            "stock" => "required|integer",
            "price" => "required|decimal:0,2"
        ];
    }

    public function updateRules(): array
    {
        return [
            "name" => "unique:products,name",
            "category_id" => "exists:categories,id",
            "slug" => "nullable",
            "stock" => "integer",
            "price" => "decimal:0,2"
        ];
    }


    public function storeMessages(): array
    {
        return [
            "name.required" => "El nombre es obligatorio",
            "name.unique" => "El nombre ya esta registrado",
            "category_id.required" => "Debe asignar una categoria",
            "category_id.exists" => "La categoria no existe",
            "stock.required" => "Debe agregar un stock",
            "stock.integer" => "El stock debe ser un numero entero",
            "price.required" => "El precio es obligatorio",
            "price.decimal" => "Debe tener entre 0 a 2 decimales",
        ];
    }

    public function updateMessages(): array
    {
        return [];
    }


    // /**
    //  * Get the validation rules that apply to the request.
    //  *
    //  * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
    //  */
    // public function rules(): array
    // {
    //     return [
    //         //
    //     ];
    // }
}

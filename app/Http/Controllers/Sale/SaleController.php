<?php

namespace App\Http\Controllers\Sale;

use App\Http\Controllers\Controller;
use App\Http\Resources\Sale\SaleCollection;
use App\Http\Resources\Sale\SaleResource;
use App\Models\Product;
use App\Models\Sale;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new SaleCollection(Sale::orderBy("created_at", "desc")->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // GENERAR LA VENTA
        $sale = new Sale();

        $sale->clientName = $request->clientName;
        $sale->userName = $request->userName;
        $sale->userEmail = $request->userEmail;
        $sale->user_id = $request->user_id;
        $sale->total = $request->total;

        $sale->save();


        // OBTENER LOS DETALLES DE LA VENTA
        $details = [];
        $products = $request->details;
        
        foreach( $products as $product )
        {
            $details[] = [
                "sale_id" => $sale->id,
                ...$product,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ];
            
            // Validar el Stock
            $productUpdated = Product::find( $product["product_id"]  );

            if( $product["quantity"] > $productUpdated["stock"] )
            {
                $sale->delete();

                return response()->json([
                    "message" => "Stock insuficiente"
                ], 400);

            }

            // Actualizar Stock del producto
            $productUpdated["stock"] -= $product["quantity"];
            // $productUpdated["stock"] =  $productUpdated["stock"] - $product["quantity"];
            $productUpdated->update();
        }

        // GUARDAR LOS DETALLES
        DB::table("sale_details")->insert($details);

        return response()->json([
            "message" => "Venta registrada con exito"
        ], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sale = Sale::find( $id );
        return new SaleResource($sale);
    }
}

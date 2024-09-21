<?php

namespace App\Http\Controllers\Sale;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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


        return response()->json([
            "venta" => $request->all()
        ]);



        // OBTENER LOS DETALLES DE LA VENTA
            // Validar el Stock

            // Actualizar Stock del producto

        // GUARDAR LOS DETALLES



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        return Stock::all();
    }

    public function store(Request $request)
    {
        $stock = Stock::create($request->all());
        return response()->json($stock, 201);
    }

    public function show(Stock $stock)
    {
        return $stock;
    }

    public function update(Request $request, Stock $stock)
    {
        $stock->update($request->all());
        return response()->json($stock);
    }

    public function destroy(Stock $stock)
    {
        $stock->delete();
        return response()->noContent();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Fault;
use Illuminate\Http\Request;

class FaultController extends Controller
{
    public function index()
    {
        return Fault::all();
    }

    public function store(Request $request)
    {
        $fault = Fault::create($request->all());
        return response()->json($fault, 201);
    }

    public function show(Fault $fault)
    {
        return $fault;
    }

    public function update(Request $request, Fault $fault)
    {
        $fault->update($request->all());
        return response()->json($fault);
    }

    public function destroy(Fault $fault)
    {
        $fault->delete();
        return response()->noContent();
    }
}

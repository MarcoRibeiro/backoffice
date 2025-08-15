<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index()
    {
        return Equipment::all();
    }

    public function store(Request $request)
    {
        $equipment = Equipment::create($request->all());
        return response()->json($equipment, 201);
    }

    public function show(Equipment $equipment)
    {
        return $equipment;
    }

    public function update(Request $request, Equipment $equipment)
    {
        $equipment->update($request->all());
        return response()->json($equipment);
    }

    public function destroy(Equipment $equipment)
    {
        $equipment->delete();
        return response()->noContent();
    }
}

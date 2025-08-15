<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        return Status::all();
    }

    public function store(Request $request)
    {
        $status = Status::create($request->all());
        return response()->json($status, 201);
    }

    public function show(Status $status)
    {
        return $status;
    }

    public function update(Request $request, Status $status)
    {
        $status->update($request->all());
        return response()->json($status);
    }

    public function destroy(Status $status)
    {
        $status->delete();
        return response()->noContent();
    }
}

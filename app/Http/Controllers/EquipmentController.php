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
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric',
        ]);

        $equipment = Equipment::create($request->all());
        return response()->json($equipment, 201);
    }

    public function show(Equipment $equipment)
    {
        return $equipment;
    }

    public function update(Request $request, Equipment $equipment)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric',
        ]);

        $equipment->update($request->all());
        return response()->json($equipment, 200);
    }

    public function destroy(Equipment $equipment)
    {
        $equipment->delete();
        return response()->json(null, 204);
    }
}

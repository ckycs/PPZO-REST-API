<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(People::all());
    }

    public function show($id): JsonResponse
    {
        $person = People::find($id);
    
        if (!$person) {
            return response()->json(['message' => 'Person not found'], 404);
        }
    
        return response()->json($person);
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone_number' => 'required|string',
            'street' => 'required|string',
            'city' => 'required|string',
        ]);

        $person = People::create($data);

        return response()->json($person, 201);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $data = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone_number' => 'required|string',
            'street' => 'required|string',
            'city' => 'required|string',
        ]);

        $person = People::find($id);

        if (!$person) {
            return response()->json(['message' => 'Person not found'], 404);
        }

        $person->update($data);

        return response()->json($person);
    }

    public function destroy($id): JsonResponse
{
    $person = People::find($id);

    if (!$person) {
        return response()->json(['message' => 'Person not found'], 404);
    }

    $person->delete();

    return response()->json(['message' => 'Person deleted'], 200);
}
}

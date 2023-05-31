<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
        public function create(Request $request)
        {
        }
    
        public function show($id)
        {
        }
    
        public function update(Request $request, $id)
        {
        }
    
        public function destroy($id)
        {
        }
    
        public function index()
        {
            $records = Example::all();
    
            return response()->json($records);
        }
}
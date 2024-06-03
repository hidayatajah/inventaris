<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
      $data = product::get();
      return view('index', compact('data'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:225',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        $product = product::create($validated);
        return response()->json($product, 201);
    }

        public function show(Product $product)
        {
            return response()->json($product, 200);
        }

        public function update(Request $request, Product $product)
        {
            $validated = $request->validate([
                'name' => 'required|max:225',
                'description' => 'required',
                'price' => 'required|numeric',
            ]);
            $product->update($validated);
            return response()->json($product, 200);
        }

        public function destroy(Product $product)
        {
            $product->delete();
            return response('Deleted', 200);
        }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return response()->json([
            'status'=> 'success',
            'data'=> $products
        ]);
    } 
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'img' => $request->input('img')
            ]);
            return response()->json([
            'status' => 'success',
            'data' => $products
            ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = Product::find($id);
        if($products) {
            return response()->json([
                'status' => 'success',
                'data' => $products
            ]);
        }else {
            return response()->json([
            'status' => 'error',
            'message'=> 'Product not found'
        ], 404); 
        }   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $products = Product::find($id);
        if ($products) {
            $products->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'img' => $request->input('img')

            ]);
            return response()->json([
            'status' => 'success',
            'data' => $products
            ]);
            } else {
            return response()->json([
            'status' => 'error',
            'message' => 'Product not found'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = Product::find($id);
        if ($products) {
            $products->delete();
            return response()->json([
            'status' => 'success',
            'message' => 'Product deleted successfully'
            ]);
            } else {
            return response()->json([
            'status' => 'error',
            'message' => 'Product not found'
            ], 404);
        }
    }
}


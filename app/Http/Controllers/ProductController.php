<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Product::all();
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'file'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name'     => 'required',
            'description'   => 'required',
            'price'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload file
        $file = $request->file('file');
        $file->storeAs('public/products', $file->hashName());

        return Product::create([
            'file' => $file->hashName(),
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return $product;
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required',
            'description'   => 'required',
            'price'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $product = Product::find($id);
        //check if image is not empty
        if ($request->hasFile('file')) {

            //upload image
            $file = $request->file('file');
            $file->storeAs('public/products', $file->hashName());

            //delete old image
            Storage::delete('public/products/' . basename($product->file));

            //update product with new image
            $product->update([
                'file' => $file->hashName(),
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price
            ]);
        } else {

            //update product without image
            $product->update([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price
            ]);
        }

        return $product;
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //delete image
        Storage::delete('public/products/' . basename($product->file));

        $product->delete();

        return response()->json(['message' => 'Product deleted successfully']);
    }
}

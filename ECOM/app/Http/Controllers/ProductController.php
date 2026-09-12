<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $products = Product::where('name', 'like', '%' . $search . '%')->paginate(5);
        return view('index', compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|min:1',
            'quntity' => 'required|integer|min:0',
            'status' => 'required|in:STOCKIN,NOSTOCK,OUTOFSTOCK',
        ]);
        $products = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'quntity' => $request->quntity,
            'status' => $request->status
        ];
        Product::create($products);
        return redirect()->route("products.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = Product::find($id);
        return view("Update", compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $products = Product::find($id);
        $products->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'quntity' => $request->quntity,
            'status' => $request->status
        ]);
        return redirect()->route("products.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect()->route("products.index");
    }
}

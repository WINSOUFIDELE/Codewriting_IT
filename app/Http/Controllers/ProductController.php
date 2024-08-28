<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
{
    $products = Product::all();
    return view('product.index', compact('products'));
}

//Methode New
public function new(Request $request)
{
    if ($request->isMethod('post')) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'priceHt' => 'required|numeric',
        ]);

        $data['creationDate'] = now();
        $data['dateUpdate'] = null;

        Product::create($data);
        return redirect('/product');
    }

    return view('product.new');
}

//Methode edite
public function edit(Request $request, $id)
{
    $product = Product::findOrFail($id);

    if ($request->isMethod('post')) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'priceHt' => 'required|numeric',
        ]);

        $data['dateUpdate'] = now();

        $product->update($data);
        return redirect('/product');
    }

    return view('product.edit', compact('product'));
}

public function delete($id)
{
    Product::destroy($id);
    return redirect('/product');
}


}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $products = Product::all();

        return view('products',compact('products'));
    }

    public function show($id) {
        $product = Product::find($id);

        return view('products.show',compact('product'));
    }

    public function createProduct() {
    return view("products.create");
    }

    public function insertProduct(Request $request) {
        Product::create([
            'name' => $request->name,
            'amount' => $request->amount
        ]);
        return  redirect('/products');
    }

    public function editProduct($id)
    {
        $product = Product::find($id);

        return view('products.edit',compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {
     Product::find($id)->update([
        'name' => $request->name,
        'amount' => $request->amount
     ]);
      return  redirect('/products');
    }

    public function deleteProduct($id){
        Product::destroy($id);

      return  redirect('/products');
    }
}

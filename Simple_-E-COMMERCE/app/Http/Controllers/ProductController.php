<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    private $products, $product;
    public function index()
    {
        return view('admin.product.index');
    }
    public function manage()
    {
        $this->products = Product::all();
        return view('admin.product.manage', ['products'=>$this->products]);
    }

    public function create(Request $request)
    {
        Product::createProduct($request);
        return redirect('/admin/product/manage')->with('message', 'New Product Added Successfully');
    }
    public function edit($id)
    {
        $this->product = Product::find($id);
        return view('admin.product.edit', ['product'=>$this->product]);
    }
    public function update(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        return redirect('/admin/product/manage')->with('message', 'Product Updated Successfully');
    }
    public function delete($id)
    {
        Product::deleteProduct($id);
        return redirect('/admin/product/manage')->with('message2', 'Product Deleted Successfully');
    }
}

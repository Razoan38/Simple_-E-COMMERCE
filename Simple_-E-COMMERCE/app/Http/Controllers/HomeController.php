<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class HomeController extends Controller
{
    private $products, $product;
    public function index()
    {
        $this->products = Product::all();
        return view('website.home.index',['products'=>$this->products]);
    }
    public function details($id)
    {
        $this->product = Product::find($id);
        return view('website.home.details',['product'=>$this->product]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $products = Product::all();

            return view('product', ['products' => $products]);
        }
    }
    public function categoryIndex($categoryid)
    {
        $category = Category::find($categoryid);
        foreach ($category->products as $product) {
                    var_dump($product);
                }        
    }
}

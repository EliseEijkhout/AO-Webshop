<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;


class CategoryController extends Controller
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

            $categories = Category::all();

            return view('category', ['categories' => $categories]);
        }
    }
}

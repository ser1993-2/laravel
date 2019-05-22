<?php

namespace App\Http\Controllers;

use App\page;
use App\product;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getPage(Request $request)
    {
        $page = page::getPage($request->id);

        return view('page', ['page' => $page]);
    }

    public function admin(Request $request)
    {

        $pages = page::getPages();
        $products = product::getProducts();

        return view('admin', ['pageList' => $pages , 'products' => $products]);
    }

    public function addPage(Request $request)
    {

       page::addPage($request->input('title'),$request->input('text'));

       $pages = page::getPages();
       $products = product::getProducts();

       return view('admin', ['pageList' => $pages , 'products' => $products]);
    }

    public function getProduct(Request $request)
    {

        $product = product::getProduct($request->id);

        return view('product', ['product' => $product]);
    }

}

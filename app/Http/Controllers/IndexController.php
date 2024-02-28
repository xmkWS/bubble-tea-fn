<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {

        return view('pages.index');

    }

    public function catalog(Request $request) {

        $categories = Category::all();

        $data = $request->all();

        if(isset($data['category'])) {

            $category_id = $data['category'];

            $products = Product::query()->where('category_id', $category_id)->get();

        } else {

            $products = Product::all();

        }

        return view('pages.catalog', compact('categories', 'products'));

    }

    public function admin() {

//        if(!auth()->user() || auth()->user()->role_id !== 2) {
//            abort(403);
//        }

        // $categories = Category::query()->get();

        $categories = Category::all();

        $products = Product::all();

        // return view('pages.admin', ['categories' => $categories]);

        // return view('pages.admin', [$categories]);

        return view('pages.admin', compact('categories', 'products'));

    }
}
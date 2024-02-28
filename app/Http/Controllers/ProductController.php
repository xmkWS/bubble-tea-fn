<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function create() {

        $categories = Category::all();

        return view('pages.product.create', compact('categories'));

    }

    public function store(StoreRequest $request) {

        $data = $request->validated();

        if($request->hasFile('path')) {

            $data['path'] = $request->file('path')->store('public/products');

            Product::query()->create($data);

        }

        return redirect()->route('index.admin');

    }

    public function destroy(Product $product) {

        $product->delete();

//        if(Storage::exists($product->path)) {
//            \Storage::delete($product->path);
//        }

        return redirect()->route('index.admin');

    }

    public function edit(Product $product) {

        $categories = Category::all();

        return view('pages.product.edit', compact('product', 'categories'));

    }

    public function update(Product $product, UpdateRequest $request) {

        $data = $request->validated();

        if($request->hasFile('path')) {

            $data['path'] = $request->file('path')->store('public/products');

//            if(Storage::exists($product->path)) {
//                \Storage::delete($product->path);
//            }

        }

        $product->update($data);

        return redirect()->route('index.admin');

    }

}
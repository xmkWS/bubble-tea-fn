<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

//    public function __construct()
//    {
//        if(!auth()->user() || auth()->user()->role_id !== 2) {
//            abort(403);
//        }
//    }

    public function create() {

        return view('pages.category.create');

    }

    public function store(StoreRequest $request) {

        $data = $request->validated();

        Category::query()->create($data);

        return redirect()->route('index.admin');

    }

    // $id
    public function destroy(Category $category) {

        // $category = Category::query()->find($ids);

        $category->delete();

        return redirect()->route('index.admin');

    }

    public function edit(Category $category) {

        return view('pages.category.edit', compact('category'));

    }

    public function update(Category $category, UpdateRequest $updateRequest) {

        $data = $updateRequest->validated();

        $category->update($data);

        return redirect()->route('index.admin');

    }
}
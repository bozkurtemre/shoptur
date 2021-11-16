<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Repositories\Admin\CategoryRepository;

class CategoryController extends Controller
{
    public $category;

    public function __construct(CategoryRepository $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        return view('admin.store.category.categories', ['categories' => $this->category->index()]);
    }

    public function create()
    {
        //
    }

    public function store(CategoryRequest $request)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('admin.store.category.category-edit', ['category' => $category, 'categories' => $this->category->index()]);
    }

    public function update(CategoryRequest $request, Category $category)
    {
        //
    }

    public function status(Category $category)
    {
        //
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json(['status' => true, 'message' => 'Kategori başarıyla silindi'], 200);
    }

    public function test(Request $request)
    {
        dd($request);
    }
}

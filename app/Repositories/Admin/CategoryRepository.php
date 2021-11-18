<?php

namespace App\Repositories\Admin;

use App\Models\Category;

class CategoryRepository
{
    public $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        return $this->category->get();
    }

    public function store($request)
    {
        return $this->category->create($request->all());
    }

    public function update($request, $category)
    {
        return $category->update($request->all());
    }

    public function success($message)
    {
        return toastr()->success($message, 'Sistem');
    }
}

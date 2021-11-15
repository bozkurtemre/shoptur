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
        //
    }

    public function update($request, $category)
    {
        //
    }
}

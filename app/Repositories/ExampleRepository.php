<?php

namespace App\Repositories;

use App\Models\Example;

class ExampleRepository
{
    public $example;

    public function __construct(Example $example)
    {
        $this->example = $example;
    }

    public function index()
    {
        //
    }

    public function store($request)
    {
        //
    }

    public function update($request, $example)
    {
        //
    }
}

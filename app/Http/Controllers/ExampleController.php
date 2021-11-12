<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExampleRequest;
use App\Models\Example;
use App\Repositories\ExampleRepository;

class ExampleController extends Controller
{
    public $example;

    public function __construct(ExampleRepository $example)
    {
        $this->example = $example;
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(ExampleRequest $request)
    {
        //
    }

    public function edit(Example $example)
    {
        //
    }

    public function update(ExampleRequest $request, Example $example)
    {
        //
    }

    public function destroy(Example $example)
    {
        //
    }
}

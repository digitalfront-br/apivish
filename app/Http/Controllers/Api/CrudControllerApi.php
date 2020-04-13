<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CrudControllerApi extends Controller
{
    protected $objeto;
    protected $resource;
    protected $resources;

    public function index()
    {
        return $this->resources::collection($this->objeto::paginate());
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        return new $this->resource($this->objeto::findOrFail($id));
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}

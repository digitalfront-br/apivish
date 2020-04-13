<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\TemaResource;
use App\Models\Tema;
use Illuminate\Http\Request;

class TemaControllerApi extends CrudControllerApi
{
    public function __construct()
    {
        $this->objeto = Tema::class;
        $this->resource =   TemaResource::class;
        $this->resources =   TemaResource::class;
    }
}

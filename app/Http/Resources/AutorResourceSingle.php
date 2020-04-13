<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AutorResourceSingle extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nome'  =>  $this->autor,
            'bio'    =>  $this->bio,
            'media' =>  [
                'img'   =>  [
                    'mini'  => $this->mini,
                    'capa'  =>  $this->capa
                ]
            ],
            'itens' =>  EntidadeResource::collection($this->entidades),
        ];
    }
}

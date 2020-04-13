<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EntidadeResourceSingle extends JsonResource
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
            'tipo'  =>  $this->tipo->nome,
            'titulo'    =>  $this->titulo,
            'content'   =>  $this->description,
            'media' =>  [
                'img'   =>  [
                    'mini'  => $this->mini,
                    'capa'  =>  $this->capa
                ],
                'video' => $this->video,
                'audio'    =>  $this->audio
            ]
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EntidadeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id' => $this->id,
            'tipo'  =>  $this->tipo->nome,
            'titulo'    =>  $this->titulo,
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

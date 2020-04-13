<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AutorResource extends JsonResource
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
            'media' =>  [
                'img'   =>  [
                    'mini'  => $this->mini,
                ]
            ]
        ];
    }
}

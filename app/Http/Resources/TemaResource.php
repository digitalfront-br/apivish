<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TemaResource extends JsonResource
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
        $objeto = EntidadeResource::collection($this->entidades->where('tipo_id',$request->tipo));
        return [
            'id'    =>  $this->id,
            'nome'  =>  $this->tema,
            $this->mergeWhen($request->has('tipo') && $request->tipo != 0 && $request->tipo <= 2 , [
                'itens' =>   $objeto,
            ])
        ];
    }
}

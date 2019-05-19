<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PropertyRessource extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id_property,
            'name' => $this->name_property,
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PropertyResource extends JsonResource
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
        'title' => $this->title,
        // 'path' => $this->path,
         'description' => $this->description,
         'logo' => $this->logo,
         'builder' => $this->builder->title,
        'created_at' => $this->created_at->diffForHumans()
      ];
    }
}

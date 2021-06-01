<?php

namespace App\Http\Resources;
use App\Http\Resources\RoomResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'title' => $this->title,
            'room' => RoomResource::collection($this->whenLoaded('room')),
            'description' => $this->description,
            'images' => $this->images,
        ];
    }
}

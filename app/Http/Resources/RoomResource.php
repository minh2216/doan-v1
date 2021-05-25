<?php

namespace App\Http\Resources;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Resources\Json\JsonResource;

class RoomResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $product = $this->WhenLoaded('product');
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'product_id' => new ProductResource($product),
            'price' => $this->price,
        ];
    }
}

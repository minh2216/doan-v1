<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'contact' => $this->contact,
            'email' => $this->email,
            'payment_method' => $this->payment_method,
            'transport_method' => $this->transport_method,
            'mobile' => $this->mobile,
            'total' => $this->total,
            'address' => $this->address,
        ];
    }
}

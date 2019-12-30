<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Location extends JsonResource
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
            'street' => $this->street,
            'postal' => $this->postal,
            'city' => $this->city,
            'country' => $this->country,
            'lat' => $this->lat,
            'lng' => $this->lng,
        ];
    }
}

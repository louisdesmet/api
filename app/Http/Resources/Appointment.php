<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Appointment extends JsonResource
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
            'meeting_type' => $this->meeting_type,
            'start' => $this->start,
            'end' => $this->end,
            'subject' => new Subject($this->whenLoaded('subject')),
            'customer' => new Customer($this->whenLoaded('customer')),
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class apiresponse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name'=>$this->name,
            'city'=>$this->city,
            'sport_id'=>$this->sport_id,
            'image'=>$this->image,
            'image_url'=>asset('image/'.$this->image)

        ];

    }
}

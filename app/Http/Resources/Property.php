<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Property extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return  [
            'id' => $this->id,
            'ownerid' => $this->ownerid,
            'sagentid' => $this->sagentid,
            'name' => $this->name,
            'price' => $this->price,
            'type' => $this->type,
            'state' => $this->state,
            'city' => $this->city,
            'coverphoto' => $this->coverphoto,
            'address' => $this->address,
            'description' => $this->description,
            'interest' => $this->interest,
            'created_at' => (string)$this->created_at,
            ];
    }
}

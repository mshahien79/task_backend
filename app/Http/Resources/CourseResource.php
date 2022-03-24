<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'capacity' => $this->capacity,
            //using when to dispaly Available or Unavailable courses
            'active_reservations'=> $this->when($this->active_reservations >= $this->capacity,'Unavailable course','Available course'),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

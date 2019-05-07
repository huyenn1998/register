<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsersDangky extends JsonResource
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
            'username' => $this ->username,
            'password' => $this ->password,
            'email' => $this ->email,
            'tel' => $this ->tel,
            'address'=> $this ->address,
            'description'=> $this ->description
        ];
    }

}
<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{

    public static $counter = 0 ;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        self::$counter++;

        return [
            'No' => self::$counter,
            'id' => $this->id,
            'username' => $this->username,
            'password' => $this->password,
            'nia' => $this->nia,
            'telp' => '0'.$this->telp,
            'email' => $this->email,
            'ranting' => $this->ranting ?? 'Null',
            'cabang' => $this->cabang ?? 'Null',
            'role' => $this->role,
            'virified' => $this->verified,
        ];
    }
}

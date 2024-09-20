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
            'ranting' => $this->ranting ?? 'null',
            'cabang' => $this->cabang ?? 'null',
            'role' => $this->role,
            'virified' => $this->verified,
            'created_at' => $this->created_at,
            'deleted_at' => $this->deleted_at
        ];
    }
}

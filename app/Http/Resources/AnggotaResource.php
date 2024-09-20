<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AnggotaResource extends JsonResource
{
    private static $counter = 0;
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
            'number' => self::$counter, 
            'nama' => $this->nama,
            'nia' => $this->nia,
            'ttl' => $this->ttl,
            'alamat' => $this->alamat,
            'ranting' => $this->ranting,
            'cabang' => $this->cabang,
            'tingkatan' => $this->tingkatan
        ];
    }
}

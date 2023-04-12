<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
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
            'id' => $this->id,
            'product_name' => $this->name,
            'price' => $this->price . '$',
            'created_at' => $this->created_at ? $this->created_at->format('d/m/Y') : now()->format('d/m/Y'),
            'updated_at' => $this->updated_at ? $this->updated_at->format('d/m/Y') : now()->format('d/m/Y'),
        ];
    }
}

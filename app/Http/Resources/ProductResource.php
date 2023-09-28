<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\StockResource;
use App\Http\Resources\CategoryResource;
class ProductResource extends JsonResource
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
            'name' => $this->getTranslations('name'),
            'price' => $this->price,
            'description' => $this->getTranslations('description'),
            'category' => New CategoryResource($this->category),
            'stock' => StockResource::collection($this->stocks),
            'created_at' =>$this->created_at,
            'updated_at' =>$this->updated_at
        ];
    }
}

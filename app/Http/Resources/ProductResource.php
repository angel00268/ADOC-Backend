<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        if (is_null($this->resource)) {
            return [];
        }

        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'stock' => $this->stock,
            'model' => $this->model,
            'sizes' => $this->sizes ? json_decode($this->sizes) : [],
            'active' => $this->active,
            'colors' => $this->colors ? json_decode($this->colors) : [],
            'description' => $this->description,
            'created_at' => $this->created_at ? $this->created_at->format('d/m/Y h:i A') : null,
            'updated_at' => $this->updated_at ? $this->updated_at->format('d/m/Y h:i A') : null,
        ];
    }
}

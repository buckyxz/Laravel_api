<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'adi' => $this->adi,
            'miktar' => $this->miktar,
            'fiyat' => $this->fiyat,
            'renk' => $this->renk,
            'agirlik' => $this->agirlik,
            'created_at' => $this->created_at->format('d/m/Y H:i:s'),
        ];
    }
}
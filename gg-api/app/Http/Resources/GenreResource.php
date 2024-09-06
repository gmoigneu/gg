<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GenreResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'games' => GameResource::collection($this->whenLoaded('games')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

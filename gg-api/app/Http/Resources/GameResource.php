<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
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
            'title' => $this->title,
            'franchise' => $this->franchise,
            'release_year' => $this->release_year,
            'editor' => $this->editor,
            'igdb_id' => $this->igdb_id, // Added igdb_id
            'genres' => GenreResource::collection($this->whenLoaded('genres')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'position' => $this->position,
            'map' => $this->map,
            'screenshot' => $this->screenshot,
            'game_id' => $this->game_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'game' => $this->whenLoaded('game', fn () => GameResource::make($this->game)),
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AnimeResourse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name'=> $this->name,
            'genre'=> $this->genre,
            'type'=> $this->type,
            'episodes'=> $this->episodes,
            'rating'=> $this->rating,
            'members'=> $this->members,
        ];

    }

}

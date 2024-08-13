<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'type' => 'tickets',                    //What kind of resource is this? mostly will be the plural of the model name
            'id' => $this->id,                      //Unique identifier for the resource
            'attributes' => [                       //The attributes of the resource
                'title' => $this->title,
                'description' => $this->when($request->routeIs('tickets.show'), $this->description),
                'status' => $this->status,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ],
            'links' => [                            //Links to the resource
                'self' => route('tickets.show', $this->id),
            ],
            'relationships' => [                    //Relationships to other resources
                'author' => [
                    'links' => [
                        'self' => 'to do',
                        'related' => 'to do',
                    ],
                    'data' => [
                        'type' => 'users',
                        'id' => $this->user_id,
                    ],
                ],
            ],
        ];
    }
}

<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'type' => 'users',                    //What kind of resource is this? mostly will be the plural of the model name
            'id' => $this->id,                      //Unique identifier for the resource
            'attributes' => [                       //The attributes of the resource
                'name' => $this->name,
                'email' => $this->email
            ],
            'includes' => TicketResource::collection($this->whenLoaded('tickets')),
            'links' => [                            //Links to the resource
                'self' => route('users.show', $this->id),
            ],
        ];
    }
}

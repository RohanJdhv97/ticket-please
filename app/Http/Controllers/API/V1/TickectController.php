<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Filters\V1\TicketFilter;
use App\Models\Ticket;
use App\Http\Requests\API\V1\StoreTicketRequest;
use App\Http\Requests\API\V1\UpdateTicketRequest;
use App\Http\Resources\V1\TicketResource;

class TickectController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index(TicketFilter $filter)
    {
        if($this->include('author')){
            return TicketResource::collection(Ticket::filter($filter)->with('user')->paginate());
        }
        return TicketResource::collection(Ticket::filter($filter)->paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        if($this->include('author')){
            return new TicketResource($ticket->load('user'));
        }
        return new TicketResource($ticket);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketRequest $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}

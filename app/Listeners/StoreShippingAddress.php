<?php

namespace App\Listeners;

use App\Events\NewUserRegistered;
use App\ShippingAddress;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class StoreShippingAddress
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewUserRegistered $event
     * @return void
     */
    public function handle(NewUserRegistered $event)
    {
        ShippingAddress::create([
            'user_id' => $event->user->id,
            'city' => $event->data['city'],
            'street' => $event->data['street'],
            'building_details' => $event->data['building_details'],
            'zip' => $event->data['zip'],
            'landmark' => is_null($event->data['landmark']) ? 'none' : $event->data['landmark'],
            'phone' => $event->data['phone']
        ]);
    }
}

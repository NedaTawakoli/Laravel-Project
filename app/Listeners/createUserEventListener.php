<?php

namespace App\Listeners;

use App\Events\createUserEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
class createUserEventListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(createUserEvent $event): void
    {
        //
       $customer = $event->customer;
       $user = User::create([
       "name"=>$customer->name,
       "email"=>$customer->email,
       "password"=>bcrypt('1234'),
       "user_type"=>"customer",

       ]);
       echo $user;
       $customer->user_id = $user;
       $customer->save();
    }
}

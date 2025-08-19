<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use App\Mail\OrderCreatedMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendOrderCreatedEmail
{
    public function handle(OrderCreated $event): void
    {
        $order = $event->order;
        Mail::to($order->customer->email)
            ->queue(new OrderCreatedMail($order));
    }
}

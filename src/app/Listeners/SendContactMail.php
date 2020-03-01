<?php

namespace App\Listeners;

use App\Events\ContactSubmitted;
use App\Mail\ContactMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendContactMail
{
    /**
     * Handle the event.
     *
     * @param object $event
     * @return void
     */
    public function handle(ContactSubmitted $event)
    {
        $to = collect([
            'user' => [
                'name' => 'Connie',
                'email' => 'cgawrych@gmail.com',
            ]
        ]);
        Mail::to($to)
            ->send(new ContactMail($event->contact));
    }
}

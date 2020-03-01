<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Events\ContactSubmitted;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function create()
    {
        return view('contacts.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'phone' => 'phone:US,BE',
            'email' => 'email:rfc,dns',
        ]);

        $contact = Contact::create($attributes);

        event(new ContactSubmitted($contact));
    }
}

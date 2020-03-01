<?php

namespace App\Http\Controllers;

use App\Contact;
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
            'email' => 'filter',
        ]);

        $contact = Contact::create($attributes);

        event(new ContactSubmitted($contact));
    }
}

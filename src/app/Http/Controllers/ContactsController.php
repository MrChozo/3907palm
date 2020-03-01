<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function create()
    {
        return view('contacts.create');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
    }
}

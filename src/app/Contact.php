<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = [];

    // TODO: When phone is going into DB, remove '-', '.', etc.
    // TODO: When phone is being pulled, format string
}

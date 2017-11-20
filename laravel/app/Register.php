<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticable;

class Register extends Authenticable
{
    use Notifiable;


    protected $fillable =[
    'firstname', 'lastname', 'email', 'password',
    ];




   
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;
    //các trường cho phép gán
    protected $fillable = ['name', 'email', 'password']; 

    //chúng tôi muốn ẩn khỏi mảng model
    protected $hidden = [
        'password', 'remember_token',
    ];
}

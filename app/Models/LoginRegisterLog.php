<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginRegisterLog extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone',
        'username',
        'user_agent',
        'status',
        'password',
    ];

    const TYPE_LOGIN = 1;
    const TYPE_REGISTER = 2;
}

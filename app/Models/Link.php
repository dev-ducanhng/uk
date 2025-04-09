<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    protected $fillable = [
        'url',
        'type',
    ];
    const TYPE_301 = 1;
    const TYPE_TOPUP = 2;
}

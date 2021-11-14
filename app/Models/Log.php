<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'context',
        'level',
        'level_name',
        'extra',
        'formatted',
        'remote_addr',
        'user_agent',
        'created_at'
    ];
}

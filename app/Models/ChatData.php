<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatData extends Model
{
    protected $fillable = [
        'node_one',
        'node_two',
        'chat',
        'sender'
    ];
}

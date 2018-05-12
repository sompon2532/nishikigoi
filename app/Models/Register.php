<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $fillable = ['koi_id', 'event_id', 'name', 'phone', 'winner'];
}

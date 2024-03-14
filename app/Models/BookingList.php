<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingList extends Model
{
    use HasFactory;

    protected $fillable = [
       'name',
       'email',
       'start_time',
       'end_time',
       'address',
        'status'
    ];
}

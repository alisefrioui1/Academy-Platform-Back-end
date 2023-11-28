<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class paiment extends Model
{
    protected $fillable = [
        'photo',
        'payed_amount',
        'state',
        'member_ship_id'
      
    ];
    use HasFactory;
    use SoftDeletes;
}

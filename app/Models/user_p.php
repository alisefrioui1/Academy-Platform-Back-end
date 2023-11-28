<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_p extends Model
{
    protected $fillable = [
        'designation',
        'pricing',
  
     
    ];
    use HasFactory;
}

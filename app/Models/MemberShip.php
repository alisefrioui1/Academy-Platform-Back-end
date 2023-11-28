<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MemberShip extends Model
{
    protected $fillable = [
        'user_p_id',
        'plan_id',
      
    ];
    use HasFactory;
    use SoftDeletes;
}

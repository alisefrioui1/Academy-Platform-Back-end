<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    protected $fillable = [
        'designation',
       
       
       
    ];
    use HasFactory;
    use SoftDeletes;
    public function plans()
    {
      return  $this->belongsToMany(Plan::class);
    }
  
}

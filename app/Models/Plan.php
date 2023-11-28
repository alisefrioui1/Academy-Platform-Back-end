<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    protected $fillable = [
        'designation',
        'pricing',

       
    ];
    use SoftDeletes;

    use HasFactory;
    public function content()
    {
       return  $this->hasMany(Content::class);
    }
    public function service()
    {
       return  $this->hasMany(Service::class);
    }
}

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
        'state',

       
    ];
    use SoftDeletes;

    use HasFactory;
    public function contents()
    {
      return  $this->belongsToMany(Content::class);
    }
    public function services()
    {
       return  $this->belongsToMany(Service::class);
    }
}

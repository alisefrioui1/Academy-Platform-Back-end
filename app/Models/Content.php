<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
    protected $fillable = [
        'subject',
        'category',
        'sub_category',
        'content',
        'state',
        'link',  
        'image',
       
      
      
    ];
    use HasFactory;
    use SoftDeletes;
    public function plans()
    {
      return  $this->belongsToMany(Plan::class);
    }
   
}

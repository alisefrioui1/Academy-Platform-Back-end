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
        'is_bookmarked',
        'image1',
        'image2',
        'image3',
        'plan_id',
      
    ];
    use HasFactory;
    use SoftDeletes;
    public function plan()
    {
      return  $this->belongsTo(Plan::class);
    }
   
}

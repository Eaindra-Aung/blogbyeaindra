<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function category(){
        //belongsTo $blog->category// $blog->category->name
        return $this->belongsTo(Category::class);
    }
}

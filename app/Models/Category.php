<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\ModelsCategory;

class Category extends Model
{
    use HasFactory;
    public function parent(){
        return $this->belongsTo(Category::class,'parent_id');
    }
}

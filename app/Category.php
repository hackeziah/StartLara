<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'category_id';
    protected $categoryname = 'categoryname';
   
    public function categorys()
    {
         
        return $this->hasMany('App\Post');
        
    }
}

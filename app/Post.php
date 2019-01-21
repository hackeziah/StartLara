<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
//    protected $timestap = true;

    protected $fillable=[
        'title',
        'body',
        'category_id'
    ];

    public $timestaps = false;


    public function category()
    {
         
        return $this->belongsTo('App\Category','category_id','category_id');

    }
}

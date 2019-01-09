<?php

namespace App\DataAccessLayer\Models;

use Illuminate\Database\Eloquent\Model;

class category_description extends Model
{
    public $timestamps = false;
    protected $table = 'category_descriptions';
    public  $primaryKey ='category_description_id';
    protected $fillable = ['name','description','meta_title','meta_description','meta_keywords','category_id'];
    public function category()
    {
        return $this->belongsTo('App\DataAccessLayer\Models\category','category_id');
    }
}

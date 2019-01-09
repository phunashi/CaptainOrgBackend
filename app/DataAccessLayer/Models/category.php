<?php

namespace App\DataAccessLayer\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'categories';
    // public  $timestamps = true;
     public  $primaryKey ='category_id';
     protected $fillable = ['image','sort_order','parent_id','status','date_added','date_modified'];
     const CREATED_AT = 'date_added';
     const UPDATED_AT = 'date_modified';
 
     public function categoryDescription()
     {
         return $this->hasOne('App\DataAccessLayer\Models\category_description','category_id');
     }
}

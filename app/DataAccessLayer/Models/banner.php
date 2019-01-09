<?php

namespace App\DataAccessLayer\Models;

use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    protected $table = 'banners';
    public  $timestamps = false;
    public  $primaryKey ='banner_id';
    protected $fillable = ['name','status','position'];
  
    public function banner_descriptions()
    {
        return $this->hasMany('App\DataAccessLayer\Models\banner_description','banner_id');
    }
}

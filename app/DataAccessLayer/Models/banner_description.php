<?php

namespace App\DataAccessLayer\Models;

use Illuminate\Database\Eloquent\Model;

class banner_description extends Model
{
    protected $table = 'banner_descriptions';
    public  $timestamps = false;
    public  $primaryKey ='banner_description_id';
    protected $fillable = ['title','link','image','sort_order','banner_id'];

    public function banner()
    {
        return $this->belongsTo('App\DataAccessLayer\Models\banner','banner_id');
    }
}

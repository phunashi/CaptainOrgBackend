<?php

namespace App\DataAccessLayer\Models;

use Illuminate\Database\Eloquent\Model;

class attribute extends Model
{
    protected $table = 'attributes';
    public  $timestamps = false;
    public  $primaryKey ='attribute_id';
    protected $fillable = ['name'];
}

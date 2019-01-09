<?php

namespace App\DataAccessLayer\Models;

use Illuminate\Database\Eloquent\Model;

class attribute_group extends Model
{
    protected $table = 'attribute_groups';
    public  $timestamps = false;
    public  $primaryKey ='attrubute_group_id';
    protected $fillable = ['name','sort_order'];
}

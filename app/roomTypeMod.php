<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roomTypeMod extends Model
{
    protected $fillable=['roomTypeDesc','active','remark'];
    protected $primaryKey='roomTypeId';
}
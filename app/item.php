<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['refund_id', 'type_id', 'value', 'use_date'];
}

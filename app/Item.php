<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['id', 'idDescription', 'itemName', 'quantity', 'unity', 'price'];
}

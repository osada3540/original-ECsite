<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LikeItem extends Model
{
    protected $fillable = ['user_id', 'item_id'];
}

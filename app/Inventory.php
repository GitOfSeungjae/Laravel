<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['vin_no','model','make','year','mspr','status','booked','listed'];
}

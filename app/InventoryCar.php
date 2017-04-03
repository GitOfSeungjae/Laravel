<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryCar extends Model
{
     public function filter_id($query, $ft_id){
     	return $query;
     }
}

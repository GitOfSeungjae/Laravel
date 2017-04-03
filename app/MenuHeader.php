<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuHeader extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['menu_desc','isvalid'];

    public function menuitems(){
    		return $this->hasMany(MenuItem::class);
    }

    public function valid($query, $contextStr){
    		return $query->where('isvalid','=',1)
    		               ->where('menu_desc','=',$contextStr);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['menu_id','menu_item_desc','orderby'];

    public function menuheader(){
    		return $this->belongsTo(MenuHeader::class);
    }

    public function getItems($query, $headerDesc){
    		return $query->where('menu_id','=',$headerId);
    }
}

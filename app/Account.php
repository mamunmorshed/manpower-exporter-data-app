<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //Function for saerch
    public function scopeSearchByKeyWord($query, $keyword)
    {
        if($keyword!=''){
            $query->where(function ($query) use ($keyword) {
                $query->where("agent", "LIKE", "%$keyword%");
            });
        }
        return $query;
    }
}

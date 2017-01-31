<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    //Function for saerch
    public function scopeSearchByKeyWord($query, $keyword)
    {
        if($keyword!=''){
            $query->where(function ($query) use ($keyword) {
                $query->where("sid", "LIKE", "%$keyword%")
                    ->orWhere("name", "LIKE", "%$keyword%")
                    ->orWhere("mobile", "LIKE", "%$keyword%")
                    ->orWhere("passport", "LIKE", "%$keyword%");
            });
        }
        return $query;
    }
}

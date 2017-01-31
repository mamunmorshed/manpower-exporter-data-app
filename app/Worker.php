<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    //Function for saerch
    public function scopeSearchByKeyWord($query, $keyword)
    {
        if($keyword!=''){
            $query->where(function ($query) use ($keyword) {
                $query->where("sid", "LIKE", "%$keyword%")
                    ->orWhere("agent", "LIKE", "%$keyword%")
                    ->orWhere("name", "LIKE", "%$keyword%")
                    ->orWhere("mobile_no", "LIKE", "%$keyword%")
                    ->orWhere("passport_no", "LIKE", "%$keyword%");
            });
        }
        return $query;
    }

    public function workerAgent()
    {
        return $this->belongsTo('App\Agent', 'agent', 'sid');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Learner extends Model
{

    protected $fillable = [
        'user_id', 'level', 'status'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }

    public static function list(){
        $learner = Learner::orderByRaw('user_id')->get();
        $list = [];
        foreach($learner as $l){
            $list[$l->id];
        }
        return $list;
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // get relationship: get Project->user
    public function user(){
        
        return $this->belongsTo(User::class);
    }
}

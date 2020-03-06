<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    
    public function complete(){
         
        $this->completed_at = date("Y-m-d h:i:s");
        $this->save();
    }
}

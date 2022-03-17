<?php

namespace App\Models;

class Member extends BaseModel
{
    
    public function instrument() {
        return $this->belongsToMany(Instrument::class, 'member_instrument')->withTimestamps()->withPivot('level', 'comments', 'level_id');
    }

}

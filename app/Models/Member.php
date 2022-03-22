<?php

namespace App\Models;

class Member extends BaseModel
{
    
    public function instruments() {
        return $this->belongsToMany(Instrument::class, 'member_instrument')
                    ->withTimestamps()
                    ->withPivot(['level_id', 'comments'])
                    ->using(MemberInstrument::class);
    }

    public function getInstrument($idInstrument) {
        return $this->instruments()->where('instrument_id', $idInstrument)->first();
    }

}

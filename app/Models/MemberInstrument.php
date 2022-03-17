<?php

namespace App\Models;


class MemberInstrument extends BaseModel
{

    protected $table = 'member_instrument';
    
    public function instrument() {
        return $this->belongsTo(Instrument::class, 'instrument_id');
    }

    public function level() {
        return $this->belongsTo(Level::class, 'level_id');
    }

}

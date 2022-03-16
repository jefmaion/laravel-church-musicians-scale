<?php

namespace App\Repository;

use App\Contracts\InstrumentRepositoryInterface;
use App\Models\Instrument;

class InstrumentRepository extends BaseRepository implements InstrumentRepositoryInterface {

    public function __construct(Instrument $model)
    {
        parent::__construct($model);
    }

}
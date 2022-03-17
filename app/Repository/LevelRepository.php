<?php

namespace App\Repository;

use App\Contracts\LevelRepositoryInterface;
use App\Models\Level;

class LevelRepository extends BaseRepository implements LevelRepositoryInterface {

    public function __construct(Level $model)
    {
        parent::__construct($model);
    }

}
<?php

namespace App\Repository;

use App\Contracts\MemberRepositoryInterface;
use App\Models\Member;

class MemberRepository extends BaseRepository implements MemberRepositoryInterface {

    public function __construct(Member $model)
    {
        parent::__construct($model);
    }

    public function getInstrument($id) {
        return $this->model->instruments()->where('id', $id)->first();
    }

}
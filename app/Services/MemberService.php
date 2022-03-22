<?php

namespace App\Services;

use App\Contracts\MemberRepositoryInterface;
use App\Models\Member;
use App\Models\MemberInstrument;

class MemberService {

    private $repository;

    public function __construct(MemberRepositoryInterface $repository) {
        $this->repository = $repository;
    }

    public function listMembers() {
        return $this->repository->all();
    }

    public function addNewMember(array $request) {
        return $this->repository->create($request);
    }

    public function updateMember(int $id, array $request) {
        return $this->repository->update($request, $id);
    }

    public function getMember(int $id) {
        return $this->repository->findById($id);
    }

    public function deleteMember(int $id) {
        $this->repository->destroy($id);
    }

    public function addInstrument(Member $member, $request) {
        $member = $member->instruments()->attach($member, $request);
        return $member;
    }

    public function updateInstrument(Member $member, $request) {
        $member->instruments()->updateExistingPivot($request['instrument_id'], $request);
        return $member;
    }

    public function deleteInstrument(Member $member, $request) {
        $member->instruments()->detach($request);
        return $member;
    }


    public function getInstrument($member, $id) {
        return $member->instruments()->where('instrument_id', $id)->first();
    }

}
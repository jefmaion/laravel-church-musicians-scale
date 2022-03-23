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

    public function findMember(int $id) {
        return $this->repository->findById($id);
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

    public function deleteMember(int $id) {
        $this->repository->destroy($id);
    }

    public function addInstrumentToMember(Member $member, $request) {
        $member = $member->instruments()->attach($member, $request);
        return $member;
    }

    public function updateInstrumentToMember(Member $member, $idInstrument, $request) {
        $member->instruments()->syncWithoutDetaching([$idInstrument => $request]);
        return $member;
    }

    public function deleteInstrumentToMember(Member $member, $idPivotInstrument) {
        $member->instruments()->detach([$idPivotInstrument]);
        return $member;
    }

    public function getInstrument($member, $id) {
        return $member->instruments()->where('instrument_id', $id)->first();
    }

}
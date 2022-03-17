<?php

namespace App\Services;

use App\Contracts\MemberRepositoryInterface;
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

    public function getMemberInstrument(int $id) {
        return MemberInstrument::with('instrument')->with('level')->where('member_id', $id)->get();
    }


    public function setInstrument($id, $request) {
        $member = $this->getMember($id);
        $member->instrument()->attach($request['instrument_id'], $request);

        return $member;
    }

}
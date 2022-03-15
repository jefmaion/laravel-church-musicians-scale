<?php

namespace App\Services;

use App\Contracts\MemberRepositoryInterface;

class MemberService {

    private $repository;

    public function __construct(MemberRepositoryInterface $repository) {
        $this->repository = $repository;
    }

    public function listMembers() {

    }

    public function addNewMember(array $request) {

    }

    public function updateMember(int $id, array $request) {

    }

    public function getMember(int $id) {

    }

    public function deleteMember(int $id) {

    }

}
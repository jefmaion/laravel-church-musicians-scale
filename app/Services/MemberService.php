<?php

namespace App\Services;

use App\Contracts\MemberRepositoryInterface;

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

}
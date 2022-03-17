<?php

namespace App\Services;

use App\Contracts\LevelRepositoryInterface;

class LevelService {

    private $repository;

    public function __construct(LevelRepositoryInterface $repository) {
        $this->repository = $repository;
    }

    public function listLevels() {
        return $this->repository->all();
    }

    public function addNewLevel(array $request) {
        return $this->repository->create($request);
    }

    public function updateLevel(int $id, array $request) {
        return $this->repository->update($request, $id);
    }

    public function getLevel(int $id) {
        return $this->repository->findById($id);
    }

    public function deleteLevel(int $id) {
        $this->repository->destroy($id);
    }



}
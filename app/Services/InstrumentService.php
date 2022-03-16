<?php

namespace App\Services;

use App\Contracts\InstrumentRepositoryInterface;

class InstrumentService {

    private $repository;

    public function __construct(InstrumentRepositoryInterface $repository) {
        $this->repository = $repository;
    }

    public function listInstruments() {
        return $this->repository->all();
    }

    public function addNewInstrument(array $request) {
        return $this->repository->create($request);
    }

    public function updateInstrument(int $id, array $request) {
        return $this->repository->update($request, $id);
    }

    public function getInstrument(int $id) {
        return $this->repository->findById($id);
    }

    public function deleteInstrument(int $id) {
        $this->repository->destroy($id);
    }

}
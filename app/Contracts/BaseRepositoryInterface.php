<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface BaseRepositoryInterface {

    /**
     * Return all data in repository
     *
     * @return Collection
     */
    public function all() : Collection;

    /**
     * Find data by id field
     *
     * @param integer $id
     * @return Model|null
     */
    public function findById(int $id): ?Model;

    /**
     * Create and store a new item in repository
     *
     * @param array $request
     * @return Model
     */
    public function create(array $request) : Model;

    /**
     * Update a item
     *
     * @param array $request
     * @param integer $id
     * @return Model
     */
    public function update(array $request, int $id): Model;

    /**
     * Delete a item
     *
     * @param integer $id
     * @return void
     */
    public function destroy(int $id) : void;

}
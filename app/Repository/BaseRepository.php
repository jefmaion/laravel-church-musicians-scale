<?php

namespace App\Repository;

use App\Contracts\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class BaseRepository implements BaseRepositoryInterface
{

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function findById(int $id): ?Model
    {
        return $this->model->find($id);
    }

    public function create(array $request): Model
    {
        return $this->model->create($request);
    }

    public function update(array $request, int $id): Model
    {
        $item = $this->findById($id);

        $item->fill($request);

        $item->save();

        return $item;
    }

    public function destroy(int $id): void
    {
        $this->model->destroy($id);
    }



}
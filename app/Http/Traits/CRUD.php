<?php

namespace App\Http\Traits;

use Illuminate\Http\Request;
use App\Utils\Hydrator\ModelHydrator;
use App\Repositories\AbstractRepository;

trait CRUD
{
    use Responsable;

    protected $repository;
    protected $resourceClass;
    protected $resourceCollectionClass;

    public function getList()
    {
        $resourceCollectionClassName = $this->getResourceCollectionClassName();
        return new $resourceCollectionClassName($this->repository->act()->all());
    }

    public function get($id)
    {
        $resourceClassName = $this->getResourceClassName();
        return new $resourceClassName($this->repository->act()->findOrFail($id));
    }

    public function create
    (
        Request $request, 
        ModelHydrator $hydrator
    )
    {
        $cleanModel = $this->repository->getCleanModel();
        $created = $hydrator->hydrate($cleanModel, $request->all())->save();
        if ($created) {
            return $this->resourceCreated($this->model->id);
        }

        return $this->responseFailed();
    }

    public function update
    (
        $id,
        Request $request,
        ModelHydrator $hydrator
    )
    {
        $model = $this->repository->act()->findOrFail($id);
        $updated = $hydrator->hydrate($model, $request->all())->save();
        if ($updated) {
            return $this->responseSuccess($this->model->id);
        }

        return $this->responseFailed();
    }

    public function delete($id)
    {
        if ($this->repository->act()->destroy($id)) {
            return $this->responseSuccess();
        }

        return $this->responseFailed();
    }

    protected function getRepository(): AbstractRepository
    {
        return $this->repository;
    }

    protected function setRepository(AbstractRepository $repository): void
    {
        $this->repository = $repository;
    }

    protected function getResourceClassName(): string
    {
        return $this->resourceClassName;
    }

    protected function setResourceClassName(string $className): void
    {
        $this->resourceClassName = "\\" . ltrim($className);
    }

    protected function getResourceCollectionClassName(): string
    {
        return $this->resourceCollectionClassName;
    }

    protected function setResourceCollectionClassName(string $className): void
    {
        $this->resourceCollectionClassName = "\\" . ltrim($className);
    }
}
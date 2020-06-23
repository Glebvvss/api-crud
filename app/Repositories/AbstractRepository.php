<?php 

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository
{
    protected $modelName;

    public function act(): Model
    {
        $modelName = $this->getModelName();
        return new $modelName;
    }

    public function getCleanModel(): Model
    {
        $modelName = $this->getModelName();
        return new $modelName;
    }

    protected function setModelName(string $className)
    {
        $this->modelName = '\\'.ltrim($className, '\\');
    }

    protected function getModelName(): string
    {
        return $this->modelName;
    }
}
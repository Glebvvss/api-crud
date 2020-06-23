<?php 

namespace App\Utils\Hydrator;

use Illuminate\Database\Eloquent\Model;

interface IHydrator
{
    public function hydrate(Model $model, array $data): Model;
}
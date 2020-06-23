<?php

namespace App\Utils\Hydrator;

use Illuminate\Database\Eloquent\Model;

class ModelHydrator implements IHydrator
{
    public function hydrate(Model $model, array $data): Model
    {
        foreach($data as $field => $value) {
            $model->$field = $value;
        }

        return $model;
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Traits\CRUD;
use App\Repositories\VacancyRepository;
use App\Http\Resources\VacancyResource;
use App\Http\Resources\VacancyCollection;

class VacancyController extends BaseController
{
    use CRUD;

    public function __construct(VacancyRepository $repository)
    {
        $this->setRepository($repository);
        $this->setResourceClassName(VacancyResource::class);
        $this->setResourceCollectionClassName(VacancyCollection::class);
    }
}

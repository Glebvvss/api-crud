<?php

namespace App\Http\Controllers;

use App\Http\Traits\CRUD;
use App\Http\Resources\EmployerResource;
use App\Repositories\EmployerRepository;
use App\Http\Resources\EmployerCollection;

class EmployerController extends BaseController
{
    use CRUD;

    public function __construct(EmployerRepository $repository)
    {
        $this->setRepository($repository);
        $this->setResourceClassName(EmployerResource::class);
        $this->setResourceCollectionClassName(EmployerCollection::class);
    }
}
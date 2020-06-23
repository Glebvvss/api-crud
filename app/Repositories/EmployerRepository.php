<?php

namespace App\Repositories;

use App\Employer;

class EmployerRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->setModelName(Employer::class);
    }
}
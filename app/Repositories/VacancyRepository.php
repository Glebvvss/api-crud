<?php

namespace App\Repositories;

use App\Vacancy;

class VacancyRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->setModelName(Vacancy::class);
    }
}
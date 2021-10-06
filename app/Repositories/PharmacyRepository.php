<?php

namespace App\Repositories;

use App\Models\Pharmacy;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\PharmacyRepositoryInterface;

class PharmacyRepository extends BaseRepository implements PharmacyRepositoryInterface
{
    /**
     * @var Model $model
     */
    protected $model;

    /**
     * PharmacyRepository Constructor
     *
     * @param Model $model
     */
    public function __construct(Pharmacy $model)
    {
        $this->model = $model;
    }
}
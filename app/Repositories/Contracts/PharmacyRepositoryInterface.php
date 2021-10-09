<?php

namespace App\Repositories\Contracts;

use App\Repositories\Contracts\BaseRepositoryInterface;

interface PharmacyRepositoryInterface extends BaseRepositoryInterface {
    /**
     * Attach model/s to this model.
     * 
     * @param String $relation
     * @param Int $id
     * @param Array $data
     * @return Bool
     */
    public function attach($relation, $id, $data);

    /**
     * Dettach model/s from this model.
     * 
     * @param string $relation
     * @param int $id
     * @return bool
     */
    public function detach($relation, $id);
}
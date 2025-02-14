<?php

namespace App\Admin\Repositories\District;
use App\Admin\Repositories\EloquentRepository;
use App\Admin\Repositories\District\DistrictRepositoryInterface;
use App\Models\District;    


class DistrictRepository extends EloquentRepository implements DistrictRepositoryInterface
{

    protected $select = [];

    public function getModel(){
        return District::class;
    }

    public function getDistrict(){
        return District::all();
    }
}
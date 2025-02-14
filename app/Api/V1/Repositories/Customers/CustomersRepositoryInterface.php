<?php

namespace App\Api\V1\Repositories\Customers;
use App\Admin\Repositories\EloquentRepositoryInterface;


interface CustomersRepositoryInterface extends EloquentRepositoryInterface
{
    public function findByID($id);
    public function paginate($page = 1, $limit = 10);
    public function delete($id);
}
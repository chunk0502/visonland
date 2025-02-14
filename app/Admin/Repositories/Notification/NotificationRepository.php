<?php

namespace App\Admin\Repositories\Notification;
use App\Admin\Repositories\EloquentRepository;
use App\Admin\Repositories\Notification\NotificationRepositoryInterface;
use App\Models\Notification;

class NotificationRepository extends EloquentRepository implements NotificationRepositoryInterface
{

    protected $select = [];

    public function getModel(){
        return Notification::class;
    }


    public function getQueryBuilderOrderBy($column = 'id', $sort = 'DESC'){
        $this->getQueryBuilder();
        $this->instance = $this->instance->orderBy($column, $sort);
        return $this->instance;
    }
}
<?php

namespace App\Api\V1\Repositories\Notification;

use App\Admin\Repositories\Notification\NotificationRepository as AdminNotificationRepository;
use App\Api\V1\Repositories\Notification\NotificationRepositoryInterface;
use App\Models\Notification;

class NotificationRepository extends AdminNotificationRepository implements NotificationRepositoryInterface
{
    public function getModel()
    {
        return Notification::class;
    }

    public function findByID($id)
    {
        $this->instance = $this->model->where('id', $id)
            ->firstOrFail();

        if ($this->instance && $this->instance->exists()) {
            return $this->instance;
        }

        return null;
    }
    public function paginate($page = 1, $limit = 10)
    {
        $page = $page ? $page - 1 : 0;
        $this->instance = $this->model
            ->offset($page * $limit)
            ->limit($limit)
            ->orderBy('id', 'desc')
            ->get();
        return $this->instance;
    }

    public function delete($id)
    {
        try {
            Notification::findOrFail($id)->delete();
            return 1;
        } catch (\Exception $e) {
            return 0;
        }
    }
}

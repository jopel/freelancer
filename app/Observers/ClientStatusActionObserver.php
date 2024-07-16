<?php

namespace App\Observers;

use App\Models\ClientStatus;
use App\Notifications\DataChangeEmailNotification;
use Illuminate\Support\Facades\Notification;

class ClientStatusActionObserver
{
    public function created(ClientStatus $model)
    {
        $data  = ['action' => 'created', 'model_name' => 'ClientStatus'];
        $users = \App\Models\User::whereHas('roles', function ($q) {
            return $q->where('title', 'Admin');
        })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }

    public function updated(ClientStatus $model)
    {
        $data  = ['action' => 'updated', 'model_name' => 'ClientStatus'];
        $users = \App\Models\User::whereHas('roles', function ($q) {
            return $q->where('title', 'Admin');
        })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }

    public function deleting(ClientStatus $model)
    {
        $data  = ['action' => 'deleted', 'model_name' => 'ClientStatus'];
        $users = \App\Models\User::whereHas('roles', function ($q) {
            return $q->where('title', 'Admin');
        })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }
}

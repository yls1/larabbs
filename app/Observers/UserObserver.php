<?php

namespace App\Observers;

use App\Models\User;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class UserObserver
{
    public function creating(User $user)
    {
        //
    }

    public function updating(User $user)
    {
        //
    }

    public function saving(User $user) 
    {
        if(empty($user->avatar)) {
            $user->avatar = 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1592015485145&di=db84dc6ad5ff2046636675a60d52f381&imgtype=0&src=http%3A%2F%2Fimg3.imgtn.bdimg.com%2Fit%2Fu%3D1786937383%2C3661854611%26fm%3D214%26gp%3D0.jpg';
        }
    }
}
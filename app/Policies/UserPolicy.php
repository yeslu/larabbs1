<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;
// 第一个参数默认为当前登录用户实例，第二个参数则为要进行授权的用户实例.调用时，默认情况下，我们 不需要 传递当前登录用户至该方法内，因为框架会自动加载当前登录用户
  public function update(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id;
    }
}

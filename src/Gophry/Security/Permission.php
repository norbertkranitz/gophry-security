<?php

namespace Gophry\Security;

abstract class Permission implements PermissionInterface {

    public abstract function check(IUser $user, $id = null);

}

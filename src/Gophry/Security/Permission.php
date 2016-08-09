<?php

namespace Gophry\Security;

abstract class Permission implements PermissionInterface {

    public abstract function check(UserInterface $user, $id = null);

}

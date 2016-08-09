<?php

namespace Gophry\Security;

interface PermissionInterface {

    public function check(UserInterface $user, $id = null);

}

<?php

namespace App\Models;

use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission
{
    public function getNameLocalAttribute() {
        return trans('roles.names.' . $this->name);
    }
}
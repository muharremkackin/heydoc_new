<?php

namespace App\Models;

use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    public function getNameLocalAttribute() {
        return trans('roles.names.' . $this->name);
    }
}

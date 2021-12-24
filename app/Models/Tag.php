<?php

namespace App\Models;

use App\Traits\Models\HasActionInfo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Tags\Tag as SpatieTags;

class Tag extends SpatieTags
{
    use HasActionInfo;
    use SoftDeletes;

}

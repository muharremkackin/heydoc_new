<?php

namespace App\Models;

use App\Traits\Models\HasActionInfo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\UserGroup
 *
 * @property int $id
 * @property \App\Models\User|null $created_by
 * @property \App\Models\User|null $updated_by
 * @property \App\Models\User|null $deleted_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserGroup newQuery()
 * @method static \Illuminate\Database\Query\Builder|UserGroup onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UserGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserGroup whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserGroup whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserGroup whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserGroup whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserGroup whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|UserGroup withTrashed()
 * @method static \Illuminate\Database\Query\Builder|UserGroup withoutTrashed()
 * @mixin \Eloquent
 */
class UserGroup extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasActionInfo;
}

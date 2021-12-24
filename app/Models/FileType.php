<?php

namespace App\Models;

use App\Traits\Models\HasActionInfo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\FileType
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $created_by
 * @property-read \App\Models\User $deleted_by
 * @property-read \App\Models\User $updated_by
 * @method static \Illuminate\Database\Eloquent\Builder|FileType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FileType newQuery()
 * @method static \Illuminate\Database\Query\Builder|FileType onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|FileType query()
 * @method static \Illuminate\Database\Eloquent\Builder|FileType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|FileType withTrashed()
 * @method static \Illuminate\Database\Query\Builder|FileType withoutTrashed()
 * @mixin \Eloquent
 */
class FileType extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasActionInfo;
}

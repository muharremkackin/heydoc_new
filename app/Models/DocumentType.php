<?php

namespace App\Models;

use App\Traits\Models\HasActionInfo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\DocumentType
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $created_by
 * @property-read \App\Models\User $deleted_by
 * @property-read \App\Models\User $updated_by
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentType newQuery()
 * @method static \Illuminate\Database\Query\Builder|DocumentType onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentType query()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|DocumentType withTrashed()
 * @method static \Illuminate\Database\Query\Builder|DocumentType withoutTrashed()
 * @mixin \Eloquent
 */
class DocumentType extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasActionInfo;
}

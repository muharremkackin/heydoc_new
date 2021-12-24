<?php

namespace App\Models;

use App\Traits\Models\HasActionInfo;
use BeyondCode\Comments\Traits\HasComments;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Tags\HasTags;

class Document extends Model
{
    use HasFactory;
    use HasComments;
    use HasTags;
    use SoftDeletes;
    use HasActionInfo;

    public function files(): HasMany
    {
        return $this->hasMany(File::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}

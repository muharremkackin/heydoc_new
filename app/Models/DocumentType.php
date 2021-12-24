<?php

namespace App\Models;

use App\Traits\Models\HasActionInfo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentType extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasActionInfo;
}

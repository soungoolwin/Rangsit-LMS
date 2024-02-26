<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    use HasFactory;

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory():BelongsTo
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function teachers(): BelongsToMany
    {
        return $this->belongsToMany(Teacher::class,'course_teacher');
    }
}

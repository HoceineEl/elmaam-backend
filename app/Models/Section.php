<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin IdeHelperSection
 */
class Section extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'order', 'course_id'];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }
}

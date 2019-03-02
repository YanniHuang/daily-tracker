<?php

namespace App\Models;

use App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $filable = [
        'name',
        'description'
    ];

    /**
     * @return Relations\HasMany
     */
    public function transactions(): Relations\HasMany
    {
        return $this->hasMany(Models\Transaction::class);
    }

    /**
     * A child category can belong to a parent category.
     *
     * @return Relations\BelongsTo
     */
    public function parentCategory(): Relations\BelongsTo
    {
        return $this->belongsTo(Models\Category::class, 'parent_id', 'id');
    }
}

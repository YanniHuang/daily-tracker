<?php

namespace App\Models;

use App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'logo',
    ];

    /**
     * @return Relations\HasMany
     */
    public function transactions(): Relations\HasMany
    {
        return $this->hasMany(Models\Transaction::class);
    }
}

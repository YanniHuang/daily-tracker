<?php

namespace App\Models;

use App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'type',
        'description',
        'description',
        'currency'
    ];

    /**
     * @return Relations\HasMany
     */
    public function transactions(): Relations\HasMany
    {
        return $this->hasMany(Models\Transaction::class);
    }
}

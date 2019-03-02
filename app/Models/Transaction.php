<?php

namespace App\Models;

use App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;

class Transaction extends Model
{
    protected $fillable = [
        'amount',
        'transacted_at',
        'note',
        'image',
    ];

    protected $cast = [
        'amount' => 'float',
        'transacted_at' => 'datetime'
    ];

    /**
     * @return Relations\BelongsTo
     */
    public function account()
    {
        return $this->belongsTo(Models\Account::class);
    }

    /**
     * @return Relations\BelongsTo
     */
    public function brand()
    {
        return $this->belongsTo(Models\Brand::class);
    }

    /**
     * @return Relations\BelongsTo
     */
    public function plan()
    {
        return $this->belongsTo(Models\Plan::class);
    }
}

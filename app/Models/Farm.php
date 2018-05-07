<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Farm extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'status' => 'boolean',
    ];

    /**
     * @var array
     */
    protected $fillable = ['name', 'status'];

    /**
     * @param $query
     * @return mixed
     */
    public function scopeActive($query) {
        return $query->where('status', 1);
    }
}

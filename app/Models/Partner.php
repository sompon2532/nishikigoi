<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Partner extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    protected $casts = [
        'status' => 'boolean',
    ];

    /**
     * @var array
     */
    protected $fillable = ['koikichi', 'description', 'address', 'website', 'email', 'strain', 'status', 'country_id'];

    /**
     * @param $query
     * @return mixed
     */
    public function scopeActive($query) {
        return $query->where('status', 1);
    }
}

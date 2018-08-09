<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class News extends Model implements HasMedia
{
    use Translatable, SoftDeletes, HasMediaTrait;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'status' => 'boolean',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['start_datetime', 'end_datetime', 'deleted_at'];

    /**
     * @param $query
     * @return mixed
     */
    public function scopeActive($query) {
        return $query->where('status', 1);
    }

    /**
     * @var string
     */
    public $translationModel = NewsTranslation::class;

    /**
     * @var array
     */
    public $translatedAttributes = ['name'];

    /**
     * @var array
     */
    protected $fillable = ['slug', 'status', 'start_datetime', 'end_datetime'];

    /**
     * Get all of the post's videos.
     */
    public function videos()
    {
        return $this->morphMany(Video::class, 'videotable');
    }
}

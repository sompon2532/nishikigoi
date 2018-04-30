<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;
use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
	use Translatable, SoftDeletes, NodeTrait;

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
    protected $dates = ['deleted_at'];

    /**
     * @var string
     */
	public $translationModel = CategoryTranslation::class;
	
    /**
     * @var array
     */
	public $translatedAttributes = ['name'];

    /**
     * @var array
     */
    protected $fillable = ['slug', 'status', 'parent_id', 'group'];

    /**
     * @param $query
     * @return mixed
     */
    public function scopeActive($query) {
        return $query->where('status', 1);
    }

    /**
     * @param $query
     * @param $type
     * @return mixed
     */
    public function scopeGroup($query, $type) {
        return $query->where('group', $type);
    }
}

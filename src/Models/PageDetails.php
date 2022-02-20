<?php

namespace Swandam\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PageDetails extends Model
{
    use SoftDeletes;

    protected $table = 'element_details';
    protected $fillable = ['sitemap_id', 'name', 'slug', 'status', 'language_id'];
    public $timestamps = true;

    public function extras()
    {
        return $this->morphMany(Extra::class, 'model');
    }

    public function getValueAttribute($value)
    {
        return Extra::where('model_type', get_class($this))->where('model_id', $this->id)->where('key', $value)->firstOrFail()?->value;
    }

}
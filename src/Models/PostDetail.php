<?php

namespace Swandam\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostDetail extends Model
{
    use SoftDeletes;

    protected $table = 'page_details';
    protected $fillable = ['page_id', 'name', 'detail', 'slug', 'language_id', 'statuss'];
    public $timestamps = true;

    public function model()
    {
        return $this->morphTo();
    }

    public function getValueAttribute($value)
    {
        return Extra::where('model_type', get_class($this))->where('model_id', $this->id)->where('key', $value)->firstOrFail()?->value;
    }
}
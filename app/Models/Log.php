<?php

namespace App\Models;

use Closure;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Database\Query\Expression;

/**
 * @property string id
 * @property string correlation_id
 * @property int type
 * @property string object_id
 * @property string class
 * @property string payload
 * @property string timestamp
 * @method static orderBy(Closure|EloquentBuilder|QueryBuilder|Expression|string $column, string $direction = 'asc')
 */
class Log extends Model
{
    public $timestamps = false;

    public $fillable = [
        'correlation_id'
    ];
}

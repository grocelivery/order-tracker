<?php

namespace Grocelivery\OrderTracker\Models;

use Grocelivery\Utils\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use UsesUuid;

    protected $fillable = ['name'];

    public static function whereStatus(string $status): Status
    {
        return self::query()->where('name', $status)->firstOrFail();
    }
}
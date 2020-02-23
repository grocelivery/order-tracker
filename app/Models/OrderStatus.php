<?php

namespace Grocelivery\OrderTracker\Models;

use Grocelivery\Utils\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderStatus extends Model
{
    use UsesUuid;

    protected $fillable = [
        'order_id',
        'status_id',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}
<?php

namespace Grocelivery\OrderTracker\Models;

use Grocelivery\Utils\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use UsesUuid;

    protected $fillable = [
        'customer_id',
        'contractor_id',
        'current_status_id',
        'ad_id',
        'is_active',
    ];

    public function statuses(): HasMany
    {
        return $this->hasMany(OrderStatus::class);
    }
}
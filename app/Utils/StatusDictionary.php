<?php

namespace Grocelivery\OrderTracker\Utils;

final class StatusDictionary
{
    public const AVAILABLE_STATUSES = [
        self::ORDER_PLACED,
        self::ORDER_ACCEPTED,
        self::ORDER_IN_PROGRESS,
        self::ORDER_DURING_DELIVERY,
        self::ORDER_DELIVERED,
        self::ORDER_VERIFIED,
    ];

    public const ORDER_PLACED = 'Order placed';
    public const ORDER_ACCEPTED = 'Order accepted';
    public const ORDER_IN_PROGRESS = 'Order in progress';
    public const ORDER_DURING_DELIVERY = 'Order during delivery';
    public const ORDER_DELIVERED = 'Order delivered';
    public const ORDER_VERIFIED = 'Order verified';
}
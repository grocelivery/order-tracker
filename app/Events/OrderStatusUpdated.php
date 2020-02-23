<?php

namespace Grocelivery\OrderTracker\Events;

use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Grocelivery\OrderTracker\Models\Order;
use Illuminate\Broadcasting\PrivateChannel;

class OrderStatusUpdated implements ShouldBroadcast
{
    public $order;

    public function __construct(Order $order)
    {
        $this ->order = $order;
    }

    public function broadcastOn(): PrivateChannel
    {
        return new PrivateChannel('order.' . $this->order->id);
    }
}
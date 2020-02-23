<?php

namespace Grocelivery\OrderTracker\Http\Controllers;

use Grocelivery\OrderTracker\Events\OrderStatusUpdated;
use Grocelivery\OrderTracker\Http\Requests\PlaceOrder;
use Grocelivery\OrderTracker\Http\Resources\OrderResource;
use Grocelivery\OrderTracker\Models\Order;
use Grocelivery\OrderTracker\Models\OrderStatus;
use Grocelivery\OrderTracker\Models\Status;
use Grocelivery\OrderTracker\Utils\StatusDictionary;
use Grocelivery\Utils\Interfaces\JsonResponseInterface;
use Grocelivery\OrderTracker\Http\Requests\UpdateStatus;

class OrderController extends Controller
{
    public function placeOrder(PlaceOrder $request): JsonResponseInterface
    {
        /** @var Order $order */
        $order = new Order([
            'customer_id' => $request->input('customer'),
            'contractor_id' => $request->input('contractor'),
            'ad_id' => $request->input('ad'),
            'is_active' => true,
        ]);

        $status = new OrderStatus([
            'status_id' => Status::whereStatus(StatusDictionary::ORDER_PLACED)->id
        ]);
        $status2 = new OrderStatus([
            'status_id' => Status::whereStatus(StatusDictionary::ORDER_PLACED)->id
        ]);

        $order->save();
        $order->statuses()->save($status);

        return $this->response
            ->withResource('order', new OrderResource($order));
    }

    public function updateStatus(UpdateStatus $request): JsonResponseInterface
    {
        /** @var Order $order */
        $order = Order::query()->findOrFail($request->input('order'));

        $status = new OrderStatus([
            'status_id' => Status::whereStatus($request->input('status'))->id
        ]);

        $order->statuses()->save($status);

        event(new OrderStatusUpdated($order));

        return $this->response
            ->withResource('order', new OrderResource($order));
    }
}
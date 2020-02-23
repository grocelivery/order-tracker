<?php

use Illuminate\Database\Seeder;

use Grocelivery\OrderTracker\Models\Status;

class StatusTableSeeder extends Seeder
{
    private const AVAILABLE_STATUSES = [
        'Order placed',
        'Order accepted',
        'Order in progress',
        'Order during delivery',
        'Order delivered',
        'Order verified',
    ];

    public function run()
    {
        foreach (static::AVAILABLE_STATUSES as $status) {
            Status::query()->firstOrCreate([
                'name' => $status
            ]);
        }
    }
}
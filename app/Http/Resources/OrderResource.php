<?php

namespace Grocelivery\OrderTracker\Http\Resources;

use Grocelivery\Utils\Resources\JsonResource;

class OrderResource  extends JsonResource
{
    /**
     * @return array
     */
    public function toArray(): array
    {
        $statuses = $this->resource['statuses']->sortBy('created_at');

        return [
            'id' =>  $this->resource['id'],
            'name' => $this->resource['customer_id'],
            'contractor' => $this->resource['contractor_id'],
            'ad' => $this->resource['ad_id'],
            'statuses' => (new StatusHistory($statuses))->map()
        ];
    }
}
<?php

namespace Grocelivery\OrderTracker\Http\Resources;

use Grocelivery\Utils\Resources\JsonResource;

class StatusHistory  extends JsonResource
{
    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id' =>  $this->resource['id'],
            'name' => $this->resource['status']['name'],
            'createdAt' => $this->resource['created_at']->toDateTimeString(),
        ];
    }
}
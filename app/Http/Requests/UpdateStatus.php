<?php

namespace Grocelivery\OrderTracker\Http\Requests;

use Grocelivery\OrderTracker\Utils\StatusDictionary;
use Grocelivery\Utils\Requests\FormRequest;

class UpdateStatus extends FormRequest
{
    public function rules(): array
    {
        return [
            'order' => 'required|exists:orders,id',
            'status' => 'required|in:' . implode(',', StatusDictionary::AVAILABLE_STATUSES),
        ];
    }
}
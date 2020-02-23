<?php

namespace Grocelivery\OrderTracker\Http\Requests;

use Grocelivery\Utils\Requests\FormRequest;

class PlaceOrder extends FormRequest
{
    public function rules(): array
    {
        return [
            'customer' => 'required|uuid',
            'contractor' => 'required|uuid',
            'ad' => 'required|string',
        ];
    }
}
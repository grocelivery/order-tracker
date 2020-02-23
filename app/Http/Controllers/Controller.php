<?php

namespace Grocelivery\OrderTracker\Http\Controllers;

use Grocelivery\Utils\Interfaces\JsonResponseInterface;
use Grocelivery\Utils\Responses\JsonResponse;
use Laravel\Lumen\Routing\Controller as BaseController;

/**
 * Class Controller
 * @package Grocelivery\OrderTracker\Http\Controllers
 */
class Controller extends BaseController
{
    /** @var JsonResponse */
    protected $response;

    /**
     * Controller constructor.
     * @param JsonResponse $response
     */
    public function __construct(JsonResponse $response)
    {
        $this->response = $response;
    }

    /**
     * @return JsonResponseInterface
     */
    public function getInfo(): JsonResponseInterface
    {
        return $this->response
            ->add('app', config('app.name'))
            ->add('version', config('app.version'))
            ->add('framework', app()->version());
    }
}

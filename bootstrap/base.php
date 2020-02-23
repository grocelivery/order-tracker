<?php

$app = new Laravel\Lumen\Application(
    dirname(__DIR__)
);

$app->withEloquent();

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    Grocelivery\OrderTracker\Exceptions\Handler::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    Grocelivery\OrderTracker\Console\Kernel::class
);

$app->routeMiddleware([
    'auth' => Grocelivery\Utils\Middleware\Authenticate::class,
]);

$app->router->group([
    'namespace' => 'Grocelivery\OrderTracker\Http\Controllers',
], function ($router) {
    require __DIR__.'/../routes/api.php';
});

if (class_exists('Laravel\Tinker\TinkerServiceProvider')) {
    $app->register(Laravel\Tinker\TinkerServiceProvider::class);
}

$app->register(Grocelivery\Utils\Providers\UtilsServiceProvider::class);

$app->configure('app');
$app->configure('grocelivery');

return $app;

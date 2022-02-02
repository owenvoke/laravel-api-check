<?php

use OwenVoke\LaravelApiCheck\Http\Controllers\ApiCheckController;

return [

    /* The route to use for the API route. */
    'route' => '/api/ping',

    /* The controller to use for the API route. */
    'controller' => ApiCheckController::class,

    /* Any middleware to authenticate with for the API route. */
    'middleware' => [
        'auth:sanctum',
    ],

    /* Additional information to include in the API check response. */
    'meta' => [
        // ...
    ],

];

<?php

declare(strict_types=1);

namespace OwenVoke\LaravelApiCheck\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiCheckController
{
    public function __invoke(Request $request): JsonResponse
    {
        return response()->json([
            'authenticated' => Auth::check(),
            'meta' => config('api-check.extra'),
        ]);
    }
}

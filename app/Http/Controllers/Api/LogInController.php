<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogInController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (
            Auth::attempt([
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ])
        ) {
            // LOG ATTEMPT?

            return response()
                ->json([
                    'token' => 'TOKEN_GOES_HERE',
                ]);
        } else {
            // LOG ATTEMPT?

            return response()
                    ->json(['error' => 'UNABLE_TO_LOG_IN']);
        }
    }
}

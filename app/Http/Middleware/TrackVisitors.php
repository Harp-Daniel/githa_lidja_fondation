<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Illuminate\Support\Facades\Auth;

class TrackVisitors
{
    public function handle(Request $request, Closure $next)
    {
        // Only track for public pages, not admin
        if (!$request->is('admin/*')) {
            Visitor::create([
                'ip_address' => $request->ip(),
                'page' => $request->path(),
                'user_agent' => $request->userAgent(),
                'visited_at' => now(),
            ]);
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use App\Models\UserBusiness;
use App\Models\Vacancy;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class BusinessPermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $isAdmin = UserBusiness::all()
            ->where('business_id', $request->business)
            ->where('user_id', Auth::id())
            ->where('function', 'ceo' || 'admin')
            ->count();
        if (!empty($isAdmin)) {
            return $next($request);
        } else {
            abort(403);
        }
    }
}

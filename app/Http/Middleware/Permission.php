<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Permission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $expression): Response
    {
        if (!auth()->check()) abort(401);

        $nameOfRole = auth()->user()->role;
        $permissions = config("role.{$nameOfRole}");

        if (str_contains($expression, '|')) {
            $arrayExpressions = explode('|', $expression);
            if (empty(array_intersect($permissions, $arrayExpressions))) abort(\Illuminate\Http\Response::HTTP_UNAUTHORIZED);
        } else {
            if (!in_array($expression, $permissions)) abort(\Illuminate\Http\Response::HTTP_UNAUTHORIZED);
        }

        return $next($request);
    }
}

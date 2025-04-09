<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectMobileUsers
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->is('/') && $this->isMobile($request)) {
            return redirect()->route('mobileHome');
        }
    
        // Nếu là PC và truy cập mobile, redirect về trang PC
        if ($request->is('mobile*') && !$this->isMobile($request)) {
            return redirect()->route('home');
        }
        return $next($request);
    }
    protected function isMobile(Request $request)
    {
        $agent = $request->header('User-Agent');

        // Kiểm tra chuỗi user-agent đơn giản (có thể dùng package thay thế)
        return preg_match('/Mobile|Android|iPhone|iPad|iPod/i', $agent);
    }
}

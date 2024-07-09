<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CekLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (!Auth::check()) {
            return redirect('login')->with('error', 'Maaf anda belum memiliki akses');
        }

        $user = Auth::user();

        if (in_array($user->level_id, $roles)) {
            return $next($request);
        }
        // return redirect('login')->with('error', 'Maaf anda tidak memiliki akses');
        // switch ($user->level_id) {
        //     case 1:
        //         return redirect()->route('admin.dashboard');
        //     case 2:
        //         return redirect()->route('kasir.dashboard');
        //     case 3:
        //         return redirect()->route('customer.dashboard');
        //     default:
        // }
        return redirect('login')->with('error', 'Maaf, anda tidak memiliki akses');
    }
}

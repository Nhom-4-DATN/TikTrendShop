<?php

namespace App\Http\Middleware;

use App\Models\Stores;
use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class StoreMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $store = User::find(Auth::id())->oneStore;
        if (empty($store->name) || empty($store->phone) || empty($store->email)) {
            return redirect(route('register.shop'));
        }
        $address = User::find(Auth::id())->hasManyAddresses;
        if (empty($address) || count($address) <= 0) {
            return redirect(route('shop.register-address'));
        }
        return $next($request);
    }
}

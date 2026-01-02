<?php

namespace App\Http\Middleware;

use App\Models\Customer;
use App\Models\Order;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureCustomerHasCart
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $customer = Customer::where('session_id', $request->session()->getId())->first();
        $cart = $customer->orders
            ->where('status', null)
            ->first();

        if ($cart === null) {
            $cart = Order::create([
                'customer_id'  => $customer->id,
            ]);
        }

        return $next($request);
    }
}

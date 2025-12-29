<?php

namespace App\Http\Middleware;

use App\Models\Customer;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureCustomerExists
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $customer = Customer::where('session_id', $request->session()->getId())->first();

        if (!$customer) {
            Customer::create([
                'session_id' => $request->session()->getId(),
            ]);
        }

        return $next($request);
    }
}

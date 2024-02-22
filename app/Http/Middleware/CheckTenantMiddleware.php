<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckTenantMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        $tenantId = $request->header('tenant_id');
        if($tenantId){
            return $next($request);
        }else{
             $response = [
                'success' => false,
                'data' => [],
                'message' => 'tenant_id not found',
            ];

            return response()->json($response, 401);
        }

    }
}

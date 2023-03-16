<?php

namespace App\Http\Middleware;

use App\Models\job;
use Closure;
use Illuminate\Http\Request;

class validateJobStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $id = $request->route()->parameter('id');
        $job = job::findorFail($id);

        if ($job->status==true)
        {
            return $next($request);
        }
        else{
            abort(404);
        }

    }
}

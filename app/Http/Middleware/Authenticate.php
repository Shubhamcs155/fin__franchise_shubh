<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
           if($request->routeIs('admin.*')){
            return route('admin.login_form');
           }
           if($request->routeIs('instructor.*')){
            return route('instructor.login_form');
           }
           if($request->routeIs('student.*')){
            return route('student.login_form');
           }
           if($request->routeIs('franchise.*')){
            return route('franchise.login_form');
           }
        }
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Estudiante
{
    protected $auth;
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        switch ($this->auth->user()->user_role){
            case 'docente':
                return redirect()->to('docente');
                break;
            case 'estudiante':
//                return redirect()->to('estudiante');
                break;
        }
        return $next($request);
    }
}

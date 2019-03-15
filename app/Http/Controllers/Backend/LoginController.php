<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\Backend\Login\LoginRequest;
use App\Repositories\Usuarios\UsuarioRepository;

class LoginController extends Controller {
    
    function Index(LoginRequest $request){
      return UsuarioRepository::fazLogin($request);
    }
    
}
    
    
    
    

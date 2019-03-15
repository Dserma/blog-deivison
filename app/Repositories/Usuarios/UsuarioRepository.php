<?php

namespace App\Repositories\Usuarios;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\Backend\Login\LoginRequest;

class UsuarioRepository{

  static function fazLogin(LoginRequest $request){
    $credenciais = [
      'email' => $request->email,
      'password' => $request->senha
    ];
    if( Auth::guard('usuarios')->attempt($credenciais) ){
      return true;
    }else{
      return Redirect::back()->withErrors(['Senha Incorreta']);
    }
  }

}
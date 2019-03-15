<?php

namespace App\Models\Usuarios;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Usuario extends Authenticatable
{
    
    use Notifiable;
    
    public function getAuthPassword() {
      return $this->senha;
    }
    
    
}

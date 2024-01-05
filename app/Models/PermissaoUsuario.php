<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissaoUsuario extends Model
{
    use HasFactory;

    protected $table = 'model_has_permissions';
    public $timestamps = false;
    
    /*
    'permission_id' => #id das permissões conforme tabela permissions
    'model_type' => #nome do model de usuário conforme o valor a seguir: "App\Models\User"
    'model_id' => #id do usuário conforme tabela users
    */
    protected $fillable = [
        'permission_id',
        'model_type',
        'model_id'
    ];
}

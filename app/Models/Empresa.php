<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    public $table ="empresas";
    protected $fillable = array('*');
    
    public function clientes(){
            return $this->belongsToMany(Cliente::class,'empresa_cliente');
       }




} 


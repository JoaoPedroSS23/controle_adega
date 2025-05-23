<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    
    public $timestamps = true;
    protected $table = "produto";
    protected $primaryKey = "prd_id";
    protected $fillable = ['prd_nome', 'prd_valor', 'sta_id', 'cla_id'];
    protected $increment = true;
}

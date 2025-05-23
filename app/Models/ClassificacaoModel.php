<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassificacaoModel extends Model
{
    use HasFactory;

    protected $table = "classificacao";
    protected $fillable = ['cla_id'];
    protected $primaryKey = "cla_id";
    protected $increment = true;
    public $timestamps = true;

}

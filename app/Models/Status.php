<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public $timestamps = true;
    protected $table = "status";
    protected $primaryKey = "sta_id";
    protected $fillable = ['sta_id', 'sta_tipo', 'updated_at'];
    protected $increment = true;
}

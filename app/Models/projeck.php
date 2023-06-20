<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projeck extends Model
{
    use HasFactory;
    protected $primaryKey ="id_project";
    protected $guarded = [];
    protected $table = "projecks";

}

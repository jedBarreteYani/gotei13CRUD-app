<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zanpakuto extends Model
{

    protected $table = 'zanpakutos';
    protected $primaryKey = 'id';
    protected $fillable = ['shikai_name', 'bankai_name', 'type'];

    use HasFactory;
}

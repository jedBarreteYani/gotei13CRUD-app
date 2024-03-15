<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Captain extends Model
{

    protected $table = 'captains';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'squad'];

    use HasFactory;
}

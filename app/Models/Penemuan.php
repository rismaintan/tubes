<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penemuan extends Model
{
    use HasFactory;
    protected $table = "penemuan";
    public $timestamps = false;

    protected $guarded = ['id'];
}

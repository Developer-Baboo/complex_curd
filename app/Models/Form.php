<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = ['name', 'image', 'skill', 'gender', 'country', 'created_at', 'updated_at'];
    protected $table = 'forms';
}

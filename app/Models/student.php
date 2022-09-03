<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $table='students';
    protected $primarykey='id';
    protected $fillable=['name','mail','phone'];
}

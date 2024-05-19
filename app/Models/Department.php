<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table='departments';

    protected $fillable = ['name'];

    public function filieres()
    {
        return $this->hasMany(Filiere::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
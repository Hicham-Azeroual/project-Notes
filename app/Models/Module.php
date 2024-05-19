<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $table='modules';

    protected $fillable = ['name', 'filiere_id', 'class_id'];

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

    public function profModuleAssignments()
    {
        return $this->hasMany(ProfModuleAssignment::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function timetables()
    {
        return $this->hasMany(Timetable::class);
    }
}
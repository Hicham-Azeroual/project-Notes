<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfModuleAssignment extends Model
{
    use HasFactory;

    protected $fillable = ['prof_id', 'module_id', 'semester'];

    public function professor()
    {
        return $this->belongsTo(User::class, 'prof_id');
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
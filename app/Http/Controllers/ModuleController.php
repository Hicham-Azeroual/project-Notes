<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Filiere;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function show()
    {
        $majors = Filiere::with('classes')->get();
        return view('chef_dept.showClassModule',['majors'=>$majors]);
    }
    public function showModules($id)
    {
        // Récupérer la classe spécifique
        $classe = Classe::findOrFail($id);

        // Récupérer les modules associés à cette classe
        $modules = Module::where('class_id', $id)->get();

        return view('chef_dept.ModuleClasse', compact('classe', 'modules'));
    }

}

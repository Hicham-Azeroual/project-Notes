<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use App\Models\Department;
use App\Models\Filiere;
use App\Models\Classe;
use App\Models\Module;
use App\Models\User;
use App\Models\ProfModuleAssignment;
use App\Models\Note;
use App\Models\Timetable;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Insertion des données pour la table "departments"
        Department::insert([
            ['name' => 'Informatique'],
            ['name' => 'Mécanique'],
            ['name' => 'Électrique']
        ]);

        // Insertion des données pour la table "filieres"
        Filiere::insert([
            ['name' => 'Génie Logiciel', 'department_id' => 1],
            ['name' => 'Réseaux et Télécom', 'department_id' => 1],
            ['name' => 'Mécatronique', 'department_id' => 2]
        ]);

        // Insertion des données pour la table "classes"
        Classe::insert([
            ['name' => 'GL1-A', 'filiere_id' => 1],
            ['name' => 'RT2-B', 'filiere_id' => 2],
            ['name' => 'MT3-C', 'filiere_id' => 3]
        ]);

        // Insertion des données pour la table "modules"
        Module::insert([
            ['name' => 'Introduction à la programmation', 'filiere_id' => 1, 'class_id' => 1],
            ['name' => 'Réseaux informatiques', 'filiere_id' => 2, 'class_id' => 2],
            ['name' => 'Robotique industrielle', 'filiere_id' => 3, 'class_id' => 3]
        ]);

        // Insertion des données pour la table "users"
        User::insert([
            [
                'username' => 'prof1',
                'password' => Hash::make('password'),
                'role' => 'prof',
                'department_id' => null,
                'filiere_id' => null,
                'email' => 'prof1@example.com'
            ],
            [
                'username' => 'prof2',
                'password' => Hash::make('password'),
                'role' => 'prof',
                'department_id' => null,
                'filiere_id' => null,
                'email' => 'prof2@example.com'
            ],
            [
                'username' => 'coord1',
                'password' => Hash::make('password'),
                'role' => 'coord',
                'department_id' => null,
                'filiere_id' => null,
                'email' => 'coord1@example.com'
            ],
            [
                'username' => 'coord2',
                'password' => Hash::make('password'),
                'role' => 'coord',
                'department_id' => null,
                'filiere_id' => null,
                'email' => 'coord2@example.com'
            ],
            [
                'username' => 'chef1',
                'password' => Hash::make('password'),
                'role' => 'chef_dept',
                'department_id' => 1,
                'filiere_id' => null,
                'email' => 'chef1@example.com'
            ],
            [
                'username' => 'student1',
                'password' => Hash::make('password'),
                'role' => 'student',
                'department_id' => null,
                'filiere_id' => null,
                'email' => 'student1@example.com'
            ],
            [
                'username' => 'student2',
                'password' => Hash::make('password'),
                'role' => 'student',
                'department_id' => null,
                'filiere_id' => null,
                'email' => 'student2@example.com'
            ],
        ]);

        // Insertion des données pour la table "prof_module_assignments"
        ProfModuleAssignment::insert([
            ['prof_id' => 1, 'module_id' => 1, 'semester' => 'Spring'],
            ['prof_id' => 2, 'module_id' => 2, 'semester' => 'Spring'],
            ['prof_id' => 1, 'module_id' => 3, 'semester' => 'Fall']
        ]);

        // Insertion des données pour la table "notes"
        Note::insert([
            ['student_id' => 6, 'module_id' => 1, 'grade' => 17.5, 'date_recorded' => '2024-05-18'],
            ['student_id' => 7, 'module_id' => 2, 'grade' => 16.8, 'date_recorded' => '2024-05-18'],
            ['student_id' => 6, 'module_id' => 3, 'grade' => 19.2, 'date_recorded' => '2024-05-18']
        ]);

        // Insertion des données pour la table "timetables"
        Timetable::insert([
            ['user_id' => 1, 'day_of_week' => 'Monday', 'start_time' => '08:00:00', 'end_time' => '10:00:00', 'module_id' => 1],
            ['user_id' => 1, 'day_of_week' => 'Wednesday', 'start_time' => '10:00:00', 'end_time' => '12:00:00', 'module_id' => 1],
            ['user_id' => 2, 'day_of_week' => 'Tuesday', 'start_time' => '09:00:00', 'end_time' => '11:00:00', 'module_id' => 2],
            ['user_id' => 2, 'day_of_week' => 'Thursday', 'start_time' => '11:00:00', 'end_time' => '13:00:00', 'module_id' => 2],
            ['user_id' => 3, 'day_of_week' => 'Friday', 'start_time' => '13:00:00', 'end_time' => '15:00:00', 'module_id' => 3],
        ]);
    }

}
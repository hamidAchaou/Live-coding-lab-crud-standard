<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tasks")->insert([
            [
                'nom' => 'create base de donn',
                'description' => ' description creation base de donne .',
                'projetId' => '1',
                
            ],
            [
                'nom' => 'Arbre',
                'description' => 'Création d\'une application web pour l\'évaluation des compétences.',
                'projetId' => '1',

            ],
            [
                'nom' => '  CNMH',
                'description' => 'Création d\'une application web pour laa gestion des patients de centre cnmh.',
                'projetId' => '2',
            ]
        ]);
    }
}

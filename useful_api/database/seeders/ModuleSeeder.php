<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class ModuleSeeder extends Seeder
{
    // database/seeders/ModuleSeeder.php
    public function run()
    {
        Module::table('modules')->insert([
            ['name' => 'URL Shortener', 'description' => 'Raccourcir et gérer des liens'],
            ['name' => 'Wallet', 'description' => 'Gestion du solde et transferts'],
            ['name' => 'Marketplace + Stock Manager', 'description' => 'Gestion de produits et commandes'],
            ['name' => 'Time Tracker', 'description' => 'Suivi du temps et sessions'],
            ['name' => 'Investment Tracker', 'description' => 'Suivi du portefeuille d’investissement'],
        ]);
    }
}

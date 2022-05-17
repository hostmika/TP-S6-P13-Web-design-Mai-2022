<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $utilisateur  = new User();
        $utilisateur->name = "RAKOTOBE Mika";
        $utilisateur->email = "mika@gmail.com";
        $utilisateur->password = Hash::make('mika2022-');
        $utilisateur->save();
    }
}

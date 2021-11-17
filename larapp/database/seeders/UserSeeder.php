<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->fullname  = 'Jeremias Springfield';
        $user->email     = 'jeremias@gmail.com';
        $user->phone     = 320123122;
        $user->birthdate = '1980-11-15';
        $user->gender    = 'Male';
        $user->address   = 'Avenida Siempre Viva';
        $user->role      = 'Admin';
        $user->password  = bcrypt('admin');
        $user->save();
    }
}

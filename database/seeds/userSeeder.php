<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre' => 'judiel',
            'apellido' => 'reyes',
            'cedula' => '21424985',
            'correo' => 'judielsm@gmail.com',
            'sueldo_actual' => '15000',
            'password' => bcrypt('Turisas1b'),
        ]);
    }
}

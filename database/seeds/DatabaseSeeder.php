<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('courses')->insert([
            'name_course' => 'Desarrollo Web',
            'name_teacher' => 'Pedro Martinez',
            'capacity' => 10,
            'observations' => 'Curso desarrollo web donde aprenderas PHP',
        ]);
        
        DB::table('courses')->insert([
            'name_course' => 'Desarrollo Android',
            'name_teacher' => 'Julia Perez',
            'capacity' => 8,
            'observations' => 'Curso desarrollo donde aprenderas a realizar aplicaciones para andriod',
        ]);
    }
}

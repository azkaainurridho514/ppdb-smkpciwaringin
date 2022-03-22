<?php

namespace Database\Seeders;

use App\Models\Program;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        Program::create([
            'programId' => 1,
            'nama' => 'Teknik Kendaraan Ringan Otomotif',
            'slug' => 'teknik-kendaraan-ringan-otomotif',
            'kampus' => '01'
        ]);

        Program::create([
            'programId' => 2,
            'nama' => 'Bisnis Daring Dan Pemasaran',
            'slug' => 'bisnis-daring-dan-pemasaran',
            'kampus' => '01'
        ]);

        Program::create([
            'programId' => 3,
            'nama' => 'Perbankan Syariah',
            'slug' => 'perbankan-syariah',
            'kampus' => '01'
        ]);

        Program::create([
            'programId' => 4,
            'nama' => 'Teknik Bisnis Sepeda Motor',
            'slug' => 'teknik-bisnis-sepeda-motor',
            'kampus' => '02'
        ]);

        Program::create([
            'programId' => 5,
            'nama' => 'Teknik Komputer Dan Jaringan',
            'slug' => 'teknik-komputer-dan-jaringan',
            'kampus' => '02'
        ]);

        Program::create([
            'programId' => 6,
            'nama' => 'Rekayasa Perangkat Lunak',
            'slug' => 'rekayasa-perangkat-lunak',
            'kampus' => '02'
        ]);
        
        // Student::factory(6)->create();

    }
}

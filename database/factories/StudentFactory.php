<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'nama_lengkap' => $this->faker->username(),
            'tanggal_lahir' => now(),
            'jk' => 'Laki - laki',
            'agama' => 'Islam',
            'programId' => 2,
            'ukuran_baju' => 'L',
            'no_hp' => 1234567890123,
            'anak_ke' => '1',
            'alamat' => $this->faker->address(),
            'nisn' => 989876233,
            'nik' => 82376198,
            'kk' => 23138498,
            'kip' => 98273651,
            'asal_sekolah' => 'Unknown',
            'alamat_asal_sekolah' => 'Unknown',
            'nomor_seri_ijazah' => 92837615,
            'tgl_lulus' => now(),
            'email' => $this->faker->email()
        ];
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Car;

class DatabaseSeeder extends Seeder
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // \App\Models\User::factory(10)->create();

        User::create([
            'name'      => 'Putra Agustiansyah',
            'alamat'    => 'Jl. Masjid',
            'no_telp'   => '089691497717',
            'no_sim'    => '123123',
            'email'     => 'putra@gmail.com',
            'password'  => static::$password ??= Hash::make('password'), // password
            'role_id'   => 1
        ]);

        Car::create([
            'merek'         => 'Toyota',
            'model'         => 'Avanza',
            'no_plat'       => 'B 4552 VBD',
            'tarif_perhari' => '300000',
            'status'        => '1',
        ]);

        Car::create([
            'merek'         => 'Toyota',
            'model'         => 'Yaris',
            'no_plat'       => 'B 4332 FAB',
            'tarif_perhari' => '300000',
            'status'        => '1',
        ]);
    }
}

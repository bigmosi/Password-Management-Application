<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Usersl extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usersl::create([
            'name' => 'kinyera amos',
            'email' => 'kinyeramo@gmail.com',
            'password' => '123445'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class membersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('memebrs')->insert([
            'name'=>Str::random(10),
            'email'=>Str::random(10).'@gmail.com',
            'address'=>Str::random(10),

        ]);
    }
}

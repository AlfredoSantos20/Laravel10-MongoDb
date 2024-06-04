<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Account;
use Hash;
use DB;
class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make('123456');

        DB::collection('accounts')->insert([
            [
                'Fname' => 'test',
                'Mname' => 'test',
                'email' => 'test@test.com',
                'mobile' => '09958847884',
                'image' => '',
                'status' => 1,
                'password' => $password,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}

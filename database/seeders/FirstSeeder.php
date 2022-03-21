<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Role;
use App\Models\Balance;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(["name" => "Administrator"]);
        $bank = Role::create(["name" => "Bank"]);
        $canteen = Role::create(["name" => "Canteen"]);
        $student = Role:: create(["name" => "Student"]);

        $ira =User::create([
            "name" => "Ira",
            "email" => "ira@gmail.com",
            "password" => Hash::make("ira"),
            "role_id" => $admin->id
        ]);

        $fadiah = User::create([
            "name" => "Fadiah",
            "email" => "fadiah@gmail.com",
            "password" => Hash::make("fadiah"),
            "role_id" => $bank->id
        ]);

        $keren = User::create([
            "name" => "Keren",
            "email" => "keren@gmail.com",
            "password" => Hash::make("keren"),
            "role_id" => $canteen->id
        ]);

        $septy = User::create([
            "name" => "Septy",
            "email" => "septy@gmail.com",
            "password" => Hash::make("septy"),
            "role_id" => $student->id
        ]);

        $risol = Item::create([
            "name" => "Risol ",
            "image" => "good-day.png",
            "price" => 3000,
            "stock" => 20,
            "desc" => "Risol isi Mayonaise"
        ]);

        $kopi = Item::create([
            "name" => "Good Day",
            "image" => "good-day.png",
            "price" => 3000,
            "stock" => 20,
            "desc" => "Good Day"
        ]);

        Balance::create([
            "user_id" => $septy->id,
            "balance" => 50000
        ]);

        Transaction::create([
            "user_id" => $septy->id,
            "item_id" => null,
            "quantity" => 3,
            "amount"   => 5000,
            "invoice_id" => "SAL_001",
            "type" => 1,
            "status" => 3
        ]);
    }
}

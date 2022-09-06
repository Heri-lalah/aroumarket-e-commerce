<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1=new \App\Models\User();
        $user1->name="Aroumarket";
        $user1->firstName="User1";
        $user1->email="user1@gmail.com";
        $user1->password=Hash::make(123456789);
        $user1->save();

        $user2=new User();
        $user2->name="Aroumarket";
        $user2->firstName="User2";
        $user2->email="user2@gmail.com";
        $user2->password=Hash::make(123456789);
        $user2->save();

        $user3=new User();
        $user3->name="Aroumarket";
        $user3->firstName="User3";
        $user3->email="user3@gmail.com";
        $user3->password=Hash::make(123456789);
        $user3->save();

        $admin1=new User();
        $admin1->name="Aroumarket";
        $admin1->firstName="Admin1";
        $admin1->email="admin1@gmail.com";
        $admin1->admin=true;
        $admin1->password=Hash::make(123456789);
        $admin1->save();

        $admin2=new User();
        $admin2->name="Aroumarket";
        $admin2->firstName="Admin2";
        $admin2->email="admin2@gmail.com";
        $admin2->admin=true;
        $admin2->password=Hash::make(123456789);
        $admin2->save();
    }
}

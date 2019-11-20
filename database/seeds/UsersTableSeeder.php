<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $user = new User();
        $user->name = "Lê Duy Dương";
        $user->phone = "0397487203";
        $user->address = "Tuyên Quang";
        $user->email = "admin@gmail.com";
        $user->avatar = "admin/admin.jpg";
        $user->password = Hash::make('12345678');
        $user->role = 1;
        $user->save();
    }
}

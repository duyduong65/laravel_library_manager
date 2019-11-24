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

        $user = new User();
        $user->name = "trần khắc Niệm";
        $user->phone = "0397487203";
        $user->address = "Tuyên Quang";
        $user->email = "guest1@gmail.com";
        $user->avatar = "admin/admin.jpg";
        $user->password = Hash::make('12345678');
        $user->role = 2;
        $user->save();

        $user = new User();
        $user->name = "Lê Huỳnh PHong";
        $user->phone = "0397487203";
        $user->address = "Tuyên Quang";
        $user->email = "guest2@gmail.com";
        $user->avatar = "admin/admin.jpg";
        $user->password = Hash::make('12345678');
        $user->role = 2;
        $user->save();

        $user = new User();
        $user->name = "Thái Huyền Trân";
        $user->phone = "0397487203";
        $user->address = "Tuyên Quang";
        $user->email = "guest3@gmail.com";
        $user->avatar = "admin/admin.jpg";
        $user->password = Hash::make('12345678');
        $user->role = 2;
        $user->save();

        $user = new User();
        $user->name = "Long Trần Thủ";
        $user->phone = "0397487203";
        $user->address = "Tuyên Quang";
        $user->email = "guest4@gmail.com";
        $user->avatar = "admin/admin.jpg";
        $user->password = Hash::make('12345678');
        $user->role = 2;
        $user->save();

        $user = new User();
        $user->name = "Hoàng Văn Vẫn";
        $user->phone = "0397487203";
        $user->address = "Tuyên Quang";
        $user->email = "guest5@gmail.com";
        $user->avatar = "admin/admin.jpg";
        $user->password = Hash::make('12345678');
        $user->role = 2;
        $user->save();
    }
}

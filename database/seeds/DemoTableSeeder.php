<?php

use Illuminate\Database\Seeder;
use App\User;


class DemoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "user";
        $user->password = bcrypt("password");
        $user->email = "user@gmail.com";
        $user->nomor = "0099933884994";
        $user->alamat = "bandung";
        $user->save();
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Administrator;

class AdministratorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new Administrator();
        $administrator->name = "Administrator";
        $administrator->email = "Administrator@barbershop.com";
        $administrator->password = bcrypt("administratorpassword");
        $administrator->save();
    }
}

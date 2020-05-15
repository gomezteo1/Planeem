<?php

use Illuminate\Database\Seeder;
use App\Model\User;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'=>'root',
            'email'=>'root@gamil.com',
            'password'=>'123456', 
            'selected_planne'=>'1'
        ]);
    }
}

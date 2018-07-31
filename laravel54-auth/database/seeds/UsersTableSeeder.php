<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    factory(\App\User::class,1)->states('admin')->create([
		    'email' => 'admin@mail.com',
		    'phone' => '999999999',
		    'cpf' => '12096404657',
	    ]);
	    factory(\App\User::class,1)->states('user')->create([
		    'email' => 'user@mail.com'
	    ]);
	    factory(\App\User::class,3)->states('user')->create();
    }
}

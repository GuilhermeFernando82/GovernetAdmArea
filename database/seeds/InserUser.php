<?php

use Illuminate\Database\Seeder;

class InserUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => '9',
            'name'      => 'Luiz',
            'email'     => 'guilherme.oliveira@gebit.com.br',
            'login'     => 'Teste',
            'password'  => bcrypt('qwer1234'),
            'address'   => 'Rua tal 444',
            'phone'     => '9956323271',
            'birthdate' => '25091994',
            'youdoclub' => 3,
        ]);
    }
}

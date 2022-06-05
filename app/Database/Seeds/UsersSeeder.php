<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i=0;$i<100;$i++) {
            $data = [
                'username'   => $faker->userName,
                'nama'       => $faker->name,
                'email'      => $faker->email,
                'password'   => password_hash('admin', PASSWORD_DEFAULT),
                'no_telp'    => $faker->randomNumber(8, false),
                'alamat'     => $faker->address,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]; 
            $this->db->table('users')->insert($data);
        }
    }
}

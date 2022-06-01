<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MenusSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i=0;$i<100;$i++) {
            $data = [
                // $kode_menu = $faker->randomElement($array = array ('MK','MM')).$faker->randomNumber(5, false),
                'kode_menu'      => $faker->randomElement(['MK','MM']).$faker->randomNumber(5, false),
                'nama_menu'      => $faker->name,
                'harga_menu'     => $faker->randomNumber(5, false),
                'foto_menu'      => 'default.jpg',
                'deskripsi_menu' => $faker->text($maxNbChars = 50),
                'created_at'     => date("Y-m-d H:i:s"),
                'updated_at'     => date("Y-m-d H:i:s"),
            ]; 
            $this->db->table('menus')->insert($data);
        }
    }
}

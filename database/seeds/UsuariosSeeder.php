<?php

use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      for ($i=0; $i < 50; $i++) {
          \DB::table('usuarios')->insert(array(
                 'nome' => 'Pessoa ' . $faker->firstNameFemale . ' ' . $faker->lastName,
                 'email' => $faker->randomElement(['chocolate','vainilla','cheesecake'])
                 'senha' => $faker->randomElement(['chocolate','vainilla','cheesecake'])
                 'tipo_usuario' => $faker->randomElement(['chocolate','vainilla','cheesecake'])
                 'descricao' => $faker->randomElement(['chocolate','vainilla','cheesecake'])
                 'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
          ));
      }
    }
}

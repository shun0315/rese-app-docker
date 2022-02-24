<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    $this->call(AreasTableSeeder::class);
    $this->call(GenresTableSeeder::class);
    $this->call(ShopsTableSeeder::class);
    $this->call(UsersTableSeeder::class);
    $this->call(ReservesTableSeeder::class);
    $this->call(FavoritesTableSeeder::class);
    $this->call(EvaluationsTableSeeder::class);
    $this->call(OwnersTableSeeder::class);
    $this->call(AdminsTableSeeder::class);
  }
}

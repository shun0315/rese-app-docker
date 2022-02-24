<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $param = [
      'name' => 'テストユーザー',
      'email' => 'test@test.com',
      'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
      'email_verified_at' => new DateTime(),
    ];
    DB::table('users')->insert($param);
    $param = [
      'name' => 'ForEvaluations',
      'email' => 'evaluation@evaluation',
      'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
      'email_verified_at' => new DateTime(),
    ];
    DB::table('users')->insert($param);
  }
}

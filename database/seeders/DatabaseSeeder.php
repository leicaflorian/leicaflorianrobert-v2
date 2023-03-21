<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
  /**
   * Seed the application's database.
   */
  public function run(): void {
    $this->call([
      ProjectsSeeder::class,
    ]);
    
    // \App\Models\User::factory(10)->create();
    
    if ( !env("ADMIN_PASSWORD")) {
      throw new \Exception("ADMIN_PASSWORD not set in .env file");
    }
    
    User::updateOrInsert([
      "email" => 'info@leicaflorianrobert.dev'
    ], [
      'name'     => 'Florian Leica',
      'email'    => 'info@leicaflorianrobert.dev',
      'password' => bcrypt(env("ADMIN_PASSWORD")),
    ]);
  }
}

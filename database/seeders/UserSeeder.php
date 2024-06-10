<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
  /**
    * Run the database seeds.
  */
  public function run(): void
  {
    User::create([
      'name' => 'Admin',
      'email' => 'admin@example.com',
      'password' => Hash::make('password'),
      'status' => 'active',
      'type' => 'admin',
    ]);

    User::create([
      'name' => 'Regular',
      'email' => 'regular@example.com',
      'password' => Hash::make('password'),
      'status' => 'active',
      'type' => 'regular',
    ]);

    User::create([
      'name' => 'Adviser',
      'email' => 'adviser@example.com',
      'password' => Hash::make('password'),
      'status' => 'active',
      'type' => 'adviser',
    ]);

    User::create([
      'name' => 'Pending',
      'email' => 'pending@example.com',
      'password' => Hash::make('password'),
      'status' => 'pending',
      'type' => 'regular',
    ]);

    
  }
}

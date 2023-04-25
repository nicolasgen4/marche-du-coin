<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Ventes;
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
        //\App\Models\User::factory(8)->create();

        $user = User::factory()->create([
            'name' => 'Robert le Preux',
            'email' => 'robertlepreux@gmail.com'
        ]);

        Ventes::factory(20)->create([
            'user_id' => $user->id
        ]);
    }
}

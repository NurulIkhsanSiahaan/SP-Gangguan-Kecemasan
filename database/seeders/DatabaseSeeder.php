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
        // \App\Models\User::factory(10)->create();
        
        $seeders = [
            'PermissionTableSeeder',
            'CreateAdminUserSeeder',
            'UserSeeder',
            'CreateGejalaSeeder',
            'CreatePenyakitSeeder',
            'GejalaPenyakitSeeder',
            // 'CreateRuleSeeder',
        ];

        foreach ($seeders as $seeder) {
            (new ("Database\\Seeders\\" . $seeder)())->run();
        }
    }
}

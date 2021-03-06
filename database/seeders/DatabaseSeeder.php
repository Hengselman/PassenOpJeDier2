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
        $this->call([
            ImagesTableSeeder::class,
            HuisdierSoortenTableSeeder::class,
            HuisdierHondTableSeeder::class,
            HuisdierKaterTableSeeder::class,
            HuisdierCaviaTableSeeder::class,
            HuisdierSlangTableSeeder::class,
            HuisdierPapegaaiTableSeeder::class,
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            CommentSeeder::class,
        ]);
    }
}

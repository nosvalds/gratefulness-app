<?php

use Illuminate\Database\Seeder;

class ThoughtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seed thoughts into our DB for testing
        factory(App\Thought::class, 5)->create();
    }
}

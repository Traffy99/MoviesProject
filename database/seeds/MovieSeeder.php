<?php

use App\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::truncate();
        Movie::create(array('id' => 1, 'title' => 'Psycho', 'Length' => 109));
        Movie::create(array('id' => 2, 'title' => 'The Departed', 'Length' => 151));
        Movie::create(array('id' => 3, 'title' => 'Whiplash', 'Length' => 106));
        Movie::create(array('id' => 4, 'title' => 'Prestige', 'Length' => 130));
        Movie::create(array('id' => 5, 'title' => 'Casablanca', 'Length' => 102));
        Movie::create(array('id' => 6, 'title' => 'Joker', 'Length' => 122));
        Movie::create(array('id' => 7, 'title' => 'Alien', 'Length' => 117));
        Movie::create(array('id' => 8, 'title' => 'Avengers: Infinity War', 'Length' => 149));
    }
}

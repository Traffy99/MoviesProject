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
        Movie::create(array('id' => 1, 'title' => 'Psycho', 'Length' => 109, 'cover'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/7/76/Psycho_%281960%29_theatrical_poster_%28retouched%29.jpg/800px-Psycho_%281960%29_theatrical_poster_%28retouched%29.jpg'));
        Movie::create(array('id' => 2, 'title' => 'The Departed', 'Length' => 151, 'cover'=>'https://m.media-amazon.com/images/M/MV5BMTI1MTY2OTIxNV5BMl5BanBnXkFtZTYwNjQ4NjY3._V1_.jpg'));
        Movie::create(array('id' => 3, 'title' => 'Whiplash', 'Length' => 106, 'cover'=>'https://m.media-amazon.com/images/M/MV5BOTA5NDZlZGUtMjAxOS00YTRkLTkwYmMtYWQ0NWEwZDZiNjEzXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SX675_CR0,0,675,999_AL_.jpg'));
        Movie::create(array('id' => 4, 'title' => 'Prestige', 'Length' => 130, 'cover'=>'https://m.media-amazon.com/images/M/MV5BMjA4NDI0MTIxNF5BMl5BanBnXkFtZTYwNTM0MzY2._V1_.jpg'));
        Movie::create(array('id' => 5, 'title' => 'Casablanca', 'Length' => 102, 'cover'=>'https://m.media-amazon.com/images/M/MV5BY2IzZGY2YmEtYzljNS00NTM5LTgwMzUtMzM1NjQ4NGI0OTk0XkEyXkFqcGdeQXVyNDYyMDk5MTU@._V1_.jpg'));
        Movie::create(array('id' => 6, 'title' => 'Joker', 'Length' => 122, 'cover'=>'https://m.media-amazon.com/images/M/MV5BNGVjNWI4ZGUtNzE0MS00YTJmLWE0ZDctN2ZiYTk2YmI3NTYyXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SY1000_CR0,0,674,1000_AL_.jpg'));
        Movie::create(array('id' => 7, 'title' => 'Alien', 'Length' => 117, 'cover'=>'https://m.media-amazon.com/images/M/MV5BMmQ2MmU3NzktZjAxOC00ZDZhLTk4YzEtMDMyMzcxY2IwMDAyXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SY1000_CR0,0,678,1000_AL_.jpg'));
        Movie::create(array('id' => 8, 'title' => 'Avengers: Infinity War', 'Length' => 149, 'cover'=>'https://m.media-amazon.com/images/M/MV5BMjMxNjY2MDU1OV5BMl5BanBnXkFtZTgwNzY1MTUwNTM@._V1_SY1000_CR0,0,674,1000_AL_.jpg'));
    }
}

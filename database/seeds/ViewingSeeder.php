<?php

use App\Viewing;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ViewingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Viewing::truncate();

        Viewing::create(array('id' => 1, 'movie_id' => '1', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-17T09:00:00'), 'price' => 4.50 ));
        Viewing::create(array('id' => 2, 'movie_id' => '1', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-18T12:00:00'), 'price' => 4.50 ));
        Viewing::create(array('id' => 3, 'movie_id' => '1', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-19T09:00:00'), 'price' => 4.50 ));
        Viewing::create(array('id' => 4, 'movie_id' => '1', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-20T09:00:00'), 'price' => 4.50 ));
        Viewing::create(array('id' => 5, 'movie_id' => '1', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-05T09:00:00'), 'price' => 4.50 ));
        Viewing::create(array('id' => 6, 'movie_id' => '1', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-06T09:00:00'), 'price' => 4.50 ));
        Viewing::create(array('id' => 7, 'movie_id' => '1', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-07T09:00:00'), 'price' => 4.50 ));
        Viewing::create(array('id' => 8, 'movie_id' => '1', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-08T09:00:00'), 'price' => 4.50 ));
        Viewing::create(array('id' => 9, 'movie_id' => '1', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-09T09:00:00'), 'price' => 4.50 ));
        Viewing::create(array('id' => 10, 'movie_id' => '6', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-10T09:00:00'), 'price' => 4.50 ));
        Viewing::create(array('id' => 11, 'movie_id' => '6', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-11T09:00:00'), 'price' => 4.50 ));
        Viewing::create(array('id' => 12, 'movie_id' => '6', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-12T09:00:00'), 'price' => 4.50 ));
        Viewing::create(array('id' => 13, 'movie_id' => '6', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-13T09:00:00'), 'price' => 4.50 ));
        Viewing::create(array('id' => 14, 'movie_id' => '6', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-14T09:00:00'), 'price' => 4.50 ));
        Viewing::create(array('id' => 15, 'movie_id' => '6', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-15T09:00:00'), 'price' => 4.50 ));
        Viewing::create(array('id' => 16, 'movie_id' => '6', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-16T09:00:00'), 'price' => 4.50 ));

        Viewing::create(array('id' => 17, 'movie_id' => '2', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-17T15:00:00'), 'price' => 5.00 ));
        Viewing::create(array('id' => 18, 'movie_id' => '2', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-18T09:00:00'), 'price' => 5.00 ));
        Viewing::create(array('id' => 19, 'movie_id' => '2', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-19T12:00:00'), 'price' => 5.00 ));
        Viewing::create(array('id' => 20, 'movie_id' => '2', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-20T12:00:00'), 'price' => 5.00 ));
        Viewing::create(array('id' => 21, 'movie_id' => '2', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-5T12:00:00'), 'price' => 5.00 ));
        Viewing::create(array('id' => 22, 'movie_id' => '2', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-6T12:00:00'), 'price' => 5.00 ));
        Viewing::create(array('id' => 23, 'movie_id' => '2', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-7T12:00:00'), 'price' => 5.00 ));
        Viewing::create(array('id' => 24, 'movie_id' => '2', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-8T12:00:00'), 'price' => 5.00 ));
        Viewing::create(array('id' => 25, 'movie_id' => '2', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-9T12:00:00'), 'price' => 5.00 ));
        Viewing::create(array('id' => 26, 'movie_id' => '2', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-10T12:00:00'), 'price' => 5.00 ));
        Viewing::create(array('id' => 27, 'movie_id' => '2', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-11T12:00:00'), 'price' => 5.00 ));
        Viewing::create(array('id' => 28, 'movie_id' => '2', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-12T12:00:00'), 'price' => 5.00 ));
        Viewing::create(array('id' => 29, 'movie_id' => '2', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-13T12:00:00'), 'price' => 5.00 ));
        Viewing::create(array('id' => 30, 'movie_id' => '2', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-14T12:00:00'), 'price' => 5.00 ));
        Viewing::create(array('id' => 31, 'movie_id' => '2', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-15T12:00:00'), 'price' => 5.00 ));
        Viewing::create(array('id' => 32, 'movie_id' => '2', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-16T12:00:00'), 'price' => 5.00 ));

        Viewing::create(array('id' => 33, 'movie_id' => '3', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-17T12:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 34, 'movie_id' => '3', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-18T15:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 35, 'movie_id' => '3', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-19T15:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 36, 'movie_id' => '3', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-20T15:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 37, 'movie_id' => '3', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-5T15:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 38, 'movie_id' => '3', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-6T15:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 39, 'movie_id' => '3', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-7T15:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 40, 'movie_id' => '3', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-8T15:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 41, 'movie_id' => '3', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-9T15:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 42, 'movie_id' => '3', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-10T15:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 43, 'movie_id' => '7', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-11T15:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 44, 'movie_id' => '7', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-12T15:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 45, 'movie_id' => '7', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-13T15:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 46, 'movie_id' => '7', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-14T15:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 47, 'movie_id' => '7', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-15T15:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 48, 'movie_id' => '7', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-16T15:00:00'), 'price' => 5.50 ));

        Viewing::create(array('id' => 49, 'movie_id' => '4', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-17T21:00:00'), 'price' => 6.50 ));
        Viewing::create(array('id' => 50, 'movie_id' => '4', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-18T18:00:00'), 'price' => 6.50 ));
        Viewing::create(array('id' => 51, 'movie_id' => '4', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-19T21:00:00'), 'price' => 6.50 ));
        Viewing::create(array('id' => 52, 'movie_id' => '4', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-20T18:00:00'), 'price' => 6.50 ));
        Viewing::create(array('id' => 53, 'movie_id' => '4', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-5T18:00:00'), 'price' => 6.50 ));
        Viewing::create(array('id' => 54, 'movie_id' => '4', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-6T18:00:00'), 'price' => 6.50 ));
        Viewing::create(array('id' => 55, 'movie_id' => '4', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-7T18:00:00'), 'price' => 6.50 ));
        Viewing::create(array('id' => 56, 'movie_id' => '4', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-8T18:00:00'), 'price' => 6.50 ));
        Viewing::create(array('id' => 57, 'movie_id' => '4', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-9T18:00:00'), 'price' => 6.50 ));
        Viewing::create(array('id' => 58, 'movie_id' => '4', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-10T18:00:00'), 'price' => 6.50 ));
        Viewing::create(array('id' => 59, 'movie_id' => '4', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-11T18:00:00'), 'price' => 6.50 ));
        Viewing::create(array('id' => 60, 'movie_id' => '4', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-12T18:00:00'), 'price' => 6.50 ));
        Viewing::create(array('id' => 61, 'movie_id' => '4', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-13T18:00:00'), 'price' => 6.50 ));
        Viewing::create(array('id' => 62, 'movie_id' => '4', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-14T18:00:00'), 'price' => 6.50 ));
        Viewing::create(array('id' => 63, 'movie_id' => '4', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-15T18:00:00'), 'price' => 6.50 ));
        Viewing::create(array('id' => 64, 'movie_id' => '4', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-16T18:00:00'), 'price' => 6.50 ));

        Viewing::create(array('id' => 65, 'movie_id' => '5', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-17T18:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 66, 'movie_id' => '5', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-18T21:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 67, 'movie_id' => '5', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-19T18:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 68, 'movie_id' => '5', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-20T21:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 69, 'movie_id' => '5', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-5T21:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 70, 'movie_id' => '5', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-6T21:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 71, 'movie_id' => '8', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-7T21:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 72, 'movie_id' => '8', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-8T21:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 73, 'movie_id' => '8', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-9T21:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 74, 'movie_id' => '8', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-10T21:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 75, 'movie_id' => '8', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-11T21:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 76, 'movie_id' => '8', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-12T21:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 77, 'movie_id' => '8', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-13T21:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 78, 'movie_id' => '8', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-14T21:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 79, 'movie_id' => '8', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-15T21:00:00'), 'price' => 5.50 ));
        Viewing::create(array('id' => 80, 'movie_id' => '8', 'time' => Carbon::createFromFormat('Y-m-d\TH:i:s', '2020-06-16T21:00:00'), 'price' => 5.50 ));

    }
}


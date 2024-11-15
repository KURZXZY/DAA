<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        DB::table('reviews')->insert([
            [
                'name' => 'John Doe',
                'rating' => 5,
                'review' => 'Makanannya enak sekali, pelayanannya juga ramah. Pasti akan kembali lagi!',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Jane Smith',
                'rating' => 4,
                'review' => ' Es Teh segar dan lezat, tapi agak lama menunggu pesanannya.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Michael Johnson',
                'rating' => 3,
                'review' => 'Ayam Bakarnya lumayan, tapi harganya cukup mahal untuk porsi yang diberikan.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Emily Davis',
                'rating' => 5,
                'review' => 'Gorengan terbaik yang pernah saya coba, sangat direkomendasikan!',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class postsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $no_of_data = 50000;
        $test_data = array();
        for ($i = 0; $i < $no_of_data; $i++){
            $test_data[$i]['title'] = Str::random(10);
            $test_data[$i]['user_id'] = rand(1,10000);
        }
        $chunk_data = array_chunk($test_data, 1000);
        if (isset($chunk_data) && !empty($chunk_data)) {
            foreach ($chunk_data as $chunk_data_val) {
                DB::table('vishal_test_posts')->insert($chunk_data_val);
            }
        }
    }
}

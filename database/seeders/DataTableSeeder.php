<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_tables')-> insert([
            'datetime' => '2020-01-01',
            'value_1' => 10,
            'value_2' => 5,
            'device_id' => 1
        ]);
        
        DB::table('data_tables')-> insert([
            'datetime' => '2020-01-02',
            'value_1' => 8,
            'value_2' => 9,
            'device_id' => 1
        ]);
        
        DB::table('data_tables')-> insert([
            'datetime' => '2020-01-03',
            'value_1' => 9,
            'value_2' => 10,
            'device_id' => 1
        ]);
        
        DB::table('data_tables')-> insert([
            'datetime' => '2020-01-04',
            'value_1' => 5,
            'value_2' => 11,
            'device_id' => 1
        ]);
        
        DB::table('data_tables')-> insert([
            'datetime' => '2020-01-05',
            'value_1' => 11,
            'value_2' => 10,
            'device_id' => 1
        ]);
    }
}
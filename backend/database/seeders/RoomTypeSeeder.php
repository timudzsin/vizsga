<?php

namespace Database\Seeders;

use App\Models\RoomType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoomType::create([
            'type_name' => 'egyéni tanulás',
        ]);
        RoomType::create([
            'type_name' => 'csoportmunka',
        ]);
        RoomType::create([
            'type_name' => 'számítógépes terem',
        ]);
        RoomType::create([
            'type_name' => 'csendes olvasóterem',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\StudyRoom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudyRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StudyRoom::create([
            'room_type_id' => 1,
            'room_name' => 'Don Bosco terem',
            'floor' => 2,
            'total_space' => 15,
            'occupied_space' => 0,
        ]);

        StudyRoom::create([
            'room_type_id' => 3,
            'room_name' => 'Minecraft terem',
            'floor' => 3,
            'total_space' => 30,
            'occupied_space' => 30,
        ]);
        StudyRoom::create([
            'room_type_id' => 3,
            'room_name' => 'Portal 2 terem',
            'floor' => 3,
            'total_space' => 10,
            'occupied_space' => 4,
        ]);
        StudyRoom::create([
            'room_type_id' => 3,
            'room_name' => 'Linux terem',
            'floor' => 3,
            'total_space' => 4,
            'occupied_space' => 1,
        ]);
        StudyRoom::create([
            'room_type_id' => 3,
            'room_name' => 'Zene producer terem',
            'floor' => 4,
            'total_space' => 20,
            'occupied_space' => 15,
        ]);

        StudyRoom::create([
            'room_type_id' => 4,
            'room_name' => 'Könyvtár',
            'floor' => 0,
            'total_space' => 50,
            'occupied_space' => 10,
        ]);
    }
}

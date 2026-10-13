<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyRoom extends Model
{
    /** @use HasFactory<\Database\Factories\StudyRoomFactory> */
    use HasFactory;

    protected $fillable = [
        'room_type_id',
        'room_name',
        'floor',
        'total_space',
        'occupied_space',
    ];

    public function room_type()
    {
        return $this->belongsTo(RoomType::class);
    }
}

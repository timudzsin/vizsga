<?php

namespace App\Http\Controllers;

use App\Models\StudyRoom;
use App\Http\Requests\StoreStudyRoomRequest;
use App\Http\Requests\UpdateStudyRoomRequest;
use App\Models\RoomType;
use Illuminate\Http\Request;

class StudyRoomController extends Controller
{
    public function indexWithRoomTypes()
    {
        return StudyRoom::with('room_type')->get();
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudyRoomRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(StudyRoom $studyRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(int $id, Request $request)
    {
        StudyRoom::find($id)->update([
            'room_type_id' => $request->room_type_id,
            'room_name' => $request->room_name,
            'floor' => $request->floor,
            'total_space' => $request->total_space,
            'occupied_space' => $request->occupied_space,

        ]);

        return response()->json([
            'message' => 'szobatípus sikeresen frissítve',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        StudyRoom::find($id)->delete();

        return response()->json([
            'message' => 'tanulószoba sikeresen törölve',
        ]);
    }
}

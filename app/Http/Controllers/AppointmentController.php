<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\Appointment;
use Auth;

class AppointmentController extends Controller
{
    /**
     * New room type
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rooms = Room::where('status','=','Empty')->get(); //Collection
        if (count($rooms)){
            $emptyRoom = $rooms->first();
            $data = [
                'status' =>'Occupied',
            ];
            $emptyRoom->update($data);
        } else {
            return back();
        }
        $request->validate([
            'start' => ['required'],
            'end' => ['required'],
        ]);
        $roomtype = Appointment::create([
            'start' => $request->start,
            'end' => $request->end,
            'client_id' => Auth::user()->id,
            'type_id' => '1',
            'room_id' => $emptyRoom->id,
        ]);

        return back();
    }
    public function index()
    {
        $appointments = Appointment::orderBy('created_at', 'desc')->where('client_id','=', Auth::user()->id)->get();
        return view('index',compact('RoomTypes','RoomType'));
    }
}

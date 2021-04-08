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
        // Use either one of the below.
        $rooms = Room::where('status','=','Empty')->get(); //Collection

        if (count($rooms)){
            $emptyRoom = $rooms->first();
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
    public function check(Request $request){
        $request->name,
        //Convert start and end date to date format
        $start_date = strtotime($request->start);
        $start_date = date('Y-m-d',$start_date);

        $end_date = strtotime($request->end);
        $end_date = date('Y-m-d',$end_date);
    }
    public function index()
    {
        $appointments = Appointment::orderBy('created_at', 'desc')->where('client_id','=', Auth::user()->id)->get();
        return view('index',compact('RoomTypes','RoomType'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Auth;
class DashboardController extends Controller
{
    public function index()
    {
        $appointments = Appointment::orderBy('created_at', 'desc')->where('client_id','=', Auth::user()->id)->get();
        return view('dashboard',compact('appointments'));
    }
}

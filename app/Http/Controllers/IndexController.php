<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $RoomType = RoomType::where('id', '1')->first();
        $RoomTypes = RoomType::orderBy('created_at', 'desc')->where('id','>', 1)->take(4)->get();
        return view('index',compact('RoomTypes','RoomType'));
    }

    public function about()
    {
        return view('about');
    }

    public function ContactPost(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
        ]);
        $stack = [];
        array_push($stack, $request->name, $request->email,$request->message);
        \Slack::to('#support')->send('Client name: '.$stack[0].
            ' Client email: '.$stack[1].
            ' Message: '.$stack[2]);
        return redirect()->back()->with('success','Successfully Send');
    }

    public function contact(){
        return view('contact');
    }

    public function services()
    {
        return view('index');
    }
}

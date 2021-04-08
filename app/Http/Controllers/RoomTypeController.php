<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    /**
     * @param null $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * View any single page
     */
    public function view($slug = null)
    {
        $RoomType = RoomType::whereSlug($slug)->first();
        $similars = RoomType::where('id', '<>', $RoomType->id)->orderBy('id', 'DESC')->take(3)->get();
        return view('room-view', compact('RoomType', 'similars'));
    }

}

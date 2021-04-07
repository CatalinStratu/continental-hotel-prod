<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('settings');
    }
    public function update(Request $request, UpdateUserProfileInformation $updater)
    {
        $updater->update($request->user(), $request->all());

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function UpdatePassword(Request $request)
    {
        $rules = [
            'old_password'  => 'required',
            'new_password'  => 'required|confirmed',
            'new_password_confirmation'  => 'required',
        ];
        $this->validate($request, $rules);

        $old_password = $request->old_password;
        $new_password = $request->new_password;
        //$new_password_confirmation = $request->new_password_confirmation;

        if(Auth::check())
        {
            $logged_user = Auth::user();

            if(Hash::check($old_password, $logged_user->password))
            {
                $logged_user->password = Hash::make($new_password);
                $logged_user->save();
                return redirect()->back()->with('success', trans('app.password_changed_msg'));
            }
            return redirect()->back()->with('error', trans('app.wrong_old_password'));
        }
    }
}

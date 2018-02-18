<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Validator;

class UsersController extends Controller
{
    public function getUsersIndex() {
        $users = User::all();
        return view('admin.pages.users.index')->with('users', $users);
    }

    public function addUser(Request $request) {
        $user = new User();
        $rules = [
            'user_name' => 'required',
            'email' => 'email|unique:users|required',
            'user_pass' => 'required|min:4'
        ];

        $nicknames = [
            'user_name' => 'User Name',
            'email' => 'User Email',
            'user_pass' => 'User Password'
        ];

        $validator = Validator::make($request->all(), $rules);
        $validator->setAttributeNames($nicknames);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $user->name     = $request->input('user_name');
        $user->email    = $request->input('email');
        $user->password = bcrypt($request->input('user_pass'));

        $user->save();

        session()->push('m', 'success');
        session()->push('m', 'Added Successfully');
        return redirect()->back();
    }

    public function updateUser(Request $request) {
        $user = User::find($request->input('user_id'));

        if(($request->input('new_name') && $request->input('new_email')) != '' ) {
            $user->name = $request->input('new_name');
            $user->email = $request->input('new_email');
        }

        if($request->input('new_password') != '') {
            $user->password = bcrypt($request->input('new_password'));
        }

        $user->update();

        session()->push('m', 'success');
        session()->push('m', 'Updated Successfully');
        return redirect()->back();

    }

    public function deleteUser(Request $request) {
        $delete = User::find(($request->input('user_id_d')));
        $delete->delete();
        session()->push('m', 'success');
        session()->push('m', 'Deleted Successfully');
        return redirect()->back();
    }
}

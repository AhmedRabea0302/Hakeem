<?php

namespace App\Http\Controllers\admin;

use App\CareerMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CareerController extends Controller
{

    public function getCareerIndex() {
        $career_messages = CareerMessage::all();
        return view('admin.pages.career.index')->with('career_messages', $career_messages);
    }

    public function deleteMessage(Request $request) {

        $delete = CareerMessage::find($request->id);
        $delete->delete();

        session()->push('m', 'danger');
        session()->push('m', 'Deleted Successfully');

        return redirect()->back();
    }
}

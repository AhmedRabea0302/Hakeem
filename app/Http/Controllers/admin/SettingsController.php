<?php

namespace App\Http\Controllers\admin;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class SettingsController extends Controller
{
    public function getIndex() {
        $settings = Setting::first();
        return view('admin.pages.settings.index')->with('settings', $settings);
    }

    public function updateSettings(Request $request) {
        $update = Setting::first();
        $rules = [
            'site_name'  => 'required',
            'site_url'   => 'required',
            'site_name_search' => 'required',
            'site_lang'  => 'required',
            'site_email' => 'required|email'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $file = $request->file('image_name');
        if(!empty($file)) {
            $file_name = $file->getClientOriginalName();
            $destination = 'storage/uploads/images';
            $file->move($destination, $file_name);

            $update->image_name = $file_name;
        }

        $update->site_name  = $request->input('site_name');
        $update->site_url   = $request->input('site_url');
        $update->site_name_search  = $request->input('site_name_search');
        $update->site_lang  = $request->input('site_lang');
        $update->site_email  = $request->input('site_email');

        session()->push('m', 'success');
        session()->push('m', 'Updated Successfully');

        $update->save();

        return redirect()->back();
    }
}

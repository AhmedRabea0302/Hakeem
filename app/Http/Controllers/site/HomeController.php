<?php

namespace App\Http\Controllers\site;


use App\CareerMessage;
use App\HomeStatic;
use App\PartnerMessage;
use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
class HomeController extends Controller
{

    public function getHomeIndex() {
        $settings = Setting::first();
        $home_details = HomeStatic::first();
        return view('site.pages.home.index')->with('settings', $settings)->with('home_details', $home_details);
    }

    public function setLang($locale) {
        if(session('language') == '') {
            app()->setLocale('en');
            session('language', 'en');
        }

        session()->put('language', $locale);
        return redirect()->back();
    }

    public function gather(Request $request) {
        $add   = new CareerMessage();
        $rules = [
            'full_name' => 'required',
            'email'     => 'unique:career_messages',
            'number' => 'unique:career_messages',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $phone_code = $request->input('phone_code');
        $phone_num  = $request->input('number');
        $number     = $phone_code . $phone_num;
        if($number) {
            $add->number = $number;
        }

        $email      =  $request->input('email');
        if($email) {
            $add->email = $email;
        }
        $add->name = $request->input('full_name');
        $add->save();

        session()->push('m', 'success');
        session()->push('m', 'Sent Successfully');

        return redirect()->back();
    }

    public function becomePartner(Request $request) {
        $add = new PartnerMessage();

        $rules = [
          'full_name'  => 'required',
          'speciality' => 'required',
          'email'      => 'required|unique:partner_messages',
          'phone_num' => 'required|numeric|unique:partner_messages',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $add->full_name  = $request->input('full_name');
        $add->speciality = $request->input('speciality');
        $add->email      = $request->input('email');
        $add->phone_num = $request->input('phone_num');

        $add->save();

        session()->push('m', 'success');
        session()->push('m', 'Sent Successfully');

        return redirect()->back();
    }

}

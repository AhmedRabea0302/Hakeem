<?php

namespace App\Http\Controllers\admin;

use App\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class SocialLinksController extends Controller
{
    public function getSocialIndex() {
        $social_links = Social::first();
        return view('admin.pages.social.index')->with('social_links', $social_links);
    }

    public function updateSocial(Request $request) {
        $update = Social::first();

        $rules = [
            'facebook' => 'required|url',
            'twitter'  => 'required|url',
            'linkedin'    => 'required|url',
            'instagram'    => 'required|url'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        } else {

            $update->facebook   = $request->input('facebook');
            $update->twitter    = $request->input('twitter');
            $update->instagram  = $request->input('instagram');
            $update->linkedin   = $request->input('linkedin');

            session()->push('m', 'success');
            session()->push('m', 'Updated Successfully');

            $update->save();
            return redirect()->back();
        }
    }
}

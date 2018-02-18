<?php

namespace App\Http\Controllers\admin;

use App\CareerStatic;
use App\CareerStaticDetail;
use App\Footer;
use App\FooterDetail;
use App\HomeStatic;
use App\HomeStaticDetail;
use App\Partner;
use App\PartnerDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Validator;
class StaticPagesController extends Controller
{
    // Home Page
    public function getHomeIndex() {
        $update = HomeStatic::first();
        return view('admin.pages.staticPages.homeIndex')->with('update', $update);
    }

    public function getFooter(){
        return view('admin.pages.staticPages.footer');
    }

    public function updateHome(Request $request) {
        $update = HomeStatic::first();

        $rules  = [
          'home_title_en' => 'required',
          'home_title_ar' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $file = $request->file('image_name');
        if(!empty($file)) {
            $image_name = $file->getClientOriginalName();
            $update->update([
                'image_name' => $image_name,
            ]);
        }


        $update_details = HomeStaticDetail::where('master_id', '=', $update->id);

        $update_details->first()->where('lang', '=', 'en')->update([
            'title' => $request->input('home_title_en'),
        ]);

        $update_details->first()->where('lang', '=', 'ar')->update([
            'title' => $request->input('home_title_ar'),
        ]);

        session()->push('m', 'success');
        session()->push('m', 'Updated Successfully');

        return redirect()->back();
    }

    // Career Page
    public function getCareerIndex() {
        $update = CareerStatic::first();
        return view('admin.pages.staticPages.careerIndex')->with('update', $update);
    }

    public function updateCareer(Request $request) {
        $update = CareerStatic::first();

        $rules  = [
            'partner_title_en' => 'required',
            'partner_title_ar' => 'required',
            'partner_para_en'  => 'required',
            'partner_para_ar'  => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $file = $request->file('image_name');
        if(!empty($file)) {
            $image_name = $file->getClientOriginalName();
            $update->update([
                'image_name' => $image_name,
            ]);
        }

        $update_details = CareerStaticDetail::where('master_id', '=', $update->id);

        $update_details->first()->where('lang', '=', 'en')->update([
            'title' => $request->input('partner_title_en'),
            'paragraph' => $request->input('partner_para_en'),
        ]);

        $update_details->first()->where('lang', '=', 'ar')->update([
            'title' => $request->input('partner_title_ar'),
            'paragraph' => $request->input('partner_para_ar')
        ]);

        session()->push('m', 'success');
        session()->push('m', 'Updated Successfully');

        return redirect()->back();
    }

    // Partner Page
    public function getPartnerIndex() {
        $update = Partner::first();
        return view('admin.pages.staticPages.partner')->with('update', $update);
    }

    public function updatePartner(Request $request) {
        $update = Partner::first();

        $rules  = [
            'partner_title_en' => 'required',
            'partner_title_ar' => 'required',
            'partner_para_en'  => 'required',
            'partner_para_ar'  => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $file = $request->file('image_name');
        if(!empty($file)) {
            $image_name = $file->getClientOriginalName();
            $update->update([
                'image_name' => $image_name,
            ]);
        }

        $update_details = PartnerDetail::where('master_id', '=', $update->id);

        $update_details->first()->where('lang', '=', 'en')->update([
            'title' => $request->input('partner_title_en'),
        ]);

        $update_details->first()->where('lang', '=', 'ar')->update([
            'title' => $request->input('partner_title_ar'),
        ]);

        $update_details->first()->where('lang', '=', 'en')->update([
            'paragraph' => $request->input('partner_para_en'),
        ]);

        $update_details->first()->where('lang', '=', 'ar')->update([
            'paragraph' => $request->input('partner_para_ar'),
        ]);

        session()->push('m', 'success');
        session()->push('m', 'Updated Successfully');

        return redirect()->back();
    }

    public function updateFooter(Request $request) {
        $update = Footer::first();

        $rules  = [
            'footer_title_en' => 'required',
            'footer_title_ar' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $file = $request->file('image_name');
        if(!empty($file)) {
            $image_name = $file->getClientOriginalName();
            $update->update([
                'image_name' => $image_name,
            ]);
        }

        $update_details = FooterDetail::where('master_id', '=', $update->id);

        $update_details->first()->where('lang', '=', 'en')->update([
            'title' => $request->input('footer_title_en'),
        ]);

        $update_details->first()->where('lang', '=', 'ar')->update([
            'title' => $request->input('footer_title_ar'),
        ]);

        session()->push('m', 'success');
        session()->push('m', 'Updated Successfully');

        return redirect()->back();
    }
}

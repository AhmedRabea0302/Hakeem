<?php

namespace App\Http\Controllers\site;

use App\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
class PartnerController extends Controller
{

    public function getPartnerIndex() {
        $partner = Partner::first();
        return view('site.pages.partner.index')->with('partner', $partner);
    }

}

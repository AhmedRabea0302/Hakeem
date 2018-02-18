<?php

namespace App\Http\Controllers\site;



use App\CareerStatic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Validator;
class CareerController extends Controller
{

    public function getCareerIndex() {
        $career = CareerStatic::first();
        return view('site.pages.career.index')->with('career', $career);
    }

}

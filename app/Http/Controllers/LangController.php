<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use APP;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    public function lang()
    {
       return ;
    }

    public function lang_change(Request $request )
    {
        App::setlocale($request->lang);
        session()->put('lang_code', $request->lang);
        return redirect()->back();
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: Ahmed-pc
 * Date: 7/16/2019
 * Time: 2:36 AM
 */

namespace App\Http\Controllers;
use http\Env\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index($lang = 'en'){
        if(Session::has('language')){
            $lang =  Session::get('language');
        }
        App::setlocale($lang);
        $view = 'homepage' ;
        return view('index',compact('view','lang'));
    }


    public function showGreenEnergyPage($lang = 'en'){
        if(Session::has('language')){
            $lang =  Session::get('language');
        }
        App::setlocale($lang);
        return view('green-energy',compact('lang'));
    }


    public function showElectricBusPage($lang = 'en'){
        if(Session::has('language')){
            $lang =  Session::get('language');
        }
        App::setlocale($lang);
        return view('electric-bus',compact('lang'));
    }

    public function showMathModelingPage($lang = 'en'){
        if(Session::has('language')){
            $lang =  Session::get('language');
        }
        App::setlocale($lang);
        return view('math-modeling',compact('lang'));
    }

    public function switchLanguage($lang){
        Session::put('language', $lang);
        return redirect()->back();
    }


    public function getCurrentLanguage(){
        if(Session::has('language')){
            return Session::get('language');
        }
        return 'en' ;
    }

    public function contactUS(){
        return view('contact');
    }


}
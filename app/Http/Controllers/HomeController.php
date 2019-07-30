<?php
/**
 * Created by PhpStorm.
 * User: Ahmed-pc
 * Date: 7/16/2019
 * Time: 2:36 AM
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index($lang = 'en'){
        App::setlocale($lang);
        $view = 'homepage' ;
        return view('index',compact('view','lang'));
    }


    public function showGreenEnergyPage($lang = 'en'){
        App::setlocale($lang);
        return view('green-energy',compact('lang'));
    }


    public function showElectricBusPage($lang = 'en'){
        App::setlocale($lang);
        return view('electric-bus',compact('lang'));
    }

    public function showMathModelingPage($lang = 'en'){
        App::setlocale($lang);
        return view('math-modeling',compact('lang'));
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: Ahmed-pc
 * Date: 7/16/2019
 * Time: 2:36 AM
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;
use Torann\GeoIP\Facades\GeoIP;
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

    public function showScientificPublicationsPage($lang = 'en'){
        if(Session::has('language')){
            $lang =  Session::get('language');
        }
        App::setlocale($lang);
        return view('scientific-publications',compact('lang'));
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

    public function showDesigningMechanismsPage($lang = 'en'){
        if(Session::has('language')){
            $lang =  Session::get('language');
        }
        App::setlocale($lang);
        return view('designing-mechanisms',compact('lang'));
    }

    public function showExpertiseOfMechanismsPage($lang = 'en'){
        if(Session::has('language')){
            $lang =  Session::get('language');
        }
        App::setlocale($lang);
        return view('expertise-of-mechanisms',compact('lang'));
    }

    public function showTechnicalDevelopmentPage($lang = 'en'){
        if(Session::has('language')){
            $lang =  Session::get('language');
        }
        App::setlocale($lang);
        return view('technical-development',compact('lang'));
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

    public function getClientGEO(){
        return [
            'country_name' =>  geoip($ip = Request::ip())->iso_code
        ] ;
    }


    public function getDownload()
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/download/scientific_publications.pdf";

        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return response()->download($file, 'scientific_publications.pdf', $headers);
    }



}
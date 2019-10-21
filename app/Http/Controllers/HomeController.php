<?php
/**
 * Created by PhpStorm.
 * User: Ahmed-pc
 * Date: 7/16/2019
 * Time: 2:36 AM
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Request;
use Torann\GeoIP\Facades\GeoIP;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index($lang = 'en')
    {
        if (Session::has('language')) {
            $lang = Session::get('language');
        }
        App::setlocale($lang);
        $view = 'homepage';
        $albumImages = [
            [
                'src' => '/images/applications/image1.webp',
                'caption' => ''
            ],
            [
                'src' => '/images/applications/image2-min.webp',
                'caption' => ''
            ],
            [
                'src' => '/images/applications/image3-min.webp',
                'caption' => ''
            ],
            [
                'src' => '/images/applications/image4-min.webp',
                'caption' => ''
            ],
            [
                'src' => '/images/applications/image5-min.webp',
                'caption' => ''
            ],
            [
                'src' => '/images/applications/image6-min.webp',
                'caption' => ''
            ],
            [
                'src' => '/images/applications/image7-min.webp',
                'caption' => ''
            ],
            [
                'src' => '/images/applications/image8-min.webp',
                'caption' => ''
            ],
        ];


        return view('index', compact('view', 'lang', 'albumImages'));
    }

    public function joinPage($lang = 'en')
    {
        if (Session::has('language')) {
            $lang = Session::get('language');
        }
        App::setlocale($lang);
        return view('join_page', compact('lang'));
    }

    public function showGreenEnergyPage($lang = 'en')
    {
        if (Session::has('language')) {
            $lang = Session::get('language');
        }
        App::setlocale($lang);
        $mainImageSrc = '/images/green-energy/solar-image.png';
        if ($lang === 'de') {
            $mainImageSrc = '/images/green-energy/tracker-de.jpg';
        }

        $images = [
            [
                'src' => $mainImageSrc,
                'caption' => ''
            ],
            [
                'src' => '/images/green-energy/solar-image2.png',
                'caption' => Lang::get('green-energy/main.tracker_overview')
            ],
            [
                'src' => '/images/green-energy/tracker.png',
                'caption' => ''
            ],
            [
                'src' => '/images/green-energy/tracker-4.png',
                'caption' => ''
            ],
        ];

        return view('green-energy', compact('lang', 'images'));
    }

    public function showScientificPublicationsPage($lang = 'en')
    {
        if (Session::has('language')) {
            $lang = Session::get('language');
        }
        App::setlocale($lang);
        return view('scientific-publications', compact('lang'));
    }

    public function showElectricBusPage($lang = 'en')
    {
        if (Session::has('language')) {
            $lang = Session::get('language');
        }
        App::setlocale($lang);


        $images = [
            [
                'src' => '/images/bus-images/bus4.jpg',
                'caption' => ''
            ],
            [
                'src' => '/images/bus-images/bus5.jpg',
                'caption' => ''
            ],
            [
                'src' => '/images/bus-images/bus6.jpg',
                'caption' => ''
            ],
            [
                'src' => '/images/bus-images/bus-system1.jpg',
                'caption' => Lang::get('electric-bus/main.analysis_sub_head')
            ],
            [
                'src' => '/images/bus-images/bus-system1_2-de.png',
                'caption' => Lang::get('electric-bus/main.figure_1')
            ],
            [
                'src' => '/images/bus-images/bus-system2-de.jpg',
                'caption' => 'Strength reserves for samples'
            ],
            [
                'src' => '/images/bus-images/bus-system3-de.png',
                'caption' => Lang::get('electric-bus/main.figure_2')
            ],
            [
                'src' => '/images/bus-images/bus-system4-de.png',
                'caption' => Lang::get('electric-bus/main.figure_3')
            ],
            [
                'src' => '/images/bus-images/bus-system5-de.png',
                'caption' => Lang::get('electric-bus/main.figure_4')
            ],
            [
                'src' => '/images/bus-images/bus-system8.jpg',
                'caption' => Lang::get('electric-bus/main.figure_4')
            ],


        ];

        return view('electric-bus', compact('lang', 'images'));
    }

    public function showMathModelingPage($lang = 'en')
    {
        if (Session::has('language')) {
            $lang = Session::get('language');
        }

        $images = [
            [
                'src' => '/images/math-modeling/image1.webp',
                'caption' => Lang::get('math-modeling/main.static_strength_body')
            ],
            [
                'src' => '/images/math-modeling/R-2.png',
                'caption' => Lang::get('math-modeling/main.static_strength_gear')
            ],
            [
                'src' => '/images/math-modeling/1.jpg',
                'caption' => Lang::get('math-modeling/main.static_strength_joint')
            ],
            [
                'src' => '/images/math-modeling/2.jpg',
                'caption' => Lang::get('math-modeling/main.static_strength_installation')
            ],
            [
                'src' => '/images/math-modeling/3.jpg',
                'caption' => Lang::get('math-modeling/main.static_strength_roller')
            ],
            [
                'src' => '/images/math-modeling/4.jpg',
                'caption' => Lang::get('math-modeling/main.static_strength_tool')
            ],
            [
                'src' => '/images/math-modeling/5.jpg',
                'caption' => Lang::get('math-modeling/main.static_strength_pressure')
            ],
            [
                'src' => '/images/math-modeling/6.jpg',
                'caption' => Lang::get('math-modeling/main.first_forms')
            ],
            [
                'src' => '/images/math-modeling/7.jpg',
                'caption' => Lang::get('math-modeling/main.gearing_elements')
            ],
            [
                'src' => '/images/math-modeling/8.jpg',
                'caption' => Lang::get('math-modeling/main.finite_element_motor')
            ],
            [
                'src' => '/images/math-modeling/9.jpg',
                'caption' => Lang::get('math-modeling/main.pressure_distribution')
            ],
            [
                'src' => '/images/math-modeling/10.jpg',
                'caption' => Lang::get('math-modeling/main.structure_analysis')
            ],
            [
                'src' => '/images/math-modeling/11.jpg',
                'caption' => Lang::get('math-modeling/main.analysis_scheme')
            ],
        ];

        App::setlocale($lang);
        return view('math-modeling', compact('lang', 'images'));
    }

    public function showDesigningMechanismsPage($lang = 'en')
    {
        if (Session::has('language')) {
            $lang = Session::get('language');
        }
        App::setlocale($lang);
        $images = [
            [
                'src' => '/images/designing-mechanisms/image4.webp',
                'caption' => '',
            ],
            [
                'src' => '/images/designing-mechanisms/image2.webp',
                'caption' => '',
            ],
            [
                'src' => '/images/designing-mechanisms/image3.webp',
                'caption' => '',
            ],
            [
                'src' => '/images/designing-mechanisms/image1.webp',
                'caption' => '',
            ],
            [
                'src' => '/images/designing-mechanisms/image1.webp',
                'caption' => '',
            ],
            [
                'src' => '/images/designing-mechanisms/image5.webp',
                'caption' => '',
            ],

        ];
        return view('designing-mechanisms', compact('lang', 'images'));
    }

    public function showExpertiseOfMechanismsPage($lang = 'en')
    {
        if (Session::has('language')) {
            $lang = Session::get('language');
        }
        App::setlocale($lang);
        $images = [
            [
                'src' => '/images/design-expertise/image7.webp',
                'caption' => '',
            ],
            [
                'src' => '/images/design-expertise/image8.webp',

                'caption' => '',
            ],
            [
                'src' => '/images/design-expertise/image9.webp',

                'caption' => '',
            ],
            [
                'src' => '/images/design-expertise/image10.webp',

                'caption' => '',
            ],
            [
                'src' => '/images/design-expertise/image11.webp',

                'caption' => '',
            ],
            [
                'src' => '/images/design-expertise/image12.webp',
                'caption' => '',
            ],

        ];
        return view('expertise-of-mechanisms', compact('lang', 'images'));
    }

    public function showTechnicalDevelopmentPage($lang = 'en')
    {
        if (Session::has('language')) {
            $lang = Session::get('language');
        }
        App::setlocale($lang);
        $images = [
            [
                'src' => '/images/technical-development/image13-emf.webp',
                'caption' => '',
            ],


        ];
        return view('technical-development', compact('lang', 'images'));
    }

    public function switchLanguage($lang)
    {
        Session::put('language', $lang);
        return redirect()->back();
    }

    public function getCurrentLanguage()
    {
        if (Session::has('language')) {
            return Session::get('language');
        }
        return 'en';
    }

    public function getClientGEO()
    {
        return [
            'country_name' => geoip($ip = Request::ip())->iso_code
        ];
    }

    public function getDownload()
    {
        //PDF file is stored under project/public/download/info.pdf
        $file = public_path() . "/download/scientific_publications.pdf";

        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return response()->download($file, 'A New Direction of Solar Trackers and Perspectives of Implementing Them to Increase Efficiency_Elkady&Pribora.pdf', $headers);
    }

    public function userAgreementPage($lang = 'en')
    {
        return view('user_agreement', compact('lang'));
    }

    public function privacyPolicyPage($lang = 'en')
    {
        return view('privacy_policy', compact('lang'));
    }

    public function cookiePolicyPage($lang = 'en')
    {
        return view('cookie_policy', compact('lang'));
    }

}

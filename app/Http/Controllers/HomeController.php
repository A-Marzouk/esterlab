<?php
/**
 * Created by PhpStorm.
 * User: Ahmed-pc
 * Date: 7/16/2019
 * Time: 2:36 AM
 */

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index(){
        return view('index');
    }


    public function showGreenEnergyPage(){
        return view('green-energy');
    }


    public function showElectricBusPage(){
        return view('electric-bus');
    }

    public function showMathModelingPage(){
        return view('math-modeling');
    }

}
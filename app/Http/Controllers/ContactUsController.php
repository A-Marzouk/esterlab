<?php
/**
 * Created by PhpStorm.
 * User: Ahmed-pc
 * Date: 7/16/2019
 * Time: 2:36 AM
 */

namespace App\Http\Controllers;
use App\Http\Requests\ContactUsRequest;
use Illuminate\Http\Request;


class ContactUsController extends Controller
{

    public function submitContactForm(ContactUsRequest $request){
        // validate request
        $validated = $request->validated();
        return $validated ;
    }

}
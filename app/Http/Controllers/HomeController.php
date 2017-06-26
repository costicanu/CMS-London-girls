<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Girl;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        #$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function girl($url_of_girl)
    {
        $girl = Girl::where('url', $url_of_girl)->first();
        if (!$girl) {
            return view('frontend.404', ['girl' => $girl]);
        }

        return view('frontend.girl', ['girl' => $girl]);
    }

    public function gallery($category_url=NULL){
        echo 'helloo!!!!';
    }

}

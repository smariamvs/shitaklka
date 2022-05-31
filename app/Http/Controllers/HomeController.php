<?php

namespace App\Http\Controllers;
use App\Models\TypeOfAd;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }


    public function typeOfAd(){
        $ad = TypeOfAd::all();
        return view('shitalka.index',compact('ad'));
    }
    public function websiteNetworkPortal(){
        dd(1);
    }
}

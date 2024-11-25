<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

   
    public function home()
    {
        return view('home');
    }

    public function index()
    {
        return view('index');
    }
    
    public function login()
    {
        return view('login'); 
    }

   
    public function wealthOfNations()
    {
        return view('wealth');
    }

    public function howToRespectMyself()
    {
        return view('howtores');
    }

    public function soYouWantToBeALibrarian()
    {
        return view('soyouwant');
    }

    public function harryPotter()
    {
        return view('harrypotter');
    }

    public function atomicHabits()
    {
        return view('atomic');
    }

    public function theMillionaireNextDoor()
    {
        return view('themillionar');
    }

    public function thePsychologyOfMoney()
    {
        return view('thepsycolog');
    }

    public function yourMoneyOrYourLife()
    {
        return view('yourmoney');
    }

    public function jakartaSebelumPagi()
    {
        return view('jktsblmpago');
    }

    public function malioboroAtMidnight()
    {
        return view('malioboro');
    }

    public function pulang()
    {
        return view('pulang');
    }

    public function hujan()
    {
        return view('hujan');
    }

    public function matahari()
    {
        return view('matahari');
    }

    public function dilan1991()
    {
        return view('dilan991');
    }

    public function dilan1990()
    {
        return view('dilan990');
    }

    public function milea()
    {
        return view('milea');
    }
}


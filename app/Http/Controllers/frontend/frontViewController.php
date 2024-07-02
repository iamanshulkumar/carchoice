<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontViewController extends Controller
{
    public function carlistingdetails() {
        return view('frontend.carLayouts.carlistingdetails');
    }
    public function carlisting() {
        return view('frontend.carlisting');
    }
    public function reviews() {
        return view('frontend.reviews');
    }
    public function reviewsdetails() {
        return view('frontend.reviewsdetails');
    }
    public function compare() {
        return view('frontend.compare');
    }
    public function compareresult() {
        return view('frontend.compareresult');
    }
    public function loginuser() {
        return view('frontend.loginuser');
    }
    public function registration() {
        return view('frontend.registration');
    }
    public function postyourad() {
        return view('frontend.postyourad');
    }
    public function userprofile() {
        return view('frontend.dashboard.userprofile');
    }
    public function userarchive() {
        return view('frontend.dashboard.userarchive');
    }
    public function useractiveads() {
        return view('frontend.dashboard.useractiveads');
    }
    public function userfavourites() {
        return view('frontend.dashboard.userfavourites');
    }
    public function usermessages() {
        return view('frontend.dashboard.usermessages');
    }
    public function userdeactive() {
        return view('frontend.dashboard.userdeactive');
    }
    public function pricing() {
        return view('frontend.pricing');
    }
    public function blogs() {
        return view('frontend.blogs');
    }
    public function blogdetails() {
        return view('frontend.blogdetails');
    }
    public function about() {
        return view('frontend.about');
    }
    public function error404() {
        return view('frontend.error404');
    }
    public function contactus() {
        return view('frontend.contactus');
    }
    public function services() {
        return view('frontend.services');
    }
    public function newcars() {
        return view('frontend.newCarsLayouts.newcars');
    }
    public function upcomingcar() {
        return view('frontend.newCarsLayouts.upcomingcar');
    }
    public function newcarlaunches() {
        return view('frontend.newCarsLayouts.newcarlaunches');
    }
    public function electriccar() {
        return view('frontend.newCarsLayouts.electriccar');
    }
    public function usedcar() {
        return view('frontend.usedCarsLayouts.usedcar');
    }
    public function usedcarbylocation() {
        return view('frontend.usedCarsLayouts.usedcarbylocation');
    }
    public function carloan() {
        return view('frontend.newCarsLayouts.carloan');
    }
    public function findcar() {
        return view('frontend.findcar');
    }
    public function carviewimages() {
        return view('frontend.carLayouts.carviewimages');
    }
    public function carimages() {
        return view('frontend.carLayouts.carimages');
    }
    public function finddealer() {
        return view('frontend.dealerlayouts.finddealer');
    }
    public function dealerprofile() {
        return view('frontend.dealerlayouts.dealerprofile');
    }
    public function dealershowroom() {
        return view('frontend.newCarsLayouts.dealershowroom');
    }
    public function dealerbylocation() {
        return view('frontend.newCarsLayouts.dealerbylocation');
    }

}

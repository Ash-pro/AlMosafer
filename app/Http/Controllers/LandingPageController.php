<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\AdvertisementItems;
use App\Category;
use App\Consultation_requests;
use App\ContactUs;
use App\ServiceItem;
use App\WhoAreWe;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function __construct()
    {
        //Parent Path
        $this->path = "welcome";
    }

    public function Landing(){
//      service
        $general_Des_service = Category::all()->first();
        $item_service = ServiceItem::all();

//      Advertisement
        $Advertisement = Advertisement::all()->first();
        $AdvertisementItems = AdvertisementItems::all();

//      Who Are We
        $WhoAreWes = WhoAreWe::all()->first();

//      contact_us
        $contact_us = ContactUs::all()->first();


        return view($this->path,compact('general_Des_service','item_service',
                                                    'Advertisement','AdvertisementItems',
                                                    'WhoAreWes','contact_us'
        ));

    }//end of Landing
//
    public function store (Request $request){
        $request->validate([
            'name' => 'required|unique:consultation_requests,name',
        ]);
        Consultation_requests::create($request->all());

        session()->flash('success',__('site.DataAddSuccessfully'));
        return back();
    }//end of

}

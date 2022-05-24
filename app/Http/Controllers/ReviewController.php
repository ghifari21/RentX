<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Property;
use App\Models\Buyer;
use App\Models\Order;

class ReviewController extends Controller
{
    public function index(){

    }

    public function store(Request $request){
        //validate data
        $validatedData = $request->validate([
            'comment'=>'required|max:500',
            'rating'=>'required',
        ]);

        $rating=$request->rating;

        //get property id
        //$property_id=$request->;

        $property = Property::firstWhere('user_id', auth()->user()->id);

        $old_total_review=0;
        //kali rating dan total_review di tabel property
        $old_rating_property=0;
        //tambahin trs bagi
        $new_rating_property=($old_rating_property+$rating)/($old_total_review+1);

        //add 1 ke atribut total_review di tabel property

        //masukin new_rating_property ke kolom rating di tabel properti

    }
}

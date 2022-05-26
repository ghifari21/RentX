<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Property;
use App\Models\Buyer;
use App\Models\Order;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index(Property $property){
        $buyer = Buyer::firstWhere('user_id', auth()->user()->id);
        $count_1 = Order::where([['property_id','=',$property->id],['buyer_id','=',$buyer->id],['status','=','accepted']])->count();
        $count_2 = Review::where([['property_id','=',$property->id],['buyer_id','=',$buyer->id]])->count();

        //dd($count_1,$count_2);
        if($count_1>0 && $count_2==0){
            return view('comment',[
                'title' => "Update",
                'property' => $property
            ]);
        }else if($count_1==0 || $count_2!=0){
            //error message
            return "error";
        }
    }

    public function store(Request $request,Property $property){
        //validate data
        $buyer = Buyer::firstWhere('user_id', auth()->user()->id);
        $validatedData = $request->validate([
            'comment'=>'required|max:500',
            'rating'=>'required',
        ]);
        //gk perlu order id
        $validatedData['order_id']=1;
        $validatedData['buyer_id']=$buyer->id;
        $validatedData['property_id']=$property->id;

        $old_total_reviewer=$property->total_reviewer;
        //kali rating dan total_review di tabel property
        $old_rating_property=($property->rating)*$old_total_reviewer;
        //new daftar
        $new_rating_property=($old_rating_property+$validatedData['rating'])/($old_total_reviewer+1);
        $new_total_reviewer=$property->total_reviewer+1;
        //dd($old_total_reviewer,$old_rating_property,$new_rating_property,$new_total_reviewer);
        //masukin ke tabel property
        $property->total_reviewer=$new_total_reviewer;
        $property->rating=$new_rating_property;
        //save tabel property
        $property->save();

        //create
        Review::create($validatedData);

        return redirect('/dashboard')->with('success', 'Order has been sent,wait seller confirmation!');
    }
}

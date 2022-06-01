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
        //apakah buyer sudah melakukan sewa sebelumnya
        $buyer = Buyer::firstWhere('user_id', auth()->user()->id);
        $order = Order::where([['property_id','=',$property->id],['buyer_id','=',$buyer->id],['status','=','paid']])->first();
        $is_order= (is_null($order)) ? 0 : $order->count();
        //apakah buyer pernah rivew sebelumnya
        if($is_order){
            $order_id=$order->id;
            $is_review = Review::where([['order_id','=',$order_id],['property_id','=',$property->id],['buyer_id','=',$buyer->id]])->count();
        }
        if($is_order && !$is_review){
            return view('comment.index',[
                'title' => "Update",
                'property' => $property
            ]);
        }else if(!$is_order || $is_review){
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
        
        //get order id
        $buyer = Buyer::firstWhere('user_id', auth()->user()->id);
        $order=Order::where([['property_id','=',$property->id],['buyer_id','=',$buyer->id],['status','=','paid']])->first();
        $order_id=$order->id;

        $validatedData['order_id']=$order_id;
        $validatedData['buyer_id']=$buyer->id;
        $validatedData['property_id']=$property->id;

        $order->status="reviewed";
        $order->save();

        //proses memasukan nilai rating dan total_reviewer ke tabel properti
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

    public function indexForDashboardBuyer(Order $order){
        $property=Property::firstWhere('id',$order->property_id );
        return view('comment',[
            'title' => "Update",
            'property' => $property
        ]);
    }

    public function showReview(Review $review){
        
    }
}
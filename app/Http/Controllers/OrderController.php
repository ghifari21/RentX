<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Seller;
use App\Models\Buyer;
use App\Models\Order;
use App\Models\User;

class OrderController extends Controller
{
    //
    public function store(Request $request, Property $property){
        //validate data
        // dd($property);


        $validatedData = $request->validate([
            'check_in'=>'required',
            'duration'=>'required',
            'total_payment'=>'required',
        ]);


        $date_interval = $validatedData['duration'] . ' month';
        $date_in = date_create($validatedData['check_in']);
        $validatedData['check_out'] = date_add($date_in, date_interval_create_from_date_string($date_interval));
        $validatedData['date_order'] = $validatedData['check_in'];

        //seller id
        $validatedData['seller_id']=$property->seller_id;
        // $seller = Seller::firstWhere('id',$property->seller_id);

        // $user_seller = User::firstWhere('id',$seller->user_id);
        // $seller_name = $user_seller->name;
        // $validatedData['seller_name'] =$seller_name;

        //buyer id dan nama
        $buyer = Buyer::firstWhere('user_id', auth()->user()->id);
        $validatedData['buyer_id'] = $buyer->id;

        // $user_buyer = User::firstWhere('id',$buyer->id);
        // $buyer_name=$user_buyer->name;
        // $validatedData['buyer_name'] =$buyer_name;

        //properti id dan nama
        $validatedData['property_id']=$property->id;
        // $validatedData['property_name']=$property->title;
        //status order ada 3 pending,accepted,rejected
        $validatedData['status'] = "pending";

        // dd($validatedData);
        Order::create($validatedData);


        return redirect('/dashboard')->with('success', 'Order has been sent,wait seller confirmation!');

    }

    public function payment(Order $order) {
        return view('buyers.bayar', [
            'title' => "Pembayaran",
            'order' => $order
        ]);
    }

    public function paymentAccepted(Request $request, Order $order) {
        $validatedData = $request->validate([
            'status' => 'required'
        ]);

        Order::where('id', $order->id)->update($validatedData);

        return redirect('/dashboard')->with('success', 'Payment has been successfully made!');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Seller;
use App\Models\Buyer;
use App\Models\Order;

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

        //status order ada 3 pending,accepted,rejected
        $validatedData['seller_id']=$property->seller_id;

        $buyer = Buyer::firstWhere('user_id', auth()->user()->id);
        $validatedData['buyer_id'] = $buyer->id;

        $validatedData['property_id']=$property->id;
        $validatedData['status'] = "pending";

        // dd($validatedData);
        Order::create($validatedData);


        return redirect('/dashboard')->with('success', 'Order has been sent,wait seller confirmation!');

    }
}

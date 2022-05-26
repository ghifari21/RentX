<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Seller;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardSellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seller = Seller::firstWhere('user_id', auth()->user()->id);
        // dd($seller->id);
        // dd(Property::where('seller_id', $seller->id)->get());
        return view('sellers.dashboard.index', [
            'title' => 'Daftar Property',
            'optionName' => 'Daftar Property',
            'properties' => Property::where('seller_id', $seller->id)->get(),
            'seller' => Seller::firstWhere('user_id', auth()->user()->id)
            // 'profile' => Seller::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sellers.dashboard.create', [
            'title' => 'Tambah'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'title' => 'required|max:150',
            // 'slug' => 'required|unique:properties',
            'property_type' =>'required',
            'is_available' => 'required',
            'address' =>'required|max:255',
            'link_location' =>'required|max:150' ,
            'price' => 'required',
            'photo_1' => 'required',
            'photo_2' => 'required',
            'photo_3' => 'required',
            'photo_4' => 'required',
            'photo_5' => 'required',
            // 'photo_1' => 'image|file|max:2048',
            // 'photo_2' => 'image|file|max:2048',
            // 'photo_3' => 'image|file|max:2048',
            // 'photo_4' => 'image|file|max:2048',
            // 'photo_5' => 'image|file|max:2048',
            'description' => 'required|max:500',
        ]);

        // dd($validatedData);

        $validatedData['slug'] = 'test-dummy';
        $validatedData['property_type'] = 'kosan';

        // $validatedData['photo_1'] = $request->file('photo_1')->store('post-images');
        // $validatedData['photo_2'] = $request->file('photo_2')->store('post-images');
        // $validatedData['photo_3'] = $request->file('photo_3')->store('post-images');
        // $validatedData['photo_4'] = $request->file('photo_4')->store('post-images');
        // $validatedData['photo_5'] = $request->file('photo_5')->store('post-images');

        $seller = Seller::firstWhere('user_id', auth()->user()->id);
        $validatedData['seller_id'] = $seller->id;


        Property::create($validatedData);

        return redirect('/seller/dashboard/')->with('success', 'Property has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function showOrder()
    {

        $seller = Seller::firstWhere('user_id', auth()->user()->id);
        $orders = Order::with(['seller', 'buyer', 'property']);
        $orders = $orders->where([['seller_id','=',$seller->id],['status','=','pending']])->get();

        // dd($seller->id);
        // dd(Property::where('seller_id', $seller->id)->get());
        return view('sellers.dashboard.transaksi', [
            'title' => 'Order Property',
            'optionName' => 'Order Property',
            'orders' => $orders
            // 'profile' => Seller::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function showTransaction()
    {

        $seller = Seller::firstWhere('user_id', auth()->user()->id);
        $orders = Order::with(['seller', 'buyer', 'property']);
        $orders = $orders->where([['seller_id','=',$seller->id],['status','=','pending']])->get();

        // dd($seller->id);
        // dd(Property::where('seller_id', $seller->id)->get());
        return view('sellers.dashboard.transaksi', [
            'title' => 'Order Property',
            'optionName' => 'Order Property',
            'orders' => $orders
            // 'profile' => Seller::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function orderAction(Request $request,Order $order){
        //$order->status="accepted";
        //dd("tes");
        if($request->input('status')=='accepted'){
            
            $data = $request->validate(['status'=>"required"]);
            Order::where('id', $order->id)->update($data);
            
            //update is_availabe di tabel property
            $order->property->is_available = 0;
            $order->save();
            
            return redirect('/seller/orders')->with('success', 'Order has been accepted');
    
        }else if($request->input('status')=='rejected'){
            $data = $request->validate(['status'=>"required"]);
            Order::where('id', $order->id)->update($data);

            return redirect('/seller/orders')->with('success', 'Order has been rejected');
        }
        
        //Property::where('id', $property->id)->update($validatedData);
        // Order::where('id', $order->id)->update->($order);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        return view('sellers.dashboard.edit', [
            'title' => "Update",
            'property' => $property
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        // dd($request);
        $rules = [
            'title' => 'required|max:150',
            // 'slug' => 'required|unique:properties',
            // 'property_type' =>'required',
            // 'is_available' => 'required',
            'address' =>'required|max:255',
            'link_location' =>'required|max:150' ,
            'price' => 'required',
            'photo_1' => 'required',
            'photo_2' => 'required',
            'photo_3' => 'required',
            'photo_4' => 'required',
            'photo_5' => 'required',
            // 'photo_1' => 'image|file|max:2048',
            // 'photo_2' => 'image|file|max:2048',
            // 'photo_3' => 'image|file|max:2048',
            // 'photo_4' => 'image|file|max:2048',
            // 'photo_5' => 'image|file|max:2048',
            'description' => 'required|max:500',
        ];

        // dd($validatedData);

        $validatedData = $request->validate($rules);

        $validatedData['slug'] = 'test-dummy';
        $validatedData['property_type'] = 'kosan';

        // $validatedData['photo_1'] = $request->file('photo_1')->store('post-images');
        // $validatedData['photo_2'] = $request->file('photo_2')->store('post-images');
        // $validatedData['photo_3'] = $request->file('photo_3')->store('post-images');
        // $validatedData['photo_4'] = $request->file('photo_4')->store('post-images');
        // $validatedData['photo_5'] = $request->file('photo_5')->store('post-images');

        $seller = Seller::firstWhere('user_id', auth()->user()->id);
        $validatedData['seller_id'] = $seller->id;

        // dd($validatedData);


        Property::where('id', $property->id)->update($validatedData);

        return redirect('/seller/dashboard/')->with('success', 'Property has been added!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        if ($property->photo_1) {
            Storage::delete($property->photo_1);
        }
        if ($property->photo_2) {
            Storage::delete($property->photo_2);
        }
        if ($property->photo_3) {
            Storage::delete($property->photo_3);
        }
        if ($property->photo_4) {
            Storage::delete($property->photo_4);
        }
        if ($property->photo_5) {
            Storage::delete($property->photo_5);
        }

        Property::destroy($property->id);

        return redirect('/seller/dashboard')->with('success', 'Post has been deleted!');
    }

    public function editProfile(User $user) {
        return view('sellers.editProfile', [
            'title' => 'Edit Profile',
            'seller' => Seller::firstWhere('user_id', $user->id)
        ]);
    }

    public function updateProfile(Request $request, User $user) {
        $user_rules = [
            'name' => 'required',
            'email' => 'required',
        ];

        if ($request->username != $user->username) {
            $user_rules['username'] = 'required|unique:users';
        } else {
            $user_rules['username'] = 'required';
        }

        $validatedDataUser = $request->validate($user_rules);

        $seller_rules = [
            'phone' => '',
            'address' => '',
            'photo_profile' => 'image|file|max:5120'
        ];

        $validatedDataSeller = $request->validate($seller_rules);

        if ($request->file('photo_profile')) {
            if ($request->old_photo_profile) {
                Storage::delete($request->old_photo_profile);
            }
            $validatedDataSeller['photo_profile'] = $request->file('photo_profile')->store('sellers-photo-profile');
        }

        User::where('id', $user->id)->update($validatedDataUser);
        Seller::where('user_id', $user->id)->update($validatedDataSeller);

        return redirect('seller/dashboard')->with('success', 'Your profile has been updated!');
    }

    public function history() {
        $seller = Seller::firstWhere('user_id', auth()->user()->id);
        return view('sellers.history', [
            'title' => 'Riwayat Transaksi',
            'seller' => $seller,
            'orders' => Order::where('seller_id', $seller->id)->get(),
            'name' => 'Fukada Eimi',
            'email' => 'mail@email.com',
            'optionName' => 'Riwayat Transaksi',
            'propertyName' => 'Kosan Brothel Gerlong Triple X',
            'propertyAddress' => 'Jl. Gerlong Tengah No. 69, RT. 06/09, Desa xxx, Kec. xxx, Kab. Bandung, Jawa Barat 45069'
        ]);
    }
}
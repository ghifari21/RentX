<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Seller;
use Illuminate\Http\Request;

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
            'name' => 'Fukada Eimi',
            'email' => 'mail@email.com',
            'optionName' => 'Daftar Property',
            'propertyName' => 'Kosan Brothel Gerlong Triple X',
            'propertyAddress' => 'Jl. Gerlong Tengah No. 69, RT. 06/09, Desa xxx, Kec. xxx, Kab. Bandung, Jawa Barat 45069',
            'properties' => Property::where('seller_id', $seller->id)->get()
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        // dd($property->id);
        Property::destroy($property->id);

        return redirect('/seller/dashboard')->with('success', 'Post has been deleted!');
    }
}

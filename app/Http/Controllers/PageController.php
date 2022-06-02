<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Review;
use App\Models\Property;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index() {
        return view('index', [
            'title' => 'Home',
            'properties' => Property::orderBy("rating",'desc')->orderBy("total_reviewer",'desc')->take(10)->get()
        ]);
    }

    public function search() {
        return view('search', [
            'title' => 'Cari',
            'properties' => Property::orderBy('rating', 'desc')->orderBy('total_reviewer','desc')->filter(request(['search']))->paginate(10)
        ]);
    }

    public function show(Property $property) {
        return view('property', [
            'title' => 'Detail Properti',
            'property' => $property,
            'properties' => Property::orderBy("rating",'desc')->orderBy("total_reviewer",'desc')->take(10)->get(),
            'reviews' =>Review::with('property')->orderBy('rating', 'desc')->get(),
        ]);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Property;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index() {
        return view('index', [
            'title' => 'Home',
            'properties' => Property::all()->sortBy("title")->take(10)
        ]);
    }

    public function search() {
        return view('search', [
            'title' => 'Cari',
            'properties' => Property::latest()->filter(request(['search']))->paginate(10)
        ]);
    }

    public function show(Property $property) {
        return view('property', [
            'title' => 'Detail Properti',
            'property' => $property,
            'properties' => Property::all()->sortBy("title")->take(10)
        ]);
    }
}

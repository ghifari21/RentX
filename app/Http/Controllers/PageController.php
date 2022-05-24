<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

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
            'properties' => Property::latest()->paginate(10)
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

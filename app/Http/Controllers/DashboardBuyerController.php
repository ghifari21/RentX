<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Buyer;

class DashboardBuyerController extends Controller
{
    public function index() {
        return view('buyers.index', [
            'title' => 'Dashboard',
            'optionName' => 'Kos Saya',
            'name' => 'Johnny Sins',
            'email' => 'mail@email.com',
            'propertyName' => 'Kosan Brothel Gerlong Triple X',
            'propertyAddress' => 'Jl. Gerlong Tengah No. 69, RT. 06/09, Desa xxx, Kec. xxx, Kab. Bandung, Jawa Barat 45069',
            'propertyPrice' => 'Rp 1.000.000',
            'duration' => '21/06/2022 - 32/13/2069'
        ]);
    }
}

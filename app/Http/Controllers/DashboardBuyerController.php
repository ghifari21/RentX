<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Buyer;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DashboardBuyerController extends Controller
{
    public function index() {
        $buyer = Buyer::firstWhere('user_id', auth()->user()->id);
        return view('buyers.index', [
            'title' => 'Dashboard',
            'orders' => Order::where('buyer_id', $buyer->id)->get(),
            'optionName' => 'Kos Saya',
            'name' => 'Johnny Sins',
            'email' => 'mail@email.com',
            'propertyName' => 'Kosan Brothel Gerlong Triple X',
            'propertyAddress' => 'Jl. Gerlong Tengah No. 69, RT. 06/09, Desa xxx, Kec. xxx, Kab. Bandung, Jawa Barat 45069',
            'propertyPrice' => 'Rp 1.000.000',
            'duration' => '21/06/2022 - 32/13/2069',
            'buyer' => Buyer::firstWhere('user_id', auth()->user()->id)
        ]);
    }

    public function edit(User $user) {
        return view('buyers.editProfile', [
            'title' => 'Edit Profile',
            'buyer' => Buyer::firstWhere('user_id', $user->id)
        ]);
    }

    public function update(Request $request, User $user, Buyer $buyer) {
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

        $buyer_rules = [
            'phone' => '',
            'photo_profile' => 'image|file|max:5120'
        ];

        $validatedDataBuyer = $request->validate($buyer_rules);

        if ($request->file('photo_profile')) {
            if ($request->old_photo_profile) {
                Storage::delete($request->old_photo_profile);
            }
            $validatedDataBuyer['photo_profile'] = $request->file('photo_profile')->store('buyers-photo-profile');
        }

        User::where('id', $user->id)->update($validatedDataUser);
        Buyer::where('user_id', $user->id)->update($validatedDataBuyer);

        return redirect('/dashboard')->with('success', 'Your profile has been updated!');
    }

    public function verification() {
        return view('buyers.verification', [
            'title' => 'Verifikasi Akun',
            'optionName' => 'Verifikasi Akun',
            'buyer' => Buyer::firstWhere('user_id', auth()->user()->id)
        ]);
    }

    public function viewChangePassword() {
        return view('buyers.changePassword', [
            'title' => 'Ganti Password'
        ]);
    }

    public function changePassword(Request $request, User $user) {
        $credentials = $request->validate([
            'username' => 'required',
        ]);

        $credentials['password'] = $request->old_password;

        if (Auth::attempt($credentials)) {
            $new_password = $request->validate([
                'password' => 'required|min:8'
            ]);
            if ($new_password['password'] != $credentials['password']) {
                $request->validate([
                    're_password' => 'required|same:password'
                ]);
                $new_password['password'] = Hash::make($new_password['password']);
                dd($new_password['password']);
            User::where('id', auth()->user()->id)->update($new_password);
            }
        }
        return back()->with('error', 'There is an error!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardAdminController extends Controller
{
    public function requestUpgrade() {
        return view('admin.requestUpgrade', [
            'title' => 'Request Upgrade',
            'requests' => Seller::where('status', 'pending')->get()
        ]);
    }

    public function showRequest(User $user) {
        return view('admin.showRequest', [
            'title' => 'Request Upgrade',
            'requester' => Seller::firstWhere('user_id', $user->id)
        ]);
    }

    public function acceptRequest(Request $request, User $user) {
        $validatedData = $request->validate([
            'status' => 'required'
        ]);

        $user->account_type = 'seller';
        $user->save();

        Seller::where('user_id', $user->id)->update($validatedData);

        return redirect('/admin/requestUpgrade');
    }

    public function rejectRequest(User $user) {
        $user->account_type = 'buyer';
        $user->save();

        $seller = Seller::firstWhere('user_id', $user->id);
        Storage::delete($seller->photo_ktp);
        Storage::delete($seller->photo_selfie);

        Seller::destroy($seller->id);

        return redirect('/admin/requestUpgrade');
    }
}

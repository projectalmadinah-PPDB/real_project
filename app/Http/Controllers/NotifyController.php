<?php

namespace App\Http\Controllers;

use App\Models\Notify;
use Illuminate\Http\Request;

class NotifyController extends Controller
{
    public function index()
    {
        $notif = Notify::first();
        return view('pages.admin.dashboard.setting.notify',compact('notif'));
    }

    public function update(Request $request)
    {
        $notify = Notify::first();
        $notifys = $request->validate([
            'notif_otp' => 'required',
            'notif_lolos' =>'required',
            'notif_gagal' => 'required',
            'notif_pembayaran' => 'required',
            'notif_info' => 'required'
        ]);

        $notify->update($notifys);

        return redirect()->route('admin.setting.notify.index');
    }
}

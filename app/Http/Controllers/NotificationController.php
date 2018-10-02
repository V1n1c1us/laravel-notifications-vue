<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //retorna todas notificaçoes do user logado
    public function notifications(Request $request)
    {
        $notifications = $request->user()->unreadnotifications;

        //retorna um json
        return response()->json(compact('notifications'));
    }

    //marcar notification como lida
    public function markAsRead(Request $request)
    {
        $notification = $request->user()
                                    ->notifications()
                                    ->where('id', $request->id)
                                    ->first();
        if($notification)
            $notification->markAsRead();
    }
}

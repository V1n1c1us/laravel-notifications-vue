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
        $notifications = $request->user()->notifications;

        //retorna um json
        return response()->json(compact('notifications'));
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class UserEventsController extends Controller
{
    public function dubai()
    {
        return view('user.event.dubai');
    }

    public function tunisia()
    {
        return view('user.event.tunisia');
    }

    public function london()
    {
        return view('user.event.london');
    }

    public function paris()
    {
        return view('user.event.paris');
    }

    public function roma()
    {
        return view('user.event.roma');
    }
}
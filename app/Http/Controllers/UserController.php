<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index() {
        return view('dashboards.users.index');

    }

    function profile() {
        return view('dashboards.users.profile');

    }

    function settings() {
        return view('dashboards.users.settings');

    }
    public function time_table()
    {
        # code...
        $all = \App\Models\TimeTable::all();
        return view('dashboards.users.time_table');
    }

}

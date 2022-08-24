<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function index() {
        return view('dashboards.admins.index');

    }

    function profile() {
        return view('dashboards.admins.profile');

    }

    function settings() {
        return view('dashboards.admins.settings');

    }
    public function applications()
    {
        $data['data'] = \App\Models\Application::all();
        return view('dashboards.admins.applications', $data);
    }
    public function students()
    {
        $data['data'] = DB::table('applications')->where('status', '=', 'ACCEPTED')
                ->get();
        return view('dashboards.admins.students', $data);
    }
    public function schedules()
    {
        $data['data'] = \App\Models\TimeTable::all();
        return view('dashboards.admins.schedules', $data);
    }
    public function sessions()
    {
        $data['data'] = \App\Models\Sessionz::all();
        return view('dashboards.admins.sessions', $data);
    }
    public function modes()
    {
        $data['data'] = \App\Models\Mode::all();
        return view('dashboards.admins.modes');
    }
}

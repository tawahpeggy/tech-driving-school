<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
        $data['data'] = \App\Models\Application::all();
        return view('dashboards.admins.students', $data);
    }
    public function accept_application($id)
    {
        try {
            $instance = \App\Models\Application::find($id);
            $instance->status = 'accepted';
            $instance->save();
            return back()->with('success', "Application Accepted ");
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error', 'Failed to accept application');
        }
    }
    public function reject_application($id)
    {
        try {
            $instance = \App\Models\Application::find($id);
            $instance->status = 'rejected';
            $instance->save();
            return back()->with('success', "Application rejected ");
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error', 'Failed to reject application');
        }
    }
    public function schedules()
    {
        $data['data'] = json_decode(\App\Models\TimeTable::first()->schedules ?? null);
        // dd($data);
        return view('dashboards.admins.schedules', $data);
    }
    public function getSchedule($id)
    {
        // return $id;
        return \App\Models\TimeTable::find($id);
    }
    public function sessions()
    {
        $data['data'] = \App\Models\Sessionz::all();
        return view('dashboards.admins.sessions', $data);
    }
    public function modes()
    {
        $data['data'] = \App\Models\Mode::all();
        return view('dashboards.admins.modes', $data);
    }
    public function store_mode()
    {
        # code...
        $validator = Validator::make(request()->all(), [
            'name'=>'required',
            'price'=>'required'
        ]);
        if ($validator->fails()) {
            return back()->with('error', json_encode($validator->getMessageBag()->getMessages()));
        }
        $instance = new \App\Models\Mode(request()->all());
        $instance->save();
        return back()->with('success', "Mode created successfully");
    }
    public function delete_mode($id)
    {
        try {
            \App\Models\Mode::find($id)->delete();
            return back()->with('success', 'Mode successfully deleted');
        } catch (\Throwable $th) {
            return back()->with('error', 'Sorry. Failed to delete mode. Try again later');
        }
    }

    public function store_session()
    {
        try {
            $validator = Validator::make(request()->all(), [
                'start'=>'required|date',
                'end'=>'required|date'
            ]);
            if ($validator->fails()) {
                return back()->with('error', $validator->getMessageBag()->getMessages()[0]);
            }
            $instance = new \App\Models\Sessionz(request()->all());
            $instance->save();
            return back()->with('success', 'Session successfully created.');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }

    }

    public function delete_session($id)
    {
        try {
            \App\Models\Sessionz::find($id)->delete();
            return back()->with('success', 'Session successfully deleted.');
        } catch (\Throwable $th) {
            // Date::p
            return back()->with('error', 'Sorry. Error occured deleting session. Try again later.');
        }
    }

    public function save_schedule()
    {
        $validator = Validator::make(request()->all(), [
            'title'=>'required',
            'start_date'=>'required|date',
            'end_date'=>'required|date',
            'schedules'=>'array'
        ]);
        if ($validator->fails()) {
            return back()->with('error', json_encode($validator->getMessageBag()->getMessages()));
        }
        $request = [
            'title'=>request('title'),
            'start_date'=>request('start_date'),
            'end_date'=>request('end_date'),
            'schedules'=>json_encode(request('schedules')) 
        ];
        $instance = new \App\Models\TimeTable($request);
        $instance->save();
        return back()->with('success', 'Time table created successfully.');
    }

    public function set_session_schedule()
    {
        return view('dashboards.admins.session-schedule')->with('flag', 1);
    }
    public function session_schedule($id)
    {
        return view('dashboards.admins.session-schedule')->with('flag', 2);
    }

    public function save_session_schedule()
    {
        // return request()->all();
        $validator = Validator::make(request()->all(), [
            'sessionz' => 'required',
            'schedules[]' => 'array'
        ]);
        if ($validator->fails()) {
            return back()->with('error', json_encode($validator->getMessageBag()->getMessages()[0]));
        }
        $pairs = [];
        foreach (request('schedules') as $shedule_id) {
            $pairs[] = ['session_id'=>request('sessionz'), 'schedule_id'=>$shedule_id];
        }
        \App\Models\SessionSchedule::insert($pairs);
        return back()->with('success', 'SUCCESS');
    }

}

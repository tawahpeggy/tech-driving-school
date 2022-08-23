<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Application extends Controller
{
    //
    public function index()
    {
        # code...
        return view('dashboards.users.application');
    }
    
    public function apply(Request $request)
    {
        # code...
        return auth()->user();
        $validator = Validator::make($request->all(), [
            'first_name'=>'required',
            'last_name'=>'required',
            'dob'=>'required',
            'pob'=>'required',
            'cni_number'=>'required',
            'cni_date'=>'required',
            'cni_post'=>'required',
            'id_front'=>'required|mimes:png,jpg,jpeg,gif',
            'id_back'=>'required|mimes:png,jpg,jpeg,gif',
            'passport_photo'=>'required|mimes:png,jpg,jpeg,gif',
            'mode'=>'required',
            'session'=>'required'
        ]);
        if ($validator->fails()) {
            # code...
            return back()->with('error', json_encode(serialize($validator->getMessageBag()->getMessages())));
        }
        try {
            $application_instance = new \App\Models\Application();
            $application_instance->fill($request->all());
            // application has an associated user with user id
            $application_instance->user_id = auth()->user()->id;
            $application_instance->save();
            return back()->with('success', 'Application submitted successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Error occured. Failed to submit application. '.$th->getMessage().'. Try again later.');
        }

    }
}

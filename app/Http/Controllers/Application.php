<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Nette\Utils\Random;

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
        // return auth()->user();
        # code...
        $validator = Validator::make($request->all(), [
            'first_name'=>'required',
            'last_name'=>'required',
            'dob'=>'required',
            'pob'=>'required',
            'cni_number'=>'required',
            'cni_date'=>'required',
            'cni_post'=>'required',
            'id_front'=>'required',
            'id_back'=>'required',
            'passport_photo'=>'required',
            'mode'=>'required',
            'session'=>'required'
        ]);
        if ($validator->fails()) {
            # code...
            return back()->with('error', json_encode(serialize($validator->getMessageBag()->getMessages())));
        }
        try {
            // rename and save images
            $id_front_filename =  time().'_'.Random::generate(10).'.'.$request->file('id_front')->getClientOriginalExtension();
            $request->file('id_front')->storeAs('public/uploads/images/id/front', $id_front_filename);
            
            $id_back_filename =  time().'_'.Random::generate(10).'.'.$request->file('id_back')->getClientOriginalExtension();
            $request->file('id_back')->storeAs('public/uploads/images/id/back', $id_back_filename);
            
            $passport_photo_filename =  time().'_'.Random::generate(10).'.'.$request->file('passport_photo')->getClientOriginalExtension();
            $request->file('passport_photo')->storeAs('public/uploads/images/passport', $passport_photo_filename);
            
            
            $application_instance = new \App\Models\Application();
            $application_instance->fill($request->all());
            // application has an associated user with user id
            $application_instance->user_id = auth()->user()->id;
            $application_instance->id_front = $id_front_filename;
            $application_instance->id_back = $id_back_filename;
            $application_instance->passport_photo = $passport_photo_filename;
            $application_instance->save();
            // return request()->all();
            return back()->with('success', 'Application submitted successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Error occured. Failed to submit application. '.$th->getMessage().'. Try again later.');
        }

    }
}

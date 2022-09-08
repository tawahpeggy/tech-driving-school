<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PublicController extends Controller
{
    //FOR BLOG, GALERY, INFO and SERVICES MANAGEMENT
    public function services()
    {
        return view('dashboards.admins.services');
    }
    public function gallery()
    {
        return view('dashboards.admins.gallery');
    }
    public function blog()
    {
        return view('dashboards.admins.blog');
    }
    public function info()
    {
        return view('dashboards.admins.info');
    }
    public function update_service(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'icon'=>'file|image|mimes:png,jpg,jif,jpeg',
        ]);
        if ($validator->fails()) {
            # code...
            return array_values($validator->getMessageBag()->getMessages())[0];
        }

        $service_instance = \App\Models\Service::find($request->id);
        if ($request->hasFile('icon')) {
            # code...
            $filename = time().'_'.random_int(1111,9999).'.'.$request->file('icon')->getClientOriginalExtension();
            $request->file('icon')->storeAs('public/uploads/images/services/', $filename);
            $service_instance->icon = $filename ?? $service_instance->icon;
        }
        $service_instance->name = $request->name ?? $service_instance->name;
        $service_instance->text = $request->name ?? $service_instance->text;
        $service_instance->fa_icon = $request->name ?? $service_instance->fa_icon;

        $service_instance->save();
        return back()->with('success', 'success');
    }
    public function update_post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image'=>'file|image|mimes:png,jpg,jif,jpeg',
        ]);
        if ($validator->fails()) {
            # code...
            return array_values($validator->getMessageBag()->getMessages())[0];
        }

        $post_instance = \App\Models\Blog::find($request->id);
        if ($request->hasFile('image')) {
            # code...
            $filename = time().'_'.random_int(1111,9999).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('public/uploads/images/blog/', $filename);
            $post_instance->image = $filename ?? $post_instance->image;
        }
        $post_instance->title = $request->title ?? $post_instance->title;
        $post_instance->text = $request->name ?? $post_instance->text;
        $post_instance->links = $request->links ?? $post_instance->links;

        $post_instance->save();
        return back()->with('success', 'success');
    }
    public function update_gallery(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image'=>'image',
        ]);
        if ($validator->fails()) {
            # code...
            return array_values($validator->getMessageBag()->getMessages())[0];
        }

        $post_instance = \App\Models\Gallery::find($request->id);
        if ($request->hasFile('image')) {
            # code...
            $filename = time().'_'.random_int(1111,9999).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('public/uploads/images/gallery/', $filename);
            $post_instance->image = $filename ?? $post_instance->image;
        }
        $post_instance->type = $request->type ?? $post_instance->type;

        $post_instance->save();
        return back()->with('success', 'success');
    }
    public function update_info(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'access'=>'in:public,auth,admin'
        ]);
        if ($validator->fails()) {
            # code...
            return array_values($validator->getMessageBag()->getMessages())[0];
        }

        $post_instance = \App\Models\Info::find($request->id);

        $post_instance->name = $request->name ?? $post_instance->name;
        $post_instance->value = $request->value ?? $post_instance->value;
        $post_instance->access = $request->access ?? $post_instance->access;

        $post_instance->save();
        return back()->with('success', 'Service created');
    }
    public function store_service(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'text'=>'required',
            'icon'=>'file|image|mimes:png,jpg,jif,jpeg',
        ]);
        if ($validator->fails()) {
            # code...
            return array_values($validator->getMessageBag()->getMessages())[0];
        }
        
        if ($request->hasFile('icon')) {
            # code...
            $filename = time().'_'.random_int(1111,9999).'.'.$request->file('icon')->getClientOriginalExtension();
            $request->file('icon')->storeAs('public/uploads/images/services/', $filename);
        }
        
        $service_instance = new \App\Models\Service($request->all());
        $service_instance->icon = $filename ?? '';
        $service_instance->save();
        return back()->with('success', 'Service created');
    }
    public function store_post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'=>'required',
            'text'=>'required',
            'image'=>'file|image|mimes:png,jpg,jif,jpeg',
            'links'=>'array'
        ]);
        return $request->links; 
        if ($validator->fails()) {
            # code...
            return array_values($validator->getMessageBag()->getMessages())[0];
        }
        if ($request->hasFile('image')) {
            # code...
            $filename = time().'_'.random_int(1111,9999).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('public/uploads/images/blog/', $filename);
        }
        $post_instance = new \App\Models\Blog($request->all());
        $post_instance->image = $filename ?? '';
        // return $post_instance;
        $post_instance->save();
        $links = $request->labels ? array_map(function($key, $value) use ($post_instance){
            return ['post_id'=>$post_instance->id, 'label'=>$value, 'urk'=>request('urls')[$key]];
        }, $request->labels) : "";
        return back()->with('success', 'Post created');
    }
    public function store_info(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'data'=>'required',
            'access'=>'required|in:public,auth,admin',
        ]);
        if ($validator->fails()) {
            # code...
            return array_values($validator->getMessageBag()->getMessages())[0];
        }
        $info_instance = new \App\Models\Info($request->all());
        $info_instance->save();
        return back()->with('success', 'Info saved');
    }
    public function store_to_gallery(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image'=>'required|image',
            'type'=>'required',
        ]);
        if ($validator->fails()) {
            # code...
            return array_values($validator->getMessageBag()->getMessages())[0];
        }

        $filename = time().'_'.random_int(1111,9999).'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('public/uploads/images/gallery/', $filename);

        $post_instance = new \App\Models\Gallery($request->all());
        $post_instance->name = $filename;
        $post_instance->save();
        return back()->with('success', 'Info saved');
    }
    public function delete_service()
    {
        $ret = request('id') ? \App\Models\Service::find(request('id'))->delete() : false;
        return back()->with('message', $ret ? "Service deleted" : "Failed to delete service");
    }
    public function delete_info()
    {
        $ret = request('id') ? \App\Models\Info::find(request('id'))->delete() : false;
        return back()->with('message', $ret ? "Info deleted" : "Failed to delete info");
    }
    public function delete_gallery()
    {
        // dd(storage_path('app/public/uploads/images/gallery/'.\App\Models\Gallery::find(request('id'))->name));
        if(file_exists(storage_path('app/public/uploads/images/gallery/'.\App\Models\Gallery::find(request('id'))->name))){
            unlink(storage_path('app/public/uploads/images/gallery/'.\App\Models\Gallery::find(request('id'))->name));
        }
        $ret = request('id') ? \App\Models\Gallery::find(request('id'))->delete() : false;
        return back()->with('message', $ret ? "Item deleted" : "Failed to delete item");
    }
}

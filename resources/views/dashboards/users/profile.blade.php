@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="rounded bg-y py-5 w-100 px-4">
                <h4 class="t-w fw-bold text-center">{{__('Dashboard')}}</h4>
                <div class="d-flex justify-content-center py-4">
                    <i class="fas fa-user t-b   " style="font-size: 7rem;"></i>
                </div>
                <div class="col-xs-11 col-sm-9 mx-auto ">
                    <span class="t-b  d-block fs-5 pb-1 text-uppercase text-center">role : {{auth()->user()->role_id == 1 ? 'admin' : 'user'}}</span>
                    <span class="t-w  d-block fs-5 pb-1 text-uppercase text-center">name : {{auth()->user()->name}}</span>
                    <span class="t-w  d-block fs-5 pb-1 text-lowercase text-center">{{auth()->user()->email}}</span>
                    <span class="t-b  d-block fs-5 pb-1 text-lowercase text-center">{{count(\App\Models\Application::where('user_id', auth()->user()->id)->get()). ' applications made'}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
{{-- tabs css --}}
<style>
    .tabs-nav {
        display: flex;
        flex-wrap: wrap;
        max-width: 100%;
        margin: 50px auto;
        float: right;
        background-image: linear-gradient(to right, #ffff00, #b3b300, #cccc00, #ffff33, #ffff4d);
         height: 15vh;
    }

    .tabs-nav input[type="radio"] {
        display: none;
    }

    .tabs-nav .label {
        padding: 25px;
        font-weight: bold;
        color: black;
        float: right;
        text-align: right;
      }

    .tabs-nav .label:hover {
        background: white;
        color: black;
        border-top: 5px solid green;
    }

    .tabs-nav .tab {
        width: 100%;
        padding: 20px;
        order: 1;
        display: none;
        background-color: white;
    }

    .tabs-nav input[type="radio"]:checked+label+.tab {
        display: block;
    }

    .tabs-nav #tabhome:checked + label {
    background: white;
    color: black;
    border-top:5px solid green;
  }
  
  .tabs-nav #tabservices:checked + label {
    background: white;
    color: black;
    border-top:5px solid green;
  }
  
  .tabs-nav #tabgallery:checked + label {
    background: white;
    color: black;
    border-top:5px solid green;
  }
  
  .tabs-nav #tabblog:checked + label {
    background: white;
    color: black;
    border-top:5px solid green;
  }
  .tabs-nav #tababout:checked + label {
    background: white;
    color: black;
    border-top:5px solid green;
  }
  .tabs-nav #tabhome:checked + label {
    background: white;
    color: black;
    border-top:5px solid green;
  }
  
  .tabs-nav #tabcontact:checked + label {
    background: white;
    color: black;
    border-top:5px solid green;
  }
  
  .tabs-nav #tabregister:checked + label {
    background: white;
    color: black;
    border-top:5px solid green;
  }
  .tabs-nav #tablogin:checked + label {
    background: white;
    color: black;
    border-top:5px solid green;
  }
  P {
        color: black;
      }

    h2 {
        color: black;
    }
</style>
{{-- tabs css end --}}
@section('content')
<div class="w-100py-5">
  <div class="text-center mt-4 py-4 fs-3 fw-bold text-capitalize t-b">
    @if(auth()->user()->role == 1)
      Admin Dashboard
    @endif
    @if(auth()->user()->role == 2)
      User Dashboard
    @endif
  </div>
  <div class="col-sm-9 mx-auto my-5 p-3 bg-w rounded">
    <div class="d-flex justify-content-center mb-4">
      <i class="fas fa-user t-b  " style="font-size: 8rem;"></i>
    </div>
    <div class="">
      <div class="row py-3">
        <div class="col-sm-4 text-end text-capitalize">name:</div>
        <div class="col-sm-8 text-start fw-bold text-uppercase">{{auth()->user()->name}}</div>
      </div>
      <div class="row py-3">
        <div class="col-sm-4 text-end text-capitalize">email:</div>
        <div class="col-sm-8 text-start fw-bold text-uppercase">{{auth()->user()->email}}</div>
      </div>
      <div class="row py-3">
        <div class="col-sm-8 text-center mx-auto fw-bold text-uppercase">GENDER</div>
      </div>
    </div>
  </div>
</div>
@endsection

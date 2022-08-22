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

@endsection

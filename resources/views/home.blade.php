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
<<<<<<< HEAD
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
              <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                {{-- tabs --}}
                <header>
                    <div class="navbar tabs-nav">

                        <input type="radio" id="tabhome" name="mytabs" checked="checked">
                        <label for="tabhome"><i class="fa fa-home fa-1x"></i>Home</label>
                        <div class="tab">
                            <h2>Home</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                <br>
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris <br>
                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit <br>
                                esse cillum dolore eu fugiat nulla pariatur. </p>
                        </div>


                        <input type="radio" id="tabservices" name="mytabs" checked="checked">
                        <label for="tabservices" class="label"><i class="fa fa-home fa-1x"></i>Personal information</label>
                        <div class="tab">
                            <h2>Personal Informaion</h2>
                            <label for="firstName">First Name</label> <input type="text" placeholder="First Name" id="firstName"><br> <br>
                            <label for="middleName">Middle Name</label> <input type="text" placeholder="Middle Name" id="middleName"><br> <br>
                            <label for="lastName">Last Name</label> <input type="text" placeholder="Last Name" id="lastName"><br> <br>
                            <label for="dateOfBirth">Date of Birth</label> <input type="date" id="dateOfBirth" name="dateofbirth"> <br><br>
                            <label for="pob">Place of Birth</label> <input type="text" placeholder="place of birth" id="pob"> <br><br>
                            <label for="idn">CNI Number</label> <input type="number" placeholder="id card number" name="idnumber" id="idn"><br><br>
                            <label for="iddi">Place Id was issued</label> <input type="date" placeholder="place issued" name="iddateissued" id="iddi"> <br><br>
                            <label for="idpost">iD card Post</label> <input type="text" placeholder="eg: sw18" name="idpost" id="idpost"><br><br>
                            <button class="btn btn-success">Continue</button>


                        </div>

                        <input type="radio" id="tabgallery" name="mytabs" checked="checked">
                        <label for="tabgallery">upload documents</label>
                        <label for="tabgallery"><i class="fa-thin fa-picture-o fa-1x"></i>Gallery</label>
                        <div class="tab">
                            <label for="idcard">Id card</label>
                            <input type="file" id="idcard" name="idcard"> <br><br>
                            <label for="passportpic">Passport Size Photograph</label>
                            <input type="file" id="passportpic" name="passportpic">



                        </div>

                        <input type="radio" id="tabblog" name="mytabs" checked="checked">
                        <label for="tabblog"><i class="fa-thin fa-blog fa-1x"></i>Blog</label>
                        <div class="tab">
                            <h2>Blog</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                <br>
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris <br>
                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit <br>
                                esse cillum dolore eu fugiat nulla pariatur. </p>

                        </div>

                        <input type="radio" id="tababout" name="mytabs" checked="checked">
                        <label for="tababout"><i class="fa-thin fa-file fa-1x"></i>About</label>
                        <div class="tab">
                            <h2>About</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                <br>
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris <br>
                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit <br>
                                esse cillum dolore eu fugiat nulla pariatur. </p>

                        </div>

                        <input type="radio" id="tabcontact" name="mytabs" checked="checked">
                        <label for="tabcontact"><i class="fa-thin fa-address-book fa-1x"></i>Contact</label>
                        <div class="tab">
                            <h2>Contact</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                <br>
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris <br>
                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit <br>
                                esse cillum dolore eu fugiat nulla pariatur. </p>

                        </div>

                        <!----------------------------REGISTRATION PAGE----------------------------------------------------------->
                        <input type="radio" id="tabregister" name="mytabs" checked="checked">
                        <label for="tabregister"><i class="fa-thin fa-user fa-1x" ></i>Registration</label>
                        <div class="tab">
                            <h2>Register</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                <br>
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris <br>
                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit <br>
                                esse cillum dolore eu fugiat nulla pariatur. </p>

                        </div>

                        <!------------------------------------------------REGISTRATION PAGE ENDS----------------------------------------------------------->


                        <input type="radio" id="tablogin" name="mytabs" checked="checked">
                        <label for="tablogin"><i class="fa fa-sign-in fa-1x"></i>Log in</label>
                        <div class="tab">
                            <h2>Log In</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                <br>
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris <br>
                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit <br>
                                esse cillum dolore eu fugiat nulla pariatur. </p>

                        </div>
                        {{-- tabs end --}}
                        <div class>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>
            </div>
        </div>
    </div>
=======
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
>>>>>>> f09cfd47f005fc6f6d416dca37bd0588f7184b94
@endsection

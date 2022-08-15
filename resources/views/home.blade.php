@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                
                <header>
      <div class="navbar">

        <input type="radio" id="tabhome" name="mytabs" checked="checked">
        <label for="tabhome">Home</label>
        <div class="tab">
          <h2>Home</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris <br>
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit <br>
            esse cillum dolore eu fugiat nulla pariatur. </p>

        </div>


        <input type="radio" id="tabservices" name="mytabs" checked="checked">
        <label for="tabservices">Services</label>
        <div class="tab">
          <h2>Services</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris <br>
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit <br>
            esse cillum dolore eu fugiat nulla pariatur. </p>

        </div>

        <input type="radio" id="tabgallery" name="mytabs" checked="checked">
        <label for="tabgallery">Gallery</label>
        <div class="tab">
          <h2>Gallery</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris <br>
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit <br>
            esse cillum dolore eu fugiat nulla pariatur. </p>

        </div>

        <input type="radio" id="tabblog" name="mytabs" checked="checked">
        <label for="tabblog">Blog</label>
        <div class="tab">
          <h2>Blog</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris <br>
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit <br>
            esse cillum dolore eu fugiat nulla pariatur. </p>

        </div>

        <input type="radio" id="tababout" name="mytabs" checked="checked">
        <label for="tababout">About</label>
        <div class="tab">
          <h2>About</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris <br>
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit <br>
            esse cillum dolore eu fugiat nulla pariatur. </p>

        </div>

        <input type="radio" id="tabcontact" name="mytabs" checked="checked">
        <label for="tabcontact">Contact</label>
        <div class="tab">
          <h2>Contact</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris <br>
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit <br>
            esse cillum dolore eu fugiat nulla pariatur. </p>

        </div>
        
         <!----------------------------REGISTRATION PAGE----------------------------------------------------------->
         <input type="radio" id="tabregister" name="mytabs" checked="checked">
         <label for="tabregister">Registration</label>
         <div class="tab">
           <h2>Register</h2>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
             labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris <br>
             nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit <br>
             esse cillum dolore eu fugiat nulla pariatur. </p>
 
         </div>
         
      <!------------------------------------------------REGISTRATION PAGE ENDS----------------------------------------------------------->


        <input type="radio" id="tablogin" name="mytabs" checked="checked">
        <label for="tablogin">Log in</label>
        <div class="tab">
          <h2>Log In</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris <br>
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit <br>
            esse cillum dolore eu fugiat nulla pariatur. </p>

          </div>
        
      </div>
    </header>


                <div class="card-body">
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
</div>
@endsection

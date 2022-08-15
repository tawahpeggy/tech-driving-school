@extends('layouts.app')
<style>
    * {
        text-align: left;
    }

    .item {
        background-color: #f2f2f2;
        height: 100vh;
        justify-content: center;
        align-items: center;
        width: 100vw;

    }

    .item2 {
        width: 70%;
        margin: auto;
        justify-content: center;
        align-items: center;
        margin: auto;
    }

    main {
        display: flex;
        width: 100%;
        margin: auto;
        justify-content: center;
        align-items: center;
        height: 100vh;

    }

    body {
        font-family: 'Times New Roman';
    }

    .box1 {
        background-color: rgba(255, 255, 0, 0.647);
        width: 50%;
        border-bottom-left-radius: 20px;
        border-top-left-radius: 20px;
        height: 500px;
        align-items: center;
        box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
    }

    .box2 {
        background-color: white;
        width: 50%;
        border-bottom-right-radius: 20px;
        border-top-right-radius: 20px;
        height: 500px;
        box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
    }

    #text {
        display: inline;
        font-size: small;
        margin: 0;
    }

    #pass {
        float: right;
        font-size: small;
        display: inline;
        margin: 0;
        padding: 0%;

    }

    button {
        color: black;
        background-color: rgba(255, 255, 0, 0.647);
        font-weight: bold;
        box-shadow: 2px 2px 2px 2px rgb(205, 200, 200);
        width: 22.5vw;
        font-size: 10px;
    }

    .bt {
        border: none;
        height: 30px;
        text-align: center;
        border-radius: 5px;
        margin: 1px;
        font-size: 16px;
    }

    button:hover {
        background-color: black;
        color: yellow;
    }

    a {
        text-decoration: none;
        color: blue;
    }

    #text2 {
        text-align: center;
        margin: 5%;
    }

    p {
        margin-top: 0px;
        text-align: center;
    }

    h2 {
        padding-left: 20px;
        text-align: center;
    }

    .horizontal {
        display: flex;
        flex-direction: column;
    }

    .logo-image {
        border-radius: 50%;
        box-shadow: 2px 2px 2px yellow;
        justify-content: center;
        margin: 0, auto
    }
</style>
@section('content')

    <body>
        <div class="item">
            <div class="item2">
                <main>
                    <div class="box1">
                        <br /> <br />
                        <h3 class="text-center fw-bold">{{ __('Register') }}</h3><br />
                        {{-- <img class="logo-image" src="{{ asset('images/logoImage.jpg') }}" alt="driving school logo" width="40%"> --}}
                        {{-- <img src="{{ asset('images/image_reg.jpeg') }}" alt="driving school image" width="50%"><br/> --}}
                    </div>
                    <div class="box2">
                        <div class="form1">
                            <br /><br />
                            <h2>Hello Again!</h2>
                            <p id="text2">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <form action="{{ route('register') }}" method="post">
                                @csrf

                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <label for="name" class="col-md-2">{{ __('Name') }}</label>

                                    <div class="col-md-8">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <label for="email" class="col-md-2">{{ __('Email Address') }}</label>

                                    <div class="col-md-8">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <label for="password" class="col-md-2">{{ __('Password') }}</label>

                                    <div class="col-md-8">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-1"></div>
                                    <label for="password-confirm" class="col-md-2"> {{ __('Confirm Password') }}</label>

                                    <div class="col-md-8">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-8 offset-md-2">
                                        <button type="submit" class="bt">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </form>

                        </div>
                    </div>
            </div>
            </main>
        </div>
        </div>
    </body>
@endsection

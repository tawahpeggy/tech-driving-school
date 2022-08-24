<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tech Driving School</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">

        <style>

          /***************************************HEADER**************************************************************/
          * {
  margin: 0;
  padding: 0;

  font-family: "Times New Roman", Times;
  font-size: 20px;
}

.navbar {
    overflow: hidden;
    display:flex;
  align-items: center;
    background-image: linear-gradient(to right,#ffff00,  #cccc00,  #ffff33,  #ffff4d);
  }

  .navbar a {
    float: right;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 19px;
  }


.navbar ul {
  list-style-type: none;
  float: right;
  width: 100%;
  text-align: right;
}

.dropdown {
  float: right;
  overflow: hidden;
}

 .dropdown button {
  border: none;
  outline: none;
  color: black;
  margin: 0;
  text-decoration: none;
  background-color: transparent;
  padding: 14px 16px;
  font-size: 19px;

}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);

  }

  .dropdown-content a {
    float: none;
    color: black;
    text-decoration: none;
    display: block;
    text-align: left;
  }

  .dropdown-content a:hover {
    background-color: #ddd;
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }

  .navbar a:hover, .dropdown:hover button {
    background-color: black;
    color: yellow
  }

  #register{
    background-color: black;
    color: yellow;
  }

   .logo-image {
        border-radius: 50%;
        box-shadow: 2px 2px 2px grey;
        justify-content: left;
        margin: 0,auto;
        padding: 10px;


    }
    /*************************************************HEADER CSS END****************************************************************/


    /*********************************************************** FOOTER CSS ***********************************************************/
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;


}

body {
  font-family: "Times New Roman", Times, serif;

  color: white;
  font-size: 20px;
}

.content p {
    padding-top: 5px;
}

h2 {
  margin-top: 20px;
}

.footer {
  display: flex;
  flex-direction: column;
  margin: auto;
  height: 100vh;
}

.top {
  padding-top: 90px;
  height: 60vh;
  width: 100%;
  margin: auto;
  background-size: cover;
  background-repeat: no-repeat;
  background-image: url({{ asset('images/car-steering.jpg') }});
}

.content {
  margin: auto;
  justify-content: center;
  width: 100%;
  text-align: center;
}
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tech Driving School</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">


    <!-- Css Styles -->
    <style>
        /***************************************HEADER**************************************************************/
        * {
            margin: 0;
            padding: 0;

            font-family: "Times New Roman", Times;
            font-size: 20px;
        }

        .navbar {
            overflow: hidden;
            display: flex;
            align-items: center;
            background-image: linear-gradient(to right, #ffff00, #b3b300, #cccc00, #ffff33, #ffff4d);
        }

        .navbar a {
            float: right;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 19px;
        }


        .navbar ul {
            list-style-type: none;
            float: right;
            width: 100%;
            text-align: right;
        }

        .dropdown {
            float: right;
            overflow: hidden;
        }

        .dropdown button {
            border: none;
            outline: none;
            color: black;
            margin: 0;
            text-decoration: none;
            background-color: transparent;
            padding: 14px 16px;
            font-size: 19px;

        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            z-index: 1000 !important;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);

        }

        .dropdown-content a {
            float: none;
            color: black;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .navbar a:hover,
        .dropdown:hover button {
            background-color: black;
            color: yellow
        }

        #register {
            background-color: black;
            color: yellow;
        }

        .logo-image {
            border-radius: 50%;
            box-shadow: 2px 2px 2px grey;
            justify-content: left;
            margin: 0, auto;
            padding: 10px;


        }

        /*************************************************HEADER CSS END****************************************************************/


        /*********************************************************** FOOTER CSS ***********************************************************/
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;


        }

        body {
            font-family: "Times New Roman", Times, serif;

            color: white;
            font-size: 20px;
        }

        .content p {
            padding-top: 5px;
        }

        h2 {
            margin-top: 20px;
        }

        .footer {
            display: flex;
            flex-direction: column;
            margin: auto;
            height: 100vh;
        }

        .top {
            padding-top: 90px;
            height: 60vh;
            width: 100%;
            margin: auto;
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url({{ asset('images/car-steering.jpg') }});
        }

        .content {
            margin: auto;
            justify-content: center;
            width: 100%;
            text-align: center;
        }

        .content hr {
            margin: auto;
            width: 20%;
            border-top: 5px solid yellow;
            border-bottom: 0;
            border-left: 0;
            border-right: 0;
            align-items: center;
        }
        .column:hover {
            background-color: black;
            color: yellow;
            cursor: pointer;
        }

        .row2 {
            margin: auto;
            background-color: rgb(50, 50, 51);
            width: 100%;
            align-items: center;
            justify-content: center;
            display: flex;
            padding-bottom: 100px;
        }

        .subrow {
            padding-left: 50px;
            padding-right: 50px;
            padding-top: 90px;
            padding-bottom: none;
            display: flex;

        }

        .row3 {
            margin: auto;

            background-size: cover;
            padding-top: 0px;
            text-align: center;
            display: flex;
            flex-direction: row;
            padding-bottom: 0px;
        }

        .foot {
            display: flex;
            color: black;
            float: right;

        }

        .copyright {

            font-size: 20px;
            color: black;
            display: inline;
            float: left;
            padding-left: 10px;
        }

        .column {
            padding-left: 20px;
            padding-right: 10px;
            padding-bottom: none;
            border-right: 20px;

            font-size: 20px;

        }

        .text {
            margin-top: 0;
            padding-top: 30px;
            background-image: linear-gradient(to right, #FDFF00, #FFD300, #FCE883, #d9ae12);
            width: 100%;
            height: 10vh;

        }

        .content ol {
            padding-top: 20px;
        }

        /******************************************************************FOOTER CSS END**********************************************/
        /********************************************************* HOME CSS ******************************************************/

        /* * {
            font-family: 'Times New Roman';
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        } */

        body {
            font-family: 'Times New Roman', Times, serif;
            text-align: center;

        }


        p {
            color: white;
            font-size: xx-large;
            text-align: left;
            margin-left: 1rem;

        }

        .bt {
            border: none;
            width: 20%;
            height: 70px;
            text-align: center;
            border-radius: 5px;
            margin-top: 18rem;

        }
        .bt:hover {
            cursor: pointer;
            background-color: black;
            color: yellow;
        }

        .carousel-wrapper {
            min-height:35rem;
            position: relative;
            display: block;
            opacity: 1;
            background: url('{{ asset('images/car-steering.jpg') }}');
            background-size: cover;
            animation: slide 10s infinite;
        }

        .carousel-text {
            position: absolute;
            margin-top: 13rem;
        }

        @keyframes slide {
            25% {
                background: url('{{ asset('images/drive8.webp') }}');
                background-size: cover;
            }

            50% {
                background: url('{{ asset('images/drive9.jpg') }}');
                background-size: cover;
            }

            75% {
                background: url('{{ asset('images/drive9.jpg') }}');
                background-size: cover;
            }
        }

        /********************************************home css end ****************************************************/

        /***********************************************************HTML HEADER***********************************/
    </style>
</head>

<body>
    <div class="navbar">
        <a href="{{ url('/home') }}"> <img class="logo-image nav-logo" src="{{ asset('images/logoImage.jpg') }}"
                alt="driving school logo" width="100rem"></a>
        <ul class="nav-links">
            @if (Route::has('login'))
                <div>
                    @auth
                    @else
                        <a id="register" href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="dropdown">
                <button class="dropbt">
                    About
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#">Gallery</a>
                    <a href="#">Services</a>
                    <a href="#">About Us</a>
                </div>
            </div>
            <a href="#"> Contact</a>
            <a href="#"> Blogs</a>
            <a href="#"> Gallery</a>
            <a href="#"> Services</a>
        </ul>
    </div>
    </div>

    {{-- Homepage carousel --}}

    <div class="carousel-wrapper">
        <div class="carousel-item">
            <div class="container">
                <p class="carousel-text">Tech Driving School, <br> The most advanced driving school in Cameroon </p>
                <button
                    style="color: black; background-color: yellow; border: none; font-size: xx-large; font-weight: bolder;"
                    class="bt btn">Know More</button>
            </div>
        </div>
    </div>

        {{-- footer --}}
        <footer>
            <div class="footer">
                <div class="top">
                    <div class="content">
                        <h1>Our Modes</h1>
                        <hr />
                        <p>All round year sessions</p>
                        <ol>
                            <li>Superfast mode</li>
                            <li>Fast Mode</li>
                            <li>Normal mode</li>
                        </ol>

                    </div>
                </div>

                <div class="bottom">

                    <div class="row2">
                        <div>
                            <div class="subrow">
                                <img class="logo-image nav-logo" src="{{ asset('images/logoImage.jpg') }}"
                                    alt="driving school logo" width="100rem">
                            </div>
                        </div>
                        <div class="subrow">

                            <div class="location-icon">
                                <i class="fa fa-map-marker fa-2x" style="color: white; padding-right: 10px"></i>
                            </div>

                            <div class="location-info">
                                <p>Tech Driving School<br /> <br />Molyko-Buea</p>
                            </div>
                        </div>

                        <div class="subrow">

                            <div class="contact-icon">
                                <i class="fa fa-phone fa-2x" style="color: white; padding-right: 10px ;"></i>
                            </div>

                            <div class="contact-info">
                                +237 (678 663 298)<br /> <br /> +237 (682 711 432)

                            </div>
                        </div>

                        <div class="subrow">
                            <div class="days">
                                <i class="fa fa-calendar fa-2x" style="color: white; padding-right: 10px;"></i>
                            </div>
                            <div class="days-info">
                                <p>Mondays - Fridays</p>
                            </div>
                        </div>
                    </div>
                    <div class="row3">
                        <div class="text">
                            <div class="copyright">
                                Copyright @2022 Tech Driving School. ALL RIGHTS RESERVED
                            </div>
                            <div class="foot">
                                <div class="column">Privacy Policy</div>
                                <div class="column">FAQ</div>
                                <div class="column">Contact Us</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
</body>

</html>

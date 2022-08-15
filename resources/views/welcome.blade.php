<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<<<<<<< HEAD
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tech Driving School</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
      


        <!-- Styles -->
        <!-- <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style> -->

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
    background-image: linear-gradient(to right,#ffff00,  #b3b300,#cccc00,  #ffff33,  #ffff4d);
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
  /* background-image: linear-gradient(to right,
    yellow,
    rgb(232, 209, 34),
    rgb(245, 237, 81)
  ); */
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
=======
>>>>>>> 014d93c51281414b1a995ae4198b5dd34949a8fd

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

        /* .bottom {
            bottom: 0;
            height: 50vh;
            background-image: linear-gradient(#FDFF00, #FFD300, #FCE883, #d9ae12);
        } */

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
            text-align: center;

        }

        .bt {
            border: none;
            width: 20%;
            height: 70px;
            text-align: center;
            border-radius: 5px;
            margin-top: 18rem;
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
                <p class="carousel-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies, neque
                    et sodales iaculis,
                    mauris urna lacinia nulla, eu lobortis ligula tortor eu nisi. </p>
                <button
                    style="color: black; background-color: yellow; border: none; font-size: xx-large; font-weight: bold;"
                    class="bt">Know More</button>
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

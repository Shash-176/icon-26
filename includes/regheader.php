<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta charset="utf-8">
    <title>ICON Somaiya Event Registration </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="icon,icon somaiya, icon 2020, icon 2021 simsr,simsr, somaiya icon,simsr icon, 2021 icon, TECHNOGYRE, Technogyre,icon 2021, icon simsr," name="keywords">
    <meta name="description" content="ICON as the official techfest of K J Somaiya Institute of Management was started in 2008, it has always been our primary motive to encourage scientific thinking, innovation, creativity and some good old-fashioned fun.">

    <!-- Favicons -->
    <link href="assets/img/icon-logo.png" rel="icon">
    <link href="assets/img/icon-logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">


    <!-- Bootstrap CSS File -->
    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Libraries CSS Files -->
    <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/venobox/venobox.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/event-carousel.css" rel="stylesheet">

    <style>
        #intro {
            width: 100%;
            height: 140vh;
            background: #fff;
            background-size: cover;
            overflow: hidden;
            position: relative;
        }

        .landing-inner {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            text-align: center;
            padding-top: 30px;
        }

        .landing {
            position: relative;
            background-size: cover;
            background-position: center;
            height: 100vh;
        }

        .landing h1 {
            font-size: 50px;
        }

        .landing p {
            font-size: 20px;
        }

        .countdown.mobile-nav-active {
            font-size: 50vw;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .countdown {
            font-size: 5vw;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .countdown div {
            padding: 1vw;
            border: 1px #fff solid;
            border-radius: 2em;
            background: #FFF;
            opacity: 0.7;
            margin: 0.5rem;
        }

        .countdown div:first-child {
            background: #FFF;
        }

        .countdown span {
            display: block;
            font-size: 3vh;
        }

        #events img:hover,
        #games img:hover {
            transform: scale(1.1, 1.1);
            transition: all 0.5s ease;
        }

        @media (max-width: 350px) {
            .landing img {
                width: 70%;
            }

            .landing h1 {
                font-size: 40px;
            }

            .countdown {
                font-size: 5vw;
                flex-direction: column;
            }

            .countdown div {
                display: none;
            }

            .countdown div:first-child {
                display: block;
                width: 50%;
                padding: 2rem;
            }
        }

        /**/
        #schedule {
            padding: 100px 0 60px 0;
        }

        .newlogo:hover {
            text-decoration: none;
        }


        #header #logo img {
            position: absolute;
            left: 3%;
            padding: 3px;
            /* size: inherit; */
            margin: auto;
            height: 80px;
            top: 12%;
        }


        #nav-menu-container {
            float: right;
            margin: 0;
            margin-right: -35px;
        }

        @media (min-width: 992px) {

            .venoframe,
            .vbox-inline {
                max-width: 1200px;
                width: 63%;
                height: 540px;
                height: 70vh;
            }
        }

        #header {
            height: 90px;
            position: sticky;
            top: 0;
        }

        #amountinput {
            background-color: #e9ecef;
            opacity: 1;
            width: 100px;
        }

        .idnote {
            color: red;
            font-size: 15px;
            margin-bottom: 10px;
            padding: 10px 10px;
            border-radius: 5px;
            background-color: beige;
        }
    </style>
</head>

<body>


    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">

                <a href="#intro" class="scrollto"><img src="./img/KJSIMlogo.jpg" alt="" title=""></a>
            </div>


            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="index.html#intro">Home</a></li>
                    <li><a href="index.html#about">About</a></li>
                    <!-- <li><a href="index.html#speakers">Guests</a></li> -->
                    <!-- <li><a href="index.html#schedule">CODEICON 2.0</a></li> -->
                    <li><a href="index.html#events">Events</a></li>
                    <!-- <li><a href="https://icon-somaiya.in/MEA/login.php">Enigma</a></li> -->
                    <li><a href="index.html#games">Arcades</a></li>
                    <li><a href="index.html#gallery">Gallery</a></li>
                    <li><a href="index.html#walkway">Walkway</a></li>
                    <li><a href="codeicon.html">CODEICON</a></li>
                    <li><img id=iconsidebar src="icon_logo.png" alt="" title="" style="height:60px;width:90px;margin-top: -10px;
            margin-left: 20px;"></li>
                    <!-- <li><a href="index.html#sponsors">Sponsors</a></li> -->

                    <!-- <div> -->
                    <div id="iconlogo">
                        <!-- Uncomment below if you prefer to use a text logo -->
                        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
                        <!-- <a href="index.html#intro" class="sidebarlogo"><img id=iconsidebar src="./assets/img/icon-logo.png" alt="" title=""></a> -->
                    </div>

                </ul>
            </nav>
            <!-- #nav-menu-container -->

        </div>
    </header>

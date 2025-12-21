<!DOCTYPE html>
<html lang="en">

<head>
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


    <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
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

    
    .newlogo:hover{
            text-decoration:none;
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
    margin-right: 40px;
}

@media (min-width: 992px){
.venoframe, .vbox-inline {
    max-width: 1200px;
    width: 63%;
    height: 540px;
    height: 70vh;
}
}
#header{
    height:90px;
}

/*

*/
.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px;
}
    </style>


<!-- CAROUSEL --->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "player_detail";
$conn = mysqli_connect($servername,$username,$password,$database);



function insert_detail($insert_query,$conn)
{
echo "<br/>2.".$insert_query;
    $result=mysqli_query($conn,$insert_query);
    if($result)
    {
        echo "Record inserted successfully";
    }
    else
    {
        echo "Record insert unsuccessfully<br>".mysqli_error($conn);
    }

}



$eventt=$_POST['event_name'];

if($eventt=='valorant'||
   $eventt=='csgo')
{
//   $teamname=$_POST['teamname'];
//   $teamleadname=$_POST['teamcap_name'];
//   $teamleadigname=$_POST['teamcap_igname'];
//   $primemob=$_POST['teamcap_mob1'];
//   $alternatemob=$_POST['team_mob2'];
//   $primemail=$_POST['primary_email'];
  
//   //
//   $payee_name=$_POST['teamcap_name'];
//   $payee_mob=$_POST['teamcap_mob1'];

//   $player2name=$_POST['player2_name'];
//   $player2igname=$_POST['player2_igname'];
//   $player2_clg=$_POST['player2_clgname'];

//   $player3name=$_POST['player3_name'];
//   $player3igname=$_POST['player3_igname'];
//   $player3_clg=$_POST['player3_clgname'];

//   $player4name=$_POST['player4_name'];
//   $player4igname=$_POST['player4_igname'];
//   $player4_clg=$_POST['player4_clgname'];

//   $player5name=$_POST['player5_name'];
//   $player5igname=$_POST['player5_igname'];
//   $player5_clg=$_POST['player5_clgname'];

//   echo $player2name,$player2_clg,$player2igname;
//   echo"<br/>";

//   echo $player3name,$player3_clg,$player3igname;
//   echo"<br/>";

//   echo $player4name,$player4_clg,$player4igname;
//   echo"<br/>";
//   echo $player5name,$player5_clg,$player5igname;
//   echo"<br/>";
  

//   $insert="INSERT into team_details(
//     teamname,teamleader_name,contact,
//     secondarycontact,email,clgproof,game)
//     VALUES
//     ('$teamname','$teamleadname','$primemob','$alternatemob',
//     '$primemail','clgproof','$eventt') ";

//     // echo"1". $insert;
//     insert_detail($insert,$conn);


//     $insert2="INSERT into team_member_details
//     (	teamname,game,Member_Name,In_game_name,clg_name)
//     VALUES
//     ('$teamname','$eventt','$player2name','$player2igname','$player2_clg')";
//      insert_detail($insert2,$conn);

//      //
//     $insert3="INSERT into team_member_details
//     (	teamname,game,Member_Name,In_game_name,clg_name)
//     VALUES
//     ('$teamname','$eventt','$player3name','$player3igname','$player3_clg')";
//      insert_detail($insert3,$conn);

//      //
//     $insert4="INSERT into team_member_details
//     (	teamname,game,Member_Name,In_game_name,clg_name)
//     VALUES
//     ('$teamname','$eventt','$player4name','$player4igname','$player4_clg')";
//      insert_detail($insert4,$conn);

//      //
//     $insert5="INSERT into team_member_details
//     (	teamname,game,Member_Name,In_game_name,clg_name)
//     VALUES
    // ('$teamname','$eventt','$player5name','$player5igname','$player5_clg')";
    //  insert_detail($insert5,$conn);


     //get detail of all other players
    //  echo "new query for othe players<br/>";
    //  $s="player";
    //  $name="_name";
    //  $igname="_igname";
    //  $clgname="_clgname";
    //  for($x=2;$x<=5;$x++)
    // {
    //     $playername[$x-2]=$_POST[$s.$x.$name];
    //     $playerigname[$x-2]=$_POST[$s.$x.$igname];
    //     $playerclgname[$x-2]=$_POST[$s.$x.$clgname];
    
    // }

    // print_r($playername);
    // echo"<br/>";
    // print_r($playerclgname);
    // echo"<br/>";
    // print_r($playerigname);
    // echo"<br/>";
    // for($x=0;$x<=3;$x++)
    // {
    //     $insert_arr[$x]=  "INSERT into team_member_details
    //     (	teamname,game,Member_Name,In_game_name,clg_name)
    //    VALUES 
    //    ('$teamname','$eventt','$playername[$x]','$playerigname[$x]','$playerclgname[$x]')";
    //   echo $insert_arr[$x];
    //   echo"<br/>";
    // }

    

}

elseif(
$eventt=='web_design'||
$eventt=='creatography'||
$eventt=='content_writing'||
$eventt=='chess')
{
    // $playername=$_POST['player_name'];
    // $primemail=$_POST['primary_email'];
    // $mobno=$_POST['player_mobno'];
    // $mobno2=$_POST['player_mobno2'];
    // $clgname=$_POST['player_clgname'];
    // $clgproof=$_POST['player_image'];

    // //
    // $payee_name=$_POST['player_name'];
    // $payee_mob=$_POST['player_mobno'];

    // $insertsolo="INSERT into solo
    // (playername,contact,alternatecontact,email,clgproof,eventname)
    // VALUES('$playername','$mobno','$mobno2','$primemail',' ','$eventt')";

    // insert_detail($insertsolo,$conn);


   
}

?>
<!-- SUMMARY PAGE -->
<!-- <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
               
                <a href="#intro" class="scrollto"><img src="./img/KJSIMlogo.jpg" alt="" title=""></a>
            </div>


            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="index.html#intro">Home</a></li>
                    <li><a href="index.html#about">About</a></li>
                   
                    <li><a href="index.html#events">Events</a></li>
                    
                    <li><a href="index.html#games">Arcades</a></li>
                    <li><a href="index.html#gallery">Gallery</a></li>
                    <li><a href="codeicon.html">CODEICON</a></li>
                    <li><img id=iconsidebar src="icon_logo.png" alt="" title="" style="height:60px;width:90px;margin-top: -10px;
                        margin-left: 20px;"></li>
                   
                        <div id="iconlogo">
                            
                        </div>

                </ul>
            </nav>
            

            </div>
    </header> -->
    <!-- #header -->

<?php 
$eventt=$_POST['event_name'];
    
    
if(
$_POST['event_name']=='csgo'||
$_POST['event_name']=='valorant'||
$_POST['event_name']=='chess'||
$_POST['event_name']=='web_design'||
$_POST['event_name']=='coding_decoding'||
$_POST['event_name']=='treasure_hunt'||
$_POST['event_name']=='web_design'||
$_POST['event_name']=='creatography'||
$_POST['event_name']=='content_writing'||
$_POST['event_name']=='cricket'||
$_POST['event_name']=='football'||
$_POST['event_name']=='drag and drop')
{
    $payee_name=$_POST['player_name'];
    $payee_mob=$_POST['primary_mob1'];
    $payee_email=$_POST['primary_email'];
    $payee_amount=$_POST['amount'];
}

?>
<section id="" class="section-with-bg"  style="margin-top: 100px;">

<div class="container wow fadeInUp" id="">
<div class="section-header">
 <h3 class="text-center">Summary</h3>
</div>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10" style="border:1px solid black;padding:10px;">
    <div class="row form-group">
            <div class="form-group col-md-12">
                <button class="btn btn-primary" onclick="history.back()">EDIT</button>
            </div>
        <form action="payment.php" method="POST" type="multipart/form-data">
        
            <div class="col-md-12 form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" value="<?php echo $payee_name; ?>" name="payee_name" id="" readonly="True"/>
            </div>
            <div class="col-md-12 form-group">
                <label for="">Phone Number</label>
                <input type="text" class="form-control" value="<?php echo $payee_mob; ?>" name="payee_mobno" id="" readonly="True">
            </div>
            
            <div class="col-md-12 form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" value="<?php echo $payee_email; ?>"  name="payee_email" id="" readonly="True" />
            </div>

            <div class="col-md-12 form-group">
                <label for="">Event: </label>
               <input type="text" name="game" id="" class="form-control" value="<?php echo $eventt; ?>" readonly="True" />
            </div>
            <div class="col-md-12 form-group">
                <label for="">Amount</label>
                <?php
                 //formula for amount
                ?>
                <input type="text" class="form-control" name="payee_amount" value="<?php echo $payee_amount; ?>" id="" readonly="True" />
            </div>

            <div class="col-md-12">
                <!-- <input type="submit"  value="Submit" class="btn"> -->

                <input type="submit" value="Submit" class="btn btn-success" />
            </div>

        </form>
    </div>
    <div class="col-md-1"></div>
</div>

</div>
    </section>


    <!-- <hr>
   <footer id="footer" >
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-info">
                        <img src="assets/img/icon-logo.webp" alt="ICON logo" style="height: 120px; width: 120px; margin-left: 30%;margin-right: 20%; margin-top: -20px;">
                        <p style="color: #b7202e;font-size: 20px; margin-top: -10px; font-family: 'Fira Sans', sans-serif;" class="text-justify">ICON as the official techfest of Department of Data Science And Technology , it has always been our primary motive to encourage scientific thinking, innovation, creativity and some good old-fashioned fun.
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-12 footer-links">
                        <h4 style="color: #b7202e; ">Useful Links</h4>
                        <ul>
                            <p></p>
                            <li><i class="fa fa-angle-right"></i> <a href="#intro" style="color: #b7202e; ">Home</a></li>
                            <li><i class="fa fa-angle-right "></i> <a href="#about" style="color: #b7202e; ">About us</a></li>
                            
                            <li><i class="fa fa-angle-right "></i> <a href="#gallery " style="font-size:17px; color: #b7202e;">Gallery</a></li>
                            </p>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-contact " style="font-size:15px; ">
                        <h4 style="color: #b7202e; ">Contact Us</h4>
                        <p style="color: #b7202e; ">
                            K J Somaiya Institute of Management, <br> Somaiya Vidyavihar University,<br>Vidyavihar East
                            <br> Mumbai-400077. <br>
                            <strong>Sudarshan Sirsat (Co-ordinator) |</strong><a href="tel: +91-7304053115 " style="color: #b7202e; ">+91-7304053115</a><br>
                            <strong>Himani Narang |</strong><a href="tel: +91-8425909901 " style="color: #b7202e; ">+91-8425909901</a><br>
                            <strong>Aadil Karim |</strong><a href="tel: +91-7400384813 " style="color: #b7202e; ">+91-7400384813</a><br>
                            <strong>Sumeet |</strong><a href="tel: +91-7400384813 " style="color: #b7202e; ">+91-7400398638</a><br>
                            <strong>Email: </strong><a href="mailto: icon.simsr@somaiya.edu " style="color: #b7202e; ">icon.simsr@somaiya.edu</a><br>
                        </p>
                        <div class="social-links ">
                            <a href="https://www.facebook.com/iconsimsr " class="facebook " target="_blank "><i
                                class="fa fa-facebook "></i></a>
                            <a href="https://instagram.com/icon_2k21?igshid=1pphxo1fdw7ix " class="instagram " target="_blank "><i
                                class="fa fa-instagram "></i></a>
                            <a href="https://www.linkedin.com/ " class="linkedin " target="_blank "><i
                                class="fa fa-linkedin "></i></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="container ">
            <div class="copyright ">
                &copy; Copyright <strong>ICON</strong>. All Rights Reserved
            </div>
        </div>
    </footer> -->
    <!-- #footer -->

    <a href="# " class="back-to-top " style="background-color: #b7202e ; "><i class="fa fa-angle-up "></i></a>







 <!-- JavaScript Libraries -->
 <script src="assets/lib/jquery/jquery.min.js "></script>
    <script src="assets/lib/jquery/jquery-migrate.min.js "></script>
    <script src="assets/lib/bootstrap/js/bootstrap.bundle.min.js "></script>
    <script src="assets/lib/easing/easing.min.js "></script>
    <script src="assets/lib/superfish/hoverIntent.js "></script>
    <script src="assets/lib/superfish/superfish.min.js "></script>
    <script src="assets/lib/wow/wow.min.js "></script>
    <script src="assets/lib/venobox/venobox.min.js "></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js "></script>

    <!-- Contact Form JavaScript File -->
    <script src="assets/contactform/contactform.js "></script>
    <script src="assets/js/script.js"></script>
    <!-- Template Main Javascript File -->
    <script src="assets/js/main.js "></script>
    <script src="assets/js/event-carousel.js "></script>
</body>
</html>
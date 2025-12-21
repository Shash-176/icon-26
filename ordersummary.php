
<?php
use Razorpay\Api\Api;

require "vendor/autoload.php";
include 'config.php';
session_start();



$emailid=$_POST['primary_email']; //need help
$_SESSION['primary_email']=$emailid; //need help

$playername=$_POST['player_name']; //need help
$_SESSION['player_name']=$playername; //need help

$mobno=$_POST['primary_mob1']; //need help
$_SESSION['primary_mob1']=$mobno; //need help

$eventname=$_POST['event_name']; //need help
$_SESSION['event_name']=$eventname; //need help

$regfees=$_POST['amount']; //need help
$_SESSION['amount']=$regfees; //need help

$eventname=$_POST['event_name'];
$_SESSION['game']=$_POST['event_name'];

//code for pdf upload to temp directory
 // Check if the form was submitted
 $randomno=rand(1000,10000);
 $_SESSION['random_no']=$randomno;

//  echo $randomno;
//  echo $_SESSION['random_no'];
//code for pdf upload to temp directory
 // Check if the form was submitted
 if($_SERVER["REQUEST_METHOD"] == "POST"){
     // Check if file was uploaded without errors
     if(isset($_FILES["player_image"]) && $_FILES["player_image"]["error"] == 0){
         $allowed = array("pdf" => "application/pdf");
         $fname = $_FILES["player_image"]["name"];
         $filetype = $_FILES["player_image"]["type"];
         $filesize = $_FILES["player_image"]["size"];
         $filename = $randomno."-".$eventname."-".$_FILES["player_image"]["name"];
         // Verify file extension
         $ext = pathinfo($filename, PATHINFO_EXTENSION);
         //if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid pdf file format.");
         if(!array_key_exists($ext, $allowed)) {
            echo"<script> alert('File Format Error: Please select a valid pdf file format.'); location.href=history.back();</script>";
            die();
        }
           
         // Verify file size - 10MB maximum
         $maxsize = 20 * 1024 * 1024;
         if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
     
         // Verify MYME type of the file
         if(in_array($filetype, $allowed)){
             // Check whether file exists before uploading it
             if(file_exists("temp/" . $filename)){
                 echo $filename . " is already exists.";
             } else{
                 move_uploaded_file($_FILES["player_image"]["tmp_name"], "temp/" . $filename);
               //  echo "Your file was uploaded successfully.";
                 
                 $_SESSION['idcard']=$filename;
             }
         } else{
             echo "Error: There was a problem uploading your file. Please try again.";
         }
     } else{
         echo "Error: " . $_FILES["player_image"]["error"];
     }
 }

 


//solo events
if(
$_POST['event_name']=='web_design'||
$_POST['event_name']=='creatography'||
$_POST['event_name']=='content_writing'||
$_POST['event_name']=='big_chess'||
$_POST['event_name']=='drag and drop'||
$_POST['event_name']=='coding_decoding')
{
   $playername=$_POST['player_name'];
   $_SESSION['playername']=$_POST['player_name'];

   $clgname=$_POST['player_clgname'];
   $_SESSION['clgname']=$_POST['player_clgname'];
   
   $email=$_POST['primary_email'];
   $_SESSION['email']=$_POST['primary_email'];
   
   $mob1=$_POST['primary_mob1'];
   $_SESSION['mob1']=$_POST['primary_mob1'];
   
   $mob2=$_POST['primary_mob2'];
   $_SESSION['mob2']=$_POST['primary_mob2'];
   
  
   
}

//team events
elseif($_POST['event_name']=='valorant')
{
    $teamname=$_POST['teamname'];
   $_SESSION['teamname']=$_POST['teamname'];
   

   $playername=$_POST['player_name'];
   $_SESSION['playername']=$_POST['player_name'];
   
   $email=$_POST['primary_email'];
   $_SESSION['email']=$_POST['primary_email'];
   
   $mob1=$_POST['primary_mob1'];
   $_SESSION['mob1']=$_POST['primary_mob1'];
   
   $mob2=$_POST['primary_mob2'];
   $_SESSION['mob2']=$_POST['primary_mob2'];
   
//    $idcard=$_POST['player_image'];
//    $_SESSION['idcard']=$_POST['player_image'];
   
   $eventname=$_POST['event_name'];
   $_SESSION['game']=$_POST['event_name'];

   $clgname=$_POST['player_clgname'];
   $_SESSION['clgname']=$_POST['player_clgname'];
   

//    Player 2
   $player2name=$_POST['player2_name'];
   $_SESSION['player2name']=$_POST['player2_name'];

   $player2igname=$_POST['player2_igname'];
   $_SESSION['player2igname']=$_POST['player2_igname'];

   $clgname2=$_POST['player2_clgname'];
   $_SESSION['clg2name']=$_POST['player2_clgname'];
 

//    Player 3
$player3name=$_POST['player3_name'];
$_SESSION['player3name']=$_POST['player3_name'];

$player3igname=$_POST['player3_igname'];
$_SESSION['player3igname']=$_POST['player3_igname'];

$clgname3=$_POST['player3_clgname'];
$_SESSION['clg3name']=$_POST['player3_clgname'];

//    Player 4
$player4name=$_POST['player4_name'];
$_SESSION['player4name']=$_POST['player4_name'];

$player4igname=$_POST['player4_igname'];
$_SESSION['player4igname']=$_POST['player4_igname'];

$clgname4=$_POST['player4_clgname'];
$_SESSION['clg4name']=$_POST['player4_clgname'];


//    Player 5
$player5name=$_POST['player5_name'];
$_SESSION['player5name']=$_POST['player5_name'];

$player5igname=$_POST['player5_igname'];
$_SESSION['player5igname']=$_POST['player5_igname'];

$clgname5=$_POST['player5_clgname'];
$_SESSION['clg5name']=$_POST['player5_clgname'];

}
//team events
elseif( $_POST['event_name']=='codeicon')
{
    $teamname=$_POST['teamname'];
   $_SESSION['teamname']=$_POST['teamname'];

   $playername=$_POST['player_name'];
   $_SESSION['playername']=$_POST['player_name'];
   
   $email=$_POST['primary_email'];
   $_SESSION['email']=$_POST['primary_email'];
   
   $mob1=$_POST['primary_mob1'];
   $_SESSION['mob1']=$_POST['primary_mob1'];
   
   $mob2=$_POST['primary_mob2'];
   $_SESSION['mob2']=$_POST['primary_mob2'];
   
//    $idcard=$_POST['player_image'];
// $_SESSION['idcard']=$_POST['player_image'];
   
   $eventname=$_POST['event_name'];
   $_SESSION['game']=$_POST['event_name'];

   $clgname=$_POST['player_clgname'];
   $_SESSION['clgname']=$_POST['player_clgname'];
   

//    Player 2
   $player2name=$_POST['player2_name'];
   $_SESSION['player2name']=$_POST['player2_name'];

   $player2_mail=$_POST['player2_email'];
   $_SESSION['player2_email']=$_POST['player2_email'];

    $player2_mob=$_POST['player2_mob'];
    $_SESSION['player2_mob']=$_POST['player2_mob'];

   $clgname2=$_POST['player2_clgname'];
   $_SESSION['clg2name']=$_POST['player2_clgname'];
 

//    Player 3
$player3name=$_POST['player3_name'];
$_SESSION['player3name']=$_POST['player3_name'];

$player3_mail=$_POST['player3_email'];
$_SESSION['player3_email']=$_POST['player3_email'];

 $player2_mob=$_POST['player3_mob'];
 $_SESSION['player3_mob']=$_POST['player3_mob'];


$clgname3=$_POST['player3_clgname'];
$_SESSION['clg3name']=$_POST['player3_clgname'];

//    Player 4
$player4name=$_POST['player4_name'];
$_SESSION['player4name']=$_POST['player4_name'];

$player4_mail=$_POST['player4_email'];
$_SESSION['player4_email']=$_POST['player4_email'];

 $player4_mob=$_POST['player4_mob'];
 $_SESSION['player4_mob']=$_POST['player4_mob'];



$clgname4=$_POST['player4_clgname'];
$_SESSION['clg4name']=$_POST['player4_clgname'];




}


/*================
Gallery 
===================*/
elseif($_POST['event_name']=='gallery')
{
    $teamname=$_POST['teamname'];
   $_SESSION['teamname']=$_POST['teamname'];

   $playername=$_POST['player_name'];
   $_SESSION['playername']=$_POST['player_name'];
   
   $email=$_POST['primary_email'];
   $_SESSION['email']=$_POST['primary_email'];
   
   $mob1=$_POST['primary_mob1'];
   $_SESSION['mob1']=$_POST['primary_mob1'];
   
   $mob2=$_POST['primary_mob2'];
   $_SESSION['mob2']=$_POST['primary_mob2'];
   
//    $idcard=$_POST['player_image'];
// $_SESSION['idcard']=$_POST['player_image'];
   
   $eventname=$_POST['event_name'];
   $_SESSION['game']=$_POST['event_name'];

   $clgname=$_POST['player_clgname'];
   $_SESSION['clgname']=$_POST['player_clgname'];
   

//    Player 2
   $player2name=$_POST['player2_name'];
   $_SESSION['player2name']=$_POST['player2_name'];

   $player2_mail=$_POST['player2_email'];
   $_SESSION['player2_email']=$_POST['player2_email'];

    $player2_mob=$_POST['player2_mob'];
    $_SESSION['player2_mob']=$_POST['player2_mob'];

   $clgname2=$_POST['player2_clgname'];
   $_SESSION['clg2name']=$_POST['player2_clgname'];
 

//    Player 3
$player3name=$_POST['player3_name'];
$_SESSION['player3name']=$_POST['player3_name'];

$player3_mail=$_POST['player3_email'];
$_SESSION['player3_email']=$_POST['player3_email'];

 $player2_mob=$_POST['player3_mob'];
 $_SESSION['player3_mob']=$_POST['player3_mob'];


$clgname3=$_POST['player3_clgname'];
$_SESSION['clg3name']=$_POST['player3_clgname'];

//    Player 4
$player4name=$_POST['player4_name'];
$_SESSION['player4name']=$_POST['player4_name'];

$player4_mail=$_POST['player4_email'];
$_SESSION['player4_email']=$_POST['player4_email'];

 $player4_mob=$_POST['player4_mob'];
 $_SESSION['player4_mob']=$_POST['player4_mob'];



$clgname4=$_POST['player4_clgname'];
$_SESSION['clg4name']=$_POST['player4_clgname'];

//file upload for executive summary
if(isset($_FILES["executive_summary"]) && $_FILES["executive_summary"]["error"] == 0){
    $allowed = array("pdf" => "application/pdf");
    $fname = $_FILES["executive_summary"]["name"];
    $filetype = $_FILES["executive_summary"]["type"];
    $filesize = $_FILES["executive_summary"]["size"];
    $filename = $randomno."-".$eventname."-".$_FILES["executive_summary"]["name"];
   
    // Verify file extension
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    //if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid pdf file format.");
    if(!array_key_exists($ext, $allowed)) {
       echo"<script> alert('File Format Error: Please select a valid pdf file format.'); location.href=history.back();</script>";
       die();
   }
      
    // Verify file size - 10MB maximum
    $maxsize = 20 * 1024 * 1024;
    if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

    // Verify MYME type of the file
    if(in_array($filetype, $allowed)){
        // Check whether file exists before uploading it
        if(file_exists("temp/" . $filename)){
            //echo $filename . " is already exists.";
        } else{
            move_uploaded_file($_FILES["executive_summary"]["tmp_name"], "temp/" . $filename);
          //  echo "Your file was uploaded successfully.";
            
            $_SESSION['executive_summary']=$filename;
        }
    } else{
        echo "<script>alert('exec')</script>";
        echo "Error: There was a problem uploading your file. Please try again.";
    }
} 
else{
    echo "Error: " . $_FILES["executive_summary"]["error"];
}


}

elseif($_POST['event_name']=='cricket')
{
    $teamname=$_POST['teamname'];
    $_SESSION['teamname']=$_POST['teamname'];
 
    $playername=$_POST['player_name'];
    $_SESSION['playername']=$_POST['player_name'];

    $mob1=$_POST['primary_mob1'];
    $_SESSION['mob1']=$_POST['primary_mob1'];

    $mob2=$_POST['primary_mob2'];
    $_SESSION['mob2']=$_POST['primary_mob2'];

    $email=$_POST['primary_email'];
    $_SESSION['email']=$_POST['primary_email'];

    $clgname=$_POST['player_clgname'];
    $_SESSION['clgname']=$_POST['player_clgname'];

//     $idcard=$_POST['player_image'];
//    $_SESSION['idcard']=$_POST['player_image'];

   $eventname=$_POST['event_name'];
   $_SESSION['game']=$_POST['event_name'];

   //player 2 

    $player2name=$_POST['player2_name'];
    $_SESSION['player2name']=$_POST['player2_name'];

 

    $clgname=$_POST['player2_clgname'];
    $_SESSION['clg2name']=$_POST['player2_clgname'];
    

   //player 3

    $player3name=$_POST['player3_name'];
    $_SESSION['player3name']=$_POST['player3_name'];

  
    $clgname=$_POST['player3_clgname'];
    $_SESSION['clg3name']=$_POST['player3_clgname'];
    
    //player 4

    $player4name=$_POST['player4_name'];
    $_SESSION['player4name']=$_POST['player4_name'];

 

    $clgname=$_POST['player4_clgname'];
    $_SESSION['clg4name']=$_POST['player4_clgname'];

    //player 5 

    $player5name=$_POST['player5_name'];
    $_SESSION['player5name']=$_POST['player5_name'];


    $clgname=$_POST['player5_clgname'];
    $_SESSION['clg5name']=$_POST['player5_clgname'];

    //player 6

    $player6name=$_POST['player6_name'];
    $_SESSION['player6name']=$_POST['player6_name'];


    $clgname=$_POST['player6_clgname'];
    $_SESSION['clg6name']=$_POST['player6_clgname'];

    //player 7 

    $player7name=$_POST['player7_name'];
    $_SESSION['player7name']=$_POST['player7_name'];

   

    $clgname=$_POST['player7_clgname'];
    $_SESSION['clg7name']=$_POST['player7_clgname'];

    //player 8

    $player8name=$_POST['player8_name'];
    $_SESSION['player8name']=$_POST['player8_name'];

 

    $clgname=$_POST['player8_clgname'];
    $_SESSION['clg8name']=$_POST['player8_clgname'];

    //player 9 

    $player9name=$_POST['player9_name'];
    $_SESSION['player9name']=$_POST['player9_name'];

    $clgname=$_POST['player9_clgname'];
    $_SESSION['clg9name']=$_POST['player9_clgname'];

    //player 10 

    $player10name=$_POST['player10_name'];
    $_SESSION['player10name']=$_POST['player10_name'];


    $clgname=$_POST['player10_clgname'];
    $_SESSION['clg10name']=$_POST['player10_clgname'];
    
    
    //player 11

    $player11name=$_POST['player11_name'];
    $_SESSION['player11name']=$_POST['player11_name'];



    $clgname=$_POST['player11_clgname'];
    $_SESSION['clg11name']=$_POST['player11_clgname'];

//player 12

    $player12name=$_POST['player12_name'];
     $_SESSION['player12name']=$_POST['player12_name'];
 
 
 
     $clgname12=$_POST['player12_clgname'];
     $_SESSION['clg12name']=$_POST['player12_clgname'];

      //player 13

    $player13name=$_POST['player13_name'];
    $_SESSION['player13name']=$_POST['player13_name'];



    $clgname13=$_POST['player13_clgname'];
    $_SESSION['clg13name']=$_POST['player13_clgname'];
}

elseif($_POST['event_name']=='treasure_hunt'|| $_POST['event_name']== 'tech_knowledge')
{
    $teamname=$_POST['teamname'];
    $_SESSION['teamname']=$_POST['teamname'];
 
    $playername=$_POST['player_name'];
    $_SESSION['playername']=$_POST['player_name'];
 
    $clgname=$_POST['player_clgname'];
    $_SESSION['clgname']=$_POST['player_clgname'];
    
    $email=$_POST['primary_email'];
    $_SESSION['email']=$_POST['primary_email'];
    
    $mob1=$_POST['primary_mob1'];
    $_SESSION['mob1']=$_POST['primary_mob1'];
    
    $mob2=$_POST['primary_mob2'];
    $_SESSION['mob2']=$_POST['primary_mob2'];
    
    // $idcard=$_POST['player_image'];
    // $_SESSION['idcard']=$_POST['player_image'];
    
    $eventname=$_POST['event_name'];
    $_SESSION['game']=$_POST['event_name'];
    
 
 //    Player 2
    $player2name=$_POST['player2_name'];
    $_SESSION['player2name']=$_POST['player2_name'];
 
    $clgname=$_POST['player2_clgname'];
    $_SESSION['clg2name']=$_POST['player2_clgname'];
 
}



/*
//razorpay credentials
$keyId = "rzp_test_PuziiDseFi094K";
$keySecret = "PkhHLzkJfAC7Y1crDxwwj4NO";

$api = new Api($keyId, $keySecret);
$actual_amount = $regfees + ($regfees * 0.0236);
$currency = "INR";
$receipt = rand() ;

$order = $api->order->create(array('receipt' => $receipt, 'amount' => $actual_amount *100 , 'currency' => $currency ));
$order_id = $order['id'];
$order_receipt = $order['receipt'];
$order_amount = $order['amount'];
$order_currency = $order['currency'];
$order_created_at = $order['created_at'];

$_SESSION['razorpay_order_id'] = $order_id;
*/


?>

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
    background-color:none;
}

.razorpay-payment-button
{
    background-color:#58595b;
    color:white;
    margin:15px;
    padding: 5px;
    text-align: center;
    padding-left: 25px;
    padding-right: 25px;
    border-radius: 4px;
    border: none;
}

#editbtn{
    background-color: #fff;
    color: #0045ff;
    padding: 5px;
    padding-left: 20px;
    padding-right: 20px;
    float: right;
    margin-right: 20px;
}

.form-group.col-md-12{
    margin-bottom: 0;
}
/*  */
.idnote {
            color: red;
            font-size: 15px;
            margin-bottom: 10px;
            padding: 10px 10px;
            border-radius: 5px;
            background-color: beige;
        }

        .qrcode {
            display: block;
            margin-left: auto;
            margin-right: auto;
           
            }

            #Register {
    padding: 0 0;
}
</style>
<?php 
         /*       if($_POST['event_name']=='treasure_hunt'||
                   $_POST['event_name']== 'tech_knowledge'||
                   $_POST['event_name']=='cricket'||
                   $_POST['event_name']=='valorant')
                {
                    $srch="SELECT * from team_details where teamname='".$teamname."' and game='".$_POST['event_name']."'";
                    //echo $srch;
                     $search=mysqli_query($conn,$srch);
                    // echo $search->num_rows;
                    
                    if($search->num_rows>0)
                    {
                     // echo "<span>Please enter different team name by clicking on to edit button</span>";
                     <style>
                     .razorpay-payment-button{pointer-events: none !important;}
                 </style>
                   
                }
            }
            */
                ?>
    

<!-- CAROUSEL --->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
<section id="" class="container section-with-bg"  style="margin-top: 30px;">

<div class="container wow fadeInUp" id="">
<div class="section-header" style="margin-bottom: 30px;">
 <h3 class="text-center">Registration Summary</h3>
</div>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10" style="border:1px solid black;padding:10px;">
    <div class="row form-group">
            <div class="form-group col-md-12">
           
                <button class="btn btn-primary" id="editbtn" onclick="history.back()">Edit</button>
            </div>

<form action="status.php" method="POST" enctype="multipart/form-data" >

<div class="col-md-12 form-group">
                <label for="">Name: </label>
                <input type="text" class="form-control" value="<?php echo $playername; ?>" name="payee_name" id="" readonly="True"/>
            </div>
            <div class="col-md-12 form-group">
                <label for="">Phone Number: </label>
                <input type="text" class="form-control" value="<?php echo $mobno; ?>" name="payee_mobno" id="" readonly="True">
            </div>
            
            <div class="col-md-12 form-group">
                <label for="">Email: </label>
                <input type="email" class="form-control" value="<?php echo $emailid; ?>"  name="payee_email" id="" readonly="True" />
            </div>

            <div class="col-md-12 form-group">
                <label for="">Event: </label>
               <input type="text" name="game" id="" class="form-control" value="<?php echo $eventname; ?>" readonly="True" />
            </div>

            <!-- <div class="col-md-12 form-group">
                <label for="">Team Name: </label>
              <input type="text" name="game" id="" class="form-control" value="<?php echo $teamname; ?>" readonly="True" />
            </div> -->
            <!-- <div class="col-md-12 form-group">
                <label for="">Total Amount: </label>
                <?php
                 //formula for amount
                //  $_SESSION['finalamount']=$actual_amount;
                 $_SESSION['totalamount']=$regfees;
                ?>
                <input type="text" class="form-control" name="payee_amount" value="<?php echo $actual_amount ; ?>" id="finalamount" readonly="True" />
            </div> -->
<br><br>
            <div class="form-group col-md-12">
        <h3 class="text-center">Payment Details</h3>
                                    <label for="teamname">Amount </label>
                                    <br>
                                    <input type="text" class="form-control" name="amount" id="" placeholder="" value="<?php echo $regfees; ?>" readonly="True" />
                                </div> 
                                <br><br>                 
        <div class="form-group col-md-12">
       
            <img src="assets/img/events/qrcode.jpeg" alt="qr code" class="qrcode" />
            <br><br>
            <h4 class="text-center">Or Pay to: 9405712796</h4>
        </div>
        <br><br>
        <div class=" form-group col-md-12">
          <p class="idnote">Important note:
                                            <br>1. Scan the QR CODE and pay the above mentioned amount.
                                            <br>2. While uploading Screenshot, please rename the screenshot file name as yourname and upload Screenshot Showcasing Transaction Detail.
                                            <br>3. While making the payment, please add a note in the payment description in the following format:ICON-EventName-YourName 
                                            Or ICON-EventName-YourTeamName (for Group Events). 
                                            <br><span id="hint"></span>
                                        </p>
            <label for="">Enter Transaction id<span style="color:#b7202e;">*</span></label>
          <input type="text" name="transaction_id" placeholder="Transaction id" id="" class="form-control" required/>
          <br>
          <label for="">Upload Screenshot of reciept (Supported format: jpg, jpeg, png)<span style="color:#b7202e;">*</span>
        <span  style="color:#b7202e;"></span>
        </label>

          <input type="file" name="transaction_image" id="transaction" onchange="return chkfile()" class="form-control" required id=""/>
        </div>

            <?php
                if($_POST['event_name']=='treasure_hunt'||
                   $_POST['event_name']== 'tech_knowledge'||
                   $_POST['event_name']=='cricket'||
                   $_POST['event_name']=='valorant' ||
                   $_POST['event_name']=='gallery'||
                   $_POST['event_name']=='codeicon')
                {
                    $srch="SELECT * from team_details where teamname='".$teamname."' and game='".$_POST['event_name']."'";
                    //echo $srch;
                     $search=mysqli_query($conn,$srch);
                    // echo $search->num_rows;
                   
                    if($search->num_rows>0)
                    { ?>
                    <script type="text/javascript">
                        window.alert("Team Name Already Exists! Please Choose a different Team Name")
                        window.location.href=history.back();
                        </script>
                    <!-- //   echo "<span style='font-size:20px;margin:11px;color:red;'>* Please change your Team name, Team name already exists</span> <br/>";
                    //   echo "<span style='font-size:20px;margin:11px;color:red;'>* Click on Edit button</span> <br/>"; -->
                    <?php
                    }
                }
                ?>
<br>
<div class="form-group col-md-12">
                                    <input type="submit" id="register" value="Submit" class="btn  btn-secondary">


                                </div>
<!-- <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?=$keyId?>" 
    data-amount="<?=$order_amount?>" 
    data-currency="<?=$order_currency?>"
    data-order_id="<?=$order_id?>"
    data-buttontext="Pay"
    data-name="Icon"
    data-description="<?=$eventname?>"
    data-prefill.name="<?=$playername?>"
    data-prefill.email="<?=$emailid?>"
    data-prefill.contact="<?=$mobno?>"
    data-theme.color="#F37254"
    
></script> -->
<script type="text/javascript">
    function chkfile()
    {
        var path= document.getElementById("transaction").value;
        var file=path.split("\\");
        var filename=file[file.length-1];
        var e=path.split(".");
        const ext=["png","jpg","jpeg"];
        var extension=e[e.length-1];
        // alert(extension);
        // alert("result:",ext.includes("txt"));
        if(ext.includes(extension)==true)
        {
            //alert("file is valid");
            document.getElementById('register').disabled=false;
            document.getElementById('hint').innerHTML="";
            document.getElementById("register").classList.remove("btn-secondary");  
            document.getElementById("register").classList.add("btn-success");  
        }

        else
        {
            //alert("file is not valid");
            document.getElementById('register').disabled=true;
            document.getElementById('hint').innerHTML="4. Please upload only .png ,.jpg or .jpeg format";
            alert("please upload only .png ,.jpg or .jpeg format");
        }
          
    }
</script>


<input type="hidden" custom="c1" name="some text">
<input type="hidden" custom="c2" name="some other text">
</form>
    </div>
    </div>
</div>
</section>


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
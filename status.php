<?php
include 'config.php';
session_start();

use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
use Razorpay\Api\Payment;

require "vendor/autoload.php";

$success = true;
// $keyId = "rzp_test_PuziiDseFi094K";
// $keySecret = "PkhHLzkJfAC7Y1crDxwwj4NO";

$error = "Payment Failed";
$eventname=$_SESSION['game'];

//copying summary from temp to summary_gallery
function exec_upload($source, $destination)
{
    // Copy the file 
    if( !copy($source, $destination) ) { 
        //echo "File can't be copied! \n"; 
    } 
    else { 
        //echo "File has been copied! \n"; 
        // Define the folder to clean
        // (keep trailing slashes)
        $captchaFolder  = 'temp/';
        
        // Filetypes to check (you can also use *.*)
        $fileTypes      = '*.pdf';
        
        // 5 minutes after the files should get deleted
        $expire_time    = 5; 
        
        // Find all files of the given file type
        // foreach (glob($captchaFolder . $fileTypes) as $Filename) 
        // {
        
        //     // Read file creation time
        //     $FileCreationTime = filectime($Filename);
        
        //     // Calculate file age in seconds
        //     $FileAge = time() - $FileCreationTime; 
        
        //     // Is the file older than the given time span?
        //     if ($FileAge > ($expire_time * 60))
        //     {
        //         //  deleting files:
        //         unlink($Filename);
        //     }

        // }
        
    }
}


/*=======================================
moving id card file from temp to upload
=======================================*/
function idcard_upload($source, $destination)
{
    // Copy the file 
    if( !copy($source, $destination) ) { 
        //echo "File can't be copied! \n"; 
    } 
    else { 
        //echo "File has been copied! \n"; 
        // Define the folder to clean
        // (keep trailing slashes)
        $captchaFolder  = 'temp/';
        
        // Filetypes to check (you can also use *.*)
        $fileTypes      = '*.pdf';
        
        // 5 minutes after the files should get deleted
        $expire_time    = 5; 
        
        // Find all files of the given file type
        // foreach (glob($captchaFolder . $fileTypes) as $Filename) 
        // {
        
        //     // Read file creation time
        //     $FileCreationTime = filectime($Filename);
        
        //     // Calculate file age in seconds
        //     $FileAge = time() - $FileCreationTime; 
        
        //     // Is the file older than the given time span?
        //     if ($FileAge > ($expire_time * 60))
        //     {
        //         //  deleting files:
        //         unlink($Filename);
        //     }

        // }
    }
}


if (
    $_SESSION['game'] == 'web_design' ||
    $_SESSION['game'] == 'creatography' ||
    $_SESSION['game'] == 'content_writing' ||
    $_SESSION['game'] == 'big_chess' ||
    $_SESSION['game'] == 'drag and drop' ||
    $_SESSION['game'] == 'coding_decoding'
) {

    $playername = $_SESSION['playername'];
    $primemail = $_SESSION['email'];
    $mobno = $_SESSION['mob1'];
    $mobno2 = $_SESSION['mob2'];
    $clgname = $_SESSION['clgname'];
    $clgproof = $_SESSION['idcard'];
    $eventname = $_SESSION['game'];

    //file upload code 


      $ins_query="INSERT into solo
      (playername,contact,alternatecontact,email,clg_name,clgproof,eventname)
      VALUES('$playername','$mobno','$mobno2','$primemail','$clgname','$clgproof','$eventname')";

      
      //echo $ins_query;
      // Store the path of source file
    //   echo $ins_query;

    
    //transaction
    $transaction_id=$_POST['transaction_id'];

        $source = 'temp/'.$clgproof; 
        
        // Store the path of destination file
        $destination = 'upload/'.$clgproof; 
        
        // Copy the file 
        if( !copy($source, $destination) ) { 
            //echo "File can't be copied! \n"; 
        } 
        else { 
           // echo"<script> alert('file has been copied');</script>";

            //echo "File has been copied! \n"; 
            // Define the folder to clean
            // (keep trailing slashes)
            $captchaFolder  = 'temp/';
            
            // Filetypes to check (you can also use *.*)
            $fileTypes      = '*.pdf';
            
            // 5 minutes after the files should get deleted
            $expire_time    = 5; 
            
            // Find all files of the given file type
            foreach (glob($captchaFolder . $fileTypes) as $Filename) {
            
                // Read file creation time
                $FileCreationTime = filectime($Filename);
            
                // Calculate file age in seconds
                $FileAge = time() - $FileCreationTime; 
            
                // Is the file older than the given time span?
                if ($FileAge > ($expire_time * 60)){
                    //  deleting files:
                    unlink($Filename);
                }
 
}
        }




        //upload payment ss

        //to upload SS
        if(isset($_FILES["transaction_image"]) && $_FILES["transaction_image"]["error"] == 0){
            $r_no=$_SESSION['random_no'];

            $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
            $fname = $_FILES["transaction_image"]["name"];
            $filetype = $_FILES["transaction_image"]["type"];
            $filesize = $_FILES["transaction_image"]["size"];
            $filename = $r_no."-".$eventname."-".$_FILES["transaction_image"]["name"];
            $payment_ss=$filename;
            //echo $filename;
            // Verify file extension
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            //if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid pdf file format.");
            
        //     if(!array_key_exists($ext, $allowed)) 
        //     {
        //        echo"<script> alert('File Format Error: Please select a valid file format.'); location.href=history.back();</script>";
        //        die();
        //    }
               
            // Verify file size - 10MB maximum
            $maxsize = 20 * 1024 * 1024;
            if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
       
            // Verify MYME type of the file
            if(in_array($filetype, $allowed)){
                // Check whether file exists before uploading it
                if(file_exists("payment/" . $filename)){
                    echo "<script>alert('".$filename . " is already exists.')</script>";
                } else{
                    move_uploaded_file($_FILES["transaction_image"]["tmp_name"], "payment/" . $filename);
                  //  echo "Your file was uploaded successfully.";
                   
                    $_SESSION['transimage']=$filename;
                }
            } else{
                echo "Error: There was a problem uploading your file. Please try again.";
            }
        } else{
            // echo "Error: " . $_FILES["transaction_image"]["error"];
            echo "<script>alert('Error: " . $_FILES["transaction_image"]["error"]."');</script>";
        }
  
    }


//   valorant


elseif ($_SESSION['game'] == 'valorant') 
{
    $teamname = $_SESSION['teamname'];
    $playername = $_SESSION['playername'];
    $clgname = $_SESSION['clgname'];
    $email = $_SESSION['email'];
    $mob1 = $_SESSION['mob1'];
    $mob2 = $_SESSION['mob2'];
    $idcard = $_SESSION['idcard'];
    $eventname = $_SESSION['game'];


    //    Player 2
    $player2name = $_SESSION['player2name'];

   $player2igname = $_SESSION['player2igname'];
   $clg2name=$_SESSION['clg2name'];

    //    Player 3
    $player3name = $_SESSION['player3name'];

    $player3igname = $_SESSION['player3igname'];

$clg3name=$_SESSION['clg3name'];

    //    Player 4
    $player4name = $_SESSION['player4name'];

    $player4igname = $_SESSION['player4igname'];

$clg4name=$_SESSION['clg4name'];

//    Player 5
$player5name=$_SESSION['player5name'];
$player5igname=$_SESSION['player5igname'];
$clg5name=$_SESSION['clg5name'];



    //transaction
    $transaction_id=$_POST['transaction_id'];

    // file upload 




    $insert = "INSERT into team_details(
    teamname,teamleader_name,contact,
    secondarycontact,email,clg_name,clgproof,game)
    VALUES
    ('$teamname','$playername','$mob1','$mob2',
    '$email','$clgname','$idcard','$eventname') ";

    // echo"1". $insert;



    $insert2 = "INSERT into team_member_details
    (	teamname,game,Member_Name,In_game_name,clg_name)
    VALUES
    ('$teamname','$eventname','$player2name','$player2igname','$clg2name')";
    

    //
    $insert3 = "INSERT into team_member_details
    (	teamname,game,Member_Name,In_game_name,clg_name)
    VALUES
    ('$teamname','$eventname','$player3name','$player3igname','$clg3name')";
     

    //
    $insert4 = "INSERT into team_member_details
    (	teamname,game,Member_Name,In_game_name,clg_name)
    VALUES
    ('$teamname','$eventname','$player4name','$player4igname','$clg4name')";
    

    //
    $insert5 = "INSERT into team_member_details
    (	teamname,game,Member_Name,In_game_name,clg_name)
    VALUES
    ('$teamname','$eventname','$player5name','$player5igname','$clg5name')";
    
      // Store the path of source file
      $source = 'temp/'.$idcard; 
        
      // Store the path of destination file
      $destination = 'upload/'.$idcard; 
      
      // Copy the file 
      if( !copy($source, $destination) ) { 
          //echo "File can't be copied! \n"; 
      } 
      else { 
          //echo "File has been copied! \n"; 
          // Define the folder to clean
          // (keep trailing slashes)
          $captchaFolder  = 'temp/';
          
          // Filetypes to check (you can also use *.*)
          $fileTypes      = '*.pdf';
          
          // 5 minutes after the files should get deleted
          $expire_time    = 5; 
          
          // Find all files of the given file type
          foreach (glob($captchaFolder . $fileTypes) as $Filename) {
          
              // Read file creation time
              $FileCreationTime = filectime($Filename);
          
              // Calculate file age in seconds
              $FileAge = time() - $FileCreationTime; 
          
              // Is the file older than the given time span?
              if ($FileAge > ($expire_time * 60)){
                  //  deleting files:
                  unlink($Filename);
              }

}
      }


      
        //upload payment ss

        //to upload SS
        if(isset($_FILES["transaction_image"]) && $_FILES["transaction_image"]["error"] == 0){
            $r_no=$_SESSION['random_no'];

            $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
            $fname = $_FILES["transaction_image"]["name"];
            $filetype = $_FILES["transaction_image"]["type"];
            $filesize = $_FILES["transaction_image"]["size"];
            $filename = $r_no."-".$eventname."-".$_FILES["transaction_image"]["name"];
            $payment_ss=$filename;
            //echo $filename;
            // Verify file extension
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            //if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid pdf file format.");
        //     if(!array_key_exists($ext, $allowed)) {
        //        echo"<script> alert('File Format Error: Please select a valid file format.'); location.href=history.back();</script>";
        //        die();
        //    }
               
            // Verify file size - 10MB maximum
            $maxsize = 20 * 1024 * 1024;
            if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
       
            // Verify MYME type of the file
            if(in_array($filetype, $allowed)){
                // Check whether file exists before uploading it
                if(file_exists("payment/" . $filename)){
                    echo "<script>alert('".$filename . " is already exists.')</script>";
                } else{
                    move_uploaded_file($_FILES["transaction_image"]["tmp_name"], "payment/" . $filename);
                  //  echo "Your file was uploaded successfully.";
                   
                    $_SESSION['transimage']=$filename;
                }
            } else{
                echo "Error: There was a problem uploading your file. Please try again.";
            }
        } else{
            // echo "Error: " . $_FILES["transaction_image"]["error"];
            echo "<script>alert('Error: " . $_FILES["transaction_image"]["error"]."');</script>";
        }
    }

//  treasure_hunt    tech_knowledge

//gallery  


elseif ($_SESSION['game'] == 'codeicon' ) 
    {
    $teamname = $_SESSION['teamname'];
    $playername = $_SESSION['playername'];
    $clgname = $_SESSION['clgname'];
    $email = $_SESSION['email'];
    $mob1 = $_SESSION['mob1'];
    $mob2 = $_SESSION['mob2'];
    $idcard = $_SESSION['idcard'];
    $eventname = $_SESSION['game'];


    //    Player 2
    $player2name = $_SESSION['player2name'];
    $player2_mail=$_SESSION['player2_email'];
    $player2_mob=$_SESSION['player2_mob'];
    $clg2name=$_SESSION['clg2name'];

    //    Player 3
    $player3name = $_SESSION['player3name'];
    $player3_mail=$_SESSION['player3_email'];
    $player3_mob=$_SESSION['player3_mob'];
    $clg3name=$_SESSION['clg3name'];

    //    Player 4
    $player4name = $_SESSION['player4name'];
    $player4_mail=$_SESSION['player4_email'];
    $player4_mob=$_SESSION['player4_mob'];
    $clg4name=$_SESSION['clg4name'];


    //transaction
    $transaction_id=$_POST['transaction_id'];

    // file upload 
    $exec_summary=$_SESSION['executive_summary'];
    //echo $exec_summary;


    $insert = "INSERT into team_details(
    teamname,teamleader_name,contact,
    secondarycontact,email,clg_name,clgproof,game,summarypdf)
    VALUES
    ('$teamname','$playername','$mob1','$mob2',
    '$email','$clgname','$idcard','$eventname','--') ";

    // echo"<br/>1". $insert;

    /*
    teamname ,game ,Member_Name ,email,contact,clg_name
    
    */
    $insert2 = "INSERT into codeicon_team_member_details
    (teamname ,game ,Member_Name ,email,contact,clg_name)
    VALUES
    ('$teamname','$eventname','$player2name','$player2_mail','$player2_mob','$clg2name')";
    
    //echo"<br/>2". $insert2;

    //
    $insert3 = "INSERT into codeicon_team_member_details
    (teamname ,game ,Member_Name ,email,contact,clg_name)
    VALUES
    ('$teamname','$eventname','$player3name','$player3_mail','$player3_mob','$clg3name')";
     
     //echo"<br/>3". $insert3;
    //
    $insert4 = "INSERT into codeicon_team_member_details
    (teamname ,game ,Member_Name ,email,contact,clg_name)
    VALUES
    ('$teamname','$eventname','$player4name','$player4_mail','$player4_mob','$clg4name')";
    //echo"<br/>4". $insert4;    

    //

     
    
      // Store the path of source file
      $source = 'temp/'.$idcard; 
       
        
      // Store the path of destination file
      $destination = 'upload/'.$idcard; 
      
      
      // Copy the file 
      if( !copy($source, $destination) ) { 
          //echo "File can't be copied! \n"; 
      } 
      else { 
          //echo "File has been copied! \n"; 
          // Define the folder to clean
          // (keep trailing slashes)
          $captchaFolder  = 'temp/';
          
          // Filetypes to check (you can also use *.*)
          $fileTypes      = '*.pdf';
          
          // 5 minutes after the files should get deleted
          $expire_time    = 5; 
          
          // Find all files of the given file type
          foreach (glob($captchaFolder . $fileTypes) as $Filename) {
          
              // Read file creation time
              $FileCreationTime = filectime($Filename);
          
              // Calculate file age in seconds
              $FileAge = time() - $FileCreationTime; 
          
              // Is the file older than the given time span?
              if ($FileAge > ($expire_time * 60)){
                  //  deleting files:
                  unlink($Filename);
              }

}
      }


      
      
        //upload payment ss

        //to upload SS
        if(isset($_FILES["transaction_image"]) && $_FILES["transaction_image"]["error"] == 0){
            $r_no=$_SESSION['random_no'];

            $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
            $fname = $_FILES["transaction_image"]["name"];
            $filetype = $_FILES["transaction_image"]["type"];
            $filesize = $_FILES["transaction_image"]["size"];
            $filename = $r_no."-".$eventname."-".$_FILES["transaction_image"]["name"];
            $payment_ss=$filename;
            //echo $filename;
            // Verify file extension
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            //if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid pdf file format.");
        //     if(!array_key_exists($ext, $allowed)) {
        //        echo"<script> alert('File Format Error: Please select a valid file format.'); location.href=history.back();</script>";
        //        die();
        //    }
               
            // Verify file size - 10MB maximum
            $maxsize = 20 * 1024 * 1024;
            if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
       
            // Verify MYME type of the file
            if(in_array($filetype, $allowed)){
                // Check whether file exists before uploading it
                if(file_exists("payment/" . $filename)){
                    echo $filename . " is already exists.";
                } else{
                    move_uploaded_file($_FILES["transaction_image"]["tmp_name"], "payment/" . $filename);
                  //  echo "Your file was uploaded successfully.";
                   
                    $_SESSION['transimage']=$filename;
                }
            } else{
                echo "Error: There was a problem uploading your file. Please try again.";
            }
        } 
        else{
            echo "<script>alert('Error: " . $_FILES["transaction_image"]["error"]."');</script>";
        }
    }

/*
=============== Gallery =========================
*/
elseif($_SESSION['game'] == 'gallery')
{
    $teamname = $_SESSION['teamname'];
    $playername = $_SESSION['playername'];
    $clgname = $_SESSION['clgname'];
    $email = $_SESSION['email'];
    $mob1 = $_SESSION['mob1'];
    $mob2 = $_SESSION['mob2'];
    $idcard = $_SESSION['idcard'];
    $eventname = $_SESSION['game'];


    //    Player 2
    $player2name = $_SESSION['player2name'];
    $player2_mail=$_SESSION['player2_email'];
    $player2_mob=$_SESSION['player2_mob'];
    $clg2name=$_SESSION['clg2name'];

    //    Player 3
    $player3name = $_SESSION['player3name'];
    $player3_mail=$_SESSION['player3_email'];
    $player3_mob=$_SESSION['player3_mob'];
    $clg3name=$_SESSION['clg3name'];

    //    Player 4
    $player4name = $_SESSION['player4name'];
    $player4_mail=$_SESSION['player4_email'];
    $player4_mob=$_SESSION['player4_mob'];
    $clg4name=$_SESSION['clg4name'];


    //transaction
    $transaction_id=$_POST['transaction_id'];

    // file upload 
    $exec_summary=$_SESSION['executive_summary'];
    //echo $exec_summary;


    $insert = "INSERT into team_details(
    teamname,teamleader_name,contact,
    secondarycontact,email,clg_name,clgproof,game,summarypdf)
    VALUES
    ('$teamname','$playername','$mob1','$mob2',
    '$email','$clgname','$idcard','$eventname','$exec_summary') ";

    // echo"<br/>1". $insert;

    /*
    teamname ,game ,Member_Name ,email,contact,clg_name
    
    */
    $insert2 = "INSERT into codeicon_team_member_details
    (teamname ,game ,Member_Name ,email,contact,clg_name)
    VALUES
    ('$teamname','$eventname','$player2name','$player2_mail','$player2_mob','$clg2name')";
    
    //echo"<br/>2". $insert2;

    //
    $insert3 = "INSERT into codeicon_team_member_details
    (teamname ,game ,Member_Name ,email,contact,clg_name)
    VALUES
    ('$teamname','$eventname','$player3name','$player3_mail','$player3_mob','$clg3name')";
     
     //echo"<br/>3". $insert3;
    //
    $insert4 = "INSERT into codeicon_team_member_details
    (teamname ,game ,Member_Name ,email,contact,clg_name)
    VALUES
    ('$teamname','$eventname','$player4name','$player4_mail','$player4_mob','$clg4name')";
    //echo"<br/>4". $insert4;    

    //

     
    //move id card from temp to upload
    $source = 'temp/'.$idcard; 
    $destination = 'upload/'.$idcard;
    idcard_upload($source, $destination);
    
    $source1 = 'temp/'.$exec_summary; 
    $destination1 = 'summary_gallery/'.$exec_summary;
    exec_upload($source1, $destination1);


    //   // Store the path of source file
    //   $source = 'temp/'.$exec_summary; 
       
        
    //   // Store the path of destination file
    //   $destination = 'upload/'.$exec_summary; 
      
      
      // Copy the file 
      if( !copy($source, $destination) ) { 
          //echo "File can't be copied! \n"; 
      } 
      else { 
          //echo "File has been copied! \n"; 
          // Define the folder to clean
          // (keep trailing slashes)
          $captchaFolder  = 'temp/';
          
          // Filetypes to check (you can also use *.*)
          $fileTypes      = '*.pdf';
          
          // 5 minutes after the files should get deleted
          $expire_time    = 5; 
          
          // Find all files of the given file type
          foreach (glob($captchaFolder . $fileTypes) as $Filename) {
          
              // Read file creation time
              $FileCreationTime = filectime($Filename);
          
              // Calculate file age in seconds
              $FileAge = time() - $FileCreationTime; 
          
              // Is the file older than the given time span?
              if ($FileAge > ($expire_time * 60)){
                  //  deleting files:
                  unlink($Filename);
              }

}
      }

      


      
      
        //upload payment ss

        //to upload SS
        if(isset($_FILES["transaction_image"]) && $_FILES["transaction_image"]["error"] == 0){
            $r_no=$_SESSION['random_no'];

            $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
            $fname = $_FILES["transaction_image"]["name"];
            $filetype = $_FILES["transaction_image"]["type"];
            $filesize = $_FILES["transaction_image"]["size"];
            $filename = $r_no."-".$eventname."-".$_FILES["transaction_image"]["name"];
            $payment_ss=$filename;
            //echo $filename;
            // Verify file extension
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            //if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid pdf file format.");
        //     if(!array_key_exists($ext, $allowed)) {
        //        echo"<script> alert('File Format Error: Please select a valid file format.'); location.href=history.back();</script>";
        //        die();
        //    }
               
            // Verify file size - 10MB maximum
            $maxsize = 20 * 1024 * 1024;
            if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
       
            // Verify MYME type of the file
            if(in_array($filetype, $allowed)){
                // Check whether file exists before uploading it
                if(file_exists("payment/" . $filename)){
                    echo $filename . " is already exists.";
                } else{
                    move_uploaded_file($_FILES["transaction_image"]["tmp_name"], "payment/" . $filename);
                  //  echo "Your file was uploaded successfully.";
                   
                    $_SESSION['transimage']=$filename;
                }
            } else{
                echo "Error: There was a problem uploading your file. Please try again.";
            }
        } 
        else{
            echo "<script>alert('Error: " . $_FILES["transaction_image"]["error"]."');</script>";
        }
}

/*

------------------------------------------------------------------------

*/
// cricket

//cricket queries
elseif ($_SESSION['game'] == 'cricket') {
    $teamname = $_SESSION['teamname'];

    $playername = $_SESSION['playername'];

    $mob1 = $_SESSION['mob1'];

    $mob2 = $_SESSION['mob2'];

    $email = $_SESSION['email'];

    $idcard = $_SESSION['idcard'];

    $eventname = $_SESSION['game'];
    $clgname = $_SESSION['clgname'];

    //filename for detail
   $Filename=$idcard;

    //player 2 

    $player2name = $_SESSION['player2name'];



    $clg2name=$_SESSION['clg2name'];
    

    //player 3

    $player3name = $_SESSION['player3name'];



    $clg3name=$_SESSION['clg3name'];
    
    //player 4

    $player4name = $_SESSION['player4name'];



    $clg4name=$_SESSION['clg4name'];

    //player 5 

    $player5name = $_SESSION['player5name'];



    $clg5name=$_SESSION['clg5name'];

    //player 6

    $player6name = $_SESSION['player6name'];



    $clg6name=$_SESSION['clg6name'];

    //player 7 

    $player7name = $_SESSION['player7name'];

  
    $clg7name= $_SESSION['clg7name'];

    //player 8

    $player8name = $_SESSION['player8name'];



    $clg8name=$_SESSION['clg8name'];

    //player 9 

    $player9name = $_SESSION['player9name'];



    $clg9name=$_SESSION['clg9name'];

    //player 10 

    $player10name = $_SESSION['player10name'];



    $clg10name=$_SESSION['clg10name'];
    
    
    //player 11

    $player11name = $_SESSION['player11name'];



    $clg11name=$_SESSION['clg11name'];

    //player 12

    $player12name = $_SESSION['player12name'];



    $clg12name=$_SESSION['clg12name'];
//player 13

    $player13name = $_SESSION['player13name'];



    $clg13name=$_SESSION['clg13name'];


    
    //transaction
    $transaction_id=$_POST['transaction_id'];


    $insert = "INSERT into team_details(
        teamname,teamleader_name,contact,
        secondarycontact,email,clg_name,clgproof,game)
        VALUES
        ('$teamname','$playername','$mob1','$mob2',
        '$email','$clgname','$Filename','$eventname') ";
    
        
    
    
        $insert2="INSERT into team_member_details
        (   teamname,game,Member_Name,In_game_name,clg_name)
        VALUES
        ('$teamname','$eventname','$player2name','--','$clg2name')";


    //
    $insert3 = "INSERT into team_member_details
        (   teamname,game,Member_Name,In_game_name,clg_name)
        VALUES
        ('$teamname','$eventname','$player3name','--','$clg3name')";


    //
    $insert4 = "INSERT into team_member_details
        (   teamname,game,Member_Name,In_game_name,clg_name)
        VALUES
        ('$teamname','$eventname','$player4name','--','$clg4name')";


    //
    $insert5 = "INSERT into team_member_details
        (   teamname,game,Member_Name,In_game_name,clg_name)
        VALUES
        ('$teamname','$eventname','$player5name','--','$clg5name')";



    //
    $insert6 = "INSERT into team_member_details
        (   teamname,game,Member_Name,In_game_name,clg_name)
        VALUES
        ('$teamname','$eventname','$player6name','--','$clg6name')";


    //
    $insert7 = "INSERT into team_member_details
        (   teamname,game,Member_Name,In_game_name,clg_name)
        VALUES
        ('$teamname','$eventname','$player7name','--','$clg7name')";


    //
    $insert8 = "INSERT into team_member_details
        (   teamname,game,Member_Name,In_game_name,clg_name)
        VALUES
        ('$teamname','$eventname','$player8name','--','$clg8name')";

    //
    $insert9 = "INSERT into team_member_details
        (   teamname,game,Member_Name,In_game_name,clg_name)
        VALUES
        ('$teamname','$eventname','$player9name','--','$clg9name')";

    //
    $insert10 = "INSERT into team_member_details
        (   teamname,game,Member_Name,In_game_name,clg_name)
        VALUES
        ('$teamname','$eventname','$player10name','--','$clg10name')";

    //   
    $insert11 = "INSERT into team_member_details
        (   teamname,game,Member_Name,In_game_name,clg_name)
        VALUES
        ('$teamname','$eventname','$player11name','--','$clg11name')";
//
$insert12 = "INSERT into team_member_details
        (   teamname,game,Member_Name,In_game_name,clg_name)
        VALUES
        ('$teamname','$eventname','$player12name','--','$clg12name')";

//
$insert13 = "INSERT into team_member_details
        (   teamname,game,Member_Name,In_game_name,clg_name)
        VALUES
        ('$teamname','$eventname','$player13name','--','$clg13name')";

        //file upload code
          // Store the path of source file
          $source = 'temp/'.$idcard; 
        
          // Store the path of destination file
          $destination = 'upload/'.$idcard; 
          
          // Copy the file 
          if( !copy($source, $destination) ) { 
              //echo "File can't be copied! \n"; 
          } 
          else { 
              //echo "File has been copied! \n"; 
              // Define the folder to clean
              // (keep trailing slashes)
              $captchaFolder  = 'temp/';
              
              // Filetypes to check (you can also use *.*)
              $fileTypes      = '*.pdf';
              
         
              // 5 minutes after the files should get deleted
              $expire_time    = 5; 
              
              // Find all files of the given file type
              foreach (glob($captchaFolder . $fileTypes) as $Filename) {
              
                  // Read file creation time
                  $FileCreationTime = filectime($Filename);
              
                  // Calculate file age in seconds
                  $FileAge = time() - $FileCreationTime; 
              
                  // Is the file older than the given time span?
                  if ($FileAge > ($expire_time * 60)){
                      //  deleting files:
                      unlink($Filename);
                  }
   
  }
          }

          
        //upload payment ss

        //to upload SS
        if(isset($_FILES["transaction_image"]) && $_FILES["transaction_image"]["error"] == 0){
            $r_no=$_SESSION['random_no'];

            $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
            $fname = $_FILES["transaction_image"]["name"];
            $filetype = $_FILES["transaction_image"]["type"];
            $filesize = $_FILES["transaction_image"]["size"];
            $filename = $r_no."-".$eventname."-".$_FILES["transaction_image"]["name"];
            $payment_ss=$filename;
            //echo $filename;
            // Verify file extension
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            //if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid pdf file format.");
        //     if(!array_key_exists($ext, $allowed)) {
        //        echo"<script> alert('File Format Error: Please select a valid file format.'); location.href=history.back();</script>";
        //        die();
        //    }
               
            // Verify file size - 10MB maximum
            $maxsize = 20 * 1024 * 1024;
            if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
       
            // Verify MYME type of the file
            if(in_array($filetype, $allowed)){
                // Check whether file exists before uploading it
                if(file_exists("payment/" . $filename)){
                    echo $filename . " is already exists.";
                } else{
                    move_uploaded_file($_FILES["transaction_image"]["tmp_name"], "payment/" . $filename);
                  //  echo "Your file was uploaded successfully.";
                   
                    $_SESSION['transimage']=$filename;
                }
            } else{
                echo "Error: There was a problem uploading your file. Please try again.";
            }
        } else{
            echo "Error: " . $_FILES["transaction_image"]["error"];
        }
}


    elseif($_SESSION['game']=='treasure_hunt' || 
           $_SESSION['game']=='tech_knowledge')
    {
        $teamname = $_SESSION['teamname'];
   $playername= $_SESSION['playername'];
   $clgname =$_SESSION['clgname'];
   $email = $_SESSION['email'];
   $mob1= $_SESSION['mob1'];
   $mob2=$_SESSION['mob2'];
   $idcard=$_SESSION['idcard'];
   $eventname=$_SESSION['game'];
   

//    Player 2
   $player2name =$_SESSION['player2name'];
   $clg2name=$_SESSION['clg2name'];

   
    //transaction
    $transaction_id=$_POST['transaction_id'];


    $insert = "INSERT into team_details(
    teamname,teamleader_name,contact,
    secondarycontact,email,clg_name,clgproof,game)
    VALUES
    ('$teamname','$playername','$mob1','$mob2',
    '$email','$clgname','$idcard','$eventname') ";

    // echo"1". $insert;



    $insert2 = "INSERT into team_member_details
    (	teamname,game,Member_Name,In_game_name,clg_name)
    VALUES
    ('$teamname','$eventname','$player2name','--','$clg2name')";

      //file upload code
        // Store the path of source file
        $source = 'temp/'.$idcard; 
        
        // Store the path of destination file
        $destination = 'upload/'.$idcard; 
        
        // Copy the file 
        if( !copy($source, $destination) ) { 
            //echo "File can't be copied! \n"; 
        } 
        else { 
            //echo "File has been copied! \n"; 
            // Define the folder to clean
            // (keep trailing slashes)
            $captchaFolder  = 'temp/';
            
            // Filetypes to check (you can also use *.*)
            $fileTypes      = '*.pdf';
            
           // 5 minutes after the files should get deleted
           $expire_time    = 5; 
            
            // Find all files of the given file type
            foreach (glob($captchaFolder . $fileTypes) as $Filename) {
            
                // Read file creation time
                $FileCreationTime = filectime($Filename);
            
                // Calculate file age in seconds
                $FileAge = time() - $FileCreationTime; 
            
                // Is the file older than the given time span?
                if ($FileAge > ($expire_time * 60)){
                    //  deleting files:
                    unlink($Filename);
                }
 
}
        }


        
        //upload payment ss

        //to upload SS
        if(isset($_FILES["transaction_image"]) && $_FILES["transaction_image"]["error"] == 0){
            $r_no=$_SESSION['random_no'];

            $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
            $fname = $_FILES["transaction_image"]["name"];
            $filetype = $_FILES["transaction_image"]["type"];
            $filesize = $_FILES["transaction_image"]["size"];
            $filename = $r_no."-".$eventname."-".$_FILES["transaction_image"]["name"];
            $payment_ss=$filename;
            //echo $filename;
            // Verify file extension
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            //if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid pdf file format.");
        //     if(!array_key_exists($ext, $allowed)) {
        //        echo"<script> alert('File Format Error: Please select a valid file format.'); location.href=history.back();</script>";
        //        die();
        //    }
               
            // Verify file size - 10MB maximum
            $maxsize = 20 * 1024 * 1024;
            if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
       
            // Verify MYME type of the file
            if(in_array($filetype, $allowed)){
                // Check whether file exists before uploading it
                if(file_exists("payment/" . $filename)){
                    echo $filename . " is already exists.";
                } else{
                    move_uploaded_file($_FILES["transaction_image"]["tmp_name"], "payment/" . $filename);
                  //  echo "Your file was uploaded successfully.";
                   
                    $_SESSION['transimage']=$filename;
                }
            } else{
                echo "Error: There was a problem uploading your file. Please try again.";
            }
        } else{
            echo "Error: " . $_FILES["transaction_image"]["error"];
        }
    }




    //for team events
     function team_events($insert_query,$conn)
    {
        $result=mysqli_query($conn,$insert_query);
        if($result)
        {
           // echo "<script>alert('Record for your team has been inserted successfully')</script>";
        }
        else
        {
           // echo "</script>alert('Record insert unsuccessfully')</script><br>".mysqli_error($conn);
        }
    
    }

    function solo_events($insert_query,$conn)
    {
        $result=mysqli_query($conn,$insert_query);
        if($result)
        {
       //     echo "Registered successfully";
        }
        else
        {
          //  echo "Record insert unsuccessfully<br>".mysqli_error($conn);
        }
    
    }




if (empty($_POST['razorpay_payment_id']) === false) {
    $api = new Api($keyId, $keySecret);

    try {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    } catch (SignatureVerificationError $e) {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true) {
    date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
    $paydate = date('d-m-Y h-i-s');
    $emailid = $_SESSION['primary_email'];
    $playername = $_SESSION['player_name'];
    $mobno = $_SESSION['primary_mob1'];
    $eventname = $_SESSION['event_name'];
    // $amount = $_SESSION['finalamount'];
    $amount = $_SESSION['totalamount'];







    // Check connection
    if (!$conn)
        die("Connection failed: " . mysqli_connect_error());

    else
      $query = 'insert into payment_details(playername,emailid,phoneno,transaction_id,ordate,eventname,amount,payment_ss)
                                   values("' . $playername . '","' . $emailid . '","' . $mobno . '","' . $transaction_id . '","' . $paydate . '","' . $eventname . '","' . $amount . '","'.$payment_ss.'")';
    
    
    if (mysqli_query($conn, $query)) {
        // $html=$html."<p>Congratulations!!</p>";
        // header("./");
       // echo "Payment Done";

        //calling insert function

        if (
            $eventname == 'web_design' ||
            $eventname == 'creatography' ||
            $eventname == 'content_writing' ||
            $eventname == 'big_chess' ||
            $eventname == 'drag and drop' ||
            $eventname == 'coding_decoding'
        ) {
            echo"idj";
            solo_events($ins_query, $conn);
        } elseif ($eventname == 'valorant') {
            echo"idg";
            team_events($insert, $conn);
            team_events($insert2, $conn);
            team_events($insert3, $conn);
            team_events($insert4, $conn);
            team_events($insert5, $conn);
        } elseif (
            $eventname == 'treasure_hunt' ||
            $eventname == 'tech_knowledge'
        ) {
            echo"idg";
            team_events($insert, $conn);
            team_events($insert2, $conn);
        } elseif ($eventname == 'cricket') {
            team_events($insert, $conn);
            team_events($insert2, $conn);
            team_events($insert3, $conn);
            team_events($insert4, $conn);
            team_events($insert5, $conn);
            team_events($insert6, $conn);
            team_events($insert7, $conn);
            team_events($insert8, $conn);
            team_events($insert9, $conn);
            team_events($insert10, $conn);
            team_events($insert11, $conn);
            team_events($insert12, $conn);
            team_events($insert13, $conn);
        }
        elseif ($eventname == 'gallery' || $eventname == 'codeicon') {
            // echo "<script>alert('hello')</script>";
            team_events($insert, $conn);
            team_events($insert2, $conn);
            team_events($insert3, $conn);
            team_events($insert4, $conn);
            
        } 
    } else {
        $html = mysqli_error($conn);
        echo $html;
    }


    /* //can add Data to DB from here can be done
    $html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>
             <p>Order ID: {$_POST['razorpay_order_id']}</p>
             <p>Date Time: {$paydate}</p> 
             <p>Email: {$emailid}</p>
             <p>Mobile: {$mobno}</p>
             <p>Name: {$playername}</p>
             ";

*/
} else {
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Payment Status</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="icon,icon somaiya, icon 2020, icon 2021 simsr,simsr, somaiya icon,simsr icon, 2021 icon, TECHNOGYRE, Technogyre,icon 2021, icon simsr," name="keywords">
    <meta name="description" content="ICON as the official techfest of K J Somaiya Institute of Management was started in 2008, it has always been our primary motive to encourage scientific thinking, innovation, creativity and some good old-fashioned fun.">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style type="text/css">
        body {
            background: #f2f2f2;
        }

        .payment {
            border: 1px solid #f2f2f2;
            height: 450px;
            border-radius: 20px;
            background: #fff;
        }

        .payment_header {
            padding: 20px;
            border-radius: 20px 20px 0px 0px;

        }

        .check {
            margin: 0px auto;
            width: 50px;
            height: 50px;
            border-radius: 100%;
            background: #35bb78;
            color: #fff;
            text-align: center;

        }

        .check i {
            vertical-align: middle;
            line-height: 50px;
            font-size: 30px;
        }

        .paysuccess {
            text-align: center;
            color: #35bb78;
            font-weight: 400;
            margin-top: 10px;
            font-size: 25px;
        }

        .content h1 {
            font-size: 25px;
            padding-top: 25px;
        }

        .content a {
            width: 200px;
            height: 35px;
            color: #fff;
            border-radius: 25px;
            padding: 5px 15px;
            background: #b7202e;
            text-align: center;
            transition: all ease-in-out 0.3s;
        }

        .content {
            margin-left: 30px;
            margin-right: 30px;
            text-align: center;
        }

        .content a:hover {
            text-decoration: none;
            background: #000;
        }

        .note{
            text-align: center;
            color:#acafb3;
            font-size: 15px;
            margin-top: 20px;
        }
        .title{
            color: #9e9e9e;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <div class="payment">
                    <div class="payment_header">
                        <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
                        <h1 class="paysuccess">Payment Success</h1>
                    </div>
                    <div class="content">
                        <div style="display: flex; justify-content: space-between;">
                            <p class="title">Transaction ID</p>
                            <p><?php echo $transaction_id; ?></p>
                            <p><?php //echo $paymentid; ?></p>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <p class="title">Name</p>
                            <p><?php echo $playername; ?></p>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <p class="title">Phone number</p>
                            <p><?php echo $mobno; ?></p>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <p class="title">Email ID</p>
                            <p><?php echo $emailid; ?></p>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <p class="title">Amount Paid</p>
                            <p><?php echo $amount; ?></p>
                        </div>

                        
                        <a href="index.html">Done</a>
                        <p class="note">Please note we will soon share final acknowledgment over e-mail once transaction is validated</p>
                    </div>

                </div>
            </div>
        </div>
    </div>



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
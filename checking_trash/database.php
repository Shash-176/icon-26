<?php





// Create a database
// $sql = "CREATE DATABASE events";
// // excuteing the query
// $result = mysqli_query($conn,$sql);

echo "The result is<br>"; 
// echo var_dump($result);

// check for the database creation 

// if($result)
// {
//     echo "Database created successfully";
// }
// else
// {
//     echo "Database not created successfully<br>".mysqli_error($conn);
// }

//Create table

// $sql = "CREATE TABLE IF NOT EXISTS cs_go(sno INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
// teamName VARCHAR(25) NOT NULL, 
// leaderName VARCHAR(25) NOT NULL, 
// gameName VARCHAR(25) NOT NULL, 
// playerOneName VARCHAR(25) NOT NULL,
//  playerOneEmail  VARCHAR(25) NOT NULL, 
//playerOneMobile  VARCHAR(25) NOT NULL, 
//playerOneAge  VARCHAR(3) NOT NULL,// playerOneGender  VARCHAR(2) NOT NULL, playerOneCollegeName  VARCHAR(25) NOT NULL, playerOneProof  VARCHAR(25) NOT NULL,  playerTwoName  VARCHAR(25) NOT NULL, playerTwoEmail  VARCHAR(25) NOT NULL, playerTwoMobile  VARCHAR(25) NOT NULL, playerTwoAge  VARCHAR(3) NOT NULL, playerTwoGender  VARCHAR(2) NOT NULL, playerTwoCollegeName  VARCHAR(25) NOT NULL, playerTwoProof  VARCHAR(25) NOT NULL, playerThreeName  VARCHAR(25) NOT NULL,playerThreeEmail  VARCHAR(25) NOT NULL, playerThreeMobile  VARCHAR(25) NOT NULL, playerThreeAge  VARCHAR(3) NOT NULL,playerThreeGender  VARCHAR(2) NOT NULL,playerThreeCollegeName  VARCHAR(25) NOT NULL,playerThreeProof  VARCHAR(25) NOT NULL, playerFourName  VARCHAR(25) NOT NULL,playerFourEmail  VARCHAR(25) NOT NULL,playerFourMobile  VARCHAR(25) NOT NULL,playerFourAge  VARCHAR(3) NOT NULL,playerFourGender  VARCHAR(2) NOT NULL,playerFourCollegeName  VARCHAR(25) NOT NULL,playerFourProof  VARCHAR(25) NOT NULL, playerFiveName  VARCHAR(25) NOT NULL,playerFiveEmail  VARCHAR(25) NOT NULL,playerFiveMobile  VARCHAR(25) NOT NULL,playerFiveAge  VARCHAR(3) NOT NULL,playerFiveGender  VARCHAR(2) NOT NULL,playerFiveCollegeName  VARCHAR(25) NOT NULL,playerFiveProof  VARCHAR(25) NOT NULL)";
//playerOneAge  VARCHAR(3) NOT NULL,// playerOneGender  VARCHAR(2) NOT NULL, playerOneCollegeName  VARCHAR(25) NOT NULL, playerOneProof  VARCHAR(25) NOT NULL,  playerTwoName  VARCHAR(25) NOT NULL, playerTwoEmail  VARCHAR(25) NOT NULL, playerTwoMobile  VARCHAR(25) NOT NULL, playerTwoAge  VARCHAR(3) NOT NULL, playerTwoGender  VARCHAR(2) NOT NULL, playerTwoCollegeName  VARCHAR(25) NOT NULL, playerTwoProof  VARCHAR(25) NOT NULL, playerThreeName  VARCHAR(25) NOT NULL,playerThreeEmail  VARCHAR(25) NOT NULL, playerThreeMobile  VARCHAR(25) NOT NULL, playerThreeAge  VARCHAR(3) NOT NULL,playerThreeGender  VARCHAR(2) NOT NULL,playerThreeCollegeName  VARCHAR(25) NOT NULL,playerThreeProof  VARCHAR(25) NOT NULL, playerFourName  VARCHAR(25) NOT NULL,playerFourEmail  VARCHAR(25) NOT NULL,playerFourMobile  VARCHAR(25) NOT NULL,playerFourAge  VARCHAR(3) NOT NULL,playerFourGender  VARCHAR(2) NOT NULL,playerFourCollegeName  VARCHAR(25) NOT NULL,playerFourProof  VARCHAR(25) NOT NULL, playerFiveName  VARCHAR(25) NOT NULL,playerFiveEmail  VARCHAR(25) NOT NULL,playerFiveMobile  VARCHAR(25) NOT NULL,playerFiveAge  VARCHAR(3) NOT NULL,playerFiveGender  VARCHAR(2) NOT NULL,playerFiveCollegeName  VARCHAR(25) NOT NULL,playerFiveProof  VARCHAR(25) NOT NULL)";

// execution start
// Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "icon";

// Create a connection
$conn = mysqli_connect($servername,$username,$password,$database);

// Die if connection is not successful
if(!$conn)
{
    die("Sorry we failed to connect:".mysqli_connect_error());
}
else
{
    echo "Connection was successful";
}


function csgo($conn)
{
    $csgo="CREATE TABLE IF NOT EXISTS csg_go(
        srno INT PRIMARY KEY AUTO_INCREMENT,
        teamname VARCHAR(25) NOT NULL,
        leadername VARCHAR(25) NOT NULL,
        event_name VARCHAR(25) NOT NULL,
        playername VARCHAR(25) NOT NULL,
        email VARCHAR(25) NOT NULL,
        mobno VARCHAR(25) NOT NULL,
        age VARCHAR(25) NOT NULL,
        idproof VARCHAR(25) NOT NULL,
        clgname VARCHAR(25) NOT NULL,
        gender VARCHAR(25) NOT NULL
    )";
    
    $result1 = mysqli_query($conn,$csgo);
    if($result1)
    {
        echo "table csgo/valorant created successfully";
    }
    else
    {
        echo "table not created successfully<br>".mysqli_error($conn);
    }
}

function indv_events($conn){
    $indv_events="CREATE TABLE IF NOT EXISTS indv_events(
        srno INT PRIMARY KEY AUTO_INCREMENT,
        playername VARCHAR(25) NOT NULL,
        event_name VARCHAR(25) NOT NULL,
        email VARCHAR(25) NOT NULL,
        mobno VARCHAR(25) NOT NULL,
        age VARCHAR(25) NOT NULL,
        idproof VARCHAR(25) NOT NULL,
        clgname VARCHAR(25) NOT NULL,
        gender VARCHAR(25) NOT NULL
    )";
    
    $result1 = mysqli_query($conn,$indv_events);
    if($result1)
    {
        echo "table for single player events created successfully";
    }
    else
    {
        echo "table not created successfully<br>".mysqli_error($conn);
    }
}



indv_events($conn);

?>
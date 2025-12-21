<?php

use JetBrains\PhpStorm\NoReturn;

@include 'config.php';

session_start();

// cards data get
function get_events($conn)
{
    $query = "SELECT DISTINCT event_name FROM event_details";
    $eventdetails = mysqli_query($conn, $query);
    $result = $eventdetails->fetch_all();
    return $result;
}

function calculate_stats($conn, $event_list)
{
    $solo = array();
    $team = array();
    foreach ($event_list as $event) {

        // ! solo
        $query = "SELECT COUNT(*) as count from payment_details WHERE eventname = '" . $event[0] . "';";
        // echo $query;
        $result_solo = $conn->query($query);
        $result_solo = $result_solo->fetch_assoc();
        array_push($solo, array($event, $result_solo['count']));

        // ! team
        $query = "SELECT COUNT(*) as count from payment_details WHERE eventname = '" . $event[0] . "';";

        $result_team = $conn->query($query);
        $result_team = $result_team->fetch_assoc();
        array_push($team, array($event, $result_team['count']));
    }

    // echo json_encode($solo);
    // echo json_encode($team);

    foreach ($solo as $key => $val) {
        if (isset($team[$key])) {
            $val2 = $team[$key];
            $result[$key] = $val + $val2;
        }
    }


    // echo json_encode($result);
    return $result;
}

function generate_cards($stats)
{
    foreach ($stats as $event) {
        echo '
    <div class="col d-flex justify-content-center mb-4">
    <div class="card h-100 bg-dark text-white" style="width: 18rem">
        <div class="card-body text-center">
            <p class="card-title">' . $event[0][0] . '</p>
            <hr style="
      border-top: 1px solid beige;
      width: 50%;
      margin: 10px auto;
    " />
            <h5 class="card-text">' . $event[1] . '</h5>
        </div>
    </div>
</div>
    ';
    }
}

$stats = calculate_stats($conn, get_events($conn));

// ? event resolver used in mail
function get_event_details($conn, $event)
{
    $event_query = "SELECT * FROM event_details WHERE event_name='" . $event . "'";
    $eventdetails = mysqli_query($conn, $event_query);
    $eventdetails = $eventdetails->fetch_assoc();
    return array($eventdetails['Venue'], $eventdetails['event_date']);
}


// ! 1st guard
if (!isset($_SESSION['username'])) {
    header('location:index.php');
}
// ? scope
$team_mc = null;
$team_solo = null;
$team_me = null;
$eventdetails = null;
// ! 2nd guard

if (isset($_SESSION['designation'])) {
    $designation = $_SESSION['designation'];
        $event = $designation;
        // !team
        $team_detail = "SELECT * from team_details";
        $team_mc = mysqli_query($conn, $team_detail);
        $event = "ALL";
        $team_members = "SELECT * from team_member_details ";
        $result_member1 = mysqli_query($conn, $team_members);

        // ! solo
        $team_detail = "SELECT * from solo";
        $team_solo = mysqli_query($conn, $team_detail);
} 
else 
{
    header('location:logout.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />


    <title>Admin Panel</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        body,
        header,
        footer {
            font-family: "Be Vietnam Pro", sans-serif;
        }

        .vertical-line {
            width: 1px;
            height: 30px;
            background-color: beige;
            margin: 0 10px;
        }

        .circular-image {
            border: 1px solid beige;
            border-radius: 50%;
            height: 60px;
            width: 60px;
        }

        table {
            padding: 0.5rem !important;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#e0072f">
        <a class=" navbar-brand" href="#">ICON 2023 | Hello <?php echo $_SESSION['username']; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- ! navbar:start -->
        <div class="collapse navbar-collapse w-100 justify-content-end" id="navbarNav">
            <div class="d-flex align-items-center">
                <ul>
                    <li class="d-block d-md-block d-lg-none">Link1</li>
                    <li class="d-block d-md-block d-lg-none">Link2</li>
                    <li class="d-block d-md-block d-lg-none">Link3</li>


                    <a href="logout.php" value="logout" class="btn btn-dark" id="logoutbtn">Logout</a>
                </ul>
            </div>
        </div>
        <!-- ! navbar:end -->
    </nav>
    <div class="container-fluid">
                             <?php if ($designation == 'coding_decoding' || $designation ==  'web_design' || $designation ==  'ad_mad_show' 
                             || $designation == 'break_the_query' || $designation ==  'table_tennis' || $designation ==   'big_chess' 
                             || $designation == 'shutter_symphony' || $designation == 'virtual_trading') 
                             {
                    ?>
                        <?php @include 'ec_solo.php'; ?>

                    <?php
                    } else {
                    ?>
                        <?php @include 'ec_team.php'; ?>
                    <?php
                    } ?>
                    <!-- ec-team-END -->
                </div>
                <br>
                <div class="ec-team-details" id="main-team-details-div">
                    <!-- team member -- start -->
                    <?php
                    if (isset($_GET['team_name'])) {
                        $teamname = $_GET['team_name'];
                        $event = $_GET['game'];
                        $team_member = "SELECT * from team_member_details WHERE game='" . $event . "' AND teamname='" . $teamname . "'";
                        if($designation == 'codeicon' || $designation == 'gallery'){
                            $team_member = "SELECT * from codeicon_gallery_team_member_details WHERE game='" . $event . "' AND teamname='" . $teamname . "'";
                        }
                        //echo"<br/>".$team_member;
                        $result_member1 = mysqli_query($conn, $team_member);

                    ?>
                    <div class="p-5 h-screen bg-gray-100">
        <h1 class="text-xl mb-2">Team Details for <?php echo $teamname; ?></h1>
                        
        <div class="overflow-auto rounded-lg shadow hidden md:block">
            <table class="w-full">
                <thead class="bg-gray-50 border-b-2 border-gray-200">
                    <tr>
                        <th class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Sr.No</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">TeamName</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Game</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Member Name</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">In Game Name</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">College Name</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                <?php
                    while ($resultteam = $result_member1->fetch_assoc()) {
                ?>
                    <tr class="bg-white">
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                            <a href="#" class="font-bold text-blue-500 hover:underline">#<?php echo $resultteam['tmdid']; ?></a>
                        </td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?php echo $resultteam['teamname']; ?></td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?php echo $resultteam['game']; ?></td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?php echo $resultteam['Member_Name']; ?></td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?php echo $resultteam['In_game_name']; ?></td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?php echo $resultteam['clg_name']; ?></td>
                        </td>
                    </tr>
                    <?php
                                }
                            }
                            ?>
                    
                </tbody>
            </table>
        </div>
        <?php
                    if (isset($_GET['team_name'])) {
                        $teamname = $_GET['team_name'];
                        $event = $_GET['game'];
                        $team_member = "SELECT * from team_member_details WHERE game='" . $event . "' AND teamname='" . $teamname . "'";
                        if($designation == 'codeicon' || $designation == 'gallery'){
                            $team_member = "SELECT * from codeicon_gallery_team_member_details WHERE game='" . $event . "' AND teamname='" . $teamname . "'";
                        }
                        //echo"<br/>".$team_member;
                        $result_member1 = mysqli_query($conn, $team_member);
                        while ($resultteam = $result_member1->fetch_assoc()) {
                    ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:hidden">
            <!-- Grid cards for mobile/tablet view -->
            <div class="bg-white space-y-3 p-4 rounded-lg shadow">
                <div class="text-sm font-bold text-blue-500">Team id <?php echo $resultteam['tmdid']; ?></div>
                <div class="text-sm text-gray-700">Team Name: <?php echo $resultteam['teamname']; ?></div>
                <div class="text-sm text-gray-700">Event name: <?php echo $resultteam['game']; ?></div>
                <div class="text-sm text-gray-700">Member Name: <?php echo $resultteam['Member_Name']; ?></div>
                <div class="text-sm text-gray-700">Ingame name: <?php echo $resultteam['In_game_name']; ?></div>
                <div class="text-sm text-gray-700">College name: <?php echo $resultteam['clg_name']; ?></div>
            </div>
        </div>
        <?php
                                }
                            }
                            ?>
    </div>



                        
                        
                </div>
        </div>

    </div>

    <!-- ? js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
    <script src="../assets/js/mailing.js"></script>
    <!-- ! DT-Table -->
    <script type="text/javascript">

        //KP
        function handleShowContent(e){
            debugger
            //default value
            if(e == null){
                e = 'btn-payment';
                localStorage.setItem("main-div", "btn-payment");
            }
            else{
                localStorage.setItem("main-div", e);
            }
            
        }
    </script>
</body>

</html>
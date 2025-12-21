<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['designation']) || $_SESSION['designation'] !== "admin") {
    header('location: index.php');
}
else{
    $solo="SELECT * FROM solo";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">

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
    </style>
</head>

<body>
    <div class="container bg-gray-100" id="main-solo-div">
                <div class="row">
                    <div class="col-12">
                    <div class="p-2" class="div-main-solo">
        <h1 class="text-xl mb-2">Solo Details</h1>

        <div class="overflow-auto rounded-lg shadow hidden md:block">
            <table class="w-full">
                <thead class="bg-gray-50 border-b-2 border-gray-200">
                    <tr>
                    <th class="w-20 p-3 text-sm font-semibold tracking-wide text-left">ID</th>
        <th class="p-3 text-sm font-semibold tracking-wide text-left">Participant Name</th>
        <th class="p-3 text-sm font-semibold tracking-wide text-left">Contact no</th>
        <th class="p-3 text-sm font-semibold tracking-wide text-left">Alternate Contact No</th>
        <th class="p-3 text-sm font-semibold tracking-wide text-left">Email Id</th>
        <th class="p-3 text-sm font-semibold tracking-wide text-left">College name</th>
        <th class="p-3 text-sm font-semibold tracking-wide text-left">ID Proof</th>
        <th class="p-3 text-sm font-semibold tracking-wide text-left">Event</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                <?php
    if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    } 

    
    $results_per_page = 10;  
    $page_first_result = ($page-1) * $results_per_page;  
    
    $query = "select * from solo";  
    $resulta = mysqli_query($conn, $query);  
    $number_of_result = mysqli_num_rows($resulta);
    $number_of_page = ceil ($number_of_result / $results_per_page);   
     
    
    $solo_det = "SELECT * FROM solo LIMIT " . $page_first_result . ',' . $results_per_page;  
   // echo $solo_det;
    

     $resultsolo=mysqli_query($conn,$solo_det);
    //  $resultsolo=mysqli_query($conn,$solo);
     while($row=$resultsolo->fetch_assoc())
     {
    ?>
    <tr class="bg-white">
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?php echo $row['id'];?></td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?php echo $row['playername'];?></td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?php echo $row['contact'];?></td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?php echo $row['alternatecontact'];?></td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?php echo $row['email'];?></td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?php echo $row['clg_name'];?></td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><a href="../upload/<?php echo $row['clgproof'];?>"><?php echo $row['clgproof'];?></a></td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?php echo $row['eventname'];?></td>
                    </tr>
    <?php
    }
    ?>
                </tbody>
            </table>
            <?php
if($_GET["page"]>=2)
{
echo'<a class="btn btn-primary m-1" href="admin_page.php?page='.($_GET["page"]-1).'">Previous</a>';
}
for($i=1;$i<$number_of_page;$i++)
{
echo'<a class="btn btn-primary m-1" href="admin_page.php?page='.$i.'">'.$i.'</a>';
}
if($_GET["page"]<$number_of_page)

{
echo'<a class="btn btn-primary m-1" href="admin_page.php?page='.($_GET["page"]+1).'">Next</a>';
}

?>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:hidden">
        <?php
    if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    } 

    
    $results_per_page = 10;  
    $page_first_result = ($page-1) * $results_per_page;  
    
    $query = "select * from solo";  
    $resulta = mysqli_query($conn, $query);  
    $number_of_result = mysqli_num_rows($resulta);
    $number_of_page = ceil ($number_of_result / $results_per_page);   
     
    
    $payment_det = "SELECT * FROM solo LIMIT " . $page_first_result . ',' . $results_per_page;  
   // echo $payment_det;
    

     $resultsolo=mysqli_query($conn,$payment_det);
    //  $resultsolo=mysqli_query($conn,$payment);
     while($row=$resultsolo->fetch_assoc())
     {
    ?>
        
            <!-- Grid cards for mobile/tablet view -->
            <div class="bg-white space-y-3 p-4 rounded-lg shadow">
                <div class="text-sm font-bold text-blue-500">ID. <?php echo $row['id'];?></div>
                <div class="text-sm text-gray-700">Participant Name: <?php echo $row['playername'];?></div>
                <div class="text-sm text-gray-700">Contact No: <?php echo $row['contact'];?></div>
                <div class="text-sm text-gray-700">Alternate Contact No: <?php echo $row['alternatecontact'];?></div>
                <div class="text-sm text-gray-700">Email Id: <?php echo $row['email'];?></div>
                <div class="text-sm text-gray-700">College Name: <?php echo $row['clg_name'];?></div>
                <div class="text-sm text-gray-700">Transaction ScreenShot	: <a href="../upload/<?php echo $row['clgproof'];?>" target="_blank"><?php echo $row['clgproof'];?></a></div>
                <div class="text-sm text-gray-700">Event: <?php echo $row['eventname'];?></div>
            </div>
            
       
        <?php
    }
    ?>
     </div>
    
    
                    </div>
                </div>
            </div>
</body>

</html>
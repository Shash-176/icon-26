<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['designation']) || $_SESSION['designation'] !== "admin") {
    header('location: index.php');
} else {
    $payment = "SELECT * FROM payment_details";
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
    <div class="container">
        <div class="row">
            <div class="col-12 bg-gray-100" id="main-payment-div">
                <div class="p-2">
                    <h1 class="text-xl mb-2">Payment Page | Hello <?php echo $_SESSION['username']; ?></h1>
                    <div class="overflow-auto rounded-lg shadow hidden md:block">
                        <table class="w-full">
                            <thead class="bg-gray-50 border-b-2 border-gray-200">
                                <tr>
                                    <th class="w-20 p-3 text-sm font-semibold tracking-wide text-left">ID</th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Participant Name</th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Email Id</th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Contact No</th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Transaction Id</th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Transaction Time</th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Event Name</th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left">AMOUNT</th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Transaction ScreenShot
                                    </th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Status</th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Edit Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <?php
                                if (!isset($_GET['page'])) {
                                    $page = 1;
                                    $_GET['page'] = 1;
                                }


                                $results_per_page = 10;
                                // $page_first_result = ($page - 1) * $results_per_page;

                                $query = "select *from payment_details";
                                $resulta = mysqli_query($conn, $query);
                                $number_of_result = mysqli_num_rows($resulta);
                                $number_of_page = ceil($number_of_result / $results_per_page);


                                $payment_det = "SELECT * FROM payment_details LIMIT " . ($_GET['page'] - 1) * $results_per_page . ',' . $results_per_page;
                                // echo $payment_det;


                                $resultsolo = mysqli_query($conn, $payment_det);
                                //  $resultsolo=mysqli_query($conn,$payment);
                                while ($row = $resultsolo->fetch_assoc()) {
                                ?>
                                <tr class="bg-white">
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                        <?php echo $row['srno']; ?>
                                    </td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                        <?php echo $row['playername']; ?>
                                    </td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                        <?php echo $row['emailid']; ?></td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                        <?php echo $row['phoneno']; ?></td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                        <?php echo $row['transaction_id']; ?></td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                        <?php echo $row['ordate']; ?></td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                        <?php echo $row['eventname']; ?></td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                        <?php echo $row['amount']; ?></td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><a
                                            href="../payment/<?php echo $row['payment_ss']; ?>"><?php echo $row['payment_ss']; ?></a>
                                    </td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                        <?php if ($row['status'] == 0) { ?>
                                        UnConfirmed <?php  } else { ?>Confirmed <?php } ?>
                                    </td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                        <?php if ($row['status'] == 0) { ?>
                                        <form id="updateStatusForm" action="./update_status.php" method="POST">
                                            <input type="hidden" name="srno" value="<?php echo $row['srno']; ?>">
                                            <select class="form-select" name="new_status"
                                                aria-label="Default select example">
                                                <option selected>Status: Unconfirmed</option>
                                                <option value="1">Status: Confirmed</option>
                                            </select>
                                            <button type="button" id="updateStatusButton" onclick="updateStatus(this)"
                                                data-srno="<?php echo $row['srno']; ?>"
                                                data-name="<?php echo $row['playername']; ?>"
                                                data-email="<?php echo $row['emailid']; ?>"
                                                data-status="<?php echo $row['status']; ?>"
                                                data-event="<?php echo $row['eventname']; ?>">Update
                                                Status</button>
                                        </form>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <?php
                        if ($_GET["page"] >= 2) {
                            echo '<a class="btn btn-primary m-1" href="admin_page.php?page=' . ($_GET["page"] - 1) . '">Previous</a>';
                        }
                        for ($i = 1; $i < $number_of_page; $i++) {
                            echo '<a class="btn btn-primary m-1" href="admin_page.php?page=' . $i . '">' . $i . '</a>';
                        }
                        if ($_GET["page"] < $number_of_page) {
                            echo '<a class="btn btn-primary m-1" href="admin_page.php?page=' . ($_GET["page"] + 1) . '">Next</a>';
                        }

                        ?>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:hidden">
                        <?php
                        if (!isset($_GET['page'])) {
                            $page = 1;
                        } else {
                            $page = $_GET['page'];
                        }


                        $results_per_page = 10;
                        $page_first_result = ($page - 1) * $results_per_page;

                        $query = "select *from payment_details";
                        $resulta = mysqli_query($conn, $query);
                        $number_of_result = mysqli_num_rows($resulta);
                        $number_of_page = ceil($number_of_result / $results_per_page);


                        $payment_det = "SELECT * FROM payment_details LIMIT " . $page_first_result . ',' . $results_per_page;
                        // echo $payment_det;


                        $resultsolo = mysqli_query($conn, $payment_det);
                        //  $resultsolo=mysqli_query($conn,$payment);
                        while ($row = $resultsolo->fetch_assoc()) {
                        ?>

                        <!-- Grid cards for mobile/tablet view -->
                        <div class="bg-white space-y-3 p-4 rounded-lg shadow">
                            <div class="text-sm font-bold text-blue-500">ID. <?php echo $row['srno']; ?></div>
                            <div class="text-sm text-gray-700">Participant Name: <?php echo $row['playername']; ?></div>
                            <div class="text-sm text-gray-700">Email Id: <?php echo $row['emailid']; ?></div>
                            <div class="text-sm text-gray-700">Contact No: <?php echo $row['phoneno']; ?></div>
                            <div class="text-sm text-gray-700">Transaction Id: <?php echo $row['transaction_id']; ?>
                            </div>
                            <div class="text-sm text-gray-700">Transaction Time : <?php echo $row['ordate']; ?></div>
                            <div class="text-sm text-gray-700">Event Name: <?php echo $row['eventname']; ?></div>
                            <div class="text-sm text-gray-700">AMOUNT: <?php echo $row['amount']; ?></div>
                            <div class="text-sm text-gray-700">Transaction ScreenShot : <a
                                    href="../payment/<?php echo $row['payment_ss']; ?>"
                                    target="_blank"><?php echo $row['payment_ss']; ?></a></div>
                            <div class="text-sm text-gray-700"><?php if ($row['status'] == 0) { ?>
                                UnConfirmed <?php  } else { ?>Confirmed <?php } ?>
                                </td>
                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                    <?php if ($row['status'] == 0) { ?>
                                    <form id="updateStatusForm" action="./update_status.php" method="POST">
                                        <input type="hidden" name="srno" value="<?php echo $row['srno']; ?>">
                                        <select class="form-select" name="new_status"
                                            aria-label="Default select example">
                                            <option selected>Status: Unconfirmed</option>
                                            <option value="1">Status: Confirmed</option>
                                        </select>
                                        <button type="button" id="updateStatusButton" onclick="updateStatus(this)"
                                            data-srno="<?php echo $row['srno']; ?>"
                                            data-name="<?php echo $row['playername']; ?>"
                                            data-email="<?php echo $row['emailid']; ?>"
                                            data-status="<?php echo $row['status']; ?>"
                                            data-event="<?php echo $row['eventname']; ?>">Update
                                            Status</button>
                                    </form>
                                    <?php } ?>

                            </div>
                        </div>


                        <?php
                        }
                        ?>
                    </div>


                </div>
            </div>
        </div>
        <script src="../assets/js/mailing.js"></script>
        <script src="../assets/js/events.js"></script>
        <script type="text/javascript">
        // function updateStatus(e) {
        //     const updateStatusButton = document.getElementById('updateStatusButton');
        //     const updateStatusForm = document.getElementById('updateStatusForm');

        //     // Disable the button while processing
        //     updateStatusButton.disabled = true;
        //     // Use the fetch API to send the AJAX request
        //     fetch('./update_status.php', {
        //             method: 'POST',
        //             body: new FormData(updateStatusForm)
        //         })
        //         .then(async response => {
        //             const eventName = e.getAttribute('data-event');
        //             const email = e.getAttribute('data-email');
        //             const name = e.getAttribute('data-name');
        //             // ? in events.js
        //             const eventValue = events.find(event => event[eventName] !== undefined);
        //             if (eventValue) {
        //                 var bodyEmail = eventValue[eventName];
        //                 bodyEmail = bodyEmail.replace('xyz', name);
        //                 await send_conformation_email(email, bodyEmail);
        //             } else {
        //                 console.log(`Event '${eventName}' not found in the array.`);
        //             }
        //             window.alert('Email Sending Please Wait..');
        //         })
        //         .catch(error => {
        //             console.error('An error occurred:', error);
        //         })
        //         .finally(() => {
        //             // Re-enable the button
        //             updateStatusButton.disabled = false;
        //         });
        // }
        </script>
</body>

</html>
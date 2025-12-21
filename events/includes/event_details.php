<div class="section-header">
    <?php
    // ! temp fix
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "icon24_details";

    // $servername = "localhost";
    // $username = "u419687700_icon2023"; 
    // $password = "7?jlwm1V&5x";
    // $database = "u419687700_icon23_details";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    $sql = "SELECT * from event_details where event_name='" . $eventt . "'";
    $result = mysqli_query($conn, $sql);
    // !
    
    $description = "";
    $date = "";
    $venue = "";
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $description = $row['event_desc'];
            $date = $row['event_date'];
            $venue = $row['Venue'];
        }
    } else {
    }

    echo "<h2>" . str_replace("_", " ", $eventt) . "</h2>";

    ?>
</div>
<?php
echo "<h3>About the event " . str_replace("_", " ", $eventt) . "</h3>";
?>
</div>
<div class="form-group row wow fadeInUp">
    <div class="col-md-1">
    </div>
    <div class="form-group col-md-10">
        <p>
        <h4>"<?php
        echo $description;
        ?>"</h4>
        <?php
        echo "Venue: " . $venue;
        ?><br>
        <?php
        echo "Date: " . $date;
        ?>
        <br>
        </p>
    </div>
    <div class="col-md-1">
    </div>
</div>
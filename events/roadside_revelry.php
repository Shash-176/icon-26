<?php
include '../config.php';
include 'includes/regheader.php';
$eventt = "roadside_revelry"; //change this according to your event from shared sheet
$amount = 800; //change this according to your event from shared sheet
?>


<!-- #header -->
<section id="" class="section-with-bg container" style="margin-top: 100px;">

    <div class="container wow fadeInUp">

        <!-- Below include will determine details of the page -->
        <?php include 'includes/event_details.php'; ?>

        <div class="row wow fadeInUp">
            <div class="col-md-1">

            </div>
            <div class="col-md-10" style="border:1px solid black;padding:10px;">
                <form action="orderSummary.php" method="POST" enctype="multipart/form-data">

                <div class="form-group row">
                        <div class=" form-group col-md-12">
                            <label for="teamname">Enter TeamName <?php echo $eventt; ?> <span
                                    style="color:#b7202e;">*</span></label>
                            <br>
                            <input type="text" class="form-control" name="teamname" id=""
                                placeholder="A unique Team Name" required />

                            <input type="hidden" name="event_name" value="<?php echo $eventt; ?>" />
                        </div>

                        <div class=" form-group col-md-12">
                            <label for="teamname">Enter Team Leader Name <span style="color:#b7202e;">*</span></label>
                            <br>
                            <input type="text" class="form-control" name="player_name" id=""
                                placeholder="Team Leader Name" required />
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label for="teamname">Enter Primary Contact No <span style="color:#b7202e;">*</span></label>
                            <br>
                            <input type="tel" class="form-control" name="primary_mob1" minlength="10" maxlength="10"
                                onkeypress="return onlyNumberKey(event)" id="" placeholder="Primary Contact No"
                                required />

                        </div>
                        <div class="form-group col-md-12">
                            <label for="teamname">Enter Alternative Contact No <span
                                    style="color:#b7202e;">*</span></label>
                            <br>
                            <input type="tel" class="form-control" name="primary_mob2" minlength="10" maxlength="10"
                                onkeypress="return onlyNumberKey(event)" id="" placeholder="Alternative Contact No"
                                required />

                        </div>

                        <div class="form-group col-md-12">
                            <label for="teamname">Enter Primary Email <span style="color:#b7202e;">*</span></label>
                            <br>
                            <input type="email" class="form-control" name="primary_email" id=""
                                placeholder="Enter Email Id Of Captain" required />
                        </div>

                        <div class="form-group col-md-12">
                            <label for="teamname">Enter College Name <span style="color:#b7202e;">*</span></label>
                            <br>
                            <input type="text" class="form-control" name="player_clgname" id=""
                                placeholder="Your College Name" required />
                        </div>




                    </div>

                    <?php
                        for ($x = 1; $x <= 2; $x++) {
                        ?>


                    <div class="form-group row">
                        <div class="form-group col-md-12">
                            <h3 class="text-center">Player<?php echo $x + 1; ?></h3>
                            <label for="teamname">Enter Player<?php echo $x + 1; ?> Name <span
                                    style="color:#b7202e;">*</span></label>
                            <br>
                            <input type="text" class="form-control" name="player<?php echo $x + 1; ?>_name" id=""
                                placeholder="Player<?php echo $x + 1; ?> Name" required /><br>
                            <label for="teamname">Enter College Name <span style="color:#b7202e;">*</span></label>
                            <br>
                            <input type="text" class="form-control" name="player<?php echo $x + 1; ?>_clgname" id=""
                                placeholder="Player<?php echo $x + 1; ?> College Name" required />
                        </div>

                    </div>

                    <?php } ?>

                    <div class="form-group row">
                        <div class="form-group col-md-12">
                            <label for="teamname">Enter college Id Card pdf <span style="color:#b7202e;">*</span>
                                <br>
                                <p class="idnote">Important note:
                                    <br>1. Scan the ID cards of all players in the team, add them in single pdf.
                                    <br>2. Keep the pdf name as your Captain name.
                                </p>
                            </label>
                            <br>
                            <input type="file" class="form-control" name="player_image" id="" placeholder="" required />
                        </div>
                        <div class="form-group col-md-12">
                            <label for="teamname">Amount </label>
                            <br>
                            <input type="text" class="form-control" name="amount" id="" placeholder=""
                                value="<?php echo $amount; ?>" readonly="True" />
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group row">



                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 text-center">
                            <input type="submit" value="Submit" class="btn">
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-md-1">

            </div>
        </div>
    </div>

</section>
<script>
function onlyNumberKey(evt) {

    // Only ASCII character in that range allowed
    var ASCIICode = (evt.which) ? evt.which : evt.keyCode
    if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
        return false;
    return true;
}
</script>

<hr>

<?php
include 'includes/regfooter.php';
?>
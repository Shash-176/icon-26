<?php
include '../config.php';
include 'includes/regheader.php';
$eventt = "gallery"; //change this according to your event from shared sheet
$amount = 500; //change this according to your event from shared sheet
?>


<!-- #header -->
<section id="" class="section-with-bg container" style="margin-top: 100px;">

    <!-- Below include will determine details of the page -->
    <?php include 'includes/event_details.php'; ?>

    <div class="container wow fadeInUp">

        <div class="row">
            <div class="col-md-1">

            </div>
            <div class="col-md-10" style="border:1px solid black;padding:10px;">
                <form action="orderSummary.php" method="POST" enctype="multipart/form-data">

                    <!--valorant-->

                    <!-- <script>
                                    alert('Sorry ,We have reached the maximum number of registrations for the event. Thank you for your interest!');
                                    
                                    window.location.href="https://www.icon-somaiya.in";
                                                                         </script> -->
                    <div class="form-group row">
                        <div class=" form-group col-md-12">
                            <label for="teamname">Enter TeamName gallery <span style="color:#b7202e;">*</span></label>
                            <br>
                            <input type="text" class="form-control" name="teamname" id=""
                                placeholder="Provide a unique Team name" required />

                            <input type="hidden" name="event_name" value="gallery" />
                        </div>

                        <div class=" form-group col-md-12">
                            <label for="teamname">Enter Team Leader Name <span style="color:#b7202e;">*</span></label>
                            <br>
                            <input type="text" class="form-control" name="player_name" id=""
                                placeholder="Team Leader Name" required />
                        </div>

                        <!-- <div class="form-group col-md-12">
                                    <label for="teamname">Enter Team Leader In-Game Name <span style="color:#b7202e;">*</span></label>
                                    <br>
                                    <input type="text" class="form-control" name="teamcap_igname" id="" placeholder="In-Game Name" required />
                                </div> -->

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




                    <div class="form-group row">
                        <div class="form-group col-md-12">
                            <h3 class="text-center">Player2(Optional)</h3>
                            <label for="teamname">Enter Player2 Name <span style="color:#b7202e;"></span></label>
                            <br>
                            <input type="text" class="form-control" name="player2_name" id=""
                                placeholder="Player2 Name" />


                        </div>

                        <div class="form-group col-md-12">
                            <label for="teamname">Enter Email <span style="color:#b7202e;"></span></label>
                            <br>
                            <input type="email" class="form-control" name="player2_email" id=""
                                placeholder="Enter email id" />
                        </div>

                        <div class="form-group col-md-12">
                            <label for="teamname">Enter Contact No <span style="color:#b7202e;"></span></label>
                            <br>
                            <input type="tel" class="form-control" name="player2_mob" minlength="10" maxlength="10"
                                onkeypress="return onlyNumberKey(event)" id="" placeholder="Enter Contact No." />

                        </div>

                        <div class="form-group col-md-12">
                            <label for="teamname">Enter College Name <span style="color:#b7202e;"></span></label>
                            <br>
                            <input type="text" class="form-control" name="player2_clgname" id=""
                                placeholder="Player2 College Name" />
                        </div>

                    </div>



                    <div class="form-group row">
                        <div class="form-group col-md-12">
                            <h3 class="text-center">Player3(Optional)</h3>
                            <label for="teamname">Enter Player3 Name <span style="color:#b7202e;"></span></label>
                            <br>
                            <input type="text" class="form-control" name="player3_name" id=""
                                placeholder="Player2 Name" />


                        </div>

                        <div class="form-group col-md-12">
                            <label for="teamname">Enter Email <span style="color:#b7202e;"></span></label>
                            <br>
                            <input type="email" class="form-control" name="player3_email" id=""
                                placeholder="Enter email id" />
                        </div>

                        <div class="form-group col-md-12">
                            <label for="teamname">Enter Contact No <span style="color:#b7202e;"></span></label>
                            <br>
                            <input type="tel" class="form-control" name="player3_mob" minlength="10" maxlength="10"
                                onkeypress="return onlyNumberKey(event)" id="" placeholder="Enter Contact No." />

                        </div>

                        <div class="form-group col-md-12">
                            <label for="teamname">Enter College Name <span style="color:#b7202e;"></span></label>
                            <br>
                            <input type="text" class="form-control" name="player3_clgname" id=""
                                placeholder="Player3 College Name" />
                        </div>

                    </div>



                    <div class="form-group row">
                        <div class="form-group col-md-12">
                            <label for="">Summary of your Project <span style="color:#b7202e;">*</span></label>
                            <br>
                            <textarea rows="6" class="form-control" name="executive_summary" id="" required></textarea>
                        </div>
                    </div>


                    <div class="form-group row">

                        <div class="form-group col-md-12">
                            <label for="teamname">Enter college Id Card pdf <span style="color:#b7202e;">*</span>
                                <br>
                                <p class="idnote">Important note:
                                    <br>1. Scan the ID cards of all players in the team, add them in single pdf.
                                    <br>2. Keep the pdf name as your Captian name.
                                </p>
                            </label>
                            <br>
                            <input type="file" class="form-control" name="player_image" id="" placeholder="" required />
                        </div>
                        <div class="form-group col-md-12">
                            <label for="teamname">Amount </label>
                            <br>
                            <input type="text" class="form-control" name="amount" id="" placeholder="" value="500"
                                readonly="True" />
                        </div>
                    </div>

                    <div class="form-group row">

                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
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
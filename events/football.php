<?php
include '../config.php';
include 'includes/regheader.php';
$eventt = "football"; //change this according to your event from shared sheet
$amount = 900; //change this according to your event from shared sheet
?>


<!-- #header -->
<section id="" class="section-with-bg container" style="margin-top: 100px;">

    <!-- Below include will determine details of the page -->
    <?php include 'includes/event_details.php'; ?>

        <div class="row wow fadeInUp">
            <div class="col-md-1">

            </div>
            <div class="col-md-10" style="border:1px solid black;padding:10px;">
                <form action="orderSummary.php" method="POST" enctype="multipart/form-data">

                    <!--valorant-->
                                                    <!-- <script>
                                    alert('Sorry ,We have reached the maximum number of registrations for the event. Thank you for your interest!');
                                    
                                    window.location.href="https://www.icon-somaiya.in";
                                                                         </script>  -->


                                <div class="form-group row">
                                    <div class=" form-group col-md-12">
                                        <label for="teamname">Enter TeamName Football                                            <span style="color:#b7202e;">*</span></label>
                                        <br>
                                        <input type="text" class="form-control" name="teamname" id=""
                                            placeholder="Provide a unique Team Name" required />


                                        <input type="hidden" name="event_name"
                                            value= "football" />
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="">Enter team Leader Name <span
                                                style="color:#b7202e;">*</span></label>
                                        <br>
                                        <input type="text" name="player_name" class="form-control" id=""
                                            placeholder="Enter Team Leader Name" required />
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="teamname">Enter Primary Contact No <span
                                                style="color:#b7202e;">*</span></label>
                                        <br>
                                        <input type="tel" class="form-control" name="primary_mob1" minlength="10"
                                            maxlength="10" onkeypress="return onlyNumberKey(event)" id=""
                                            placeholder="Primary Contact No" required />

                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="teamname">Enter Alternative Contact No <span
                                                style="color:#b7202e;">*</span></label>
                                        <br>
                                        <input type="tel" class="form-control" name="primary_mob2" minlength="10"
                                            maxlength="10" onkeypress="return onlyNumberKey(event)" id=""
                                            placeholder="Alternative Contact No" required />

                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="teamname">Enter Primary Email <span
                                                style="color:#b7202e;">*</span></label>
                                        <br>
                                        <input type="email" class="form-control" name="primary_email" id=""
                                            placeholder="Enter Email Id Of Captain" required />
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="teamname">Enter College Name <span
                                                style="color:#b7202e;">*</span></label>
                                        <br>
                                        <input type="text" class="form-control" name="player_clgname" id=""
                                            placeholder="Your College Name" required />
                                    </div>

                                    <!--<div class="form-group col-md-12">-->
                                    <!--    <label for="teamname">Amount </label>-->
                                    <!--    <br>-->
                                    <!--    <input type="text" class="form-control" name="amount" id="" placeholder="" value="1000" readonly="True" />-->
                                    <!--</div>-->
                                </div>

                                

                                <div class="form-group row">
                                    <div class="form-group col-md-12">
                                        <h3 class="text-center">Player2</h3>
                                        <label for="teamname">Enter Player2 Name <span
                                                style="color:#b7202e;">*</span></label>
                                        <br>
                                        <input type="text" class="form-control" name="player2_name"
                                            id="" placeholder="Player2 name" required />

                                    </div>



                                    <div class="form-group col-md-12">
                                        <label for="teamname">Enter College Name <span
                                                style="color:#b7202e;">*</span></label>
                                        <br>
                                        <input type="text" class="form-control"
                                            name="player2_clgname" id=""
                                            placeholder="Player2 college name" required />
                                    </div>

                                </div>

                                

                                <div class="form-group row">
                                    <div class="form-group col-md-12">
                                        <h3 class="text-center">Player3</h3>
                                        <label for="teamname">Enter Player3 Name <span
                                                style="color:#b7202e;">*</span></label>
                                        <br>
                                        <input type="text" class="form-control" name="player3_name"
                                            id="" placeholder="Player3 name" required />

                                    </div>



                                    <div class="form-group col-md-12">
                                        <label for="teamname">Enter College Name <span
                                                style="color:#b7202e;">*</span></label>
                                        <br>
                                        <input type="text" class="form-control"
                                            name="player3_clgname" id=""
                                            placeholder="Player3 college name" required />
                                    </div>

                                </div>

                                

                                <div class="form-group row">
                                    <div class="form-group col-md-12">
                                        <h3 class="text-center">Player4</h3>
                                        <label for="teamname">Enter Player4 Name <span
                                                style="color:#b7202e;">*</span></label>
                                        <br>
                                        <input type="text" class="form-control" name="player4_name"
                                            id="" placeholder="Player4 name" required />

                                    </div>



                                    <div class="form-group col-md-12">
                                        <label for="teamname">Enter College Name <span
                                                style="color:#b7202e;">*</span></label>
                                        <br>
                                        <input type="text" class="form-control"
                                            name="player4_clgname" id=""
                                            placeholder="Player4 college name" required />
                                    </div>

                                </div>

                                

                                <div class="form-group row">
                                    <div class="form-group col-md-12">
                                        <h3 class="text-center">Player5</h3>
                                        <label for="teamname">Enter Player5 Name <span
                                                style="color:#b7202e;">*</span></label>
                                        <br>
                                        <input type="text" class="form-control" name="player5_name"
                                            id="" placeholder="Player5 name" required />

                                    </div>



                                    <div class="form-group col-md-12">
                                        <label for="teamname">Enter College Name <span
                                                style="color:#b7202e;">*</span></label>
                                        <br>
                                        <input type="text" class="form-control"
                                            name="player5_clgname" id=""
                                            placeholder="Player5 college name" required />
                                    </div>

                                </div>


                                
                                <div class="form-group row">
                                    <div class="form-group col-md-12">
                                        <h3 class="text-center">Player6 (Optional)</h3>
                                        <label for="teamname">Enter Player6 Name <span
                                                style="color:#b7202e;"></span></label>
                                        <br>
                                        <input type="text" class="form-control" name="player6_name"
                                            id="" placeholder="player6 name" />

                                    </div>



                                    <div class="form-group col-md-12">
                                        <label for="teamname">Enter College Name <span
                                                style="color:#b7202e;"></span></label>
                                        <br>
                                        <input type="text" class="form-control" name="player6_clgname"
                                            id="" placeholder="player6 college name" />
                                    </div>

                                </div>
                                
                                
                                <div class="form-group row">
                                    <div class="form-group col-md-12">
                                        <h3 class="text-center">Player7 (Optional)</h3>
                                        <label for="teamname">Enter Player7 Name <span
                                                style="color:#b7202e;"></span></label>
                                        <br>
                                        <input type="text" class="form-control" name="player7_name"
                                            id="" placeholder="player7 name" />

                                    </div>



                                    <div class="form-group col-md-12">
                                        <label for="teamname">Enter College Name <span
                                                style="color:#b7202e;"></span></label>
                                        <br>
                                        <input type="text" class="form-control" name="player7_clgname"
                                            id="" placeholder="player7 college name" />
                                    </div>

                                </div>
                                
                                
                                <div class="form-group row">
                                    <div class="form-group col-md-12">
                                        <h3 class="text-center">Player8 (Optional)</h3>
                                        <label for="teamname">Enter Player8 Name <span
                                                style="color:#b7202e;"></span></label>
                                        <br>
                                        <input type="text" class="form-control" name="player8_name"
                                            id="" placeholder="player8 name" />

                                    </div>



                                    <div class="form-group col-md-12">
                                        <label for="teamname">Enter College Name <span
                                                style="color:#b7202e;"></span></label>
                                        <br>
                                        <input type="text" class="form-control" name="player8_clgname"
                                            id="" placeholder="player8 college name" />
                                    </div>

                                </div>

                                                                <div class="form-group row">

                                    <div class="form-group col-md-12">
                                        <label for="teamname">Enter college Id Card pdf <span
                                                style="color:#b7202e;">*</span>
                                            <br>
                                            <p class="idnote">Important note:
                                                <br>1. Scan the ID cards of all players in the team, add them in
                                                single pdf.
                                                <br>2. Keep the pdf name as your Captian name.
                                            </p>
                                        </label><br>
                                        <input type="file" class="form-control" name="player_image" id="" placeholder=""
                                            required />
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="teamname">Amount </label>
                                        <br>
                                        <input type="text" class="form-control" name="amount" id="" placeholder=""
                                            value="900" readonly="True" />
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

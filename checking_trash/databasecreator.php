// <?php
// include 'config.php';

// // /// Create a connection
// //  $conn = mysqli_connect($servername,$username,$password);

// // // // Die if connection is not successful
// //  if(!$conn)
// //  {
// //     die("Sorry we failed to connect:".mysqli_connect_error());
// //  }
// //  else
// //  {
// //     echo "Connection was successful";
// // }


// // // // Create a database 
// //  $sql = "CREATE DATABASE player_detail";
// // // // // excuteing the query
// //   $result = mysqli_query($conn,$sql);

// // //echo "The result is<br>"; 
// // //echo var_dump($result);

// // // check for the database creation 

// // if($result)
// // {
// //     echo "Database created successfully";
// // }
// // else
// // {
// //     echo "Database not created successfully<br>".mysqli_error($conn);

// // }

// // Create a connection
// $conn = mysqli_connect($servername, $username, $password, $database);

// $sql = "CREATE TABLE IF NOT EXISTS solo(
//     id INT(10) AUTO_INCREMENT PRIMARY KEY,
//     playername varchar(20) not null,
//     contact varchar(11) not null,
//     alternatecontact varchar(11),
//     email varchar(30),
//     clg_name varchar(40) not null,
//     clgproof varchar(50),
//     eventname varchar(30))";
// $result = mysqli_query($conn, $sql);
// if ($result) {
//     echo "table created successfully";
// } else {
//     echo "table not created successfully<br>" . mysqli_error($conn);
// }
// /*
// Team name
// Team leader name
// Contact
// Secondary contact (co-head)
// email
// clg name
// Clg ID pdf doc of all team members
// Game
// */



// $sql1 = "CREATE TABLE IF NOT EXISTS team_details(
//     teamdetail_id INT(10) AUTO_INCREMENT PRIMARY KEY,
//     teamname varchar(20) not null,
//     teamleader_name varchar(20) not null, 
//     contact varchar(11) not null,
//     secondarycontact varchar(11),
//     email varchar(30),
//     clg_name varchar(40) not null,
//     clgproof varchar(50),
//     game varchar(30),
//     gallery_summary varchar(1000))";
// $result1 = mysqli_query($conn, $sql1);
// if ($result1) {
//     echo "table created successfully";
// } else {
//     echo "table not created successfully<br>" . mysqli_error($conn);
// }


// $sql2 = "CREATE TABLE IF NOT EXISTS 
// team_member_details(
// tmdid INT(10) AUTO_INCREMENT PRIMARY KEY,
// teamname varchar(20) not null,
// game varchar(30) not null,
// Member_Name varchar(20) not null,
// In_game_name varchar(30),
// clg_name varchar(40) not null)";
// $result2 = mysqli_query($conn, $sql2);
// if ($result2) {
//     echo "table created successfully";
// } else {
//     echo "table not created successfully<br>" . mysqli_error($conn);
// }


// $sql3 = "CREATE TABLE IF NOT EXISTS payment_details(
//     srno INT(10) AUTO_INCREMENT PRIMARY KEY,
//     playername varchar(25) not null,
//     emailid varchar(25) not null, 
//     phoneno double not null,
//     transaction_id varchar(35),
//     ordate varchar(30),
//     eventname varchar(30),
//     amount float(6,2),
//     payment_ss varchar(40))";
// $result3 = mysqli_query($conn, $sql3);
// if ($result3) {
//     echo "table created successfully";
// } else {
//     echo "table not created successfully<br>" . mysqli_error($conn);
// }

// // $sql4="CREATE TABLE IF NOT EXISTS codeicon_team_details(
// //     teamdetail_id INT(10) AUTO_INCREMENT PRIMARY KEY,
// //     teamname varchar(20) not null,
// //     teamleader_name varchar(20) not null, 
// //     contact varchar(11) not null,
// //     secondarycontact varchar(11),
// //     email varchar(30),
// //     clg_name varchar(40) not null,
// //     clgproof varchar(50),
// //     game varchar(30))";

// // $result4 = mysqli_query($conn,$sql4);
// // if($result3)
// // {
// //     echo "table created successfully";
// // }
// // else
// // {
// //     echo "table not created successfully<br>".mysqli_error($conn);
// // }

// $sql5 = "CREATE TABLE IF NOT EXISTS 
// codeicon_gallery_team_member_details(
// tmdid INT(10) AUTO_INCREMENT PRIMARY KEY,
// teamname varchar(20) not null,
// game varchar(30) not null,
// Member_Name varchar(20) not null,
// email varchar(30),
// contact varchar(11),
// clg_name varchar(40) not null)";

// $result5 = mysqli_query($conn, $sql5);
// if ($result5) {
//     echo "table created successfully";
// } else {
//     echo "table not created successfully<br>" . mysqli_error($conn);
// }

// $sql6 = "CREATE TABLE IF NOT EXISTS
// event_details(
//     event_id INT(10) AUTO_INCREMENT PRIMARY KEY,
//     event_name VARCHAR(100),
//     event_desc TEXT,
//     Venue VARCHAR(100),
//     event_date TEXT
// )";
// $result6 = mysqli_query($conn, $sql6);
// if ($result6) {
//     echo "table created successfully";
// } else {
//     echo "table not created successfully<br>" . mysqli_error($conn);
// }


// $ins_query = "INSERT into event_details
// (event_name,event_desc,Venue,event_date)
// VALUES('gallery','Showcase your best works related to IOT and win amazing prices from a pool of Rs 9600!','K J Somaiya Institute of Management, Somaiya Vidyavihar Chanakya 501','26th October 2023')";
// $insres = mysqli_query($conn, $ins_query);
// if ($insres) {
//     echo "insertion successful\n";
// }

// $ins_query = "INSERT into event_details
// (event_name,event_desc,Venue,event_date)
// VALUES('roadside_revelry','TBD','K J Somaiya Institute of Management, Somaiya Vidyavihar Chanakya 501','26th October 2023')";
// $insres = mysqli_query($conn, $ins_query);
// if ($insres) {
//     echo "insertion successful\n";
// }


// $ins_query = "INSERT into event_details
// (event_name,event_desc,Venue,event_date)
// VALUES('shutter_symphony','TBD','K J Somaiya Institute of Management, Somaiya Vidyavihar Chanakya 501','26th October 2023')";
// $insres = mysqli_query($conn, $ins_query);
// if ($insres) {
//     echo "insertion successful\n";
// }

// $ins_query = "INSERT into event_details
// (event_name,event_desc,Venue,event_date)
// VALUES('cricket','Team up with your friends to engage in fun-filled cricket matches and win amazing prizes!','K J Somaiya Institute of Management, Somaiya Vidyavihar Ground','26th-27th October, 2023')";
// $insres = mysqli_query($conn, $ins_query);
// if ($insres) {
//     echo "insertion successful\n";
// }

// $ins_query = "INSERT into event_details
// (event_name,event_desc,Venue,event_date)
// VALUES('treasure_hunt','Love to solve riddles? Come and join us for this game of finding treasures! ','K J Somaiya Institute of Management, Somaiya Vidyavihar Campus','26th October 2023')";
// $insres = mysqli_query($conn, $ins_query);
// if ($insres) {
//     echo "insertion successful\n";
// }

// $ins_query = "INSERT into event_details
// (event_name,event_desc,Venue,event_date)
// VALUES('big_chess','AND Checkmate!! Come and compete with your friends over a friendly game of chess! ','K J Somaiya Institute of Management, Somaiya Vidyavihar BIG CHESS','26th October 2023')";
// $insres = mysqli_query($conn, $ins_query);
// if ($insres) {
//     echo "insertion successful\n";
// }


// $ins_query = "INSERT INTO event_details (event_name, event_desc, Venue, event_date)
// VALUES ('coding_decoding', 'Test your coding skills with this exciting competition!', 'Online', '26th October 2023')";
// $insres = mysqli_query($conn, $ins_query);
// if ($insres) {
//     echo "insertion successful\n";
// }

// $ins_query = "INSERT INTO event_details (event_name, event_desc, Venue, event_date)
// VALUES ('tech_knowledge', 'Join us with your friends to compete for an amazing quiz game!', 'K J Somaiya Institute of Management, Somaiya Vidyavihar Classroom', '26th October 2023')";
// $insres = mysqli_query($conn, $ins_query);
// if ($insres) {
//     echo "insertion successful\n";
// }

// $ins_query = "INSERT INTO event_details (event_name, event_desc, Venue, event_date)
// VALUES ('football', 'Kick off the excitement at our college fest with Rink Football! Get ready to dribble, pass, and score in this fast-paced and thrilling event. Form a team, showcase your soccer skills, and compete for glory on the rink. Whether you`re a seasoned player or a beginner, Rink Football promises intense action and a fun-filled atmosphere. Join us for a memorable experience where camaraderie and sportsmanship take center stage!', 'Turf', '26th-27th October, 2023')";
// $insres = mysqli_query($conn, $ins_query);
// if ($insres) {
//     echo "insertion successful\n";
// }

// $ins_query = "INSERT INTO event_details (event_name, event_desc, Venue, event_date)
// VALUES ('table_tennis', 'Dive into the world of fast-paced excitement with our table tennis event at ICON 23 ! Challenge your reflexes, showcase your skills, and compete against fellow enthusiasts in thrilling matches. Whether you`re a seasoned player or a beginner, this event offers a fantastic opportunity for friendly competition, sportsmanship, and fun. Join us, pick up your paddle, and get ready to serve up some unforgettable moments on the table!', 'Big Table', '26th October 2023')";
// $insres = mysqli_query($conn, $ins_query);
// if ($insres) {
//     echo "insertion successful\n";
// }

// $ins_query = "INSERT INTO event_details (event_name, event_desc, Venue, event_date)
// VALUES ('web_design', 'Make your ideas come to life with this web design competition!', 'Classroom', '26th October 2023')";
// $insres = mysqli_query($conn, $ins_query);
// if ($insres) {
//     echo "insertion successful\n";
// }

// $ins_query = "INSERT INTO event_details (event_name, event_desc, Venue, event_date)
// VALUES ('valorant', 'Team up with your friends and compete with some of the best players in the game!', 'Online', '26th October 2023')";
// $insres = mysqli_query($conn, $ins_query);
// if ($insres) {
//     echo "insertion successful\n";
// }

// $ins_query = "INSERT INTO event_details (event_name, event_desc, Venue, event_date)
// VALUES ('codeicon', 'Codeicon 4.0 offers students a chance to show off their range of abilities and unleash their inner programming brilliance.', 'K J Somaiya Institute of Management, Somaiya Vidyavihar Chanakya 101', '25th October 2023')";
// $insres = mysqli_query($conn, $ins_query);
// if ($insres) {
//     echo "insertion successful\n";
// }

// $ins_query = "INSERT INTO event_details (event_name, event_desc, Venue, event_date)
// VALUES ('spark_tank', 'Introducing the Spark Tank Challenge: where the worlds of business and technology converge. This event provides a platform for students to showcase their innovative tech business ideas and present compelling start-up pitches. It`s the perfect arena where entrepreneurial spirit and technological innovation unite, fostering an environment of creativity and forward-thinking', 'Classroom', '27th October 2023')";
// $insres = mysqli_query($conn, $ins_query);
// if ($insres) {
//     echo "insertion successful\n";
// }

// $ins_query = "INSERT INTO event_details (event_name, event_desc, Venue, event_date)
// VALUES ('bgmi','TBD', 'online', '26th October 2023')";
// $insres = mysqli_query($conn, $ins_query);
// if ($insres) {
//     echo "insertion successful\n";
// }

// $ins_query = "INSERT INTO event_details (event_name, event_desc, Venue, event_date)
// VALUES ('virtual_trading', 'TBD', 'TBD', '26th October 2023')";
// $insres = mysqli_query($conn, $ins_query);
// if ($insres) {
//     echo "insertion successful\n";
// }

// $ins_query = "INSERT INTO event_details (event_name, event_desc, Venue, event_date)
// VALUES ('ad_mad_show', 'The Ad Mad Show is a standout event with a strong focus on technology. Here, students are tasked with advertising various products using their technological prowess to craft compelling static web pages. This unique challenge not only sharpens their marketing skills but also highlights the power of combining technology with other domains. It`s a platform where students can harness the potential of technology to create impactful advertisements, showcasing how innovation and marketing can seamlessly intersect.', 'LAB', '26th October 2023')";
// $insres = mysqli_query($conn, $ins_query);
// if ($insres) {
//     echo "insertion successful\n";
// }

// $ins_query = "INSERT INTO event_details (event_name, event_desc, Venue, event_date)
// VALUES ('break_the_query', 'Break the Query is a competition focusing on Database Management System expertise. Students tackle questions and scenarios, honing their SQL query skills to retrieve specific data. It`s a dynamic platform for enhancing database proficiency and real-world problem-solving.', 'Classroom', '26th October 2023')";
// $insres = mysqli_query($conn, $ins_query);
// if ($insres) {
//     echo "insertion successful\n";
// }





// // do not follow
// /*
// $sql = "CREATE TABLE IF NOT EXISTS solo(
//     id INT(10) AUTO_INCREMENT PRIMARY KEY,
//     playername varchar(20) not null,
//     contact varchar(11) not null,
//     alternatecontact varchar(11),
//     email varchar(30),
//     clg_name varchar(40) not null,
//     clgproof varchar(50),
//     eventname varchar(30),
//     transid varchar(100),
//     payment_ss varchar(40))";
// $result3 = mysqli_query($conn,$sql);
// if($result3)
// {
//     echo "solo table created successfully";
// }
// else
// {
//     echo "table not created successfully<br>".mysqli_error($conn);
// }

// $sql1 = "CREATE TABLE IF NOT EXISTS team_details(
//     teamdetail_id INT(10) AUTO_INCREMENT PRIMARY KEY,
//     teamname varchar(20) not null,
//     teamleader_name varchar(20) not null, 
//     contact varchar(11) not null,
//     secondarycontact varchar(11),
//     email varchar(30),
//     clg_name varchar(40) not null,
//     clgproof varchar(50),
//     game varchar(30),
//     transid varchar(100),
//     payment_ss varchar(40))";
// $result3 = mysqli_query($conn,$sql1);
// if($result3)
// {
//     echo "team_details table created successfully";
// }
// else
// {
//     echo "table not created successfully<br>".mysqli_error($conn);
// }

// $sql2 = "CREATE TABLE IF NOT EXISTS 
// team_member_details(
// tmdid INT(10) AUTO_INCREMENT PRIMARY KEY,
// teamname varchar(20) not null,
// game varchar(30) not null,
// Member_Name varchar(20) not null,
// In_game_name varchar(30),
// clg_name varchar(40) not null,
// transid varchar(100),
// payment_ss varchar(40)) ";
// $result3 = mysqli_query($conn,$sql2);
// if($result3)
// {
//     echo "team_member_details table created successfully";
// }
// else
// {
//     echo "table not created successfully<br>".mysqli_error($conn);
// }

// $sql3 = "CREATE TABLE IF NOT EXISTS payment_details(
//     srno INT(10) AUTO_INCREMENT PRIMARY KEY,
//     transid varchar(100),
//     email varchar(30),
//     eventname varchar(30),
//     phoneno varchar(20),
//     payment_ss varchar(40) )";
// $result3 = mysqli_query($conn,$sql3);
// if($result3)
// {
//     echo "table created successfully";
// }
// else
// {
//     echo "table not created successfully<br>".mysqli_error($conn);
// }


// $sql4 ="CREATE TABLE IF NOT EXISTS codeicon_team_details(
//     teamdetail_id INT(10) AUTO_INCREMENT PRIMARY KEY,
//     teamname varchar(20) not null,
//     teamleader_name varchar(20) not null, 
//     contact varchar(11) not null,
//     secondarycontact varchar(11),
//     email varchar(30),
//     clg_name varchar(40) not null,
//     clgproof varchar(50),
//     game varchar(30),
//     transid varchar(100),
//     payment_ss varchar(40))";
// $result3 = mysqli_query($conn,$sql4);
// if($result3)
// {
//     echo "table created successfully";
// }
// else
// {
//     echo "table not created successfully<br>".mysqli_error($conn);
// }


// $sql5 ="CREATE TABLE IF NOT EXISTS codeicon_member_details(
//     tmdid INT(10) AUTO_INCREMENT PRIMARY KEY,
//     teamname varchar(20) not null,
//     game varchar(30) not null,
//     Member_Name varchar(20) not null,
//     clg_name varchar(40) not null,
//     email varchar(30),
//     contact varchar(11),
//     transid varchar(100),
//     payment_ss varchar(40)) ";
// $result3 = mysqli_query($conn,$sql5);
// if($result3)
// {
//     echo "table created successfully";
// }
// else
// {
//     echo "table not created successfully<br>".mysqli_error($conn);
// }
// */
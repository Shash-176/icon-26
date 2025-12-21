-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 24, 2024 at 12:50 PM
-- Server version: 10.11.8-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u419687700_icon23_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--
CREATE DATABASE icon24_details;
USE icon24_details;

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `hpassword` varchar(100) DEFAULT NULL,
  `eventname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `pass`, `hpassword`, `eventname`) VALUES
(1, 'admin', 'admin@gmail.com', 'adminpass1', 'adminpass1', 'admin'),
(2, 'cricket', 'cricket@gmail.com', 'raj_soumitra', 'raj_soumitra', 'cricket'),
(3, 'siddhi', 'siddhi.ds@somaiya.edu', 'siddhi123', 'siddhi123', 'ad_mad_show'),
(4, 'diya', 'diya.nayak@somaiya.edu', 'diya123', 'diya123', 'ad_mad_show'),
(5, 'rishabh', 'rishabh.shirke@somaiya.edu', 'Shinchan@10', 'Shinchan@10', 'web_design'),
(6, 'treasure_hunt', 'treasure_hunt@gmail.com', 'treasure_hunt', 'treasure_hunt', 'treasure_hunt'),
(7, 'football', 'football@gmail.com', 'football', 'football', 'football\r\n'),
(8, 'sreekar iyer', 'coding_decoding@gmail.com', 'sreekar iyer', 'sreekar iyer', 'coding_decoding'),
(9, 'big_chess', 'big_chess@gmail.com', 'shlok', 'shlok', 'big_chess'),
(10, 'mayura@somaiya.edu', 'mayura@somaiya.edu', 'adminpass', 'adminpass', 'admin'),
(11, 'krantee@somaiya.edu', 'krantee@somaiya.edu', 'adminpass', 'adminpass', 'admin\r\n'),
(12, 'codeicon', 'codeicon@gmail.com', 'codeicon@123', 'codeicon@123', 'codeicon'),
(13, 'bgmi', 'bgmi@gmail.com', 'tushar_bgmi', 'tushar_bgmi', 'bgmi'),
(14, 'valorant', 'valorant@gmail.com', 'bapat_bgmi', 'tbapat_bgmi', 'valorant'),
(15, 'techknowledge', 'techknowledge@gmail.com', 'renuka_tk', 'renuka_tk', 'tech_knowledge'),
(16, 'table_tennis', 'table_tennis@gmail.com', 'table_tennis', 'table_tennis', 'table_tennis'),
(17, 'dipti.karkera@somaiy', 'dipti.karkera@somaiya.edu', 'Shinchan@10', 'Shinchan@10', 'web_design');

-- --------------------------------------------------------

--
-- Table structure for table `codeicon_gallery_team_member_details`
--

CREATE TABLE `codeicon_gallery_team_member_details` (
  `tmdid` int(10) NOT NULL,
  `teamname` varchar(20) NOT NULL,
  `game` varchar(30) NOT NULL,
  `Member_Name` varchar(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(11) DEFAULT NULL,
  `clg_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `codeicon_gallery_team_member_details`
--

INSERT INTO `codeicon_gallery_team_member_details` (`tmdid`, `teamname`, `game`, `Member_Name`, `email`, `contact`, `clg_name`) VALUES
(8, 'SuperMax', 'codeicon', 'Atharv desai', 'atharvdesai2002@gmail.com', '8828388979', 'KJ somaiya institute of management'),
(9, 'SuperMax', 'codeicon', 'Shubhvrat kulkarni', 'shubhvratkulkarni@gmail.com', '7304135570', 'KJ SOMAIYA INSTITUTE OF MANAGEMENT'),
(10, 'SuperMax', 'codeicon', 'Pratham kandalgaonka', 'kandalgaonkarpratham@gmail.com', '7045476292', 'KJ somaiya institute of management'),
(11, 'Core Chip', 'codeicon', 'Ankita Thakur', 'ankita.kt@somaiya.edu', '9321986381', 'K J Somaiya Institute of Management '),
(12, 'Core Chip', 'codeicon', 'Priyanka Sonawane ', 'pds@somaiya.edu', '8652127934', 'K J Somaiya Institute of Management '),
(13, 'Core Chip', 'codeicon', 'Riya Gharat ', 'r.gharat@somaiya.edu', '9403874999', 'K J Somaiya Institute of Management '),
(14, 'Vidhi Rane ', 'gallery', '', '', '', ''),
(15, 'Vidhi Rane ', 'gallery', '', '', '', ''),
(16, 'random_state_42', 'codeicon', 'Bhaumik Kore', 'bhaumik.kore31@gmail.com', '9152526632', 'Dwarkadas J Sanghvi College Of Engineeri'),
(17, 'random_state_42', 'codeicon', 'Mohammed Mehdi', 'mohdmehdi2003@gmail.com', '9833734905', 'Dwarkadas J Sanghvi College Of Engineeri'),
(18, 'random_state_42', 'codeicon', 'Aditya Sonavane', 'adityasonavane005@gmail.com', '8208839905', 'adityasonavane005@gmail.com'),
(25, 'BROgrammers', 'codeicon', 'Shantanu Sakpal', 'null', '9833437455', 'DJ Sanghvi'),
(26, 'BROgrammers', 'codeicon', 'Uday Mahajan', 'null', '9022469646', 'DJ Sanghvi'),
(27, 'BROgrammers', 'codeicon', 'Abhishek Sinha', 'null', '8169945138', 'DJ Sanghvi'),
(28, 'init0', 'codeicon', 'Aryan Surve', 'aryan2509surve@gmail.com', '9769215236', 'Dwarkadas J. Sanghvi College of Engineer'),
(29, 'init0', 'codeicon', 'Farin Khan', 'farin0615@gmail.com', '9326065198', 'Dwarkadas J. Sanghvi College of Engineer'),
(30, 'init0', 'codeicon', 'Mihir Randive', 'mihir.studyy@gmail.com', '7021736297', 'Dwarkadas J. Sanghvi College of Engineer'),
(31, 'SQUAD', 'codeicon', 'Shivangi Shukla', 'shivangi.gs@somaiya.edu', '8369877726', 'KJ SOMAIYA INSTITUTE OF MANAGEMENT '),
(32, 'SQUAD', 'codeicon', 'Aditya Kunder', 'aditya.kunder@somaiya.edu', '9619338593', 'KJ SOMAIYA INSTITUTE OF MANAGEMENT '),
(33, 'SQUAD', 'codeicon', 'Swamynathan Iyer ', 'swamynathan.i@somaiya.edu', '8104835142', 'KJ SOMAIYA INSTITUTE OF MANAGEMENT '),
(34, 'Code Crafters', 'codeicon', 'Priya Yadav', 'priyauy2003@gmail.com', '9769760494', 'K.J Somaiya Institute Of Management '),
(35, 'Code Crafters', 'codeicon', 'Binny Mulamoottil', 'binny.m@somaiya.edu', '9561023312', 'K.J Somaiya Institute Of Management'),
(36, 'Code Crafters', 'codeicon', 'Sharayu Rokde ', 'sharayu.r@somaiya.edu', '9324480813', 'K.J Somaiya Institute Of Management '),
(37, 'Data Dynamo', 'codeicon', 'Mohammed Sharique Si', 'ms5@somaiya.edu', '9136867781', 'K J Somaiya Institute of Management'),
(38, 'Data Dynamo', 'codeicon', 'Prashant Godhe', 'prashant.godhe@somaiya.edu', '9326972399', 'K J Somaiya Institute of Management'),
(39, 'Data Dynamo', 'codeicon', '', '', '', ''),
(40, 'Tech Titans', 'codeicon', 'Vijay Raghunath Sana', 'vijaysanapvs25@gmail.com', '7715987374', 'KJ Somaiya Institute Of Management'),
(41, 'Tech Titans', 'codeicon', 'Darshan Kanu Panchal', '', '8850098007', 'KJ Somaiya Institute Of Management'),
(42, 'Tech Titans', 'codeicon', 'Prachi Popat Patil', '', '9967917788', 'KJ Somaiya Institute Of Management'),
(43, 'technobeast', 'codeicon', 'Rishabh Shirke', 'rishabh.shirke@somaiya.edu', '7738062426', 'KJ Somaiya Institute of Management'),
(44, 'technobeast', 'codeicon', 'Dipti Karkera', 'dipti.karkera@somaiya.edu', '', ''),
(45, 'technobeast', 'codeicon', 'Sanyukta Chewale', '', '', ''),
(46, 'Skillful automators', 'gallery', '', '', '', ''),
(47, 'Skillful automators', 'gallery', '', '', '', ''),
(48, 'Bro Code', 'codeicon', 'Pranjal Sawant', 'pranjal.s@somaiya.edu', '7066461924', 'KJSIM'),
(49, 'Bro Code', 'codeicon', 'Pratik Sawant', 'pratik.sawant@somaiya.edu', '8451893488', 'KJSIM'),
(50, 'Bro Code', 'codeicon', 'Nilesh Kumbhar', 'nilesh.kumbhar@somaiya.edu', '9167648632', 'KJSIM'),
(51, 'CodeCrafters United', 'codeicon', 'Jayasurya Kumar', 'jayasurya.k@somaiya.edu', '81042 9075', 'KJSIM'),
(52, 'CodeCrafters United', 'codeicon', 'Mrunal Raul', 'Mrunalraul@somaiya.edu', '81049 4663', 'KJSIM'),
(53, 'CodeCrafters United', 'codeicon', 'Nidhi Chaudhari', 'nidhi.chaudhari@somaiya.edu', '83698 0776', 'KJSIM'),
(54, 'Team BOOM', 'codeicon', 'Rohit Bhavsar ', 'rohit.bhavsar@somaiya.edu', '9653229775', 'KJ somaiya '),
(55, 'Team BOOM', 'codeicon', 'Atharva Sawant ', 'atharva.sawant@somaiya.edu', '9766632773', 'KJ somaiya '),
(56, 'Team BOOM', 'codeicon', 'Maaz Naik ', 'maaz.naik@somaiya.edu', '9967295058', 'KJ somaiya '),
(57, 'Coding Triangle', 'codeicon', 'Sahil Kulkarni', 'sahilkulkarni04@gmail.com', '9372906712', 'K J Somaiya Institute of Management'),
(58, 'Coding Triangle', 'codeicon', 'Akshata Patil', 'akshata100801@gmail.com', '7715885827', 'K J Somaiya Institute of Management'),
(59, 'Coding Triangle', 'codeicon', '', '', '', ''),
(60, 'Digital Binary', 'codeicon', 'Vidhi Rane', 'vidhi.rane@somaiya.edu', '8850469231', 'K.J. Somaiya Institute of Management'),
(61, 'Digital Binary', 'codeicon', 'Anjali Verma', 'adv@somaiya.edu', '8108299233', 'K.J. Somaiya Institute of Management '),
(62, 'Digital Binary', 'codeicon', '', '', '', ''),
(63, 'Data Miners', 'codeicon', 'Shivam Gupta', 'shivamgupta17600@gmail.com', '8433794421', 'Thakur Institute of Management Studies, '),
(64, 'Data Miners', 'codeicon', '', '', '', ''),
(65, 'Data Miners', 'codeicon', '', '', '', ''),
(66, 'Winners', 'codeicon', 'Umesh Lodha', 'umesh.lodha@somaiya.edu', '9082913251', 'KJSIM'),
(67, 'Winners', 'codeicon', 'Raj Rathod', 'raj.hr@somaiya.edu', '8369594005', 'KJSIM'),
(68, 'Winners', 'codeicon', 'Abhijeet Bhagwe', '', '', 'KJSIM'),
(69, 'Code Crusaders', 'codeicon', 'Meet Bhanushali', 'mbhanushali08@gmail.com', '8097964378', 'K. J. Somaiya Institute of Management'),
(70, 'Code Crusaders', 'codeicon', 'Aaryan Satra', 'satra.aaryan@gmail.com', '9082695050', 'K. J. Somaiya Institute of Management'),
(71, 'Code Crusaders', 'codeicon', 'Raghav Pohnerkar', 'raghavpohnerkar@gmail.com', '9969240710', 'K. J. Somaiya Institute of Management'),
(72, 'Freedom', 'gallery', '', '', '', ''),
(73, 'Freedom', 'gallery', '', '', '', ''),
(74, 'Smart EYE VISION ', 'gallery', '', '', '', ''),
(75, 'Smart EYE VISION ', 'gallery', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE `event_details` (
  `event_id` int(10) NOT NULL,
  `event_name` varchar(100) DEFAULT NULL,
  `event_desc` text DEFAULT NULL,
  `Venue` varchar(100) DEFAULT NULL,
  `event_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`event_id`, `event_name`, `event_desc`, `Venue`, `event_date`) VALUES
(1, 'gallery', 'Showcase your best works related to IOT and win amazing prices from a pool of Rs 9600!', 'K J Somaiya Institute of Management, Somaiya Vidyavihar Chanakya 501', '26th October 2023'),
(2, 'roadside_revelry', 'TBD', 'K J Somaiya Institute of Management, Somaiya Vidyavihar Chanakya 501', '26th October 2023'),
(3, 'shutter_symphony', 'TBD', 'K J Somaiya Institute of Management, Somaiya Vidyavihar Chanakya 501', '26th October 2023'),
(4, 'cricket', 'Team up with your friends to engage in fun-filled cricket matches and win amazing prizes!', 'K J Somaiya Institute of Management, Somaiya Vidyavihar Ground', '26th-27th October, 2023'),
(5, 'treasure_hunt', 'Love to solve riddles? Come and join us for this game of finding treasures! ', 'K J Somaiya Institute of Management, Somaiya Vidyavihar Campus', '26th October 2023'),
(6, 'big_chess', 'AND Checkmate!! Come and compete with your friends over a friendly game of chess! ', 'K J Somaiya Institute of Management, Somaiya Vidyavihar BIG CHESS', '26th October 2023'),
(7, 'coding_decoding', 'Test your coding skills with this exciting competition!', 'Online', '26th October 2023'),
(8, 'tech_knowledge', 'Join us with your friends to compete for an amazing quiz game!', 'K J Somaiya Institute of Management, Somaiya Vidyavihar Classroom', '26th October 2023'),
(9, 'football', 'Kick off the excitement at our college fest with Rink Football! Get ready to dribble, pass, and score in this fast-paced and thrilling event. Form a team, showcase your soccer skills, and compete for glory on the rink. Whether you`re a seasoned player or a beginner, Rink Football promises intense action and a fun-filled atmosphere. Join us for a memorable experience where camaraderie and sportsmanship take center stage!', 'Basketball Court', '26th-27th October, 2023'),
(10, 'table_tennis', 'Dive into the world of fast-paced excitement with our table tennis event at ICON 23 ! Challenge your reflexes, showcase your skills, and compete against fellow enthusiasts in thrilling matches. Whether you`re a seasoned player or a beginner, this event offers a fantastic opportunity for friendly competition, sportsmanship, and fun. Join us, pick up your paddle, and get ready to serve up some unforgettable moments on the table!', 'Big Table', '26th October 2023'),
(11, 'web_design', 'Make your ideas come to life with this web design competition!', 'Classroom', '26th October 2023'),
(12, 'valorant', 'Team up with your friends and compete with some of the best players in the game!', 'Online', '26th October 2023'),
(13, 'codeicon', 'Codeicon 5.0 offers students a chance to show off their range of abilities and unleash their inner programming brilliance.', 'K J Somaiya Institute of Management, Somaiya Vidyavihar Chanakya 101', '25th October 2023'),
(14, 'spark_tank', 'Introducing the Spark Tank Challenge: where the worlds of business and technology converge. This event provides a platform for students to showcase their innovative tech business ideas and present compelling start-up pitches. It`s the perfect arena where entrepreneurial spirit and technological innovation unite, fostering an environment of creativity and forward-thinking', 'Classroom', '27th October 2023'),
(15, 'bgmi', 'TBD', 'online', '26th October 2023'),
(16, 'virtual_trading', 'TBD', 'TBD', '26th October 2023'),
(17, 'ad_mad_show', 'The Ad Mad Show is a standout event with a strong focus on technology. Here, students are tasked with advertising various products using their technological prowess to craft compelling static web pages. This unique challenge not only sharpens their marketing skills but also highlights the power of combining technology with other domains. It`s a platform where students can harness the potential of technology to create impactful advertisements, showcasing how innovation and marketing can seamlessly intersect.', 'LAB', '26th October 2023'),
(18, 'break_the_query', 'Break the Query is a competition focusing on Database Management System expertise. Students tackle questions and scenarios, honing their SQL query skills to retrieve specific data. It`s a dynamic platform for enhancing database proficiency and real-world problem-solving.', 'Classroom', '26th October 2023');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `srno` int(10) NOT NULL,
  `playername` varchar(25) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `phoneno` double NOT NULL,
  `transaction_id` varchar(35) DEFAULT NULL,
  `ordate` varchar(30) DEFAULT NULL,
  `eventname` varchar(30) DEFAULT NULL,
  `amount` float(6,2) DEFAULT NULL,
  `payment_ss` varchar(400) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`srno`, `playername`, `emailid`, `phoneno`, `transaction_id`, `ordate`, `eventname`, `amount`, `payment_ss`, `status`) VALUES
(4, 'siddharth', 'siddharth.n@somaiya.edu', 7033371401, '328318657426', '10-10-2023 08-25-55', 'table_tennis', 200.00, '2763-table_tennis-WhatsApp Image 2023-10-10 at 8.25.36 AM.jpeg', 1),
(21, 'Ankit pandey', 'ankit1488p@gmail.com', 8689916488, '328591419493', '12-10-2023 10-12-29', 'table_tennis', 200.00, '8890-table_tennis-inbound7557291620390332373.jpg', 1),
(22, 'Jay vaishnav ', 'jay.vaishnav@somaiya.edu', 9372448194, '328507546676', '12-10-2023 12-01-06', 'virtual_trading', 200.00, '4387-virtual_trading-Jay Vaishnav.jpg', 1),
(23, 'Krushal Thakur ', 'krushalthakur25@gmail.com', 9321667332, '328542227003', '12-10-2023 09-27-26', 'big_chess', 200.00, '3905-big_chess-IMG-20231012-WA0018.jpg', 1),
(24, 'Meet Parikh', 'meet8169992167@gmail.com', 9867242739, '328516619728', '12-10-2023 09-30-18', 'big_chess', 200.00, '5617-big_chess-Meet Parikh.jpg', 1),
(29, 'himanshu mukeshbhai kolad', 'himanshu.mk@somaiya.edu', 8866076692, '328665534208', '13-10-2023 03-05-12', 'big_chess', 200.00, '8880-big_chess-IMG_20231013_145733.jpg', 1),
(30, 'Manav Rupani', 'manav.rupani@somaiya.edu', 8104179620, '328658247695', '13-10-2023 03-42-20', 'tech_knowledge', 200.00, '3802-tech_knowledge-Avengers_ManavRupani.png', 1),
(31, 'HARSH TRIPATHI', 'drivemg1011@gmail.com', 9004090449, 'T2310132238582008040023', '13-10-2023 10-41-18', 'valorant', 300.00, '6118-valorant-HARSH TRIPATHI.jpg', 1),
(53, 'Asif Samani', 'samaniasif7866@gmail.com', 8879476695, 'T2310161155539774061467', '16-10-2023 11-58-43', 'bgmi', 300.00, '9723-bgmi-samani-asif.jpeg', 1),
(56, 'Harsh singh', 'harshamaheshsingh@gmail.com', 9555376716, '328959232815', '16-10-2023 07-49-22', 'cricket', 1000.00, '1675-cricket-Screenshot_2023-10-16-19-48-27-49_4336b74596784d9a2aa81f87c2016f50.jpg', 1),
(57, 'Tirth Anil Dagade ', 'tirth.dagade@somaiya.edu', 8424098595, '328922325523', '16-10-2023 08-13-43', 'table_tennis', 200.00, '4755-table_tennis-16974674109011556437017977160559.jpg', 1),
(58, 'RAHUL VATNALA', 'rahulvatnala22@gmail.com', 9372308639, 'T2310171118510723314262', '17-10-2023 11-20-35', 'cricket', 1000.00, '6109-cricket-IMG-20231017-WA0014.jpg', 1),
(59, 'Manav Hiren Rupani', 'manav.rupani@somaiya.edu', 8104179620, '329075179859', '17-10-2023 11-41-18', 'big_chess', 200.00, '4779-big_chess-Screenshot_2023-10-17-23-40-22-441_com.google.android.apps.nbu.paisa.user.jpg', 1),
(63, 'Dipankar sonawane ', 'dipankar.nay@gmail.com', 9423537341, '329196194657', '18-10-2023 05-15-42', 'football', 900.00, '7526-football-DIPANKAR SONAWANE.jpg', 1),
(65, 'Shubhvrat kulkarni', 'shubhvratkulkarni@gmail.com', 7304135570, '329124450038', '18-10-2023 06-32-04', 'coding_decoding', 100.00, '4951-coding_decoding-IMG-20231018-WA0020.jpg', 1),
(67, 'Mihir Bhosale', 'mihir.bhosale@somaiya.edu', 9833572796, 'FMPIB505986802', '18-10-2023 06-57-58', 'cricket', 1000.00, '2523-cricket-Screenshot_2023-10-18-18-57-45-51_ba41e9a642e6e0e2b03656bfbbffd6e4.jpg', 1),
(68, 'Ayan B', 'ayankvb@gmail.com', 9819041930, '329256365293', '19-10-2023 05-47-58', 'big_chess', 200.00, '9024-big_chess-331148ab-58e0-4077-9a83-33c38b3dad6c_payment_confirmation_202310292-054534.png', 1),
(69, 'Krish Patel', 'krishp1903@gmail.com', 9326098343, '365858837640', '19-10-2023 09-54-57', 'big_chess', 200.00, '2009-big_chess-Screenshot_20231019_215307_Chrome.jpg', 1),
(71, 'Aayush Bharda', 'aayushbharda999@gmail.com', 9167541096, 'FMPIB508344934', '20-10-2023 11-23-38', 'cricket', 1000.00, '9804-cricket-inbound158005965824707425.jpg', 1),
(72, 'Kavya Savla', 'kavyasavla12@gmail.com', 9028051112, '329396260288', '20-10-2023 07-45-51', 'cricket', 1000.00, '1005-cricket-IMG-20231020-WA0018.jpg', 1),
(73, 'Swaraj Madhavi', 'sarikamadhavi26@gmail.com', 9867294446, '329395100165', '20-10-2023 07-49-49', 'codeicon', 400.00, '9576-codeicon-IMG-20231020-WA0029.jpg', 1),
(74, 'Harsh Vikas Shetye', 'harsh.shetye2403@gmail.com', 8419988134, '329398716774', '20-10-2023 08-32-25', 'codeicon', 400.00, '9464-codeicon-Harsh_Vikas_Shetye.jpg', 1),
(75, 'Narendra Vispute', 'narendravispute25@gmail.com', 9665710929, '329340984258', '20-10-2023 11-12-14', 'codeicon', 400.00, '2195-codeicon-RiyaGharat.jpg', 1),
(76, 'Lucky Mosby ', 'luckymosby132@gmail.com', 9359515967, '329463139404', '21-10-2023 12-42-54', 'table_tennis', 200.00, '7408-table_tennis-Screenshot_2023-10-21-00-41-51-63_4336b74596784d9a2aa81f87c2016f50.jpg', 1),
(77, 'Rohit Ranavare', 'rashidipeshsavani@gmail.com', 9004924463, '329463196298', '21-10-2023 01-01-55', 'cricket', 1000.00, '2369-cricket-WhatsApp Image 2023-10-21 at 1.00.19 AM.jpeg', 1),
(78, 'Pranil Patil ', 'patilpranil1018@gmail.com', 7058323406, 'T2310211013181106487372', '21-10-2023 10-16-34', 'cricket', 1000.00, '6002-cricket-IMG-20231021-WA0006.jpg', 1),
(79, 'Vidhi Rane', 'vidhi.rane@somaiya.edu', 8850469231, '366062213684', '21-10-2023 01-29-27', 'gallery', 500.00, '1136-gallery-Screenshot_2023-10-21-13-28-09-31_6012fa4d4ddec268fc5c7112cbb265e7.jpg', 1),
(80, 'Akhil Padmanabhan', 'akhil07pc@gmail.com', 7977675557, '329431948264', '21-10-2023 08-26-09', 'codeicon', 400.00, '9422-codeicon-akhil_padmanabhan.jpeg', 1),
(81, 'Shubham Oza', 'shubhamoza395@gmail.com', 9967958584, '329456548227', '21-10-2023 11-29-26', 'cricket', 1000.00, '7574-cricket-ShubhamOza.jpg', 1),
(82, 'Abhimanyu jha', 'abhimanyu.jha@somaiya.edu', 8128213576, '329507325628', '22-10-2023 12-46-10', 'cricket', 1000.00, '6120-cricket-IMG-20231022-WA0002.jpg', 1),
(83, 'Lalit Ahirrao', 'ahirraolalit1@gmail.com', 9356745115, '329576833353', '22-10-2023 06-03-07', 'big_chess', 200.00, '6747-big_chess-Lalit Ahirrao Payment Receipt.jpg', 1),
(84, 'Sanika Tawate', 'sanikatawate30@gmail.com', 9987450125, '329580272523', '22-10-2023 12-42-04', 'codeicon', 400.00, '6816-codeicon-Sanika Tawate.jpeg', 1),
(87, 'Kenil Shah', 'kenils142@gmail.com', 9326658583, '366123572194', '22-10-2023 04-37-38', 'coding_decoding', 100.00, '2266-coding_decoding-WhatsApp Image 2023-10-22 at 16.37.03_ed698423.jpg', 1),
(88, 'Heramb Kulkarni', 'kulkarniheramb1101@gmail.com', 9082467836, 'T2310221744582685166030', '22-10-2023 05-49-33', 'virtual_trading', 200.00, '4304-virtual_trading-ICON_vt_HerambKulkarni_payment_ss.jpeg', 1),
(89, 'Rohan Valmiki', 'rathodrushi92@gmail.com', 9372515919, '329589094595', '22-10-2023 08-41-22', 'cricket', 1000.00, '5926-cricket-Screenshot_20231022_203842.jpg', 1),
(90, 'Aditi Gaikwad', 'aditigaikwad003@gmail.com', 8422900510, '3295326022932', '22-10-2023 08-54-51', 'codeicon', 400.00, '8589-codeicon-58c0cea3-d092-4e42-bada-a097e050e8ce_payment_confirmation_202310295-085302.png', 1),
(91, 'Avinash Banyal', 'avinash.banyal@somaiya.edu', 9324272100, '329591004229', '22-10-2023 09-29-06', 'codeicon', 400.00, '3129-codeicon-Screenshot_20231022_212732.jpg', 1),
(93, 'Rahul Jadhav ', 'rahulj5989@gmail.com', 8451810876, '329696754633', '23-10-2023 10-03-35', 'cricket', 1000.00, '5101-cricket-Adobe Scan Oct 23, 2023 (2)_1.jpg', 1),
(94, 'Abhishek Gupta ', 'asg1@somaiya.edu', 8097200198, '329613999507', '23-10-2023 11-43-55', 'big_chess', 200.00, '5269-big_chess-IMG-20231023-WA0002.jpg', 1),
(96, 'Shilpi Das', 'dasshilpi0116@gmail.com', 7558621745, '329663721268', '23-10-2023 02-16-56', 'codeicon', 400.00, '2158-codeicon-Shilpi-1.jpg', 1),
(97, 'Sahil Memon', 'sahil.memon@somaiya.edu', 8850807049, '329690821844', '23-10-2023 05-53-49', 'codeicon', 400.00, '5631-codeicon-Sahil-Memon.jpg', 1),
(98, 'Mohammed Sharique Siddiqu', 'prashant.godhe@somaiya.edu', 9136867781, '329629790765', '23-10-2023 06-25-57', 'tech_knowledge', 200.00, '7733-tech_knowledge-IMG-20231023-WA0004.jpg', 1),
(99, 'Vasu Agrawal ', 'vasuagrawal02@gmail.com', 7249046677, '329694174390', '23-10-2023 07-08-12', 'treasure_hunt', 200.00, '2844-treasure_hunt-IMG-20231023-WA0006.jpg', 1),
(100, 'Raj pawar ', 'siddharthpawar741@gmail.com', 8452071037, 'jvmfyit.rajpawar.20-1@okaxis', '23-10-2023 07-25-22', 'web_design', 200.00, '5290-web_design-Screenshot_2023-10-23-19-24-38-43_4336b74596784d9a2aa81f87c2016f50.jpg', 1),
(101, 'Aryan Raut', 'aryan.raut718@gmail.com', 9004136721, 'paid_to_soumitra-hardik', NULL, 'cricket', 1000.00, 'null', 1),
(102, 'Kushal Mhatre ', 'kushalmhatre476@gmail.com', 9819134433, 'FMPIB514192298', '23-10-2023 09-21-56', 'football', 900.00, '7367-football-Screenshot_2023-10-23-21-21-33-66_ba41e9a642e6e0e2b03656bfbbffd6e4.jpg', 1),
(103, 'Priyanka Sonawane', 'pds@somaiya.edu', 8652127934, '329699519894', '23-10-2023 09-30-02', 'break_the_query', 200.00, '6407-break_the_query-Narendra_vispute.jpg', 1),
(104, 'Priyanka Sonawane', 'pds@somaiya.edu', 8652127934, '329699702480', '23-10-2023 09-34-50', 'tech_knowledge', 200.00, '9508-tech_knowledge-Narendra_vispute_TK.jpg', 1),
(105, 'Falguni Prafulla Parab', 'falguniparab14@gmail.com', 9082289979, '329639859354', '23-10-2023 10-21-21', 'codeicon', 400.00, '9049-codeicon-Falguni Parab.jpg', 1),
(106, 'Prathamesh Kadu', 'showstoppper29@gmail.com', 9834024784, '329602156468', '23-10-2023 11-30-18', 'valorant', 300.00, '1181-valorant-IMG_2578.png', 1),
(107, 'Aseem Deshpande', 'aseem.d@somaiya.edu', 9167677453, '329641356813', '23-10-2023 11-39-29', 'valorant', 300.00, '9265-valorant-WhatsApp Image 2023-10-23 at 23.38.34_8b2d6187.jpg', 1),
(108, 'Sreekar Iyer', 'sreekariyer9653@gmail.com', 9653415923, '366235851012', '23-10-2023 11-49-20', 'codeicon', 400.00, '3267-codeicon-Sreekar Iyer.jpeg', 1),
(109, 'Sreekar Iyer', 'sreekariyer9653@gmail.com', 9653415923, '329763652832', '24-10-2023 12-12-44', 'gallery', 500.00, '2682-gallery-Sreekar Iyer.jpg', 1),
(110, 'Tamboli Md.Rehan Md.Javed', 'rehan.j.tamboli112@gmail.com', 9152132162, '329702966813', '24-10-2023 01-20-14', 'codeicon', 400.00, '4112-codeicon-Tamboli Md.Rehan Md.Javed.jpg', 1),
(111, 'Karan', 'karan.dp@somaiya.edu', 7045603496, '329708036556', '24-10-2023 01-58-16', 'codeicon', 400.00, '5998-codeicon-WhatsApp Image 2023-10-24 at 1.58.03 AM.jpeg', 1),
(112, 'Manas Jadhav', 'manas.pj@somaiya.edu', 7045315383, '329710068593', '24-10-2023 11-36-01', 'codeicon', 400.00, '5531-codeicon-manasjadhav.jpg', 1),
(113, 'Ibaad Khan ', 'ibaad.k@somaiya.edu', 7977860052, '366347368805', '24-10-2023 11-36-37', 'codeicon', 400.00, '7342-codeicon-Screenshot_20231024_113434_GPay.jpg', 1),
(114, 'Hemang Kulkarni', 'hemangckulkarni811@gmail.com', 9082472899, 'T2310241224365153702053', '24-10-2023 12-27-13', 'codeicon', 400.00, '6724-codeicon-Hemang Kulkarni_Coding Triangle.jpeg', 1),
(115, 'Atharva Apastamb', 'atharva.apastamb@gmail.com', 8779613879, '329715348404', '24-10-2023 02-01-15', 'codeicon', 400.00, '6035-codeicon-IMG_7927.png', 1),
(116, 'Vinay Verma', 'vinayvermav100@gmail.com', 8689800551, '329718597501', '24-10-2023 03-51-48', 'codeicon', 400.00, '2095-codeicon-Vinay Verma (Data Miners).jpeg', 1),
(117, 'Hardik Shetty', 'shetty.h@somaiya.edu', 7738252192, '366384186673', '24-10-2023 04-44-24', 'codeicon', 400.00, '8427-codeicon-IMG-20231024-WA0003.jpg', 1),
(118, 'Sujit Sahu', 'sujit.sahu@somaiya.edu', 7506321051, '329714079803', '24-10-2023 04-51-34', 'web_design', 200.00, '3348-web_design-receipt.jpeg', 1),
(119, 'Anuj Jaiswal', 'irfanalisk1110@gmail.com', 9594208061, '12345678', '56789', 'cricket', 1000.00, '6120-cricket-IMG-20231022-WA0002.jpg', 1),
(120, 'Mohak Manohar Sawant', 'sawantmohakmms@gmail.com', 7506173591, '329725331387', '24-10-2023 07-14-05', 'big_chess', 200.00, '6416-big_chess-da64ea1f-fe10-4e9f-bbcd-b47f78d4ecd0_1698154323%20-%20200.00%20To%20Kurt%20Dias%20on%20Google%20Pay.png', 1),
(121, 'Himanshu Koladiya', 'himanshukoladiya@gmail.com', 8866076692, '329770357793', '24-10-2023 07-39-28', 'codeicon', 400.00, '2695-codeicon-himanshu.jpg', 1),
(122, 'VIKHROLI 11', 'anishaikh2005@gmail.com', 12345678, 'paid_to_soumitra-hardik', '56789', 'cricket', 1000.00, '123456', 0),
(123, 'Kanishq M. Sajda', 'kanishq.sajda007@gmail.com', 8657389424, '329703395697', '24-10-2023 10-04-56', 'valorant', 300.00, '3126-valorant-IMG-20231024-WA0006.jpg', 0),
(124, 'Jatin Sangwa ', 'jatinsangwa12@gmail.com', 9206279337, '329777846617', '24-10-2023 11-23-04', 'valorant', 300.00, '1721-valorant-JatinSangwa.jpg', 0),
(125, 'Harshad ', 'harshadmithapara31@gmail.com', 9137736511, '329724240999', '24-10-2023 11-51-07', 'bgmi', 300.00, '2503-bgmi-harshad.jpg', 0),
(126, 'Ethan Pereira ', 'ethanpereira0919@gmail.com', 8355923876, '329827819451', '25-10-2023 09-24-14', 'valorant', 300.00, '2367-valorant-Ethan Pereira.jpg', 0),
(127, 'GANESH SATYANARAYAN GUPTA', 'ganeshgupta11184@gmail.com', 8010435174, '329828550715', '25-10-2023 09-47-24', 'big_chess', 200.00, '4074-big_chess-GANESH GUPTA bigchess.jpg', 0),
(128, 'Hemlata R Dabi ', 'hemlata.dabi@somaiya.edu', 70455, '329865616244', '25-10-2023 11-31-36', 'valorant', 300.00, '3006-valorant-Hemlata R Dabi .jpg', 0),
(129, 'Ritessh Parab', 'ritesshparab.18@gmail.com', 7715979563, '329836012546', '25-10-2023 01-11-24', 'valorant', 300.00, '4304-valorant-Screenshot_2023-10-25-13-10-28-849_com.google.android.apps.nbu.paisa.user.jpg', 0),
(130, 'Azad', 'azad.sharma@somaiya.edu', 7275624118, '329814031784', '25-10-2023 02-25-04', 'gallery', 500.00, '3209-gallery-Receipt_1698224039536.jpg', 0),
(131, '『ZeeK』', 'ks9423337@gmail.com', 8928138586, 'paid_to_aditya-hardik', '56789', 'bgmi', 300.00, 'qwert', 0),
(132, 'Dhananjay Wairkar ', 'dhananjaywairkar1302@gmail.com', 7304159572, '329897273783', '25-10-2023 03-41-08', 'ad_mad_show', 100.00, '5237-ad_mad_show-IMG_1494.png', 0),
(133, 'Nidhi Chaudhari ', 'nidhi.chaudhari@somaiya.edu', 8369807764, '366434319813', '25-10-2023 03-47-54', 'ad_mad_show', 100.00, '9823-ad_mad_show-Nidhi.jpg', 0),
(134, 'Mrunal Raul', 'mrunal.raul@somaiya.edu', 8104946635, '329841912559', '25-10-2023 04-12-02', 'ad_mad_show', 100.00, '1808-ad_mad_show-IMG-20231025-WA0003.jpg', 0),
(135, 'Manas Jadhav', 'manas.pj@somaiya.edu', 7045315383, '329850101124', '25-10-2023 04-12-13', 'ad_mad_show', 100.00, '1017-ad_mad_show-IMG-20231025-WA0004.jpg', 0),
(136, 'Mrunal Raul', 'mrunal.raul@somaiya.edu', 8104946635, '329841912559', '25-10-2023 04-14-19', 'ad_mad_show', 100.00, '1808-ad_mad_show-IMG-20231025-WA0003.jpg', 0),
(137, 'Pranjal Sawant ', 'sawantpranjal22@gmail.com', 7066461924, '366484127529', '25-10-2023 05-13-34', 'web_design', 200.00, '1399-web_design-Screenshot_2023-10-25-17-11-55-20_4336b74596784d9a2aa81f87c2016f50.jpg', 0),
(138, 'Niraj Phafat', 'niraj.phafat@somaiya.edu', 9373134521, '329853127840', '25-10-2023 05-35-45', 'bgmi', 300.00, '7217-bgmi-Payment Screenshot Xspark.jpeg', 0),
(139, 'Deepak Vijay Gupta ', 'djaiswal7860@gmail.com', 8692925767, '366428624270', '25-10-2023 06-32-36', 'gallery', 500.00, '4600-gallery-Screenshot_20231025_183131.jpg', 0),
(140, 'Anjali Dhananjay Verma', 'adv@somaiya.edu', 8108299233, '329853655908', '25-10-2023 08-14-43', 'web_design', 200.00, '4175-web_design-Anjali Verma_Digital Design Derby.jpg', 0),
(141, 'Hemang C. Kulkarni ', 'hemangckulkarni811@gmail.com', 9082472899, 'T2310252105502428276077', '25-10-2023 09-09-49', 'web_design', 200.00, '3847-web_design-Hemang Kulkarni.jpg', 0),
(142, 'Nihar Rathod', 'niharrathod30@gmail.com', 8390057981, '329862859240', '25-10-2023 09-21-43', 'bgmi', 300.00, '1582-bgmi-WhatsApp Image 2023-10-25 at 9.20.05 PM.jpeg', 0),
(143, 'Ayush Rama Raul', 'ayush.raul@somaiya.edu', 9833046734, '329856835206', '25-10-2023 09-39-04', 'bgmi', 300.00, '2704-bgmi-bgmi.jpg', 0),
(144, 'Anish Joshi', 'anishdjoshi4@gmail.com', 9820680494, '329894243588', '25-10-2023 10-29-22', 'web_design', 200.00, '3946-web_design-Screenshot_20231025-222907_GPay.jpg', 0),
(145, 'Darshan Panchal ', 'darshan.panchal@somaiya.edu', 8850098007, '329891239623', '25-10-2023 10-38-51', 'gallery', 500.00, '9542-gallery-Screenshot_2023-10-25-22-31-29-908_com.whatsapp.jpg', 0),
(146, '', '', 0, 'T2310252244040528635657', '25-10-2023 10-49-51', '', 0.00, '', 0),
(147, 'Hemang Kulkarni ', 'hemangckulkarni811@gmail.com', 9082472899, 'T2310252244040528635657', '26-10-2023 07-22-12', 'tech_knowledge', 200.00, '6507-tech_knowledge-HemangKulkarni.jpg', 0),
(148, 'Aman Dandekar', 'dandekaraman17@gmail.com', 9324069278, '329930232587', '26-10-2023 08-45-40', 'table_tennis', 200.00, '2983-table_tennis-Screenshot_20231026_084522_GPay.jpg', 0),
(149, 'Mayuresh Redkar', 'mayureshredkar98@gmail.com', 7506753137, '329962088616', '26-10-2023 08-48-55', 'big_chess', 200.00, '1633-big_chess-PHOTO-2023-10-26-08-47-26.jpg', 0),
(150, 'Nikhil', 'nikhilmalviya@gmail.com', 9004093420, '329963650674', '26-10-2023 01-28-48', 'bgmi', 300.00, '9811-bgmi-IMG_3611.png', 0),
(151, 'Sahil Pawar', 'sahil123pawar07@gmail.com', 7021216855, '329971041505', '26-10-2023 01-44-33', 'bgmi', 300.00, '7772-bgmi-IMG-20231026-WA0021.jpg', 0),
(152, '', '', 0, '', '07-11-2023 02-19-34', '', 0.00, '', 0),
(153, '', '', 0, '', '11-03-2024 03-34-20', '', 0.00, '', 0),
(154, '', '', 0, '', '01-05-2024 03-59-42', '', 0.00, '', 0),
(155, '', '', 0, '', '29-05-2024 06-38-37', '', 0.00, '', 0),
(156, '', '', 0, '', '29-05-2024 08-20-21', '', 0.00, '', 0),
(157, '', '', 0, '', '25-07-2024 12-44-20', '', 0.00, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `solo`
--

CREATE TABLE `solo` (
  `id` int(10) NOT NULL,
  `playername` varchar(20) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `alternatecontact` varchar(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `clg_name` varchar(40) NOT NULL,
  `clgproof` varchar(500) DEFAULT NULL,
  `eventname` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solo`
--

INSERT INTO `solo` (`id`, `playername`, `contact`, `alternatecontact`, `email`, `clg_name`, `clgproof`, `eventname`) VALUES
(3, 'siddharth', '7033371401', '8209809637', 'siddharth.n@somaiya.edu', 'kjsimsr', '2763-table_tennis-Siddharth.pdf', 'table_tennis'),
(10, 'Ankit pandey', '8689916488', '8689916488', 'ankit1488p@gmail.com', 'GURU NANAK INSTITUTE OF MANAGEMENT ', '8890-table_tennis-inbound8657712515214058559.pdf', 'table_tennis'),
(11, 'Jay vaishnav ', '9372448194', '7021688732', 'jay.vaishnav@somaiya.edu', 'S K Somaiya Vinay Mandir junior college', '4387-virtual_trading-Jay vaishnav ID.pdf', 'virtual_trading'),
(12, 'Krushal Thakur ', '9321667332', '9594179194', 'krushalthakur25@gmail.com', 'KJ Somaiya College of Arts and Commerce ', '3905-big_chess-Krushal ID Card.pdf', 'big_chess'),
(13, 'Meet Parikh', '9867242739', '8169388046', 'meet8169992167@gmail.com', 'Kj.Somaiya Polytechnic', '5617-big_chess-Meet Parikh .pdf', 'big_chess'),
(16, 'himanshu mukeshbhai ', '8866076692', '9998981319', 'himanshu.mk@somaiya.edu', 'K. J. Somaiya Institute of Management', '8880-big_chess-HIMANSHU.pdf', 'big_chess'),
(38, 'Tirth Anil Dagade ', '8424098595', '9619698710', 'tirth.dagade@somaiya.edu', 'Kj Somaiya arts and commerce ', '4755-table_tennis-Adobe Scan Oct 16, 2023.pdf', 'table_tennis'),
(39, 'Manav Hiren Rupani', '8104179620', '9930952429', 'manav.rupani@somaiya.edu', 'KJSCE', '4779-big_chess-ManavRupani_ID.pdf', 'big_chess'),
(41, 'Shubhvrat kulkarni', '7304135570', '7304135570', 'shubhvratkulkarni@gmail.com', 'KJ SOMAIYA INSTITUTE OF MANAGEMENT', '4951-coding_decoding-Shubhvrat.pdf', 'coding_decoding'),
(42, 'Ayan B', '9819041930', '9819041930', 'ayankvb@gmail.com', 'KJ Somaiya College of Engineering', '9024-big_chess-Ayan B.pdf', 'big_chess'),
(43, 'Krish Patel', '9326098343', '9322503298', 'krishp1903@gmail.com', 'Kj Somaiya Institute Of Technology ', '2009-big_chess-Krish Patel, Big Chess.pdf', 'big_chess'),
(44, 'Lucky Mosby ', '9359515967', '9359515967', 'luckymosby132@gmail.com', 'Datta Meghe College of engineering Airol', '7408-table_tennis-lucky mosby.pdf', 'table_tennis'),
(45, 'Lalit Ahirrao', '9356745115', '9356745115', 'ahirraolalit1@gmail.com', 'Indian Aerospace and Engineering', '6747-big_chess-Lalit Ahirrao ID.pdf', 'big_chess'),
(46, 'Kenil Shah', '9326658583', '9326685853', 'kenils142@gmail.com', 'Thakur Institute of Management Studies C', '2266-coding_decoding-Kenil_Shah.pdf', 'coding_decoding'),
(47, 'Abhishek Gupta ', '8097200198', '7208387712', 'asg1@somaiya.edu', 'SK Somaiya Vinay Mandir', '5269-big_chess-DOC-20231023-WA0001..pdf', 'big_chess'),
(48, 'Raj pawar ', '8452071037', '8452071037', 'siddharthpawar741@gmail.com', 'NCRD sterling college ', '5290-web_design-college-id.pdf', 'web_design'),
(49, 'Sujit Sahu', '7506321051', '8369814237', 'sujit.sahu@somaiya.edu', 'KJ Somaiya Institue of Management', '3348-web_design-sujit id.pdf', 'web_design'),
(50, 'Mohak Manohar Sawant', '7506173591', '7506173260', 'sawantmohakmms@gmail.com', 'Guru Nanak Institute of Management Studi', '6416-big_chess-Mohak Manohar Sawant.pdf', 'big_chess'),
(51, 'GANESH SATYANARAYAN ', '8010435174', '9920712991', 'ganeshgupta11184@gmail.com', 'INDIAN AEROSPACE AND ENGINEERING ', '4074-big_chess-GANESH.pdf', 'big_chess'),
(52, '', '', '', '', '', '5237-ad_mad_show-ID.pdf', 'ad_mad_show'),
(53, '', '', '', '', '', '9823-ad_mad_show-id.pdf', 'ad_mad_show'),
(54, '', '', '', '', '', '1808-ad_mad_show-idcard.pdf', 'ad_mad_show'),
(55, '', '', '', '', '', '1017-ad_mad_show-Manas_Jadhav_1.pdf', 'ad_mad_show'),
(56, '', '', '', '', '', '1808-ad_mad_show-idcard.pdf', 'ad_mad_show'),
(57, 'Pranjal Sawant ', '7066461924', '9518554934', 'sawantpranjal22@gmail.com', 'pranjal.s@somaiya.edu', '1399-web_design-Pranjal_ID.pdf', 'web_design'),
(58, 'Anjali Dhananjay Ver', '8108299233', '8108299233', 'adv@somaiya.edu', 'Anjali Dhananjay Verma', '4175-web_design-ANJALI VERMA_ID CARD.pdf', 'web_design'),
(59, 'Hemang C. Kulkarni ', '9082472899', '8879235361', 'hemangckulkarni811@gmail.com', 'K.J.Somaiya Institute Of Management ', '3847-web_design-Hemang C. Kulkarni.pdf', 'web_design'),
(60, 'Anish Joshi', '9820680494', '9820680494', 'anishdjoshi4@gmail.com', 'NMITD', '3946-web_design-Anish.pdf', 'web_design'),
(61, 'Aman Dandekar', '9324069278', '9324069278', 'dandekaraman17@gmail.com', 'S K SOMAIYA COLLEGE ', '2983-table_tennis-Aman Dandekar.pdf', 'table_tennis'),
(62, 'Mayuresh Redkar', '7506753137', '8830622710', 'mayureshredkar98@gmail.com', 'KJ Somaiya College of Engineering', '1633-big_chess-image.pdf', 'big_chess');

-- --------------------------------------------------------

--
-- Table structure for table `team_details`
--

CREATE TABLE `team_details` (
  `teamdetail_id` int(10) NOT NULL,
  `teamname` varchar(255) NOT NULL,
  `teamleader_name` varchar(20) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `secondarycontact` varchar(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `clg_name` varchar(40) NOT NULL,
  `clgproof` varchar(255) DEFAULT NULL,
  `game` varchar(30) DEFAULT NULL,
  `gallery_summary` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_details`
--

INSERT INTO `team_details` (`teamdetail_id`, `teamname`, `teamleader_name`, `contact`, `secondarycontact`, `email`, `clg_name`, `clgproof`, `game`, `gallery_summary`) VALUES
(14, 'Avengers', 'Manav Rupani', '8104179620', '7977937630', 'manav.rupani@somaiya.edu', 'KJSCE', '3802-tech_knowledge-Avengers ID Card.pdf', 'tech_knowledge', NULL),
(15, 'pach bullae', 'HARSH TRIPATHI', '9004090449', '7977274890', 'drivemg1011@gmail.com', 'himalayan garhwal university', '6118-valorant-harsh tripathi.pdf', 'valorant', NULL),
(16, 'Team AQUA', 'Asif Samani', '8879476695', '8169295384', 'samaniasif7866@gmail.com', 'Thakur College of Engineering', '9723-bgmi-asif-samani.pdf', 'bgmi', NULL),
(19, 'Sk super kings ', 'Harsh singh', '9555376716', '8850377964', 'harshamaheshsingh@gmail.com', 'SK SOMAIYA COLLEGE ', '1675-cricket-harsh singh.pdf', 'cricket', NULL),
(20, 'DESTROYERS', 'RAHUL VATNALA', '9372308639', '8928807309', 'rahulvatnala22@gmail.com', 'GURU NANAK COLLEGE , GTB NAGAR', '6109-cricket-RAHUL VATNALA.pdf', 'cricket', NULL),
(22, 'Galacticos', 'Dipankar sonawane ', '9423537341', '9324766171', 'dipankar.nay@gmail.com', 'kj.somaiya institute of technology ', '7526-football-Dipankar sonawane.pdf', 'football', NULL),
(25, 'Dombivli XI', 'Mihir Bhosale', '9833572796', '8452903733', 'mihir.bhosale@somaiya.edu', 'KJSIEIT', '2523-cricket-IMG-20231017-WA0009.pdf', 'cricket', NULL),
(26, 'KJSIT packers ', 'Aayush Bharda', '9167541096', '9821576021', 'aayushbharda999@gmail.com', 'KJSIT', '9804-cricket-inbound8012581774791007027.pdf', 'cricket', NULL),
(27, 'United XI', 'Kavya Savla', '9028051112', '9359304711', 'kavyasavla12@gmail.com', 'K.J. Somaiya Arts & Commerce ', '1005-cricket-somaiya tournament idcard.pdf', 'cricket', NULL),
(28, 'SuperMax', 'Swaraj Madhavi', '9867294446', '8828388979', 'sarikamadhavi26@gmail.com', 'KJ somaiya institute of management', '9576-codeicon-Shubhvrat.pdf', 'codeicon', NULL),
(29, 'Core Chip', 'Narendra Vispute', '9665710929', '9623698761', 'narendravispute25@gmail.com', 'MET Mumbai ', '2195-codeicon-NarendraVispute.pdf', 'codeicon', NULL),
(30, 'RR11', 'Rohit Ranavare', '9004924463', '7977020634', 'rashidipeshsavani@gmail.com', 'S k Somaiya College ', '2369-cricket-id.pdf', 'cricket', NULL),
(31, 'Dmce Strikers ', 'Pranil Patil ', '7058323406', '7709752609', 'patilpranil1018@gmail.com', 'Datta meghe college of engineering ', '6002-cricket-ID of Dmce cricket team.pdf', 'cricket', NULL),
(32, 'Vidhi Rane ', 'Vidhi Rane', '8850469231', '8850469231', 'vidhi.rane@somaiya.edu', 'Kj Somaiya Institute of Management ', '1136-gallery-Vidhi Rane.pdf', 'gallery', 'Smart Home is an IOT based project.\r\nMy project will work on sensors and wifi, where light and fan will be automated.'),
(33, 'random_state_42', 'Akhil Padmanabhan', '7977675557', '9152526632', 'akhil07pc@gmail.com', 'Dwarkadas J Sanghvi College Of Engineeri', '9422-codeicon-Team_ random_state_42.pdf', 'codeicon', NULL),
(34, 'Kjsit warriors', 'Shubham Oza', '9967958584', '9667958584', 'shubhamoza395@gmail.com', 'Kj Somayia Institute of Technology ', '7574-cricket-Shubham Oza.pdf', 'cricket', NULL),
(35, 'Trinity XI', 'Abhimanyu jha', '8128213576', '7525090403', 'abhimanyu.jha@somaiya.edu', 'Kjsim', '6120-cricket-abhimanyu jha_merged (1).pdf', 'cricket', NULL),
(38, 'BROgrammers', 'Harsh Vikas Shetye', '8419988134', '8419988134', 'harsh.shetye2403@gmail.com', 'DJ Sanghvi', '9464-codeicon-Harsh_Vikas_Shetye.pdf', 'codeicon', NULL),
(39, 'Sushil X1 Chembur', 'Rohan Valmiki', '9372515919', '9987377690', 'rathodrushi92@gmail.com', 'Acharya College', '5926-cricket-Rohan Valmiki.pdf', 'cricket', NULL),
(40, 'init0', 'Aditi Gaikwad', '8422900510', '9322817171', 'aditigaikwad003@gmail.com', 'Dwarkadas J. Sanghvi College of Engineer', '8589-codeicon-Aditi Gaikwad.pdf', 'codeicon', NULL),
(41, 'SQUAD', 'Avinash Banyal', '9324272100', '8104835142', 'avinash.banyal@somaiya.edu', 'KJ SOMAIYA INSTITUTE OF MANAGEMENT ', '3129-codeicon-Avinash .pdf', 'codeicon', NULL),
(42, 'Dream 11', 'Rahul Jadhav ', '8451810876', '9137944981', 'rahulj5989@gmail.com', 'Kj somiya polytechnic ', '5101-cricket-Rahul Jadhav Dream 11 .pdf', 'cricket', NULL),
(43, 'Code Crafters', 'Shilpi Das', '7558621745', '9324480813', 'dasshilpi0116@gmail.com', 'K.J Somaiya Institute Of Management ', '2158-codeicon-Shilpi.pdf', 'codeicon', NULL),
(44, 'Data Dynamo', 'Sahil Memon', '8850807049', '8424833151', 'sahil.memon@somaiya.edu', 'K J Somaiya Institute of Management ', '5631-codeicon-Sahil_Memon.pdf', 'codeicon', NULL),
(45, 'KM_Warriors', 'Mohammed Sharique Si', '9136867781', '9326972399', 'prashant.godhe@somaiya.edu', 'KJSIM', '7733-tech_knowledge-Id_somaiya.pdf', 'tech_knowledge', NULL),
(46, 'Peaky boys ', 'Vasu Agrawal ', '7249046677', '9860048400', 'vasuagrawal02@gmail.com', 'Sk Somiaya ', '2844-treasure_hunt-Vasu Agrawal.pdf', 'treasure_hunt', NULL),
(47, 'Gpt, Paste and Repeat', 'Sanika Tawate', '9969425015', '9969425015', 'sanikatawate30@gmail.com', 'DJ Sanghvi', '6816-codeicon-Sanika Tawate.pdf', 'codeicon', NULL),
(48, 'Team gold fc ', 'Kushal Mhatre ', '9819134433', '9082291519', 'kushalmhatre476@gmail.com', 'Vidya bhawan jr college ', '7367-football-team gold fc.pdf', 'football', NULL),
(49, 'Experimental Minds', 'Priyanka Sonawane', '8652127934', '9665710929', 'pds@somaiya.edu', 'K J Somaiya Institute of Management', '6407-break_the_query-Priyanka sonawane.pdf', 'break_the_query', NULL),
(50, 'Experimental Minds', 'Priyanka Sonawane', '8652127934', '9665710929', 'pds@somaiya.edu', 'K J Somaiya Institute of Management', '9508-tech_knowledge-Priyanka sonawane.pdf', 'tech_knowledge', NULL),
(51, 'Tech Titans', 'Falguni Prafulla Par', '9082289979', '7715987374', 'falguniparab14@gmail.com', 'KJ Somaiya Institute Of Management', '9049-codeicon-Tech-Titans.pdf', 'codeicon', NULL),
(52, 'Timekeepers', 'Prathamesh Kadu', '9834024784', '9867935209', 'showstoppper29@gmail.com', 'Indira College of engg and management ', '1181-valorant-Prathamesh Kadu.pdf', 'valorant', NULL),
(53, 'Team GGM', 'Aseem Deshpande', '9167677453', '8976763737', 'aseem.d@somaiya.edu', 'Sk somaiya', '9265-valorant-Aseem Deshpande.pdf', 'valorant', NULL),
(54, 'technobeast', 'Sreekar Iyer', '9653415923', '8850594534', 'sreekariyer9653@gmail.com', 'KJ Somaiya Institute of Management', '3267-codeicon-Sreekar Iyer.pdf', 'codeicon', NULL),
(55, 'Skillful automators', 'Sreekar Iyer', '9653415923', '8850594534', 'sreekariyer9653@gmail.com', 'KJ Somaiya Institute of Management', '2682-gallery-Sreekar Iyer.pdf', 'gallery', 'Automatic Plant Watering System'),
(56, 'Bro Code', 'Karan', '7045603496', '7045603496', 'karan.dp@somaiya.edu', 'KJSIM', '5998-codeicon-Team BroCode.pdf', 'codeicon', NULL),
(57, 'Ecmascripters', 'Tamboli Rehan', '9152132162', '9152132162', 'rehan.j.tamboli112@gmail.com', 'A.E Kalsekar College', '4112-codeicon-Tamboli Md.Rehan Md.Javed.pdf\r\n', 'codeicon', NULL),
(58, 'CodeCrafters United', 'Manas Jadhav', '7045315383', '81042 9075', 'manas.pj@somaiya.edu', 'KJSIM', '5531-codeicon-Manas_Jadhav.pdf', 'codeicon', NULL),
(59, 'Team BOOM', 'Ibaad Khan ', '7977860052', '7977860052', 'ibaad.k@somaiya.edu', 'KJ somaiya ', '7342-codeicon-Ibaad khan.pdf', 'codeicon', NULL),
(60, 'Coding Triangle', 'Hemang Kulkarni', '9082472899', '8879235361', 'hemangckulkarni811@gmail.com', 'K J Somaiya Institute of Management', '6724-codeicon-Hemang C. Kulkarni.pdf', 'codeicon', NULL),
(61, 'Digital Binary', 'Atharva Apastamb', '8779613879', '8850469231', 'atharva.apastamb@gmail.com', 'K.J. Somaiya Institute of Management', '6035-codeicon-Id cards digital binary.pdf', 'codeicon', NULL),
(62, 'Data Miners', 'Vinay Verma', '8689800551', '9324530064', 'vinayvermav100@gmail.com', 'Thakur Institute of Management Studies, ', '2095-codeicon-Vinay Verma.pdf', 'codeicon', NULL),
(63, 'Winners', 'Hardik Shetty', '7738252192', '8369594005', 'shetty.h@somaiya.edu', 'KJSIM', '8427-codeicon-Gallery Digital Fusion (11).pdf', 'codeicon', NULL),
(64, 'Gladiators', 'Aryan Raut', '9004136721', '9004136721', 'aryan.raut718@gmail.com', 'KJ Somaiya College of Engineering', 'ID CARRS.pdf', 'cricket', NULL),
(65, 'janvi boys', 'Anuj Jaiswal', '9594208061', '9594208061', 'noemail@get.com', 'S K Somaiya ', 'irfan ali Shaikh .pdf\r\n', 'cricket', NULL),
(66, 'Code Crusaders', 'Himanshu Koladiya', '8866076692', '8866076692', 'himanshukoladiya@gmail.com', 'K. J. Somaiya Institute of Management', '2695-codeicon-himanshu.pdf', 'codeicon', NULL),
(67, 'VIKHROLI 11', 'Anis shaikh', '9821035594', '123456', 'anishaikh2005@gmail.com', 'Somaiya Polytechnic', 'null', 'cricket', NULL),
(68, 'Tactical Tacos ', 'Kanishq M. Sajda', '8657389424', '9324179953', 'kanishq.sajda007@gmail.com', 'S.K. Somaiya ', '3126-valorant-Kanishq M. Sajda.pdf', 'valorant', NULL),
(69, 'Yolo Cupcakers', 'Jatin Sangwa ', '9206279337', '8197853190', 'jatinsangwa12@gmail.com', 'Christ University, Bangalore Central Cam', '1721-valorant-Jatin Sangwa.pdf', 'valorant', NULL),
(70, 'Destroyers eSports ', 'Harshad ', '9137736511', '9820329177', 'harshadmithapara31@gmail.com', 'Maharshi Dayanand college ', '2503-bgmi-harshad.pdf', 'bgmi', NULL),
(71, 'ASES', 'Hemlata R Dabi ', '70455 1019', '7352212222', 'hemlata.dabi@somaiya.edu', 'Kj somaiya science and commerce', '3006-valorant-Hemlata Dabi.pdf', 'valorant', NULL),
(72, 'Freedom', 'Azad', '7275624118', '9152760593', 'azad.sharma@somaiya.edu', 'Kj somaiya institute of management', '3209-gallery-IMG_20220915_132925.pdf', 'gallery', 'Automatic Pet Feeder (IOT)'),
(73, '÷ B4', '『ZeeK』', '8928138586', '8928138586', 'ks9423337@gmail.com', 'unk', 'qwert', 'bgmi', NULL),
(74, 'Xspark', 'Niraj Phafat', '9373134521', '9518907879', 'niraj.phafat@somaiya.edu', 'K  J Somaiya', '7217-bgmi-id_card_merged.pdf', 'bgmi', NULL),
(75, 'Smart EYE VISION ', 'Deepak Vijay Gupta ', '8692925767', '8692925767', 'djaiswal7860@gmail.com', 'Somaiya College ', '4600-gallery-Screenshot_2023_1025_182502 (2).pdf', 'gallery', 'Smart eye vision project which is helpful for blind people '),
(76, 'Team NotYourZone(NYZ)', 'Nihar Rathod', '8390057981', '7028164585', 'niharrathod30@gmail.com', 'TIMSCDR - Thakur Institute of Management', '1582-bgmi-Nihar.pdf', 'bgmi', NULL),
(77, 'Upside Down', 'Ayush Rama Raul', '9833046734', '8104946635', 'ayush.raul@somaiya.edu', 'K J Somaiya Polytechnic', '2704-bgmi-Ayush Raul.pdf', 'bgmi', NULL),
(78, 'Versova Vikings', 'Ethan', '8355923876', '8355923876', 'ethanpereira0919@gmail.com', 'Poona jesuit School', '2367-valorant-Ethan Pereira.pdf', 'valorant', NULL),
(79, 'W gamers', 'Ritessh Parab', '7715979563', '7715979563', 'ritesshparab.18@gmail.com', 'Hiray College', '4304-valorant-ID\'s.pdf', 'valorant', NULL),
(80, 'Tech Duo', 'Hemang Kulkarni ', '9082472899', '8879235361', 'hemangckulkarni811@gmail.com', 'K.J.Somaiya Institute Of Management ', '6507-tech_knowledge-Hemang Kulkarni.pdf', 'tech_knowledge', NULL),
(81, 'VTR', 'Nikhil', '9004093420', '8856900767', 'nikhilmalviya@gmail.com', 'K J somaiya ', '9811-bgmi-nikhil bgmi.pdf', 'bgmi', NULL),
(82, 'SSM', 'Sahil Pawar', '7021216855', '8888883138', 'sahil123pawar07@gmail.com', 'Somaiya ', '7772-bgmi-Sahil pawar bgmi team.pdf', 'bgmi', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `team_member_details`
--

CREATE TABLE `team_member_details` (
  `tmdid` int(10) NOT NULL,
  `teamname` varchar(20) NOT NULL,
  `game` varchar(30) NOT NULL,
  `Member_Name` varchar(20) NOT NULL,
  `In_game_name` varchar(30) DEFAULT NULL,
  `clg_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_member_details`
--

INSERT INTO `team_member_details` (`tmdid`, `teamname`, `game`, `Member_Name`, `In_game_name`, `clg_name`) VALUES
(45, 'Avengers', 'tech_knowledge', 'Bhavya Sura', '--', 'KJSCE'),
(46, 'pach bullae', 'valorant', 'saiashish danik', 'i miss her dad#1234', 'DY PATIL JUNIOR COLLAGE'),
(47, 'pach bullae', 'valorant', 'aarya tripathi', 'sugardaddy#Lussy', 'D.A.V PUBLIC SCHOOL'),
(48, 'pach bullae', 'valorant', 'maitreya nandeshwar', 'Rackarex#ICY', 'D.A.V PUBLIC SCHOOL'),
(49, 'pach bullae', 'valorant', 'ishwar sahu', 'Fedro#2327', 'vidyalankar school of information techno'),
(50, 'Team AQUA', 'bgmi', 'Arun Chauhan', '5113894303', 'Sm Shetty Powai'),
(51, 'Team AQUA', 'bgmi', 'Faizaan Shaikh', '5650694500', 'Sm Shetty Powai'),
(52, 'Team AQUA', 'bgmi', 'Rahul Singh', '5142124612', 'Sm Shetty Powai'),
(65, 'Sk super kings ', 'cricket', 'Vinay yadav', '--', 'Sk SOMAIYA '),
(66, 'Sk super kings ', 'cricket', 'Mayur ', '--', 'Sk somaiya '),
(67, 'Sk super kings ', 'cricket', 'Owesh ansari', '--', 'Sk somaiya'),
(68, 'Sk super kings ', 'cricket', 'Rohit yadav', '--', 'Sk somaiya'),
(69, 'Sk super kings ', 'cricket', 'Chinmay', '--', 'Sk somaiya'),
(70, 'Sk super kings ', 'cricket', 'Rohan panigrahi ', '--', 'Sk somaiya'),
(71, 'Sk super kings ', 'cricket', 'Aaditya singh', '--', 'Sk somaiya'),
(72, 'Sk super kings ', 'cricket', 'Sahil ', '--', 'Sk somaiya'),
(73, 'Sk super kings ', 'cricket', 'Nikhil', '--', 'Sk somaiya'),
(74, 'Sk super kings ', 'cricket', 'Vishant dalvi ', '--', 'Sk somaiya'),
(75, 'Sk super kings ', 'cricket', 'Hritik', '--', 'Sk somaiya'),
(76, 'Sk super kings ', 'cricket', '', '--', ''),
(77, 'DESTROYERS', 'cricket', 'ASHWIN VAGRI', '--', 'KARTHIKA HIGH SCHOOL & JR COLLEGE'),
(78, 'DESTROYERS', 'cricket', 'HARSHAD VAGRI', '--', 'MD COLLEGE , PAREL '),
(79, 'DESTROYERS', 'cricket', 'VARUN VATNALA', '--', 'KARTHIKA HIGH SCHOOL & JR COLLEGE'),
(80, 'DESTROYERS', 'cricket', 'DIVYANSH SINGH', '--', 'TOLANI COLLEGE'),
(81, 'DESTROYERS', 'cricket', 'SUFIYAN SHAIKH', '--', 'KARTHIKA HIGH SCHOOL & JR COLLEGE'),
(82, 'DESTROYERS', 'cricket', 'AYAAN SHAIKH', '--', 'RIZVI COLLEGE , BANDRA'),
(83, 'DESTROYERS', 'cricket', 'SAJID KHAN', '--', 'RIZVI COLLEGE , BANDRA'),
(84, 'DESTROYERS', 'cricket', 'ANIRUDH SETHI', '--', 'KJ SOMAIYA'),
(85, 'DESTROYERS', 'cricket', 'KARAN PARTE', '--', 'KJ SOMAIYA'),
(86, 'DESTROYERS', 'cricket', 'BILAL KHAN ', '--', 'ANJUMAN ISLAM'),
(87, 'DESTROYERS', 'cricket', 'ROHIT KUTE', '--', 'ACHARYA COLLEGE'),
(97, 'Galacticos', 'football', 'Ayush tawade ', '--', 'kj.somaiya institute of technology'),
(98, 'Galacticos', 'football', 'Sagar Shetty ', '--', 'kj.somaiya institute of technology'),
(99, 'Galacticos', 'football', 'Om konyade ', '--', 'kj.somaiya institute of technology'),
(100, 'Galacticos', 'football', 'Swayam rangoonwala ', '--', 'kj.somaiya institute of technology'),
(121, 'Dombivli XI', 'cricket', 'Ishant chaudhari ', '--', 'KJ somaiya college of Engineering '),
(122, 'Dombivli XI', 'cricket', 'Om more', '--', 'Br madhavi college Dombivli east'),
(123, 'Dombivli XI', 'cricket', 'Soham rane', '--', 'Thakur college of science and commerce'),
(124, 'Dombivli XI', 'cricket', 'Sujal palav', '--', 'Model college dombivli east'),
(125, 'Dombivli XI', 'cricket', 'Sarth chavan ', '--', 'Watmull college of Engineering '),
(126, 'Dombivli XI', 'cricket', 'Varun chaudhari ', '--', 'Model College '),
(127, 'Dombivli XI', 'cricket', 'Vaibhav chandgothiya', '--', 'Kj Somaiya college of Engineering '),
(128, 'Dombivli XI', 'cricket', 'Kamlesh Parasurama', '--', 'KJSIEIT'),
(129, 'Dombivli XI', 'cricket', 'Aryan pandey', '--', 'KJSIEIT'),
(130, 'Dombivli XI', 'cricket', 'Swaraj chede', '--', 'KJSIEIT '),
(131, 'Dombivli XI', 'cricket', 'Prathamesh lahane', '--', 'KJSIEIT'),
(132, 'Dombivli XI', 'cricket', 'Aditya Kesarkar⁩ ', '--', 'KJSIEIT '),
(133, 'KJSIT packers ', 'cricket', 'Tanish Daki', '--', 'Guru Nanak Khalsa College of Arts '),
(134, 'KJSIT packers ', 'cricket', 'Jayesh Jain', '--', 'KJSIT'),
(135, 'KJSIT packers ', 'cricket', 'Vedant Ambavne', '--', 'KJSIT'),
(136, 'KJSIT packers ', 'cricket', 'Aadit Jain', '--', 'KJSIT'),
(137, 'KJSIT packers ', 'cricket', 'Mohinuddin Amreliya', '--', 'KJSIT'),
(138, 'KJSIT packers ', 'cricket', 'Prathamesh Chouhan', '--', 'KJSIT'),
(139, 'KJSIT packers ', 'cricket', 'Nakul Bharda', '--', 'Elphinstone College '),
(140, 'KJSIT packers ', 'cricket', 'Devansh Jadhav', '--', 'KJSIT'),
(141, 'KJSIT packers ', 'cricket', 'Hamza Kapasi', '--', 'KJSIT '),
(142, 'KJSIT packers ', 'cricket', 'Krish Darji', '--', 'KJSIT'),
(143, 'KJSIT packers ', 'cricket', 'Rohan Chiplunkar ', '--', 'KJSIT '),
(144, 'KJSIT packers ', 'cricket', 'Vikas Chawla', '--', 'KJSIT '),
(145, 'United XI', 'cricket', 'Neel Savla ', '--', 'K.J. Somaiya Arts and Commerce '),
(146, 'United XI', 'cricket', 'Krinil Gada', '--', 'S.K. Somaiya'),
(147, 'United XI', 'cricket', 'Aryan Savla', '--', 'Mansi Bharat Gada Degree College'),
(148, 'United XI', 'cricket', 'Smith Gogari', '--', 'Mansi Bharat Gada Degree College '),
(149, 'United XI', 'cricket', 'Yash Patel', '--', 'Mulund College of Commerce '),
(150, 'United XI', 'cricket', 'Dhrumil Shah', '--', 'Mulund College of Commerce '),
(151, 'United XI', 'cricket', 'Rushabh Malde', '--', 'Virmata Jijabai Technological Institute '),
(152, 'United XI', 'cricket', 'Varshit Jhakariya', '--', 'Hinduja College '),
(153, 'United XI', 'cricket', 'Kush Shah ', '--', 'N.K.T.T college of Commerce '),
(154, 'United XI', 'cricket', 'Heet Maru ', '--', 'Mansi Bharat Gada Degree College '),
(155, 'United XI', 'cricket', 'Meet Gala', '--', 'Virmata Jijabai Technological Institute '),
(156, 'United XI', 'cricket', 'Deep Beraiya', '--', 'Mansi Bharat Gada Degree College '),
(157, 'RR11', 'cricket', 'Ajay Patel', '--', 'Rajiv Gandhi College'),
(158, 'RR11', 'cricket', 'farhan Asif Shaikh', '--', 'Sanpada College of commerce '),
(159, 'RR11', 'cricket', 'Suvet R Yadav', '--', 'K J Somaiya college of arts and commerce'),
(160, 'RR11', 'cricket', 'Aniket Prakash Borad', '--', 'Kirti M. Dongurse College'),
(161, 'RR11', 'cricket', 'Suraj Moolya ', '--', 'Chembur Karnatak Junior College'),
(162, 'RR11', 'cricket', 'Aditya Kamble ', '--', 'Siddharth College of commerce and Econom'),
(163, 'RR11', 'cricket', 'Arjun Elumalay', '--', 'Vidya Niketan Jr. college of commerce an'),
(164, 'RR11', 'cricket', 'Surya Ganesh', '--', 'Pune Vidyapith, Ghatkopar'),
(165, 'RR11', 'cricket', 'Parth Ranavare', '--', 'Holy Cross'),
(166, 'RR11', 'cricket', 'Manikandan Yellumala', '--', 'Guru Nanak college'),
(167, 'RR11', 'cricket', '', '--', ''),
(168, 'RR11', 'cricket', '', '--', ''),
(169, 'Dmce Strikers ', 'cricket', 'Rahul bhoir ', '--', 'Datta meghe college of engineering '),
(170, 'Dmce Strikers ', 'cricket', 'Adarsh naik', '--', 'Datta meghe college of engineering '),
(171, 'Dmce Strikers ', 'cricket', 'Atul ', '--', 'Datta meghe college of engineering '),
(172, 'Dmce Strikers ', 'cricket', 'Durgesh thorat ', '--', 'Datta meghe college of engineering '),
(173, 'Dmce Strikers ', 'cricket', 'Aditya vichare ', '--', 'Datta meghe college of engineering '),
(174, 'Dmce Strikers ', 'cricket', 'Aditya Chavan ', '--', 'Datta meghe college of engineering '),
(175, 'Dmce Strikers ', 'cricket', 'Sairaj babar ', '--', 'Datta meghe college of engineering '),
(176, 'Dmce Strikers ', 'cricket', 'Sahil patil ', '--', 'Datta meghe college of engineering '),
(177, 'Dmce Strikers ', 'cricket', 'Tanmay ', '--', 'Datta meghe college of engineering '),
(178, 'Dmce Strikers ', 'cricket', 'Saurabh mainkar ', '--', 'Datta meghe college of engineering '),
(179, 'Dmce Strikers ', 'cricket', 'Om kale ', '--', 'Datta meghe college of engineering '),
(180, 'Dmce Strikers ', 'cricket', 'Santosh ', '--', 'Datta meghe college of engineering '),
(181, 'Kjsit warriors', 'cricket', 'Rachit ', '--', 'Kj Somayia Institute of Technology '),
(182, 'Kjsit warriors', 'cricket', 'Divya', '--', 'Kj Somayia Institute of Technology '),
(183, 'Kjsit warriors', 'cricket', 'Shubham Vishwakarma ', '--', 'Kj Somayia Institute of Technology '),
(184, 'Kjsit warriors', 'cricket', 'Rishabh Gandhi', '--', 'Kj Somayia Institute of Technology '),
(185, 'Kjsit warriors', 'cricket', 'Harsh', '--', 'Kj Somayia Institute of Technology '),
(186, 'Kjsit warriors', 'cricket', 'Akshat ', '--', 'Kj Somayia Institute of Technology '),
(187, 'Kjsit warriors', 'cricket', 'Prarambh ', '--', 'Kj Somayia Institute of Technology '),
(188, 'Kjsit warriors', 'cricket', 'Ishan ', '--', 'Kj Somayia Institute of Technology '),
(189, 'Kjsit warriors', 'cricket', 'Siddesh', '--', 'Kj Somayia Institute of Technology '),
(190, 'Kjsit warriors', 'cricket', 'Rishabh Masuriya', '--', 'Kj Somayia Institute of Technology '),
(191, 'Kjsit warriors', 'cricket', 'Krushnam', '--', 'Kj Somayia Institute Of Technology '),
(192, 'Kjsit warriors', 'cricket', '', '--', ''),
(193, 'Trinity XI', 'cricket', 'Madhav', '--', 'Kjsim'),
(194, 'Trinity XI', 'cricket', 'Adwitya', '--', 'Kjsim'),
(195, 'Trinity XI', 'cricket', 'Hrishikesh ', '--', 'Kjsim'),
(196, 'Trinity XI', 'cricket', 'Aditya', '--', 'Kjsim'),
(197, 'Trinity XI', 'cricket', 'Bhavan', '--', 'Kjsim'),
(198, 'Trinity XI', 'cricket', 'Chirag', '--', 'Kjsim'),
(199, 'Trinity XI', 'cricket', 'Anshu', '--', 'Kjsim'),
(200, 'Trinity XI', 'cricket', 'Piyush', '--', 'Kjsim'),
(201, 'Trinity XI', 'cricket', 'Devyanshu', '--', 'Kjsim'),
(202, 'Trinity XI', 'cricket', 'Raj', '--', 'Kjsim'),
(203, 'Trinity XI', 'cricket', 'Atharva', '--', 'Kjsim'),
(204, 'Trinity XI', 'cricket', 'Raghav', '--', 'Kjsim'),
(205, 'Sushil X1 Chembur', 'cricket', 'Rushi Rathod ', '--', 'Bhavna Trust'),
(206, 'Sushil X1 Chembur', 'cricket', 'Pawan Bartwal ', '--', 'Bhavna Trust'),
(207, 'Sushil X1 Chembur', 'cricket', 'Jay Samudre ', '--', 'Swami College'),
(208, 'Sushil X1 Chembur', 'cricket', 'Ashutosh Sadaphule', '--', 'Acharya College'),
(209, 'Sushil X1 Chembur', 'cricket', 'Shyam verma', '--', 'Acharya college '),
(210, 'Sushil X1 Chembur', 'cricket', 'Gaurav Sonawne', '--', 'Acharya college'),
(211, 'Sushil X1 Chembur', 'cricket', 'Chanchal Singh', '--', 'Somaiya college'),
(212, 'Sushil X1 Chembur', 'cricket', 'John Chindaliya ', '--', 'Mumbai University '),
(213, 'Sushil X1 Chembur', 'cricket', 'Rohit Yadav', '--', 'Swami College'),
(214, 'Sushil X1 Chembur', 'cricket', 'Ashwin Gaikwad ', '--', 'Khalsa College'),
(215, 'Sushil X1 Chembur', 'cricket', 'Sushil Shirsat', '--', 'Bhavna Trust'),
(216, 'Sushil X1 Chembur', 'cricket', 'Vikas Ingle', '--', 'Acharya College'),
(217, 'Dream 11', 'cricket', 'Amit kalange ', '--', 'Kj somiya polytechnic '),
(218, 'Dream 11', 'cricket', 'Kumar Muthe ', '--', 'Kj somiya polytechnic '),
(219, 'Dream 11', 'cricket', 'Vikas kharat ', '--', 'Kj somiya polytechnic '),
(220, 'Dream 11', 'cricket', 'Gaurav kachare', '--', 'Kj somiya polytechnic '),
(221, 'Dream 11', 'cricket', 'Kushal Tumma ', '--', 'Kj somiya polytechnic '),
(222, 'Dream 11', 'cricket', 'Ravi Yadav ', '--', 'Kj somiya polytechnic '),
(223, 'Dream 11', 'cricket', 'Harshal Palshetkar ', '--', 'Kj somiya polytechnic '),
(224, 'Dream 11', 'cricket', 'Ajay bange ', '--', 'Kj somiya polytechnic '),
(225, 'Dream 11', 'cricket', 'Ziyad Khan ', '--', 'Kj somiya polytechnic '),
(226, 'Dream 11', 'cricket', 'Suman Mishra ', '--', 'Kj somiya polytechnic '),
(227, 'Dream 11', 'cricket', 'Vaibhav Dange ', '--', 'Kj somiya polytechnic '),
(228, 'Dream 11', 'cricket', 'Kalpesh Waingankar ', '--', 'Kj somiya polytechnic '),
(229, 'KM_Warriors', 'tech_knowledge', 'Prashant Vithal Godh', '--', 'KJSIM'),
(230, 'Peaky boys ', 'treasure_hunt', 'Samyak Bora ', '--', 'Sk Somaiya '),
(231, 'Team gold fc ', 'football', 'Shubham gaikar ', '--', 'Vidya bhawan jr college '),
(232, 'Team gold fc ', 'football', 'Bansi chavda', '--', 'Vidya bhawan jr college '),
(233, 'Team gold fc ', 'football', 'Shreyash Lavanghare ', '--', 'Vidya bhawan jr college '),
(234, 'Team gold fc ', 'football', 'Siddhant Dhadve', '--', 'Vidya bhawan jr college '),
(235, 'Team gold fc ', 'football', 'Soham wayal', '--', 'Vidya bhawan jr college '),
(236, 'Team gold fc ', 'football', 'Piyush patil ', '--', 'Vidya bhawan jr college '),
(237, 'Team gold fc ', 'football', '', '--', ''),
(238, 'Team gold fc ', 'football', '', '--', ''),
(239, 'Experimental Minds', 'break_the_query', 'Narendra Vispute', '--', 'MET mumbai'),
(240, 'Experimental Minds', 'tech_knowledge', 'Narendra Vispute', '--', 'MET mumbai'),
(241, 'Timekeepers', 'valorant', 'Atharv Goliwar', 'Sukhi Aatma #6969', 'Indira College of engg and management '),
(242, 'Timekeepers', 'valorant', 'Suyog wagh', 'Sneaky #main', 'Indira College of engg and management '),
(243, 'Timekeepers', 'valorant', 'Harsh Bhandary', 'Xiao #1505', 'Dy patil'),
(244, 'Timekeepers', 'valorant', 'Aryan Kumar', 'Detergent #0001', 'Bennett University '),
(245, 'Team GGM', 'valorant', 'Jeevan trivedi', 'Dark#BOI', 'Sk somaiya'),
(246, 'Team GGM', 'valorant', 'D Abhishek', 'NEGAT1VEKronos#0041', 'Bengaluru Dr. BR Ambedkar School of Econ'),
(247, 'Team GGM', 'valorant', 'Subid Kumar Mishra', 'Virginmojito#fresh', 'RV College Of Engineering'),
(248, 'Team GGM', 'valorant', 'Charchit Priyadarsha', 'PunisheR041100#4920', 'KIIT,Bhubaneswar'),
(249, 'Gladiators', 'cricket', 'Aryan Raut', '', 'SK Somaiya'),
(250, 'Gladiators', 'cricket', 'Soham Relekar', '', 'SK Somaiya'),
(251, 'Gladiators', 'cricket', 'Shivansh Gupta', '', 'SK Somaiya'),
(252, 'Gladiators', 'cricket', 'Ritwik Mohanty', '', 'SK Somaiya'),
(253, 'Gladiators', 'cricket', 'Shubham Gatkal', '', 'SK Somaiya'),
(254, 'Gladiators', 'cricket', 'Kunal Nayak', '', 'SK Somaiya'),
(255, 'Gladiators', 'cricket', 'Shreyas Suryawanshi', '', 'SK Somaiya'),
(256, 'Gladiators', 'cricket', 'Kshitij Chaware', '', 'SK Somaiya'),
(257, 'Gladiators', 'cricket', 'Mann Shah', '', 'SK Somaiya'),
(258, 'Gladiators', 'cricket', 'Gandharva Ugale', '', 'SK Somaiya'),
(259, 'Gladiators', 'cricket', 'Mayuresh Redkar', '', 'SK Somaiya'),
(260, 'Gladiators', 'cricket', 'Atish Shelavale', '', 'SK Somaiya'),
(261, 'VIKHROLI 11', 'cricket', 'SAGAR', '', 'VIKAS COLLEGE'),
(262, 'VIKHROLI 11', 'cricket', 'VIKAS COLLEG', '', 'VIKAS COLLEGE'),
(263, 'VIKHROLI 11', 'cricket', 'HIMANSHU', '', 'SANDESH COLLEGE'),
(264, 'VIKHROLI 11', 'cricket', 'SANDESH COLLEGE', '', 'SANDESH COLLEGE'),
(265, 'VIKHROLI 11', 'cricket', 'SHIVLING', '', 'GOVERNMENT INDUSTRIAL TRAINING INSTITUTE'),
(266, 'VIKHROLI 11', 'cricket', 'GAUTAM', '', 'SANDESH COLLEGE'),
(267, 'VIKHROLI 11', 'cricket', 'JAY', '', 'GURU GOBIND COLLEGE'),
(268, 'VIKHROLI 11', 'cricket', 'REHAN', '', 'VIKAS COLLEGE'),
(269, 'VIKHROLI 11', 'cricket', 'ATISH.', '', 'SIDDHARTH COLLEGE'),
(270, 'VIKHROLI 11', 'cricket', 'SIDDHARTH', '', 'SANDESH COLLEGE'),
(271, 'VIKHROLI 11', 'cricket', 'SIDDHU', '', 'VIKAS COLLEGE'),
(272, 'Tactical Tacos ', 'valorant', 'Arya Murkute', 'ItsArya', 'S.K. Somaiya '),
(273, 'Tactical Tacos ', 'valorant', ' Shrawan Singh ', 'EP1C ', 'S.K. Somaiya'),
(274, 'Tactical Tacos ', 'valorant', 'Neel Vadera', '50 fps', 'S.K. Somaiya '),
(275, 'Tactical Tacos ', 'valorant', 'Sarthak Wage', 'RLX OCTANE', 'K.J. Somaiya '),
(276, 'Yolo Cupcakers', 'valorant', 'Srijon Banerjee', 'Mark 42 #1620', 'Christ University, Bangalore Central Cam'),
(277, 'Yolo Cupcakers', 'valorant', 'Aaditya Shivabalan', 'IReapZz #scam', 'Ramaiah University of Applied Sciences'),
(278, 'Yolo Cupcakers', 'valorant', 'Patil Pinak Pradeep ', '巛 SK #1983', 'Mahatma School of Academics & Sports Jun'),
(279, 'Yolo Cupcakers', 'valorant', 'Charudatta Kiran Bon', 'iNSaNe ツ#2395', 'SIES Graduate School of Technology'),
(280, 'Destroyers eSports ', 'bgmi', 'Vivek', '55505020040', 'Maharshi Dayanand college'),
(281, 'Destroyers eSports ', 'bgmi', 'Amit', '55504447370', 'D.G.Ruparel college '),
(282, 'Destroyers eSports ', 'bgmi', 'Pratik', '5959442908', 'Acharya college '),
(283, 'Versova Vikings ', 'valorant', 'Kenneth', 'DosaDestroyer#anna', 'St Xavier College '),
(284, 'Versova Vikings ', 'valorant', 'Ganesh ', 'ALLMIGHT#PUSH', 'St Vincent College of commerce '),
(285, 'W gamers', 'valorant', 'Tushar Gurav', 'R41DER', 'Late bhausaheb hiray college of mca'),
(286, 'W gamers', 'valorant', 'Devank', 'deadlycarl', 'Late bhausaheb hiray college of mca'),
(287, 'W gamers', 'valorant', 'Gunjan koli', 'Bunty bakchod', 'Late bhausaheb hiray college of mca'),
(288, 'W gamers', 'valorant', 'Ashwin Bhanushali ', '240Hz with 1 kill', 'Late bhausaheb hiray college of mca'),
(289, '÷ B4', 'bgmi', 'B4丨KiDdoO', '5240205145', 'UKY'),
(290, '÷ B4', 'bgmi', 'GOJO舎快', '5240263959', 'UKY'),
(291, '÷ B4', 'bgmi', 'B4丨KRISH', '5240665016', 'UKY'),
(292, 'Xspark', 'bgmi', 'Viraj Dhila ', '55512619268', 'K  J Somaiya'),
(293, 'Xspark', 'bgmi', 'Raman A', '55542658161', 'K  J Somaiya'),
(294, 'Xspark', 'bgmi', 'Samyak Khinvasara', '5136443370', 'K  J Somaiya'),
(295, 'Team NotYourZone(NYZ', 'bgmi', 'Hardik ', '5289056953', 'VIVA COLLEGE'),
(296, 'Team NotYourZone(NYZ', 'bgmi', 'Suraj', '5771588294', 'RD National College'),
(297, 'Team NotYourZone(NYZ', 'bgmi', 'Abhishek', '51019840259', 'Viva College'),
(298, 'Upside Down', 'bgmi', 'Raj Prashant Dange', '55639128377', 'K J Somaiya Polytechnic'),
(299, 'Upside Down', 'bgmi', 'Sahil Sunil Jadhav', '5190543224', 'K J Somaiya Polytechnic'),
(300, 'Upside Down', 'bgmi', 'Pratham Mahesh Palka', '5240631446', 'K J Somaiya Polytechnic'),
(301, 'Versova Vikings', 'valorant', 'lakare ganesh', 'none', 'none'),
(302, 'Versova Vikings', 'valorant', 'arnav', 'none', 'none'),
(303, 'Versova Vikings', 'valorant', 'aaron rodriguez', 'none', 'none'),
(304, 'Versova Vikings', 'valorant', 'Kennath', 'none', 'none'),
(305, 'Tech Duo', 'tech_knowledge', 'Samihan Golwalkar', '--', 'K.J.Somaiya Institute Of Management '),
(306, 'VTR', 'bgmi', 'Kumar', '55517438384', 'KJ somaiya '),
(307, 'VTR', 'bgmi', 'Omkar', '5634793812', 'KJ somaiya '),
(308, 'VTR', 'bgmi', 'Ritik', '5113788951', 'KJ somaiya '),
(309, 'SSM', 'bgmi', 'Yash mandhare', '55556593133', 'R.J college ghatkopar '),
(310, 'SSM', 'bgmi', 'Shravan Yadav', '55621541546', 'Dr. Ambedkar college '),
(311, 'SSM', 'bgmi', 'Darshan bhojak ', '5190003291', 'Vivekanand college ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `codeicon_gallery_team_member_details`
--
ALTER TABLE `codeicon_gallery_team_member_details`
  ADD PRIMARY KEY (`tmdid`);

--
-- Indexes for table `event_details`
--
ALTER TABLE `event_details`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `solo`
--
ALTER TABLE `solo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_details`
--
ALTER TABLE `team_details`
  ADD PRIMARY KEY (`teamdetail_id`);

--
-- Indexes for table `team_member_details`
--
ALTER TABLE `team_member_details`
  ADD PRIMARY KEY (`tmdid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `codeicon_gallery_team_member_details`
--
ALTER TABLE `codeicon_gallery_team_member_details`
  MODIFY `tmdid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `event_details`
--
ALTER TABLE `event_details`
  MODIFY `event_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `srno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `solo`
--
ALTER TABLE `solo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `team_details`
--
ALTER TABLE `team_details`
  MODIFY `teamdetail_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `team_member_details`
--
ALTER TABLE `team_member_details`
  MODIFY `tmdid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=312;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

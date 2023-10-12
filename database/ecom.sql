-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 12:35 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `email`, `mobile`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '12345678910');

-- --------------------------------------------------------

--
-- Table structure for table `blog_event_clubs`
--

CREATE TABLE `blog_event_clubs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `description` text NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_event_clubs`
--

INSERT INTO `blog_event_clubs` (`id`, `title`, `image`, `description`, `type`) VALUES
(1, 'Virtual Student Showcase 2021 – Click here to Vote!', '4cfb4745cf3af79efac87880ae2157b6.png', 'Over the course of the 2020-21 academic calendar, Golden Hawks from both our Waterloo and Brantford campuses have been producing \r\nwonderful pieces of art. This gallery is a compilation of all their hard work.', 0),
(3, 'Frequently Asked Questions – September 9', 'e86fd49305eb713977d50813e863b19d.jpg', 'First Year Project Has Opened A Study Group Form! Students From All Campuses Can Fill Out The Form To Be Sorted Into Study Groups. It’s A \r\nGreat Way To Develop An Academic Support System And Make Friends! Deadline To Sign Up Is October 15th!', 2),
(4, 'Question of the Week – March 17', '53414d41b3d82b43353a770518810356.png', '									WHAT CAN THE NEST DO FOR YOU?\r\nThe real question is what can’t the Nest do! If you are a student, go check it out to see how to get involved. Join clubs, see events, and ask \r\nquestions! If you have an organization on the Nest, check out the awesome form feature on the back end. Create customized surveys, \r\nquestionnaires, and more using this one tool.									', 0),
(5, 'Question of the Week – March 3', '312ceb66686936e8a19d37ea46cf37d9.png', 'HOW DO I TAKE A VIRTUAL WALK WITH FOOT PATROL?\r\nYou can now take a virtual walk with Foot Patrol, Monday-Friday from 7pm-1am!\r\n\r\nThis service is newly available in Laurier’s SAFEHawk App under the Foot Patrol menu item. You can request to take a Virtual Walk within 2km of \r\ncampus during the times listed above and a Foot Patrol volunteer will monitor your path to make sure you arrive safely at your destination by \r\ntracking your phone location in real time. If there is an emergency you can connect directly with SCS in the app, or if anything unusual happens \r\non your walk a volunteer may give you a call to check in that you’re okay.\r\n\r\nHow can you use this service?\r\n1. Make sure you’ve updated your app recently. There may be a pop up asking you to update to new settings which you should tap to accept.\r\n2. Make sure you have a cellular connection and data on when on your walk. Turn your ringer on so you can answer a call if a volunteer tries to \r\ncheck in.\r\n3. Complete your MySafeHawk profile with your name and phone number so we can reach you.\r\n4. Tap Start Foot Patrol Virtual Walk and wait for a volunteer to accept your request. Remember this is available weekday evenings, and you \r\nmust be within a 2km range of campus!\r\n5. Set your destination on the map so we know where you’re headed.\r\n6. Start walking! (Remember to end your walk when you arrive at your destination.', 0),
(6, 'A Statement from the Students’ Union Operations Team – February 16', 'e50ae27238bd825439a5229a10a3ecca.jpg', 'Today, the Students’ Union is launching an awareness campaign to collect student testimonials that put into stark terms how punitive remote \r\nproctoring is, and how it diminishes the online learning experience.\r\n\r\nWhile the Students’ Union understands the need to mitigate incidents of academic misconduct, we firmly believe remote proctoring tools put \r\nbroad assumptions of bad behaviour ahead of good pedagogy. Wilfrid Laurier University’s recent efforts to create a common set of guidelines \r\nfor the use of remote proctoring and the continued over-reliance on Respondus Lockdown and Monitor overlooks legitimate student concerns \r\nabout privacy, access to technology, and a reliable internet connection. \r\n\r\nSince the onset of the global pandemic we’ve worked collaboratively with the University on this issue, including as participants with the Working \r\nGroup for Remote and Online Assessment. However, a tension remains between academic freedom and the student experience. We recognize \r\nthat students are not satisfied, and we want to give a voice to that frustration.\r\n\r\nBetween February 16 and March 1, the Students’ Union will be collecting student testimony that showcases concerns about Respondus \r\nLockdown Browser and Monitor. Please share your Lockdown Browser “horror story”', 0),
(7, 'EDI-SAT Student Sub-Committee Call for Student Representatives', 'bfc44876f790bdcbe9eee19fc4a9ba7e.jpg', 'The Office of the Associate Vice-President, Equity, Diversity, and Inclusion (EDI), in collaboration with Laurier’s EDI Self-Assessment Team (EDI-\r\nSAT) is putting out a call for one (1) Brantford undergraduate student representative to become an active member of the EDI-SAT Student Sub-\r\nCommittee.\r\n\r\nThe EDI-SAT drives forward activities of the two-year federal Dimensions Pilot Program at Laurier. Dimensions is jointly administered by the \r\nCanadian Institutes of Health Research, the Natural Sciences and Engineering Research Council of Canada, and the Social Sciences and \r\nHumanities Research Council. The program objective is to foster transformational change within the research community at Canadian post-\r\nsecondary institutions by identifying and eliminating obstacles and inequities.\r\n\r\nWe are hoping to attract nominees who clearly understand and support the mission and aims of the EDI-SAT, who have the necessary time and \r\nskills, and who have the capacitates to support this initiative. To ensure that potential candidates are aware of the expectations in this role on \r\nthe SPC-EDI Student Sub-Committee, a brief description of the position and associated duties and responsibilities are provided below.', 0),
(8, 'Question of the Week – February 3', 'ae14ba19c1399ea52b73407697316b64.png', '									WHAT IS THE NEST?\r\nThe Nest is your gateway to discovering all?the ways the Wilfrid Laurier University Students’ Union can enrich your co-curricular experience! \r\nLooking to learn more about student organizations,?volunteer opportunities, or what events are happening with in the Students’ Union and \r\nClubs and Associations? The Nest is the perfect spot to find?all?this information, and more!\r\n\r\nWe encourage students of all years to see what Your Students’ Union has to offer. So,?when you are ready to explore what is happening beyond \r\nyour classrooms,?take a look?at our student organizations and upcoming events, discover how?you can get involved, and make a positive \r\nimpact \r\non your community! \r\n\r\nFrom personal passions and social action-based clubs, to community-based interests and academic themed initiatives, we are confident that \r\nthere will be something that sparks your interest!\r\n\r\nHead over to laurierstudentsunion.presence.io to begin exploring The Nest!									', 0),
(9, 'A Statement from the Students’ Union Operations Team: Welcome President-Elect Pegah Jamalof', '90034d257a0dd74e872d05d01210616d.jpg', 'The Students’ Union is pleased to welcome President-Elect Pegah Jamalof.\r\n\r\nAs we continue to navigate an unprecedented academic year we were grateful for a spirited campaign to determine who will serve as the 2021-\r\n2022 Students’ Union President & Chief Executive Officer.\r\n\r\nWe offer a warm welcome to Pegah Jamalof as she embarks on an intensive transition period ahead of formally commencing her term on May 1, \r\n2021. Pegah’s emphasis on mental health and student wellness will remain especially relevant as we hopefully navigate a transition back to life \r\non campus next year.\r\n\r\nRepresenting the undergraduate student population is a great privilege that comes with great responsibility. Strong leadership requires \r\ndiscernment, but also humility and a willingness to learn from mistakes. As Pegah has acknowledged, her celebration on results night did not \r\nmeet the standard we are committed to in the midst of a province-wide shutdown. As a community, we must also recognize that constructive \r\naccountability is more valuable than anonymous condemnation.\r\n\r\nWe look forward to commencing the informative and rigorous transition process with Pegah and her incoming team. Thank you to everyone \r\nwho supported the elections process this year, we sincerely appreciate your engagement.', 0),
(10, 'Letter from the President re: Midterm Requirements #2', 'af66bf07cec54556cfae17365de8e42e.jpg', 'Undergraduate Students,\r\n\r\nTo continue our advocacy on behalf of undergraduate students, myself and the Executive Director met with a group of administrators this \r\nmorning (October 29th) that included Laurier’s Provost and Vice-President: Academic Tony Vannelli, Vice-President: Student Affairs Ivan Joseph, \r\nand senior leaders in their offices. The University has committed to meet with faculties and discuss their midterm exam guidelines. The \r\nStudents’ Union will be meeting regularly with this group to communicate our continued objection to many of these unreasonable requirements \r\nand the use of Respondus Lockdown remote proctoring. We will ask that the University develop an official channel for students to register their \r\nconcerns and reintroduce course evaluations. The challenge we are facing is that faculty do have the academic freedom to design midterms and \r\nexams as they see fit. However, we believe that many of the instructions and restrictions communicated since the imposition of remote learning \r\ncreate inequities and are overly punitive.', 0),
(11, 'Frequently Asked Questions – September 9', '0efbd95771be9964b92f6f44a6313ebd.png', '									Frequently Asked Questions – September 9									', 0),
(12, 'NEW First Year Study Groups!', '9ca9af28f489203cac8502514b7b48db.jpg', 'First Year Project has opened a study group form! Students from all campuses can fill out the form to be sorted into study groups. It’s a great way \r\nto develop an academic support system and make friends! Deadline to sign up is October 15th!', 0),
(14, 'Frequently Asked Questions – September 9', '5b749d5e1092366c88b58d58c136b6b8.jpg', 'First Year Project Has Opened A Study Group Form! Students From All Campuses Can Fill Out The Form To Be Sorted Into Study Groups. It’s A \r\nGreat Way To Develop An Academic Support System And Make Friends! Deadline To Sign Up Is October 15th!', 0),
(17, 'NEW First Year Study Groups!', '72fab88c80ca2d1608477c17a21a5354.png', 'Frequently Asked Questions – September 9', 2),
(18, 'Letter From The President Re: Midterm Requirements #2', '9442319887103a26e811f87c25152ab5.jpg', '									WHAT CAN THE NEST DO FOR YOU? The Real Question Is What Can’t The Nest Do! If You Are A Student, \r\nGo Check It Out To See How To Get \r\nInvolved. Join Clubs, See Events, And Ask Questions! If You Have An Organization On The Nest, Check Out The Awesome Form Feature On The \r\nBack End. Create Customized Surveys, Questionnaires, And More Using This One Tool.									', 2),
(19, 'Zoom Instructions', '95e1a5df512233ad6b06f354f605548b.jpg', 'Orientation Week is virtual and will be accessible via Zoom and on the Students’ Union Instagram.\r\n\r\nNOTE: To access most sessions, you must login to Zoom using your Laurier Single Sign-On (SSO) credentials.\r\nThis will be your @mylaurier email address without the @mylaurier.ca (i.e. smit1234) and your corresponding password.\r\nFor instructions on how to login to Zoom using your Laurier SSO credentials, click HERE.\r\n*All Live O-Week Events are in Eastern Daylight Time so you may want to set up your account to this timezone to avoid any issues.  Most O-Week \r\nevents will be recorded and made accessible for students post-event.*', 1),
(20, 'Bob Ross Paint Night: Thursday', '4f21f5b0c5d316bc11ea052a2c5d5351.png', 'Learn how to make a Macramé Plant hanger from start to finish. *Please note, during the Macramé event, there will be a live chat feature; the \r\nrecorded video will be available after this date*\r\n\r\nIf you are looking to purchase your own materials you need at least 40 feet of cotton rope (3 strand cotton rope is preferred but any cotton rope \r\nwill work (single strand, braided, etc.) It just needs to be about 5mm in thickness. They will also need a hoop of some sort, a gold hoop or wood \r\nhoop.', 1),
(21, 'Gold Novas', '7acff2a64937ccb452ee2191c2a44731.jpg', 'Having been sent from the sun and on the quest to claim O-Week victory, the Gold Novas are bright, loud and full of energy.\r\n\r\nTheir ability to harness the sun’s energy makes them an unbeatable force. The summer heat is the Gold Nova’s best friend because with it, the \r\nNovas are able to scorch the competition.\r\n\r\nSo you’d better put your sunglasses on because you are about to be blinded by the Gold Novas!', 1),
(22, 'Blue Mystics', '8d9a7da89f6ccf3599f28d011b64028a.jpg', 'The origin of the Mystics is unknown to all scholars, that’s what makes them such a force to be reckoned with.\r\n\r\nUsing their magical abilities and connection to nature, one is never quite sure what the Mystics will pull out of their bag of tricks.\r\n\r\nOne thing is for sure, with the help of their loyal raven sidekick, the Mystics thrive on high energy situations and are ready to adapt in order to \r\nbeat any challenges that will come their way', 1),
(23, 'Red Ridgebacks', 'e7451fd11cebc3111986703e0c96adee.jpg', 'A red ridgeback is the most FIRE character around. Rebranding the classic knight we ride on dragons ? and conquer our enemies from the sky.\r\n\r\nUsing fire ? as our best friend we are noble and honourable but if you cross us there will be consequences. We vanquish anyone in our way \r\nwith the snap of our fingers and protect our friends at all costs.\r\n\r\nUnited as a team, the Ridgebacks can do anything and are ultimately unstoppable.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `reg_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `age`, `country`, `reg_date_time`) VALUES
(9, 'Alifur ', 'Rahman', 'alifurcoder@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'male', '18+', 'Bangladesh', '2021-04-12 14:41:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_event_clubs`
--
ALTER TABLE `blog_event_clubs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog_event_clubs`
--
ALTER TABLE `blog_event_clubs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

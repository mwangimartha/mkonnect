-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 03, 2017 at 05:09 PM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mkonnect_m_konnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `current_applications`
--

CREATE TABLE IF NOT EXISTS `current_applications` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `letter` varchar(3000) NOT NULL,
  `cv_name` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `Date of APPLICATION` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `current_applications`
--

INSERT INTO `current_applications` (`id`, `letter`, `cv_name`, `user_id`, `Date of APPLICATION`) VALUES
(4, '<p>Wycliffe Momanyi</p>\n<p><strong>Contact: </strong>+254 729643651</p>\n<p>E-mail:&nbsp; wickymoms@gmail.com</p>\n<p>21<sup>th </sup>January 2017</p>\n<p>Dear Sir/Madam, Re: <strong>APPLICATION FOR SALES INTERN</strong></p>\n<p>I am applying for the above post following your recent advert. I hereby tender my application letter for the above mention post. I know I have all what it takes to serve you diligently considering my expertise in different fields. I have worked in different capacities as a credible person.</p>\n<p>Primarily, I religiously adhere to the stipulated codes and ethics of my profession. It from this point of view that I find myself being in tandem with the organizational mission and visions which is always geared towards productivity. On the issue of relationship with the staff, I know I am a receptive teacher who would accommodate each and every person&rsquo;s view. Through their opinions and views, I will be able to assess myself and obliterate my weakness and on the other side build on my strengths.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I will kindly appreciate your consideration in this organization since I am a zealous person and focused person. Thanking you in advance.&nbsp;</p>\n<p>Yours Sincerely,</p>\n<p>Wycliffe Momanyi</p>\n<p>&nbsp;</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>', 0, 51, '2017-02-04 09:56:51');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE IF NOT EXISTS `employer` (
  `employer_id` int(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`employer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`employer_id`, `email`, `password`) VALUES
(15, 'rufusngash@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(16, 'rufusnga@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(17, 'kombzs@gmail.com', '2cace034d5f9a475450941b62a994d05'),
(18, 'chepchirchirdiana@gmail.com', 'a10fef0097316e5aa1a3da19b8bdce8d');

-- --------------------------------------------------------

--
-- Table structure for table `employer_jobs`
--

CREATE TABLE IF NOT EXISTS `employer_jobs` (
  `job_title` varchar(20) NOT NULL,
  `company_name` varchar(20) NOT NULL,
  `job_description` varchar(3000) NOT NULL,
  `job_category` varchar(50) NOT NULL,
  `job_experience` int(20) NOT NULL,
  `company_website` varchar(20) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Job Post Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `employer_jobs`
--

INSERT INTO `employer_jobs` (`job_title`, `company_name`, `job_description`, `job_category`, `job_experience`, `company_website`, `employer_id`, `id`, `Job Post Date`) VALUES
('Digital Marketing', 'UXT', '<h4>Rewarding Career Opportunity at User Experience Technologies Ltd. </h4>\r\n<h4>RECRUITMENT OF A DIGITAL MARKETING EXECUTIVE</h4>\r\n<p>UXT is an innovative technology value-added service provider that addresses challenges within the local communities. This is achieved through delivery of innovative state of the art technology solutions through application development, mobile based solutions and comprehensive research and development. The organization&rsquo;s commitment is to provide the highest standards and quality products that deliver maximum performance and reliability. In pursuit of these objectives, the we invite dynamic and innovative candidates to submit their applications for the position of a Digital Marketing Executive.</p>\r\n<h4><strong>Digital Marketing Executive &ndash; VIC/DME/11</strong></h4>\r\n<p>Reporting to the Business Development Manager, the Digital Marketing Executive will be responsible for creating brand awareness on social media sites and generating sales. The job holder will specifically be required to:</p>\r\n<ul>\r\n<li>Contribute to social media engagement and brand awareness campaigns.</li>\r\n<li>Use web analytics software to monitor the performance of our websites and make recommendations for improvement.</li>\r\n<li>Assist the Marketing team with their day to day activities and liaise closely with marketing executives to ensure pleasant client experience.</li>\r\n<li>Ensure regular client communication- handle questions and keep them updated on their enquiries.</li>\r\n<li>Communicate internally important feedback from customers.</li>\r\n<li>Establish and set KPI&rsquo;s and revenue targets from digital marketing activities.</li>\r\n<li>Review the marketing material of the organization to ensure that visual impact is in line with the company&rsquo;s branding guidelines.</li>\r\n<li>Identify opportunities for new business within the market.</li>\r\n<li>Develop and integrate content marketing strategies.</li>\r\n<li>Keep up to date with current digital trends, manage the contact database and assist with lead generation activities.</li>\r\n<li>Undertake any other tasks as pertains to the position.</li>\r\n</ul>\r\n<p><strong>Qualifications and Skills </strong></p>\r\n<ul>\r\n<li>A business related degree.</li>\r\n<li>At least 1 year experience in digital marketing.</li>\r\n<li>Experience in graphic design preferred but not essential.</li>\r\n<li>Creative, excellent planning and organizational skills.</li>\r\n<li>Self &ndash; motivated, Confident and outgoing personality.</li>\r\n<li>Ability to multi-task and get things done to completion.</li>\r\n<li>A team player with good leadership skills.</li>\r\n<li>Good interpersonal and communication skills.</li>\r\n<li>&nbsp;Excellent networking and prospecting skills.</li>\r\n<li>&nbsp;Strong social media Account Management skills.</li>\r\n</ul>\r\n<p>If you fit the above profiles and are interested in this challenging opportunity, please submit your application with a detailed Curriculum Vita', 'Marketing', 1, 'www.uxt.co.ke', 37, 10, '2017-01-20 13:49:53'),
('Sales and marketing ', 'UXT', '<h4><strong>Description</strong></h4>\r\n<p>UXT is a fast-growing organisations in the technology and innovation industry. We are looking for a Sales Intern to join our young and dynamic team. We are looking for an ambitious, outgoing and determined intern to join our team. No previous experience is required, but willingness to learn about the sector will be critical. The main duties are, but not limited&nbsp;</p>\r\n<ul>\r\n<li>Inbound marketing</li>\r\n<li>Generating new leads</li>\r\n<li>Meeting potential clients</li>\r\n<li>Building a contact database.</li>\r\n<li>Sourcing contractors.</li>\r\n<li>Liaising with our partners.</li>\r\n</ul>\r\n<h4>Requirements:</h4>\r\n<ul>\r\n<li>Organized, self-starter and friendly, tactful, patient and good with people.</li>\r\n<li>Keen to use your initiative to deal intelligently with a wide variety of situations and problems.</li>\r\n<li>Able to cope under pressure, work to deadlines and multitask effectively.</li>\r\n<li>Strong Sales and Negotiation skills are needed.</li>\r\n</ul>\r\n<h4>Conditions:</h4>\r\n<ul>\r\n<li>Hours 35 - 40 per week</li>\r\n<li>3 months internship programme.</li>\r\n</ul>', 'Sales/Business Development', 0, 'www.uxt.co.ke', 0, 12, '2017-01-20 13:29:27'),
('Social Media Executi', 'Tuskys', '<img src="https://mkonnect.co.ke/img/social_media.jpg" class="img-responsive">', 'Marketing', 0, 'www.tuskys.com', 0, 13, '2017-01-23 18:18:35');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `path` varchar(500) NOT NULL,
  `Date of upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `path`, `Date of upload`, `user_id`) VALUES
(21, 'Wycliffe Momanyi CV.docx', 'uploads/.Wycliffe Momanyi CV.docx', '2017-01-21 07:27:09', 51),
(13, 'CV2.docx', 'uploads/.CV2.docx', '2017-01-19 10:02:25', 47),
(22, 'Wycliffe Momanyi CV.docx', 'uploads/.Wycliffe Momanyi CV.docx', '2017-01-21 07:56:54', 51);

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE IF NOT EXISTS `job_applications` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) NOT NULL,
  `category_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`id`, `user_id`, `category_id`) VALUES
(1, 19, 11),
(2, 20, 8),
(3, 21, 0),
(4, 21, 0),
(5, 20, 1),
(6, 20, 13),
(7, 20, 7),
(8, 23, 0),
(9, 20, 17),
(10, 37, 1),
(11, 37, 5),
(12, 37, 8),
(13, 37, 3),
(14, 37, 9),
(15, 37, 20),
(16, 40, 1),
(17, 46, 20),
(18, 47, 1),
(19, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE IF NOT EXISTS `job_category` (
  `id` int(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`id`, `category`) VALUES
(1, 'Accounting & Auditing\r'),
(2, 'Executive/Top Management\r'),
(3, 'Creatives (Art,Design,Fashion)\r'),
(4, 'Customer Service & Customer Support\r'),
(5, 'Education & Training 69\r'),
(6, 'Engineering/Mechanics/Construction\r'),
(7, 'Farming & Agriculture\r'),
(8, 'Government\r'),
(9, 'Healthcare & Pharmaceutical\r'),
(10, 'Human Resources & Recruitment\r'),
(11, 'Insurance\r'),
(12, 'IT & Telecoms\r'),
(13, 'Legal\r'),
(14, 'Manufacturing/Production\r'),
(15, 'Marketing, Communications & PR\r'),
(16, 'Mining & Natural Resources\r'),
(17, 'NGO, Community & Social Devt\r'),
(18, 'Administration & Office Support\r'),
(19, 'Project / Programme Management\r'),
(20, 'Research, Quality Control/ Quality Assurance\r'),
(21, 'Retail\r'),
(22, 'Sales/Business Development\r'),
(23, 'Security\r'),
(24, 'Strategy & Consulting\r'),
(25, 'Tourism & Travel\r'),
(26, 'Trades & Services\r'),
(27, 'Transport , Logistics, Procurement\r'),
(28, 'Real Estate\r'),
(29, 'Hospitality/Leisure/Travel\r'),
(30, 'Others\r'),
(31, '');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `fullname` varchar(50) NOT NULL,
  `phone_number` int(50) NOT NULL,
  `edu_level` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `Profile_Update_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`fullname`, `phone_number`, `edu_level`, `nationality`, `experience`, `user_id`, `Profile_Update_Date`, `id`) VALUES
('ramsey', 724816442, 'Degree', 'Kenyan', '5', 37, '2017-01-19 07:16:15', 8),
('Rufus Nganga', 724816442, 'Degree', 'Kenyan', '5', 15033, '2017-01-19 07:16:15', 9),
('Duncan komu', 725603562, 'Degree', 'Kenyan', '1', 46, '2017-01-19 07:16:15', 15),
('Wycliffe Momanyi', 729643651, 'Certificate', 'Kenyan', '2', 51, '2017-01-21 07:23:18', 19),
('junior', 712345678, 'Diploma', 'Kenyan', '2', 57, '2017-03-20 09:05:07', 20),
('john', 776543210, 'Degree', 'Kenyan', '4', 58, '2017-03-20 13:39:48', 21);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) NOT NULL,
  `skill` varchar(50) NOT NULL,
  `Update_Skill_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Date of registration` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `passreset` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `Date of registration`, `passreset`) VALUES
(44, 'george.karanja@riara', '39f351b067db545ff7d10ca69d84f099', '2017-01-19 06:53:34', 0),
(45, 'george.karanja@riara', '39f351b067db545ff7d10ca69d84f099', '2017-01-19 06:53:34', 0),
(46, 'dankomoh@gmail.com', 'd75052385bd2a61440efa14e1d195192', '2017-01-19 06:53:34', 0),
(47, 'rufusngash@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2017-01-19 07:22:06', 0),
(48, 'moriasidennnis@gmail', '81dc9bdb52d04dc20036dbd8313ed055', '2017-01-19 08:50:58', 0),
(49, 'james@mail.comasd', 'e10adc3949ba59abbe56e057f20f883e', '2017-01-19 13:14:05', 0),
(50, 'bonnyngangash@gmail.', '57bc08e862e9504f25e9d47a1ebaa42f', '2017-01-20 15:00:44', 0),
(51, 'wickymoms@gmail.com', '5beb8c3b39c9de89af2b6d1ac08fadf7', '2017-01-21 07:22:26', 0),
(52, 'josephongoma315@gmai', '3fc0a7acf087f549ac2b266baf94b8b1', '2017-02-09 10:00:18', 0),
(53, 'hwachira@uxt.co.ke', '843649c5f68829fa5128458900982d1b', '2017-03-09 08:57:04', 0),
(54, 'viscarattachehr@gmai', '76205b59404e0cf9f1b353d0ec4efc5b', '2017-03-10 13:40:26', 0),
(55, 'viscarattachehr@gmai', '76205b59404e0cf9f1b353d0ec4efc5b', '2017-03-10 13:40:39', 0),
(56, 'kombzs@gmail.com', 'e565cf18efd225c7c1477cab100c332c', '2017-03-13 06:29:52', 0),
(57, 'junior@yahoo.com', '1fc4d1dde9068b15e79f67b49494d88f', '2017-03-20 09:04:05', 0),
(58, 'john@mail.com', '432f45b44c432414d2f97df0e5743818', '2017-03-20 13:38:47', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

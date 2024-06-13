-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 30, 2024 at 07:03 AM
-- Server version: 10.5.24-MariaDB
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agnjobba_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant_education`
--

CREATE TABLE `applicant_education` (
  `educ_id` int(11) NOT NULL,
  `candidate_id` text NOT NULL,
  `degree_name` text NOT NULL,
  `school_college` text NOT NULL,
  `st_year` text NOT NULL,
  `pass_year` text NOT NULL,
  `add_datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicant_education`
--

INSERT INTO `applicant_education` (`educ_id`, `candidate_id`, `degree_name`, `school_college`, `st_year`, `pass_year`, `add_datetime`) VALUES
(7, '3', 'Matric Science', 'Sacred Angels School', '2013-01-01', '2015-01-01', '2024-04-21 10:34:53'),
(14, '60', 'Matric', 'Sacred Angel', '2013-01-01', '2015-01-01', '2024-04-23 08:46:10'),
(16, '58', 'MAtric', 'Board of Intermediate & Secondary Education Faisalabad', '2017-01-01', '2019-01-01', '2024-04-23 09:02:34'),
(17, '58', 'I.Com', 'Board of Intermediate & Secondary Education Faisalabad', '2019-04-01', '2021-01-01', '2024-04-23 09:02:34'),
(18, '58', 'B.Com', 'Govt. College University Faisalabad.', '2021-01-01', '2023-01-01', '2024-04-23 09:02:34');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_experience`
--

CREATE TABLE `applicant_experience` (
  `cand_exp_id` int(11) NOT NULL,
  `candidate_id` text NOT NULL,
  `exp_details` text NOT NULL,
  `comp_name` text NOT NULL,
  `exp_duration` text NOT NULL,
  `from_date` text NOT NULL,
  `to_date` text NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicant_experience`
--

INSERT INTO `applicant_experience` (`cand_exp_id`, `candidate_id`, `exp_details`, `comp_name`, `exp_duration`, `from_date`, `to_date`, `added_date`) VALUES
(1, '49', 'Production Manager ', 'Shahkam industries ', '9', '2014-03-20', '2022-03-20', '2024-03-19 23:19:37'),
(2, '50', 'Laravel Developer', 'Cybex', '2', '2022-03-20', '2024-03-20', '2024-03-20 11:43:36'),
(3, '51', 'Laravel Developer', 'Cybex', '2', '2022-03-20', '2024-03-20', '2024-03-20 11:50:53'),
(4, '52', 'Laravel Developer', 'Cybex', '2', '2022-03-20', '2024-03-20', '2024-03-20 11:54:50'),
(5, '53', 'Wordpress ', 'Coder Cousins', '3', '2021-02-25', '2024-02-05', '2024-03-20 11:55:43'),
(6, '53', 'Digital Marketer', 'Cybex', '1', '2022-02-05', '2023-02-05', '2024-03-20 11:55:43'),
(7, '54', 'Accounts ', 'Dairylac ', '10', '2023-04-01', '2024-03-20', '2024-03-20 16:31:31'),
(8, '55', 'HR Officer & Admin ', 'Maymar Housing Services Pvt LTD ', '2', '2022-09-26', '2024-03-25', '2024-03-25 00:45:17'),
(9, '56', 'Sales Manager ', 'Honda Showroom', '1 year', '2023-03-01', '2024-03-28', '2024-03-28 09:24:30'),
(10, '56', 'BCE', 'Ufone', '1 year', '2021-12-07', '2023-02-07', '2024-03-28 09:24:30'),
(11, '56', 'CSR', 'Ufone', '9 year', '2012-02-16', '2021-05-30', '2024-03-28 09:24:30'),
(12, '57', 'HR Management ', 'Anas Akbar', 'Fresher', '2023-07-21', '2023-09-21', '2024-03-28 19:06:13'),
(14, '59', 'BDO', 'Bank al habib', '4', '2020-11-11', '2024-03-30', '2024-03-30 05:26:09'),
(24, '3', 'Laravel Developer', 'Cybex Institute', '2', '2022-01-01', '2024-01-01', '2024-04-21 10:34:53'),
(29, '58', 'Chaser', 'Chicken shop ', '1 year', '2023-01-01', '2024-03-29', '2024-04-23 09:02:34');

-- --------------------------------------------------------

--
-- Table structure for table `candidates_info`
--

CREATE TABLE `candidates_info` (
  `candidate_id` int(11) NOT NULL,
  `candidate_name` text NOT NULL,
  `candidate_email` text NOT NULL,
  `candidate_phone` text NOT NULL,
  `candidate_age` text NOT NULL,
  `candidate_location` text NOT NULL,
  `candidate_cnic` text NOT NULL,
  `candidate_education` text NOT NULL,
  `apply_for` text NOT NULL,
  `department` text NOT NULL,
  `exp_duration` text NOT NULL,
  `candidate_experience` text NOT NULL,
  `candidate_resume` text NOT NULL,
  `new_resume` text NOT NULL,
  `candidate_agreement` text NOT NULL,
  `status` text NOT NULL DEFAULT '0',
  `appointed` text NOT NULL,
  `email_2` text NOT NULL,
  `phone_no2` text NOT NULL,
  `summary` text NOT NULL,
  `exp_description` text NOT NULL,
  `ref_name` text DEFAULT NULL,
  `ref_contact` text DEFAULT NULL,
  `ref_designation` text DEFAULT NULL,
  `user_id` text NOT NULL,
  `added_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidates_info`
--

INSERT INTO `candidates_info` (`candidate_id`, `candidate_name`, `candidate_email`, `candidate_phone`, `candidate_age`, `candidate_location`, `candidate_cnic`, `candidate_education`, `apply_for`, `department`, `exp_duration`, `candidate_experience`, `candidate_resume`, `new_resume`, `candidate_agreement`, `status`, `appointed`, `email_2`, `phone_no2`, `summary`, `exp_description`, `ref_name`, `ref_contact`, `ref_designation`, `user_id`, `added_time`) VALUES
(2, 'MUHAMMAD AYAZ', 'ayazt214@gmail.com', '0302-6303100', '34', 'Faisalabad', '33102-2843958-3', 'B.COM', 'EXPORT DOCUMENTATION MANAGER', '5', '8', 'Export documentation, Shipment Booking request , PSW for Financial Instrument , Shipping documents , dealing with bank , shipping logistics companies & custom dealing with agent ( Term of Payment: Advance & D/A  & Term of Delivery CIF & FOB.)', '156962547465ce0fa078820.pdf', 'Resume_6626465e0108c.pdf', 'accept', '0', '0', '', '', '', '', '', '', '', '', '2024-02-15 13:20:32'),
(3, 'MUHAMMAD AWAIS ', 'miana6335@gmail.com', '0300-0908757', '25', 'Faisalabad', '33100-6966250-1', 'M.SC(Computer Science)', 'HR OFFICER', '2', '6', 'Currently Working in Albeen Textiles Khurrianwala as H.R Officer since 2021', '94938767765cf5b7c04910.pdf', 'Resume_6624ebce1ef72.pdf', 'accept', '0', '', 'Miana6335@gmail.com', '0300-0908757', 'Laravel developers are seasoned professional\\\\\\\'s adept at leveraging the Laravel framework to build powerful web applications. Their expertise in PHP and Laravel\\\\\\\'s features enables them to create efficient, scalable solutions. They excel in optimizing code and streamlining processes for optimal performance.', 'Laravel developers bring a wealth of expertise to the table, navigating the intricate landscape of web development with finesse. Proficient in PHP, they harness the power of Laravel\\\\\\\'s elegant syntax and robust features to craft dynamic, scalable applications. ', '', '', '', '', '2024-02-16 12:56:28'),
(4, 'Rana faisal', 'rf29031990@gmail.com', '03005241305', '33', 'Faisalabad', '3310220965571', 'Graduation ', 'Assistant Manager HR', '2', '4', 'Payroll\r\nEobi\r\npessi\r\nrecruitment\r\nlabour office', '167673309465cf688113de6.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-16 13:52:01'),
(5, 'Shoaib Ahmed Khan', 'shoaibkbc@gmail.com', '+923452216377', '40', 'Karachi', '4210114024193', 'Master ', 'Account & Finance', '6', '10', 'There are many costs and expenses associated with any business. An accounts payable specialist is there to make sure all bills are paid in an efficient and timely manner. These financial specialists provide administrative and clerical support by processing, verifying, and reconciling invoices, monitoring expenses, and keeping a record of it all for tax purposes. Accounts payable specialists play an integral role in helping a company meet profitability goals.Accounts PayableÂ· Invoicing Payment Â· Payment Solutions Â· Audit Tax Â· Purch line Item Â· Accounts Receivable (AR) Â·Vendor Data Management, General Ledgers Â·Bank Reconciliation Â· Month-End Close Process Â· Financial Transactions Â· Cash Flow Â· Account Reconciliation Â· Journal Entries (Accounting) Â· Manage the payable functions, including monthly reports regarding payables and taxation, vendors liability reports, and aging reports as per approved credit terms, supervising and validating all vendor invoices for payments by three-way matching i-e comparing the purchase order, invoice, and goods receipt. Reconciling vendor ledger and managing the payment schedule. Accounts Payable Â· Accounting Â· Softwrae Microsoft AX software and MS Office.GL monitoring, monitor advances to vendor and open items for timely knocking off. Validating employee loans, gratuity, Final settlement payments, and processing monthly payroll payments.', '112167564165cf7a598d634.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-16 15:08:09'),
(6, 'Faheemulhaq Usmani', 'faheemulhaq87@gmail.com', '3336572590', '37', 'Faisalabad', '3310074818445', 'Ms ( HRM ', 'Faheemulhaq Usmani', '6', '10', 'Textileicon.\r\nPolymer container pvt ltd', '75895592365cf7f759f0a5.pdf', '', 'accept', '0', '', '', '', '', '', 'Faheemulhaq Usmani', '', '', '', '2024-02-16 15:29:57'),
(7, 'MUHAMMAD HASEEB', 'haseebm173@gmail.com', '0310-7019704', '26', 'Faisalabad', '33100-9727542-1', 'Bachelor', 'Assistant Manager HR', '6', '4', '', '167792878365cfabc11779f.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-16 18:38:57'),
(8, 'Muhammad dilawar', 'raodilawartheboss@gmail.com', '03086017708', '26', 'Multan', '3630219428775', 'B.A ', 'Assistant Hr', '2', '1', 'I am working as a Hr assistant manager in multan fabrics.(mehmood group of industry', '203553226565d033e97cdd7.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-17 04:19:53'),
(9, 'Syed Waqas Ali', 'syed_waqas@live.com', '03452975971', '38', 'Karachi', '42101-9189559-1', 'B.com', 'Assistant Manager HR', '6', '7', 'I am working \"Assistant Manager HR & Compliance\' in Arshad Brothers.\r\nI have 7 to 8 year experience.\r\n', '184630523965d0360bd5da4.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-17 04:28:59'),
(10, 'Hafiz Muhammad Bilal', 'mbilal8470@gmail.com', '03038139070', '33', 'Chiniot', '3340103388971', 'MPA', 'Senior HR Officer', '2', '2', 'Working as HR Officer In Gohar Textile mills. ', '133205891665d05e29a87d8.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-17 07:20:09'),
(11, 'Muhammad Zeeshan', 'malikshani248@gmail.com', '03167424233', '30', 'Faisalabad', '3310098592809', 'B.sc', 'any', '6', '8', '', '168003355665d07964e54f8.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-17 09:16:20'),
(12, 'Zeeshan Latif', 'bhattizeeshan045@gmail.com', '03091761142', '26', 'Faisalabad', '3310318375079', 'M.com', 'Zeeshan Latif', '2', '1', '', '197797946265d0ec7b5c67d.pdf', '', 'accept', '0', '', '', '', '', '', 'Zeeshan Latif', '', '', '', '2024-02-17 17:27:23'),
(13, 'Muhammad Asif Khan', 'muhammadasifkhan55@gmail.com', '0333-3602926', '44', 'Karachi', '42201-7921550-7', 'M. Phil. (HRM)', 'Assistant Manager HR', '2', '6', 'Exposure to work in Large Manufacturing Concerns (including Conglomerate) in different positions in HR /IR-ER / Administration / Social Compliance Departments, in a highly competitive & professional work environment.', '122215063765d1b065a06c5.pdf', '', 'accept', '0', '', '', '', '', '', 'Dr. Syeda Nazneen Waseem', '03318960830', 'Asst. Professor', '', '2024-02-18 07:23:17'),
(14, 'Tanzeel Rana', 'tanzeelrana10@icloud.com', '03044249469', '26', 'Faisalabad', '3310083910391', 'M.com', 'Sr officer HR', '2', '6', 'I am working as Sr officer HR in Maheen textile', '29809326465d21e2a2273f.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-18 15:11:38'),
(15, 'Muhammad Saqib ', 'saqib.tie@gmail.com', '+971505474163', '36', 'Narowal', '3450117868731', 'Bachelor ', 'Assistant Manager HR', '2', '3', '', '6256128765d34cefb3ed2.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-19 12:43:27'),
(16, 'Talha jameel', 'talhajutt1144@gmail.com', '03026717079', '24', 'Faisalabad', '33102-3174355-5', 'B.A', 'computer operator ', '2', '4', '2 year computer opratr , cashier afzal electronics\r\n1 year accountant for babar & company\r\n2 year computer operator,cash ,stock auditor at Mian electronics ', '195497807165d34d832ebe8.pdf', '', 'accept', '0', '', '', '', '', '', 'Talha jameel', '', '', '', '2024-02-19 12:45:55'),
(17, 'Eman Shahbaz ', 'emaanshahbaz303@gmail.com', '03098677580', '25', 'Faisalabad', '3310003728510', 'BBA (Hon) 4 years', 'Female accounts officer', '3', '1', 'I Have 1 nd half year experience of bookkeeping & taxation department (tax & sale tax) in Zahid Jamil & Co.', '97372102865d36a09c5b92.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-19 14:47:37'),
(18, 'Ghulam sabir ', 'gs5619491@gmail.com', '0303-6239562', '27', 'Faisalabad', '33103-5619491-7', 'Masters ', 'Sr. Officer HR ', '2', '5', 'I have strong grip on all pillars of HR. MS office inpage etc.', '62260339165d42dbfbf381.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-20 04:42:39'),
(20, 'Shahbaz jameel', 'lifeforserve@gmail.com', '03056869415', '37', 'Faisalabad', '3310082346787', 'B.Com', 'Accountant or microfinance operation', '6', '5', '5 year disbursement officer at Niagara mills Pvt ltd\r\n7 year work experience as business development officer at Kashf foundation ', '49072435065d4962b3d51d.pdf', '', '', '0', '', '', '', '', '', '', '', '', '', '2024-02-20 12:08:11'),
(21, 'HINA RIAZ', 'HINARIAZ87@YAHOO.COM', '3331681186', '33', 'Faisalabad', '3310016051902', '2018', 'ACCOUNTANT', '3', '4', 'I am  currently working in  sameel pharmacuticals PVT LTD as accountant now  move to  purchase DEP I have 4 year experience CASH voucher Journal vouchers  Supplier details Purchase invoices, Expiry intimation. ', '201699014565d4989e16167.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-20 12:18:38'),
(22, 'MUHAMMAD ABUBAKAR', 'abubakarakram5510@gmail.com', '03068058851', '23', 'Faisalabad', '3310065400053', 'B.COM (CONTINUE)', 'ACCOUNTS OFFICER', '15', '3', '3 Year experence as a accounts officer in sameel pharmaceuticals pvt.ltd faisalabad', '104079191165d4a4e9e037c.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-20 13:11:05'),
(23, 'Adnan Manzoor', 'mani937@icloud.com', '03006657977', '31', 'Faisalabad', '3310233647921', 'M.com', 'Accountant ', '3', '', 'I have 7 years experience in accounts can work on Tally , PeachTree', '108524757165d4a677ca736.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-20 13:17:43'),
(24, 'Muhammad Fahad', 'fahad.abl01@gmail.com', '03316756627', '36', 'Faisalabad', '3310024489855', 'BS(hons)', 'Operations ', '6', '10', 'Banker', '201368026065d4c422af615.pdf', '', 'accept', '0', '', '', '', '', '', 'Muhammad Fahad', '', '', '', '2024-02-20 15:24:18'),
(25, 'Naveed Asghar', 'naveedawan75@gmail.com', '00923216698859', '48', 'Faisalabad', '33100-0639663-7', 'MBA Finance', 'Manager', '3', '10', 'Manager Finance & Manager Taxation', '185786705565d4df6fc8999.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-20 17:20:47'),
(26, 'Samreen Khan', 'simikhan91142@gmail.com', '03029865994', '26', 'Nankana Sahib', '35501-0417849-4', 'Bachelor\'s In economics', 'Assistant manager', '6', 'fresh', '', '130773989265d614606562a.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-21 15:18:56'),
(27, 'Muhammad Kashif Manzoor ', 'apa4950@hotmail.com', '03017123689', '40', 'Faisalabad', '3310007380999', 'MBA AND PIPFA ', 'Manager ', '3', '10', '', '185874909865d6e7b2182b1.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-22 06:20:34'),
(28, 'Muhammad yasir ', 'yasirmukhtar71992@gmail.com', '03068898585', '31', 'Faisalabad', '3310049490007', 'Bs(hons) islamic studies ', 'Store keeper ', '', '7', '', '37995830565d9e78a28306.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-24 12:56:42'),
(29, 'Shahzad Haider', 'sk444542@gmail.com', '03117576231', '27', 'Faisalabad', '33100-8690245-5', 'Intermediate', 'Data Entry Opretar', '6', '6', 'Exp of Store,inventory and Data Entry Working on SAP', '169802710765dc72b688616.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-26 11:15:02'),
(30, 'Muhammad Saeed Anjum ', 'msaeedqc@gmail.com', '03338363676', '41', 'Faisalabad', '3310006116303', 'MBA ', 'Export Marketing Manager ', '5', '', 'John Cotton experience 6 months\r\nSadaqat ltd experience 7 years\r\nMTM experience 12 years ', '108056745965ddd5be359b0.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-27 12:29:50'),
(31, 'Umer Haroon', 'umerharoonumerandha@gmail.com', '03002032285', '31', 'Karachi', '4230165405247', 'Masters in Business Administration ', 'Marketing Manager ', '5', '9', 'I have a practical experience in Textile Industry for more than 8 years. To elaborate on past academic experience, I have done Masters in Business Administration with majors in Marketing having six years of diversified experience in studying Business planning, , Marketing techniques. Currently I am associated with Adamjee Textile as a Deputy Manager Marketing and looking after Export Marketing my services involved Sales and Marketing through telemarketing, email- Marketing and personal visit. Customer trouble shooting, after sales service, Execution till shipment and Merchandising.', '140074338065dde29c3c2af.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-27 13:24:44'),
(32, 'Ahmad Noman Alvi', 'nomanalvi625@gmail.com', '03276850788', '32', 'Faisalabad', '33104-9215799-1 ', 'Graduate in Commerce ', 'Accounts & Finance Manager ', '3', '8', '7 to 8 Years in accounts and fiance field. Currently working as Accounts Manager. ', '198330265065df07fc29eae.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-28 10:16:28'),
(33, 'Zainab Ijaz ', 'zijaz825@gmail.com', '03288564660', '22', 'Faisalabad', '3310284757040', 'BS Statistics ', 'Account handling ', '3', '', '', '188686732765df5c682e916.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-28 16:16:40'),
(34, 'Muhammad Faizan', 'Sam81122@gmail.com', '+923215858885', '29', 'Faisalabad', '33102-5459197-3', 'BCom', 'Accountant', '3', '4', 'i work as an accountant at Minerva Club since 2.5 year\r\ni work as an assistant auditor at Tariq Rasheed & co since 2.5 years', '84252595965e0a297436d7.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-29 15:28:23'),
(35, 'Noman Shafique', 'nomanshafique121@gmail.com', '03087040745', '33', 'Faisalabad', '3310275231339', 'MBA (Marketing)', 'Sales And Merchandising ', '4', '8', '', '178999408065e0de96b5748.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-29 19:44:22'),
(36, 'Arslan Aziz', 'Arsl.ansari70@gmail.com', '03347805489', '35', 'Faisalabad', '3330247179471', 'MBA HR', 'Deputy Manager / Manager HR & Admin', '2', '10', 'I have more than 11 years experience in different textile/manufacturing industries.', '93115262665e0e2f33e7e1.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-02-29 20:02:59'),
(37, 'Kanwal Siddiqui', 'kanwalsiddiki@gmail.com', '03062116502', '42', 'Karachi', '4200004864716', 'Certified in HRM.', 'Kanwal Siddiqui', '2', '10', '', '56453150265e185cc9cdd5.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-03-01 07:37:48'),
(38, 'Muhammad Abdul Sami', 'abdulsami4756@gmail.com', '03127794756', '23', 'Faisalabad', '33102-1457271-1', 'Bachelor degree in Arts(Economics)', 'Assistant Manager Paking ', '6', 'fresh', 'I have no any experience. But I will learn with time.', '113585007965e2bb1b1f5e4.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-03-02 05:37:31'),
(39, 'Muneeb Bilal Boota ', 'mmuneeb1006@gmail.com', '03067935924', '24', 'Faisalabad', '3310513460861', 'BSSE ', 'Sr HR Officer ', '2', '', 'Having experience in talent acquisition, hiring skilled labour, eobi, social security, training and development, od, maintain and updating the employee personal files.', '22609976465e2f3a16cc76.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-03-02 09:38:41'),
(40, 'Ajar Ahmed Khan', 'ajarahme97@gmail.com', '+923009880176', '22', 'Faisalabad', '33100-0406480-9', 'Bachelor\'s degree in Electrical Engineering', 'Export Marketing Manager', '5', 'fresh', 'Having recently accomplished an Project Management course from PMI, gaining expertise in project planning, execution, and control. Proficient in project initiation, scheduling, budgeting, risk management, and team collaboration. Enhancing leadership abilities for on-time project delivery and stakeholder satisfaction', '99124977965e4443fe12e1.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-03-03 09:34:55'),
(41, 'Usama Amjad', 'usamaamjad1591@gmail.com', '0333 6594808', '22', 'Faisalabad', '3310591414776', 'Bsc Hons Agriculture ', 'Usama Amjad', '3', '', '', '134070392265e5d78a4e05c.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-03-04 14:15:38'),
(42, 'Muhammad Qayum', 'qayum584@gmail.com', '03005464584', '36', 'Faisalabad', '3310058576737', 'B.Com', 'Asst Account ', '3', '10', 'Siddiqui Textiles\r\nAccountant\r\n', '15506047165e6baebe4434.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-03-05 06:25:47'),
(43, 'Muhammad Imran ', 'imranzul33@gmail.com', '03061553524', '38', 'Faisalabad', '3310036510599', 'B.com', 'Asaistant Manger Account', '6', '4', 'Accounts experience ', '73409434765e6c04403c71.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-03-05 06:48:36'),
(44, 'Anam Ghafoor ', 'anumch371@gmail.com', '03143096224', '25', 'Faisalabad', '33103-6018245-2', 'BBA (finance)', 'Assistant accountant ', '3', '4', 'Manage All the accounts. Export locals make the financial reports ', '64641947865e6e2fa1693a.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-03-05 09:16:42'),
(45, 'Mohsin Ali ', 'mohsinjutt150@gmail.com', '03046780662', '29', 'Faisalabad', '3310047860119', 'MBA', 'AM Accounts', '3', '5', '', '157637709665e71e9a16123.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-03-05 13:31:06'),
(46, 'Talha Shoukat', 'talhasg76@gmail.com', '03217600426', '35', 'Faisalabad', '3310049420975', 'B.Con', 'Head Cashier', '6', '10', 'Cash Central Office Manager in renowned MNCS.', '163993454965eb280b087ae.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-03-08 15:00:27'),
(47, 'Eman ', 'emaanemaan333@gmail.com', '03055284300', '28', 'Faisalabad', '33102761444442', 'B. A', 'Effective post ', '6', '7', 'Good communication ', '160079446465eb4c4957758.pdf', '', 'reject', '0', '', '', '', '', '', '', '', '', '', '2024-03-08 17:35:05'),
(48, 'Muhammad Sultan Sallahuddin', 'sultansallahuddin68@gmail.com', '03117445336', '27', 'Faisalabad', '3310012391063', 'B.Com', 'Account Manager Assistant ', '6', '6', 'Cashier:-1 Year Dr. Saucy\r\nManager Assistant:-4 Year Riaz Enterprises\r\nCredit Controller:-1 Year Premier Sales\r\n', '59005996065f2efa8a6837.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-03-14 12:38:00'),
(49, 'Muhammad Azam ', 'muhammadazam08@gmail.com', '03003204654', '52', 'Lahore', '34502-9300534-7', 'Bachelor', 'Production Manager', '1', '', '', '199501008165fa1d89807e6.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-03-19 23:19:37'),
(53, 'Umar Iqbal', 'iumar3827@gmail.com', '03302263229', '23', 'Faisalabad', '3310029795767', 'BSCS', 'Wordpress Developer ', '10', '', '', '25120358865facebf1c494.pdf', '', 'accept', '0', '', '', '', '', '', 'Sir Sami ', '03302263229', 'CEO', '', '2024-03-20 11:55:43'),
(54, 'Zeeshan ', 'zeeshanmirza014@yahoo.com', '03457684014', '37', 'Faisalabad', '3310036821291', 'ACMA', 'Assistant Manager Accounts ', '15', '', '', '134065703865fb0f632c14b.pdf', '', 'accept', '0', '', '', '', '', '', '', '03076171502', 'Chief Accounts officer ', '', '2024-03-20 16:31:31'),
(55, 'Hasan Muhammad ', 'hasanmuhammad860@gmail.com', '03333548956', '26', 'Karachi', '42101-0157700-3', 'MPA', 'AM - HR', '2', '', '', '17663214986600c91de9b5e.pdf', '', 'reject', '0', '', '', '', '', '', '', '', '', '', '2024-03-25 00:45:17'),
(56, 'Muhammad Rafiq', 'mrafique.329@gmail.com', '03324040329', '35', 'Toba Tek Singh', '3330338402109', 'MA Urdu', 'Telecommunications ', '6', '', '', '5484119986605374e4e7bf.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-03-28 09:24:30'),
(57, 'Anas Akbar', 'anasakbar124@gmail.com', '03247638363', '25', 'Rawalpindi', '33104-5855410-7', 'Bs Commerce ', 'Anas Akbar', '6', '', '', '19230313476605bfa581126.pdf', '', 'accept', '0', '', '', '', '', '', '', '', '', '', '2024-03-28 19:06:13'),
(58, 'Syed Badar ali Zaidi ', 'badarzaidi9@gmail.com', '03245501614', '21', 'Faisalabad', '33100-2569688-7', 'B.com', 'Chaser', '3', '', '', '202140170966068ceeea81b.pdf', 'Resume_6627792aca0c4.pdf', 'accept', '0', '', 'Badarzaidi9@gmail.com', '03245501614', 'I am currently looking for a Full-time position in a growing\\r\\norganization where I can get the opportunity to prove my abilities by\\r\\naccepting challenges, fulfilling the organizational goals, climbing\\r\\nthe career ladder through continuous learning and commitment, to\\r\\nhelpthe company advance effectively and productivity and increase\\r\\nbenefits for my family.', 'Fresh', '', '03143124950', 'Basit', '', '2024-03-29 09:42:06'),
(59, 'Muhammed sulaiman', 'msulaimanamin297@gmail.com', '03137098141', '31', 'Faisalabad', '3310082117089', 'Master', 'Muhammed sulaiman', '7', '', '', '15530393686607a271cb1dd.pdf', '', 'accept', '0', '', '', '', '', '', 'Muhammed sulaiman', '', '', '', '2024-03-30 05:26:09');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `job_name` text NOT NULL,
  `company_name` text NOT NULL,
  `category_id` text NOT NULL,
  `min_exp` text NOT NULL,
  `max_exp` text NOT NULL,
  `qualification` text NOT NULL,
  `job_detail` text NOT NULL,
  `job_status` text NOT NULL,
  `job_added_by` text NOT NULL,
  `added_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_name`, `company_name`, `category_id`, `min_exp`, `max_exp`, `qualification`, `job_detail`, `job_status`, `job_added_by`, `added_time`) VALUES
(2, 'Laravel Developer', 'INZIP', '10', '1', '3', 'ICom', 'Job detail lines ', '1', '1', '2024-03-15 10:22:11'),
(3, 'EPEX devloper', 'thewebconcept', '2', '50000', '100000', '5', ' need a persion with 5 ya', '1', '1', '2024-04-22 12:01:21');

-- --------------------------------------------------------

--
-- Table structure for table `job_type`
--

CREATE TABLE `job_type` (
  `category_id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `category_status` text NOT NULL DEFAULT '1',
  `added_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_type`
--

INSERT INTO `job_type` (`category_id`, `category_name`, `category_status`, `added_time`) VALUES
(1, 'PRODUCTION MANAGER', '1', '2024-02-13 07:12:19'),
(2, 'HR MANAGER', '1', '2024-02-13 07:12:19'),
(3, 'ACCOUNTS MANAGER', '1', '2024-02-13 07:12:19'),
(4, 'MERCHANDISER', '1', '2024-02-13 07:12:19'),
(5, 'EXPORT MARKET MANAGER', '1', '2024-02-13 07:12:19'),
(6, 'ASSISTANT MANAGER', '1', '2024-02-13 07:12:19'),
(7, 'B.D.O', '1', '2024-02-13 07:12:19'),
(8, 'RECEPTIONIST', '1', '2024-02-13 07:12:19'),
(9, 'P.A', '1', '2024-02-13 07:12:19'),
(10, 'SOFTWARE DEVELOPERS', '1', '2024-02-13 07:12:19'),
(11, 'WEBSITE DEVELOPERS', '1', '2024-02-13 07:12:19'),
(12, 'STITCHING MANAGER', '1', '2024-02-13 07:12:19'),
(13, 'PPC MANAGER', '1', '2024-02-13 07:12:19'),
(14, 'ADMINISTRATOR', '1', '2024-02-13 07:12:19'),
(15, 'FINANCE MANAGER', '1', '2024-02-13 07:12:19'),
(16, 'SECURITY MANAGER', '1', '2024-02-13 07:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `user_email` text NOT NULL,
  `password` text NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '1',
  `added_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_email`, `password`, `status`, `added_time`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '1', '2024-01-22 21:09:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant_education`
--
ALTER TABLE `applicant_education`
  ADD PRIMARY KEY (`educ_id`);

--
-- Indexes for table `applicant_experience`
--
ALTER TABLE `applicant_experience`
  ADD PRIMARY KEY (`cand_exp_id`);

--
-- Indexes for table `candidates_info`
--
ALTER TABLE `candidates_info`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `job_type`
--
ALTER TABLE `job_type`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant_education`
--
ALTER TABLE `applicant_education`
  MODIFY `educ_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `applicant_experience`
--
ALTER TABLE `applicant_experience`
  MODIFY `cand_exp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `candidates_info`
--
ALTER TABLE `candidates_info`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_type`
--
ALTER TABLE `job_type`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

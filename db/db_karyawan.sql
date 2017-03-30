-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2017 at 05:39 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id_department` varchar(4) NOT NULL,
  `department` varchar(32) NOT NULL,
  PRIMARY KEY (`id_department`),
  KEY `id_department` (`id_department`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id_department`, `department`) VALUES
('01', 'Management'),
('02', 'Human Resource'),
('03', 'Finance'),
('04', 'General Affair'),
('05', 'Project'),
('06', 'Concept');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `id_education` varchar(4) NOT NULL,
  `education` varchar(32) NOT NULL,
  PRIMARY KEY (`id_education`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id_education`, `education`) VALUES
('01', 'SD'),
('02', 'SMP'),
('03', 'SMA'),
('04', 'STM'),
('05', 'SMK'),
('06', 'PGA'),
('07', 'D3'),
('08', 'S1'),
('09', 'S2'),
('10', 'S3');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id_employee` int(4) NOT NULL AUTO_INCREMENT,
  `no_employee` varchar(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `place_of_birth` varchar(25) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `id_religion` varchar(4) NOT NULL,
  `id_marital_status` varchar(4) NOT NULL,
  `child` int(3) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `id_last_education` varchar(4) NOT NULL,
  `school_majors` varchar(25) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `year_graduation` varchar(4) NOT NULL,
  `existing_job` varchar(30) NOT NULL,
  `join_date` date NOT NULL,
  `id_department` varchar(4) NOT NULL,
  `id_employment` varchar(4) NOT NULL,
  `id_employee_status` varchar(4) NOT NULL,
  `resign_date` date DEFAULT NULL,
  `prob_date` date DEFAULT NULL,
  `contract1_start` date DEFAULT NULL,
  `contract2_start` date DEFAULT NULL,
  `contract3_start` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  PRIMARY KEY (`id_employee`),
  KEY `id_employment` (`id_employment`),
  KEY `id_department` (`id_department`),
  FULLTEXT KEY `id_last_education` (`id_last_education`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id_employee`, `no_employee`, `name`, `place_of_birth`, `date_of_birth`, `gender`, `address`, `id_religion`, `id_marital_status`, `child`, `no_hp`, `no_telp`, `photo`, `id_last_education`, `school_majors`, `school_name`, `year_graduation`, `existing_job`, `join_date`, `id_department`, `id_employment`, `id_employee_status`, `resign_date`, `prob_date`, `contract1_start`, `contract2_start`, `contract3_start`, `end_date`) VALUES
(1, 'ST-001', 'Budi Sumaatmadja', 'Jakarta', '1957-02-15', 'M', 'Jl. Tebet Dalam I G/35, RT/RW. 005/001, Kel. Tebet Barat, Kec. Tebet, Jakarta Selatan', '03', '02', 2, '0816868770', '021-8353319', 'ST-001_Budi_Sumaatmadja_17-01-30.png', '08', 'Architecture', 'Universitas Katolik Parahyangan, Bandung', '1984', 'Presiden Director', '1995-01-01', '01', '01', '01', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'ST-002', 'Toto Sugito', 'Jakarta', '1963-12-07', 'M', 'Jl. Tebet Utara II C/31, RT/RW. 005/001, Kel. Tebet Timur, Kec. Tebet, Jakarta Selatan', '03', '02', 3, '0818127096', '021-83780289', 'ST-002_Toto_Sugito_17-01-18.png', '08', 'Teknik Mesin', 'Universitas Indonesia, Jakarta', '1989', 'Director', '1995-01-01', '01', '03', '01', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'ST-003', 'Purwadi', 'Jakarta', '1965-07-07', 'M', 'Mampang Prapatan XIV/ 17 A RT. 008/ 006 Pancoran-Jakarta Selatan', '03', '02', 0, '081383991139', '021-7941486', 'ST-003_Purwadi_17-02-01.png', '08', 'Architecture', 'Universitas Indonesia, Jakarta', '1991', 'Architect', '1995-06-16', '05', '13', '01', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'ST-004', 'Hasanudin', 'Tasikmalaya', '1969-07-05', 'M', 'Kp. Sukamukti RT/RW.007/002 DS/ Kec. Puspahiang-Tasikmalaya 46471', '03', '02', 2, '08131072839', '-', 'ST-004_Hasanudin_17-02-01.png', '06', '-', 'PGA Negeri Sukamanah Tasikmalaya', '1989', 'General Admin', '1995-09-01', '04', '06', '01', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'ST-007', 'Herpi Latief', 'Padang', '1961-02-18', 'M', 'Taman Bumyagara Blok C4/11 RT 003 RW.021 Mustikajaya-Bantar gebang-Bekasi', '03', '02', 2, '0818 0892741', '021-82603986', 'ST-007_Herpi_Latief_17-02-01.png', '08', 'Architecture', 'Institut Teknologi Bandung', '1991', 'Wakil Direktur', '1996-01-01', '05', '02', '01', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'ST-008', 'M Chotif', 'Jakarta', '1966-12-22', 'M', 'Menteng Dalam RT.011/003 Menteng Dalam- Tebet- Jakarta Selatan', '03', '02', 3, '085719338566', '021-83792963', 'ST-008_M_Chotif_17-02-01.png', '01', '-', 'SD Menteng Atas 22 Petang, Setiabudi', '1982', 'Driver', '1997-01-01', '04', '08', '01', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'ST-009', 'Agus Hendro Cahyono', 'Jakarta', '1971-08-01', 'M', 'Perum. Kemang Swatama Blok A No. 20, RT/RW. 01/08, Kel. Sukamaju, Kec. Cibinong, Depok', '03', '02', 2, '0818122518', '-', 'ST-009_Agus_Hendro_Cahyono_17-02-01.png', '08', 'Architecture', 'Universitas Pancasila Jakarta', '1995', 'Deputy Director', '1997-02-01', '01', '02', '01', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'ST-011', 'Abdullah', 'Jakarta', '1967-04-09', 'M', 'Jl. Tebet Utara 1 G/ 1 RT 007/ 001, Kel. Tebet Timur, Kec. Tebet, Jakarta Selatan', '03', '02', 2, '082113060151', '021-83703747', 'ST-011_Abdullah_17-02-01.png', '01', '-', '-', '-', 'OB', '2002-01-11', '04', '09', '01', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'ST-013', 'Adri Rahadian', 'Jakarta', '1974-05-10', 'M', 'Jl. Cempaka Putih Tengah 33/8, RT/RW. 011/007, Kel. Cempaka Putih Timur, Kec. Cempaka Putih, Jakarta Pusat', '03', '02', 2, '08161364746', '-', 'ST-013_Adri_Rahadian_17-02-08.png', '08', 'Architecture', 'Universitas Trisakti Jakarta', '1997', 'Project Director', '2002-04-15', '05', '03', '01', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'ST-014', 'Mad Soleh', 'Bekasi', '1984-07-23', 'M', 'Kp. Kebon Kelapa RT.002/ 001Cibarusah Kota-Cibarusah - Bekasi', '03', '02', 1, '087888343543', '-', 'ST-014_Mad_Soleh_17-02-08.png', '02', '-', 'SMP N1 Cibarusah, Jawa Barat', '1999', 'Drafter', '2002-06-01', '05', '18', '01', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_status`
--

CREATE TABLE IF NOT EXISTS `employee_status` (
  `id_employee_status` varchar(4) NOT NULL,
  `employee_status` varchar(32) NOT NULL,
  PRIMARY KEY (`id_employee_status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_status`
--

INSERT INTO `employee_status` (`id_employee_status`, `employee_status`) VALUES
('01', 'Full Time'),
('02', 'Contract'),
('03', 'Resign');

-- --------------------------------------------------------

--
-- Table structure for table `employment`
--

CREATE TABLE IF NOT EXISTS `employment` (
  `id_employment` varchar(4) NOT NULL,
  `employment` varchar(50) NOT NULL,
  PRIMARY KEY (`id_employment`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employment`
--

INSERT INTO `employment` (`id_employment`, `employment`) VALUES
('01', 'Presiden Director'),
('02', 'Deputy Director'),
('03', 'Director'),
('04', 'HR Manager'),
('05', 'HR Staff'),
('06', 'General Admin'),
('07', 'IT Staff'),
('08', 'Driver'),
('09', 'Office Boy'),
('10', 'Accountant'),
('11', 'Finance Staff'),
('12', 'Junior Architect'),
('13', 'Architect'),
('14', 'Senior Architect'),
('15', 'Partner Architect'),
('16', 'Koordinator Concept'),
('17', 'Quality Control'),
('18', 'Junior Drafter'),
('19', 'Drafter'),
('20', 'Senior Drafter'),
('21', 'Project Assistant'),
('22', 'Secretary');

-- --------------------------------------------------------

--
-- Table structure for table `marital_status`
--

CREATE TABLE IF NOT EXISTS `marital_status` (
  `id_marital_status` varchar(4) NOT NULL,
  `marital_status` varchar(32) NOT NULL,
  PRIMARY KEY (`id_marital_status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marital_status`
--

INSERT INTO `marital_status` (`id_marital_status`, `marital_status`) VALUES
('01', 'Single'),
('02', 'Marriage');

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE IF NOT EXISTS `religion` (
  `id_religion` varchar(4) NOT NULL,
  `religion` varchar(32) NOT NULL,
  PRIMARY KEY (`id_religion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `religion`
--

INSERT INTO `religion` (`id_religion`, `religion`) VALUES
('01', 'Budha'),
('02', 'Hindu'),
('03', 'Islam'),
('04', 'Katholik'),
('05', 'Kristen Protestant'),
('06', 'Etc..');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(1) NOT NULL,
  `id_employee` int(4) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` enum('Admin','Staff') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_employee`, `username`, `password`, `level`) VALUES
(1, 2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(2, 4, 'staff', '1253208465b1efa876f982d8a9e73eef', 'Staff'),
(4, 3, 'pur1', '21232f297a57a5a743894a0e4a801fc3', 'Admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

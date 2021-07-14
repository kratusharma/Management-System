

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




--
CREATE DATABASE IF NOT EXISTS `hospital_management_system` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hospital_management_system`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `eID` char(10) NOT NULL,
  `password` char(10) NOT NULL,
  PRIMARY KEY (`eID`),
  UNIQUE KEY `eID` (`eID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`eID`, `password`) VALUES
('DID0001', 'DID0001');

-- --------------------------------------------------------

--
-- Table structure for table `admit`
--

CREATE TABLE IF NOT EXISTS `admit` (
  `pID` char(10) NOT NULL,
  `eID` char(10) NOT NULL,
  `ward_ID` char(5) NOT NULL,
  `date` char(10) NOT NULL,
  PRIMARY KEY (`pID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admit`
--

INSERT INTO `admit` (`pID`, `eID`, `ward_ID`, `date`) VALUES
('PID0001', 'DID0002', 'WID02', '2017-05-31'),
('PID0002', 'DID0005', 'WID05', '2017-01-03'),
('PID0003', 'DID0006', 'WID06', '2017-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `con_doc`
--

CREATE TABLE IF NOT EXISTS `con_doc` (
  `eID` char(8) NOT NULL,
  `isDoc` char(1) NOT NULL,
  `isCon` char(1) NOT NULL,
  PRIMARY KEY (`eID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `con_doc`
--

INSERT INTO `con_doc` (`eID`, `isDoc`, `isCon`) VALUES
('DID0002', 'Y', 'Y'),
('DID0003', 'Y', 'N'),
('DID0004', 'N', 'Y'),
('DID0005', 'Y', 'Y'),
('DID0006', 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `elog`
--

CREATE TABLE IF NOT EXISTS `elog` (
  `eID` char(10) NOT NULL,
  `password` char(10) NOT NULL,
  PRIMARY KEY (`eID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elog`
--

INSERT INTO `elog` (`eID`, `password`) VALUES
('DID0001', 'DID0001'),
('DID0002', 'DID0002'),
('DID0003', 'DID0003'),
('DID0004', 'DID0004'),
('DID0005', 'DID0005'),
('DID0006', 'DID0006');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `eID` char(8) NOT NULL,
  `eName` varchar(50) NOT NULL,
  `phone` char(10) NOT NULL,
  `gender` char(2) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `salary` varchar(6) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`eID`),
  UNIQUE KEY `eID` (`eID`),
  UNIQUE KEY `eName` (`eName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eID`, `eName`, `phone`, `gender`, `DOB`, `salary`, `password`) VALUES
('DID0001', 'Sanath Withana', '0718945632', 'M', '1990-01-13', '130000', 'DID0001'),
('DID0002', 'Sarath Chandrasiri', '0778965425', 'M', '1990-04-15', '56000', 'DID0002'),
('DID0003', 'Himath Harshajith', '0789214536', 'M', '1996-12-12', '120000', 'DID0003'),
('DID0004', 'Nadeesha Pathiraja', '0719654236', 'M', '1989-09-09', '45000', 'DID0004'),
('DID0005', 'Nishadhi Wickramanayaka', '0718546932', 'F', '1995-07-07', '89000', 'DID0005'),
('DID0006', 'Udara Sahan', '0782365489', 'M', '1990-08-08', '50000', 'DID0006');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `patient_ID` char(10) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `phone_number` char(10) NOT NULL,
  `DOB` varchar(15) NOT NULL,
  `gender` char(2) NOT NULL,
  `ward_ID` char(10) NOT NULL,
  `eID` char(10) NOT NULL,
  PRIMARY KEY (`patient_ID`),
  UNIQUE KEY `patient_ID` (`patient_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_ID`, `patient_name`, `phone_number`, `DOB`, `gender`, `ward_ID`, `eID`) VALUES
('PID0001', 'Krishantha Senarath', '0715698425', '1985-04-15', 'M', 'WID05', 'DID0002'),
('PID0002', 'Tharindu Munaweera', '0786542356', '1996-11-11', 'M', 'WID05', 'DID0005'),
('PID0003', 'Matheesha Yapa', '0112546899', '2000-12-11', 'M', 'WID06', 'DID0006');

-- --------------------------------------------------------

--
-- Table structure for table `plog`
--

CREATE TABLE IF NOT EXISTS `plog` (
  `patient_ID` char(10) NOT NULL,
  `password` char(10) NOT NULL,
  PRIMARY KEY (`patient_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plog`
--

INSERT INTO `plog` (`patient_ID`, `password`) VALUES
('PID0001', 'PID0001'),
('PID0002', 'PID0002'),
('PID0003', 'PID0003');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE IF NOT EXISTS `treatment` (
  `tID` char(10) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `results` varchar(50) NOT NULL,
  `s_date` varchar(10) NOT NULL,
  `e_date` varchar(10) NOT NULL,
  `patient_ID` char(10) NOT NULL,
  UNIQUE KEY `tID` (`tID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`tID`, `tname`, `results`, `s_date`, `e_date`, `patient_ID`) VALUES
('TID01', 'Dengue', 'Pending', '2017-05-28', '2000-01-10', 'PID0001'),
('TID06', 'Polio', 'Pending', '2017-06-05', 'Pending', 'PID0002');

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE IF NOT EXISTS `ward` (
  `ward_name` varchar(50) NOT NULL,
  `ward_ID` char(5) NOT NULL,
  PRIMARY KEY (`ward_ID`),
  UNIQUE KEY `ward_ID` (`ward_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`ward_name`, `ward_ID`) VALUES
('Surgical Ward', 'WID01'),
('Medical Ward', 'WID02'),
('Obstetrics Unit', 'WID03'),
('McAuley Ward', 'WID04'),
('Newborn Unit', 'WID05'),
('Maternity Unit', 'WID06'),
('Pediatrics Unit', 'WID07'),
('Oncology Unit', 'WID08');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`eID`) REFERENCES `employee` (`eID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `admit`
--
ALTER TABLE `admit`
  ADD CONSTRAINT `admit_ibfk_1` FOREIGN KEY (`pID`) REFERENCES `patient` (`patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `con_doc`
--
ALTER TABLE `con_doc`
  ADD CONSTRAINT `con_doc_ibfk_1` FOREIGN KEY (`eID`) REFERENCES `employee` (`eID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `elog`
--
ALTER TABLE `elog`
  ADD CONSTRAINT `elog_ibfk_1` FOREIGN KEY (`eID`) REFERENCES `employee` (`eID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plog`
--
ALTER TABLE `plog`
  ADD CONSTRAINT `plog_ibfk_1` FOREIGN KEY (`patient_ID`) REFERENCES `patient` (`patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE;


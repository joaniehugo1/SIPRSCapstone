-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2018 at 11:04 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siprs`
--

-- --------------------------------------------------------

--
-- Table structure for table `baptism`
--

CREATE TABLE `baptism` (
  `id` int(11) NOT NULL,
  `persons_id` int(10) DEFAULT NULL,
  `god_parents` varchar(255) DEFAULT NULL,
  `officiating_priest` varchar(255) DEFAULT NULL,
  `parish_priest` varchar(255) DEFAULT NULL,
  `book_no` int(10) DEFAULT NULL,
  `page_no` int(10) DEFAULT NULL,
  `serial_no` int(10) DEFAULT NULL,
  `baptism_date` date DEFAULT NULL,
  `baptism_place` varchar(255) NOT NULL,
  `parish_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baptism`
--

INSERT INTO `baptism` (`id`, `persons_id`, `god_parents`, `officiating_priest`, `parish_priest`, `book_no`, `page_no`, `serial_no`, `baptism_date`, `baptism_place`, `parish_name`) VALUES
(1, 2, 'Joanie Hugo, Eugenio Galorio', '1', 'Rev. Fr. Gilbert P. Ilogon', 10, 12, 164, '2018-10-09', 'Tubigon, Bohol', 'St. Isidore The Farmer Parish'),
(11, 7, 'Johhny Arcelo', '2', 'Rev. Fr. Gilbert P. Ilogon', 3, 23, 10, '2018-10-18', 'Tubigon, Bohol', 'St. Isidore The Farmer Parish'),
(12, 4, 'Shella Yap', '2', 'Rev. Fr. Gilbert P. Ilogon', 3, 2, 12, '2018-10-17', 'Tubigon, Bohol', 'St. Isidore The Farmer Parish'),
(13, 9, 'Juliet Torreon\r\nFerdinand Alforque', '1', 'Rev. Fr. Gilbert P. Ilogon', 2, 2, 2, '1999-04-15', 'Tubigon, Bohol', 'St. Isidore The Farmer Parish');

-- --------------------------------------------------------

--
-- Table structure for table `confirmation`
--

CREATE TABLE `confirmation` (
  `id` int(11) NOT NULL,
  `parish_name` varchar(255) DEFAULT NULL,
  `persons_id` int(10) DEFAULT NULL,
  `confirmation_date` date DEFAULT NULL,
  `rev_monsignor` varchar(255) NOT NULL,
  `sponsors` varchar(255) DEFAULT NULL,
  `confirmation_no` int(10) DEFAULT NULL,
  `serial_no` int(10) DEFAULT NULL,
  `page_no` int(10) DEFAULT NULL,
  `given_date` date DEFAULT NULL,
  `parish_priest` varchar(255) DEFAULT NULL,
  `solemnize_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmation`
--

INSERT INTO `confirmation` (`id`, `parish_name`, `persons_id`, `confirmation_date`, `rev_monsignor`, `sponsors`, `confirmation_no`, `serial_no`, `page_no`, `given_date`, `parish_priest`, `solemnize_by`) VALUES
(6, 'St. Isidore The Farmer Parish', 4, '2018-09-10', 'Rev. Fr. Tomas Balatayo Jr', 'Joanie Hugo', 1, 2, 1, '2018-10-16', 'Rev. Fr. Gilbert P. Ilogon', NULL),
(8, 'St. Isidore Parish', 2, '2018-10-19', 'Rev.Tomas Balatayo', 'joanie', 1, 1, 1, '2018-10-09', 'Rev. Fr. Gilbert P. Ilogon', NULL),
(9, 'St. Isidore The Farmer Parish', 2, '2018-10-24', 'Bishop Abet Uy', 'Joanie Hugo', 2, 2, 1, '2018-10-11', 'Rev. Fr. Gilbert P. Ilogon', NULL),
(13, 'St. Isidore The Farmer Parish', 9, '2018-01-01', 'Rev.Tomas Balatayo', 'Juliet Torreon\r\nFerdinand Alforque', 2, 2, 2, '2018-10-10', 'Rev. Fr. Gilbert P. Ilogon', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `death`
--

CREATE TABLE `death` (
  `id` int(11) NOT NULL,
  `persons_id` int(10) DEFAULT NULL,
  `death_date` date DEFAULT NULL,
  `buried` varchar(255) DEFAULT NULL,
  `municipal_cemetery` varchar(255) DEFAULT NULL,
  `cause_of_death` varchar(255) NOT NULL,
  `folio_no` int(10) DEFAULT NULL,
  `book_no` int(10) DEFAULT NULL,
  `page_no` int(10) DEFAULT NULL,
  `certificate_date` date DEFAULT NULL,
  `parish_name` varchar(255) NOT NULL,
  `parish_priest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `death`
--

INSERT INTO `death` (`id`, `persons_id`, `death_date`, `buried`, `municipal_cemetery`, `cause_of_death`, `folio_no`, `book_no`, `page_no`, `certificate_date`, `parish_name`, `parish_priest`) VALUES
(15, 2, '2018-10-15', '2018-10-31', 'Tubigon Catholic Cemetery', 'cancer sa lungs', 234234, 2147483647, 234324, '2018-10-23', 'St. Isidore The Farmer Parish', 1),
(21, 4, '2018-10-29', '2018-10-28', 'Tubigon Catholic Cemetery', 'cardiac arrest', 1, 23, 2, '2018-10-18', 'St. Isidore The Farmer Parish', 1),
(22, 7, '2018-10-30', '2018-10-21', 'Tubigon Catholic Cemetery', 'cancer', 1, 2, 2, '2018-10-11', 'St. Isidore The Farmer Parish', 1),
(23, 8, '2018-10-08', '2018-10-09', 'Tubigon Catholic Cemetery', 'ererer', 1, 2, 4, '2018-10-25', 'St. Isidore The Farmer Parish', 1),
(35, 17, '2018-10-14', '2018-10-21', 'Tubigon Catholic Cemetery', 'cardiac arrest', 1, 24, 2, '2018-10-18', 'St. Isidore The Farmer Parish', 1);

-- --------------------------------------------------------

--
-- Table structure for table `marriage`
--

CREATE TABLE `marriage` (
  `id` int(11) NOT NULL,
  `parish_name` varchar(255) DEFAULT NULL,
  `groom_persons_id` int(10) DEFAULT NULL,
  `bride_persons_id` int(10) DEFAULT NULL,
  `married_date` date DEFAULT NULL,
  `solemnize_by` varchar(255) NOT NULL,
  `sponsors` varchar(225) DEFAULT NULL,
  `residence` varchar(255) DEFAULT NULL,
  `book_no` int(10) DEFAULT NULL,
  `page_no` int(10) DEFAULT NULL,
  `line_no` int(10) DEFAULT NULL,
  `marriage_license_no` varchar(100) DEFAULT NULL,
  `issued_place` varchar(500) DEFAULT NULL,
  `issued_date` date DEFAULT NULL,
  `exhibited_date` date DEFAULT NULL,
  `parish_priest` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marriage`
--

INSERT INTO `marriage` (`id`, `parish_name`, `groom_persons_id`, `bride_persons_id`, `married_date`, `solemnize_by`, `sponsors`, `residence`, `book_no`, `page_no`, `line_no`, `marriage_license_no`, `issued_place`, `issued_date`, `exhibited_date`, `parish_priest`) VALUES
(38, 'St. Isidore The Farmer Parish', 10, 9, '2018-10-22', 'Rev. Fr. Alberto Uy', 'ndasjnfowjgpojrgoernj[ore', 'bnijbilnionionu', 12, 2, 1, '4', 'Tubigon, Bohol', '2018-10-25', '2018-10-12', 'Rev. Fr. Gilbert P. Ilogon'),
(39, 'St. Isidore The Farmer Parish', 13, 14, '2018-10-11', 'Rev. Fr. Albert Uy', 'fvdshdgkhjlfkh', 'Tubigon, Bohol', 1, 3, 34, '10023', 'cbrligfrowgoher', '2018-10-21', '2018-10-17', 'Rev. Fr. Gilbert P. Ilogon'),
(40, 'St. Isidore The Farmer Parish', 14, 13, '2018-10-11', 'Rev. Fr. Albert Uy', 'Janrey Maligro', 'Inabanga, Bohol', 1, 4, 2, '2342323', 'Tubigon, Bohol', '2018-10-25', '2018-10-12', 'Rev. Fr. Gilbert P. Ilogon'),
(41, 'St. Isidore The Farmer Parish', 16, 15, '2018-10-04', 'Rev. Fr. Albert Uy', 'gkjhjkjhkl', 'hjkhl', 1, 12, 1, '1', '1', '2018-10-22', '2018-10-18', 'Rev. Fr. Gilbert P. Ilogon'),
(42, 'St. Isidore The Farmer Parish', 15, 16, '2018-10-10', 'Rev. Fr. Victor Allen Caresosa', 'Joanna Hannah Politesa', 'Tubigon, Bohol', 1, 1, 1, '1', 'Tu', '2018-10-29', '2018-10-18', 'Rev. Fr. Gilbert P. Ilogon'),
(44, 'St. Isidore The Farmer Parish', 7, 2, '2018-10-30', 'Rev. Fr. Albert Uy', 'dfdsf', 'Inabanga, Bohol', 12, 12, 1, '100', 'Tubigon, Bohol', '2018-10-22', '1914-08-19', 'Rev. Fr. Gilbert P. Ilogon'),
(50, 'St. Isidore The Farmer Parish', 8, 4, '2018-10-04', 'Rev. Fr. Albert Uy', 'ewtgreutyir', 'Inabanga, Bohol', 12, 1, 12, '1', 'Tubigon, Bohol', '2018-10-26', '2018-10-24', 'Rev. Fr. Gilbert P. Ilogon');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1534723359),
('m180813_015104_create_persons_table', 1534723362),
('m180813_015132_create_baptism_table', 1534723363),
('m180813_015206_create_confirmation_table', 1534723364),
('m180813_015232_create_marriage_table', 1534723365),
('m180813_015245_create_death_table', 1534723366),
('m180818_143025_create_user_table', 1534723366),
('m180915_130309_create_priest_table', 1537597305);

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fathers_name` varchar(255) DEFAULT NULL,
  `mothers_name` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `birth_place` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `name`, `fathers_name`, `mothers_name`, `nationality`, `gender`, `birth_date`, `birth_place`) VALUES
(2, 'Joanna Joy Piodos', 'Divino Piodos', 'Divina Piodos', 'Filipino', 'Female', '1998-09-10', 'Poblacion, Tubigon, Bohol'),
(4, 'Keziah Faith Boco', 'Armando Boco', 'Rosalinda Boco', 'Filipino', 'Female', '1998-09-10', 'Poblacion, Tubigon, Bohol'),
(7, 'Christian P. Labtan', 'Fidel A. Labtan, Sr.', 'Melodina P. Labtan', 'Filipino', 'Male', '1998-09-10', 'Poblacion, Tubigon, Bohol'),
(8, 'Julio Lopez', 'Victorino Tortor', 'Teresa Lopez', 'African', 'Male', '1997-04-24', 'Tubigon, Bohol'),
(9, 'Joanie Hugo', 'Justiniano Hugo Jr.', 'Feliciana Hugo', 'Filipino', 'Female', '1999-04-09', 'Cawayan, Inabanga, Bohol'),
(10, 'Andrew E.', 'Eustaquio E.', 'Juliana E.', 'Filipino', 'Male', '1997-04-24', 'Tubigon, Bohol'),
(13, 'Ella Cosadio', 'Gavino Cosadio', 'Gavina Cosadio', 'Filipino', 'Female', '1998-09-10', 'Poblacion, Tubigon, Bohol'),
(14, 'Ian Dumadapat', 'James Dumadapat', 'Joana Dumdapat', 'Filipino', 'Male', '1997-04-24', 'Tubigon, Bohol'),
(15, 'Janrey Maligro', 'Iyang papa', 'Iyang Mama', 'Filipino', 'Male', '1998-05-28', 'Gov. Celestino Gallares Memorial Hospital'),
(16, 'Rosemarilou Flores', 'Rosas Moe', 'Rosana Roses', 'Filipino', 'Female', '1999-09-09', 'Nueva Fuersa, Carmen, Bohol'),
(17, 'Leda Lorraine Niepes', 'Lolito Niepes', 'Leila Niepes', 'Filipino', 'Female', '1999-04-17', 'Catigbian,Bohol'),
(18, 'Christian Tutor', 'Avelino Tutor', 'Gracia Tutor', 'Filipino', 'Male', '1998-09-10', 'Cagawasan, Inabanga, Bohol');

-- --------------------------------------------------------

--
-- Table structure for table `priest`
--

CREATE TABLE `priest` (
  `id` int(11) NOT NULL,
  `parish_priest` varchar(255) DEFAULT NULL,
  `priest_role` varchar(255) NOT NULL COMMENT '0=parish priest, 1=officiating priest'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `priest`
--

INSERT INTO `priest` (`id`, `parish_priest`, `priest_role`) VALUES
(1, 'Rev. Fr. Gilbert P. Ilogon', '0'),
(2, 'Rev. Fr. Tomas Balatayo, Jr.', '1'),
(3, 'Rev. Fr. Gee Christian Lagria', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `role` int(10) DEFAULT NULL,
  `authkey` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `status`, `role`, `authkey`) VALUES
(1, 'admin', 'labtanxtian@gmail.com', '$2y$13$q/hvJINWbVCl1..XZcUlK..QMXhw8ES.cMo8asalRyXZY.MY20xdm', 10, 100, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baptism`
--
ALTER TABLE `baptism`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-baptism-persons_id` (`persons_id`);

--
-- Indexes for table `confirmation`
--
ALTER TABLE `confirmation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-confirmation-persons_id` (`persons_id`);

--
-- Indexes for table `death`
--
ALTER TABLE `death`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-death-persons_id` (`persons_id`),
  ADD KEY `parish_priest` (`parish_priest`);

--
-- Indexes for table `marriage`
--
ALTER TABLE `marriage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-marriage-groom_persons_id` (`groom_persons_id`),
  ADD KEY `idx-marriage-bride_persons_id` (`bride_persons_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `priest`
--
ALTER TABLE `priest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baptism`
--
ALTER TABLE `baptism`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `confirmation`
--
ALTER TABLE `confirmation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `death`
--
ALTER TABLE `death`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `marriage`
--
ALTER TABLE `marriage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `priest`
--
ALTER TABLE `priest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baptism`
--
ALTER TABLE `baptism`
  ADD CONSTRAINT `baptism_ibfk_1` FOREIGN KEY (`persons_id`) REFERENCES `persons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `confirmation`
--
ALTER TABLE `confirmation`
  ADD CONSTRAINT `confirmation_ibfk_1` FOREIGN KEY (`persons_id`) REFERENCES `persons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `death`
--
ALTER TABLE `death`
  ADD CONSTRAINT `death_ibfk_1` FOREIGN KEY (`parish_priest`) REFERENCES `priest` (`id`),
  ADD CONSTRAINT `fk-death-persons` FOREIGN KEY (`persons_id`) REFERENCES `persons` (`id`);

--
-- Constraints for table `marriage`
--
ALTER TABLE `marriage`
  ADD CONSTRAINT `marriage_ibfk_1` FOREIGN KEY (`groom_persons_id`) REFERENCES `persons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marriage_ibfk_2` FOREIGN KEY (`bride_persons_id`) REFERENCES `persons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

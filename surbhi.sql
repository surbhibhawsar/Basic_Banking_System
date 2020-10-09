

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `surbhi`
--

--
-- Table structure for table `users`
--

CREATE TABLE `user` (
  `name` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `credit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `users` (`name`, `email`, `credit`) VALUES
('surbhi', 'surbhi17@gmail.com', '100'),
('aayushi', 'aayushi15@gmail.com', '100'),
('koutik', 'koutik9@gmail.com', '100'),
('aarti', 'aarti21@gmail.com', '100'),
('mahi', 'mahi13@gmail.com', '100'),
('manan', 'manan37@gmail.com', '100'),
('Shubham', 'Shubham15@gmail.com', '100'),
('prakhar', 'prakhar19@gmail.com', '100'),
('krishna', 'krishna21@gmail.com', '100'),
('ankita', 'ankita05@gmail.com', '100');


ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;


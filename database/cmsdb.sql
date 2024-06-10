
CREATE TABLE `adlogin` (
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `a_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adlogin`
--

INSERT INTO `adlogin` (`email`, `password`, `a_id`) VALUES
('Siam@gmail.com', '12345', 1),
('Raita@gmail.com', '12345', 2);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `pnumber` int(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `email`, `name`, `pnumber`) VALUES
(1, 'Siam@gmail.com', 'Sifat Noor Siam', 12345),
(2, 'Raita@gmail.com', 'Tasnim Saima Raita', 12345);


CREATE TABLE `marchent` (
  `a_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `pnumber` int(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `marchent` (`a_id`, `email`, `name`, `pnumber`) VALUES
(1, 'akash@gmail.com', 'akash islam', 12345),
(2, 'tasnim@gmail.com', 'tasnim tanzin', 12345);

CREATE TABLE `mlogin` (
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `a_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adlogin`
--

INSERT INTO `mlogin` (`email`, `password`, `a_id`) VALUES
('akash@gmail.com', '12345', 1),
('tasnim@gmail.com', '12345', 2);
-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `msg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `subject`, `msg`) VALUES
(1, 'customer@gmail.com', 'delay', 'I have courier 2 weeks ago but its not delivered yet..'),
(2, 'customeris033@cambridge.edu.in', 'Delay', 'gjndfjkgnhdfjkgn');

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `c_id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `semail` varchar(50) DEFAULT NULL,
  `remail` varchar(50) DEFAULT NULL,
  `sname` varchar(50) DEFAULT NULL,
  `rname` varchar(50) DEFAULT NULL,
  `sphone` varchar(20) DEFAULT NULL,
  `rphone` varchar(20) DEFAULT NULL,
  `saddress` varchar(50) DEFAULT NULL,
  `raddress` varchar(50) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `billno` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Waiting',
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`c_id`, `u_id`, `semail`, `remail`, `sname`, `rname`, `sphone`, `rphone`, `saddress`, `raddress`, `weight`, `billno`, `image`, `date`, `status`,`price`) VALUES
(7, 4, 'customer@gmail.com', 'monia@gmail.com', 'customer', 'monia', '016362786223', '01652665208', '1/12 Puran dhaka,Bangladesh', ' Sonargaon, Narayanganj, Bangladesh', 2, 22, 'cddd.jpeg', '2024-03-06','Waiting',600),
(8, 4, 'customer@gmail.com', 'tania@gmail.com', 'customer', 'tania', '016362786223', '01652665208', '1/12 Puran dhaka,Bangladesh', ' Sonargaon, Narayanganj, Bangladesh', 2, 3263, 'fc.png', '2024-03-06','Waiting',600);

-- --------------------------------------------------------

--
-- Table structure for table `login`

CREATE TABLE `pc` (
 `percelT` varchar(20) NOT NULL,
  `wt` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `pc` (`percelT`, `wt`, `price`) VALUES
('Normal ',1, 300),
('VIP ',1, 2000),
('Urgent ',1, 900);

CREATE TABLE `login` (
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `u_id`) VALUES
('victor@gmail.com', '12345', 1),
('sourav@gmail.com', '12345', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
CREATE TABLE `payment` (
  `name` varchar(20) NOT NULL,
  `percelT` varchar(20) NOT NULL,
  `date` date NOT NULL,
    `book_id` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `pnumber` int(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `email`, `name`, `pnumber`) VALUES
(1, 'victor@gmail.com', 'Victor Dhrubo', 015697665),
(4, 'sourav@gmail.com', 'Sourav Hasan', 0147483647);

CREATE TABLE `confirmed_booking` (
  `c_id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `semail` varchar(50) DEFAULT NULL,
  `remail` varchar(50) DEFAULT NULL,
  `sname` varchar(50) DEFAULT NULL,
  `rname` varchar(50) DEFAULT NULL,
  `sphone` varchar(20) DEFAULT NULL,
  `rphone` varchar(20) DEFAULT NULL,
  `saddress` varchar(50) DEFAULT NULL,
  `raddress` varchar(50) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `billno` int(11) NOT NULL,
  `date` date NOT NULL
)  ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `confirmed_booking` (`c_id`, `u_id`, `semail`, `remail`, `sname`, `rname`, `sphone`, `rphone`, `saddress`, `raddress`, `weight`, `billno`,  `date`) VALUES
(7, 4, 'customer@gmail.com', 'monia@gmail.com', 'customer', 'monia', '016362786223', '01652665208', '1/12 Puran dhaka,Bangladesh', ' Sonargaon, Narayanganj, Bangladesh', 2, 22,  '2024-03-06'),
(8, 4, 'customer@gmail.com', 'tania@gmail.com', 'customer', 'tania', '016362786223', '01652665208', '1/12 Puran dhaka,Bangladesh', ' Sonargaon, Narayanganj, Bangladesh', 2, 3263, '2024-03-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adlogin`
--
ALTER TABLE `mlogin`
  ADD KEY `a_id` (`a_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `marchent`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `email` (`email`);

ALTER TABLE `adlogin`
  ADD KEY `a_id` (`a_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `email` (`email`);--

-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `billno` (`billno`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
ALTER TABLE `marchent`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courier`
--
ALTER TABLE `courier`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adlogin`
--
ALTER TABLE `adlogin`
  ADD CONSTRAINT `adlogin_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `admin` (`a_id`);

--
ALTER TABLE `mlogin`
  ADD CONSTRAINT `mlogin_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `marchent` (`a_id`);
-- Constraints for table `courier`
--
ALTER TABLE `courier`
  ADD CONSTRAINT `courier_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE;
COMMIT;


--created by Sifat Noor Siam

CREATE VIEW AdminsWithGmail AS
WITH AdminsCTE AS (
  SELECT a_id, email, name, pnumber
  FROM admin
)
SELECT *
FROM AdminsCTE
WHERE email LIKE '%@gmail.com';



CREATE VIEW MerchantsWithSpecificPhone AS
WITH MerchantsCTE AS (
  SELECT a_id, email, name, pnumber
  FROM marchent
)
SELECT *
FROM MerchantsCTE
WHERE pnumber = 12345;


--Created by Tasnim Saima Raita


CREATE VIEW UsersWithBookings AS
WITH UsersCTE AS (
  SELECT u_id, email, name, pnumber
  FROM users
)
SELECT *
FROM UsersCTE
WHERE u_id IN (SELECT DISTINCT u_id FROM courier);



CREATE VIEW ContactsWithDelay AS
WITH ContactsCTE AS (
  SELECT id, email, subject, msg
  FROM contacts
)
SELECT *
FROM ContactsCTE
WHERE subject = 'Delay';


--Created by Mayisha Hossain Bhuiyan


CREATE VIEW WaitingCouriers AS
WITH CouriersCTE AS (
  SELECT c_id, u_id, semail, remail, sname, rname, sphone, rphone, saddress, raddress, weight, billno, image, date, status, price
  FROM courier
)
SELECT *
FROM CouriersCTE
WHERE status = 'Waiting';



CREATE VIEW AdminsWithMultipleLogins AS
WITH AdminLoginsCTE AS (
  SELECT a_id, COUNT(*) as login_count
  FROM adlogin
  GROUP BY a_id
  HAVING login_count > 1
)
SELECT a.*
FROM admin a
JOIN AdminLoginsCTE al ON a.a_id = al.a_id;


--Created by Dharitry dey



CREATE VIEW MerchantsWithMultipleLogins AS
WITH MerchantLoginsCTE AS (
  SELECT a_id, COUNT(*) as login_count
  FROM mlogin
  GROUP BY a_id
  HAVING login_count > 1
)
SELECT m.*
FROM marchent m
JOIN MerchantLoginsCTE ml ON m.a_id = ml.a_id;



CREATE VIEW UsersWithRecentBookings AS
WITH RecentBookingsCTE AS (
  SELECT u_id, email, name, pnumber
  FROM users
  WHERE u_id IN (
    SELECT DISTINCT u_id
    FROM courier
    WHERE date >= CURDATE() - INTERVAL 30 DAY
  )
)
SELECT *
FROM RecentBookingsCTE;


create view courierinfo as
select * from courier;
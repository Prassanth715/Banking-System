CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `Balance` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO users (Name, Mail, Balance) VALUES 
('Cristiano', 'cris@gmail.com', 75000),
('Renato', 'rena@gmail.com', 65000),
('Pepe', 'pepe@gmail.com', 70000),
('Palhinha', 'pal@gmail.com', 85000),
('Rui', 'rui@gmail.com', 60000),
('Silva', 'silva@gmail.com', 45000),
('Felix', 'felix@gmail.com', 35000),
('Dias', 'dias@gmail.com', 80000),
('Jota', 'jota@gmail.com', 55000),
('Bruno', 'bruno@gmail.com', 25000);


ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

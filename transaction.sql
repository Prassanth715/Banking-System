CREATE TABLE `transaction` (
  `Sno` int(11) NOT NULL,
  `Sender` varchar(15) NOT NULL,
  `Receiver` varchar(15) NOT NULL,
  `Amount` int(15) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO transaction (Sender, Receiver, Amount, datetime) VALUES
('Renato', 'Bruno', 10000, '2021-07-04 16:46:48'),
('Rui', 'Silva', 15000, '2021-07-04 16:52:07'),
('Cristiano', 'Pepe', 5000, '2021-07-04 16:52:49'),
('Palhinha', 'Jota', 20000, '2021-07-04 17:10:10');


ALTER TABLE `transaction`
  ADD PRIMARY KEY (`Sno`);


ALTER TABLE `transaction`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

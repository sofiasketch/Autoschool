SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `клиенты старше 18 лет` ()  NO SQL
SELECT * FROM trial_lesson
WHERE age  >="18"$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `поиск цен в городе Москва` ()  NO SQL
SELECT * FROM price 
WHERE city = "1"$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `поиск цен в городе Санкт-Петербург` ()  NO SQL
SELECT * FROM price 
WHERE city = "0.9"$$

DELIMITER ;

CREATE TABLE `adresses` (
  `id` smallint(6) NOT NULL,
  `city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `adresses` (`id`, `city`, `adress`, `phone_number`, `email`, `link`) VALUES
(1, 'Москва', 'Москва, Кирова 107к1', '89365028841', 'msk_fivespeeds@gmail.com', 'vk.com/msk_fivespeeds'),
(2, 'Санкт-Петербург', 'Санкт-Петербург, Софьи Ковалевской 16', '89556306710', 'sp_fivespeeds@gmail.com', 'vk.com/sp_fivespeeds'),
(3, 'Казань', 'Казань, Ленина 6', '89002390446', 'kaz_fivespeeds@gmail.com', 'vk.com/kaz_fivespeeds'),
(4, 'Ижевск', 'Ижевск, Карла Маркса 102', '89126483898', 'izh_fivespeeds@gmail.com', 'vk.com/izh_fivespeeds'),
(5, 'Пермь', 'Пермь, Крапивина 19', '89375609219', 'perm_fivespeeds@gmail.com', 'vk.com/perm_fivespeeds');

CREATE TABLE `price` (
  `id` smallint(6) NOT NULL,
  `city` float NOT NULL,
  `cost` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` float NOT NULL,
  `intensity` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `price` (`id`, `city`, `cost`, `category`, `intensity`) VALUES
(1, 0.7, '26880', 24000, 1.6),
(2, 1, '21600', 18000, 1.2),
(3, 0.9, '21600', 30000, 0.8),
(4, 0.8, '14400', 15000, 1.2),
(5, 0.6, '22080', 23000, 1.6),
(6, 0.6, '19200', 40000, 0.8),
(7, 0.7, '16800', 15000, 1.6);

CREATE TABLE `registration_lesson` (
  `id` smallint(6) NOT NULL,
  `adresses` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trial_lesson` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `registration_lesson` (`id`, `adresses`, `trial_lesson`, `price`) VALUES
(1, 'Казань, Ленина 6', '89901554321', '14400'),
(2, 'Казань, Ленина 6', '89127493750', '14400'),
(3, 'Москва, Кирова 107к1', '89038885190', '21600'),
(4, 'Ижевск, Карла Маркса 102', '89332664039', '26880'),
(5, 'Санкт-Петербург, Софьи Ковалевской 16', '89204387401', '21600'),
(6, 'Ижевск, Карла Маркса 102', '89038885190', '16800'),
(7, 'Ижевск, Карла Маркса 102', '89332664039', '26880'),
(8, 'Пермь, Крапивина 19', '89332664039', '19200'),
(9, 'Москва, Кирова 107к1', '89127493750', '21600'),
(10, 'Москва, Кирова 107к1', '89901554321', '21600');

CREATE TABLE `trial_lesson` (
  `id` smallint(6) NOT NULL,
  `FIO` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(2) NOT NULL,
  `phone_number` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `trial_lesson` (`id`, `FIO`, `age`, `phone_number`, `email`) VALUES
(1, 'Иван Иванов Иванович', 19, '89127493750', 'ivanov2002@gmai.com'),
(2, 'Перевозчиков Евгений Игоревич', 22, '89204387401', 'perevozchikov@gmail.com'),
(3, 'Березин Николай Александрович', 18, '89038885190', 'berezin2003@gmail.com'),
(4, 'Пономарёв Арсений Валентинович ', 28, '89901554321', 'ponomarev1993@gmail.com'),
(5, 'Кривошеева Вероника Анатольевна', 20, '89332664039', 'krivosheeva2001@gmail.com');

ALTER TABLE `adresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adress` (`adress`);

ALTER TABLE `price`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cost` (`cost`);

ALTER TABLE `registration_lesson`
  ADD PRIMARY KEY (`id`),
  ADD KEY `price` (`price`),
  ADD KEY `trial_lesson` (`trial_lesson`),
  ADD KEY `adresses` (`adresses`);

ALTER TABLE `trial_lesson`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phone_number` (`phone_number`);

ALTER TABLE `adresses`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `price`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `registration_lesson`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `trial_lesson`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `registration_lesson`
  ADD CONSTRAINT `registration_lesson_ibfk_1` FOREIGN KEY (`adresses`) REFERENCES `adresses` (`adress`),
  ADD CONSTRAINT `registration_lesson_ibfk_2` FOREIGN KEY (`trial_lesson`) REFERENCES `trial_lesson` (`phone_number`),
  ADD CONSTRAINT `registration_lesson_ibfk_3` FOREIGN KEY (`price`) REFERENCES `price` (`cost`);
COMMIT;

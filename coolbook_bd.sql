-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 31 2021 г., 13:46
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `coolbook_bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `name` text NOT NULL,
  `birthdate` text DEFAULT NULL,
  `diedate` text DEFAULT NULL,
  `place_of_birth` text NOT NULL,
  `profession` text DEFAULT NULL,
  `description` text NOT NULL,
  `biography` text NOT NULL,
  `id` int(11) NOT NULL,
  `urlImg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`name`, `birthdate`, `diedate`, `place_of_birth`, `profession`, `description`, `biography`, `id`, `urlImg`) VALUES
('Ray Bredbery', '13 января 2000', '15 декабря 2001', 'Село Нижегородское', 'Литератор', 'Ну крутой кент', 'Ну крутой кент 1', 2, 'https://m.day.kyiv.ua/sites/default/files/main/articles/15082013/17peskov.jpg'),
('Достаевский', '123', '15 декабря 2001', 'Мне похуй', 'Литератор', 'йцуйцй', 'йцуйцй1', 3, 'https://m.day.kyiv.ua/sites/default/files/main/articles/15082013/17peskov.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `userID` int(11) NOT NULL,
  `products` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`userID`, `products`, `count`) VALUES
(2, 2, 1),
(2, 3, 5),
(2, 4, 11),
(2, 1, 2),
(1, 1, 1),
(1, 2, 1),
(5, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `name` text NOT NULL,
  `author` text NOT NULL,
  `urlImg` text NOT NULL,
  `id` int(11) NOT NULL,
  `price` int(5) NOT NULL,
  `genre` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`name`, `author`, `urlImg`, `id`, `price`, `genre`, `description`) VALUES
('Книга номер 1', 'Ray Bradbury', 'https://cv2.litres.ru/pub/c/elektronnaya-kniga/cover_330/66260724-kristian-vind-introvert.jpg', 1, 400, 'Fantazy', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque ab\r\n//           praesentium, ad ipsa, exercitationem eveniet deleniti, omnis\r\n//           temporibus at corrupti beatae laudantium officia aliquam dolorem\r\n//           aliquid. Eaque labore corporis assumenda? Lorem ipsum dolor sit amet\r\n//           consectetur adipisicing elit. Commodi asperiores minus ipsum vel\r\n//           maiores, delectus deserunt, similique in et aperiam voluptatibus\r\n//           nesciunt odio! Quaerat, suscipit possimus odit culpa fugiat atque!\r\n//           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quo\r\n//           voluptas tempora corrupti velit incidunt reiciendis alias. Eos est hic\r\n//           adipisci dolore, obcaecati, dicta nostrum aperiam fuga sit vel\r\n//           reiciendis.'),
('Книга номер 2', 'Ray Bradbury', 'https://cdn.100sp.ru/pictures/262714786', 2, 299, 'Fantazy', 'Какая-то новая обложка...'),
('Книга номер 3', 'Ray Bradbury', 'https://cdn.100sp.ru/pictures/262714786', 3, 2001, 'Fantazy', 'Новая книга'),
('Книга номер 4', 'Ray Bradbury', 'https://cv2.litres.ru/pub/c/elektronnaya-kniga/cover_330/66260724-kristian-vind-introvert.jpg', 4, 500, 'Fantazy', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque ab\r\npraesentium, ad ipsa, exercitationem eveniet deleniti, omnis\r\ntemporibus at corrupti beatae laudantium officia aliquam dolorem\r\naliquid. Eaque labore corporis assumenda? Lorem ipsum dolor sit amet\r\nconsectetur adipisicing elit. Commodi asperiores minus ipsum vel\r\nvoluptas tempora corrupti velit incidunt reiciendis alias. Eos est hic\r\nadipisci dolore, obcaecati, dicta nostrum aperiam fuga sit velreiciendis. hello world 2');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `FIO` text NOT NULL,
  `adress` text NOT NULL,
  `card` text NOT NULL,
  `phone` text NOT NULL,
  `mailIndex` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `support`
--

CREATE TABLE `support` (
  `email` text NOT NULL,
  `message` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `email` text NOT NULL,
  `password` text NOT NULL,
  `username` text DEFAULT NULL,
  `id` int(11) NOT NULL,
  `admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`email`, `password`, `username`, `id`, `admin`) VALUES
('ripox77954@mi166.com', '$2y$10$cX9M7TXvLu9Gxm36YDGYiOVTHduVDq5ysyCwviQZgdeAzHGCWuL4K', 'qweqwe', 1, 1),
('ripox77954@mi3166.com', '$2y$10$6cmvE1HGSUv/OMTWtBDg3.49nUHgHYSTxU/7X6wH9/YXfuW.fE0I.', 'gjoygo', 2, 0),
('ripox77954@mi166.com1', '$2y$10$FElAqHnoaZH3sYs3RLDc5OLQsGfnhEuX6xRTTv6dLskRq9i9dJyke', 'gjoygo2321', 3, 0),
('ripox779524244@mi166.com', '$2y$10$ax3MjQ.FuM75wzmvmPIzC.Txtuf3aGHhjx2YwMz9kUPKEF0pjNece', 'gjoygo', 4, 0),
('oxffi@gmail.com', '$2y$10$lX8uE8geE502gPYKx6jrieCxh4qE3JOqxqj2mdtcPgKX5e.6aJzM6', 'oxffi613 ', 5, 1),
('vladislav.kori@yandex.ru', '$2y$10$hqlNRjSod.16u/sS1HkGcODWKB4qw0TQtrA489m3LFEzNw.Ff5HKC', 'gjoygo', 6, 0),
('hdsl@mail.ru', '$2y$10$ZZx5aTRF8z3uCaivTFf7hOkh3mc0ATQMO5yD2l6nTFKdCFbufVaJG', 'gjoygo', 9, 0),
('jodi@mail.ru', '$2y$10$97RXXY3G/qAkdrppY3TuJeYe5SHm8Gj8bAT0xcEN77W.OKV/FNd1a', 'team_leader', 10, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`(255));

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

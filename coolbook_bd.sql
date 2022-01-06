-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 06 2022 г., 14:46
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
(11, 1, 1),
(2, 10, 2),
(2, 11, 2),
(14, 10, 1),
(14, 13, 1),
(6, 9, 2),
(6, 10, 1),
(6, 11, 1),
(5, 10, 2),
(5, 13, 1),
(5, 9, 2);

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
('1984', 'Джордж Оруэлл', 'https://cv9.litres.ru/pub/c/elektronnaya-kniga/cover_330/129098--.jpg', 9, 169, 'Антиутопия', 'Одна из самых знаменитых антиутопий XX века – роман «1984» английского писателя Джорджа Оруэлла (1903–1950) был написан в 1948 году и продолжает тему «преданной революции», раскрытую в «Скотном дворе». По Оруэллу, нет и не может быть ничего ужаснее тотальной несвободы. Тоталитаризм уничтожает в человеке все духовные потребности, мысли, чувства и сам разум, оставляя лишь постоянный страх и единственный выбор – между молчанием и смертью, и если Старший Брат смотрит на тебя и заявляет, что «дважды два – пять», значит, так и есть.\r\n\r\nВ книге представлен классический перевод Виктора Голышева.'),
('Преступление и наказание', 'Фёдор Достоевский', 'https://cv9.litres.ru/pub/c/elektronnaya-kniga/cover_330/139491-fedor-dostoevskiy-prestuplenie-i-nakazanie-139491.jpg', 10, 993, 'Русская классика', '«Преступление и наказание» – гениальный роман, главные темы которого: преступление и наказание, жертвенность и любовь, свобода и гордость человека – обрамлены почти детективным сюжетом.\r\n\r\nМногократно экранизированный и не раз поставленный на сцене, он и по сей день читается на одном дыхании.'),
('Алхимик', 'Пауло Коэльо', 'https://cv5.litres.ru/pub/c/elektronnaya-kniga/cover_330/122351-paulo-koelo-alhimik-122351.jpg', 11, 149, 'Зарубежная классика', '«Алхимик» – самый известный роман бразильского писателя Пауло Коэльо, любимая книга миллионов людей во всем мире.\r\n\r\nВ юности люди не боятся мечтать, все кажется им возможным. Но проходит время, и таинственная сила принимается им внушать, что их желания неосуществимы.\r\n\r\n«Добиться воплощения своей Судьбы – вот единственная подлинная обязанность человека…», – утверждает Пауло Коэльо.\r\n\r\nЭтот ставший культовым роман-притча способен изменить жизнь своих читателей.'),
('Нечто из Блэк Вудс', 'Кристиан Роберт Винд', 'https://cv5.litres.ru/pub/c/elektronnaya-kniga/cover_330/48404851-kristian-vind-nechto-iz-blek-vuds.jpg', 12, 299, 'Детектив', 'Вторая книга серии переносит читателей в 1978 год — в то время, когда специальный детектив Фрэнк Миллер получает странное задание: жителей небольшого городка терроризирует необъяснимая бессонница, сводящая людей с ума. Покинув Вашингтон вместе с новым напарником Алексом Ридом, Миллер оказывается в Блэк Вудс — крошечном поселении, затерянном в непроходимых лесах. И каждый, кто отваживается сунуться в черную чащу, перестает спать по ночам. Что-то зловещее скрывается за этими столетними деревьями, что-то страшное угрожает теперь не только жителям Блэк Вудс, но и самому детективу…'),
('Дискретная математика для программистов', 'Род Хаггарти', 'https://cv1.litres.ru/pub/c/pdf-kniga/cover_330/2785815-rod-haggarti-diskretnaya-matematika-dlya-programmistov.jpg', 13, 199, 'Компьютерная литература', 'Основополагающее введение в дискретную математику, без знания которой невозможно успешно заниматься информатикой и программированием. Ни одно из многочисленных изданий по этой дисциплине, вышедших на русском языке, не читается с таким удовольствием и пользой. В доступной и весьма увлекательной форме автор рассказывает о фундаментальных понятиях дискретной математики – о логике, множествах, графах, отношениях и булевых функциях. Теория изложена кратко и иллюстрируется многочисленными простыми примерами, что делает ее доступной даже школьнику. После каждой главы (начиная со второй) рассматривается приложение описанных методов к информатике.\r\n\r\nДополнения в издании на русском языке посвящены актуальным задачам теории графов, рекурсивным алгоритмам, общей проблеме перебора и задачам целочисленного программирования.\r\n\r\nКнига будет полезна студентам, изучающим курс дискретной математики, а также всем желающим проникнуть в технику написания и проверки корректности алгоритмов, включая программистов-практиков.'),
('Дюна', 'Фрэнк Герберт', 'https://cv9.litres.ru/pub/c/elektronnaya-kniga/cover_415/55339991-frenk-gerbert-duna.jpg', 21, 379, 'Зарубежная фантастика', 'Роман «Дюна», первая книга прославленной саги, знакомит читателя с Арракисом – миром суровых пустынь, исполинских песчаных червей, отважных фрименов и таинственной специи. Безграничная фантазия автора создала яркую, почти осязаемую вселенную, в которой есть враждующие Великие Дома, могущественная Космическая Гильдия, загадочный Орден Бинэ Гессерит и неуловимые ассасины.');

-- --------------------------------------------------------

--
-- Структура таблицы `genres`
--

CREATE TABLE `genres` (
  `name` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `genres`
--

INSERT INTO `genres` (`name`, `id`) VALUES
('Зарубежная классика', 1),
('Русская классика', 2),
('Утопия', 3),
('Зарубежная фантастика', 4);

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

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`FIO`, `adress`, `card`, `phone`, `mailIndex`, `id`) VALUES
('asfasfqwf', 'qwfqwfqwf', '1234123412341234', '9322510511', '12345', 6),
('sdhjglkhjdsjklg', 'ghisjdjkhgjklsd', '1234 1234 1234 1234', '+7923140105212-5', '125125', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `support`
--

CREATE TABLE `support` (
  `email` text NOT NULL,
  `message` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `support`
--

INSERT INTO `support` (`email`, `message`, `id`) VALUES
('oxffi@gmail.com', 'что-то\r\n', 5);

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
('jodi@mail.ru', '$2y$10$97RXXY3G/qAkdrppY3TuJeYe5SHm8Gj8bAT0xcEN77W.OKV/FNd1a', 'team_leader', 10, 0),
('ripox77954@mi12366.com', '$2y$10$uduEo6NL.bT7G7JSQ6GZ3eawpJ5yiOHRNvtlkMluYLC39ITmMBW76', 'gjoygo', 11, 0),
('rip1ox77954@mi166.com', '$2y$10$Bo82Ck/QhVXNkyiMEH2gjOLYrzVymxY73RZLCDcgUJPivP.URYGWu', 'gjoygo', 12, 0),
('уцекцу', 'уцекцу', 'уцекцу', 13, 0),
('nikrelkov@gmail.com', '$2y$10$Mq1UQ2ZicAEnsw4x3EbL8OvWN72S9E7EW0izbZIxBMALgZy1KVuQG', 'nikrelkov', 14, 0),
('hdjg@mail.ru', '$2y$10$Lbxy2al1kn3LznPm3BVw5OPnxYrUeTu2fsW7LNfA.xa8hnZ0ASklm', '\'&gt;&lt;script&gt;alert(\'xss\')&lt;/script&gt;', 15, 0);

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
-- Индексы таблицы `genres`
--
ALTER TABLE `genres`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

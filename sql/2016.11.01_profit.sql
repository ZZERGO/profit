-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 01 2016 г., 10:42
-- Версия сервера: 5.7.13
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `profit`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) unsigned NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `middlename` varchar(100) NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_mobile` varchar(50) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `land_id` int(11) DEFAULT NULL,
  `gender` char(50) DEFAULT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `lastname`, `firstname`, `middlename`, `login`, `email`, `phone_mobile`, `birthday`, `land_id`, `gender`, `pass`) VALUES
(1, 'Ромашкин', 'Сергей', 'Петрович', 'serg', 'serg@domain.local', NULL, NULL, NULL, 'male, female', ''),
(2, 'Чапаев', 'Василий ', 'Иванович', 'chapayev', 'vasya@domain.local', NULL, NULL, NULL, 'male, female', ''),
(3, 'Пупкин', 'Василий', 'Петрович', 'vasya', 'pupkin@domain.local', NULL, NULL, NULL, 'male, female', ''),
(5, '', 'Кот Матроскин', '', 'matroska', NULL, NULL, NULL, NULL, 'male, female', ''),
(14, 'Трушков', 'Сергей', 'Александрович', 'sergey', 'serge-trushkov@yandex.ru', NULL, NULL, NULL, 'Мужской', '123'),
(15, 'Трушкова', 'Наталья', 'Михайловна', 'natasha', 'trushkova@geops.ru', NULL, NULL, NULL, 'Женский', '123456');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

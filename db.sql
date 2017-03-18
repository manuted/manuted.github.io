-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Хост: localhost:8889
-- Время создания: Мар 18 2017 г., 12:35
-- Версия сервера: 5.5.42
-- Версия PHP: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- База данных: `test_cart`
--

-- --------------------------------------------------------

--
-- Структура таблицы `test_cart`
--

CREATE TABLE `test_cart` (
  `id` int(11) NOT NULL,
  `count` int(100) DEFAULT '1',
  `date` date DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `test_cart`
--

INSERT INTO `test_cart` (`id`, `count`, `date`, `ip`) VALUES
(70, 1, '2017-03-18', '::1'),
(71, 1, '2017-03-18', '::1'),
(72, 1, '2017-03-18', '::1'),
(73, 1, '2017-03-18', '::1'),
(74, 3, '2017-03-18', '::1'),
(75, 6, '2017-03-18', '::1'),
(76, 2, '2017-03-18', '::1'),
(77, 1, '2017-03-18', '::1'),
(78, 1, '2017-03-18', '::1'),
(79, 1, '2017-03-18', '::1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `test_cart`
--
ALTER TABLE `test_cart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `test_cart`
--
ALTER TABLE `test_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=80;
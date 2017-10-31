-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 31 2017 г., 15:48
-- Версия сервера: 5.5.45
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `text` text NOT NULL,
  `author` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `text`, `author`) VALUES
(1, 3, '1', 'admin'),
(2, 3, '3', 'admin'),
(3, 3, 'куеуке ', 'admin'),
(4, 3, '112', 'admin'),
(5, 4, '1231231', 'admin'),
(6, 5, '12', 'admin'),
(9, 5, '3456', 'test'),
(10, 5, '3456', 'test'),
(13, 3, 'rtyurt1111``111111', 'test');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `text` text NOT NULL,
  `title` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `text`, `title`) VALUES
(3, 0, '        пвіпві    ', 'title'),
(4, 0, '<p><strong>                пвіпві&nbsp;</strong></p><p><img src="tiny_mce/plugins/emotions/images/smiley-cool.gif" border="0" />&nbsp;</p><h2>віфафівавфіавіф фів фіввфі&nbsp;</h2><strong />', 'title12'),
(5, 0, 'wertwer tewrew&nbsp;', 'title3'),
(6, 0, '<h1>Lorem Ipsum</h1><h4>&quot;Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...&quot;</h4><h5>&quot;There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...&quot;</h5><hr /><h1><img src="tiny_mce/plugins/emotions/images/smiley-cool.gif" border="0" /></h1>', 'title'),
(7, 0, 'qwerqwerqw', 'title33');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `role`) VALUES
(2, '1', '1', ''),
(3, '2', '1', ''),
(4, 'steven.wu', 'Galactus40', ''),
(5, 'admin', 'admin', ''),
(6, 'test', 'test', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

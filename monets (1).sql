-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 11 2014 г., 10:26
-- Версия сервера: 5.5.37-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `monets`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `created_at`, `updated_at`, `title`, `parent_id`) VALUES
(1, '2014-03-03 13:46:35', '2014-03-03 13:46:35', 'Советские', 0),
(2, '2014-03-06 13:27:33', '2014-03-06 13:27:33', 'Имперские', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `category_goods`
--

CREATE TABLE IF NOT EXISTS `category_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `category_goods`
--

INSERT INTO `category_goods` (`id`, `goods_id`, `category_id`) VALUES
(1, 9, 2),
(2, 10, 1),
(3, 16, 2),
(4, 17, 2),
(5, 18, 2),
(6, 19, 2),
(7, 20, 1),
(8, 21, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumb` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `created_at`, `updated_at`, `title`, `price`, `thumb`, `description`) VALUES
(17, '2014-04-09 05:27:30', '2014-04-09 11:40:08', 'test', '123', 'qcLC57FNw45-JLMU.jpg', '<p>lqwyekwghsjkdsajdjdxcghsdvckjsdafghasdfg</p>'),
(20, '2014-05-27 11:27:05', '2014-05-27 11:27:05', 'qwqw', '1212', 'LiFvGadds.png', '<p>sadasdasdas asdnzxkcnzlck saldhkasd&nbsp;<strong>sadfsfsd</strong></p>');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `title_storage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `goods_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `created_at`, `updated_at`, `title_storage`, `goods_id`) VALUES
(1, '2014-04-08 11:46:06', '2014-04-08 11:46:06', 'nwL517FNw45-JLMU.jpg', 0),
(2, '2014-04-08 11:47:37', '2014-04-08 11:47:37', 'bSm2G7FNw45-JLMU.jpg', 0),
(3, '2014-04-08 11:55:48', '2014-04-08 11:55:48', 'dNGjp7FNw45-JLMU.jpg', 0),
(4, '2014-04-09 05:27:30', '2014-04-09 05:27:30', 'qcLC57FNw45-JLMU.jpg', 17),
(5, '2014-05-27 11:27:05', '2014-05-27 11:27:05', 'LiFvGadds.png', 20);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_02_21_093127_create_categories_table', 1),
('2014_02_21_093127_create_goods_table', 1),
('2014_02_21_093127_create_users_table', 1),
('2014_04_08_115936_create_images_table', 2),
('2014_05_29_084317_create_orders_table', 3),
('2014_06_10_095231_create_news_table', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_content` text COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `created_at`, `updated_at`, `title`, `news_content`, `thumbnail`) VALUES
(1, '2014-06-10 07:44:12', '2014-06-10 07:44:12', 'sdasdsad', '<p>wqeqwewqeqwe</p>', '');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `goods` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `goods`, `status`, `customer`, `customer_phone`, `customer_mail`) VALUES
(1, '2014-05-29 06:28:38', '2014-06-06 10:07:17', 'a:2:{i:0;s:2:"17";i:1;s:2:"10";}', '1', 'awdsads', 'asdsadasdas', 'asdsadsad'),
(2, '2014-06-06 11:20:22', '2014-06-10 10:23:32', 'a:1:{i:0;s:2:"17";}', '2', 'Кирилл Савенков', '6322', 'leoxpw@gmail.com'),
(3, '2014-06-10 08:29:47', '2014-06-10 09:44:20', 'a:1:{i:0;s:2:"17";}', '2', 'Кирилл Савенков', '6322', 'leoxpw@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `username`, `email`, `password`, `firstname`, `lastname`, `phone`) VALUES
(1, '2014-03-03 11:39:11', '2014-03-03 11:39:11', 'admin', 'leoxpw@gmail.com', '$2y$10$ykvUZgeoGQOUFDbDDvihm.e3PdmdE.UfQLWJ1xPWrPysZe9/bffM6', 'Кирилл', 'Савенков', '6322'),
(2, '2014-03-03 11:44:30', '2014-03-03 11:44:30', 'leoxopow', 'leoxopow@gmail.com', '$2y$10$20s7x.rwnEzwc4ZSg8VhiOJ0lrl7zxmWFdRHt3es6qFq0oXTpUJfK', 'Перил', 'Бананов', '457');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

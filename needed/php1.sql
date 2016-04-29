-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1:3306
-- 生成日期: 2016 年 04 月 24 日 16:50
-- 服务器版本: 5.1.28
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `php1`
--

-- --------------------------------------------------------

--
-- 表的结构 `blog_message`
--

CREATE TABLE IF NOT EXISTS `blog_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `blogid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- 导出表中的数据 `blog_message`
--

INSERT INTO `blog_message` (`id`, `userid`, `message`, `blogid`) VALUES
(1, 1, 'HI', 1),
(2, 1, 'second message', 1),
(3, 1, 'good', 2);

-- --------------------------------------------------------

--
-- 表的结构 `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `chat`
--

INSERT INTO `chat` (`id`, `userid`, `message`) VALUES
(1, 1, 'hi'),
(2, 1, 'i''m zhangsan');

-- --------------------------------------------------------

--
-- 表的结构 `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `email`, `message`) VALUES
(1, '22', '22', '22', '22');

-- --------------------------------------------------------

--
-- 表的结构 `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `home`
--

INSERT INTO `home` (`id`, `content`) VALUES
(1, 'Have you always wondered how Virtul reality works? Join us in our new Virtual reality Workshop. Virtual reality or virtual realities (VR), which can be referred to as immersive multimedia or computer-simulated reality, replicates an environment that simulates a physical presence in places in the real world or an imagined world, allowing the user to interact in that world. Virtual realities artificially create sensory experiences, which can include sight, hearing, touch, and smell. Most up-to-date virtual realities are displayed either on a computer screen or with special stereoscopic displays, and some simulations include additional sensory information and focus on real sound through speakers or headphones targeted towards VR users. Some advanced haptic systems now include tactile information, generally known as force feedback in medical, gaming and military applications.');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `address`, `email`) VALUES
(1, 'zhangsan', '11', '11', '11');

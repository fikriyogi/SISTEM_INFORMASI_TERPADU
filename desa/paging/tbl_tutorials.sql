-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2015 at 10:04 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbpaging`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tutorials`
--

CREATE TABLE IF NOT EXISTS `tbl_tutorials` (
  `tuts_id` int(5) NOT NULL AUTO_INCREMENT,
  `tuts_title` varchar(100) NOT NULL,
  `tuts_link` varchar(200) NOT NULL,
  PRIMARY KEY (`tuts_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_tutorials`
--

INSERT INTO `tbl_tutorials` (`tuts_id`, `tuts_title`, `tuts_link`) VALUES
(1, 'Dynamic Drop Down Menu using PHP & MySQLi', 'http://cleartuts.blogspot.com/2015/03/dynamic-drop-down-menu-using-php-and.html'),
(2, 'How to use PHP Data Object - PDO tutorial', 'http://cleartuts.blogspot.com/2015/03/how-to-use-php-data-object-pdo-tutorial.html'),
(3, 'PHP CRUD tutorial with MySQLi extension', 'http://cleartuts.blogspot.com/2015/03/php-crud-tutorial-with-mysqli-extension.html'),
(4, 'Drop Down Menu using CSS3 & jQuery', 'http://cleartuts.blogspot.com/2015/02/how-to-create-drop-down-menu-using-css3.html'),
(5, 'Server Side Form Valiations', 'http://cleartuts.blogspot.com/2015/02/server-side-form-validations-using-php.html'),
(6, 'Registration & Login Script with PHP MySQl', 'http://cleartuts.blogspot.com/2015/01/user-registration-and-login-script-using-php-mysql.html'),
(7, 'PHP CRUD with MySQL Part - 2', 'http://cleartuts.blogspot.com/2015/01/php-oop-crud-tutorial-with-mysql-part-2.html'),
(8, 'Delete uploaded files from Folder', 'http://cleartuts.blogspot.com/2014/12/delete-uploaded-files-from-folder-in-php.html'),
(9, 'Fetch data From Multiple tables', 'http://cleartuts.blogspot.com/2014/12/fetch-data-from-multiple-tables-in-php.html'),
(10, 'File Upload and View with PHP & MySQl', 'http://cleartuts.blogspot.com/2014/12/file-upload-and-view-with-php-and-mysql.html'),
(11, 'Simple PHP CRUD operations', 'http://cleartuts.blogspot.com/2014/12/simple-php-crud-operations-with-mysql.html'),
(12, 'Validations', 'http://cleartuts.blogspot.com/search/label/validations'),
(13, 'HTML5 Form validations', 'http://cleartuts.blogspot.com/2015/03/html5-form-validations-with-pattern.html'),
(14, 'PHP', 'http://cleartuts.blogspot.com/search/label/php');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2015 at 05:15 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hackaglobal`
--
USE `tehran2`;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `title`, `domain_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Tehran', 'Tehran', '2015-05-15 00:00:00', '2015-05-15 00:00:00', NULL),
(2, 'Esfehan', 'Esfehan', '2015-05-15 00:00:00', '2015-05-15 00:00:00', NULL);

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `held_at`, `held_at_string`, `capacity`, `address`, `map`, `city_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'hackaglobal', 'sadasdasd', '2015-05-15 00:00:00', 'این هم رویداد بعدی', 127, 'asdadsads', 'asdadsads', 1, '2015-05-15 00:00:00', '2015-05-15 00:00:00', NULL),
(3, 'hacka geeks', 'asdasdasd', '2015-05-16 00:00:00', 'یه رویداد بسیار عالی', 120, 'asdasdasd', 'asdasd', 2, '2015-05-15 00:00:00', '2015-05-15 00:00:00', NULL),
(5, 'hacka bad', 'asdasdasd', '2015-05-14 00:00:00', 'sadasdasdasd', 120, 'asdasdasd', 'asdasd', 2, '2015-05-15 00:00:00', '2015-05-15 00:00:00', NULL);

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_05_15_070549_init', 1),
('2015_05_15_111712_site_settings', 2);

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `tag`, `text`, `created_at`, `updated_at`) VALUES
(1, 'post1', 'یک نبرد بین المللی برنامه نویسی جهت هم افزایی و شبکه سازی در بین جامعه برنامه نویسان در کل دنیاست، که تاکنون در چندین شهر دنیا برگزار شده است. تعداد هاکاسیتی ها در حال افزایش است و در آینده‌ی نردیک نیز افرادی از هر هاکاسیتی  در یک هاکاتون جهانی به نام هاکاگلوبال شرکت میکنند که در یک شهر توریستی برگزار میشود.', '2015-05-14 19:30:00', '2015-05-15 10:12:14'),
(2, 'post2', 'جامعۀ برنامه نویسان در دنیا خیلی فعال هستند و با اشتراک گذاری دانش میان یکدیگر باعث رشد و پیشرفت جامعۀ برنامه نویسی می شوند. در ایران کمی اوضاع فرق می کند و برنامه نویسان معمولاً زیاد از فعالیت های یکدیگر اطلاعی ندارند و در اتاق خودشان مشغول کدنویسی هستند. این رویداد باعث می شود که اولاً با همکاران خودشان بیشتر آشنا شوند و شبکه سازی در میان آنان به صورت حضوری و مجازی انجام شود، دوم اینکه شرکت هایی که به دنبال نیروهای متخصص می گردند، با حمایت مالی از رویداد می توانند برنامه نویسان خوب و خبره را در این رویدادها شناسایی و جذب نمایند.', '2015-05-14 19:30:00', '2015-05-15 10:12:14'),
(3, 'post3', 'هر هاکا-سیتی دو رویداد متفاوت برگزار میکند:\r\n\r\nرویداد اول برول(Brawl) نام دارد که شامل یک نبرد برنامه نویسی دو تا سه ساعته است. از آنجایی که زمان این نبرد ها محدود میباشد، شرکت کنندگان به جای ساختن یک محصول، بر سر یک هدف مشخص رقابت میکنند. برول ها هر ماه به طور منظم برگزار میشوند.\r\n\r\nرویداد دوم هاکاتون(Hackathon) نام دارد که دو تا سه روز به طول میکشد و در قالب آن، شرکت کنندگان در قالب چند تیم، تمام مراحل طرح ایده و ساخت نسخه اولیه یک محصول را طی میکنند.', '2015-05-14 19:30:00', '2015-05-15 10:12:14'),
(4, 'post1h1', 'هاکا گلوبال چیست؟', '0000-00-00 00:00:00', '2015-05-15 10:12:14'),
(5, 'post2h1', 'هدف برگزاری _هاکا سیتی_ چیست؟', '0000-00-00 00:00:00', '2015-05-15 10:12:14'),
(6, 'post3h1', 'مراحل هاکا سیتی', '0000-00-00 00:00:00', '2015-05-15 10:12:14');

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sajdad', 'fallah', 'm.sadjad.fallah@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, '2015-05-15 00:00:00', '2015-05-15 00:00:00', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

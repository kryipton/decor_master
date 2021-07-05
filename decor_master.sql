-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2021 at 11:43 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `decor_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title_az`, `title_en`, `title_ru`, `desc_az`, `desc_en`, `desc_ru`, `img`) VALUES
(1, 'BİZ KİMİK?', 'WHO ARE WE?', 'КТО МЫ?', '<p style=\"text-align:center\"><span style=\"font-size:15px\"><span style=\"color:#000000\"><span style=\"color:rgb(var(--color_15))\">Şirkət qurulduğu g&uuml;ndən bəri m&uuml;ştərilərin konkret layihələri &uuml;&ccedil;&uuml;n tələblərə uyğun olaraq işləyirik, əldə olunan nəticələr &uuml;zərində dəfələrlə y&uuml;ksək qiymətləndirmə almışıq.&nbsp;Sektorda lider olaraq inteqrasiya olunmuş bir yanaşma tətbiq edirik və geniş &ccedil;eşidli xidmətlər təqdim edirik.</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:15px\"><span style=\"color:#000000\"><span style=\"color:rgb(var(--color_15))\">Decor Master Professional, verilmiş tapşırıqların dəqiq, səmərəli və vaxtında yerinə yetirilməsinə zəmanət verir - b&uuml;rokratik məsələlərin həllindən subpodrat&ccedil;ıların işinin əlaqələndirilməsinə qədər.&nbsp;Bizimlə əlaqə qurun və fikrinizi ger&ccedil;əkləşdirəcəyik.</span></span></span></p>\r\n', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;Professionalism and reliability</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;The company &quot;Decor Master Professional&quot; occupies a leading position and has an excellent reputation as a construction and repair company serving clients in Moscow and the surrounding regions. From the very beginning, we adhere to an integrated approach to project management, providing clients with a wide range of services. Contact us to find out what we offer and get a free quote</p>\r\n', '<p>&nbsp;</p>\r\n\r\n<p>Профессионализм и надежность</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Компания &laquo;Decor Master Professional&raquo; занимает ведущие позиции и имеет превосходную репутацию как Строительно-ремонтная компания, обслуживающий(ая) клиентов в г. Москва и ближайших регионах. С самого начала работы мы придерживаемся комплексного подхода к управлению проектами, оказывая клиентам широкий спектр услуг. Свяжитесь с нами, чтобы узнать, что мы предлагаем, и бесплатно получить расчет стоимости</p>\r\n', 'architecture-1857175_1920_2500-1200x800.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address_az` varchar(255) NOT NULL,
  `address_en` varchar(255) NOT NULL,
  `address_ru` varchar(255) NOT NULL,
  `copyright_az` varchar(255) NOT NULL,
  `copyright_en` varchar(255) NOT NULL,
  `copyright_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `phone`, `email`, `address_az`, `address_en`, `address_ru`, `copyright_az`, `copyright_en`, `copyright_ru`, `desc_az`, `desc_en`, `desc_ru`) VALUES
(1, '+994 50 226 26 30', 'decor.master.ra@gmail.com', 'Bakı, Azərbaycan', 'Baku, Azerbaijan', 'Баку, Азербайджан', '© 2021 Decor Master Professional', '©2021 Decor Master Professional', '© 2021 Мастер декора Профессионал', '<p>&nbsp;Decor Master Professional</p>\r\n', '<p>&nbsp;Decor Master Professional</p>\r\n', '<p>Мастер декора Профессионал</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `file` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `file`) VALUES
(4, 'unnamed_(1).jpg'),
(5, 'page1-1200px-Protokół-konkurs_szkolny_pdf.jpg'),
(6, 'unnamed.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `file` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `file`) VALUES
(3, '1592146632_pokraska-fasada.webp'),
(4, 'applepark_stone_carpet.webp'),
(5, 'Custom_Manufactured_Patio_Enclosures.webp'),
(6, 'ebaksid_001.webp'),
(7, 'okraska_sten.webp'),
(8, 'oniks.webp'),
(9, 'parking_ebaksid.webp'),
(10, 'pokraska-fasada-khodynskij-17-6-b.webp'),
(11, 'pokraska-fasada-min.webp'),
(12, 'Pokraska-sten-scaled.webp'),
(13, 'stone_carpet_1.webp'),
(14, 'stone_carpet_JPG.webp'),
(15, 'Sunroom_Installation.webp'),
(16, 'Оксид_меди.webp'),
(17, 'ремонт-фасадов.webp');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `img`) VALUES
(1, 'Untitled-1_Converted.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `img` varchar(254) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_ru` text NOT NULL,
  `desc_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title_az`, `title_en`, `title_ru`, `date`, `img`, `desc_az`, `desc_ru`, `desc_en`) VALUES
(1, 'TERRACE TƏKLİFİ', 'INSTALLATION OF TERRACE', 'МОНТАЖ ТЕРРАС', '2021-07-02', 'Luxury_Mansion_Interior.webp', '<p>Həqiqətən &ccedil;ətin bir işə etibar edilə bilən bir podrat&ccedil;ı axtarırsınızsa, bu layihə səlahiyyətlərimizin s&uuml;butu ola bilər. B&uuml;t&uuml;n işləri vaxtında və b&uuml;dcə daxilində başa vurmağı bacardıq. Onların tələblərini və &uuml;st&uuml;nl&uuml;klərini daha yaxşı başa d&uuml;şmək &uuml;&ccedil;&uuml;n m&uuml;ştəri ilə yaxından işlədik və nəticə &ouml;z&uuml; &uuml;&ccedil;&uuml;n danışır.</p>\r\n', '<p>Если вы ищете подрядчика, которому можно доверить действительно сложную работу, то этот проект может служить доказательством нашей компетентности. Нам удалось завершить все работы вовремя и уложиться в бюджет. Мы тесно сотрудничали с заказчиком, чтобы лучше понять его требования и предпочтения, и результат говорит сам за себя.</p>\r\n', '<p>If you are looking for a contractor who can be trusted with a really difficult job, then this project can serve as proof of our competence. We managed to complete all work on time and within budget. We worked closely with the customer to better understand their requirements and preferences, and the result speaks for itself.</p>\r\n'),
(2, '\"DECOR MASTER PROFESSIONAL\": HƏR ZAMAN SİZİNLƏ', '\"DECOR MASTER PROFESSIONAL\": GLAD TO YOU ALWAYS', '«DECOR MASTER PROFESSIONAL»: РАДЫ ВАМ ВСЕГДА', '2021-07-02', 'MyCollages_edited.webp', '<p>Layihənizi həyata ke&ccedil;irmək &uuml;&ccedil;&uuml;n təcr&uuml;bəli sertifikatlı bir m&uuml;təxəssis axtarırsınız? Keyfiyyət zəmanəti almaq &uuml;&ccedil;&uuml;n, z&ouml;vq alın Decor Master Professional. &Ccedil;eşitli problemləri həll etmək &uuml;&ccedil;&uuml;n peşəkar xidmətlər təqdim edirik. Q&uuml;sursuz bir ş&ouml;hrət tam fədakarlıqla &ccedil;alışan və bacarıqlarını ustalıqla tətbiq edən m&uuml;təxəssislərimizin əməyinin nəticəsidir. Pulsuz təklif &uuml;&ccedil;&uuml;n bizimlə əlaqə saxlayın.</p>\r\n', '<p>Ищете опытного сертифицированного специалиста для реализации проекта? Чтобы получить гарантию качества, обращайтесь в компанию &laquo;Decor Master Professional&raquo;. Мы оказываем профессиональные услуги для решения самых различных задач. Безупречная репутация &mdash; результат трудов наших специалистов, которые работают с полной отдачей и виртуозно применяют свое мастерство. Свяжитесь с нами, чтобы получить бесплатный расчет стоимости работ.</p>\r\n', '<p>Are you looking for an experienced certified specialist to implement your project? To get a quality guarantee, please contact Decor Master Professional. We provide professional services to solve a wide variety of tasks. An impeccable reputation is the result of the work of our specialists who work with full dedication and masterly apply their skills. Contact us for a free quote.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `news_gallery`
--

CREATE TABLE `news_gallery` (
  `id` int(11) NOT NULL,
  `news_id` int(10) NOT NULL,
  `file` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_gallery`
--

INSERT INTO `news_gallery` (`id`, `news_id`, `file`) VALUES
(5, 2, 'Modern_Home.webp'),
(6, 2, '4cf34dbe0ab54a298b5d3a89ffd159b6.webp'),
(7, 2, 'Loft_Apartment_Interior.webp'),
(8, 1, 'Luxury_Mansion_Interior.webp'),
(9, 1, '4cf34dbe0ab54a298b5d3a89ffd159b61.webp'),
(10, 1, 'Modern_Home1.webp'),
(11, 1, 'Loft_Apartment_Interior1.webp');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `img` varchar(254) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `img`, `link`) VALUES
(1, 'bg.png', 'sadasd');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(254) NOT NULL,
  `year` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title_az`, `title_en`, `title_ru`, `desc_az`, `desc_en`, `desc_ru`, `img`, `year`, `company`, `project_name`, `location`) VALUES
(1, 'Yaşayış otağının təmiri', 'LIVING ROOM REPAIR', 'РЕМОНТ ГОСТИНЫХ', '<p>Bu layihə &uuml;zərində işləyərkən materialları son dərəcə diqqətlə se&ccedil;dik və ətraf m&uuml;hitə dəyən ziyanı minimuma endirməyə &ccedil;alışdıq. Nəticənin onun istəklərinə tam cavab verməsi &uuml;&ccedil;&uuml;n hər c&uuml;r səy g&ouml;stərərək m&uuml;ştəri ilə sıx əməkdaşlıq etdik. Decor Master Professional-ın məqsədi m&uuml;ştərilərimizin fikirlərini həyata ke&ccedil;irmək, hər mərhələdə layihə dəstəyi g&ouml;stərməkdir.</p>\r\n', '<p>While working on this project, we selected materials extremely carefully and tried to minimize damage to the environment. We worked closely with the customer, making every effort to ensure that the result fully meets his wishes. The goal of Decor Master Professional is to bring the ideas of our clients to life, providing project support at every stage.</p>\r\n', '<p>Работая над этим проектом, мы крайне тщательно выбирали материалы и старались свести к минимуму ущерб для окружающей среды. Мы тесно взаимодействовали с заказчиком, прилагая все усилия, чтобы результат полностью соответствовал его пожеланиям. Цель компании &laquo;Decor Master Professional&raquo; &mdash; воплощать в жизнь идеи наших клиентов, обеспечивая сопровождение проекта на каждом этапе.</p>\r\n', 'Modern_Home.webp', '2021', 'Dekor Master', 'Modern home', 'Baku, Azerbaijan'),
(2, 'BAKIN DÖVLƏT ZOOPARKI', 'BAKU STATE ZOO', 'БАКИНСКИЙ ГОСУДАРСВЕНЫЙ ЗООПАРК', '<p>Bu layihə sənaye standartlarına tam riayət etməyi tələb etdi. Bununla birlikdə b&uuml;dcəni aşmadan tapşırığı vaxtında yerinə yetirə bildik. Bu, m&uuml;ştərinin tamamilə məmnun qaldığı keyfiyyətli işin əla bir n&uuml;munəsidir. Bənzər layihələr haqqında daha &ccedil;ox məlumat istəyirsiniz? Bizimlə əlaqə saxlayın.</p>\r\n', '<p>This project required full adherence to industry standards. However, we managed to complete the task on time without going over budget. This is an excellent example of quality work, which the client was absolutely satisfied with. Want to know more about similar projects? Contact us.</p>\r\n', '<p>Этот проект требовал полного соблюдения отраслевых стандартов. Однако нам удалось выполнить задачу в установленный срок, не выходя за рамки бюджета. Это отличный пример качественной работы, которой клиент остался абсолютно удовлетворен. Хотите узнать больше о подобных проектах? Свяжитесь с нами.</p>\r\n', 'Luxury_Mansion_Interior.webp', '2021', 'Baku State Zoo', 'Baku State Zoo', 'Baku, Azerbaijan');

-- --------------------------------------------------------

--
-- Table structure for table `projects_gallery`
--

CREATE TABLE `projects_gallery` (
  `id` int(11) NOT NULL,
  `project_id` int(10) NOT NULL,
  `file` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects_gallery`
--

INSERT INTO `projects_gallery` (`id`, `project_id`, `file`) VALUES
(7, 2, 'Modern_Home.webp'),
(8, 2, 'Loft_Apartment_Interior.webp'),
(9, 2, 'Luxury_Mansion_Interior.webp'),
(10, 1, 'Modern_Home1.webp'),
(11, 1, 'Loft_Apartment_Interior1.webp'),
(12, 1, 'Luxury_Mansion_Interior1.webp');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title_az`, `title_en`, `title_ru`, `desc_az`, `desc_en`, `desc_ru`, `img`) VALUES
(1, 'DEKORATİF BETON', '', '', '<p style=\"text-align:center\"><span style=\"font-size:15px\"><span style=\"color:#000000\"><span style=\"color:rgb(var(--color_15))\">Bu texnologiya birbaşa inşaat sahəsinə beton t&ouml;kmə prosesində təbii daşlar, kərpic işləri, səki daşları və hətta taxta taxtalar toxuması ilə davamlı rəngli bir beton səth yaratmağa imkan verir.&nbsp;Avtomobil yolları, şəhər meydanları, xiyabanlar, bağ yolları, səkilər, sərgi salonlarında, salonlarda, restoranlarda və yaşayış yerlərində d&ouml;şəmələrin inşası &uuml;&ccedil;&uuml;n istifadə edilə bilər.&nbsp;Bir sıra əhəmiyyətli &uuml;st&uuml;nl&uuml;klərə malikdir.&nbsp;<br />\r\n&nbsp;&nbsp; &nbsp;</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:15px\"><span style=\"color:#000000\"><span style=\"color:rgb(var(--color_15))\">&nbsp; &nbsp;Birincisi, inanılmaz m&uuml;xtəlif formalar, toxumalar və rənglər.&nbsp;Bu, memarlıq &uuml;slubuna və dizaynerlərin istəklərinə uyğun olaraq bənzərsiz səthlər yaratmağa və onları se&ccedil;məyə imkan verir.&nbsp;Bu texnologiyanın bərpa işləri &uuml;&ccedil;&uuml;n sadəcə əvəzolunmaz olduğu ortaya &ccedil;ıxdı.&nbsp;Həqiqətən, bəzən bir ne&ccedil;ə əsr əvvəl yolların asfaltlanması &uuml;&ccedil;&uuml;n istifadə edilmiş təbii daşların işlənməsi &uuml;&ccedil;&uuml;n uyğun material və &uuml;sulları tapmaq m&uuml;mk&uuml;n olmur, lakin m&ouml;h&uuml;rlənmiş betonun k&ouml;məyi ilə dəqiq bir n&uuml;sxə yarada və ya təbii daşın uyğun toxumasını se&ccedil;ə bilərsiniz, m&ouml;vcud olanlardan qranit, şifer və ya k&ouml;hnə kərpic.<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:15px\"><span style=\"color:#000000\"><span style=\"color:rgb(var(--color_15))\">&nbsp; &nbsp;İkincisi, boyanmış, beton &uuml;&ccedil;&uuml;n toz boya ilə m&ouml;hkəmləndirilmiş və beton lak sızdırmazlığı ilə qorunan beton səth yalnız m&uuml;kəmməl bir g&ouml;r&uuml;n&uuml;ş deyil, həm də aşınma m&uuml;qavimətinin artması, şaxta m&uuml;qavimətinin artması, ətraf m&uuml;hitin təsirindən qorunma və rahatlıq kimi vacib x&uuml;susiyyətləri əldə edir. istismar.&nbsp;</span></span></span></p>\r\n', '<p><span style=\"font-size:72px\">sada;ldka;lkdadsd</span></p>\r\n', '', 'icon-1.png'),
(2, 'DAŞ XALÇA', '', '', '<p style=\"text-align:center\"><span style=\"font-size:15px\"><span><span style=\"color:#000000\"><span style=\"color:rgb(var(--color_15))\">Daş xal&ccedil;a</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:15px\"><span><span style=\"color:#000000\"><span style=\"color:rgb(var(--color_15))\">Harada istifadə olunur - Daş xal&ccedil;a?</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:15px\"><span><span style=\"color:#000000\"><span style=\"color:rgb(var(--color_15))\">Daş xal&ccedil;anın &ouml;rt&uuml;lməsi hər c&uuml;r cığırın d&uuml;zəldilməsi, hovuz ətrafında sahələrin d&uuml;zəldilməsi, yamacların və yamacların m&ouml;hkəmləndirilməsi, sahil şeridinin, dəmir yollarının m&ouml;hkəmləndirilməsi, eko dayanacaqların, velosiped və bağ yollarının təşkili, ağac k&ouml;klərinin mexaniki təsirlərdən qorunması &uuml;&ccedil;&uuml;n idealdır. ziyan, sahil sahələrinin abadlaşdırılması, şəhər parklarında abadlıq işləri, şəhər mənzərəsi yaradılması.&nbsp;&quot;Daş xal&ccedil;a&quot; nın mənzil və kommunal sektorda geniş tətbiqi.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:15px\"><span><span style=\"color:#000000\"><span style=\"color:rgb(var(--color_15))\">&Uuml;LKƏ EVİNİZİN ƏRAZİSİNDƏ KE&Ccedil;İRİLƏN ALANLAR</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:15px\"><span><span style=\"color:#000000\"><span style=\"color:rgb(var(--color_15))\">Bu g&uuml;n daş xal&ccedil;adan getdikcə ev bağ&ccedil;alarında oyun meydan&ccedil;aları və piyada sahələrini bəzəmək &uuml;&ccedil;&uuml;n istifadə olunur.&nbsp;Belə material plastikdir, yəni hər hansı bir landşaft həlli &uuml;&ccedil;&uuml;n əlverişlidir - ona tamamilə istənilən forma verilə bilər.&nbsp;Şirkətimiz &uuml;mumi konsepsiya əsasında uyğun se&ccedil;imi se&ccedil;məyinizə imkan verən geniş miqdarda daş xal&ccedil;a doldurucusu təqdim edir</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:15px\"><span><span style=\"color:#000000\"><span style=\"color:rgb(var(--color_15))\">sahə dekorasiya və b&uuml;dcə.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:15px\"><span><span style=\"color:#000000\"><span style=\"color:rgb(var(--color_15))\">Daş xal&ccedil;a temperatur dəyişikliyinə davamlıdır, s&uuml;r&uuml;şməz və su ke&ccedil;ir.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:15px\"><span><span style=\"color:#000000\"><span style=\"color:rgb(var(--color_15))\">Bu &ouml;rt&uuml;k istənilən səth &uuml;&ccedil;&uuml;n idealdır.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:15px\"><span><span style=\"color:#000000\"><span style=\"color:rgb(var(--color_15))\">Kaplama səth relyefini təkrarlaya bilər və ya &ouml;z&uuml;n&uuml; təyin edə bilər.<br />\r\n&nbsp;Şəhərətrafı ərazinin h&ouml;rmətli və m&uuml;asir g&ouml;r&uuml;n&uuml;ş&uuml;<br />\r\nKaplama sayəsində park sahəniz, bağdakı yol, teras, veranda sahənizə zəriflik qatacaqdır.&Ouml;rt&uuml;y&uuml;n masaj təsiri sizin rifahınıza və əhval-ruhiyyənizə faydalı təsir g&ouml;stərir. Kaplama s&uuml;r&uuml;şkən deyil və buna g&ouml;rə də G&Uuml;VENLİDİR !!!</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:15px\"><span><span style=\"color:#000000\"><span style=\"color:rgb(var(--color_15))\">Bu vaxt narahat olmağa ehtiyac yoxdur. &rdquo;</span></span></span></span></p>\r\n', '', '', 'icon-11.png'),
(3, 'ÖZÜNÜN SƏVİYYƏLƏRİ', '', '', '<div class=\"_2bafp\" id=\"comp-kkpv0mtf1\" style=\"-webkit-text-stroke-width:0px; border:0px; padding:0px; text-align:start; text-indent:0px; width:780px\">\r\n<h2 style=\"text-align:center\"><span style=\"font-size:10px\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:22px\"><span><span style=\"color:rgb(var(--color_15))\"><span style=\"color:rgb(var(--color_15))\">&Ouml;Z&Uuml;N&Uuml;N SƏVİYYƏLƏRİ</span></span></span></span></span></span></span></h2>\r\n</div>\r\n\r\n<div class=\"_2bafp\" id=\"comp-kkpv0mtf2\" style=\"-webkit-text-stroke-width:0px; border:0px; padding:0px; text-align:start; text-indent:0px; width:780px\">\r\n<p style=\"text-align:center\"><span style=\"font-size:10px\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:15px\"><span><span style=\"color:rgb(var(--color_15))\"><span style=\"color:rgb(var(--color_15))\">&Ouml;z&uuml;n&uuml; d&uuml;zəldən d&ouml;şəmə davamlıdır, m&uuml;kəmməl d&uuml;zd&uuml;r, linolyuma bənzəyir, toxunma ilə - keramik plitələrə bənzəyir.&nbsp;Polimer qarışığının &ouml;rt&uuml;y&uuml; toplu şəkildə tətbiq olunur, səthi d&uuml;zəldir, tikiş və boşluqlar olmadan.<br />\r\n<br />\r\n&Ouml;z&uuml;n&uuml; d&uuml;zəldən d&ouml;şəmələr iki n&ouml;və b&ouml;l&uuml;n&uuml;r: Epoksi və Poliuretan.</span></span></span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:10px\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:15px\"><span><span style=\"color:rgb(var(--color_15))\"><span style=\"color:rgb(var(--color_15))\">Bu vaxt narahat olmağa ehtiyac yoxdur. &rdquo;</span></span></span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:10px\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:15px\"><span><span style=\"color:rgb(var(--color_15))\"><span style=\"color:rgb(var(--color_15))\">Epoksi.&nbsp;M&uuml;xtəlifliyə g&ouml;rə, onlar tez-tez yaşayış yerlərində istifadə olunur.&nbsp;&Uuml;st&uuml;nl&uuml;kləri: aşınma m&uuml;qaviməti, davamlılığı, kimyəvi maddələrə qarşı m&uuml;qaviməti.&nbsp;Gigiyenanın vacib olduğu laboratoriyalardakı, xəstəxanalardakı otoparklarda istifadə olunur.&nbsp;&Ccedil;ox sayda dizayn variantları epoksi &ouml;z&uuml;n&uuml; d&uuml;zəldən d&ouml;şəməni yaşayış otaqlarında, y&uuml;ksək performansda - fabriklərdə istifadə &uuml;&ccedil;&uuml;n cəlbedici edir.&nbsp;Qoruma tələb edən baza &ouml;z&uuml;n&uuml; d&uuml;zəldən qarışıqla doldurulur, doldurma qatının qalınlığı 5 mm-dən &ccedil;ox deyil.&nbsp;Metal, taxta, kafel səthlərini təsirli şəkildə qoruyur.</span></span></span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:10px\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:15px\"><span><span style=\"color:rgb(var(--color_15))\"><span style=\"color:rgb(var(--color_15))\">Poliuretan.&nbsp;İstilik həddinə, y&uuml;ksək nəmə davamlıdırlar, buna g&ouml;rə də anbarlarda, d&uuml;kanlarda, hovuzlarda, hamamlarda, mətbəxlərdə istifadə olunurlar.&nbsp;D&ouml;şəmələr zərbəyə davamlıdır, mexaniki stresdən qorxmur.</span></span></span></span></span></span></span></p>\r\n</div>\r\n', '', '', 'icon-12.png'),
(4, 'DEKORATİV SIVALAR VƏ RƏNLƏR', '', '', '<p>Əgər q&uuml;sursuz iş keyfiyyəti sizin &uuml;&ccedil;&uuml;n vacibdirsə, onda Decor Master Professional tam aradığınız şirkətdir.&nbsp;M&uuml;təxəssislərimiz, layihənin x&uuml;susiyyətlərini nəzərə alaraq geniş bir sıra əlavə xidmətlər təklif edəcək və nəticənin g&ouml;zləntiləri &uuml;stələməsi &uuml;&ccedil;&uuml;n tələblərinizi yerinə yetirməyə &ccedil;alışacaqlar.&nbsp;Xidmətlərimiz haqqında daha &ccedil;ox məlumat əldə etmək &uuml;&ccedil;&uuml;n bizimlə əlaqə saxlayın.</p>\r\n', '', '', 'icon-13.png'),
(5, 'MƏRMƏR SIVALAR', '', '', '<p>Gələcək layihəniz &uuml;&ccedil;&uuml;n geniş təcr&uuml;bəyə malik etibarlı bir tikinti və təmir şirkətinə ehtiyacınız var?&nbsp;Decor Master Professional, hər sifarişin x&uuml;susiyyətlərini nəzərə alaraq y&uuml;ksək iş keyfiyyətinə və fərdi yanaşmaya zəmanət verir.&nbsp;Verandaların quraşdırılması kimi bir xidməti peşəkar şəkildə təqdim edən m&uuml;təxəssislərə ehtiyacınız varsa, məsləhət almaq &uuml;&ccedil;&uuml;n bizimlə əlaqə saxlayın.</p>\r\n', '', '', 'icon-14.png'),
(6, 'FASAD İŞLƏRİ', '', '', '<p>M&uuml;ştərilər ilk n&ouml;vbədə Decor Master Professional &uuml;&ccedil;&uuml;n gəlir və biz onları xoşbəxt etmək &uuml;&ccedil;&uuml;n əlimizdən gələni edirik.&nbsp;Bu xidmət n&ouml;v&uuml;nə gəldikdə, ən m&uuml;rəkkəb layihələrə belə tam hazırıq və q&uuml;sursuz bir iş keyfiyyətinə zəmanət veririk.&nbsp;Bizə zəng edin və sizə necə k&ouml;mək edə biləcəyimizi &ouml;yrənin.</p>\r\n', '', '', 'icon-15.png');

-- --------------------------------------------------------

--
-- Table structure for table `services_gallery`
--

CREATE TABLE `services_gallery` (
  `id` int(11) NOT NULL,
  `service_id` int(10) NOT NULL,
  `file` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services_gallery`
--

INSERT INTO `services_gallery` (`id`, `service_id`, `file`) VALUES
(7, 1, '2.jpg'),
(10, 1, 'ezgif-7-21bf36382741.jpg'),
(15, 2, 'IMG-9303_JPG.webp'),
(16, 2, 'IMG-9307_JPG.webp'),
(17, 2, 'product-header-images-rustik-2.webp'),
(18, 2, 'IMG-9305_JPG.webp'),
(19, 3, 'unnamed_(1).webp'),
(20, 3, 'Epoksidnyj-pol-Sklad.webp'),
(21, 3, 'unnamed.webp'),
(22, 4, 'Custom_Manufactured_Patio_Enclosures.webp'),
(23, 5, 'Sunroom_Installation.webp'),
(24, 6, 'okraska_sten.webp'),
(25, 6, '1592146632_pokraska-fasada.webp'),
(26, 6, 'pokraska-fasada-min.webp'),
(27, 6, 'pokraska-fasada-khodynskij-17-6-b.webp'),
(28, 6, 'Pokraska-sten-scaled.webp'),
(29, 6, 'ремонт-фасадов.webp');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title2_az` varchar(255) NOT NULL,
  `title2_en` varchar(255) NOT NULL,
  `title2_ru` varchar(255) NOT NULL,
  `button_text_az` varchar(255) NOT NULL,
  `button_text_en` varchar(255) NOT NULL,
  `button_text_ru` varchar(255) NOT NULL,
  `button_link` varchar(255) NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title_az`, `title_en`, `title_ru`, `title2_az`, `title2_en`, `title2_ru`, `button_text_az`, `button_text_en`, `button_text_ru`, `button_link`, `img`) VALUES
(1, '\"DECOR MASTER PROFESSIONAL\"', '', '', 'SİZƏ HƏMİŞƏ SEVİNİRƏM', '', '2131213', '', '', '', '', '2.jpg'),
(3, 'Layihəniz üçün möhkəm təməl', '', '', '', '', '', '', '', '', '', 'model-architecture.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `you_tube` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `facebook`, `you_tube`, `instagram`) VALUES
(1, 'https://m.facebook.com/decor.master.pro', 'https://www.youtube.com/', 'https://www.instagram.com/decor_master_professional/?hl=ru');

-- --------------------------------------------------------

--
-- Table structure for table `sub_service`
--

CREATE TABLE `sub_service` (
  `id` int(11) NOT NULL,
  `service_id` int(10) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_service`
--

INSERT INTO `sub_service` (`id`, `service_id`, `title_az`, `title_en`, `title_ru`, `desc_az`, `desc_en`, `desc_ru`, `img`) VALUES
(1, 6, 'test1', '', '', '<p>asdasd</p>\r\n', '', '', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_service_gallery`
--

CREATE TABLE `sub_service_gallery` (
  `id` int(11) NOT NULL,
  `sub_service_id` int(10) NOT NULL,
  `file` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_service_gallery`
--

INSERT INTO `sub_service_gallery` (`id`, `sub_service_id`, `file`) VALUES
(1, 1, 'Epoksidnyj-pol-Sklad.webp'),
(2, 1, 'ezgif-7-21bf36382741.jpg'),
(3, 1, 'icon-1.png'),
(4, 1, 'product-header-images-rustik-2.webp'),
(5, 1, 'unnamed_(1).webp'),
(6, 1, 'unnamed.webp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `isAdmin`) VALUES
(1, 'super_admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `img` varchar(254) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `img`, `link`) VALUES
(1, 'architecture.jpg', 'https://www.youtube.com/watch?v=BuiFNwzTP7o');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_gallery`
--
ALTER TABLE `news_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects_gallery`
--
ALTER TABLE `projects_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_gallery`
--
ALTER TABLE `services_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_service`
--
ALTER TABLE `sub_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_service_gallery`
--
ALTER TABLE `sub_service_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news_gallery`
--
ALTER TABLE `news_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects_gallery`
--
ALTER TABLE `projects_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services_gallery`
--
ALTER TABLE `services_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_service`
--
ALTER TABLE `sub_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_service_gallery`
--
ALTER TABLE `sub_service_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

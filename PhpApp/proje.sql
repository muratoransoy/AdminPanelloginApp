-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 22 May 2021, 17:50:38
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `proje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bilgiler`
--

DROP TABLE IF EXISTS `bilgiler`;
CREATE TABLE IF NOT EXISTS `bilgiler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tc` varchar(12) COLLATE utf8_turkish_ci NOT NULL,
  `ad` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `meslek` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `mailadres` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `telno` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyet` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `dogumtarih` date NOT NULL,
  `sistem` date NOT NULL,
  `adres` text COLLATE utf8_turkish_ci NOT NULL,
  `kisibilgi` text COLLATE utf8_turkish_ci NOT NULL,
  `grupbilgisi` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bilgiler`
--

INSERT INTO `bilgiler` (`id`, `tc`, `ad`, `soyad`, `meslek`, `mailadres`, `telno`, `cinsiyet`, `dogumtarih`, `sistem`, `adres`, `kisibilgi`, `grupbilgisi`) VALUES
(4, '16448823118', 'murat', 'oransoy', 'yazılımcı', 'muratoransoy@hotmail.com', '05428467654', 'erkek', '2015-09-20', '2016-04-20', 'edirne', 'heryer', ''),
(5, '16448823118', 'murat', 'oransoy', 'yazılımcı', 'muratoransoy@hotmail.com', '05428467654', 'erkek', '2015-09-20', '2016-04-20', 'edirne', 'heryer', ''),
(7, '12341624623', 'ürküş', 'oransoy', 'ev hanımı', 'ürküş_22@hotmail.com', '05428467655', 'kadın', '1966-05-06', '2018-04-20', 'edirne', 'heryer', ''),
(8, '16448823118', 'murat', 'oransoy', 'yazılımcı', 'muratoransoy@hotmail.com', '05428467654', 'erkek', '2015-09-20', '2016-04-20', 'edirne', 'heryer', ''),
(11, '', '', '', '', '', '', '', '2001-09-15', '2021-04-18', '', '', ''),
(13, '', '', '', '', '', '', '', '2001-09-15', '2021-04-18', '', '', 'Sistem Birimi'),
(14, '16448823118', 'murat', 'oransoy', 'yazılımcı', 'muratoransoy@hotmail.com', '05428467654', 'erkek', '2001-09-15', '2021-04-18', 'edirne', 'Öğrenci', 'Web Birimi'),
(16, '16448823118', 'murat', 'Oransoy', 'öğrenci', 'muratoransoy@hotmail.com', '05428467654', 'erkek', '2001-09-15', '2021-04-18', 'Edirne', 'öğrenci', 'İdari Birimi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetim`
--

DROP TABLE IF EXISTS `yonetim`;
CREATE TABLE IF NOT EXISTS `yonetim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kulad` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `aktif` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yonetim`
--

INSERT INTO `yonetim` (`id`, `kulad`, `sifre`, `aktif`) VALUES
(1, 'murat', '44209a6a592dea91bcf7d4dd53e47a5a', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

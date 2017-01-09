-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 28 Kas 2016, 13:15:18
-- Sunucu sürümü: 10.1.19-MariaDB
-- PHP Sürümü: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `test`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL,
  `kulad` varchar(60) NOT NULL,
  `md5sifre` varchar(240) NOT NULL,
  `email` varchar(80) NOT NULL,
  `isim` varchar(80) NOT NULL,
  `soyisim` varchar(80) NOT NULL,
  `ogrno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `kulad`, `md5sifre`, `email`, `isim`, `soyisim`, `ogrno`) VALUES
(3, 'test', '', 'alisu@name.com', 'Ali', 'Su', ''),
(4, 'sa', 'cb0635cbd22d767b179a6badbb4cafdc', 'can@hot.com', 'can', 'yÄ±lmaz', ''),
(5, 'yusufomg', '8c7c0a2e071994b11072fc4ba9cc4cf8', 'dasdas@hotmail.com', 'yusuf', 'demir', ''),
(6, 'harungulgun', '202cb962ac59075b964b07152d234b70', 'harungulgun@gmail.com', 'HARUN', 'GÃœLGÃœN', ''),
(7, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', ''),
(8, 'kutuk', 'd1e188aad6314a7e1c2f715419c28bc3', 'ddfdasd@gmail.com', 'Mert Can', 'KÃ¼tÃ¼k', ''),
(9, 'glsrn.cndn', '2d092903b9c0e552151d8068f6de539b', 'cndn.glsrn@hotmail.com', 'GÃ¼lseren', 'Candan', ''),
(10, 'M.osman', '827ccb0eea8a706c4c34a16891f84e7b', 'mamedovv.osman@gmail.com', 'Osman', 'Mamedov', ''),
(11, 'hasobaskan', '25f9e794323b453885f5181f1b624d0b', 'nero1.hasan@hotmail.com', 'hasan', 'Ã§olakoÄŸlu', ''),
(12, 'racher', '6213f4ecdbec8cedf52c3046853a8280', 'deneme@hotmail.com', 'deneme', 'deneme2', ''),
(13, 'YAMAN', '81dc9bdb52d04dc20036dbd8313ed055', 'ASDAS@xn--gmail-bgd.com', 'HARUN', 'YAMAN', ''),
(14, 'aa', '21ad0bd836b90d08f4cf640b4c298e7c', 'a@hot.com', 'abc', 'cba', ''),
(15, 'a', '0cc175b9c0f1b6a831c399e269772661', 'aaa@aaa.com', 'a', 'a', ''),
(16, 'aybuke', '202cb962ac59075b964b07152d234b70', 'yabuke@aybu.com', '', '', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`,`kulad`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 11 Eyl 2020, 17:51:37
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `eticaret`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_gsm` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_faks` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_seher` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adress` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mesai` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_maps` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_analiystic` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_zopim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_google` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_youtube` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtphost` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpuser` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtppassword` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpport` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_bakim` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_tel`, `ayar_gsm`, `ayar_faks`, `ayar_mail`, `ayar_seher`, `ayar_adress`, `ayar_mesai`, `ayar_maps`, `ayar_analiystic`, `ayar_zopim`, `ayar_facebook`, `ayar_twitter`, `ayar_google`, `ayar_youtube`, `ayar_smtphost`, `ayar_smtpuser`, `ayar_smtppassword`, `ayar_smtpport`, `ayar_bakim`) VALUES
(0, 'dimg/21566289212185929349logo.png', 'E-Ticaret Udemy Kursu', 'E-Ticaret Udemy Kursu.', 'udemy', 'RASHAD_UDEMY', '+994 99-809-89-79', '+994 99-809-89-79', '+994 99-809-89-79', 'salehov_1970@mail.ru', 'Bakı şəhəri.', 'Bakı şəh. Xətai ray. Gəncə PR-Tİ', '7/24', 'map', 'analiystic', 'https://static.zdassets.com/ekr/snippet.js?key=02b7259a-2764-458f-8a1c-79371c2fd02e', 'www.facebook.com', 'www.twitter.com', 'www.google.com', 'www.youtube.com', 'mail.alanadiniz.com', 'Rashad', 'password', '587', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banka`
--

CREATE TABLE `banka` (
  `banka_id` int(11) NOT NULL,
  `banka_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `banka_iban` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `banka_hesapadsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `banka_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `banka`
--

INSERT INTO `banka` (`banka_id`, `banka_ad`, `banka_iban`, `banka_hesapadsoyad`, `banka_durum`) VALUES
(1, 'Kapital Bank', 'AZE1234567898765432', 'SALEHLI RASHAD', '1'),
(2, 'Beynəlxalq Bank', 'AZE9876543212345678', 'QASİMOV İLKİN', '1'),
(3, 'Unibank', 'AZE5678943213214678', 'ALİSOV BAXİS', '1'),
(4, 'Rabitəbank', 'AZE9087456321243568', 'SULEYMANLİ YUSİF', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_basliq` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_video` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_vizyon` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_misyon` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_basliq`, `hakkimizda_icerik`, `hakkimizda_video`, `hakkimizda_vizyon`, `hakkimizda_misyon`) VALUES
(0, 'UDEMY PHP DƏRSLƏRİ', '<p>Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. ViLorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınanLorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınanLorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınanLorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınanLorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınanLorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınanLorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınanLorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınanLorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınanrginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan</p>\r\n', 'WYOi0jmSEVE', 'eklenerek değiştimişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir. İnternet\'teki tüm Lorem Ipsum üreteçleri önceden belirlenmiş meti', 'eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir. İnternet\'teki tüm Lorem Ipsum üreteçleri önceden belirlenmiş meti');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_ust` int(2) NOT NULL,
  `kategori_seourl` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_sira` int(2) NOT NULL,
  `kategori_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_ad`, `kategori_ust`, `kategori_seourl`, `kategori_sira`, `kategori_durum`) VALUES
(6, 'IT avadanlıqlar', 0, 'it-avadanliqlar', 1, '1'),
(7, 'Telefonlar', 0, 'telefonlar', 2, '1'),
(8, 'Aksesuarlar', 0, 'aksesuarlar', 3, '1'),
(9, 'Komputer', 0, 'komputer', 4, '1'),
(10, 'Geyim', 0, 'geyim', 5, '1'),
(11, 'Basqa', 0, 'basqa', 6, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_zaman` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kullanici_resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tc` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adress` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_seher` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_unvan` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_resim`, `kullanici_tc`, `kullanici_ad`, `kullanici_mail`, `kullanici_tel`, `kullanici_password`, `kullanici_adsoyad`, `kullanici_adress`, `kullanici_seher`, `kullanici_unvan`, `kullanici_yetki`, `kullanici_durum`) VALUES
(2, '2020-08-24 01:14:55', '', 'aze12345678', 'RASHAD', 'rashad@mail.ru', '+994 99 809 89 79', '81dc9bdb52d04dc20036dbd8313ed055', 'Salehli Rashad', '', 'BAKI', '', '5', 1),
(14, '2020-08-31 03:49:56', '', '', '', 'seymur@mail.ru', '', 'c33367701511b4f6020ec61ded352059', 'Seymur Alisov1', '', '', '', '1', 1),
(15, '2020-09-01 02:20:18', '', '', '', 'seymur@mail.com', '0998098979', 'e10adc3949ba59abbe56e057f20f883e', 'Seymur1', '', '', '', '1', 0),
(16, '2020-09-02 17:31:04', '', '', '', 'rashad@mail.com', '+994 99 80', 'e10adc3949ba59abbe56e057f20f883e', 'Seymur', '', '', '', '1', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_ust` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `menu_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `menu_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `menu_url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `menu_sira` int(2) NOT NULL,
  `menu_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL,
  `menu_seourl` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_ust`, `menu_ad`, `menu_detay`, `menu_url`, `menu_sira`, `menu_durum`, `menu_seourl`) VALUES
(3, '', 'Haqqımızda', '', 'hakkimizda.php', 2, '1', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE `sepet` (
  `sepet_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `urun_adet` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sepet`
--

INSERT INTO `sepet` (`sepet_id`, `kullanici_id`, `urun_id`, `urun_adet`) VALUES
(28, 0, 5, 1),
(31, 9, 8, 1),
(32, 9, 5, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

CREATE TABLE `siparisler` (
  `siparis_id` int(11) NOT NULL,
  `siparis_zaman` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `siparis_no` int(11) DEFAULT NULL,
  `kullanici_id` int(11) NOT NULL,
  `siparis_toplam` float(9,2) NOT NULL,
  `siparis_tip` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_banka` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_odeme` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_detay`
--

CREATE TABLE `siparis_detay` (
  `siparisdetay_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `siparis_id` int(11) NOT NULL,
  `urun_fiyat` float(9,2) NOT NULL,
  `urun_adet` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis_detay`
--

INSERT INTO `siparis_detay` (`siparisdetay_id`, `urun_id`, `siparis_id`, `urun_fiyat`, `urun_adet`) VALUES
(9, 9, 750004, 7.00, 1),
(10, 6, 750004, 99.00, 1),
(11, 5, 750005, 99.90, 1),
(12, 5, 750005, 99.90, 1),
(13, 25, 750006, 210000.00, 1),
(14, 17, 750007, 1200.00, 1),
(15, 24, 750008, 980.90, 1),
(16, 20, 750009, 3457.90, 1),
(17, 19, 750010, 99.90, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun`
--

CREATE TABLE `urun` (
  `urun_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `urun_zaman` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `urun_on` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  `urun_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `urun_seourl` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `urun_fiyat` float(9,2) NOT NULL,
  `urun_video` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urun_keywords` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `urun_stok` int(11) NOT NULL,
  `urun_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urun`
--

INSERT INTO `urun` (`urun_id`, `kategori_id`, `urun_zaman`, `urun_on`, `urun_ad`, `urun_seourl`, `urun_detay`, `urun_fiyat`, `urun_video`, `urun_keywords`, `urun_stok`, `urun_durum`) VALUES
(11, 6, '2020-08-31 02:08:10', '1', '52-Port GbE Managed Switch - ES0152', '52-port-gbe-managed-switch-es0152', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 657.00, 'saSgZ3CtKrU', 'Switch,port', 3, '1'),
(12, 6, '2020-08-31 02:09:48', '0', 'Lenovo CE Series Campus Switches', 'lenovo-ce-series-campus-switches', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', 780.80, 'saSgZ3CtKrU', 'Switch,port', 2, '1'),
(13, 6, '2020-08-31 02:16:57', '0', ' Argos Buy TP-Link 5 Port Gigabit Ethernet ', 'argos-buy-tp-link-5-port-gigabit-ethernet', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', 210.00, 'saSgZ3CtKrU', 'Switch,port', 5, '1'),
(14, 6, '2020-08-31 02:19:18', '0', 'GS1100-24E', 'gs1100-24e', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n', 130.00, '', 'Switch,port', 6, '1'),
(15, 7, '2020-08-31 02:22:18', '0', ' Hepsiburada Samsung Galaxy A50 2019 64 GB', 'hepsiburada-samsung-galaxy-a50-2019-64-gb', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n', 830.00, '', 'samsung', 7, '1'),
(16, 7, '2020-08-31 02:24:20', '1', ' Avansas Apple iPhone 11 64 GB', 'avansas-apple-iphone-11-64-gb', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n', 2345.00, '', 'iphone', 2, '1'),
(17, 7, '2020-08-31 02:26:18', '0', 'Samsung Galaxy A30 A305G 64GB ', 'samsung-galaxy-a30-a305g-64gb', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n', 1200.00, '', 'samsung', 8, '1'),
(18, 8, '2020-08-31 02:28:38', '1', 'Beats EP On-Ear Headphones', 'beats-ep-on-ear-headphones', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n', 209.99, '', 'qulaqciq', 1, '1'),
(19, 8, '2020-08-31 02:30:29', '1', 'SteelSeries Rival 3 RGB', 'steelseries-rival-3-rgb', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n', 99.90, '', 'mouse', 4, '1'),
(20, 9, '2020-08-31 02:32:27', '1', 'AiO HP 200 G3 21,5\" (3VA59EA)', 'aio-hp-200-g3-21-5-3va59ea', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n', 3457.90, '', 'komputer', 1, '1'),
(21, 9, '2020-08-31 02:33:18', '0', 'Personal komputer', 'personal-komputer', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of&nbsp;</p>\r\n', 150.00, '', 'komputer', 2, '1'),
(22, 10, '2020-08-31 02:34:44', '1', 'Kisi geyim', 'kisi-geyim', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of&nbsp;</p>\r\n', 210.00, '', 'geyim', 1, '1'),
(23, 10, '2020-08-31 02:35:43', '0', 'Qara krasovkalı dəst kisi geyimi', 'qara-krasovkali-dəst-kisi-geyimi', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of&nbsp;</p>\r\n', 139.99, '', 'geyim', 2, '1'),
(24, 9, '2020-08-31 02:37:10', '0', '15.6 inch 8GB RAM 256 512GB SSD', '15-6-inch-8gb-ram-256-512gb-ssd', '<p>content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', 980.90, '', 'komputer', 4, '1'),
(25, 11, '2020-08-31 02:41:20', '0', ' BMW X6, 3.0 L, 2020 il', 'bmw-x6-3-0-l-2020-il', '<p>Бескомпромиссный и не такой, как все. Новый BMW X6 &mdash; воплощение вызывающей самоуверенности. Модель 2020 года. Цена включает НДС 18%. M Пакет. Комлектация включает: Окраска кузова &quot;Black Sapfir metallik&quot;, обивка салона Кожа Vernasca с перфорацией особого дизайна &quot;Красный Такора&quot; | &quot;Черный&quot;, Отделка кожей приборной панели кожей Sensatec, Панорамный люк, Пневмоподвеска передней и задней оси (aдаптивная пневмоподвеска передней и задней оси с адаптивными амортизаторами обеспечивает исключительно комфортабельное движение при сохранении высокой динамики), R22&quot; легкосплавные диски M с разноразмерными шинами, Тормозная система M Sport, Выхлопная система M Sport, автодоводчики дверей, электропривод багажника, система Комфортного доступа, Декоративные планки &quot;BMW Individual Fineline&quot;, Пакет освещения, Расширенный пакет зеркал заднего вида c электроприводом, Боковые солнцезащитные шторки для задних пассажиров, BMW Individual обивка потолка салона &quot;Антрацит&quot;, Подогрев сидений (спереди и сзади), 4-х зональный климат контроль, Ассистент вождения (включает в себя работающие на базе видеокамер систему предупреждения о столкновении и наезде на пешеходов с функцией торможения в городских условиях, ассистент ограничения скорости с информацией об ограничении скорости и индикатором зон запрета обгона с функцией предварительного просмотра, а также систему слежения за разметкой. Дополнительно на базе радаров действуют задняя система предупреждения о транспорте, движущемся поперечно, система помощи при перестроении и система предотвращения наезда сзади), Ассистент парковки Plus (в пакет оборудования входят система кругового обзора, включая вид сверху и панорамный вид, активная сигнализация аварийного сближения, а также ассистент парковки и ассистент движения задним ходом), Интерактивный ключ BMW display key, Проекционный дисплей BMW, Аудиосистема Harman Kardon Surround Sound system, Термоподстаканники, Рейлинги на крыше с отделкой BMW Individual Aluminium Line, Решетка радиатора BMW Iconic Glow, Стеклянная отделка деталей интерьера CraftedClarity, Лазерные фары, Комфортные передние сиденья, электрорегулируемые. Гарантия 4 года или 200 000 км (что наступит раньше) от официального импортера BMW AG в Азербайджане.</p>\r\n', 210000.00, '', 'masin,bmw', 1, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun_foto`
--

CREATE TABLE `urun_foto` (
  `urunfoto_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `urunfoto_resimyol` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `urunfoto_sira` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urun_foto`
--

INSERT INTO `urun_foto` (`urunfoto_id`, `urun_id`, `urunfoto_resimyol`, `urunfoto_sira`) VALUES
(3, 5, 'dimg/urun/21327276172272421994b.jpg', 1),
(4, 5, 'dimg/urun/23604251182667926322d.jpg', 2),
(5, 5, 'dimg/urun/22687222602556123160c.png', 3),
(6, 5, 'dimg/urun/26006245963066823537g.jpg', 4),
(7, 11, 'dimg/urun/28970306712545226498images.jpg', 0),
(8, 11, 'dimg/urun/22414273042874029910CE0128TB-overview.png', 0),
(9, 11, 'dimg/urun/21287319132505426610248816728.zyxel-gs1100-24e.jpg', 0),
(10, 11, 'dimg/urun/29469286322219923867GS-1100-24.jpg', 0),
(11, 12, 'dimg/urun/29513279022220923199es0152.kvm.ip-based-matrix-switches.45.jpg', 0),
(12, 13, 'dimg/urun/251032069320963306978495459_R_SET.jpg', 0),
(13, 13, 'dimg/urun/24813289402238329495u_18438952.jpg', 0),
(14, 13, 'dimg/urun/29220294032400028105images (1).jpg', 0),
(15, 13, 'dimg/urun/29209252503130028142269837.jpg', 0),
(16, 14, 'dimg/urun/28600206432557628478GS-1100-24.jpg', 0),
(17, 14, 'dimg/urun/27602299922019930063CE0128TB-overview.png', 0),
(18, 14, 'dimg/urun/26757276172753224534images.jpg', 0),
(19, 14, 'dimg/urun/31402217042502322696es0152.kvm.ip-based-matrix-switches.45.jpg', 0),
(20, 15, 'dimg/urun/28121298892380630902a50.jpg', 0),
(21, 15, 'dimg/urun/28036315752704531968a50-2.jpg', 0),
(22, 16, 'dimg/urun/26812201842434522912Jell_iPhone_11_Purple_Hero_600x.jpg', 0),
(23, 16, 'dimg/urun/31600299903061724070iphone11-purple-select-2019.jpg', 0),
(24, 16, 'dimg/urun/28371269612347430406iphone xs lavender case-847jrv.jpg', 0),
(25, 16, 'dimg/urun/26503242792601621534iphone-11-64-gb-3-z.jpg', 0),
(26, 17, 'dimg/urun/31990276142240931435a30-2.jpg', 0),
(27, 17, 'dimg/urun/21367292392054929231a30-1.jpg', 0),
(28, 18, 'dimg/urun/21832313792977524999n11.jpg', 0),
(29, 18, 'dimg/urun/29315282882938429080images (2).jpg', 0),
(30, 18, 'dimg/urun/23315206382282922524images (3).jpg', 0),
(31, 18, 'dimg/urun/29565290342607723891images (4).jpg', 0),
(32, 19, 'dimg/urun/20006280043123529232m.jpg', 0),
(33, 19, 'dimg/urun/31449229883023325723m1).jpg', 0),
(34, 19, 'dimg/urun/265733071220453243480001867098001-1.jpg', 0),
(35, 21, 'dimg/urun/31774249653023621536453360.image0.jpg', 0),
(36, 20, 'dimg/urun/30448270872758127559komp.jpg', 0),
(37, 22, 'dimg/urun/2385523591212412361734cc6ec8-4c47-48ea-b508-e56b9e9ee820.jpg', 0),
(38, 23, 'dimg/urun/24135266953005423708images (5).jpg', 0),
(40, 25, 'dimg/urun/3097322062307672275528953_D1AycHnvRLMLeI3XWxbT-w.jpg', 0),
(41, 25, 'dimg/urun/2031030455265582024928942_c3EBCP4VeyDkIljMP9lv7w.jpg', 0),
(42, 25, 'dimg/urun/2383223353218932929275015_h9ijev5iZ4WjWVbYAAmhTA.jpg', 0),
(43, 25, 'dimg/urun/3097324625231672179510074_C5l66j9jvmP-APpeg7Y5qQ.jpg', 0),
(44, 24, 'dimg/urun/30938293552397122935$RTDYBX4.jpg', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorum`
--

CREATE TABLE `yorum` (
  `yorum_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `yorum_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `yorum_zaman` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `yorum_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorum`
--

INSERT INTO `yorum` (`yorum_id`, `kullanici_id`, `urun_id`, `yorum_detay`, `yorum_zaman`, `yorum_durum`) VALUES
(14, 14, 25, 'Gözəl maşındır', '2020-08-31 03:51:48', '1'),
(15, 14, 12, 'Yoxlama', '2020-08-31 17:00:42', '1'),
(16, 14, 22, 'asdfgh', '2020-09-01 02:21:37', '1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `banka`
--
ALTER TABLE `banka`
  ADD PRIMARY KEY (`banka_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `sepet`
--
ALTER TABLE `sepet`
  ADD PRIMARY KEY (`sepet_id`);

--
-- Tablo için indeksler `siparisler`
--
ALTER TABLE `siparisler`
  ADD PRIMARY KEY (`siparis_id`);

--
-- Tablo için indeksler `siparis_detay`
--
ALTER TABLE `siparis_detay`
  ADD PRIMARY KEY (`siparisdetay_id`);

--
-- Tablo için indeksler `urun`
--
ALTER TABLE `urun`
  ADD PRIMARY KEY (`urun_id`);

--
-- Tablo için indeksler `urun_foto`
--
ALTER TABLE `urun_foto`
  ADD PRIMARY KEY (`urunfoto_id`);

--
-- Tablo için indeksler `yorum`
--
ALTER TABLE `yorum`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `banka`
--
ALTER TABLE `banka`
  MODIFY `banka_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `sepet`
--
ALTER TABLE `sepet`
  MODIFY `sepet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- Tablo için AUTO_INCREMENT değeri `siparisler`
--
ALTER TABLE `siparisler`
  MODIFY `siparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=750011;
--
-- Tablo için AUTO_INCREMENT değeri `siparis_detay`
--
ALTER TABLE `siparis_detay`
  MODIFY `siparisdetay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Tablo için AUTO_INCREMENT değeri `urun`
--
ALTER TABLE `urun`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Tablo için AUTO_INCREMENT değeri `urun_foto`
--
ALTER TABLE `urun_foto`
  MODIFY `urunfoto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- Tablo için AUTO_INCREMENT değeri `yorum`
--
ALTER TABLE `yorum`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

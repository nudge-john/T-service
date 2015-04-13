-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 13, 2015 at 07:11 PM
-- Server version: 5.5.38
-- PHP Version: 5.5.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `T-service`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
`id` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `img`, `date`) VALUES
(1, 'betty', 'bettychoi@akaprep.com', 'LPqoMauUL+tPa1AngJ1GVGGzX4hNOdj90Oz4nTmqMzFvDcGjaGyyGxY9Uv0eY2UDyl4ZWYzar/iwlfspEEsMHw==', '', '2014-07-02 01:37:10'),
(2, 'john', 'john@akaon.com', 'R81sRtNVvQfxFS8Fz6nG48DH8S5DkmiOOZW30siCAziVObxjhgdsZjeIXtil0Jpi1tOK9NUPgAMku774HwN9hQ==', '', '2014-07-02 01:37:35'),
(3, 'june', 'june@akaspace.kr', 'bUFXYEhujY1PpdrNBjTXeAEUhL/2N4SQgGC+X0ojo0RgiMK/FovLYp//2Bkfu05Op5b4lN5dPoJvqKzkoHN65w==', '', '2014-07-02 01:47:59'),
(4, 'danielle', 'dame921@gmail.com', 'T3nL6VCCTFT+ImBNbEN/a9stjQ5IY3ROP9BR+mZjOp2uNOivse5wLoCF2u84tEU7hoXw1SFY//JlfMvKIvGSiQ==', '', '2014-07-02 02:18:44'),
(5, 'Won Jae', 'tmvlsh@naver.com', 'z+vH6eFZk5Ee9rnNsAxO26nLy3XIfMRVWjUh86rEvRyiePwtjq1Fob/sYNJIG9Bvi/b5LnpMRIdl32xJXnelOw==', '', '2014-07-04 02:18:24'),
(6, '박용호', 'pyhgo123@naver.com', '5QpUAEkNJPo1hQbMsERZYicpe7i45JRb6RiOpvMpiBw3i2w0nJMi7N+YeSe4QX2B6CC7oIygfpSOz9i6ZfJJIw==', '', '2014-07-09 01:00:53'),
(7, 'Tony', 'tack116@naver.com', 'Mlula8VTvSVDk+ZU6umksop/kMWmMXxmev4gPeWnvP7pbv+vAxHELCdWJwaX+DJ8g063s21MQHNVaU249EFETw==', '', '2014-07-09 07:52:34'),
(8, 'admin', 'admin@edgewritings.com', 'vpXp2eUkIXQt7ZOgSPbIgvU9ANzORwJoDPaRIW+VERxFsfHDR+D8aZJ+s/+39UEoW0rbFl1ItFl/CX42yEJ7fQ==', '', '2014-07-23 04:45:59'),
(9, '성정연', 'jen@akaon.com', 'LJT5SOAYNlJpPDnp9aehWF0kTUD7YXiY7LumwQMuhxt3daV40jv3VJOehCn/AeTJ1OUN7MB0hk+ZhyaIzmSSOA==', '', '2014-07-23 05:18:45'),
(10, 'dalkojin', 'dalkojin@akaspace.kr', '8aYkwWcMhD3+iEL808c2JQuATobACMSb4bJZsk+Slmg/k6P3FvLWuleClrXftCZd91R/z3ZU+Vr72Jq1emYr4w==', '', '2014-07-23 05:38:38'),
(11, '김정훈', 'ios5404@naver.com', 'LOdQ7A9vNiz4PJVfL43blZEnYTNeBGuS/KUK3cNqcXhOiUZhVnkGO59AyoEyaLJcuiDlSdJLTjdfYRVX+wh9aw==', '', '2014-07-23 07:51:47'),
(12, '박용호', 'pyhgo123@gmail.com', '0xa6XspxfX+9alPzYz0IxQJfkuCGJji3K320a3VYuKsDtH/at9K2bU0IwUzXKdU7M6AJceYqPOagmtMrP++dew==', '', '2014-08-11 12:35:15'),
(13, 'hojinlee', 'hojinlee0930@gmail.com', 'iKVYdEdPt++aScZigg8oIaP7Da77xRGu2PVU816s6kzk6DfA/qDaa3nHO8o8zmHbGqlyqFRBiAxI+AnRNhR4AQ==', '', '2014-08-21 09:04:18'),
(14, '김인정', 'pypupipo@gmail.com', 'VkqES6B10T1SZNEciAmoWblBl4wFav44YlWKupyp6UMCNgJg1Fk2zElZLTkGijmPw4mDXfod3UtTgVBXRxyUAg==', '', '2014-08-22 13:24:21'),
(15, 'John Kim', 'ljh85@naver.com', 'huPI3Kxvo2ModdrHsypwS/6/qNdl9r23maXhG0rYDOHaN38yNwU6gyv+w2juX4OZ/TUWYcRxmc8wzJEkuQVjzQ==', '', '2014-08-25 09:28:55'),
(16, '안은영', 'daniel6620@hanmail.net', '5JlBOmdwXPYiRWFkJwENVPYvPlNoZDvb/UIA390PnuBcPR08pW9GFhEGBG7HanEpdaG8BdB1KrH0YbleyorIew==', '', '2014-08-25 10:23:28'),
(17, '이혜린', 'marryan09@naver.com', '5Mgf5i/4UwEk9oodD5jbCxn/nd5AMYsZdR682eDpuzZGx5Z0HE9Jx2n0fiMD1mMdlvF+U4yg/VUIAHbtEtzUkw==', '', '2014-08-26 03:50:19'),
(18, '윤여안', 'yany0504@gmail.com', 'NzXP4Jo5dXVlBoD04GBmgW86LNBLiN9uBmKGkalXnI6g6cyO/3mAKQ77NAosRl9lAyZITpSUkWCeNDT99OWTvQ==', '', '2014-08-26 10:26:04'),
(19, '이충만', 'sdfggh03@naver.com', 'DTTDriql55Fqn60+tu6g/QV3+ZRSN9+TKJMVR1nTSJfVxqHHlyjUvJlGwRTRdFZvqDQa2sHmSPge7GGPmmXJHA==', '', '2014-08-27 09:00:24'),
(20, '이윤정', 'lizlee97@daum.net', '7uV9T4F2qsvvgQCHbPlfKlqqaXYCuL9Lt67DbCaFZda7tED6ngOlFoqzpX/eut18TPm7Y9P1hIUGKiqi6ZgoeQ==', '', '2014-09-04 02:08:35'),
(21, 'Jihye Lee', 'jihyelee0502@gmail.com', 'KWrlxryYj+sY8ISKg7jybhFtns5YZ7q7qmbEsTrT2JsH5tiKvfDHNAfgkrUiB9pFBmi1m2qdD0qoyp1WiL4IBA==', '', '2014-09-05 03:59:07'),
(22, 'YunseokJANG', 'jys880@naver.com', '0MOXrJOkdK3ED13o6s7iR8/qPGE0tPYjKZFK18Dqe1uFbilmszIyKaq+KdgbzYjeK0avnbf00tQsuXjop1ck3A==', '', '2014-09-09 16:21:57'),
(23, '곽진영', 'jinyoung.kwak92@gmail.com', 'sA7gsmPzPnUfgJ/PlLua7s9KIyWBQJYHnrQ8of4PsDahIlTA2dM6gRAg9v4HuF0K5YpzSN/GU7glMcH6oyYeKA==', '', '2014-09-10 14:52:06'),
(24, 'Daniel Kim', 'daniel.seh.kim@gmail.com', 'fxuogX16wuLbu75kVnRet0pT/Fu9XZscrelMsn6lozQpS0e0gvCyXbbTtlDnfCRlHH2fFjFQcY5dceIJz2md9Q==', '', '2014-09-11 00:14:28'),
(25, 'S.P.', 'postameretat@gmail.com', '93/osERwvcnbol1FJAekfXY6XqqzZnlKFZvGWt47zX5uq602YLkAXOEtQH+r/YMXahwNQUompmHeZghy1PZNnA==', '', '2014-09-14 23:14:58'),
(26, '이병호', 'mba4u@daum.net', 'FHu+F2yKoqPuZkF2ObbZNR12a60h1sTtbvB/Sl6rDDQkEZo7x6oEeFzBwmRp8CzG/xuVZtLAG90vnN+Pq8XDYw==', '', '2014-09-26 13:40:45'),
(27, '전해인', 'sweet7heart@hanmail.net', 'OaCLOIbdEnFT3ZxIlW0AODSBgcD4LNtBxe68Yw7lsTjUzVTaAcKfQKruRuVlUtsMC43iBGWXmzngCdgkxw3Aiw==', '', '2014-09-29 01:19:55'),
(28, 'Joonho Sung', 'jhsung2619@gmail.com', '8txh8B2FvTwBAcIOOaMnDcrA/RKHAOIBsqxKsNOz4zngyvd322uQkwZG5/EE+A3RB6huGiWMqZNeXiDdCY0iEg==', '', '2014-09-29 13:09:15'),
(29, '최환기', 'bb309@naver.com', 'NAsAnq+bCUL/31blXA9uekDhB4BFlDni+BEoeDYM+M0yRGor4kseqDfoAZNnVSmkM9qI2gTOcRJM6/hMPIkZrA==', '', '2014-10-03 08:53:27'),
(30, 'Lee', 'steph-luv@hotmail.com', '+i9hoKzy+fxiCCo1TJ5vVMOwmdncp/i3Ybi4LSDI0pJE2K1Cu6+dSEWRVZUqy/a5WJYBzW6Tx1EhoVtJU2jTuQ==', '', '2014-10-06 00:46:20'),
(31, '심현아', 'hyunahsim94@gmail.com', 'V9//El0QQUzROwi549aSeox0x1rFucSRjRSfohl0jX0lVf2rot9VZoWh/YiJ6uZ1yf7+czVpg1dGYrMm0JpsNQ==', '', '2014-10-17 05:34:51'),
(32, 'jiwoon', 'makimackey92@gmail.com', '+tZJFqsymVyu9552CSK4NewT0tHFxaeVjAzJWpRKvBs0YqObFKL58YkG96rva8jrUxcxME7lhQpLs5NWiIcDAw==', '', '2014-10-18 05:27:18'),
(33, 'hyungjookim', 'hyungjookim8639@gmail.com', '15X3NcyLbHOoDYTbedsXarxOsmHqSmaq1R5Ku1+I+tkpVs1P4ub8Q6ZQBWDa/h+AyPucNf5Mun90yV1y2c7fMg==', '', '2014-10-19 00:25:36'),
(34, 'Yu, Chiho', 'ych6750@gmail.com', 'OM/e8GSpaAZNBxMoS79a7ZVdXtgTn0EP0Sz2MJh4HH++cWynkBILugZy3vemevjggIW3ib0Esk9CIH21qDEIGA==', '', '2014-10-20 13:01:50'),
(35, 'Han Park', 'attractiveph@gmail.com', 'C38j4UkO9F9PUkXTg5HikSRWRTnC8UZ/6KA2QioVmGGqYXB1G9DBAozrdd0RrUmhY3exjFaFP43z9CAf8+mO9w==', '', '2014-10-22 07:27:45'),
(36, '문예림', 'myang3403@naver.com', 'rOKJ9Cy4R0iE4tUE5vzmWrRk+wZpSTTWqgH8z9Tgre7DIR6HY91e32sIkue8BeiYUCpZPeeKmyrbtP5MqQaLbA==', '', '2014-10-27 03:17:05'),
(37, 'Hannah Kwon', 'enhye.kwon@akaspace.kr', 'obrwCGFOGZI1H+0If2BCDKAkpa5AvX2JWO9pSJXCa88r2o4zTPFESBT/Uxzcx+kcrzhqBwH3G+FcSqtV6ZmQnw==', '', '2014-10-31 08:42:00'),
(38, '이치근', 'chikeun.lee@gmail.com', 'XRQZkV4b9Gaw35rhDORpzpofIUT413RpcbSYEsG7VATlw9y42HgzfzstplfUfS++bdF1YP4stgubptAdBcnuCA==', '', '2014-11-07 00:41:59'),
(39, 'Suhyun Lee', 'sam4328@gmail.com', '9GrNyQwK1fqrUu4wHsEFFUoLEn8GBBlW703NMUkPQGKYSiNApKXWVCy8SKgUgdqbP7E0WFRxM3bj7R9o5oMZ6Q==', '', '2014-11-09 09:01:29'),
(40, 'Bob Lee', 'mba4u@naver.com', '4IuoAHTVoELoC3djjw16a7CORdoILkUh4LmlyRKYFBaZalJ7/kcyaEBuYcRL2eUG4sGJQeMSrIf76Evc/nvLeg==', '', '2014-11-11 07:15:36'),
(41, '박경리', 'toji37@gmail.com', '4lyHb9YKOrTYWJLWV95EVve0xToojFwC1ubEk8wu8Ko4w7zky7SMLetJBL2RzLc6nBsU+HEYSM7kPgEOfLyl+Q==', '', '2014-11-16 09:48:15'),
(42, 'Michelle Kim', 'oehsyena@yahoo.com', '7RM8zYwpxxDzqRGaCxw62VboF+gMyE01p4Foix8YkldFO40cAPqWghb9CnyQ9fp+Nkrn1qUn1CJ17++WyifC/w==', '', '2014-11-17 22:44:02'),
(43, '조현희', 'jo910223@naver.com', 'GHB+w+dhxyRCv9dF7RvS8SQPFYMEQ7Gfw3UieRqsso3P07EDhYWO9VShZQ5BLHH/vvqJoH79E1c1oYVuRKMdKQ==', '', '2014-11-21 00:47:54'),
(44, '신지명', 'bepure93@gmail.com', 'SEcuyWkXz4FT3RDF8PVyi88F5pXzsPTZOg+0RbNHX7YcRecu3qLd2QtmtaFUDVvQzdXVzNmb+k7ARasbY1Kj0Q==', '', '2014-11-21 06:55:20'),
(45, '서율희', 'elephantasticday@gmail.com', 'DzgnPJFXXCmGYpje/e+BvwlEoz7rDDF1UW5WhBNLtwr2879SFXnD5W6idC/x1PI6umuCLkdSjT56B1smxMo+kA==', '', '2014-11-24 13:12:22'),
(46, 'jenny youn', 'miragejen@naver.com', 'U/k0DsFZ+SW4w/5Co+4pXDllGYlHxq2/rvVcCKxrKH0IpsyeYljLy64kUIInT9L7VqXJghTrqCWhJRUMPNXgOA==', '', '2014-11-26 10:03:25'),
(47, 'Jeong-ki Hong', 'burnness1@gmail.com', 'uC7zjz4xyEDRX/p3t/5laXL0gOUlwJBYatosaRZQLmBv1XrjvzmLrzDU4BmeLSeWfiKMHhCuwMsHSDLxTU+fKw==', '', '2014-11-27 11:40:36'),
(48, '조민희', 'cmh12@naver.com', 'SR3KMj8bsaq69p/mHUZF24kDMRAa09otkMDOQqMQwk+/YiVSetMsg8FexERfpFSnwcnDqO/qtEo/VEdVykAiOw==', '', '2014-11-27 14:51:12'),
(49, '김은종', '13elite55@gmail.com', 'QyKyFLHuK28vovW2fk1gGuRuIiSZcSVsTsnjxa0iymZBzqBu+oYiFI4a/MORBpaDRslqveIMUY3PTmx5YoUbrQ==', '', '2014-11-27 15:48:02'),
(50, 'Oh, Sang Teck', 'brianoh89@hotmail.com', 'X/1/6/G0/fni7Q+ADlSq9lRgHxOxs28XSHPotIIloKyZOeiF218SlNAyHRfcdi1mGe9YXqhcpaVHgQxXLjjROw==', '', '2014-11-28 04:49:59'),
(51, 'Lena Shin', 'hwayong.lena@hanmail.net', '1hjJpycdQPrBWkzKR0I1QvWG+kjMk302Oi6SIP4h1WYCkem1xxhXBKHYaSgMW/zOPnHt8wKZXZC0082Z2dKvmQ==', '', '2014-11-28 14:51:08'),
(52, '최성규', 'scott0827@hanmail.net', 'AIt1neSPH0Rad7N1nH0i1LNLlFtu5/oSuu4sR7vlJ5tf8q8SvGyUzHOK7P2tW36Rz27RHI7U+Co8abRgRXILIA==', '', '2014-11-28 15:53:36'),
(53, '정미연', 'ausksl@hotmail.com', '1uAtf6k/lqbqirTqkDXNavrpGftd7mn8Po/fA22fOI5eu9YRVxXR+nYHnLNmRZ/sk5Q9za0BCRd70rKmEq/I5A==', '', '2014-11-29 05:44:13'),
(54, '조범준', 'jobem@naver.com', 'IUmVLgEIqDDCiiVRzlxFRUwCrdEEz+aCUAkdPVNLcSnJPpxTTrhE8Bok8RJ7bbmsrtHTTJHOe3SFSvCj7w6CLg==', '', '2014-11-30 00:03:20'),
(55, '구혜빈', 'hyevin0319@gmail.com', '/86Z2GHSFa+IAhb1ixrMqZNr7x/ZhM2FUPlaGGPPbV8R/3szpSYUb/HEemQm0672kcEpz/6q+cwclPv37tXtww==', '', '2014-12-01 12:49:20'),
(56, '박형민', 'ahouse2001@naver.com', 'Jr0Rqea/PZUlUvF5u8ZOpY+CLMQQ8HIWjERKaEvFqbRaQM3nOO6Nfem45CCXyzi1broMlhl/EwCirxtwbV6yMQ==', '', '2014-12-04 07:08:07'),
(57, 'Joohyun Park', 'zhuxian53@gmail.com', 'EJ1JTyuOBJr59WrK2F0ufrF5XtwPKmAtVnIJHtgVvPhU4sLaAg0b8wmqjZ3Iwu7mXRp9XRGYj9HrIHVp089u5Q==', '', '2014-12-04 08:34:15'),
(58, 'yongbum park', 'yongypark@gmail.com', '4t+8VJeQa4KjXqxJzeq+oeSOqZRdaMkQ1+TPWygNecRz3U2tQi0f7Tn3IPNLHAbh7ekGVikimlLBu7guX5WFkw==', '', '2014-12-04 21:04:45'),
(59, 'jihyung kang', '01.kangji@gmail.com', '3Nu174LH7gRh/rClB3vQjfBfmZ0Dp1tSgioq5b5t3yQ3Ct65yTXlvU91LcRdK1fwftHEC7bmhGWgI4kCelyoiQ==', '', '2014-12-05 09:46:56'),
(60, 'SH Jo', 'jeguus@gmail.com', '3ULKCKKI2/2KcOeUlC4g/63slUZD7S3tXrGrajxkwQyHmGTrSyQktMmdjol5cVdfSXEET4sZJHgvfgsPGnAmmA==', '', '2014-12-06 12:56:26'),
(61, 'KyuDong Park', 'kyudong3@naver.com', '9rFwC+C+oBNsda6jrTcObkvkBNa2Kv7VragBVpGtQSFAcrWDDNJaZ+M47NhLjt/Od4r0mA13x/6IVPVho6Uc3g==', '', '2014-12-06 15:09:52'),
(62, 'Anne', 'angyora@daum.net', 'Guuy0SabFpwf0+1SHEPvUHs56pO7JEkKDQI3jKCXBIE1ai6YoQaOW6up6ACwaczFEXrkX5ExVs5OTAHapV9gMA==', '', '2014-12-06 19:39:40'),
(63, 'Jo Seunghyun', 'sky@izz.kr', 'SkQ1Do28rmnD3qJ3DLCs020nKWHe6IME25AVb3ngHXTUFusZ3s2Ic2eIdJPeoWE7lb/ngSEBkum53D3vQp9+gQ==', '', '2014-12-09 04:20:26'),
(64, '김수빈', 'soobinck7640@gmail.com', 'DkimZx06FSBPC+Eh5FwkGwORSpGXFIopmr/DS+Q+49+/ldK42W8HOErz8MToWRgVxXNhd4FYg91PkpNZ3mi8Jg==', '', '2014-12-10 06:48:54'),
(65, '오의석', 'yoshiyuki@naver.com', 'PDTJKzVaUFOB2p2RFT2Inlor3X+2SdcB2y0myjyBkEh+WeHk7vAVmMgqWR/8lxis5lx4oFYMafUg6zn7aVWpYA==', '', '2014-12-10 15:33:02'),
(66, '박소현', 'sohyunlove05@naver.com', 'XDx4suSnVsjZ6XAXoi2Ddmc4YXtGBc4KosfmuVZcIOHTrGGbDYVB6bwNRBsLezNMmY4JgukFQoK8R4eFodnNVQ==', '', '2014-12-11 10:44:01'),
(67, 'uhl93', 'uhl93@naver.com', '6l2M6vJcVM8awlsYa23o1zCtHTTZcANn+grFO2SbXTjM6/qRlXApLDEEGtqnCMKvLAFOaRHyvp5+bxxIyJQ19A==', '', '2014-12-11 12:29:59'),
(68, 'kyung-in', 'kyungin2@naver.com', 'Mtbm64ZilPvaoDnWhBiMb4wk++BZ3YO4tr1EqdM6Bn+nSPMuSEkjVoXf5QSkZtcsl+BWRw7h0BGGxX/WpsL6qQ==', '', '2014-12-11 15:08:24'),
(69, 'Bomyi Kim', 'star_bomja@naver.com', 'xz7ZQxbjGM5DOQ7qfh8667BsQqsWjEXyitNENUGz1roTRx4i0voTKlLRXUkc/vRwiFksJnOVIO6NwuUYDoQCgw==', '', '2014-12-15 16:07:30'),
(70, '박소진', 'psj1018@hotmail.com', 'c8UGyhPZPHKUVKEcHb+16utXVuP2SYYlG7gHR9Fs7OAtAL5qI3XdWqJ+zvuYMqK8Zf/KZ0B7ectYajf0LHjbMA==', '', '2014-12-19 13:57:41'),
(71, '박수향', 'joan_park@hanmail.net', 'oW3NYwormfsIv5+5edt/aC2VRrhtXxtLBOutfquC33TkPrl9X6/XU40y3UnXu4fXBEG+onLBBr61bID9Qi5geg==', '', '2014-12-20 13:46:40'),
(72, '나주희', 'okbingo414@naver.com', 'mYBGKVdsqHxtInwg0LtsxeG9qsJ2B+Wm6rED4Ui+r6eFv0+LL3MFuSd9wcgMz4DlbVDSXsBCmwouGJfwfKzQGQ==', '', '2014-12-22 00:38:58'),
(73, 'Enxi', 'anenxi@gmail.com', 'kXEljxHa9KRG+kWbQLG/3Nc7eMBbl/efX/+fewuqjjpA51Nc2Y3o4I+nHj6AarrnLVWcp0tOEZeIo08NzeDzqw==', '', '2014-12-22 12:18:42'),
(74, '박수향', 'dayoonoh96@naver.com', '4D1lHO/lCZSWN51aEyvn1xo4Z3QzlyKnJQaFVSgUyfvY1UFj4k6E6rt8VK16uB6hh5K5qxXAOZgIC/+tP1cjcg==', '', '2014-12-22 23:08:27'),
(75, '김지연', 'ambiguousee@naver.com', 'ngOWp6aiIpJx46mOKy/W/CzqbQDbFdUQIAEOi7lz5C0nEFw9JhbQvrbL0HMvkLDQoiIl207oZm92wNEAgp1E6Q==', '', '2014-12-27 19:36:58'),
(76, 'Lee Youn Gyoung', 'Katrina12583@gmail.com', 'WNNid6FXEN0CbcC26tTyn8Csta1tcs7XwtnY9vcmbRics14JR/ySEQygMAgwxVqmNYyVzPQOYfahS6wbCFjgRg==', '', '2014-12-28 03:11:01'),
(77, '이란', 'iran370@hanmail.net', '3cD83nKhyAh43VZTVV38QpJyO94sp4iXNCs3PRM2QzexuKZ2GGEzk7OmN5uXa6R9yVeNN0L8B71znLSZvzN4qg==', '', '2014-12-28 10:21:44'),
(78, '이찬미', 'SMALLHOPE77@NAVER.COM', 'lHLlyWdOcC+wRMsLDsB4GvIR+h0ys9hNTNdTThDG2AIN1Hw4OsW7UOo51iqzO6aJUQxtz3ZUt+WZCLmxMVbAkQ==', '', '2014-12-31 08:55:09'),
(79, 'Seyun', 'seyun.hello@gmail.com', 'B9gc6CnWexo1c8sTARMlhVPd2roobbWU/FVexOl5dVbOkTsjJrMTJC7P7qsFbAYjlBOhVVoQcoPiaUUQRipE/Q==', '', '2014-12-31 13:10:06'),
(80, 'jina LEE', 'zen-buse@hanmail.net', 'Vx3MdllYFUVVDTpSStSLq2PQz8UCPaoyuY1ZJZ9BhBnlxQ5wwXmss/YWE2Oz7awSOwmk+/vB5GoxMp/I+s3J/g==', '', '2015-01-01 16:20:41'),
(81, '신권상', 'shinnnnn@naver.com', 'pFDFqTCBEvmhX9oiwuPb2jaAthdl4LVNwYofPd2zoTHRpe0Fuyz8bjbdsbdiR8r/MYwBvvxbpt+my141M7aZHQ==', '', '2015-01-02 09:06:37'),
(82, '김주현', 'lyrakim17@gmail.com', 'HJWs0xjS6WYzXGe5i4m44XqzCS353//TlcGs8UGZUICU2CYg9brjt9+sSMxTbIvuukROJxnTrNH1NaBW9hA9tw==', '', '2015-01-04 01:56:12'),
(83, '박준희', 'justhis317@nate.com', '12y2W5xLFohjK5VhZTPlI7GkRKq8ayouueUn08T8zLMCT6+3fMSFemo/iZjUIKy8TbKbZevxdFNt3CTiezJxLA==', '', '2015-01-04 11:18:49'),
(84, '김중곤', 'jungonkim11@gmail.com', '/rK526iGpv+HY7HJLdi+eGLNkYD4Sn6DXHyKzqAXslsjFGaLQ2Yw9c9tWiguMrSQ88xUDhYCv7aO99S1FGSSYA==', '', '2015-01-05 05:31:30'),
(85, '임성환', 'eric@akaon.com', '72MSrSfNmXRajWYTiwbQuKeIscl09Fa1zYihD9YTWHkMT0XBCDVQl7Qs927bscnCdcPZEpWJj8Pjt/N8OL1/gw==', '', '2015-02-04 01:12:18'),
(89, 'Gwang-bok Go', 'gogwangbok@gmail.com', '', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xfp1/v/t1.0-1/c66.190.414.414/s50x50/189188_150353888357565_7338375_n.jpg?oh=a68a096092908bd494836ed46b3c4b18&oe=557F8565&__gda__=1433729806_423d0dbe499b628fee4e1b7d56fedd73', '2015-03-09 18:51:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=90;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

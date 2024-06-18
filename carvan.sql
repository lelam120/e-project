-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 16, 2024 at 09:56 AM
-- Server version: 5.7.24
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(20) DEFAULT NULL,
  `infor` text,
  `thumbnail` varchar(50) DEFAULT NULL,
  `back_img` varchar(50) DEFAULT NULL,
  `icon_brand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `infor`, `thumbnail`, `back_img`, `icon_brand`) VALUES
(1, 'GWM', 'Established in 1984, GWM Group is a Chinese automotive brand. Its business operations involve the design, research and development, production, sales, and service of automobiles and components. The company focuses on key research and development as well as the application of advanced technologies such as intelligent connectivity, autonomous driving, and semiconductors.\r\n\r\nGWM has also strategically positioned itself in the clean energy sector, including power batteries, hydrogen energy, and solar energy, establishing a complete industrial chain layout. The company is currently undergoing accelerated transformation into a globally recognized intelligent technology company.\r\n\r\nNotable vehicle models already released by GWM include the Haval H6 EV, Haval Big Dog EV , Wey Blue Mountain DHT-PHEV, Wey Mooca DHT-PHEV, Wey Latte DHT-PHEV, and Tank EV.', '/img/GWM1', '/img/GWM', '/img/icon_GWM.png'),
(2, 'Chery', 'Chery Automobile, established in 1997, has the production capacity of 900,000 vehicles, 900,000 engine sets, and 800,000 transmissions per year. It has developed five major passenger vehicle platforms: A00, A0, A, B, and SUV, with a product lineup covering eleven series and a total of twenty-one models. The company\'s products span across passenger cars, commercial vehicles, micro-cars, and other fields.\r\n\r\nThe models currently released by Chery include: Chery Tiggo 9, Chery Tiggo 8 PRO, Chery Tiggo 7, Chery Arrizo 8, Chery Arrizo 5, Chery eQ1, Chery Wujie Pro, Chery QQ Ice Cream, etc.', '/img/chery1', '/img/chery', '/img/icon_chery.png'),
(3, 'Changan Automobile', 'Changan Automobile Co., Ltd., abbreviated as Changan Automobile, was established in 1996. Changan Automobile Global Research and Development Center is an open and collaborative smart research platform that integrates global resources. It encompasses seven major functions, including design, testing, and management, covering twelve areas such as simulation analysis, noise and vibration, and collision safety. The center includes 180 laboratories dedicated to hybrid powertrains, air conditioning systems, non-metallic materials, and a global data center built using cloud technology.\r\n\r\nCurrently, Changan Automobile has released several models, including Changan Benben E-Star, Changan Eado EV, Changan Lumin, and Changan uni-K.', '/img/Changan-Automobile1.jpg', '/img/Changan-Automobile.jpg', '/img/icon_changan.png'),
(4, ' Hyundai', 'Hyundai Motor Company was founded in 1967 by Chung Ju-yung, the former chairman of the Hyundai Group. In the course of Hyundai\'s development, Hyundai Electronics was established in 1982, providing strong support for Hyundai Motor\'s modernization process. In 1991, the company introduced the first internally designed powertrain, the Alpha engine. In December 2000, Hyundai Motor (China) Sales Headquarters was established in Shanghai.\r\n\r\nCurrently, our available models include the Hyundai Sonata, Hyundai Tucson, and Hyundai Elantra.', '/img/hyundai1.jpg', '/img/hyundai.jpg', '/img/icon_Hyundai.png'),
(5, ' Honda', 'Honda is a multinational transportation and machinery manufacturing company primarily engaged in the production of automobiles, motorcycles, aircraft, engines, and power equipment. It was founded by Soichiro Honda in 1948 and is headquartered in Minato-ku, Tokyo, Japan. Honda has more than 130 production facilities in 29 countries and regions worldwide, and its automobile production volume and scale rank among the top ten manufacturers in the world.\r\n\r\nCurrently, our available models include the Honda CR-V, Honda Fit, Honda Civic, Honda Accord, and more.', '/img/Honda1.jpg', '/img/Honda.jpg', '/img/icon_Honda.png'),
(6, 'Toyota', 'Toyota Motor Corporation, founded by Kiichiro Toyoda, is an automobile manufacturing company headquartered in Toyota City, Aichi Prefecture, Japan, and Bunkyo Ward, Tokyo. The company\'s vision is to become the most trusted enterprise, achieving social recognition, customer satisfaction, and employee growth through stable operations and continuous development.\r\n\r\nCurrently, we have the following models available for sale: Toyota RAV4, Toyota C-HR, Toyota Corolla, Toyota Camry, and Toyota Avalon.', '/img/Toyota1.jpg', '/img/Toyota.jpg', '/img/icon_Toyota.png');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `newcar_id` int(11) NOT NULL,
  `car_name` varchar(20) DEFAULT NULL,
  `information` text,
  `Video` varchar(50) DEFAULT NULL,
  `thumbnail` varchar(50) DEFAULT NULL,
  `type` varchar(25) DEFAULT NULL,
  `old_new` varchar(10) DEFAULT NULL,
  `new_brand` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`newcar_id`, `car_name`, `information`, `Video`, `thumbnail`, `type`, `old_new`, `new_brand`) VALUES
(1, 'GWM Wingle 7', 'GWM Wingle 7 is equipped with a 2.0T engine with a maximum power of 125kW, a maximum torque of 335N·m, a maximum speed of 160km/h, and a NEDC comprehensive fuel consumption as low as 7.3L/100km. It is a medium-sized pickup truck.\r\n', 'https://www.youtube.com/watch?v=6ucUDKRtcaw', '/img/1.jpg', 'Pickup truck', 'new', 1),
(2, 'GWM Wingle 5', 'The GWM Wingle 5 is equipped with a 2.4L engine, with a maximum horsepower of 160Ps, maximum power of 118kW, and maximum torque of 230N·m. Its NEDC comprehensive fuel consumption is as low as 7.3L/100km, positioning it as a mid-size pickup truck.\r\n', 'https://www.youtube.com/watch?v=OGJzrkU-5GY', '/img/2.jpg', 'Pickup truck', 'new', 1),
(3, 'GWM Jingang Poer', 'GWM Jingang Poer is equipped with a 2.0T engine with a maximum power of 140kW, a maximum torque of 400N.m, a maximum speed of 170km/h, a NEDC comprehensive fuel consumption as low as 7.9L/100km, and a minimum turning radius of 5.95m. It is positioned as a medium-sized pickup truck.\r\n', 'https://www.youtube.com/watch?v=tyrbhiJsTTY', '/img/3.jpg', 'Pickup truck', 'new', 1),
(4, 'Tank 700 Hi4-T', 'Tank 700Tank 700 Hi4-T is equipped with a 3.0T plug-in hybrid powertrain and a front-mounted 9-speed automatic transmission. It has a maximum power of 385kw and a maximum torque of 800N·m. The top speed is 190km/h, and it can accelerate from 0 to 100km/h in just 5 seconds. It is positioned as a mid-sized SUV.\r\n', 'https://www.youtube.com/watch?v=MFj-Fb-Owp0', '/img/4.jpg', 'PHEV', 'new', 1),
(5, 'Tank 300', 'The Tank 300 is equipped with a 2.0T turbocharged engine and an 8-speed automatic transmission. It has a maximum power of 185kw and a maximum torque of 387N·m. The top speed can reach 175km/h, and the WLTC comprehensive fuel consumption is only 9.81L/100km. It is positioned as a compact SUV.', 'https://www.youtube.com/watch?v=FFKbV8JeC0E', '/img/5.jpg', 'SUV', 'new', 1),
(6, 'Tank 400 Hi4-T', 'The Tank 400 Hi4-T is powered by a 2.0T+9HAT powertrain, with a maximum combined power of 300kW and a maximum combined torque of 750N·m. With the assistance of advanced motors, it can accelerate from 0 to 100 km/h in under 7 seconds. With the Hi4-T parallel hybrid technology, the Tank 400 Hi4-T not only has sustainable powerful power output but also balances power performance and fuel efficiency. It is positioned as a mid-size SUV.', 'https://www.youtube.com/watch?v=9Ok_gcH84FI', '/img/6.jpg', 'PHEV', 'new', 1),
(7, 'Wey GaoShan PHEV', 'The Wey GaoShan PHEV is powered by a 1.5T DHT+P4 plug-in hybrid powertrain, with a total electric motor power of 265 kW and total torque of 532 N·m. It can reach a top speed of 170 km/h and has a WLTC pure electric range of up to 140 km. The acceleration from 0 to 100 km/h is only 5.7 seconds. It is positioned as an MPV.', 'https://www.youtube.com/watch?v=vJnDH6_m_Xg', '/img/7.jpg', 'PHEV', 'new', 1),
(8, 'GWM Shanhai Cannon', 'The GWM Shanhai Cannon is equipped with a 3.0T V6 twin-turbocharged engine and a 2.4T diesel engine, paired with a 9-speed automatic transmission. It has a maximum net power of 260 kW and a maximum net torque of 500 N·m. It is positioned as a medium-sized pickup truck.', 'https://www.youtube.com/watch?v=RFHyS66_3Xk', '/img/8.jpg', 'Pickup truck', 'new', 1),
(9, 'GWM Pao EV', 'The GWM Pao EV has a maximum power output of 150kW and a maximum torque of 300N·m. It belongs to the category of pure electric pickup trucks.', 'https://www.youtube.com/watch?v=NcFF7wT6EhI', '/img/9.jpg', 'Pickup truck', 'new', 1),
(10, 'Wey Macchiato DHT', 'The Wey Macchiato DHT-PHEV achieves a 0-100 km/h acceleration in just 7.2 seconds, with a maximum power output of 197kW and a maximum torque of 410N·m. It belongs to the category of compact SUVs.\r\n', 'https://www.youtube.com/watch?v=MANbRwRDrEw', '/img/10.jpg', 'PHEV', 'new', 1),
(11, 'Chery Fengyun A8', 'Chery Fengyun A8 is equipped with the fifth-generation ACTECO 1.5TGDI efficient hybrid engine, and its hybrid intelligent electric management system achieves long-range endurance. The pure electric range is 127km in CLTC mode and the overall range is over 1400km in WLTC mode. It has a maximum power output of 265kW and a maximum torque of 530N·m. It is positioned as a compact car.', 'https://www.youtube.com/watch?v=Ae78bcreCA0', '/img/11.ipg', 'PHEV', 'new', 2),
(12, 'EXEED TXL', 'The EXEED TXL, positioned as a mid-size SUV, features a 2.0TGDI+8AT golden power combination and 400T star power combination, allowing for a rapid acceleration of 8.8 seconds per 100 kilometers, with a maximum horsepower of 261Ps, maximum power of 192kW, and maximum torque of 400N·m.', 'https://www.youtube.com/watch?v=NK1weo5Z-o0', '/img/12.jpg', 'SUV', 'new', 2),
(13, 'EXEED LX C-DM', 'EXEED LX C-DM is equipped with the world\'s first 3-engine power + 3-speed DHT combination, providing a comprehensive range of 1000KM, higher power, and lower fuel consumption. It has a maximum horsepower of 156Ps, a maximum power of 240kW, and a maximum torque of 545N·m. It is marketed as a compact SUV.', 'https://www.youtube.com/watch?v=mpemOAoGGko', '/img/13.jpg', 'PHEV', 'new', 2),
(14, 'EXEED VX', 'The EXEED VX is equipped with a 2.0TGDI+8AT golden power combination, 400T star nuclear power combination, with a maximum horsepower of 261Ps, maximum power of 192kW, and maximum torque of 400N·m. It is positioned as a mid-size SUV.', 'https://www.youtube.com/watch?v=_lTCs-ctr9I', '/img/14.jpg', 'SUV', 'new', 2),
(15, 'EXEED RX', 'EXEED RX is equipped with a 2.0TGDI engine and a 7DCT wet dual-clutch transmission. With two golden power combinations to choose from, it has a maximum horsepower of 261Ps, maximum power of 192kW, and maximum torque of 400N·m. It is positioned as a medium-sized SUV.\r\n', 'https://www.youtube.com/watch?v=H4raHlAKKHU', '/img/15.jpg', 'SUV', 'new', 2),
(16, 'Chery iCAR 03', 'The Chery iCAR 03 is equipped with a dual-motor layout, with front and rear motors having maximum powers of 70 kW and 135 kW respectively. The maximum torque is 220 N·m, and it can reach a top speed of 150 km/h. It has a 0-100 km/h acceleration of just 6.5 seconds and a pure electric range of up to 472 km. It is positioned as a small SUV.', 'https://www.youtube.com/watch?v=mkHm4vI9WyQ', '/img/16.jpg', 'Compact SUV', 'new', 2),
(17, 'Chery Tiggo 8', 'The Chery Tiggo 8 is equipped with a Kunpeng 1.6TGDI engine, with a maximum power output of 145kW and peak torque of 290N·m. It belongs to the mid-size SUV.', 'https://www.youtube.com/watch?v=x1uwLyE_414', '/img/17.jpg', 'SUV', 'new', 2),
(18, 'Chery Tiggo 8 Plus', 'The Chery Tiggo 8 Plus is equipped with a 2.0 TGDI engine, with a maximum power output of 187kW and peak torque of 390N·m. It can accelerate from 0 to 100km/h in just 7.3 seconds. It belongs to the mid-size SUV.', 'https://www.youtube.com/watch?v=xHpnSZU0CS0', '/img/18.jpg', 'SUV', 'new', 2),
(19, 'Chery Tiggo 8 Pro', 'The Chery Tiggo 8 Pro is equipped with a 2.0 TGDI engine, with a maximum power output of 187kW and peak torque of 390N·m. It belongs to the mid-size SUV.', 'https://www.youtube.com/watch?v=wT0J1i63HXk', '/img/19.jpg', 'SUV', 'new', 2),
(20, 'Chery Tiggo7PlusPhev', 'The Chery Tiggo 7 Plus Phev is equipped with a 1.5T turbocharged engine, with a maximum power of 115kW and maximum torque of 230N·m. The total power of the electric motor is 125kW, with a total torque of 315N·m. It can accelerate from 0 to 100km/h in just 7 seconds. It belongs to the compact plug-in hybrid SUV.', 'https://www.youtube.com/watch?v=nesDIflemrs', '/img/20.jpg', 'PHEV', 'new', 2),
(21, 'Changan NEVO A05', 'The Changan NEVO A05 is a compact car that features a permanent magnet synchronous motor and a lithium iron phosphate battery. It has a acceleration time of 6.8 seconds per 100 kilometers, a maximum speed of 185 km/h, a maximum horsepower of 110 PS, and a peak torque of 330N·m.', 'https://www.youtube.com/watch?v=yz_zqtRPHiw', '/img/21.jpg', 'PHEV', 'new', 3),
(22, 'Changan NEVO Q05', 'Changan NEVO Q05 is equipped with a permanent magnet synchronous motor with a maximum torque of 330N.m and a maximum speed of 180km/h. It is matched with a ternary lithium battery and is positioned as a compact SUV.', 'https://www.youtube.com/watch?v=In9_rOVJ1gE', '/img/22.jpg', 'PHEV', 'new', 3),
(23, 'Changan X5 PLUS', 'The Changan X5 PLUS is equipped with the Blue Whale\'s new generation NE1.5T high-pressure direct injection engine and a 7-speed wet dual-clutch transmission. It has a maximum horsepower of 188Ps, a maximum power of 138kW, a maximum torque of 300N·m, a top speed of 205km/h, and a WLTC combined fuel consumption of only 6.45L/100km. It is positioned as a compact SUV.', 'https://www.youtube.com/watch?v=dN8musmNFcE', '/img/23.jpg', 'SUV', 'new', 3),
(24, 'Changan X7 PLUS', 'Changan X7 PLUS is equipped with the Blue Whale NE1.5T high-pressure direct injection engine and a 7-speed wet dual-clutch transmission. It has a maximum power of 138 kW, a top speed of 190 km/h, an acceleration of 0-100 km/h in 8.23 seconds, and a WLTC combined fuel consumption of only 7.3 L/100km. It is positioned as a compact SUV.', 'https://www.youtube.com/watch?v=s3Er2KMAF0Q', '/img/24.jpg', 'SUV', 'new', 3),
(25, 'Changan Hunter', 'The Changan Hunter is equipped with a Blue Whale 2.0T engine and an R100G generator. It has a maximum battery capacity of 31.18, maximum horsepower of 272ps, maximum power of 200kw, maximum torque of 470N·m, and can accelerate from 0 to 100km/h in 7.9 seconds. It is positioned as a medium-sized pickup truck.\r\n', 'https://www.youtube.com/watch?v=bAMswCRI-v0', '/img/25.jpg', 'Truck', 'new', 3),
(26, 'Changan Eado PLUS', 'The Changan Eado PLUS is equipped with either the Blue Whale NE1.4T engine or the Blue Core 1.6L engine, delivering a maximum torque of 260Nm and a maximum horsepower of 160PS. The vehicle type is sedan.', 'https://www.youtube.com/watch?v=bZX6nTIy9R0&t=1s', '/img/26.jpg', 'Sedan', 'new', 3),
(27, 'Changan Eado DT', 'The Changan Eado DT is equipped with the BlueCore 1.6L naturally aspirated engine, delivering a maximum horsepower of 125Ps, maximum power of 92kW, and maximum torque of 160N·m. The vehicle type is sedan.\r\n', 'https://www.youtube.com/watch?v=s17vII_tS90', '/img/27.jpg', 'Sedan', 'new', 3),
(28, 'Changan UNI-V', 'The Changan UNI-V offers 1.5T and 2.0T engines, equipped with an electric rear wing and a new front MacPherson and rear multi-link independent suspension system. The vehicle is classified as a sedan.', 'https://www.youtube.com/watch?v=5_GG33SmW3c', '/img/28.jpg', 'Sedan', 'new', 3),
(29, 'Changan CS35 PLUS', 'Changan CS35 PLUS equipped with the Blue Whale NE1.4T high-pressure direct injection engine and the Blue Whale 7-speed wet dual-clutch transmission, has a peak torque of 260Nm. It is positioned as SUV.', 'https://www.youtube.com/watch?v=kVcbzOGuP0o', '/img/29.jpg', 'SUV', 'new', 3),
(30, 'Changan CS55 PLUS', 'Changan CS55 PLUS equipped with the Blue Whale NE1.5T direct injection engine and the Blue Whale 7-speed wet dual-clutch transmission, has a fuel consumption of only 5.9L per 100 kilometers and a peak torque of up to 300N·m. It is positioned as an SUV.', 'https://www.youtube.com/watch?v=1GMbb-sdYKI', '/img/30.jpg', 'SUV', 'new', 3),
(31, 'Hyundai-Custo', 'Hyundai-Custo is equipped with a 2.0T engine and 8-speed gearbox, with a maximum speed of 210km/h, WLTC comprehensive fuel consumption of 7.4L/100km, maximum power of 173.6kW, and maximum torque of 353N·m. It is a medium and large MPV.', 'https://www.youtube.com/watch?v=E5P9oLaWQXo', '/img/31.jpg', 'MPV', 'new', 4),
(32, 'Hyundai-mistra', 'Hyundai-mistra is equipped with a 1.8T engine and CVT continuously variable transmission, with a maximum power of 125kW, a maximum torque of 253N·m, a maximum speed of 202km/h, and a WLTC comprehensive fuel consumption of 5.73L/100km. It is a medium-sized car.\r\n', 'https://www.youtube.com/watch?v=II_n9dkBXaM', '/img/32.jpg', 'Sedan', 'new', 4),
(33, 'Hyundai LAFESTA', 'Hyundai LAFESTA is equipped with a 1.5T-GDI high-power engine that delivers a strong power output of 200Ps. It has a maximum horsepower of 200Ps, a maximum power of 147kW, a maximum torque of 253N·m, and is positioned as a compact sedan.\r\n', 'https://www.youtube.com/watch?v=izTjHckwXDs', '/img/33.jpg', 'Sedan', 'new', 4),
(34, 'Hyundai Elantra', 'The Hyundai Elantra is equipped with a 1.5L naturally aspirated engine, with a maximum power of 84.5 kW and peak torque of 144 N·m. The vehicle is positioned as a compact sedan.', 'https://www.youtube.com/watch?v=5KmPv3NNHGE', '/img/34.jpg', 'Sedan', 'new', 4),
(35, 'Hyundai Tucson', 'The Hyundai Tucson is equipped with a 1.5T turbocharged engine, with a maximum power of 147 kW and peak torque of 253 N·m. The vehicle is positioned as a compact SUV.', 'https://www.youtube.com/watch?v=x_qdVWzDCXI', '/img/35.jpg', 'SUV', 'new', 4),
(36, 'Hyundai Sonata', 'The Hyundai Sonata is equipped with a 2.0T turbocharged engine, with a maximum power of 176.5 kW and peak torque of 353 N·m. The vehicle is positioned as a sedan.\r\n', 'https://www.youtube.com/watch?v=kmOeRTrfcvQ', '/img/36.jpg', 'Sedan', 'new', 4),
(37, 'Honda e:NS1', 'The Honda e:NS1 is equipped with a permanent magnet synchronous motor and matched with a ternary lithium battery. It has a CLTC range of 510km and an acceleration time of only 8.7 seconds per 100km. It has a maximum horsepower of 204Ps, a maximum power of 150kW, a maximum torque of 310N·m, and it is positioned as a small SUV.', 'https://www.youtube.com/watch?v=F7vO17PWW68', '/img/37.jpg', 'SUV', 'new', 5),
(38, 'Honda Accord', 'The Honda Accord is equipped with a 1.5T turbocharged engine, delivering a maximum power of 141kw and peak torque of 260Nm. It has a maximum horsepower of 192Ps and belongs to the midsize car category.', 'https://www.youtube.com/watch?v=Occc6HL8_SQ', '/img/38.jpg', 'Sedan', 'new', 5),
(39, 'Honda Civic', 'The Honda Civic is equipped with a 1.5T turbocharged engine, delivering a maximum power of 134kw and peak torque of 240Nm. It has a maximum horsepower of 182Ps and belongs to the compact car category.', 'https://www.youtube.com/watch?v=lOJeNgbTHoY', '/img/39.jpg', 'Sedan', 'new', 5),
(40, 'Honda Crider', 'The Honda Crider is equipped with a 1.0T turbocharged engine, delivering a maximum power of 90kw and peak torque of 173Nm. It has a maximum horsepower of 122Ps and belongs to the compact car category.', 'https://www.youtube.com/watch?v=4S-QeayQs30', '/img/40.jpg', 'Sedan', 'new', 5),
(41, 'Honda Fit', 'The Honda Fit is equipped with a 1.5L naturally aspirated engine, delivering a maximum power of 91kw and peak torque of 145Nm. It has a maximum horsepower of 124Ps and belongs to the compact car category.', 'https://www.youtube.com/watch?v=YeVz5azZoK0', '/img/41.jpg', 'Sedan', 'new', 5),
(42, 'Honda CR-V', 'The Honda CR-V is equipped with a 1.5T turbocharged engine, delivering a maximum power of 142kW/6000rpm and peak torque of 243N·m. It has a maximum horsepower of 193Ps and belongs to the compact SUV category.', 'https://www.youtube.com/watch?v=AsXbinJI_c4', '/img/42.jpg', 'SUV', 'new', 5),
(43, 'Toyota Allion', 'The Toyota Allion is equipped with a 2.0L intelligent hybrid engine and an E-CVT transmission, It has a maximum horsepower of 152Ps, maximum power of 144kW, maximum torque of 188N·m, and is positioned as a mid-size car.\r\n', 'https://www.youtube.com/watch?v=zQIjZZ3QXKo', '/img/43.jpg', 'Sedan', 'new', 6),
(44, 'Toyota bZ3', 'The Toyota bZ3 is equipped with a Fudi motor and a lithium iron phosphate blade battery with a capacity of 65.3kWh. It has a range of 616km and can accelerate from 0 to 100 km/h in just 7.8 seconds. It has a maximum horsepower of 245Ps, a maximum power of 180kW, and a maximum torque of 303N·m. It is classified as a compact sedan.', 'https://www.youtube.com/watch?v=Pz3W29P84FM', '/img/44.jpg', 'Sedan', 'new', 6),
(45, 'Toyota Avalon', 'The Toyota Avalon is equipped with a 2.5L naturally aspirated engine and comes with 4 adjustable driving modes. It has a maximum power of 152 kW and maximum torque of 244 Nm, paired with an 8-speed automatic transmission. It is positioned as a mid-size car.', 'https://www.youtube.com/watch?v=9b6frNGdKRY', '/img/45.jpg', 'Sedan', 'new', 6),
(46, 'Toyota Camry', 'The Toyota Camry is equipped with a 2.5L naturally aspirated engine, with a maximum power of 152 kW and peak torque of 244 Nm. It is positioned as a sedan.', 'https://www.youtube.com/watch?v=-8oKxHIfVxE', '/img/46.jpg', 'Sedan', 'new', 6),
(47, 'Toyota Corolla', 'The Toyota Corolla is equipped with a 1.5L naturally aspirated engine, with a maximum power of 89 kW and peak torque of 148 Nm. It is positioned as a sedan.', 'https://www.youtube.com/watch?v=vwAs5-n2fXw', '/img/47.jpg', 'Sedan', 'new', 6),
(48, 'Toyota RAV4', 'The Toyota RAV4 is equipped with a 2.0L naturally aspirated engine, with a maximum power of 126 kW and peak torque of 206 Nm. The vehicle is positioned as a compact SUV.', 'https://www.youtube.com/watch?v=4mYlz4zmfOk', '/img/48.jpg', 'SUV', 'new', 6),
(49, 'Toyota C-HR', 'The Toyota C-HR is equipped with a 2.0L naturally aspirated engine, with a maximum power of 126 kW and peak torque of 205 N·m. The vehicle is positioned as a compact SUV.', 'https://www.youtube.com/watch?v=B9BH4BhwiIU', '/img/49.jpg', 'SUV', 'new', 6),
(50, 'GWM Pao', 'This car was registered in January 2022 and has driven 11,300 kilometers so far. It has been used by the owner for commuting to work with low usage. It is in good condition and has been regularly maintained, with performance comparable to a new car.', NULL, '/img/old1.png', 'Pickup truck', 'old', 1),
(51, 'Beijing Hyundai ix35', 'This car was registered in January 2023 and has driven 6,200 kilometers so far. It has only been used for half a year and has been regularly maintained. It is in excellent condition, with performance that is comparable to a new car.', NULL, '/img/old2.png', 'SUV', 'old', 4),
(52, 'Changan CS75 PLUS', 'This car was registered in December 2021 and has driven 36,700 kilometers so far. It has been exclusively used by the owner and is in good condition. It is still within the warranty period and its performance is comparable to a new car.', NULL, '/img/old3.png', 'SUV', 'old', 3),
(53, 'Changan CS95', 'This car was registered in May 2020 and has driven 61,900 kilometers so far. It has been exclusively used by the owner, who has taken great care of it with regular maintenance and good driving habits.', NULL, '/img/old4.png', 'SUV', 'old', 3),
(54, 'Chery Tiggo 8 PRO', 'This car was registered in November 2022 and has driven 16,200 kilometers so far. It was only used by the original owner and regularly maintained. The interior and exterior are in excellent condition compared to a new car, making it a cost-effective option.', NULL, '/img/old5.png', 'SUV', 'old', 2);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `cus_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `Country/Region` varchar(255) DEFAULT NULL,
  `Mobile` varchar(10) DEFAULT NULL,
  `Message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cus_cars`
--

CREATE TABLE `cus_cars` (
  `registration_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `car_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `detail_information`
--

CREATE TABLE `detail_information` (
  `id` int(11) NOT NULL,
  `main_point` text,
  `detail` text,
  `infor_cars` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_information`
--

INSERT INTO `detail_information` (`id`, `main_point`, `detail`, `infor_cars`) VALUES
(1, 'Engine:', '2.0T', 1),
(2, 'Power(peak):', '125KW', 1),
(3, 'Engine Torque:', '335N·m', 1),
(4, 'Vehicle Type:', 'Pickup truck', 1),
(5, 'Engine:', '2.4T', 2),
(6, 'Power (peak):', '118KW', 2),
(7, 'Engine Torque:', '330N·m', 2),
(8, 'Vehicle Type:', 'Pickup truck', 2),
(9, 'Engine:', '2.0T', 3),
(10, 'Power(peak):', '140KW', 3),
(11, 'Engine Torque:', '400N·m', 3),
(12, 'Vehicle Type:', 'Pickup truck', 3),
(13, 'Pure electric Range:', '90Km', 4),
(14, 'Engine:', '3.0T', 4),
(15, 'Engine Power:', '265KW', 4),
(16, 'Engine Torque:', '560N·m', 4),
(17, 'Type:', 'PHEV Hi4-T', 4),
(18, 'Engine:', '2.0T', 5),
(19, 'Engine Power:', '185KW', 5),
(20, 'Engine Torque:', '387N·m', 5),
(21, 'Vehicle Type:', 'SUV', 5),
(22, 'Pure electric Range:', '105Km', 6),
(23, 'Engine:', '2.0T', 6),
(24, 'Engine Power:', '120KW', 6),
(25, 'Engine Torque:', '400N·m', 6),
(26, 'Type:', 'PHEV', 6),
(27, 'Pure electric Range:', '140Km', 7),
(28, 'Engine:', '1.5T', 7),
(29, 'Engine Power:', '135KW', 7),
(30, 'Engine Torque:', '300N·m', 7),
(31, 'Type:', 'PHEV', 7),
(32, 'Engine:', '3.0T', 8),
(33, 'Engine Power:', '260KW', 8),
(34, 'Engine Torque:', '500N·m', 8),
(35, 'Vehicle Type:', 'Pickup truck', 8),
(36, 'Range:', '405KM', 9),
(37, 'Power (peak):', '150KW', 9),
(38, 'Vehicle Type:', 'Pickup truck', 9),
(39, 'Pure electric Range:', '110Km', 10),
(40, 'Engine:', '1.5L', 10),
(41, 'Engine Power:', '197KW', 10),
(42, 'Engine Torque:', '410N', 10),
(43, 'Type:', 'PHEV', 10),
(44, 'Pure electric Range:', '106Km', 11),
(45, 'Engine:', '1.5T', 11),
(46, 'Engine Power:', '265kW', 11),
(47, 'Engine Torque:', '530N·m', 11),
(48, 'Type:', 'PHEV', 11),
(49, 'Engine:', '2.0T', 12),
(50, 'Engine Power:', '192KW', 12),
(51, 'Engine Torque:', '400N·m', 12),
(52, 'Vehicle Type:', 'SUV', 12),
(53, 'Pure electric Range:', '105Km', 13),
(54, 'Engine:', '1.5T', 13),
(55, 'Engine Power:', '240KW', 13),
(56, 'Engine Torque:', '545N·m', 13),
(57, 'Type:', 'PHEV', 13),
(58, 'Engine:', '2.0T', 14),
(59, 'Engine Power:', '192KW', 14),
(60, 'Engine Torque:', '400N·m', 14),
(61, 'Vehicle Type:', 'SUV', 14),
(62, 'Engine:', '2.0T', 15),
(63, 'Engine Power:', '192KW', 15),
(64, 'Engine Torque:', '400N·m', 15),
(65, 'Vehicle Type:', 'SUV', 15),
(66, 'Range:', '472KM', 16),
(67, 'Power (peak):', '135KW', 16),
(68, 'Vehicle Type:', 'Compact SUV', 16),
(69, 'CHARGE(10-80%):', '0.5 hours', 16),
(70, 'Engine:', '1.6T', 17),
(71, 'Engine Power:', '145KW', 17),
(72, 'Engine Torque:', '290N·m', 17),
(73, 'Vehicle Type:', 'SUV', 17),
(74, 'Engine:', '2.0T', 18),
(75, 'Engine Power:', '187KW', 18),
(76, 'Engine Torque:', '390N·m', 18),
(77, 'Vehicle Type:', 'SUV', 18),
(78, 'Engine:', '2.0T', 19),
(79, 'Engine Power:', '187KW', 19),
(80, 'Engine Torque:', '390N·m', 19),
(81, 'Vehicle Type:', 'SUV', 19),
(82, 'Pure electric Range:', '100km', 20),
(83, 'Engine:', '1.5T', 20),
(84, 'Engine Power:', '115KW', 20),
(85, 'Engine Torque:', '230N·m', 20),
(86, 'Type:', 'PHEV', 20),
(87, 'Pure electric Range:', '145Km', 21),
(88, 'Engine:', '1.5L', 21),
(89, 'Engine Power:', '81KW', 21),
(90, 'Engine Torque:', '330N·m', 21),
(91, 'Type:', 'PHEV', 21),
(92, 'Pure electric Range:', '125Km', 22),
(93, 'Engine:', '1.5L', 22),
(94, 'Engine Power:', '81KW', 22),
(95, 'Engine Torque:', '330N·m', 22),
(96, 'Type:', 'PHEV', 22),
(97, 'Engine:', '1.5T', 23),
(98, 'Engine Power:', '138KW', 23),
(99, 'Engine Torque:', '300N·m', 23),
(100, 'Vehicle Type:', 'SUV', 23),
(101, 'Engine:', '1.5T', 24),
(102, 'Engine Power:', '138KW', 24),
(103, 'Engine Torque:', '300N·m', 24),
(104, 'Vehicle Type:', 'SUV', 24),
(105, 'Pure electric range:', '133km', 25),
(106, 'Engine:', '2.0T', 25),
(107, 'Engine power:', '200KW', 25),
(108, 'Engine torque:', '470N·m', 25),
(109, 'Type:', 'Truck', 25),
(110, 'Engine:', '1.4T/1.6L', 26),
(111, 'Engine Power:', '118KW/94kw', 26),
(112, 'Engine Torque:', '260Nm/161Nm', 26),
(113, 'Vehicle Type:', 'Sedan', 26),
(114, 'Engine:', '1.6L', 27),
(115, 'Engine Power:', '92KW', 27),
(116, 'Engine Torque:', '160Nm', 27),
(117, 'Vehicle Type:', 'Sedan', 27),
(118, 'Engine:', '1.5T/2.0T', 28),
(119, 'Engine Power:', '138KW/171KW', 28),
(120, 'Engine Torque:', '300Nm/390Nm', 28),
(121, 'Vehicle Type:', 'Sedan', 28),
(122, 'Engine:', '1.4T', 29),
(123, 'Engine Power:', '118KW', 29),
(124, 'Engine Torque:', '260Nm', 29),
(125, 'Vehicle Type:', 'SUV', 29),
(126, 'Engine:', '1.5T', 30),
(127, 'Engine Power:', '138KW', 30),
(128, 'Engine Torque:', '300Nm', 30),
(129, 'Vehicle Type:', 'SUV', 30),
(130, 'Engine:', '2.0T', 31),
(131, 'Power (peak):', '173.6KW', 31),
(132, 'Engine Torque:', '353N·m', 31),
(133, 'Vehicle Type:', 'MPV', 31),
(134, 'Engine:', '1.8T', 32),
(135, 'Power (peak):', '125KW', 32),
(136, 'Engine Torque:', '253N·m', 32),
(137, 'Vehicle Type:', 'Sedan', 32),
(138, 'Engine:', '1.5T', 33),
(139, 'Engine Power:', '147KW', 33),
(140, 'Engine Torque:', '253N·m', 33),
(141, 'Vehicle Type:', 'Sedan', 33),
(142, 'Engine:', '1.5L', 34),
(143, 'Engine Power:', '84.5KW', 34),
(144, 'Engine Torque:', '144N·m', 34),
(145, 'Type:', 'Sedan', 34),
(146, 'Engine:', '1.5T', 35),
(147, 'Engine Power:', '147KW', 35),
(148, 'Engine Torque:', '253N·m', 35),
(149, 'Type:', 'SUV', 35),
(150, 'Engine:', '2.0T', 36),
(151, 'Engine Power:', '176.5KW', 36),
(152, 'Engine Torque:', '353N·m', 36),
(153, 'Type:', 'Sedan', 36),
(154, 'Range:', '510KM', 37),
(155, 'Power (peak):', '150KW', 37),
(156, 'Battery Capacity:', '68.8kWh', 37),
(157, 'Vehicle Type:', 'SUV', 37),
(158, 'CHARGE 30-80%:', '0.67 hours', 37),
(159, 'Engine:', '1.5T', 38),
(160, 'Engine Power:', '141KW', 38),
(161, 'Engine Torque:', '260N·m', 38),
(162, 'Vehicle Type:', 'Sedan', 38),
(163, 'Engine:', '1.5T', 39),
(164, 'Engine Power:', '134KW', 39),
(165, 'Engine Torque:', '240N·m', 39),
(166, 'Vehicle Type:', 'Sedan', 39),
(167, 'Engine:', '1.0T', 40),
(168, 'Engine Power:', '90KW', 40),
(169, 'Engine Torque:', '173N·m', 40),
(170, 'Vehicle Type:', 'Sedan', 40),
(171, 'Engine:', '1.5L', 41),
(172, 'Engine Power:', '91KW', 41),
(173, 'Engine Torque:', '145N·m', 41),
(174, 'Vehicle Type:', 'Sedan', 41),
(175, 'Engine:', '1.5T', 42),
(176, 'Engine Power:', '142KW', 42),
(177, 'Engine Torque:', '243N·m', 42),
(178, 'Vehicle Type:', 'SUV', 42),
(179, 'Engine:', '2.0L', 43),
(180, 'Engine Power:', '144KW', 43),
(181, 'Engine Torque:', '188N·m', 43),
(182, 'Vehicle Type:', 'Sedan', 43),
(183, 'Range:', '616KM', 44),
(184, 'Power (peak):', '180KW', 44),
(185, 'Battery Capacity:', '65.3kWh', 44),
(186, 'Vehicle Type:', 'Sedan', 44),
(187, 'CHARGE 30-80%:', '30minutes', 44),
(188, 'Engine:', '2.5L', 45),
(189, 'Engine Power:', '152KW', 45),
(190, 'Engine Torque:', '244N·m', 45),
(191, 'Type:', 'Sedan', 45),
(192, 'Engine:', '2.5L', 46),
(193, 'Engine Power:', '152KW', 46),
(194, 'Engine Torque:', '244N·m', 46),
(195, 'Type:', 'Sedan', 46),
(196, 'Engine:', '1.5L', 47),
(197, 'Engine Power:', '89KW', 47),
(198, 'Engine Torque:', '148N·m', 47),
(199, 'Type:', 'Sedan', 47),
(200, 'Engine:', '2.0L', 48),
(201, 'Engine Power:', '126KW', 48),
(202, 'Engine Torque:', '206N·m', 48),
(203, 'Type:', 'SUV', 48),
(204, 'Engine:', '2.0L', 49),
(205, 'Engine Power:', '126KW', 49),
(206, 'Engine Torque:', '206N·m', 49),
(207, 'Type:', 'SUV', 49),
(208, 'Mileage(KM):', '11300', 50),
(209, 'Year:', '2021', 50),
(210, 'Body Style:', 'Pickup truck', 50),
(211, 'Color:', 'Blue', 50),
(212, 'Mileage(KM):', '6200', 51),
(213, 'Year:', '2021', 51),
(214, 'Body Style:', 'SUV', 51),
(215, 'Color:', 'White', 51),
(216, 'Mileage(KM):', '36700', 52),
(217, 'Year:', '2022', 52),
(218, 'Body Style:', 'SUV', 52),
(219, 'Color:', 'Black', 52),
(220, 'Mileage(KM):', '61900', 53),
(221, 'Year:', '2019', 53),
(222, 'Body Style:', 'SUV', 53),
(223, 'Color:', 'White', 53),
(224, 'Mileage(KM):', '16200', 54),
(225, 'Year:', '2022', 54),
(226, 'Body Style:', 'SUV', 54),
(227, 'Color:', 'Blue', 54);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `Question` text,
  `answer` text,
  `faq_car` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `Question`, `answer`, `faq_car`) VALUES
(1, 'What is the loading capacity of GWM Wingle 7?', 'The cargo box of GWM Wingle 7 is 1680mm*1460mm*480mm in length, width and height, with a maximum load capacity of 805kg. It is equipped with a non-load-bearing body, double-wishbone independent suspension and overall bridge-type non-independent suspension, and the overall load-bearing capacity is super strong.', 1),
(2, 'What is the fuel economy of GWM Wingle 7?', 'GWM Wingle 7 has higher fuel economy. The GW4D20M diesel engine has a comprehensive fuel consumption of only 7.3L per 100 kilometers. The GW4C20B gasoline engine has a comprehensive fuel consumption of only 8.6L per 100 kilometers.', 1),
(3, 'What are the interior configurations of the GWM Wingle 5?', 'The interior features black and gray colors, Bluetooth control steering wheel with audio buttons, 12V auxiliary power supply, cigarette lighter, manually adjustable leather seats, manual air conditioning, radio+USB, and two low speakers. The configuration is quite complete, meeting daily travel needs.', 2),
(4, 'What are the security configurations of GWM Jingang Poer?', 'It has reversing radar, electronic handbrake + automatic parking, dual airbags for the main and passenger, ABS + EBD, ESP body stability system, TCS traction control, uphill assist, brake assist, collision fuel cutoff, secondary collision mitigation, child seat interface wait.', 3),
(5, 'What are the advantages of the 8AT transmission equipped with GWM Jingang Poer?\r\n', 'The ZF 8AT transmission used is one of the top ten transmissions in the world. It has efficient response, smooth shifting, and comfortable driving. It uses high-performance lubricants, is maintenance-free, and is economical and worry-free.', 3),
(6, 'How deep can the Tank 700 Hi4-T wade through water?', 'The Tank 700 Hi4-T has top-level off-road capabilities, with a maximum approach angle of 37.8°, a maximum departure angle of 37.6°, and a maximum wading depth of 970mm.', 4),
(7, 'What unique design features do the seats of the Tank 300 have?', 'The seats of the Tank 300 are designed to meet the requirements of national, European, and American standards and regulations. They are ergonomically designed, with the driver\'s seat featuring 8-way power adjustment and 4-way power-adjustable backrest. The front seats are equipped with lumbar massage, ventilation, and heating functions for the driver, while the rear seats have a two-position adjustable backrest. These features provide a safe and comfortable driving and riding experience for occupants.', 5),
(8, 'How is the storage space in the Tank 400 Hi4-T?', 'The vehicle has multiple storage spaces for flexible and convenient storage. It has a large capacity luggage compartment of 566L, and with the second-row seats folded flat, it can meet various space needs.', 6),
(9, 'What is the driving experience like in the front seats of the Tank 400 Hi4-T?', 'The front seats are wrapped in Nappa perforated leather, providing a soft and delicate touch. The driver\'s seat supports electric 6-way seat adjustment and 8-point massage functions. The front seats also support seat ventilation/heating, providing a comfortable driving experience for passengers.', 6),
(10, 'How is the available space in the Wey GaoShan PHEV?', 'The Wey GaoShan PHEV offers an actual usable space ratio of 61.1%. The long wheelbase creates a spacious first-class cabin. The flat floor design, with a length of 1845mm in the second and third rows, allows for a height of 1277mm, enabling a child with a height of 1.2 meters to stand upright in the vehicle. The innovative 4/6 split Tip-Up folding seats provide flexible seating arrangements. Combined with the shared rails and Tip-Up function, the luggage compartment can be expanded from 233L to 1725L, accommodating baby strollers or serving as a mobile wardrobe.', 7),
(11, 'What driving assistance systems are available in the GWM Shanhai Cannon?', 'The GWM Shanhai Cannon offers the HWA High-Speed Navigation Assist (HWA-Highway Assist) driving assistance system, which includes ACC adaptive cruise control, automatic parking, lane-keeping, collision warning, front and rear DVR dashcam, and 360-degree HD surround view functions, providing drivers with comprehensive safety assurance.', 8),
(12, NULL, NULL, 9),
(13, NULL, NULL, 10),
(14, 'How is the fuel consumption of Chery Fengyun A8?', 'The fifth-generation ACTECO 1.5TGDI efficient hybrid engine of Chery Fengyun A8 achieves a thermal efficiency of 44.5% and has a WLTC fuel consumption of 4.2L per 100km, demonstrating excellent fuel efficiency and energy-saving performance.', 11),
(15, 'How comfortable is the seating in Chery Fengyun A8?', 'During the journey, Chery Fengyun A8\'s 2790mm wheelbase and 907mm legroom, which are the longest in its class, provide a spacious and comfortable experience comparable to a B-class car. Even with five occupants and full luggage, there is no sense of crowding.', 11),
(16, 'How safe is the EXEED TXL?', 'The EXEED TXL has an integrated high-strength body, adopting a cage-type body structure with ultra-high-strength steel reaching a tensile strength of 1500 megapascals, capable of withstanding a top pressure load of 10 tons, providing powerful protection for the driver and passengers.', 12),
(17, 'How is the interior space of the EXEED TXL?', 'The EXEED TXL has an extraordinary 2800mm long wheelbase, providing ample headroom, legroom, and seating space, allowing you and your family to stretch your legs freely and enjoy freedom and relaxation.', 12),
(18, 'Does the EXEED LX C-DM support fast charging?', 'Yes, the EXEED LX C-DM supports high-power fast charging of 29kW, allowing for 30%-80% charging in just 25 minutes.', 13),
(19, 'How is the interior space of the EXEED LX C-DM?', 'As a compact SUV with a wheelbase of 2670mm, the EXEED LX C-DM offers decent rear passenger space. The rear seats are equipped with three adjustable headrests and a central armrest with cup holders. The seatbacks support a 4/6 folding ratio.', 13),
(20, 'How is the storage space of the EXEED VX?', 'The EXEED VX has a large and abundant storage space, with a 92mm oversized cup holder, built-in storage box and cup holders in the second row, electric folding of the third-row seats, and smart electric control operation for the tailgate.', 14),
(21, 'What unique advantages does EXEED RX have in terms of design?', 'EXEED RX draws inspiration from the Atlantis Light Aesthetics design language, with a wide and low stance, showcasing a dynamic and stylish posture with enhanced stability. The fighter jet-inspired coupe roof design reduces the drag coefficient to as low as 0.32. The \"X\" shaped starship-like daytime running lights exude a futuristic and sci-fi appeal.', 15),
(22, 'What are the advantages of the Chery iCAR 03\'s driving assistance system?', 'The Chery iCAR 03 is equipped with an L2++ level intelligent driving assistance system that provides 16 active safety features. With the support of the AEB active braking function, the system can apply vehicle brakes promptly when it detects a crisis, minimizing the level of danger. It also has DOW door-opening warning, which uses front and rear radars to detect pedestrians and vehicles on the vehicle\'s side. If there is any obstruction, the doors will remain locked until the vehicle and pedestrians pass, ensuring safety.', 16),
(23, 'How is the storage space of the Tiggo 8?', 'The Tiggo 8 has a conventional cargo volume of 890L in the trunk, which can be expanded to 1930 liters when the seats are folded flat. The storage space is ample.', 17),
(24, 'What materials are used for the body of the Tiggo 8?\r\n', 'The Tiggo 8 adopts ultra-high-strength steel from the T1X platform, with excellent stiffness performance (21000Nm/°). The third-generation high-strength rolled steel integrated cage body is created through rigorous body structure design and stringent body material requirements, with high-strength steel accounting for 65% of the weight.', 17),
(25, 'How is the storage space of the Tiggo 8 Plus?', 'The Tiggo 8 Plus offers up to 44 storage compartments and a maximum cargo capacity of 889-1930 liters in the trunk.', 18),
(26, 'How is the storage space of the Tiggo 8 Pro?', 'The rear seats of the Tiggo 8 Pro can slide freely by 260mm and can be folded flat. When folded down, the cargo capacity of the trunk can reach an impressive 1930L, making it easy to accommodate large luggage or camping equipment.', 19),
(27, 'How is the hybrid technology of the Tiggo 7 Plus New Energy?', 'Chery\'s DHT hybrid system is the world\'s first, combining an engine with dual electric motors for a total of three \"engines.\" The dual motor drive is also the industry\'s only design, which enhances power output and improves driving control. Additionally, the DHT system has 3 gears, offering lower fuel consumption and higher efficiency. With three power sources and multiple gear shifting options, the Chery DHT system also introduces a 9-mode 11-speed design, providing various power combinations for different driving scenarios. Furthermore, the system has been optimized for performance in different scenarios.', 20),
(28, 'Is the interior space of Changan NEVO A05 large?', 'The 2765mm ultra-long wheelbase allows each occupant to lie flat freely. There are 24 storage spaces in the entire vehicle, which can meet the storage needs of different types of items in multiple scenarios, making travel storage more convenient and secure.', 21),
(29, 'Are the seats of Changan NEVO A05 comfortable?', 'The high-style zero-pressure sofa seat fully fits the curves of the human body from the hips to the waist to the shoulders, giving it a wrapping feel and a better fit.', 21),
(30, 'How about the adaptive cruise system of Changan NEVO A05?', 'The IACC integrated adaptive cruise system can help you control speed and direction, automatically accelerate and decelerate in a fixed lane, follow a car with a car, set the speed without a car, and achieve advanced intelligent driving.', 21),
(31, 'What is the actual battery life of Changan NEVO Q05?', 'CLTC has a pure electric range of 125km, which is equivalent to WLTC\'s comprehensive fuel consumption of only 1.33L per 100 kilometers, and costs less than 10 cents per kilometer. It does not require fuel for a week\'s commuting. The key is that it also supports fast charging.', 22),
(32, 'How is the driving stability of Changan NEVO Q05?', 'The chassis adopts front MacPherson strut and rear multi-link four-wheel independent suspension, which is professionally adjusted for a variety of road conditions. It is stable at high speeds and has precise cornering steering. Smooth without bumps, providing the best comfortable driving experience in all road conditions.', 22),
(33, 'What are the available body colors for the Changan X5 PLUS?', 'The Changan X5 PLUS is available in six body colors: Interstellar Gray, Shining Silver Gray, Sharp White, Cosmic Blue, Brilliant Black, and Dynamic Red.', 23),
(34, 'What are the unique highlights of the passenger seats in Changan X7 PLUS?', 'The second-row seats of Changan X7 PLUS are equipped with a one-touch folding mechanism. By unlocking and sliding the seat buckle forward, the seats can automatically fold, allowing easy access to the third row.', 24),
(35, 'How is the comfort of the Changan Hunter?', 'The front seats of the Changan Hunter are ergonomically designed, providing excellent support and comfort, and can be adjusted in 6 directions. The overall filling of the rear seats is also excellent.', 25),
(36, 'Can the Changan Hunter go off-road?', 'The Changan Hunter is equipped with a front axle lock, rear axle lock, and central energy lock, which can efficiently limit the slip of the wheels and distribute torque output to each wheel in real-time. With precise control of the electronic four-wheel drive torque distribution, even beginners can easily go off-road.', 25),
(37, 'What about the space of the Changan Eado PLUS?', 'In terms of seating space, the Eado PLUS has a 2700mm extended wheelbase, 69mm rear knee space, and a 500L spacious trunk space. It also allows for a 4/6 folding of the rear seats, further expanding the trunk space to 1000L, with a length of up to 1.8m. The vehicle offers a total of 32 diverse storage spaces.', 26),
(38, NULL, NULL, 27),
(39, NULL, NULL, 28),
(40, 'How is the interior design of the Changan CS35 PLUS?', 'The interior of the Changan CS35 PLUS adopts a driver-centric wrap-around space capsule design, which not only enriches the styling layers but also reflects a sense of technology and fashion with features such as a cannon-style combination instrument panel and silver central control.', 29),
(41, 'How is the safety of the Changan CS55 PLUS?', 'The entire vehicle utilizes ultra-high-strength steel with a tensile strength of up to 1500Mpa, equivalent to a force of 15000 kilograms per square centimeter. It comes standard with 6 airbags to fully protect the occupants. Equipped with Bosch airbag sensors, positioned at the front sides, left and right sides, and central channel of the vehicle, it provides comprehensive collision signal analysis and ensures maximum protection with a response time of 0.03 seconds.', 30),
(42, 'How is the interior space of Hyundai-Custo?', 'The trunk has a large loading capacity, and the three rows have a variety of storage spaces. The entire vehicle has multiple hidden storage spaces. The rear seats can be folded or folded flat, which can expand larger storage space to meet the needs of the whole family. Travel needs.', 31),
(43, 'Are the Hyundai-Custo seats comfortable?', 'The second-row seats are designed based on the weightless principle. They can reach the zero-gravity state with one click. The three-speed modes of standard, leisure, and sleep can be freely adjusted. They also have a 10-way electric adjustment function to realize personalized', 31),
(44, 'Is the Hyundai-mistra\'s interior spacious?', 'Adopting a 2+3 seat layout, the seats have multiple adjustment functions, and the legroom and headroom are very spacious. In addition, there are abundant storage spaces designed, including a central armrest box, front and rear door panel storage compartments, and larger storage compartments. The trunk space provides a good riding experience and storage space.', 32),
(45, 'How is the ride comfort of the Hyundai-mistra?', 'The seats are made of high-grade materials and have multiple adjustment functions to provide a comfortable riding experience. It is also equipped with functions such as dual-zone automatic air conditioning, rear air vents, seat heating and ventilation, providing a comfortable riding environment.', 32),
(46, 'Is it convenient to charge a smartphone in Hyundai LAFESTA?', 'Hyundai LAFESTA has the feature of wireless smartphone charging, providing great convenience for daily use while driving.', 33),
(47, 'How is the engine of Hyundai LAFESTA?', 'Hyundai LAFESTA is equipped with a 1.5T-GDI high-power engine. It has the highest horsepower of 200Ps in its class and features CVVD intake continuous variable valve opening period control device and ITM integrated flow control valve, effectively achieving performance/fuel efficiency.', 33),
(48, 'How many airbags does the Hyundai Elantra have and where are they located?', 'The Hyundai Elantra is equipped with a total of six airbags, including the driver seat airbag, front passenger airbag, front side airbags, and side curtain airbags for the first row.', 34),
(49, 'How is the comfort of the Hyundai Elantra?', 'The Elantra\'s driver seat has added lumbar support, and the rear seats have added heating function. The interior adopts soft materials for further comfort upgrades. The center console adds physical buttons for easy operation, and both the front and rear rows have added 27W Type C interfaces. The intelligent health air conditioning system automatically optimizes the air quality in the vehicle, achieving a healthier upgrade.', 34),
(50, 'How is the suspension of the Hyundai Tucson?', 'The Tucson adopts independent suspension for both the front and rear, which reduces unsprung weight and provides good stability in wheel direction. It offers high levels of comfort and stability.', 35),
(51, 'Can the rear seats of the Hyundai Tucson be folded down?', 'Yes, they can be folded down.', 35),
(52, 'What is the fuel tank capacity of the Hyundai Sonata?', 'The fuel tank capacity is 70 liters.', 36),
(53, 'What safety features does the Hyundai Sonata have?', 'The Hyundai Sonata has a spacious trunk capacity of 523 liters, which can fully meet passengers\' business travel and daily usage needs.', 36),
(54, 'How should the battery of the Honda e:NS1 be maintained?', 'In terms of maintenance, the Honda e:NS1 is relatively simple. As an electric vehicle, it does not require regular oil and filter changes like a gasoline-powered car. You only need to regularly check the status of the battery and keep it in good working condition.', 37),
(55, 'Is the Honda e:NS1 a practical vehicle?', 'The Honda e:NS1 has a stylish exterior design, a high-quality interior, strong power performance, complete safety features, and high intelligence. It is a very practical electric vehicle.', 37),
(56, 'How is the safety of the Honda Accord?', 'The Honda Sensing safety suite provides proactive safety protection for drivers, including features such as adaptive cruise control, collision mitigation braking system, and more. These technologies enhance safety and convenience while driving.', 38),
(57, 'What entertainment features does the Honda Accord have?', 'The Accord features advanced infotainment systems that support features like Apple CarPlay and Android Auto, allowing drivers to enjoy convenient multimedia experiences while on the road.', 38),
(58, 'How is the storage space of the Honda Civic?', 'The Civic has a trunk capacity of 440 liters. The space utilization is very efficient. The design of the trunk is practical, with a regular shape and a wide opening width of 110cm, making it more convenient to load and unload large luggage.', 39),
(59, 'What are the driving assistance features of the Honda Crider?', 'The Crider is equipped with L2 level intelligent driving assistance system, as well as additional features such as leather steering wheel, LED daytime running lights, automatic headlights, LED fog lights, electrically folding exterior mirrors, and automatic air conditioning.', 40),
(60, 'What are the features of the Honda Fit?', 'The Honda Fit is equipped with a full LCD instrument panel that supports customizable functions, providing powerful, flexible, and easy connectivity with networks and peripherals for a larger display effect. Brake force distribution (EBD/CBC, etc.) ensures smooth and safe vehicle operation, while brake assist (BA/EBA/BAS, etc.) achieves optimal braking performance.', 41),
(61, 'What is the fuel consumption of the Honda CR-V?', 'The official fuel consumption of the CR-V is only 6.4L/100 km, based on testing at a speed of 45 km/h, combining actual fuel consumption in urban and suburban areas at 6.35L/100 km.', 42),
(62, 'What safety features does the Honda CR-V have?', 'The CR-V is equipped with safety features including driver and passenger airbags, front side airbags, tire pressure monitoring, ESP electronic stability control system, lane departure warning, lane-keeping assist, automatic braking, and fatigue driving reminder.', 42),
(63, 'What is the appearance of the Toyota Allion like?', 'The overall design of the Toyota Allion follows Toyota\'s latest family design style, giving a more atmospheric visual impression. It is available in 7 body colors, including Pearl White, Silver Charm, Super White, Platinum Bronze, Paris Red, Gem Blue, and Pearl Black.', 43),
(64, 'How is the driving experience of the Toyota Allion?', 'In daily driving, the engine\'s response in the mid to front power range is very active, and the throttle feedback is also sensitive. When driving in urban areas, it provides a more relaxed acceleration experience, and the linear output of the naturally aspirated engine improves the continuity of the acceleration process.', 43),
(65, 'Does the Toyota bZ3 support fast charging?', 'The Toyota bZ3 supports fast charging, with a charging time of only 27 minutes from 30% to 80%. It can also be discharged through the slow charging port, with a maximum power of 4kW.', 44),
(66, 'How is the sound insulation of the Toyota bZ3?', 'As an electric vehicle, the Toyota bZ3 does not have the noise of an engine, and the cabin is very quiet. It provides a comfortable environment inside the vehicle, even when driving on city roads.', 44),
(67, 'How is the storage space of the Toyota Avalon?', 'The trunk capacity is over 500 liters and relatively flat, providing strong loading capacity.', 45),
(68, 'Can the rear seats of the Toyota Camry be folded down?', 'Yes, they can be folded down.', 46),
(69, 'What is the fuel consumption of the Toyota Camry?', 'The Camry has a combined fuel consumption of 6.07L per 100 km. It is equipped with an efficient and fuel-saving engine and an improved powertrain system, delivering excellent fuel efficiency. Additionally, the Camry also offers Toyota\'s hybrid powertrain system, providing even lower fuel consumption and emissions.', 46),
(70, 'How is the driving experience of the Toyota Corolla?', 'In terms of handling and ride comfort, the Corolla performs quite well. For example, the Direct Shift CVT transmission matched with the Corolla eliminates the jerky feeling of gear shifting, resulting in a smoother driving experience.', 47),
(71, 'How is the safety of the Toyota Corolla?', 'The Corolla\'s infotainment system includes built-in satellite navigation, road rescue call, voice recognition control system, and other functions. The Corolla comes standard with knee airbags, passenger cushion airbags, lane departure warning system, lane keep assist system, lane centering assist, forward collision warning, and other safety features.', 47),
(72, 'How is the storage space of the Toyota RAV4?', 'The dimensions of the Toyota RAV4\'s cargo area are 1885, 1495, and 1240mm. The total capacity is approximately 1000 liters. If the rear seats are folded down, a larger storage space can be obtained. Therefore, objectively speaking, the Toyota RAV4 has a spacious cargo area.', 48),
(73, 'How is the safety of the Toyota RAV4?', 'The Toyota RAV4 is equipped with seven safety airbags, full-speed range adaptive cruise control, lane departure warning, lane keep assist, active braking, full LED headlights, and more.', 48),
(74, 'How is the storage space of the Toyota C-HR?', 'The maximum load capacity can reach 942 liters. When the rear seats of the Toyota C-HR are folded down, it can also form a sizable flat floor, providing more possibilities for expanding the interior space and enhancing practicality. In addition, the rear seats also support a 40:60 folding ratio, further increasing the storage capacity.', 49),
(75, 'What are the tire specifications of the Toyota C-HR?', 'The front and rear tires are both 215/60 R17.', 49);

-- --------------------------------------------------------

--
-- Table structure for table `highlighted_features`
--

CREATE TABLE `highlighted_features` (
  `id` int(11) NOT NULL,
  `main` text,
  `detail_feat` text,
  `highlight_cars` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `highlighted_features`
--

INSERT INTO `highlighted_features` (`id`, `main`, `detail_feat`, `highlight_cars`) VALUES
(1, 'High-end SUV-level driving experience:', 'GWM Wingle 7 adopts a high-end SUV-like interior design, with a large floating screen, library-level quiet space, wrap-around cockpit, interior soft leather covering, and E0-level environmentally friendly materials, providing a luxurious driving experience.', 1),
(2, 'Green kinetic energy black technology:', 'GWM Wingle 7 is equipped with a 2.0T high-efficiency engine, which is powerful, reliable and durable. The 6MT remote-operated transmission has better vibration absorption, vibration filtering and noise reduction effects, effectively reducing the front vibration of the vehicle during use, making gear shifting smooth and easy to control.', 1),
(3, 'Carefully selected quality:', 'The suspension of GWM Wingle 7 has been tested for 5,000 kilometers, the leaf springs have been tested 200,000 times, the frame has been tested for 720 hours of salt spray, and more than 10 key parts of the body have been cavity wax injected. There is a set of strict manufacturing standards to create a leading Class pickup truck.', 1),
(4, 'Stylish and comfortable:', 'The GWM Wingle 5 features a new European-style exterior design, equipped with electrically adjustable headlights, halogen front fog lights, vehicle roll bars, intelligent instrument panel, car phone, MP5, and supports mobile phone connectivity. It has a fashionable appearance and comfortable interior.', 2),
(5, 'Durable:', 'The GWM Wingle 5 adopts a variable cross-section trapezoidal frame and uses pickled sheet metal, which has undergone a 720h salt spray test for excellent corrosion resistance. It uses a 3+2 steel plate spring optimal structure, which has undergone long-term fatigue durability tests and has reliable quality.', 2),
(6, 'Efficient load-bearing capacity:', 'The GWM Wingle 5 offers two golden powertrain combinations: diesel+GW4D20M engine+6MT transmission and gasoline+4K22D4M engine. It combines power and fuel efficiency. The cargo bed is available in three large sizes: 1.38m/1.68m/1.82m, with standard anti-roll bars and cargo treasure box for stronger wear resistance.', 2),
(7, 'Safe and durable:', 'GWM Jingang Poer adopts a cage body + high-strength large-section ladder frame, which has stronger load-bearing capacity and higher safety. The entire vehicle has undergone 1,728 hours of enhanced corrosion testing and 1,000 hours of salt spray testing, making it durable.\r\n', 3),
(8, 'Economical and practical:', 'The GWM Jingang Poer 1.82m flat long box model has no bulges in the cargo box. Square boxes and drums can be placed randomly. The efficiency is increased by 50%. Three transportation trips become two. The more you pull, the more you earn.', 3),
(9, 'Smart and easy to use:', 'GWM Jingang Poer adopts a double suspension design, equipped with a 3.5-inch color screen digital display instrument and a 10.25-inch central control large screen with a resolution of 1920*720, making it more convenient to watch, smoother to operate, rich in entertainment and driving functions, and full of technology.', 3),
(10, 'Broome Volcano Eye Laser Headlights:', 'The world\'s first rotating opening and closing structure, LED laser headlight module with 260 LED beads, creating a unique and spectacular volcanic eruption-like feeling.', 4),
(11, 'Super wide-angle Fiber Cloud Seats:', 'Front and rear seats come standard with ventilation, heating, and massage functions, along with wing-shaped headrests. The rear seats support 141° stepless electric adjustment, with 15mm soft cushion layer in the front row and 20mm in the rear row, providing twice the comfort compared to the industry average, as comfortable as sitting on a fiber cloud.', 4),
(12, 'Multi-mode All-Terrain System, Adapt to All Scenarios:', 'The Tank 700 Hi4-T has 12 driving modes, including standard, economy, sport, snow, mud, sand, rocks, water, 4H, 4L, automatic, and expert mode, providing freedom and convenience for various travel scenarios.', 4),
(13, 'Integrated OPW Side Curtain Airbags:', 'The Tank 300 features integrated side curtain airbags manufactured using OPW technology, which provides superior performance compared to traditional sewn airbags. The one-piece design ensures better pressure retention, offering occupants extended protection time. In addition to meeting conventional side collision scenarios, it also enhances passenger protection in rollover accidents.', 5),
(14, 'Vehicle Remote Control:', 'The Tank 300 offers remote control functionalities through an app. Users can remotely start the vehicle, locate it, receive alerts for abnormal conditions, remotely close windows, control seat heating, and use the remote vehicle finder feature.', 5),
(15, 'Ultra-Quiet NVH Performance:', 'The Tank 300 incorporates various noise reduction measures to ensure a quiet cabin environment. It utilizes double-layered acoustic glass for the front windshield, engine compartment sealing, multi-layer sound insulation cotton for the engine, and double and triple-sealed rubber strips for the front and rear doors, respectively. These measures significantly enhance the overall noise reduction inside the vehicle.', 5),
(16, 'Agile and Flexible, Enjoyable Off-Roading:', 'Equipped with a new generation intelligent four-wheel drive system, with a maximum of three differential locks, and intelligent all-terrain system with 12 driving modes, as well as intelligent off-road control configurations such as Tank U-turn and creep mode, allowing for a smooth off-roading experience.', 6),
(17, 'Cutting-Edge Technology Screen, Focused Driving:', 'Equipped with a 12.3-inch LCD instrument panel, a 16.2-inch central control LCD screen, and a HUD head-up display, all information is easily accessible. It is also equipped with an ultra-wide-angle streaming rearview mirror, with no blind spots in the rear view and a clearer night driving experience.', 6),
(18, 'Careful Protection, Multiple Safety Measures:', 'The battery cells and battery box are protected by a new type of super thermal insulation material, which can withstand high temperatures of up to 1200℃. The battery pack is fixed on the inside of the crossbeam and the upper part of the vehicle floor, ensuring protection against sulfur, impact, and water, guaranteeing the safety of the battery and the vehicle.', 6),
(19, 'Fully Automated Fusion Parking + Remote Parking:', 'Supports horizontal, vertical, and diagonal parking, as well as horizontal parking on slopes with an angle of less than 10%. It can also remotely park the vehicle in narrow spaces, ensuring the safety of the whole family.', 7),
(20, 'Voice Recognition Communication:', 'Developed a voice recognition system with 6 audio zones in the vehicle. Each seat has its own \"Xiao Wei\" assistant. With the in-car intercom mode and third-row user call buttons, it allows for easy and natural conversation between the front and rear rows with just one touch, providing a comfortable experience for all occupants.', 7),
(21, 'DMS System + OMS System:', 'The DMS system monitors the driver\'s fatigue and distraction in real-time during the driving process, providing different levels of fatigue detection and prompts. The OMS system monitors the fatigue level and emotional state of the passengers, and links with the voice, air conditioning, seats, and fragrance systems to provide personalized and emotional riding experience for the rear passengers.', 7),
(22, 'Ultra-High Strength Body:', 'The new cage-style body provides higher bending and torsional rigidity, effectively dispersing collision pressure and creating the most secure protection for a worry-free journey.', 8),
(23, 'Super Intelligent and User-Friendly Design:', 'The entire range is equipped with voice recognition, allowing for continuous reception and execution of multiple commands, freeing up hands and making driving more convenient. By binding to an exclusive account, it provides a more considerate and safer driving experience.', 8),
(24, 'Long Range:', 'The GWM Pao EV boasts an impressive range on a single charge, making it suitable for longer journeys without frequent recharging.', 9),
(25, 'Advanced Safety Features:', 'Equipped with modern safety technologies such as adaptive cruise control, lane-keeping assist, and autonomous emergency braking, ensuring enhanced safety for both drivers and passengers.', 9),
(26, 'Luxurious Interior:', 'The interior of the GWM Pao EV is designed with premium materials and offers a spacious cabin, providing comfort and a luxurious driving experience.', 9),
(27, 'Dual Hybrid Technology (DHT):', 'The Wey Macchiato DHT-PHEV features a sophisticated dual hybrid system that combines a gasoline engine with electric motors. This setup provides flexibility in driving modes, allowing for efficient electric-only driving, hybrid operation, or pure gasoline power as needed.', 10),
(28, 'Premium Interior and Comfort:', 'Known for its luxurious interior, the Wey Macchiato DHT-PHEV offers high-quality materials, ergonomic design, and advanced comfort features. This includes premium leather upholstery, spacious seating arrangements, and modern infotainment systems.\r\n\r\n', 10),
(29, 'Advanced Safety and Assistance Systems:', 'Equipped with advanced safety technologies such as adaptive cruise control, lane-keeping assist, collision avoidance systems, and a comprehensive array of sensors for enhanced situational awareness and driver assistance.', 10),
(30, 'Global five-star standard safety design:', 'Chery Fengyun A8 uses 80% high-strength steel and 20.6% hot-formed steel, becoming a mobile safety fortress for family travel. It is also equipped with a 360° surround-type 10 airbag protection system, providing collision protection from different angles and comprehensive protection for the family.', 11),
(31, 'Enjoy intelligent travel:', 'Chery Fengyun A8 is equipped with the Qualcomm Snapdragon 8155 intelligent chip, with a 2-second boot time for the vehicle system and smooth operation. It is also equipped with a 24.6-inch suspended dual-screen + Lion5.0 A-tech smart cockpit, providing an intelligent interactive experience and enjoyable travel.', 11),
(32, 'Good braking performance for a confident driving experience:', 'Chery Fengyun A8 has a reliable braking system with excellent braking performance, ensuring driving safety. In addition, it is equipped with a range of advanced driver assistance systems such as the vehicle stability control system and traction control system, further enhancing the vehicle\'s handling performance.', 11),
(33, 'More comfortable ride:', 'The EXEED TXL has a driver\'s seat memory function, electrically adjustable seats, and heated front seats. It can remember the most commonly used driving posture of the driver and passengers, and automatically adjust the seats in 6 directions and the lumbar support in 2 directions based on the memory through facial recognition, allowing for a more comfortable ride.', 12),
(34, 'Efficient dual-clutch transmission:', 'The EXEED TXL\'s clutch is jointly developed with the world-famous automotive component manufacturer Getrag, providing better matching with its own engine, higher transmission efficiency, faster shifting speed, and better fuel economy.', 12),
(35, 'Intelligent all-wheel drive:', 'The EXEED TXL\'s intelligent all-wheel drive system automatically switches driving modes within 0.07 seconds according to changes in road conditions. The front and rear axles can achieve torque distribution from 0% to 100%. Before you even react, the vehicle has already made the correct power distribution for you.', 12),
(36, 'Remote vehicle control via APP:', 'This is the era of connected cars, which brings unprecedented convenience to our driving lives by connecting the car, the internet, and our daily lives. By opening the EXEED Life APP and entering the connected car function interface, you can not only start the engine, control the air conditioning, and lock the doors, but also view information such as remaining fuel and network data usage.', 12),
(37, 'Smarter and Safer:', 'Supports wake-up-free voice system, continuous voice recognition, visible speech activation, and remote control via the mobile app. Users can control the windows, air conditioning, and other functions with voice commands, without being distracted or having to operate manually, allowing for greater focus on driving and road safety.', 13),
(38, 'Enjoy Entertainment with Ease:', 'The EXEED LX C-DM comes standard with a 3.3kW external power output function, allowing users to power common household appliances such as outdoor lighting, induction cookers, and ovens, enabling them to enjoy cozy outdoor gatherings at any time.', 13),
(39, 'More Durable Battery:', 'The EXEED LX C-DM uses a ternary lithium battery with aerospace-grade anti-heat and anti-vibration mica plate armor protection, supporting a lifespan of over 20 years (based on charging twice a week). It also features intelligent detection and replenishment, as well as anti-discharge functions, intelligently protecting the battery from damage and extending its lifespan. It helps users monitor the battery\'s safety and health status at any time.', 13),
(40, 'Concert hall in it:', 'The 23 Yang Hall-level 3D surround sound music cockpit features a 1000W high-power amplifier, 23 dedicated speakers, dual-core DSP processor, and newly added exclusive driver\'s headrest speakers and 3D surround sound advanced audio effects.', 14),
(41, 'Super Smooth, Next-Level Experience:', 'Powered by the Qualcomm Snapdragon 8155 chipset with 8TOPS computing power, the central control system has a fast startup time of less than 5 seconds during sleep mode, average voice response time of less than 540ms, switching time of less than 1 second, and reading time of less than 2 seconds. It is equipped with built-in DSP for a super smooth experience.', 14),
(42, 'Green Barrier, Guarding Health and Safety:', 'The interior uses environmentally friendly and healthy materials, with Odor 3.0 technology creating a \"zero odor\" space. It is equipped with eco-friendly antibacterial+N95 filter elements, AQS air conditioning intelligent ventilation system, and real-time ion purification for the cabin.', 14),
(43, 'Interstellar Travel Seats:', 'The EXEED RX is equipped with A-grade NAPPA top-layer leather seats, with ventilation, heating, and electrically adjustable leg rest. The seats have breathable perforations and the exclusive driver\'s seat headrest is equipped with audio.', 15),
(44, 'L2.9 Intelligent Driving Assistance:', 'The EXEED RX\'s intelligent driving assistance system includes NOC high-speed navigation, automatic lane change during high-speed overtaking, automatic adjustment of cruise control speed, automatic on/off ramp merging, AVP autonomous valet parking, one-touch operation via mobile app, and automatic matching of memory routes and parking spaces.', 15),
(45, '24.6-inch True Curved Screen:', 'The EXEED RX has a built-in 400,000-level unique true curved screen, with 0.7mm Corning Gorilla Glass, silky smooth operation, R3000 curvature, surround immersion, In-cell technology, and cold bending technology.', 15),
(46, 'Sporty seat design:', 'The car is equipped with sporty seats with features like electric adjustment and heating. With sleep headrests, it provides effective support and wrapping, reducing fatigue during long journeys. In addition, the backrest is perforated for good breathability.', 16),
(47, 'Multiple driving modes:', 'The Chery iCAR 03 has 9 driving modes. In the city, you can choose eco mode, while for off-road trips, there are options like comfort, sport, custom, snow, mud, sand, and gravel. In the all-terrain mode, the system determines the driving conditions based on wheel-end signals and automatically distributes torque.', 16),
(48, 'Superior exterior performance:', 'The Chery iCAR 03 features Chery\'s well-known all-aluminum body, embedded honeycomb high-strength all-aluminum beams, and rollover brake balance system. It is also equipped with a 10mm battery protection armor with a sandwich structure, high-energy density battery, and thermal runaway monitoring and warning. With i-CARE full-time care, users will feel fully secure.', 16),
(49, 'Intelligent Interior:', 'The interior of the Tiggo 8 is equipped with a 7-inch full LCD instrument panel, a 12.3-inch floating center control screen, and touch-sensitive air conditioning controls. It also features functions such as a 360-degree camera, wireless charging, and FOTA cloud upgrades.', 17),
(50, 'Technological Features:', 'It is equipped with the Lion 3.0 intelligent vehicle system, which includes AI face recognition and practical features such as an AI intelligent butler and remote vehicle control.', 17),
(51, 'Driving Assistance:', 'The Tiggo 8 is equipped with features such as a reminder for unfastened seatbelts in the front passenger seat, engine start-stop, steering wheel shift paddles, electric adjustment for the front passenger seat, and soundproof glass for the front row.', 17),
(52, 'Active and Passive Safety Systems:', 'It includes features such as lane departure warning, road traffic sign recognition, active braking, forward collision warning, a memory function for the sensor-controlled power tailgate, wireless phone charging, and adaptive high beam headlights.', 17),
(53, 'Rich Configuration:', 'The Tiggo 8 Plus offers features such as a panoramic sunroof, driving assistance systems, tire pressure monitoring, and automatic parking, among other high-tech configurations.', 18),
(54, 'High Safety:', 'The Tiggo 8 Plus is equipped with a reverse camera, adaptive cruise control, automatic emergency braking, and other safety features, ensuring the safety of both the driver and passengers.', 18),
(55, 'Luxurious Interior:', 'The Tiggo 8 Plus is equipped with full LED luxury lighting, exclusive premium leather seats, SONY custom luxury sound system, a 24.6-inch dual smart screen, and an intelligent vehicle butler, among other luxurious configurations.', 18),
(56, 'Rich Configuration:', 'The Tiggo 8 Pro offers features such as a 540-degree reverse camera, L2.5 level intelligent driving assistance, a sensor-controlled rear tailgate, 50W fast wireless charging for smartphones, panoramic sunroof, and HUD (head-up display).', 19),
(57, 'Intelligent Interior:', 'The interior of the Tiggo 8 Pro features a symmetrical layout, with dual 12.3-inch screens and the Qualcomm Snapdragon 8155 chip. It is equipped with the Lion 5.0 intelligent vehicle system.', 19),
(58, 'Fast Charging:', 'The Tiggo 7 Plus Phev is equipped with a Chery hybrid-specific AC/DC onboard charger, with a fast charging power of up to 29kW.', 20),
(59, 'Intelligent Interior:', 'The Tiggo 7 Plus Phev is equipped with the Qualcomm Snapdragon 8155 chip and the Lion 5.0 AI technology smart cockpit, featuring a 24-inch dual-curved screen, providing passengers with a clearer and safer experience.', 20),
(60, 'High Safety:', 'The Tiggo 7 Plus Phev features a wrap-around design with multiple safety airbags and a high-strength cage body structure, providing enhanced protection and reducing passenger injuries.', 20),
(61, 'Intelligent energy, efficient management:', 'Self-developed A-ECMS smart energy consumption optimization algorithm, the first integrated oil temperature constant temperature system, fast temperature rise, accurate temperature control, high efficiency; integrates all-terrain driving adaptive, infinite sliding energy recovery and navigation-based dynamic energy management , energy-saving and easy.', 21),
(62, 'Smart car control, all under control:', 'The function integrates smart car search with mobile phone, allowing you to control the location of your car anytime and anywhere. You can control the vehicle process through Bluetooth on your mobile phone, and supports remote sharing, making travel more convenient.\r\n', 21),
(63, 'Smart voice, zero-touch interaction:', 'Equipped with the AI intelligent voice system, the voice recognition rate is as high as 95%. Together with the sound source positioning, it can understand and listen quickly. It can realize the rapid execution of multiple commands without waking up, bringing a mechanical voice intelligent control experience.', 21),
(64, 'Real battery life saves money:', 'Changan NEVO Q05 is equipped with a high-performance digital AI electric drive with a motor efficiency as high as 97.8%. It has a self-developed A-ECMS smart energy consumption algorithm and original stepless sliding energy recovery, saving fuel and electricity in all scenarios.\r\n', 22),
(65, 'True wisdom and true security:', 'Changan NEVO Q05 adopts 540° high-definition panoramic images, one-click tracking and reversing, high-strength and solid body, IP67-level high-strength protective battery, and 6 airbags with 0.03-second response to maximize all-round driving safety.', 22),
(66, 'So comfortable and convenient:', 'Changan NEVO Q05 is equipped with IACC integrated adaptive cruise to realize intelligent assisted driving, making it more worry-free at high speeds and less tiring for long distances. The 3.3kw external discharge function can quickly replenish energy within 30 minutes, and has thoughtful functions such as smart power protection, scheduled battery charging, and scheduled battery heating. It can be used for family camping and outdoor barbecues.', 22),
(67, '30-inch Surround Intelligent Triple Screens:', 'With its enveloping concave design and sleek surface, the Changan X5 PLUS exhibits a sense of cutting-edge aesthetics, reflecting youthfulness and individuality. The combination of the instrument screen, central control screen, and driver assistance screen allows for seamless information sharing and an enhanced intelligent experience.', 23),
(68, 'SpaceCap Capsule:', 'Equipped with PM0.1 efficient composite anti-virus filtration, the SpaceCap Capsule provides N95-level medical protection, creating a fresh and comfortable driving and riding space.', 23),
(69, 'Standard Integrated Sports Seats:', 'The Changan X5 PLUS comes standard with high-quality sports seats that offer full support and a snug feel, ensuring a comfortable driving and riding experience.', 23),
(70, 'OnStyle 3.0 Smart Control Infotainment System for All Scenarios:', 'The OnStyle series smart control infotainment system covers 120 driving scenarios, providing a comfortable and enjoyable experience for the whole family.', 24),
(71, 'Electronic Gear Shifting for Effortless Smoothness:', 'Avoids the jerky feeling during gear shifting, reducing the impact and providing a truly enjoyable driving experience.', 24),
(72, 'Luxurious Interior:', 'Added brown luxurious interior, large area of soft-touch materials, paired with 3D relief wood grain, creating a boundaryless comfort between car and home.', 24),
(73, 'Low fuel consumption, reducing costs:', 'The Changan Hunter can meet over 90% of pure electric commuting needs, resulting in an annual saving of approximately $2000 compared to diesel pickup trucks. It not only saves fuel and is more environmentally friendly but also solves the problems of \"exhaust pipe blockage, increased fuel consumption, and decreased climbing power\" that diesel pickup truck users often face.', 25),
(74, 'Efficient engine, reducing energy consumption:', 'The Changan Hunter adopts the Power Domain Vehicle Controller technology, which combines engine control with vehicle control to work efficiently. It intelligently selects the optimal efficiency points for front and rear drive, achieving fine control of power in specific scenarios and greatly reducing the energy consumption of the entire vehicle system.', 25),
(75, 'Ensuring driving safety:', 'The Changan Hunter uses a new type of military standard insulation material on the battery, which improves insulation performance by 30% compared to the industry standard. It can withstand temperatures over 200℃ higher than conventional materials and has a cage-like safety battery anti-collision structure. It is also equipped with practical high-tech features such as dynamic instrument display and driver assistance. The 540° transparent chassis assists the driver in identifying obstacles on the road.', 25),
(76, 'Advanced Connectivity:', 'The Changan Eado PLUS is equipped with advanced connectivity features, including a large touchscreen infotainment system that supports smartphone integration (such as Apple CarPlay and Android Auto). This allows seamless connectivity for navigation, music streaming, and hands-free communication.\r\n\r\n', 26),
(77, 'Efficient Powertrain Options:', 'It offers a range of efficient powertrain options, including gasoline engines with turbocharged variants, providing a balance between performance and fuel economy. These engines are designed to deliver responsive acceleration and smooth driving experience.\r\n\r\n', 26),
(78, 'Safety and Driver Assistance Systems:', 'The Changan Eado PLUS prioritizes safety with a suite of driver assistance systems. This includes adaptive cruise control, lane departure warning, blind-spot monitoring, and automatic emergency braking. These features enhance safety by assisting the driver in various traffic and road conditions.', 26),
(79, 'Dual Turbocharged Engine:', 'The Changan Eado DT is equipped with a powerful dual turbocharged engine. This setup typically includes a smaller turbocharger for quick response at lower RPMs and a larger turbocharger for increased power at higher RPMs. This dual turbo system enhances both performance and fuel efficiency.', 27),
(80, 'Spacious and Comfortable Interior:', 'The Changan Eado DT offers a spacious cabin with comfortable seating and premium materials. It is designed to provide a pleasant driving experience for both the driver and passengers, with ample legroom and storage options.', 27),
(81, 'Advanced Technology and Connectivity:', 'The Changan Eado DT comes equipped with advanced technology features, including a touchscreen infotainment system with smartphone integration capabilities (such as Apple CarPlay and Android Auto). This allows drivers to easily access navigation, music, and hands-free communication while on the road.', 27),
(82, 'Advanced Hybrid Powertrain:', 'The Changan UNI-V is equipped with an advanced hybrid powertrain, combining a gasoline engine with an electric motor. This hybrid system not only improves fuel efficiency but also reduces emissions, making it environmentally friendly.\r\n\r\n', 28),
(83, 'Intelligent Connectivity:', 'The UNI-V features advanced connectivity options, including a large touchscreen infotainment system with support for smartphone integration. This system allows seamless integration of apps, navigation, and entertainment features, enhancing the overall driving experience.\r\n\r\n', 28),
(84, 'Modern Design and Comfort:', 'The Changan UNI-V boasts a modern and stylish design both inside and out. It offers a spacious and comfortable interior with premium materials and ergonomic seating, ensuring a pleasant journey for both driver and passengers.', 28),
(85, 'Low fuel consumption:', 'Equipped with the Blue Whale NE1.4T high-pressure direct injection engine, coupled with the STT total speed start-stop function, the engine can shut down during short stops, such as at traffic lights, to reduce fuel consumption and improve fuel efficiency. Changan\'s self-developed Blue Whale 7-speed wet dual-clutch transmission optimizes smoothness, stability, and fuel efficiency, making shifting and acceleration faster, smoother, and more fuel-efficient.', 29),
(86, 'Rich and practical features:', 'Integrated screen and control system with independent full keyboard controller and Idriver-style rotary control key, supporting CD, iPod, AUX, USB, and other interfaces. The CS35 PLUS is also equipped with an electric sunroof, side airbags, electrically adjustable/folding exterior mirrors, parking assist, rain-sensing wipers, on-board computer, rear air vents, etc., greatly enhancing safety and convenience.', 29),
(87, 'Safety performance:', 'The Changan CS35 PLUS adheres to Changan\'s high safety standards, with a HEEAB high-stiffness energy-absorbing frame structure that ensures the integrity of the passenger survival space in high-speed collisions. It features internationally popular L-arm MacPherson strut front suspension and lightweight high-strength torsion beam design rear suspension. The entire range meets the strict collision standards, equivalent to the current European collision regulations for occupant protection, and the rollover protection structure meets the requirements of the US FMVSS 216 standard.', 29),
(88, 'Low fuel consumption:', 'Equipped with the Blue Whale NE1.5T high-pressure direct injection engine, featuring multiple globally leading technologies. It embodies the development concept of \"power, quietness, and cleanliness.\" The rated maximum power is 138KW, with a net power increase of 8%. The peak torque can reach 300N·m. The vehicle achieves both strong power and fuel economy, with a fuel consumption of only 5.9L per 100 kilometers. Equipped with the Blue Whale 7-speed wet dual-clutch transmission, featuring intelligent pre-downshift technology and a comprehensive transmission efficiency of up to 94.3%.', 30),
(89, 'IMS Intelligent Interaction System:', 'Face ID Facial Recognition: Based on a massive facial database, it enables face recognition and allows the vehicle to be started directly with a slight brake pedal. The system adjusts the air conditioning temperature and multimedia volume automatically based on the driver\'s habits. Fatigue Monitoring and Warning: Recognizes the frequency of blinking and yawning to determine the level of driver fatigue. It provides fatigue intervention through progressive voice warnings, music stimulation, incoming calls, etc. Intelligent Gesture Control: Recognizes different gestures, such as left and right swipes, to control various vehicle functions.', 30),
(90, 'Equipped with IACC Integrated Adaptive Cruise Control, LCDA Intelligent Lane Change Assist, FAB Automatic High Beam Control, and ACC Full-Speed Adaptive Cruise Control:', 'IACC version enables intelligent driving within the speed range of 0-130km/h. By pressing the IACC button, you can set the cruise speed and following distance. The vehicle will accelerate, decelerate, and stop following the preceding vehicle. It features functions such as single-lane intelligent driving, traffic congestion assistance, automatic deceleration during turns, intelligent speed limit assistance, and lane-keeping assist. Equipped with the new LCDA Intelligent Lane Change Assist system from Delphi, it uses a 77GHz millimeter-wave radar for comprehensive monitoring, covering blind spots, and providing early warnings of lateral collisions during reversing. The ACC Full-Speed Adaptive Cruise Control system is equipped with the MRR evo14 millimeter-wave radar. It features the \"Stop/Go\" queue stop and start function, operating at speeds ranging from 0-150km/h. It can relieve fatigue during long-distance driving and adapt to various complex road conditions.', 30),
(91, 'Intelligent security:', 'Hyundai-Custo has front anti-collision assist, rear cross-collision anti-collision assist, blind spot anti-collision assist, safe exit assist, intelligent cruise control system, voice recognition control system and rear passenger forgetting reminder function to reduce safety risks.', 31),
(92, 'Luxurious configuration:', 'Hyundai-Custo is equipped with a 10.4-inch central control screen, which can control zero-gravity seats with one button. The seats support heating and ventilation; it is equipped with a Bluetooth mobile phone key, a multi-purpose intimate table, front wireless fast charging, rear seat calls and no sense Soft air conditioner.', 31),
(93, 'Strong power:', 'Hyundai-Custo is equipped with a golden power combination of 2.0T turbocharged engine + 8AT gearbox, with a maximum horsepower of 236Ps. It is equipped with a load-bearing body, MacPherson independent front suspension and torsion beam non-independent rear suspension to achieve sustained strong power output. At the same time, it also ensures the stability of driving.', 31),
(94, 'Efficient power:', 'Hyundai-mistra offers two power sets and options: 1.8L MPI engine + intelligent CVT transmission and 1.5T CVVD engine + 7DCT transmission. Among them, the 1.5T CVVD engine adopts Hyundai Motor’s world-first CVVD “continuously variable valve duration” technology to achieve a balance between power and economy.\r\n', 32),
(95, 'Intelligent Technology:', 'Hyundai-mistra is equipped with the intelligent network connection 3.0 system, which has functions such as BLE Bluetooth key, BlueLink, and car-home interconnection functions. Equipped with Hyundai SmartSense safety system, which can achieve L2+ level autonomous driving level.\r\n', 32),
(96, 'Stylish appearance:', 'Hyundai-mistra adopts a modern family-style design language, with LED headlights, large-size grille, three-dimensional car logo, halo rear taillights, aluminum alloy wheels, and chrome decoration. It is fashionable and dynamic, showing the look of a luxury car. Temperament and quality.', 32),
(97, 'Intelligent Technology for Immersive Driving:', 'Equipped with a 10.25-inch smart dual-screen and the Intelligent Network System 4.0. It features the AVNT system, a new GUI interface design, guest mode, voice memos, second-row care mode, voice recognition, navigation linkage, and support for streaming media.', 33),
(98, 'Effortless Gear Shifting with One-touch SPORT+:', 'N Line exclusive SBW button-style electronic gear shifting. The electronic gear shifting with leather treatment provides a luxurious touch and the one-touch SPORT+ mode button emphasizes the sporty image.', 33),
(99, 'Integration of Intelligence and Safety Systems:', 'Hyundai SmartSense integrates multiple safety/assistance configurations, providing features such as Forward Collision-Avoidance Assist (FCA), Lane Keeping Assist (LKA), Smart Cruise Control (NSCC), Rear Cross-Traffic Collision-Avoidance Assist (RCCA), and more. With leading technology, it ensures comprehensive safety for drivers and passengers, offering peace of mind in every aspect and serving as an intelligent guardian on the road.', 33),
(100, 'Versatile Features:', 'The Elantra is equipped with a 10.25-inch touch screen that supports road condition information display, vehicle connectivity, voice recognition control of multimedia, navigation, phone, and air conditioning. It supports Bluetooth phone and carlife smartphone connection.', 34),
(101, 'High Safety:', 'The Elantra is built on the Hyundai\'s new i-GMP platform, which provides a better passive safety foundation and utilizes higher-grade steel in the body structure. The inclusion of high-strength steel and hot-stamped steel increases the body strength of the Elantra by 10%. Additionally, the engine compartment features a multi-skeletal structure to dissipate impact forces during collisions. Combined with the low center of gravity body design of the i-GMP platform, the vehicle is less prone to rollovers during severe lateral collisions, reducing the likelihood and severity of vehicle-related injuries.', 34),
(102, 'Assisted Driving:', 'The Hyundai Elantra offers features including lane assist system, active braking system, full-speed adaptive cruise control, lane departure warning, lane change assist, blind spot collision-avoidance assist system, safe exit reminder system, rear cross-traffic collision assist system, and rearview camera display. The intelligent safety driving system, supported by various cameras, millimeter-wave radar, and ultrasonic radar, achieves intelligent safety performance far beyond the level of similar vehicles and achieves Level L2+ autonomous driving capability.', 34),
(103, 'Comfortable Interior Space:', 'The Tucson offers ample interior space, suitable for daily family use. When the rear seats are fully folded down, the 1904L trunk capacity can accommodate large items such as luggage. The panoramic sunroof provides a larger view, creating a better visual environment and good light sensitivity for rear passengers.', 35),
(104, 'Fully Equipped with Features:', 'The Tucson is equipped with features including wireless charging for mobile phones, full LCD instrument panel, child seat interface, tire pressure monitoring, LED daytime running lights, hill descent control, lane keeping assist (LKAS), electronic brakeforce distribution (EBD/CBC), side curtain airbags, fatigue reminder, and anti-lock braking system (ABS).', 35),
(105, 'Assisted Driving:', 'The Tucson is equipped with features such as hill start assist, automatic parking, front and rear parking sensors, electronic stability control (ESP/DSC/VSC), brake assist (BA/EBA/BAS), and traction control (ASR/TCS/TRC).', 35),
(106, 'Luxurious Interior:', 'The Hyundai Sonata features luxurious leather seats, intelligent infotainment system, and high-end audio system, meeting customers\' demands for comfort and technology.', 36),
(107, 'Excellent Driving Comfort:', 'Thanks to its well-designed suspension system, the Hyundai Sonata experiences less vibration and bumps when driving over high-speed ramps. The seats are very comfortable, especially the rear seats.', 36),
(108, 'Rich Entertainment Features:', 'The Hyundai Sonata\'s entertainment features include a large high-resolution touchscreen display, wireless charging for mobile devices, and compatibility with Apple CarPlay and Android Auto.', 36),
(109, 'High Safety Standards:', 'The Hyundai Sonata\'s safety features include advanced driver assistance systems (ADAS), such as lane departure warning, automatic emergency braking, and adaptive cruise control.', 36),
(110, 'Enhanced hardware facilities:', 'Four millimeter-wave radars have been added, and the sensor combination includes one monocular camera, one front mid-to-long-range millimeter-wave radar, and four corner radars, supporting driving assistance functions such as blind spot monitoring.', 37),
(111, 'Multiple driving modes:', 'More than 20,000 control scenario algorithms have been integrated into the electronic control program, which is 40 times more than ordinary EV models, enabling it to adapt to various driving environments. The sport mode adds Honda EV Sound acceleration sound to create a driving atmosphere. It also incorporates unique NVH noise reduction technology to effectively suppress high, medium, and low-frequency noise from the source.\r\n', 37),
(112, 'Complete safety features:', 'The Honda e:NS1 is equipped with a range of advanced safety features, including adaptive cruise control, lane-keeping assist, collision warning, and automatic emergency braking. These functions can effectively reduce driver fatigue and improve driving safety.', 37),
(113, 'Spacious interior:', 'The Accord offers excellent space performance, with a high level of overall comfort and particularly spacious rear seating. The seats provide good support, enhancing overall comfort.', 38),
(114, 'Reliability:', 'The Honda Accord is renowned for its outstanding reliability. Honda vehicles are widely praised for their manufacturing quality and reliability, making the Accord a top choice for many consumers.', 38),
(115, 'Driving comfort:', 'The Accord provides an excellent suspension system and comfortable seats, offering passengers a comfortable riding experience. Its suspension system balances handling and stability, making long drives more enjoyable.', 38),
(116, 'Fuel efficiency:', 'The Accord typically offers excellent fuel efficiency. It incorporates advanced engine technology and lightweight design, aiming to provide efficient fuel consumption and reduce daily operating costs.', 38),
(117, 'Rich interior features:', 'The all-new Honda Civic is equipped with a multifunctional steering wheel, car ETC, one-key start, keyless entry, dual-zone automatic air conditioning, PM2.5 air conditioning filter, and rear middle headrests as standard.', 39),
(118, 'Abundant entertainment features:', 'It is equipped with an 8-speaker audio system and has two USB ports in the front row and two USB ports below the rear air vents.', 39),
(119, 'High safety level:', 'In terms of the vehicle frame, the all-new Honda Civic is equipped with aluminum alloy front anti-collision beams, steel rear anti-collision beams, and laser-welded roof. It is equipped with 10 airbags (including front knee airbags). It also features a rearview camera, driver attention monitoring system, and Honda SENSING safety and sensing system.', 39),
(120, 'Intelligent features:', 'Honda Crider is equipped with the Honda CONNECT 3.0 system, which enables smartphone remote vehicle condition confirmation, car-home interconnection, intelligent AI voice conversation control, OTA online upgrades, navigation, and internet entertainment functions.', 40),
(121, 'Safety features:', 'The Honda Crider is equipped with the Honda SENSING safety and sensing system, which includes features such as LKAS lane keeping assist, RDM lane departure mitigation with LDW lane departure warning, CMBS collision mitigation braking system with FCW forward collision warning, TSR traffic sign recognition, ACC adaptive cruise control with LSF low-speed follow, and LWC blind spot display.', 40),
(122, 'Spacious interior space:', 'The Honda Crider offers a larger view with its sunroof and has a trunk capacity of 588L.', 40),
(123, 'High fuel efficiency:', 'The Honda Fit has an estimated fuel economy of 36 miles per gallon in the city and 41 miles per gallon on the highway, which is excellent for a compact car.', 41),
(124, 'Excellent handling:', 'The Honda Fit features a compact and lightweight design, providing incredible agility and driving pleasure.', 41),
(125, 'Good driving comfort:', 'The suspension system of the Honda Fit is tuned for comfort, and the car performs exceptionally well in absorbing bumps and rough road surfaces. The steering is precise and light, providing drivers with confidence and a connected road feel.', 41),
(126, 'High safety level:', 'The Honda Fit comes standard with various advanced safety features, including a backup camera, airbags, stability control, and traction control.', 41),
(127, 'Rich entertainment features:', 'The Honda CR-V is equipped with a 10.1-inch floating screen, full LCD instrument panel, 12-speaker BOSE sound system, and Honda CONNECT 3.0 intelligent navigation and connectivity system.', 42),
(128, 'Driving assistance:', 'The Honda CR-V incorporates the Honda SENSING 360 safety and driving assistance technology suite, integrating new wide-angle cameras and millimeter-wave radars. The new camera has a 90-degree wide-angle, while the radar has a detection angle of 120 degrees.', 42),
(129, 'Spacious interior space:', 'With its large body size, the CR-V offers ample interior space, particularly impressive in terms of the second-row passenger and cargo space. It is ideal for family trips.', 42),
(130, 'Safety Assurance:', 'The Toyota Allion has multiple safety assistance driving systems, including PCS pre-collision safety system, DRCC dynamic radar cruise control system, LTA lane tracing assist system, AHB automatic high beam adjustment system, EDSS emergency driving stop system, RSA road sign recognition assist system, and PDA pre-emptive active driving assist system.', 43),
(131, 'Interactive Entertainment:', 'The Toyota Allion is equipped with Toyota Space intelligent cockpit and a 12.3-inch full LCD instrument panel. The upgraded 10.25-inch multimedia intelligent online navigation system integrates the entertainment ecosystems of Alibaba and Tencent, allowing functions such as audiobooks, music, karaoke, and gaming.\r\nDiverse Vehicle-Infotainment.\r\n', 43),
(132, 'Connectivity Services:', 'The Toyota Allion provides 365-day 24-hour vehicle connectivity services, including car health monitoring, anti-theft security, remote control, and rescue services, among others.', 43),
(133, 'Driver Oriented Design Centered on the Driver:', 'The integrated top-mounted dashboard with a racing steering wheel, paired with a 12.8-inch large floating multimedia navigation system, intelligent voice interaction system, and digital key, allows you to enjoy a home-like comfort.', 44),
(134, 'Spacious Interior for Comfortable Driving and Riding:', 'A 750mm distance between the front seats ensures a good view for rear passengers, allowing for seamless interaction between the front and rear rows. A 967mm distance between front and rear passengers, along with the 2880mm extended wheelbase, creates a spacious rear seating area for a first-class cabin experience. The sofa-style rear seats provide soft and comfortable seating, allowing for a relaxed riding experience.', 44),
(135, 'Worry-Free Range:', 'Comprehensive range assurance with a range of up to 616km. The use of lithium iron phosphate batteries with efficient temperature control allows for better performance in battery charging and discharging. The battery is equipped with multiple safety monitoring systems to effectively prevent and detect battery malfunctions. The integrated large-capacity battery pack has a sturdy structure for better protection.', 44),
(136, 'High Safety:', 'The Avalon comes standard with the Toyota Safety Sense (TSS) advanced safety system, reaching Level 2 autonomous driving. It is equipped with 10 SRS airbags, providing comprehensive safety protection. This configuration is a major highlight.', 45),
(137, 'Solid Materials and Exquisite Craftsmanship:', 'The Avalon uses a significant amount of 1500MPa ultra-high yield strength steel in its body structure design. Additionally, the longitudinal beams, cross beams, and all door frame structures are welded using LSW laser spiral welding technology, increasing the body\'s torsional strength by 60%. The use of high-strength and hot-pressed materials allows the Avalon\'s body to have both strength and flexibility, providing maximum protection for occupants in unavoidable collision risks.', 45),
(138, 'High Intelligence:', 'The vehicle is equipped with a 9-inch central control multimedia touchscreen that supports Baidu CarLife, a full LCD instrument panel, interior ambient lighting, electric sunshades, JBL surround sound, and high-tech features such as HUD head-up display, BSM blind spot monitoring, PVM panoramic monitoring.', 45),
(139, 'Driving Assistance:', 'The Toyota Camry excels in passenger and vehicle safety, equipped with various safety features including pre-collision system, blind spot monitoring, lane departure warning, etc. When the vehicle experiences abnormal conditions, it can promptly alert the driver, effectively preventing accidents.', 46),
(140, 'Good Interior Comfort:', 'The Toyota Camry offers spacious and comfortable interior space, with seats made of different grades of genuine leather and fabric materials, further enhancing comfort. It is equipped with practical features such as dual-zone automatic air conditioning.', 46),
(141, 'Safety Technology Configuration:', 'Configurations include a full LCD instrument panel, lane keeping assist system (LKAS), knee airbags, LED daytime running lights, tire pressure monitoring, rear parking radar, traction control (ASR/TCS/TRC, etc.), brake assist (BA/EBA/BAS, etc.), child seat interface, hill start assist, automatic parking, front parking radar, electronic stability control (ESP/DSC/VSC, etc.), side curtain airbags, brake force distribution (EBD/CBC, etc.), anti-lock braking system (ABS), and head-up display (HUD).', 46),
(142, 'High Material Safety:', 'The new Camry uses steel plates with a tensile strength greater than or equal to 590MPa, including hot-formed steel plates, accounting for 33.9% of the body.', 46),
(143, 'Comfortable Driving Environment:', 'The Toyota Corolla Asia Dragon features lumbar adjustment, seat heating, privacy glass, 18-inch alloy wheels, wireless charger, JBL sound system, 10.5-inch central control screen, heated steering wheel, and a 12.3-inch digital instrument panel, etc.', 47),
(144, 'Solid Material Quality:', 'The Corolla\'s body uses advanced high-strength steel and ultra-high-strength steel. According to the definition of steel strength by the German Steel Association (180-300Mpa for high-strength steel, 300-600Mpa for advanced high-strength steel, and above 600Mpa for ultra-high-strength steel).\r\n', 47),
(145, 'Driving Assistance:', 'The Corolla is equipped with the T-Pilot intelligent driving assistance system, supporting features such as PCS pre-collision safety system (with pedestrian detection), DRCC dynamic radar cruise control system (with full-speed range follow-up function), LTA lane tracing assist system, AHB automatic high beam adjustment system, etc. Additionally, the 1.5 version also includes features such as EDSS emergency driving stop system, RSA road sign recognition assist system, PDA predictive active driving assistance system, etc.', 47),
(146, 'Excellent Handling:', 'The Toyota RAV4 features an independent suspension system, delivering excellent stability and handling performance. It has a small turning radius, stable steering, and well-tuned suspension that effectively absorbs road bumps, providing a comfortable driving experience.', 48),
(147, 'Luxurious Interior:', 'The interior of the Toyota RAV4 is predominantly black, complemented by silver and wood grain accents, creating a clean and stylish atmosphere. The seats are upholstered in synthetic leather, offering good support and comfort.', 48),
(148, 'Driving Assistance Technology:', 'The Toyota RAV4 is equipped with a range of intelligent driving assistance systems, such as adaptive cruise control, panoramic rearview camera, and lane departure warning.', 48),
(149, 'Excellent Handling:', 'The Toyota C-HR\'s suspension system features independent suspension design, providing excellent stability and handling.', 49);
INSERT INTO `highlighted_features` (`id`, `main`, `detail_feat`, `highlight_cars`) VALUES
(150, 'Various Multimedia Connectivity:', 'The Toyota C-HR offers the Toyota Smart Connect multimedia package, including an 8-inch or 12.3-inch touchscreen, in-car voice assistant, and wireless smartphone connectivity through Apple CarPlay or Android Auto. Owners can also use smartphone applications to remotely control vehicle functions.', 49),
(151, 'Intelligent Driving Assistance:', 'The Toyota C-HR comes standard with the Toyota TSS 3.0 intelligent driving assistance system, which can achieve Level L3 autonomous driving assistance functions, including adaptive cruise control and lane departure warning. \r\nBuilt on Toyota\'s latest TNGA architecture, all passenger sides are equipped with airbags, providing not only improved safety in complex road conditions but also better protection for occupants\' safety.', 49),
(152, 'Off-Road Capability:', 'The GWM Pao is celebrated for its off-road prowess, equipped with robust suspension systems, durable chassis, and high ground clearance. This enables it to tackle various terrains confidently, making it a preferred choice for adventurous drivers.', 50),
(153, 'Reliability and Durability:', 'Known for its reliability and durability, the GWM Pao old car is built to withstand tough conditions over prolonged periods. It is engineered with sturdy materials and components, ensuring longevity and minimal maintenance requirements.', 50),
(154, 'Comfortable and Spacious Interior:', 'The ix35 provides a comfortable and spacious cabin, with well-designed seating and ample legroom for both front and rear passengers. It also offers a generous cargo area, making it versatile for daily use and travel.', 51),
(155, 'Efficient Engine Options:', 'The ix35 is equipped with a range of efficient engine options, including gasoline and diesel variants, depending on the market. These engines deliver a balance of power and fuel efficiency suitable for various driving conditions.', 51),
(156, 'Advanced Safety Features:', 'It features advanced safety technologies such as stability control, traction control, anti-lock braking system (ABS), and multiple airbags. These safety features enhance driver and passenger safety by providing stability and protection in emergency situations.', 51),
(157, 'Premium Interior Design:', 'The CS75 PLUS boasts a well-crafted interior with premium materials, ergonomic seating, and modern design elements. It offers a comfortable and luxurious driving environment for both the driver and passengers.\r\n', 52),
(158, 'Advanced Technology Integration:', 'Equipped with advanced technology features, including a touchscreen infotainment system with navigation, Bluetooth connectivity, and smartphone integration (such as Apple CarPlay and Android Auto). This system enhances convenience and entertainment options for occupants.\r\n', 52),
(159, 'Powerful and Efficient Engine Options: ', 'The CS75 PLUS offers a range of engine options known for their balance of power and efficiency. Depending on the variant, it may include turbocharged gasoline engines that deliver responsive acceleration and competitive fuel economy.', 52),
(160, 'Spacious and Luxurious Interior:', 'The CS95 offers a spacious cabin with luxurious appointments, including premium materials, leather upholstery, and ergonomic seating. It provides ample legroom and comfort for all passengers, making it suitable for long journeys.\r\n', 53),
(161, 'Powerful Engine Performance:', 'The CS95 is equipped with a powerful engine, typically a turbocharged gasoline engine, that delivers strong performance and smooth acceleration. This engine option ensures a responsive driving experience both on highways and off-road conditions.', 53),
(162, 'Advanced Safety and Driver Assistance Systems:', 'It comes with advanced safety features such as adaptive cruise control, lane departure warning, blind-spot monitoring, and a comprehensive airbag system. These systems enhance safety and provide peace of mind for drivers and passengers alike.', 53),
(163, 'Spacious and Versatile Interior:', 'The Tiggo 8 PRO offers a spacious interior with three rows of seating, accommodating up to seven passengers comfortably. It provides ample headroom, legroom, and cargo space, making it ideal for family trips and daily commutes.', 54),
(164, 'Advanced Technology and Connectivity: ', 'Equipped with advanced technology features, including a touchscreen infotainment system with smartphone integration (such as Apple CarPlay and Android Auto). This system allows seamless access to navigation, entertainment, and communication features while on the go.\r\n', 54),
(165, 'Efficient and Responsive Powertrain:', 'The Tiggo 8 PRO is powered by a reliable and efficient engine, typically a turbocharged gasoline engine. This engine option delivers responsive performance with good fuel efficiency, making it suitable for both city driving and highway cruising.', 54);

-- --------------------------------------------------------

--
-- Table structure for table `introduction`
--

CREATE TABLE `introduction` (
  `id` int(11) NOT NULL,
  `detail_intro` text,
  `intro_cars` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `introduction`
--

INSERT INTO `introduction` (`id`, `detail_intro`, `intro_cars`) VALUES
(1, 'The length, width and height of GWM Wingle 7 are 5425mm* 1800mm* 1760mm respectively, the wheelbase is 3350mm, the front wheelbase is 1515mm, and the rear wheelbase is 1525mm. The vehicle can carry 5 people.', 1),
(2, 'The front edge of GWM Wingle 7 adopts an integrated dynamic style design, with streamlined crystal diamond LED daytime running lights, chrome-plated grille, lion-mouth bumper, sharp waist, sunken front side windows, and integrated tension wheel arches, all showing off charm.', 1),
(3, 'GWM Wingle 7 high-strength cage body, high-strength door anti-collision beam, dual airbags, front disc and rear drum brakes, reversing image, CSS cruise control, TPMS intelligent tire pressure monitoring system, reversing radar and other active and passive features Safety equipment to protect driving safety in all aspects.', 1),
(4, 'The dimensions of the GWM Wingle 5 are 5403mm1800mm1740mm in length, width, and height respectively. It has a wheelbase of 3350mm, front wheel track of 1515mm, rear wheel track of 1525mm, and can accommodate 5 people.', 2),
(5, 'In terms of power configuration, the GWM Wingle 5 is more powerful and delivers a smooth power output during daily use. It can handle complex road conditions such as steep slopes and potholes, and with its larger tires, it has better off-road capability. It is an excellent choice for daily commuting.', 2),
(6, 'The GWM Wingle 5 comes standard with driver\'s airbag, driver\'s seat belt reminder, ABS anti-lock braking system, and BED brake force distribution, which effectively prevents slipping, drifting, floating, and shortens the braking distance, enhancing vehicle control.', 2),
(7, 'The length, width and height of GWM Jingang Poer are 5635mm* 1880mm* 1840mm respectively, the wheelbase is 3410mm, and the front and rear wheelbase is 1570mm. The vehicle can carry 5 people.\r\n', 3),
(8, 'GWM Jingang Poer provides two types of power: diesel and gasoline, two types of drive, two-wheel drive and four-wheel drive, 6MT/6AT/8AT gearbox, and three types of cargo boxes: standard box, long box, and flat bottom, to meet diverse needs.', 3),
(9, 'GWM Jingang Poer is equipped with halogen + lens headlights, halogen + LED rear lights, front fog lights + LED rear fog lights, front fog lights steering auxiliary lighting, high-brightness cargo box lighting, headlights to follow home, full-size tires, Roll cage and other external configurations.', 3),
(10, 'The dimensions of the Tank 700 Hi4-T are 5090x2061x1952mm (length x width x height), with a wheelbase of 3000mm. The front and rear track widths are 1742mm and 1757mm respectively. The vehicle can accommodate 5 people.', 4),
(11, 'The Tank 700 Hi4-T has an extremely safe structural design, with a high-strength body frame and a torsional stiffness of 30122N·m/deg. The ladder frame made of 99% high-strength steel has a torsional stiffness of 8000N·m/deg. The battery uses aerospace-grade insulation materials and meets the 3 times vibration and shock requirements of national standards.', 4),
(12, 'The Tank 700 Hi4-T is equipped with electronically disconnectable stabilizer bars and increased wheel rebound travel by 60mm, achieving top-level off-road capability.', 4),
(13, 'The dimensions of the Tank 300 are 4760mm/1930mm/1903mm in length, width, and height, with a wheelbase of 2750mm and front/rear track of 1608mm. It can accommodate 5 people.', 5),
(14, 'The Tank 300 features a maximum cross-section of the frame longitudinal beam of 160x130mm, providing solid support for the vehicle\'s anti-torsion and stability. It is equipped with four towing hooks, both front and rear, and reserved towing installation holes, making it convenient for the vehicle to get out of trouble and tow other vehicles.', 5),
(15, 'The Tank 300 has an ultra-high-strength body with a design that ensures effective dispersion of impact forces through a circular power transmission channel. It incorporates a significant amount of 1500Mpa ultra-high-strength steel in the main power transmission channels, reducing deformation in the event of a collision. With a complete power transmission channel and the reinforcement of high-strength steel, the roof can withstand static pressure over 6.7 times its own weight.', 5),
(16, 'The dimensions of the Tank 400 Hi4-T are 4985*1960*1900mm, with a wheelbase of 2850mm. The front and rear track widths are 1635mm. The vehicle can accommodate 5 people.', 6),
(17, 'The Tank 400 Hi4-T has a WLTC pure electric range of 105 km and a WLTC total range of 800 km. It easily meets the needs of weekly commuting and eliminates travel range anxiety. With the support of the Hi4-T hybrid architecture, the WLTC fuel consumption is as low as 2.61L per 100 km, and it can use 92# fuel, making it more worry-free for outdoor long-distance travel.\r\n', 6),
(18, 'The Tank 400 Hi4-T only takes 24 minutes to charge from 30% to 80%, which is equivalent to the time it takes to enjoy a cup of coffee. It is equipped with a 3.3kW external power output, which can support the simultaneous operation of multiple high-power appliances, unlocking more possibilities for outdoor activities.', 6),
(19, 'The dimensions of the Wey GaoShan PHEV are 5045*1960*1900mm, with a wheelbase of 3085mm. The front and rear track widths are 1689mm and 1707mm respectively. The vehicle can accommodate 7 people.\r\n', 7),
(20, 'The Wey GaoShan PHEV is equipped with a 37.96 kWh battery, which provides a long electric range of 140 km (WLTC). It can easily meet the needs of urban commuting, business receptions, and short family trips, resolving range anxiety.', 7),
(21, 'The Wey GaoShan PHEV is equipped with a 27-inch integrated instrument and entertainment screen with 4K high-definition resolution. The system animations, response speed, and visual quality provide a smooth and immersive experience. The rich Kaffe OS system allows for intelligent and interactive enjoyment.', 7),
(22, 'The dimensions of the GWM Shanhai Cannon are 5462*1992*1960mm, with a wheelbase of 3350mm. The front and rear track widths are 1635mm. The vehicle can accommodate 5 people.', 8),
(23, 'The GWM Shanhai Cannon is equipped with an electromagnetic-controlled BorgWarner TOD intelligent transfer case, with integrated mechanical LOCK structure. It is also equipped with front and rear axle differential locks, allowing users to easily control the action of the \"three locks\" through the 9 driving modes such as Standard, Snow, Sand, 4L, Rock, and Expert.', 8),
(24, 'The GWM Shanhai Cannon comes standard with rear metal bumper, 18-inch off-road AT tires, K-MAN nitrogen shock absorbers, 12500-pound T-MAX winch, wading hose, and other off-road equipment. In addition, the ground clearance of the chassis is raised by 1.5 inches compared to other versions of the Shanhai Cannon, allowing for a maximum wading depth of 900mm and significantly improving its ability to tackle extreme environments.', 8),
(25, 'The dimensions of the GWM Pao EV are 5602mm in length, 1883mm in width, and 1884mm in height, with a wheelbase of 3470mm. The cargo box size is 1760mm × 1520mm × 538mm.', 9),
(26, 'The GWM Pao EV boasts a maximum horsepower of 204Ps, a maximum power output of 150kW, and a maximum torque of 300N·m.', 9),
(27, 'The dimensions of the Wey Macchiato DHT-PHEV are 4520mm in length, 1855mm in width, and 1665mm in height, with a wheelbase of 2710mm. The front track is 1583mm, and the rear track is 1593mm. The car can accommodate 5 people.', 10),
(28, 'The Wey Macchiato DHT-PHEV is equipped with the E15GH engine, delivering a maximum horsepower of 156Ps, a maximum power output of 197kW, and a maximum torque speed of 4400-5200rpm.', 10),
(29, 'The Wey Macchiato DHT-PHEV has a battery capacity of 19.94 kilowatt-hours. The electricity consumption per 100 kilometers is 15 kilowatt-hours.', 10),
(30, 'The dimensions of Chery Fengyun A8 are 4780mm in length, 1843mm in width, and 1487mm in height, with a wheelbase of 2790mm. The front and rear track widths are 1580mm. The vehicle can accommodate 5 people.', 11),
(31, 'The seats of Chery Fengyun A8 are made of high-quality materials, providing good support and envelopment, and ensuring a comfortable ride even during long journeys. The interior space layout is reasonable and can meet the diverse needs of passengers.', 11),
(32, 'The exterior design of Chery Fengyun A8 is stylish and atmospheric. It adopts a modern design style, with smooth and natural lines, giving a simple yet elegant feeling.', 11),
(33, 'The dimensions of the EXEED TXL are 4780/1890/1730mm(length/width/height), with a wheelbase of 2800mm and front and rear wheel spans of 1624mm. The car can accommodate 5 people.', 12),
(34, 'The EXEED TXL features a high-definition multi-touch screen and a full LCD instrument panel, with a resolution of up to 1920X720 for the large central control high-definition touch screen. The horizontal floating design allows for easy viewing of information while also allowing for peripheral observation of the road ahead. During driving, the instrument panel and the central control screen can interact with each other, ensuring safe driving without the need to shift focus.', 12),
(35, 'The EXEED TXL is equipped with front MacPherson independent suspension and rear multi-link independent suspension, meticulously crafted by German Benteler, integrating advanced manufacturing processes and high-precision modular assembly quality, making it a highly reliable and safe chassis system.', 12),
(36, 'The EXEED TXL is equipped with an ADAS advanced driving assistance system, which has 11 mainstream ADAS advanced driving assistance functions, allowing you to enjoy luxury-level safety features. It provides comprehensive protection for your travel at all times.', 12),
(37, 'The dimensions of the EXEED LX C-DM are 4538mm/1848mm/1699mm in length, width, and height respectively, with a wheelbase of 2670mm. The front and rear track widths are 1570mm each, and the vehicle can accommodate 5 people.', 13),
(38, 'The EXEED LX C-DM is equipped with dual motors and an engine, which can achieve pure electric, series, and parallel driving modes through the gearbox. With the 3-speed transmission, it offers a total of 11 gear options, making it suitable for various driving scenarios such as highways, long-distance trips, mountain roads, and gravel.', 13),
(39, 'The EXEED LX C-DM is equipped with various advanced features and equipment, including an intelligent connectivity system, panoramic sunroof, keyless entry, one-key start, automatic air conditioning, and cruise control.', 13),
(40, 'The EXEED LX C-DM is equipped with the Lion5.0 Lion system, with all models equipped with the Qualcomm Snapdragon 8155 chip. With the powerful chip, it effortlessly achieves one-touch integration of car entertainment, equipped with a 24.6-inch surround curved screen that operates smoothly.', 13),
(41, 'The dimensions of the EXEED VX are 4970mm1940mm1792mm, with a wheelbase of 2900mm and front/rear track widths of 1644mm. The vehicle can accommodate 7 people.', 14),
(42, 'The EXEED VX features the global advanced intelligent modular M3X Mars architecture 2.0, a superstructure that has evolved comprehensively. It is equipped with Michelin tires, which are quiet, durable, have low wind resistance, and provide long endurance while balancing sportiness and comfort.', 14),
(43, 'The EXEED VX is equipped with the latest 6th generation intelligent four-wheel drive system from BorgWarner, with millisecond-level response, all-terrain crossing capability, and seven driving modes for any road ahead.', 14),
(44, 'The dimensions of the EXEED RX are 4781mm x 1920mm x 1671mm in length, width, and height respectively, with a wheelbase of 2815mm and front and rear wheel track of 1641mm and 1642mm. The vehicle can accommodate 5 people.', 15),
(45, 'The EXEED RX is equipped with CDC electromagnetic suspension system and HDS chassis hydraulic vibration isolation system. It scans the road condition in real-time with millisecond-level precision, and adjusts the electronic damping adaptively. It provides a 30% improvement in comfort, with no water splashing on bumps, no tilting during turns.', 15),
(46, 'The EXEED RX is equipped with Level 2 intelligent driving assistance, including NOC high-speed navigation, automatic lane change during high-speed overtaking, automatic adjustment of cruise control speed, and automatic on/off ramp merging.', 15),
(47, 'The dimensions of the Chery iCAR 03 are 440619101715mm, with a wheelbase of 2715mm. The front and rear track widths are 1626mm and 1645mm respectively. The car can accommodate 5 people.\r\n', 16),
(48, 'The Chery iCAR 03 is equipped with a 15.6-inch ultra-wide-view central control screen that supports multi-touch. It provides a clear visual feast and enhances the sense of technology and futurism in the car. With the i-VA four-zone intelligent voice control, it offers a \"super\" intelligent interaction, unlocking a cooler driving experience.', 16),
(49, 'The Chery iCAR 03\'s intelligent cockpit not only brings unprecedented stunning aesthetics but also creates a sense of driving enjoyment and safety for young trendsetters. The iCAR 03 is also equipped with L2-level intelligent driving assistance functions and features the new generation of mature intelligent driving system from BOSCH. It offers over 20 driving assistance functions and provides 16 active safety features, ensuring the driving safety of users at all times.', 16),
(50, 'The dimensions of the Tiggo 8 are 4700*1860*1746mm (length/width/height), with a wheelbase of 2710mm. The front track is 1582mm, and the rear track is 1604mm. The car can accommodate 5-7 people.', 17),
(51, 'In terms of suspension, the Tiggo 8 uses a front MacPherson independent suspension and a rear multi-link independent suspension.', 17),
(52, 'The Tiggo 8 is equipped with a 7-speed wet dual-clutch transmission and a front-wheel drive system. It has a top speed of 200km/h.', 17),
(53, 'The dimensions of the Tiggo 8 Plus are 4722*1860*1745mm (length/width/height), with a wheelbase of 2710mm. The front track is 1582mm, and the rear track is 1604mm. The car can accommodate 5 people.', 18),
(54, 'The Tiggo 8 Plus is equipped with a 7-speed wet dual-clutch transmission and a front-wheel drive system. It has a top speed of 210km/h.', 18),
(55, 'The dimensions of the Tiggo 8 Pro are 4745*1860*1745mm (length/width/height), with a wheelbase of 2710mm. The front track is 1582mm, and the rear track is 1604mm. The car can accommodate 7 people.', 19),
(56, 'The Tiggo 8 Pro is equipped with an 8-speed automatic transmission (AT) and a front-wheel drive system. It has a top speed of 210km/h.', 19),
(57, 'The dimensions of the Tiggo 7 Plus Phev are 4530*1862*1696mm (length/width/height), with a wheelbase of 2670mm. The front track is 1570mm, and the rear track is 1570mm. The car can accommodate 5 people.', 20),
(58, 'The Tiggo 7 Plus Phev has a NEDC pure electric range of 100 kilometers and a comprehensive range of up to 1000 kilometers.', 20),
(59, 'Changan NEVO A05 has a body length, width and height of 4785mm1840mm1460mm, a wheelbase of 2765mm, and a front and rear track of 1570mm and 1580mm respectively. The perfect aspect ratio is 0.79, and its elegant posture is comparable to that of a luxury coupe.', 21),
(60, 'Changan NEVO A05\'s high-end wood grain interior brings a higher level of quality experience, and the technologically textured seams and perforated designs are exquisite and visible to the naked eye. Using a healthy fresh air purification system, the air in the car is always as fresh and healthy as the forest.', 21),
(61, 'Changan NEVO A05 has a built-in 18.99v battery pack and a 48l fuel tank, which is equivalent to a reserve of more than 160 kilowatt hours of electricity, and a 3.3kw external discharge private mobile power supply, which can be used without worry.', 21),
(62, 'Changan NEVO Q05 has a body length, width and height of 4539mm* 1865mm* 1680mm, and a wheelbase of 2656mm. The front and rear wheelbase is 1600mm, and the vehicle can carry 5 people.', 22),
(63, 'Changan NEVO Q05 is equipped with a smart cockpit. The APP can be used to turn on air conditioning, seat heating and other functions with one click. The car can purchase movie tickets, attraction tickets, hotel phone calls, etc., allowing you to travel freely and efficiently.', 22),
(64, 'Changan NEVO Q05 front door 3.96mm laminated soundproof glass uses 26 types of soundproof materials to effectively isolate road noise, wind noise and engine noise, creating a comfortable and quiet space.', 22),
(65, 'The Changan X5 PLUS has dimensions of 454018601590mm in length, width, and height respectively, with a wheelbase of 2715mm and front and rear track widths of 1580mm and 1570mm. The vehicle can accommodate 5 people.', 23),
(66, 'The Changan X5 PLUS is equipped with the EaglePilot fully voice-controlled automatic parking system, which includes 7 core technologies and covers most parking scenarios. It features 12 ultrasonic radar sensors, 6 1.2 million pixel ultra-high-definition cameras, and 360-degree obstacle detection.', 23),
(67, 'The Changan X5 PLUS is equipped with the FaceID3.0 facial recognition system, which includes infrared detection and upgraded 3D facial recognition. It provides precise, efficient, and secure recognition.', 23),
(68, 'The dimensions of Changan X7 PLUS are 474518701720mm (lengthwidthheight), with a wheelbase of 2786mm and front/rear track widths of 1590mm. The vehicle can accommodate 7 people.', 24),
(69, 'Changan X7 PLUS has an oversized body size, with flat-folding second and third-row seats that unlock to form a 190cm bed, providing an expanded \"camper\" space for comfortable relaxation.', 24),
(70, 'Changan X7 PLUS is equipped with a multi-link independent suspension, improving vehicle stability, reducing tire friction, and creating a more stable experience for family trips.', 24),
(71, 'The Changan Hunter has dimensions of 5630mm in length, 1930mm in width, and 1885mm in height. The front and rear track widths are 1610mm and 1630mm, respectively. The vehicle can accommodate 5 people.', 25),
(72, 'The Changan Hunter can run purely on electric power until the battery reaches a minimum of 8%. The range extender will then start charging, allowing the vehicle to run on pure electric power for approximately 15 kilometers.', 25),
(73, 'The Changan Hunter adopts the industry\'s first and leading efficient coaxial electric drive axle, integrating the motor, reducer, and axle tube design into one unit. With a lightweight all-aluminum shell design and optimized high-speed bearings, it can meet higher load requirements and improve the efficiency of the motor controller to 94%.', 25),
(74, 'The Changan Hunter has developed the industry\'s first \"one-key force injection\" feature, which efficiently supplements power during long-distance uphill climbs with a load of nearly 1 ton and an altitude difference of over 2000 meters. This ensures that the vehicle has abundant power output in fully loaded conditions, such as climbing long slopes and high-speed driving.', 25),
(75, 'The dimensions of the Changan Eado PLUS are 4730×1820×1505mm (length x width x height), with a wheelbase of 2700mm, front track of 1555mm, and rear track of 1566mm. The vehicle can accommodate 5 people.', 26),
(76, 'The Changan Eado PLUS has a front-wheel-drive layout, with hydraulic ring beam MacPherson independent suspension at the front and U-O Forming enclosed torsion beam suspension at the rear.\r\nThe Changan Eado PLUS is equipped with the PAB warning-assisted braking system, which can detect potential dangers ahead and provide intelligent graded warnings. It can issue an alarm as early as 1.4 seconds in advance. It is also equipped with a 540° high-definition panoramic imaging system.', 26),
(77, 'The Changan Eado PLUS features the PAB warning-assisted braking system, safety distance reminder, pre-collision warning, collision mitigation, ACC-SG adaptive cruise control, and more.', 26),
(78, 'The dimensions of the Changan Eado DT are 4575×1750×1525mm (length x width x height), with a wheelbase of 2610mm, front track of 1490mm, and rear track of 1480mm. The vehicle can accommodate 5 people.', 27),
(79, 'The Changan Eado DT has a front-wheel-drive layout, with MacPherson independent suspension at the front and torsion beam non-independent suspension at the rear. The vehicle structure is of a load-bearing type.', 27),
(80, 'It is equipped with various intelligent systems, including a 10.25-inch floating LCD display, intelligent trip computer, intelligent light control, in-call 3.0 intelligent vehicle connectivity system, and more.', 27),
(81, 'Practical features include engine electronic anti-theft, central locking, tire pressure monitoring, ABS anti-lock braking, electric sunroof, 3.5-inch LCD instrument cluster, reverse camera, 10.25-inch central control display, Bluetooth/car phone, factory connectivity/mirroring, manual air conditioning, and interior PM2.5 filtration device.', 27),
(82, 'The dimensions of the Changan UNI-V are 4680×1838×1430mm (length x width x height), with a wheelbase of 2750mm, front track of 1576mm, and rear track of 1586mm. The vehicle can accommodate 5 people.', 28),
(83, 'The Changan UNI-V offers 1.5T and 2.0T engines. The 1.5T version delivers a maximum horsepower of 188, while the 2.0T version delivers a maximum horsepower of 233. Both versions are paired with a 7-speed wet dual-clutch or an 8-speed automatic transmission.', 28),
(84, 'It adopts Changan\'s XPILOT intelligent driving assistance system, which includes Level 2 autonomous driving assistance, high-speed following, full-speed adaptive cruise control, and other functions to make driving more relaxed and safe.', 28),
(85, 'The Changan UNI-V is also equipped with APA6.0 remote intelligent parking, 540-degree panoramic imaging, intelligent connectivity system, and more.', 28),
(86, 'The dimensions of the Changan CS35 PLUS are 4330×1825×1660mm (length x width x height), with a wheelbase of 2600mm, front track of 1570mm, and rear track of 1570mm. The vehicle can accommodate 5 people.', 29),
(87, 'The Changan CS35 PLUS features advanced noise reduction technology, such as a silent timing chain system, RFF+HLA valve drive, low-noise fuel injection system, and TVDP shock absorber pulley, to greatly enhance driving comfort and quality.', 29),
(88, 'The Changan CS35 PLUS is equipped with the Blue Whale 7-speed wet dual-clutch transmission, and has front-wheel drive and EPS electric power steering.', 29),
(89, 'The dimensions of the Changan CS55 PLUS are 4539×1865×1680mm (length x width x height), with a wheelbase of 2656mm, front track of 1600mm, and rear track of 1600mm. The vehicle can accommodate 5 people.', 30),
(90, 'The CS55 PLUS features a 7-speed wet dual-clutch transmission and front-wheel drive. Its front suspension is MacPherson independent suspension, and the rear suspension is multi-link independent suspension. The vehicle structure is a load-bearing type.', 30),
(91, 'The CS55 PLUS is equipped with the American NEXTEV \"EPS Precision Tuning\" system, which enhances driving stability. It offers 3 modes of steering assistance selection, including comfort mode and sport mode. The CS55 PLUS also provides tire pressure monitoring, allowing direct observation of the tire pressure of all four tires.', 30),
(92, 'The length, width and height of Hyundai-Custo are 4950mm* 1850mm* 1734mm respectively, the wheelbase is 3055mm, the front wheelbase is 1607mm, and the rear wheelbase is 1632mm. The vehicle can carry 7 people.', 31),
(93, 'Hyundai-Custo comes standard with main and passenger airbags, front and rear side airbags, ABS anti-lock function, brake force distribution function, brake assist function, traction control function, body stability control function and tire pressure monitoring function.', 31),
(94, 'Hyundai-Custo has front and rear parking radar, reversing imaging, 3 driving modes to switch at will, engine start and stop technology, automatic parking function and uphill assist function.', 31),
(95, 'The length, width and height of Hyundai-mistra are 4780mm* 1815mm* 1460mm respectively, the wheelbase is 2770mm, the front wheelbase is 1574mm, and the rear wheelbase is 1585mm. The vehicle can carry 5 people.', 32),
(96, 'Hyundai-mistra\'s safety configuration includes main and passenger airbags, front and rear side airbags, front and rear head airbags, and child seat interfaces. It comes standard with ABS anti-lock function, braking force distribution function, brake assist function, and traction control function. Body stability control function and tire pressure monitoring function.', 32),
(97, 'The interior of Hyundai-mistra uses a large area of contrasting color design, leather seats, soft materials, piano paint decoration, and dual 12.3-inch super smart connected screens, which greatly enhances the sense of luxury and technology in the car.', 32),
(98, 'The dimensions of Hyundai LAFESTA are 4690mm/1790mm/1425mm, with a wheelbase of 2700mm and front and rear track widths of 1549mm. The vehicle can accommodate 5 people.', 33),
(99, 'The body lines of Hyundai LAFESTABLE are smooth and refined, with a high level of recognition.', 33),
(100, 'The banner-style waistline rises, giving it a strong sense of sportiness. In addition, when paired with the 18-inch wheel design, it enhances the overall sporty appearance even further.', 33),
(101, 'Hyundai LAFESTA features dynamic dual-exhaust pipes, drawing design inspiration from F1 race car rear bumpers. It adopts the dual-exhaust chrome-plated pipes unique to high-performance cars, achieving an exhilarating exhaust sound.', 33),
(102, 'Hyundai LAFESTA can use a smartphone as a Bluetooth key. It enables the smartphone to replace the car key and allows for convenient operations such as vehicle start/stop and multi-user sharing through Bluetooth pairing.', 33),
(103, 'The dimensions of the Hyundai Elantra are 4680*1810*1415mm (length*width*height), with a wheelbase of 2720mm. The front track is 1579mm, and the rear track is 1590mm. The vehicle can accommodate 5 people.', 34),
(104, 'The Hyundai Elantra features a continuously variable transmission (CVT) and front-wheel drive, with a top speed of up to 190 km/h.', 34),
(105, 'The front suspension of the Hyundai Elantra adopts MacPherson independent suspension, and the rear suspension adopts torsion beam non-independent suspension.', 34),
(106, 'The dimensions of the Hyundai Tucson are 4680*1865*1690mm (length*width*height), with a wheelbase of 2755mm. The front track is 1615mm, and the rear track is 1622mm. The vehicle can accommodate 5 people.', 35),
(107, 'The Hyundai Tucson features a 7-speed dual-clutch transmission (DCT) and front-wheel drive, with a top speed of up to 205 km/h.', 35),
(108, 'The front suspension of the Hyundai Tucson adopts MacPherson independent suspension, and the rear suspension adopts multi-link independent suspension.', 35),
(109, 'The dimensions of the Hyundai Sonata are 4955*1860*1445mm (length*width*height), with a wheelbase of 2890mm. The front track is 1610mm, and the rear track is 1617mm. The vehicle can accommodate 5 people.', 36),
(110, 'The Hyundai Sonata features an 8-speed automatic transmission and front-wheel drive, with a top speed of up to 240 km/h.', 36),
(111, 'The front suspension of the Hyundai Sonata adopts MacPherson independent suspension, and the rear suspension adopts multi-link independent suspension.', 36),
(112, 'The dimensions of the Honda e:NS1 are 4390mm/1790mm/1560mm, with a wheelbase of 2610mm and front and rear track widths of 1535mm and 1540mm respectively. The vehicle can accommodate 5 people.', 37),
(113, 'The interior design of the Honda e:NS1 is simple and stylish, with a large amount of soft materials wrapping around for a comfortable touch. The three-spoke multi-function steering wheel is paired with a full LCD instrument panel, making driving information clear at a glance.\r\n', 37),
(114, 'The center console of the Honda e:NS1 is equipped with a large touch screen and built-in intelligent connectivity system, supporting functions such as voice recognition, navigation, and entertainment. In addition, it is also equipped with practical features such as a panoramic sunroof, electrically adjustable seats, and rear air vents, providing passengers with a comfortable driving experience.', 37),
(115, 'The dimensions of the Honda Accord are 4980*1862*1449mm (length*width*height), with a wheelbase of 2830mm. The front track is 1591mm, and the rear track is 1613mm. The car can accommodate five people.', 38),
(116, 'The Honda Accord features a CVT transmission and front-wheel drive. It can reach a top speed of 186km/h.', 38),
(117, 'The front suspension of the Honda Accord adopts a MacPherson independent suspension, while the rear suspension utilizes a multi-link independent suspension.', 38),
(118, 'The dimensions of the Honda Civic are 4674*1802*1415mm (length*width*height), with a wheelbase of 2735mm. The front track is 1547mm, and the rear track is 1575mm. The car can accommodate five people.', 39),
(119, 'The Honda Civic features a CVT transmission and front-wheel drive. It can reach a top speed of 200km/h.', 39),
(120, 'The front suspension of the Honda Civic adopts a MacPherson independent suspension, while the rear suspension utilizes a multi-link independent suspension.', 39),
(121, 'The dimensions of the Honda Crider are 4766*1804*1509mm (length*width*height), with a wheelbase of 2730mm. The front track is 1520mm, and the rear track is 1512mm. The car can accommodate five people.', 40),
(122, 'The Honda Crider features a CVT transmission and front-wheel drive. It can reach a top speed of 190km/h.', 40),
(123, 'The front suspension of the Honda Crider adopts a MacPherson independent suspension, while the rear suspension utilizes a torsion beam non-independent suspension.', 40),
(124, 'The dimensions of the Honda Fit are 4095*1725*1567mm (length*width*height), with a wheelbase of 2530mm. The front track is 1496mm, and the rear track is 1484mm. The car can accommodate five people.', 41),
(125, 'The Honda Fit adopts a CVT transmission and features front-wheel drive. It can reach a top speed of 188km/h.', 41),
(126, 'The front suspension of the Honda Fit adopts a MacPherson independent suspension, while the rear suspension utilizes a torsion beam non-independent suspension.', 41),
(127, 'The dimensions of the Honda CR-V are 4703*1866*1690mm (length*width*height), with a wheelbase of 2700mm. The front track is 1608mm, and the rear track is 1623mm. The car can accommodate five people.', 42),
(128, 'The Honda CR-V is equipped with a CVT transmission and features front-wheel drive. It can reach a top speed of 188km/h.', 42),
(129, 'The front suspension of the Honda CR-V adopts a MacPherson independent suspension, while the rear suspension utilizes a multi-link independent suspension.', 42),
(130, 'The dimensions of the Toyota Allion are 4720mm/1780mm/1435mm, with a wheelbase of 2750mm. The front and rear track widths are 1531mm and 1535mm respectively, and the car can accommodate 5 people.', 43),
(131, 'The Toyota Allion is equipped with an L2 level autonomous driving assistance system, which includes functions such as adaptive cruise control, lane departure warning, lane keeping, and active braking.', 43),
(132, 'The Toyota Allion supports wireless phone connectivity, OTA upgrades, and the CarLife/CarPlay/HiCar mainstream platforms. It can also control functions such as air conditioning, windows, sunroof, and instrument panel through 30-second voice interaction.', 43),
(133, 'The dimensions of the Toyota bZ3 are 4725mm/1835mm/1475mm, with a wheelbase of 2880mm. The front and rear track widths are 1580mm. The car can accommodate 5 people.', 44),
(134, 'The Toyota bZ3 is built on the Toyota e-TNGA exclusive platform and is equipped with Toyota\'s specially developed BEV platform. It meets the diverse needs of consumers by combining various modules and units.', 44),
(135, 'The Toyota bZ3 adopts the iconic design features of the bZ family, with a strong mech style. The tires use the BluEarth-GT series tires from Yokohama, which focus on handling, energy saving, and durability. The wheel design is inspired by electric vehicles, helping to reduce the drag coefficient and leaning towards a sporty look.', 44),
(136, 'The dimensions of the Toyota Avalon are 4990/1850/1450mm (length/width/height), with a wheelbase of 2870mm. The front track is 1585mm, and the rear track is 1595mm. The vehicle can accommodate 5 people.', 45),
(137, 'The Toyota Avalon features an 8-speed automatic transmission with manual mode (AT), front-wheel drive, and a top speed of up to 210 km/h.', 45),
(138, 'The Avalon adopts variable suspension, with the spring\'s stiffness automatically adjusting according to needs.', 45),
(139, 'The dimensions of the Toyota Camry are 4885*1840*1455mm (length*width*height), with a wheelbase of 2825mm. The front track is 1575mm, and the rear track is 1585mm. The vehicle can accommodate 5 people.', 46),
(140, 'The Toyota Camry features an 8-speed automatic transmission with manual mode, front-wheel drive, and a top speed of up to 210 km/h.', 46),
(141, 'The Camry adopts MacPherson independent suspension for the front and E-type multi-link independent suspension for the rear. The multi-link suspension improves the wheel\'s ground contact performance, enhancing traction and improving handling and ride comfort.', 46),
(142, 'The dimensions of the Toyota Corolla are 4635*1780*1435mm (length*width*height), with a wheelbase of 2700mm. The front track is 1531mm, and the rear track is 1519mm. The vehicle can accommodate 5 people.', 47),
(143, 'The Toyota Corolla features a 10-speed continuously variable transmission (CVT) and front-wheel drive, with a top speed of up to 180 km/h.', 47),
(144, 'The Corolla\'s front suspension adopts MacPherson independent suspension, and the rear suspension adopts E-type multi-link independent suspension.', 47),
(145, 'The dimensions of the Toyota RAV4 are 4610*1865*1680mm (length*width*height), with a wheelbase of 2690mm. The front track is 1595mm, and the rear track is 1610mm. The vehicle can accommodate 5 people.', 48),
(146, 'The Toyota RAV4 features a 10-speed continuously variable transmission (CVT) and front-wheel drive, with a top speed of up to 180 km/h.', 48),
(147, 'The front suspension of the Toyota RAV4 adopts MacPherson independent suspension, and the rear suspension adopts multi-link independent suspension.', 48),
(148, 'The dimensions of the Toyota C-HR are 4390*1795*1565mm (length*width*height), with a wheelbase of 2640mm. The front track is 1550mm, and the rear track is 1550mm. The vehicle can accommodate 5 people.', 49),
(149, 'The Toyota C-HR features a 10-speed continuously variable transmission (CVT) and front-wheel drive, with a top speed of up to 185 km/h.', 49),
(150, 'The front suspension of the Toyota C-HR adopts MacPherson independent suspension, and the rear suspension adopts multi-link independent suspension.', 49),
(151, 'This car has its original factory paint and is free from any flaws or replacements on the exterior. The lighting system is functioning properly and the interior is clean. The electronic system is in normal condition. The engine and gearbox are in good working condition with no idle shaking and flexible steering. It is a one-owner vehicle in overall excellent condition.', 50),
(152, 'This car has its original factory paint and is free from any flaws or replacements on the exterior. The lighting system is functioning properly and the interior is clean. The electronic system is in normal condition. The engine and gearbox are in good working condition with no idle shaking and flexible steering. It is a one-owner vehicle in overall excellent condition.', 51),
(153, 'This car is in excellent condition with all performance components functioning properly. There have been no major impacts on the exterior or body structure. The interior components are functioning normally, and the wear and tear on the interior and seats are within normal limits with no signs of water damage. The electronic system is functioning properly. The engine and gearbox are in good working condition with no idle shaking and flexible steering. It is a one-owner vehicle in overall excellent condition.', 52),
(154, 'The exterior of the car shows no signs of dents or color difference, but there are some areas with repainted paint. There are minor flaws on the exterior and some parts have been replaced. The lighting system is functioning properly and the interior is clean. The electronic system is in normal condition. The engine and gearbox are in good working condition with no idle shaking and flexible steering. It is a one-owner vehicle in overall good condition.', 53),
(155, 'The exterior of this car has not been modified and is free from flaws. The paint is well maintained and the lighting system is functioning properly. The interior is clean with minor normal wear on the seats. The electronic system is in normal condition. The engine and gearbox are in good working condition, with no idle shaking and flexible steering. It is a one-owner vehicle in excellent overall condition.', 54);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`newcar_id`),
  ADD KEY `new_brand` (`new_brand`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cus_cars`
--
ALTER TABLE `cus_cars`
  ADD PRIMARY KEY (`registration_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `car_id` (`car_id`);

--
-- Indexes for table `detail_information`
--
ALTER TABLE `detail_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `infor_cars` (`infor_cars`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`),
  ADD KEY `faq_car` (`faq_car`);

--
-- Indexes for table `highlighted_features`
--
ALTER TABLE `highlighted_features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `highlight_cars` (`highlight_cars`);

--
-- Indexes for table `introduction`
--
ALTER TABLE `introduction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `intro_cars` (`intro_cars`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `newcar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cus_cars`
--
ALTER TABLE `cus_cars`
  MODIFY `registration_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_information`
--
ALTER TABLE `detail_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `highlighted_features`
--
ALTER TABLE `highlighted_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `introduction`
--
ALTER TABLE `introduction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`new_brand`) REFERENCES `brand` (`brand_id`);

--
-- Constraints for table `cus_cars`
--
ALTER TABLE `cus_cars`
  ADD CONSTRAINT `cus_cars_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `cus_cars_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `cars` (`newcar_id`);

--
-- Constraints for table `detail_information`
--
ALTER TABLE `detail_information`
  ADD CONSTRAINT `detail_information_ibfk_1` FOREIGN KEY (`infor_cars`) REFERENCES `cars` (`newcar_id`);

--
-- Constraints for table `faq`
--
ALTER TABLE `faq`
  ADD CONSTRAINT `faq_ibfk_1` FOREIGN KEY (`faq_car`) REFERENCES `cars` (`newcar_id`);

--
-- Constraints for table `highlighted_features`
--
ALTER TABLE `highlighted_features`
  ADD CONSTRAINT `highlighted_features_ibfk_1` FOREIGN KEY (`highlight_cars`) REFERENCES `cars` (`newcar_id`);

--
-- Constraints for table `introduction`
--
ALTER TABLE `introduction`
  ADD CONSTRAINT `introduction_ibfk_1` FOREIGN KEY (`intro_cars`) REFERENCES `cars` (`newcar_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

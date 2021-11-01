-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2021 at 10:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `detail_page_description` text DEFAULT NULL,
  `price` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`price`)),
  `imgName` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `detail_page_description`, `price`, `imgName`, `type`) VALUES
(1, 'Chisti Rosi Bio Vodka Weizen', 'Chisti Rosi bedeutet übersetzt \"rein wie Morgentau\". Es ist der erste 100% zertifizierte Bio-Wodka, der in Russland handgefertigt wird. Vom Korn bis zum Glas trifft Chisti Rosi die russischen, E.U. und US-amerikanische Biostandards.', NULL, '[{\"type\": \"0.7 L\", \"price\": \"3999\"}, {\"type\": \"0.5 L\", \"price\": \"2999\"}]', 'Chisti-Rosi-07.png,Chisti-Rosi-07-p-500.png,Chisti-Rosi-07-p-800.png,Chisti-Rosi-07.png', 1),
(2, 'Chisti Rosi Bio Vodka Roggen', 'Chisti Rosi in kleinen Chargen hergestellt und jede Flasche wird mit ihrer einzigartigen Nummer personalisiert. Der ausgewählte biologische Weizen von Chisti Rosi verleiht einen unverwechselbaren Geschmack und natürlichen Charakter.', NULL, '[{\"type\": \"0.7 L\", \"price\": \"3999\"}, {\"type\": \"0.5 L\", \"price\": \"2999\"}]', 'Чистые-Росы-07-из-ржаного-зерна-2020.png', 2),
(3, '\r\nChisti Rosi Bio Vodka Gerste', 'Chisti Rosi ist ein Produkt aus einer bemerkenswerten Verbindung von Natur und Handwerk, das mit Technologien hergestellt wird, die auf ökologischen Kreisläufen beruhen und die biologische Vielfalt und die Umwelt bewahren.', NULL, '[{\"type\": \"0.7 L\", \"price\": \"3999\"}, {\"type\": \"0.5 L\", \"price\": \"2999\"}]', 'barley.png,barley-p-500.png,barley-p-1080.png\',\'barley.png', 3),
(4, '\r\nChisti Rosi Bio Vodka wild Weizen', 'Der Bio-Weizen stammt von den Biobauern im Umkreis von 160 km um die Brennerei. Der preisgekrönte Geschmack stammt aus der Fermentation von Weizenmalzmaische, die in der seit 1899 in Betrieb befindlichen Kemlya-Destillerie hergestellt wird', NULL, '[{\"type\": \"ohne box\", \"price\": \"9999\"}, {\"type\": \"mit box\", \"price\": \"11499\"}]', 'bottle-3-red-2-1-1.png,bottle-3-red-2-1-1-p-500.png,bottle-3-red-2-1-1-p-800.png,bottle-3-red-2-1-1-p-1080.png,bottle-3-red-2-1-1.png', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

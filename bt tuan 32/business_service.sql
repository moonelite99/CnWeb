-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 08, 2020 lúc 11:58 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `business_service`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `biz_category`
--

CREATE TABLE `biz_category` (
  `BusinessID` int(11) NOT NULL,
  `CategoryID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `biz_category`
--

INSERT INTO `biz_category` (`BusinessID`, `CategoryID`) VALUES
(16, 'FISH'),
(17, 'HEALTH'),
(18, 'FISH'),
(19, 'SPORT'),
(20, 'SPORT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `business`
--

CREATE TABLE `business` (
  `BusinessID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Telephone` int(11) NOT NULL,
  `URL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `business`
--

INSERT INTO `business` (`BusinessID`, `Name`, `Address`, `City`, `Telephone`, `URL`) VALUES
(16, 'sdd', 'Ha Giang', 'Mu Cang Chai', 32424, '234'),
(17, 'sdd2', 'Ha Giang', 'Mu Cang Chai', 23423, '3443'),
(18, 'Cửa Hàng Cá', 'Ha Giang', 'Mu Cang Chai', 234234234, 'http://fishHG.com'),
(19, 'Cửa Hàng Đồ Thể Thao', 'Mê Linh', 'Hà Nội', 1234234, '	\r\nhttp://sportHN.com'),
(20, 'Cửa Hàng Đồ Thể Thao', 'Mê Linh', 'Hà Nội', 1234234, 'http://sportHN2.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `CategoryID` varchar(50) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`CategoryID`, `Title`, `Description`) VALUES
('AUTO', 'AUTO', 'Accessories for four cars'),
('FISH', 'FISH', 'assdf'),
('HEALTH', 'HEALTH', 'Dsàdsfds'),
('SCHOOL', 'SCHOOL', 'đã thêm'),
('SPORT', 'SPORT', 'thể thao');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `biz_category`
--
ALTER TABLE `biz_category`
  ADD KEY `fk_categories_CategoryID` (`CategoryID`),
  ADD KEY `fk_business_BusinessID` (`BusinessID`);

--
-- Chỉ mục cho bảng `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`BusinessID`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `business`
--
ALTER TABLE `business`
  MODIFY `BusinessID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `biz_category`
--
ALTER TABLE `biz_category`
  ADD CONSTRAINT `fk_business_BusinessID` FOREIGN KEY (`BusinessID`) REFERENCES `business` (`BusinessID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

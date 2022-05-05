-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 10:07 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esto`
--

-- --------------------------------------------------------

--
-- Table structure for table `baihoc`
--

CREATE TABLE `baihoc` (
  `MABH` int(11) NOT NULL,
  `MACHUONG` int(11) NOT NULL,
  `TENBH` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `VIDEO` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `MABT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `baihoc`
--

INSERT INTO `baihoc` (`MABH`, `MACHUONG`, `TENBH`, `VIDEO`, `MABT`) VALUES
(1, 1, ' Bài 1: Bảng chữ cái+ nguyên âm đơn+ bài mẫu', NULL, 14643),
(2, 1, 'Bài 2: Nguyên âm đôi + bài mẫu\r\n', NULL, 14643),
(3, 1, 'Bài 3: Phụ âm + bài mẫu', NULL, 14643),
(4, 1, 'Bài 4: Quy tắc luyến âm nối chữ + bài mẫu', NULL, 14643),
(5, 2, 'Bài 5: WHAT IS ?', NULL, 14643),
(6, 2, 'Bài 6: WHAT KIND OF (bổ sung)', NULL, 14643),
(7, 2, 'Bài 7: WHAT IS THE MAN LIKE?', NULL, 14643),
(8, 2, ' Bài 8: WHAT TIME? WHEN?', NULL, 14643),
(9, 2, 'Bài 9: HOBBY', NULL, 14643),
(10, 2, 'Bài 10: HOW MUCH? HOW MANY? (bổ sung)', NULL, 14643),
(11, 2, 'Bài 11: HOW?', NULL, 14643),
(12, 2, 'Bài 12: HOW LONG? (bổ sung)', NULL, 14643),
(13, 2, 'Bài 13: WHY? (bổ sung)', NULL, 14643),
(14, 5, 'Bài 14: A GOOD FRIEND AND A BAD FRIEND (bổ sung)', NULL, 14643),
(15, 5, 'Bài 15: ON THE PHONE (bổ sung)', NULL, 14643),
(16, 5, 'Bài 16: CÁCH THUYẾT TRÌNH', NULL, 14643),
(17, 5, 'Bài 17: CÁC BƯỚC CƠ BẢN ĐỂ DIỄN ĐẠT TỐT', NULL, 14643),
(18, 5, 'Bài 18: VĂN HÓA TRONG GIAO TIẾP', NULL, 14643),
(19, 5, 'Bài 19: ASKING DIRECTIONS', NULL, 14643),
(20, 5, 'Bài 20: FAMILY', NULL, 14643),
(21, 6, 'Bài 21: DAILY ACTIVITIES', NULL, 14643),
(22, 6, 'Bài 22: DESCRIBE YOUR SCHOOL (bổ sung)', NULL, 14643),
(23, 6, 'Bài 23: SHOPPING', NULL, 14643),
(24, 6, 'Bài 24: RENTING A ROOM (bổ sung)', NULL, 14643),
(25, 6, 'Bài 25: TRAVELING', NULL, 14643),
(26, 6, 'Bài 26: NEXT VACATION (bổ sung', NULL, 14643),
(27, 6, 'Bài 27: KINDS OF WEATHER (bổ sung)', NULL, 14643),
(28, 6, 'Bài 28: ILLNESS (bổ sung)', NULL, 14643),
(29, 6, 'Bài 29: STUDENT LIFE (bổ sung)', NULL, 14643),
(30, 6, 'Bài 30: INTERVIEW', NULL, 14643),
(31, 7, 'Bài 1: Mẫu câu thì, là..., từ, và', NULL, 0),
(32, 7, 'Bài 2: Mẫu câu thích, ghét, đối tượng của hành động', NULL, 0),
(33, 8, 'Bài 6: Mẫu câu Ví dụ như, mà, có (bổ nghĩa).', NULL, 0),
(34, 8, 'Bài 7: Mẫu câu Có, ở (đồ vật / người), thì.', NULL, 0),
(35, 9, 'Bài 1: Introduce yourself (Giới thiệu bản thân)', NULL, 0),
(36, 9, 'Bài 2: Numbers in English (Số trong tiếng Anh)', '', 0),
(39, 11, 'Bài 1: How to write an email to a friend - Part 1: Listening', NULL, 0),
(40, 11, 'Bài 2: How to write an email to a friend - Part 2: Speaking', NULL, 0),
(41, 12, 'Bài 3: A look inside - Part 1: Listening', NULL, 0),
(42, 12, 'Bài 4: A look inside - Part 2: Speaking', NULL, 0),
(43, 13, 'Bài 1: Giới thiệu bảng phiên âm, khái niệm âm tiết và trọng âm', NULL, 0),
(44, 14, 'Bài 2: Nguyên âm /i/ and /i:/', NULL, 0),
(45, 14, 'Bài 3: Nguyên âm /u/ and /u:/', NULL, 0),
(46, 14, 'Bài 4: Nguyên âm /ʌ/ and /a:/', NULL, 0),
(47, 14, 'Bài 5: Nguyên âm /ɒ/ and /ɔː/', NULL, 0),
(48, 14, 'Bài 6: Nguyên âm /ə/ and /ɜː/', NULL, 0),
(50, 14, 'Bài 7: Nguyên âm /e/ and /æ/', NULL, 0),
(51, 14, 'Bài 8: Nguyên âm /ɪə/, /ʊə/, /ai/ /ɔɪ/', NULL, 0),
(52, 14, 'Bài 9: Nguyên âm /əʊ/ /eə/ /aʊ/ /ei/', NULL, 0),
(53, 14, 'Bài 10: Phụ âm /p/ and /b/', NULL, 0),
(54, 14, 'Bài 11: Phụ âm /t/ and /d/', NULL, 0),
(55, 14, 'Bài 12: Phụ âm /tʃ/ và /dʒ/', NULL, 0),
(56, 14, 'Bài 13: Phụ âm /k/ and /g/', NULL, 0),
(57, 14, 'Bài 14: Phụ âm /f/ and /v/', NULL, 0),
(58, 14, 'Bài 15: Phụ âm /θ/ và /ð/', NULL, 0),
(59, 14, 'Bài 16: Phụ âm /s/ and /z/', NULL, 0),
(60, 14, 'Bài 17: Phụ âm /ʃ/ and /ʒ/', '', 0),
(61, 14, 'Bài 18: Phụ âm /m/ /n/ /ŋ/', NULL, 0),
(62, 14, 'Bài 19: Phụ âm /h/ /l/ /r/', NULL, 0),
(63, 14, 'Bài 20: Phụ âm /w/ /j/', NULL, 0),
(64, 14, 'Bài 21: Quy tắc và cách đọc từ đuôi s/es', NULL, 0),
(65, 14, 'Bài 22: Quy tắc và cách đọc từ đuôi ed', NULL, 0),
(66, 15, 'Bài 23: Bài luyện nói chủ đề Computer', NULL, 0),
(67, 15, 'Bài 24: Bài luyện nói chủ đề: Saying sorry', NULL, 0),
(68, 15, 'Bài 25: Bài luyện nói chủ đề: Music', NULL, 0),
(69, 15, 'Bài 26: Bài luyện nói chủ đề: Personality', NULL, 0),
(70, 15, 'Bài 27: Bài luyện nói chủ đề: Impressions', NULL, 0),
(71, 15, 'Bài 28: Bài luyện nói chủ đề: Success', NULL, 0),
(72, 16, 'Bài 29: Bài luyện nói chủ đề: How to learn English', NULL, 0),
(73, 16, 'Bài 30: Bài luyện nói chủ đề: How to get motivated', NULL, 0),
(74, 16, 'Bài 31: Bài luyện nói chủ đề: How to make friends', NULL, 0),
(75, 16, 'Bài 32: Bài luyện nói chủ đề: How to make someone happy', NULL, 0),
(76, 16, 'Bài 33: Bài luyện nói chủ đề: How to think clearly', NULL, 0),
(77, 16, 'Bài 34: Bài luyện nói chủ đề: How to be popular', NULL, 0),
(78, 16, 'Bài 35: Bài luyện nói chủ đề: How to act like a gentleman', NULL, 0),
(79, 17, 'Bài 36: Bài luyện nói chủ đề: Greetings', NULL, 0),
(80, 17, 'Bài 37: Bài luyện nói chủ đề: Can you say that again?', NULL, 0),
(81, 17, 'Bài 38: Bài luyện nói chủ đề: Giving advice', NULL, 0),
(82, 17, 'Bài 39: Bài luyện nói chủ đề: What time is it?', NULL, 0),
(83, 17, 'Bài 40: Bài luyện nói chủ đề: At the supermarket', NULL, 0),
(84, 17, 'Bài 41: Bài luyện nói chủ đề: Asking directions', NULL, 0),
(85, 17, 'Bài 42: Bài luyện nói chủ đề: Taking a vacation', NULL, 0),
(86, 17, 'Bài 43: Bài luyện nói chủ đề: Ordering a meal', NULL, 0),
(87, 17, 'Bài 44: Bài luyện nói chủ đề: At the post office', NULL, 0),
(88, 17, 'Bài 45: Bài luyện nói chủ đề: A night at the theater', NULL, 0),
(89, 18, 'Bài 1: Giới thiệu khóa học', NULL, 0),
(90, 19, 'Bài 2: Eating out: vocabulary\r\n', NULL, 0),
(91, 19, 'Bài 3: Eating out: question and answers', NULL, 0),
(92, 19, 'Bài 4: Eating out: conversation', NULL, 0),
(93, 19, 'Bài 5: Food around the world: question and answer P1', NULL, 0),
(94, 19, 'Bài 6: Food around the world: question and answer P2', NULL, 0),
(95, 19, 'Bài 7: Food around the world: question and answer P3', NULL, 0),
(96, 19, 'Bài 8: Lets see a movie: vocab', NULL, 0),
(97, 19, 'Bài 9: Lets see a movie: question and answer', NULL, 0),
(98, 19, 'Bài 10: Lets see a movie: describe a movie', NULL, 0),
(99, 19, 'Bài 11: What is on TV tonight?', NULL, 0),
(100, 19, 'Bài 12: What is your TV habit', NULL, 0),
(101, 19, 'Bài 13: Listening', NULL, 0),
(102, 19, 'Bài 14: A healthy lifestyle P1', NULL, 0),
(103, 19, 'Bài 15: A healthy lifestyle P2', NULL, 0),
(104, 19, 'Bài 16: Answering skill', NULL, 0),
(105, 19, 'Bài 17: Further Exercise', NULL, 0),
(106, 19, 'Bài 18: Sleep and Dream', NULL, 0),
(107, 19, 'Bài 19: True or false', NULL, 0),
(108, 19, 'Bài 20: Discussing questions', NULL, 0),
(109, 19, 'Bài 21: Sleep and Dream', NULL, 0),
(110, 19, 'Bài 22: Improve your memory', NULL, 0),
(111, 19, 'Bài 23: Do you have a good memory? P1', NULL, 0),
(112, 19, 'Bài 24: Do you have a good memory? P2', NULL, 0),
(113, 19, 'Bài 25: Giving direction', NULL, 0),
(114, 19, 'Bài 26: Plenty to do', NULL, 0),
(115, 19, 'Bài 27: Discussing questions', NULL, 0),
(116, 19, 'Bài 28: More options', NULL, 0),
(117, 19, 'Bài 29: Holidays P1', NULL, 0),
(118, 19, 'Bài 30: Holidays P2', NULL, 0),
(119, 19, 'Bài 31: Manners P1', NULL, 0),
(120, 19, 'Bài 32: Manners P2', NULL, 0),
(121, 19, 'Bài 33: Listening skills', NULL, 0),
(122, 19, 'Bài 34: Celebrities', NULL, 0),
(123, 19, 'Bài 35: My dream home P1', NULL, 0),
(124, 19, 'Bài 36: My dream home P2', NULL, 0),
(125, 19, 'Bài 37: My dream home P3', NULL, 0),
(126, 19, 'Bài 38: Hopes and dreams P1', '', 0),
(127, 19, 'Bài 39: Hopes and dreams P2', NULL, 0),
(128, 19, 'Bài 40: Kết thúc', NULL, 0),
(129, 19, 'Bài 41: Fill in the blank', '', 0),
(130, 20, 'Bài 42: Tổng kết và lưu ý', NULL, 0),
(131, 21, 'Bài 1: Giới thiệu khóa học', NULL, 0),
(132, 21, 'Bài 2: Xác lập mục đích học Tiếng Anh', NULL, 0),
(133, 21, 'Bài 3: Phân tích lỗi sai cơ bản khi học', NULL, 0),
(134, 21, 'Bài 4: Cơ sở khoa học', NULL, 0),
(135, 22, 'Bài 5: Let\'s get to know each other - Part 1', NULL, 0),
(136, 22, 'Bài 6: Let\'s get to know each other - Part 2', NULL, 0),
(137, 22, 'Bài 7: Let\'s get to know each other - Part 3', NULL, 0),
(138, 22, 'Bài 8: Personnal information - Part 1', NULL, 0),
(139, 22, 'Bài 9: Personnal information- Part 2', NULL, 0),
(140, 22, 'Bài 10: Personnal information - Part 3', NULL, 0),
(141, 22, 'Bài 11: People describing - Part 1', NULL, 0),
(142, 22, 'Bài 12: People describing- Part 2', NULL, 0),
(143, 22, 'Bài 13: People describing - Part 3', NULL, 0),
(144, 22, 'Bài 14: Your personality - Part 1', NULL, 0),
(145, 22, 'Bài 15: Your personality- Part 2', NULL, 0),
(146, 22, 'Bài 16: Your personality - Part 3', NULL, 0),
(147, 22, 'Bài 17: What are your interests? - Part 1', NULL, 0),
(148, 22, 'Bài 18: What are your interests? - Part 2', NULL, 0),
(149, 22, 'Bài 19: What are your interests? - Part 3', NULL, 0),
(150, 22, 'Bài 20: What sports do you like? - Part 1', NULL, 0),
(151, 22, 'Bài 21: What sports do you like? - Part 2', NULL, 0),
(152, 22, 'Bài 22: What sports do you like? - Part 3', NULL, 0),
(153, 22, 'Bài 23: Family- Part 1', NULL, 0),
(154, 22, 'Bài 24: Family - Part 2', NULL, 0),
(155, 22, 'Bài 25: Family - Part 3', NULL, 0),
(156, 22, 'Bài 26: Friends - Part 1', NULL, 0),
(157, 22, 'Bài 27: Friends - Part 2', NULL, 0),
(158, 22, 'Bài 28: Friends - Part 3', NULL, 0),
(159, 22, 'Bài 29: Shopping and clothing - Part 1', NULL, 0),
(160, 22, 'Bài 30: Shopping and clothing - Part 2', NULL, 0),
(161, 22, 'Bài 31: Shopping and clothing - Part 3', NULL, 0),
(162, 22, 'Bài 32: Shopping and clothing - Part 4', NULL, 0),
(163, 22, 'Bài 33: Saving and spending - Part 1', NULL, 0),
(164, 22, 'Bài 34: Saving and spending - Part 2', NULL, 0),
(165, 22, 'Bài 35: Saving and spending - Part 3', NULL, 0),
(166, 22, 'Bài 36: How was your trip - Part 1', NULL, 0),
(167, 22, 'Bài 37: How was your trip- Part 2', NULL, 0),
(168, 22, 'Bài 38: Travel near and far - Part 1', NULL, 0),
(169, 22, 'Bài 39: Travel near and far - Part 2', NULL, 0),
(170, 22, 'Bài 40: Travel near and far - Part 3', NULL, 0),
(171, 23, 'Bài 41: Tổng kết khóa học', NULL, 0),
(172, 24, 'Bài 1: What\'s your name? (Tên của bạn là gì?)', NULL, 0),
(173, 24, 'Bài 2: The Alphabet song (Bài hát bảng chữ cái Alphabet)', NULL, 0),
(174, 24, 'Bài 3: How are you? (Bạn có khỏe không?)', NULL, 0),
(175, 25, 'Bài 4: Numbers and How old are you? (Số đếm và hỏi tuổi)', NULL, 0),
(176, 25, 'Bài 5: School Supplies - part 1 (Các dụng cụ học tập)', NULL, 0),
(177, 25, 'Bài 6: School Supplies - part 2 (Các dụng cụ học tập)', NULL, 0),
(178, 25, 'Bài 7: Shapes (Các hình trong Tiếng Anh)', NULL, 0),
(179, 25, 'Bài 8: Art Supplies (Các dụng cụ nghệ thuật)', NULL, 0),
(180, 25, 'Bài 9: Colors - part 1 (Màu sắc - phần 1)', NULL, 0),
(181, 25, 'Bài 10: Colors - part 2 (Màu sắc - phần 2)', NULL, 0),
(182, 25, 'Bài 11: Toys - part 1 (Đồ chơi - phần 1)', NULL, 0),
(183, 25, 'Bài 12: Toys - part 2 (Đồ chơi - phần 2)', NULL, 0),
(184, 25, 'Bài 13: Family (Gia đình)', NULL, 0),
(185, 26, 'Bài 14: The Blue Paint (Sơn màu xanh da trời)', NULL, 0),
(186, 26, 'Bài 15: My turn! (Lượt của tôi mà!)', NULL, 0),
(187, 26, 'Bài 16: Cookies (Những chiếc bánh quy)', NULL, 0),
(188, 26, 'Bài 17: My kite! (Cái diều của tôi!)', NULL, 0),
(189, 26, 'Bài 18: Where\'s Danny? (Danny ở đâu rồi?)', NULL, 0),
(190, 26, 'Bài 19: I can\'t see (Tôi không thể nhìn thấy)', NULL, 0),
(191, 26, 'Bài 20: Please be quiet! (Làm ơn hãy trật tự!)', NULL, 0),
(192, 26, 'Bài 21: Are you ok? (Bạn có sao không?)', NULL, 0),
(193, 26, 'Bài 22: The senses (Các giác quan)', NULL, 0),
(194, 26, 'Bài 23: Oh, Danny. (Ôi, Danny.)', NULL, 0),
(195, 27, 'Bài 24: It\'s a book.', NULL, 0),
(196, 27, 'Bài 25: Hi! How are you?', NULL, 0),
(197, 27, 'Bài 26: Colors!', NULL, 0),
(198, 27, 'Bài 27: Let\'s share!', NULL, 0),
(199, 27, 'Bài 28: How many dolls?', NULL, 0),
(200, 27, 'Bài 29: Let\'s play together.', NULL, 0),
(201, 27, 'Bài 30: I like chicken!', NULL, 0),
(202, 27, 'Bài 31: Thank you!', NULL, 0),
(203, 27, 'Bài 32: I can!', NULL, 0),
(204, 27, 'Bài 33: Help me!', NULL, 0),
(205, 28, 'Bài 1: Vì sao ta cần học Anh văn', NULL, 0),
(206, 28, 'Bài 2: Học từ vựng thông minh', NULL, 0),
(207, 28, 'Bài 3: Từ đơn', NULL, 0),
(208, 28, 'Bài 4: Các từ đi đôi với nhau (Collocations)', NULL, 0),
(209, 28, 'Bài 5: Cụm từ chức năng (Expression)', NULL, 0),
(210, 28, 'Bài 6: Thành ngữ (Idioms)', NULL, 0),
(211, 29, 'Bài 7: Học ngữ pháp thông minh', NULL, 0),
(212, 29, 'Bài 8: Thì hiện tại đơn', NULL, 0),
(213, 29, 'Bài 9: Thì hiện tại tiếp diễn', NULL, 0),
(214, 29, 'Bài 10: Thì hiện tại hoàn thành', NULL, 0),
(215, 29, 'Bài 11: Thì hiện tại hoàn thành tiếp diễn', NULL, 0),
(216, 29, 'Bài 12: Câu chủ động – câu bị động', NULL, 0),
(217, 29, 'Bài 13: Câu điều kiện', NULL, 0),
(218, 29, 'Bài 14: Hòa hợp', NULL, 0),
(219, 29, 'Bài 15: So sánh', NULL, 0),
(220, 29, 'Bài 16: Phân từ', NULL, 0),
(221, 29, 'Bài 17: Mệnh đề quan hệ', NULL, 0),
(222, 30, 'Bài 18: Chiến lược học phát âm thông minh', NULL, 0),
(223, 30, 'Bài 19: Nguyên âm đơn', NULL, 0),
(224, 30, 'Bài 20: Nguyên âm đôi', NULL, 0),
(225, 30, 'Bài 21: Phụ âm cơ bản', NULL, 0),
(226, 30, 'Bài 22: Phụ âm khác (phức tạp)', NULL, 0),
(227, 30, 'Bài 23: Âm mạnh – âm nhẹ', NULL, 0),
(228, 30, 'Bài 24: Dấu nhấn', NULL, 0),
(229, 30, 'Bài 25: Ngữ điệu', NULL, 0),
(230, 30, 'Bài 26: Nối âm', NULL, 0),
(231, 30, 'Bài 27: Những lỗi phát âm thường gặp', NULL, 0),
(232, 30, 'Bài 28: Giọng Anh – giọng Mỹ', NULL, 0),
(233, 31, 'Bài 29: Bí quyết luyện nghe (phần 1)', NULL, 0),
(234, 31, 'Bài 30: Bí quyết luyện nghe (phần 2)', NULL, 0),
(235, 31, 'Bài 31: Xác định bối cảnh bài nghe', NULL, 0),
(236, 31, 'Bài 32: Xác định ý chính khi nghe', NULL, 0),
(237, 31, 'Bài 33: Suy luận ý của người nói', NULL, 0),
(238, 31, 'Bài 34: Ghi chú khi nghe', NULL, 0),
(239, 31, 'Bài 35: Những sai lầm khi nghe tiếng anh', NULL, 0),
(240, 32, 'Bài 36: Chiến lược học nói thông minh', NULL, 0),
(241, 32, 'Bài 37: Trả lời một câu hỏi', NULL, 0),
(242, 32, 'Bài 38: Giới thiệu bản thân', NULL, 0),
(243, 32, 'Bài 39: So sánh hai vấn đề', NULL, 0),
(244, 32, 'Bài 40: Làm một bài thuyết trình', NULL, 0),
(245, 33, 'Bài 41: Chiến lược học đọc thông minh', NULL, 0),
(246, 33, 'Bài 42: Tìm ý chính khi đọc và đọc theo cụm từ', NULL, 0),
(247, 33, 'Bài 43: Đọc quét', NULL, 0),
(248, 33, 'Bài 44: Những yếu tố tích cực đối với việc đọc', NULL, 0),
(249, 34, 'Bài 45: Kỹ thuật luyện viết thông minh', NULL, 0),
(250, 34, 'Bài 46: Lên ý tưởng cho bài viết & bố cục cơ bản của một bài viết', NULL, 0),
(251, 34, 'Bài 47: Đoạn văn: câu chủ đề và các câu hỗ trợ', NULL, 0),
(252, 34, 'Bài 48: Viết thư', NULL, 0),
(253, 34, 'Bài 49: Viết đoạn văn miêu tả', NULL, 0),
(254, 34, 'Bài 50: Viết đoạn văn kể chuyện', NULL, 0),
(255, 34, 'Bài 51: Viết đoạn văn giải thích', NULL, 0),
(256, 34, 'Bài 52: Viết một bài essay', NULL, 0),
(257, 34, 'Bài 53: Các lỗi thường gặp trong khi viết', NULL, 0),
(258, 9, 'Bài 3: Numbers and age in English (Số và cách nói tuổi )', NULL, 0),
(259, 9, 'Bài 4: Jobs/What do you do? (Cách nói về nghề nghiệp)', NULL, 0),
(260, 9, 'Bài 5: Family (Gia đình)', NULL, 0),
(261, 9, 'Bài 6: Hobbies (Diễn tả sở thích)', NULL, 0),
(262, 9, 'Bài 7: What do you like? ( Cách diễn tả sở thích )', NULL, 0),
(263, 9, 'Bài 8: Review lesson 1-7 (Ôn tập từ bài 1-7)', NULL, 0),
(264, 9, 'Bài 9: Ordinal numbers-Part 1 (Số thứ tự )', NULL, 0),
(265, 9, 'Bài 10: Ordinal numbers-Part 2 (Số thứ tự )', NULL, 0),
(266, 9, 'Bài 11: Days of the week (Các ngày trong tuần)', NULL, 0),
(267, 9, 'Bài 12: Months of the year - Part 1 (Các tháng trong năm)', NULL, 0),
(268, 9, 'Bài 13: Months of the year - Part 2 (Các tháng trong năm)', NULL, 0),
(269, 9, 'Bài 14: Months and dates (Cách nói ngày tháng trong tiếng Anh)', NULL, 0),
(270, 9, 'Bài 15: Practice \"months and dates\" (Luyện tập cách nói ngày tháng trong tiếng Anh)', NULL, 0),
(271, 9, 'Bài 16: Daily Activities at Home-Part 1 (Cách diễn tả thói quen ở nhà hàng ngày)', NULL, 0),
(272, 9, 'Bài 17: Daily Activities at Home-Part 2 (Cách diễn tả thói quen ở nhà hàng ngày)', NULL, 0),
(273, 9, 'Bài 18: Daily Activities at Home-Part 3 (Cách diễn tả thói quen ở nhà hàng ngày)', NULL, 0),
(274, 9, 'Bài 19: How to say the time in English - Part 1 (Cách nói giờ trong tiếng Anh)', NULL, 0),
(275, 9, 'Bài 20: How to say the time in English - Part 2 (Cách nói giờ trong tiếng Anh)', NULL, 0),
(276, 9, 'Bài 21: Frequency adverbs in English (Trạng từ chỉ tần suất)', NULL, 0),
(277, 9, 'Bài 22: What food do you like? - Part 1 ( Diễn tả sở thích ăn uống)', NULL, 0),
(278, 9, 'Bài 23: What food do you like? - Part 2 ( Diễn tả sở thích ăn uống)', NULL, 0),
(279, 9, 'Bài 24: What food do you like? - Part 3 ( Diễn tả sở thích ăn uống)', NULL, 0),
(280, 9, 'Bài 25: Weather- Part 1 ( Cách diễn tả thời tiết )', NULL, 0),
(281, 9, 'Bài 26: Weather- Part 2 ( Cách diễn tả thời tiết )', NULL, 0),
(282, 9, 'Bài 27: Seasons in a year ( Các mùa trong năm)', NULL, 0),
(283, 9, 'Bài 28: Tổng kết khóa học', NULL, 0),
(284, 35, 'Bài 1: Phương pháp học từ vựng thông minh (1)', 'https://www.youtube.com/embed/MmQEiCFTp1g', 0),
(285, 35, 'Bài 2: Phương pháp học từ vựng thông minh (2)', 'https://www.youtube.com/embed/9kQDvHiIRmw', 0),
(286, 35, 'Bài 3: Nâng cấp vốn từ vựng (1)', 'https://www.youtube.com/embed/m98nbBuwerA', 0),
(287, 35, 'Bài 4: Nâng cấp vốn từ vựng (2)', 'https://www.youtube.com/embed/FQLwx8bQWGo', 3),
(288, 36, 'Bài 5: Từ vựng là gì?', 'https://www.youtube.com/embed/u7NDHqbRr5Y', 0),
(289, 36, 'Bài 6: Ngữ pháp là gì?', 'https://www.youtube.com/embed/yGjczL8qArY', 0),
(290, 36, 'Bài 7: Phương pháp học ngữ pháp thông minh (1)', 'https://www.youtube.com/embed/LSgMGwTGjdk', 0),
(291, 36, 'Bài 8: Phương pháp học ngữ pháp thông minh (2)', 'https://www.youtube.com/embed/j9GE4Xtzt54', 0),
(292, 36, 'Bài 9: Những điểm ngữ pháp cần thiết cho IELTS (1)', 'https://www.youtube.com/embed/ZMCfZtFq05I', 0),
(293, 36, 'Bài 10: Những điểm ngữ pháp cần thiết cho IELTS (2)', 'https://www.youtube.com/embed/-z-IQ4Bo65Y', 0),
(294, 37, 'Bài 11: 3 cấu trúc câu cơ bản trong tiếng Anh', 'https://www.youtube.com/embed/4bWvNLsiKrY', 0),
(295, 37, 'Bài 12: Các lỗi viết câu cơ bản trong tiếng Anh', 'https://www.youtube.com/embed/YrvUzb_KKfE', 0),
(296, 37, 'Bài 13: Các lỗi viết câu cơ bản trong tiếng Anh', 'https://www.youtube.com/embed/Hgb2Efr6po8', 0),
(297, 37, 'Bài 14: Mẫu câu cần thiết cho IELTS (1)', 'https://www.youtube.com/embed/6_qPzzLnLAI', 0),
(298, 37, 'Bài 15: Mẫu câu cần thiết cho IELTS (2)', 'https://www.youtube.com/embed/2EUOYF4cGQY', 0),
(299, 38, 'Bài 16: Bố cục và dạng thức câu hỏi trong IELTS', 'https://www.youtube.com/embed/46InRMBVMyQ', 0),
(300, 38, 'Bài 17: Đọc lướt tìm ý chính', 'https://www.youtube.com/embed/PFv-G81uEBQ', 0),
(301, 38, 'Bài 18: Đọc quét tìm chi tiết', 'https://www.youtube.com/embed/hUkrLhwKZ3c', 0),
(302, 38, 'Bài 19: Đối phó với từ vựng trong bài đọc', 'https://www.youtube.com/embed/RITEIpSKGTw', 0),
(303, 38, 'Bài 20: Phương pháp luyện đọc trường kỳ', 'https://www.youtube.com/embed/_OS7DrqQO7s', 0),
(304, 39, 'Bài 21: Bố cục Task 1 và các dạng đề', 'https://www.youtube.com/embed/RlHg7Ie8Slc', 0),
(305, 39, 'Bài 22: Viết Intro và Outline', 'https://www.youtube.com/embed/pmx6Fb2mKgs', 0),
(306, 39, 'Bài 23: Task 1: Line graphs', 'https://www.youtube.com/embed/yTzFiqz62UE', 0),
(307, 39, 'Bài 24: Task 1: Process', 'https://www.youtube.com/embed/jw_OHTCwnUY', 0),
(308, 39, 'Bài 25: Task 1: Maps', 'https://www.youtube.com/embed/1VmMft9h1OU', 0),
(309, 39, 'Bài 26: Bố cục Task 2 và các dạng thức câu hỏi', 'https://www.youtube.com/embed/lVcW1lgqvdE', 0),
(310, 39, 'Bài 27: Viết Intro', 'https://www.youtube.com/embed/YO5RjezNUWI', 0),
(311, 39, 'Bài 28: Viết Body 1', 'https://www.youtube.com/embed/8Z-eAbbyzwg', 0),
(312, 39, 'Bài 29: Viết Body 2', 'https://www.youtube.com/embed/XU4aMO1-HOs', 0),
(313, 39, 'Bài 30: Viết Conclusion', 'https://www.youtube.com/embed/Vby2qtDTRSA', 0),
(314, 40, 'Bài 31: Bố cục bài nghe và các dạng thức câu hỏi', NULL, 0),
(315, 40, 'Bài 32: Phương pháp học nghe thông minh (1)', NULL, 0),
(316, 40, 'Bài 33: Phương pháp học nghe thông minh (2)', NULL, 0),
(317, 40, 'Bài 34: Kỹ năng thiết yếu khi làm bài nghe (1)', NULL, 0),
(318, 40, 'Bài 35: Kỹ năng thiết yếu khi làm bài nghe (2)', NULL, 0),
(319, 41, 'Bài 36: Một số khái niệm nền tảng về phát âm', NULL, 0),
(320, 41, 'Bài 37: Những lỗi phát âm phổ biến của người VN (1)', NULL, 0),
(321, 41, 'Bài 38: Những lỗi phát âm phổ biến của người VN (2)', NULL, 0),
(322, 41, 'Bài 39: Những lỗi phát âm phổ biến của người VN (3)', NULL, 0),
(323, 41, 'Bài 40: Phương pháp luyện phát âm công nghệ cao', NULL, 0),
(324, 42, 'Bài 41: Bố cục bài thi nói của IELTS', NULL, 0),
(325, 42, 'Bài 42: Part 1: Phương pháp trả lời thông minh', NULL, 0),
(326, 42, 'Bài 43: Part 2: Đối phó với 1 phút chuẩn bị', NULL, 0),
(327, 42, 'Bài 44: Part 2: Tận dung 2 phút nhỏ nhoi', NULL, 0),
(328, 42, 'Bài 45: Part 3: Bố cục câu trả lời hoàn mỹ', NULL, 0),
(329, 42, 'Bài 46: Part 3: Giải quyết vấn đề bí ý khi trả lời', NULL, 0),
(330, 42, 'Bài 47: Part 3: Khắc phục các lỗi chết người', NULL, 0),
(331, 42, 'Bài 48: Part 3: Tối ưu hoá câu trả lời với phát âm', NULL, 0),
(332, 42, 'Bài 49: Phương pháp luyện nói thông minh', NULL, 0),
(333, 42, 'Bài 50: Tổng kết', NULL, 0),
(335, 44, 'DEMO 1', NULL, 0),
(337, 44, 'DEMO 1', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bailam`
--

CREATE TABLE `bailam` (
  `MABL` int(11) NOT NULL,
  `MAHV` int(11) DEFAULT NULL,
  `MABT` int(11) DEFAULT NULL,
  `ACTIVE` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bailam`
--

INSERT INTO `bailam` (`MABL`, `MAHV`, `MABT`, `ACTIVE`) VALUES
(5, 202, 2, NULL),
(6, 202, 2, NULL),
(7, 202, 2, NULL),
(8, 202, 2, NULL),
(9, 202, 2, NULL),
(10, 202, 2, NULL),
(11, 202, 2, NULL),
(12, 202, 2, NULL),
(13, 202, 2, NULL),
(14, 202, 2, NULL),
(15, 202, 2, NULL),
(16, 202, 2, NULL),
(17, 202, 2, NULL),
(18, 202, 2, NULL),
(19, 202, 2, NULL),
(20, 202, 2, NULL),
(21, 202, 2, NULL),
(22, 202, 2, NULL),
(23, 202, 2, NULL),
(24, 202, 2, NULL),
(25, 202, 2, NULL),
(26, 202, 2, NULL),
(27, 202, 2, NULL),
(28, 202, 2, NULL),
(29, 202, 2, NULL),
(30, 202, 2, NULL),
(31, 202, 2, NULL),
(32, 202, 2, NULL),
(33, 202, 2, NULL),
(34, 202, 2, NULL),
(35, 202, 2, NULL),
(36, 202, 2, NULL),
(37, 202, 2, NULL),
(38, 202, 2, NULL),
(39, 202, 2, NULL),
(40, 202, 2, NULL),
(41, 202, 2, NULL),
(42, 202, 2, NULL),
(43, 202, 2, NULL),
(44, 202, 2, NULL),
(45, 202, 2, NULL),
(46, 202, 2, NULL),
(47, 202, 2, NULL),
(48, 202, 2, NULL),
(49, 202, 2, NULL),
(50, 202, 2, NULL),
(51, 202, 2, NULL),
(52, 202, 2, NULL),
(53, 202, 2, NULL),
(54, 202, 2, NULL),
(55, 202, 2, NULL),
(56, 202, 2, NULL),
(57, 202, 2, NULL),
(58, 202, 2, NULL),
(59, 202, 2, NULL),
(60, 202, 2, NULL),
(61, 202, 2, NULL),
(62, 202, 2, NULL),
(63, 202, 2, NULL),
(64, 202, 2, NULL),
(65, 202, 2, NULL),
(66, 202, 2, NULL),
(67, 202, 2, NULL),
(68, 202, 2, NULL),
(69, 202, 2, NULL),
(70, 202, 2, NULL),
(71, 202, 2, NULL),
(72, 202, 2, NULL),
(73, 202, 2, NULL),
(74, 202, 2, NULL),
(75, 202, 2, NULL),
(76, 202, 2, NULL),
(77, 202, 2, NULL),
(78, 202, 2, NULL),
(79, 202, 2, NULL),
(80, 202, 2, NULL),
(81, 202, 2, NULL),
(82, 202, 2, NULL),
(83, 202, 2, NULL),
(84, 202, 2, NULL),
(85, 202, 2, NULL),
(86, 202, 2, NULL),
(87, 202, 2, NULL),
(88, 202, 2, NULL),
(89, 202, 2, NULL),
(90, 202, 2, NULL),
(91, 202, 2, NULL),
(92, 202, 2, NULL),
(93, 202, 2, NULL),
(94, 202, 2, NULL),
(95, 202, 2, NULL),
(96, 202, 2, NULL),
(97, 202, 2, NULL),
(98, 202, 2, NULL),
(99, 202, 2, NULL),
(100, 202, 2, NULL),
(101, 202, 2, NULL),
(102, 202, 2, NULL),
(103, 202, 2, NULL),
(104, 202, 2, NULL),
(105, 202, 2, NULL),
(106, 202, 2, NULL),
(107, 202, 2, NULL),
(108, 202, 2, NULL),
(109, 202, 2, NULL),
(110, 202, 2, NULL),
(111, 202, 2, NULL),
(112, 202, 2, NULL),
(113, 202, 2, NULL),
(114, 202, 2, NULL),
(115, 202, 2, NULL),
(116, 202, 2, NULL),
(117, 202, 2, NULL),
(118, 202, 2, NULL),
(119, 202, 2, NULL),
(120, 202, 2, NULL),
(121, 202, 2, NULL),
(122, 202, 2, NULL),
(123, 202, 2, NULL),
(124, 202, 2, NULL),
(125, 202, 2, NULL),
(126, 202, 2, NULL),
(127, 202, 2, NULL),
(128, 202, 2, NULL),
(129, 202, 2, NULL),
(130, 202, 2, NULL),
(131, 202, 2, NULL),
(132, 202, 2, NULL),
(133, 202, 2, NULL),
(134, 202, 2, NULL),
(135, 202, 2, NULL),
(136, 202, 2, NULL),
(137, 202, 2, NULL),
(138, 202, 2, NULL),
(139, 202, 2, NULL),
(140, 202, 2, NULL),
(141, 202, 2, NULL),
(142, 202, 2, NULL),
(143, 202, 2, NULL),
(144, 202, 2, NULL),
(145, 202, 2, NULL),
(146, 202, 2, NULL),
(147, 202, 2, NULL),
(148, 206, 3, NULL),
(149, 206, 3, NULL),
(150, 206, 3, NULL),
(151, 206, 3, NULL),
(152, 206, 3, NULL),
(153, 206, 3, NULL),
(154, 206, 2, NULL),
(155, 206, 2, NULL),
(156, 206, 2, NULL),
(157, 206, 2, NULL),
(158, 206, 2, NULL),
(159, 206, 2, NULL),
(160, 206, 2, NULL),
(161, 206, 2, NULL),
(162, 206, 2, NULL),
(163, 206, 2, NULL),
(164, 206, 2, NULL),
(165, 206, 2, NULL),
(166, 206, 2, NULL),
(167, 206, 2, NULL),
(168, 206, 2, NULL),
(169, 206, 2, NULL),
(170, 206, 2, NULL),
(171, 206, 2, NULL),
(172, 206, 2, NULL),
(173, 206, 2, NULL),
(174, 206, 2, NULL),
(175, 206, 2, NULL),
(176, 206, 2, NULL),
(177, 206, 2, NULL),
(178, 206, 2, NULL),
(179, 206, 2, NULL),
(180, 206, 2, NULL),
(181, 206, 2, NULL),
(182, 206, 2, NULL),
(183, 202, 3, NULL),
(184, 202, 3, NULL),
(185, 201, 3, NULL),
(186, 201, 2, NULL),
(187, 202, 3, NULL),
(188, 202, 3, NULL),
(189, 201, 3, NULL),
(190, 201, 3, NULL),
(191, 202, 3, NULL),
(192, 202, 3, NULL),
(193, 202, 2, NULL),
(194, 202, 3, NULL),
(195, 211, 53498, NULL),
(196, 211, 53498, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `baithi`
--

CREATE TABLE `baithi` (
  `MABT` int(11) NOT NULL,
  `TENBT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TGBD` datetime DEFAULT NULL,
  `TGKT` datetime DEFAULT NULL,
  `MAGV` int(11) DEFAULT NULL,
  `TRANGTHAI` int(11) DEFAULT 0,
  `COMMENT` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `MANKD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `baithi`
--

INSERT INTO `baithi` (`MABT`, `TENBT`, `TGBD`, `TGKT`, `MAGV`, `TRANGTHAI`, `COMMENT`, `MANKD`) VALUES
(2, 'Kiem tra ', '2022-01-20 14:14:00', '2022-01-20 14:40:00', 25, 0, NULL, NULL),
(3, 'Test1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 9, 2, 'Bài thi chưa đạt chất lượng', 209),
(14643, 'test video', NULL, NULL, 21, 1, 'Không có ý kiến', 209),
(53498, 'abc', '2022-05-05 14:15:00', '2022-05-06 14:15:00', 39, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cauhoi`
--

CREATE TABLE `cauhoi` (
  `MACH` int(11) NOT NULL,
  `NOIDUNG` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `A` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `B` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `C` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `D` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CAUDUNG` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MADM` int(11) DEFAULT NULL,
  `MAGV` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cauhoi`
--

INSERT INTO `cauhoi` (`MACH`, `NOIDUNG`, `A`, `B`, `C`, `D`, `CAUDUNG`, `MADM`, `MAGV`) VALUES
(1, 'Test 1', 't1', 't2', 't3', 'Tat ca deu dung', 'A', 1, 25),
(2, 'Test 2', 't1', 't2', 't3', 't4', 'D', 1, 25),
(3, 'Test', 't1', 't2', 't3', 't4', 'A', 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `chungchi`
--

CREATE TABLE `chungchi` (
  `MACHUNGCHI` int(11) NOT NULL,
  `HOCVI` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ANHCHUNGCHI` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MAGV` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chungchi`
--

INSERT INTO `chungchi` (`MACHUNGCHI`, `HOCVI`, `ANHCHUNGCHI`, `MAGV`) VALUES
(2, 'Thạc sĩ khoa học máy tính', '7DUQ_bangthacsi.jpg', 15),
(3, 'Tiến sĩ mạng máy tính', 'LVeM_csharptoantap.jpg', 15),
(4, 'Thủ khoa học viên âm nhạc', 'ozrE_bangthacsi.jpg', 1),
(5, 'thạc sĩ', 'LqvH_csharptoantap.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chuonghoc`
--

CREATE TABLE `chuonghoc` (
  `MACHUONG` int(11) NOT NULL,
  `TENCHUONG` text NOT NULL,
  `MAKH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chuonghoc`
--

INSERT INTO `chuonghoc` (`MACHUONG`, `TENCHUONG`, `MAKH`) VALUES
(1, 'Phần 1: Phát âm tiếng Anh giọng Mỹ', 27),
(2, 'Phần 2: Từ vựng theo chủ đề nói kết hợp cách đặt câu hỏi', 27),
(5, 'Phần 3: Cụm từ diễn đạt theo chủ đề kết hợp ngữ pháp', 27),
(6, 'Phần 4: Tình huống diễn đạt thực tế', 27),
(7, 'Phần 1: NGỮ PHÁP PHẦN 1', 93),
(8, 'Phần 2: NGỮ PHÁP PHẦN 2', 93),
(9, 'Phần 1: Nội dung', 32),
(11, 'Phần 1: Chương 1: MY NEW SCHOOL', 100),
(12, 'Phần 2: Chương 2: MY HOME', 100),
(13, 'Phần 1: Giới thiệu khóa học', 28),
(14, 'Phần 2: Luyện phát âm chuẩn', 28),
(15, 'Phần 3: Luyện nói hay cấp độ đoạn văn ngắn', 28),
(16, 'Phần 4: Luyện nói hay cấp độ đoạn văn dài', 28),
(17, 'Phần 5: Luyện nói hay cấp độ hội thoại', 28),
(18, 'Phần 1: Giới thiệu khóa học', 29),
(19, 'Phần 2: Nội dung khóa học', 29),
(20, 'Phần 3: Tổng kết', 29),
(21, 'Phần 1: Phần mở đầu', 34),
(22, 'Phần 2: 12 chủ đề chào hỏi cơ bản', 34),
(23, 'Phần 3: Tổng kết', 34),
(24, 'Phần 1: Welcome (Chào đón)', 30),
(25, 'Phần 2: Phần 2 - Topics (Bài học với các chủ đề)', 30),
(26, 'Phần 3: Stories (Bài học với các câu chuyện ngắn ý nghĩa)', 30),
(27, 'Phần 4: Songs (Ôn tập qua bài hát Tiếng Anh)', 30),
(28, 'Phần 1: TĂNG 3000 TỪ VỰNG TIẾNG ANH THÔNG DỤNG TRONG 30 NGÀY', 31),
(29, 'Phần 2: CHẮC 10 NGỮ PHÁP TIẾNG ANH THÔNG DỤNG NHẤT TRONG GIAO TIẾP', 31),
(30, 'Phần 3: CHIẾN LƯỢC HỌC PHÁT ÂM CHUẨN TIẾNG ANH', 31),
(31, 'Phần 4: BỐN CHIẾN LƯỢC ĐỂ NGHE ĐƯỢC TIẾNG ANH', 31),
(32, 'Phần 5: BỐN CHIẾN LƯỢC HỌC PHẢN XẠ NÓI TIẾNG ANH', 31),
(33, 'Phần 6: CHIẾN LƯỢC ĐỌC TIẾNG ANH HIỂU NHANH', 31),
(34, 'Phần 7: KỸ THUẬT LUYỆN VIẾT TIẾNG ANH CHO NGƯỜI BẬN RỘN', 31),
(35, 'Phần 1: Từ vựng', 33),
(36, 'Phần 2: Ngữ pháp', 33),
(37, 'Phần 3: Cấu trúc câu', 33),
(38, 'Phần 4: Đọc', 33),
(39, 'Phần 5: Viết', 33),
(40, 'Phần 6: Nghe', 33),
(41, 'Phần 7: Phát âm', 33),
(42, 'Phần 8: Nói', 33),
(44, 'Chuong 1', 16);

-- --------------------------------------------------------

--
-- Table structure for table `ctbailam`
--

CREATE TABLE `ctbailam` (
  `MACT` int(11) NOT NULL,
  `MABL` int(11) DEFAULT NULL,
  `MACH` int(11) DEFAULT NULL,
  `DAPAN` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ctbailam`
--

INSERT INTO `ctbailam` (`MACT`, `MABL`, `MACH`, `DAPAN`) VALUES
(3, 186, 1, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `ctbaithi`
--

CREATE TABLE `ctbaithi` (
  `MABT` int(11) DEFAULT NULL,
  `MACH` int(11) DEFAULT NULL,
  `DIEM` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ctbaithi`
--

INSERT INTO `ctbaithi` (`MABT`, `MACH`, `DIEM`) VALUES
(2, 1, 7),
(2, 2, 3),
(3, 3, 7),
(53498, 1, NULL),
(53498, 2, NULL),
(53498, 3, NULL),
(14643, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon`
--

CREATE TABLE `cthoadon` (
  `MAHD` int(11) NOT NULL,
  `MAKH` int(11) NOT NULL,
  `MALH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cthoadon`
--

INSERT INTO `cthoadon` (`MAHD`, `MAKH`, `MALH`) VALUES
(25, 16, 2),
(28, 33, 0),
(32, 16, 1),
(33, 33, 0),
(34, 16, 1),
(35, 28, 0),
(36, 16, 1),
(37, 33, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ctkhuyenmai`
--

CREATE TABLE `ctkhuyenmai` (
  `MAKH` int(11) NOT NULL,
  `MAKM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ctkhuyenmai`
--

INSERT INTO `ctkhuyenmai` (`MAKH`, `MAKM`) VALUES
(16, 10);

-- --------------------------------------------------------

--
-- Table structure for table `ctlophoc`
--

CREATE TABLE `ctlophoc` (
  `MALH` int(11) NOT NULL,
  `MAHV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ctlophoc`
--

INSERT INTO `ctlophoc` (`MALH`, `MAHV`) VALUES
(1, 202),
(2, 202),
(1, 206),
(1, 202),
(1, 201);

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `MAHV` int(11) NOT NULL,
  `MAKH` int(11) NOT NULL,
  `SOSAO` int(11) DEFAULT NULL,
  `NOIDUNG` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MADM` int(11) NOT NULL,
  `TENDM` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `GIOITHIEUDM` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `CHITIETDM` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `ACTIVE` int(10) NOT NULL,
  `MADMCHA` int(11) NOT NULL DEFAULT 0,
  `CREATE_AT` timestamp NOT NULL DEFAULT current_timestamp(),
  `UPDATE_AT` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`MADM`, `TENDM`, `GIOITHIEUDM`, `CHITIETDM`, `ACTIVE`, `MADMCHA`, `CREATE_AT`, `UPDATE_AT`) VALUES
(1, 'Ngoại ngữ', '<p><span style=\"font-size:16px\"><strong>Trong cuộc sống hiện nay, kh&ocirc;ng thể phủ nhận tầm quan trọng của việc học ngoại ngữ. Việc th&ocirc;ng thạo ngoại ngữ sẽ gi&uacute;p cho bạn mở ra nhiều cơ hội lớn trong học tập cũng như c&ocirc;ng việc.&nbsp;</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Xuất ph&aacute;t từ điều n&agrave;y, ESTO đ&atilde; kết hợp với c&aacute;c giảng vi&ecirc;n gi&agrave;u chuy&ecirc;n m&ocirc;n x&acirc;y dựng n&ecirc;n những kh&oacute;a học ngoại ngữ online cực kỳ&nbsp;hữu &iacute;ch, đ&aacute;p ứng tối đa mọi nhu cầu học tập của học vi&ecirc;n.&nbsp;</strong></span></p>', '<h2><span style=\"font-size:24px\"><strong>Sở hữu 145 kh&oacute;a học ngoại ngữ ưu việt&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Khi nhắc đến kh&oacute;a học ngoại ngữ, nhiều học vi&ecirc;n sẽ nghĩ rằng chỉ để cập đến bộ m&ocirc;n tiếng Anh l&agrave; chủ yếu. Tuy nhi&ecirc;n, đến với ESTO, bạn c&ograve;n được nhiều hơn thế, bởi ESTO kh&ocirc;ng chỉ cung cấp c&aacute;c kh&oacute;a học tiếng Anh m&agrave; c&ograve;n c&oacute; 3 ngoại ngữ đang rất &ldquo;thịnh h&agrave;nh&rdquo; nhất hiện nay l&agrave; tiếng H&agrave;n, tiếng Nhật v&agrave; tiếng Trung. Điều n&agrave;y sẽ gi&uacute;p &ldquo;đ&aacute;nh bay&rdquo; nỗi lo trong việc chọn kh&oacute;a học ph&ugrave; hợp với ng&ocirc;n ngữ m&agrave; m&igrave;nh y&ecirc;u th&iacute;ch.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Với&nbsp;4 ngoại ngữ ch&iacute;nh sẽ được chia th&agrave;nh từng nh&oacute;m kiến thức v&agrave; tr&igrave;nh độ kh&aacute;c nhau. V&iacute; dụ như: cơ bản v&agrave; n&acirc;ng cao, giao tiếp, ngữ ph&aacute;p, luyện thi&hellip; Như vậy, c&aacute;c học vi&ecirc;n c&oacute; thể lựa chọn được kh&oacute;a học ph&ugrave; hợp với năng lực v&agrave; mục ti&ecirc;u m&agrave; m&igrave;nh đang mong muốn đạt được.&nbsp;</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>Học mọi l&uacute;c mọi nơi</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Ưu điểm lớn nhất m&agrave; c&aacute;c kh&oacute;a học ngoại ngữ online tr&ecirc;n ESTO&nbsp; mang lại đ&oacute; ch&iacute;nh l&agrave; bạn c&oacute; thể học mọi l&uacute;c mọi nơi. Do t&iacute;nh chất học online n&ecirc;n học vi&ecirc;n c&oacute; thể chủ động trong việc học m&agrave; kh&ocirc;ng bị g&ograve; b&oacute; về thời gian.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Ch&iacute;nh điều n&agrave;y sẽ gi&uacute;p cho bạn tiết kiệm thời gian học v&agrave; mang lại hiệu quả cao nhất trong qu&aacute; tr&igrave;nh tiếp nhận kiến thức. Đặc biệt, chi ph&iacute; m&agrave; bạn cần bỏ ra cho một kh&oacute;a học rẻ hơn gấp nhiều lần so với c&aacute;c trung t&acirc;m ngoại ngữ. Như vậy, ESTO đ&atilde; gi&uacute;p bạn giải quyết &ldquo;trọn g&oacute;i&rdquo; 2 vấn đề c&ugrave;ng l&uacute;c đ&oacute; l&agrave; t&agrave;i ch&iacute;nh v&agrave; thời gian.&nbsp;</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>Giảng vi&ecirc;n c&oacute; chuy&ecirc;n m&ocirc;n cao&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Đến với kh&oacute;a học ngoại ngữ tr&ecirc;n ESTO, bạn sẽ được &ldquo;cầm c&acirc;n chỉ mực&rdquo; bởi những giảng vi&ecirc;n gi&agrave;u chuy&ecirc;n m&ocirc;n như: Th.s Ruby Thảo Trần, Victoria Dương, Hannah Phạm, Thanh Tr&uacute;c, Vũ Th&ugrave;y Linh, EZ Language, Ng&ocirc; Trần Minh Thảo&hellip;&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">C&aacute;c giảng vi&ecirc;n tham gia giảng dạy ngoại ngữ tr&ecirc;n ESTO đều đạt c&aacute;c chứng chỉ xuất sắc của c&aacute;c cuộc thi trong nước v&agrave; quốc tế. Đặc biệt, c&aacute;ch thức giảng dạy, tr&igrave;nh b&agrave;y v&agrave; chia sẻ kiến thức của c&aacute;c giảng vi&ecirc;n đều rất khoa học, dễ hiểu v&agrave; cực kỳ th&uacute; vị. Do đ&oacute;, bạn sẽ kh&ocirc;ng phải qu&aacute; lo lắng về việc sẽ-ngủ-gật-trong-giờ-học.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Nếu việc tự học tại nh&agrave; qua s&aacute;ch vở, học qua trung t&acirc;m, trường lớp sẽ khiến bạn phải mất qu&aacute; nhiều thời gian mới c&oacute; thể tiếp nhận kiến thức, th&igrave; ESTO sẽ gi&uacute;p bạn khắc phục ho&agrave;n to&agrave;n vấn đề n&agrave;y.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Với 3 lợi &iacute;ch si&ecirc;u ưu việt m&agrave; c&aacute;c kh&oacute;a học ngoại ngữ tr&ecirc;n ESTO cung cấp cho bạn, chắc chắn sẽ gi&uacute;p việc chạm đến ước mơ, mục ti&ecirc;u của bạn trở n&ecirc;n dễ d&agrave;ng hơn bao giờ hết.&nbsp;</span></p>', 1, 0, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(2, 'Đời sống', '<p><span style=\"font-size:16px\"><strong>Một cơ thể khỏe mạnh c&ugrave;ng một tinh thần an y&ecirc;n ch&iacute;nh l&agrave; điều m&agrave; bất cứ ai cũng mong muốn c&oacute; được. Giờ đ&acirc;y, mong ước n&agrave;y của bạn sẽ trở th&agrave;nh hiện thực nhờ c&aacute;c kh&oacute;a học sức khỏe - giới t&iacute;nh m&agrave; UNICA cung cấp.&nbsp;</strong></span></p>', '<h2><span style=\"font-size:24px\"><strong>Được giảng dạy bởi c&aacute;c chuy&ecirc;n gia h&agrave;ng đầu&nbsp;</strong></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\">Lợi thế v&ocirc; c&ugrave;ng tuyệt vời m&agrave; bạn nhận được khi tham gia c&aacute;c kh&oacute;a học sức khỏe - giới t&iacute;nh tr&ecirc;n UNICA đ&oacute; ch&iacute;nh l&agrave; được giảng dạy bởi c&aacute;c chuy&ecirc;n gia h&agrave;ng đầu. Điển h&igrave;nh nhất l&agrave; Đại sứ Yoga Việt Nam: Nguyễn Hiếu v&agrave; một số giảng vi&ecirc;n kh&aacute;c như: Alex Vinh, b&aacute;c sĩ L&ecirc; Hải, Milena Nguyễn, Nguyễn Thị B&iacute;ch Ngọc, Đậu Thị Nhung&hellip;&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Với kinh nghiệm chuy&ecirc;n m&ocirc;n cao, kiến thức khoa học chuy&ecirc;n s&acirc;u, b&agrave;i bản v&agrave; khoa học, c&aacute;c giảng vi&ecirc;n sẽ gi&uacute;p bạn biết c&aacute;ch x&acirc;y dựng một cuộc sống hạnh ph&uacute;c v&agrave; khỏe mạnh hơn.&nbsp;</span></p>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>T&iacute;ch hợp nhiều chủ đề học</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Với mong muốn gi&uacute;p c&aacute;c học vi&ecirc;n c&oacute; được một cơ thể khỏe mạnh v&agrave; tinh thần t&iacute;ch cực, UNICA đ&atilde; kết hợp với c&aacute;c giảng vi&ecirc;n x&acirc;y dựng n&ecirc;n những kh&oacute;a học với nhiều chủ đề kh&aacute;c nhau.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Cụ thể, c&aacute;c chủ đề học sẽ bao gồm: sức khỏe, giảm c&acirc;n, giảm b&eacute;o, thiền, t&igrave;nh y&ecirc;u, Fitness, Massage v&agrave; giảm Stress. Đặc biệt, mỗi kh&oacute;a học đều mang t&iacute;nh chuy&ecirc;n m&ocirc;n cao, bởi sẽ tập trung v&agrave;o một vấn đề cụ thể. V&iacute; dụ như: Yoga trị liệu cột sống, Yoga cho tinh thần an y&ecirc;n, thiền ứng dụng, dinh dưỡng cho người giảm c&acirc;n&hellip;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Từ đ&oacute;, học vi&ecirc;n c&oacute; thể nắm được vấn đề sức khỏe của m&igrave;nh v&agrave; lựa chọn kh&oacute;a học ph&ugrave; hợp để cải thiện.&nbsp;</span></p>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>Chăm s&oacute;c bản th&acirc;n ngay tại nh&agrave;&nbsp;</strong></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\">Nếu như trước đ&acirc;y bạn phải đến c&aacute;c ph&ograve;ng gym giảm c&acirc;n, c&aacute;c trung t&acirc;m trị liệu, massage để cải thiện sức khỏe, th&igrave; giờ đ&acirc;y bạn ho&agrave;n to&agrave;n c&oacute; thể chăm s&oacute;c bản th&acirc;n ngay tại nh&agrave; nhờ c&aacute;c kh&oacute;a học sức khỏe - giới t&iacute;nh tr&ecirc;n UNICA.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Với gi&aacute; th&agrave;nh thấp, chất lượng ưu việt, chắc chắn c&aacute;c kh&oacute;a học n&agrave;y sẽ kh&ocirc;ng l&agrave;m bạn thất vọng về hiệu quả m&agrave; bạn nhận được trong thời gian ngắn nhất.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">V&igrave; vậy, h&atilde;y để UNICA chăm s&oacute;c bạn một c&aacute;ch to&agrave;n diện cả về thể chất v&agrave; tinh thần bằng những kh&oacute;a học sức khỏe - giới t&iacute;nh nh&eacute;!&nbsp;</span></p>', 1, 0, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(4, 'Ngôn ngữ lập trình', NULL, '<h2 dir=\"ltr\">&nbsp;</h2>\r\n\r\n<h2 dir=\"ltr\"><span style=\"font-size:24px\"><strong>Tầm quan trọng của ng&ocirc;n ngữ lập tr&igrave;nh</strong></span></h2>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Thời đại c&ocirc;ng nghệ b&ugrave;ng nổ k&eacute;o theo rất nhiều ng&agrave;nh nghề hay c&aacute;c lĩnh vực song song ph&aacute;t triển. Trong đ&oacute; nổi trội nhất vẫn l&agrave; sự ph&aacute;t triển của ng&agrave;nh c&ocirc;ng nghệ th&ocirc;ng tin. Thay đổi theo từng gi&acirc;y v&agrave; ng&agrave;y c&agrave;ng ph&aacute;t triển, hiện đại hơn. Một trong những yếu tố quan trọng nhất để gi&uacute;p ng&agrave;nh c&ocirc;ng nghệ th&ocirc;ng tin ph&aacute;t triển v&agrave; vươn xa ch&iacute;nh l&agrave; phải kể để c&aacute;c ng&ocirc;n ngữ lập tr&igrave;nh - nền m&oacute;ng vững chắc cho sự ph&aacute;t triển của ng&agrave;nh c&ocirc;ng nghệ th&ocirc;ng tin.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">C&aacute;c ng&ocirc;n ngữ lập tr&igrave;nh ng&agrave;y n&agrave;y được rất nhiều doanh nghiệp, c&ocirc;ng ty ch&uacute; trọng đến bởi tầm quan trọng của n&oacute; trong việc x&acirc;y dựng nền tảng doanh nghiệp, sản phẩm hay hệ điều h&agrave;nh doanh nghiệp,... C&oacute; thể thấy ng&ocirc;n ngữ lập tr&igrave;nh xuất hiện ở bất kỳ nơi đ&acirc;u v&agrave; kh&ocirc;ng thể thiếu b&oacute;ng d&aacute;ng của n&oacute; được. N&oacute; gi&uacute;p con người giải quyết, quản l&yacute;, t&iacute;nh to&aacute;n,... c&ocirc;ng việc một c&aacute;ch trơn tru, hiệu quả nhất. V&agrave; tất nhi&ecirc;n điều quan trọng ch&iacute;nh l&agrave; ng&ocirc;n ngữ lập tr&igrave;nh đưa thế giới l&ecirc;n một tầm cao mới, hiện đại, hiệu quả v&agrave; đơn giản ho&aacute; mọi c&ocirc;ng việc</span></p>\r\n\r\n<h2 dir=\"ltr\">&nbsp;</h2>\r\n\r\n<h2 dir=\"ltr\"><span style=\"font-size:24px\"><strong>Đến với thế giới ng&ocirc;n ngữ lập tr&igrave;nh của ESTO</strong></span></h2>\r\n\r\n<h2 dir=\"ltr\"><span style=\"font-size:16px\">Đến với ESTO bạn sẽ được gặp c&aacute;c chuy&ecirc;n gia h&agrave;ng đầu trong lĩnh vực c&ocirc;ng nghệ th&ocirc;ng tin với nhiều năm kinh nghiệm v&agrave; thực chiến nhiều dự &aacute;n lớn. Ngo&agrave;i ra c&aacute;c b&agrave;i giảng tại ESTO lu&ocirc;n được x&acirc;y dựng, l&agrave;m mới v&agrave; cập nhập li&ecirc;n tục những thay đổi, ph&aacute;t triển mới của ng&ocirc;n ngữ lập tr&igrave;nh h&agrave;ng ng&agrave;y để đưa đến cho học vi&ecirc;n c&aacute;c b&agrave;i giảng chất lượng nhất.&nbsp;</span></h2>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Ngo&agrave;i ra bạn c&ograve;n được hệ thống lại to&agrave;n bộ kiến thức cơ bản gi&uacute;p tạo nền tảng vững chắc. C&ugrave;ng với đ&oacute; l&agrave; r&egrave;n luyện khả năng s&aacute;ng tạo, tư duy trong việc thiết kế ng&ocirc;n ngữ lập tr&igrave;nh của bản th&acirc;n để đưa ra những sản phẩm chất lượng, tuyệt vời v&agrave; s&aacute;ng tạo nhất trong tương lai.</span></p>', 1, 7, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(5, 'Kinh doanh và khởi nghiệp', '<p><span style=\"font-size:16px\"><strong>Nếu bạn Startup thất bại hoặc kinh doanh gặp nhiều kh&oacute; khăn th&igrave; cũng đừng qu&aacute; lo lắng, bởi c&aacute;c kh&oacute;a học kinh doanh - khởi nghiệp tr&ecirc;n UNICA sẽ gi&uacute;p đỡ bạn. Đến với c&aacute;c kh&oacute;a học n&agrave;y, bạn c&oacute; thể tự tin khởi nghiệp th&agrave;nh c&ocirc;ng từ hai b&agrave;n tay trắng.</strong></span></p>', '<h2><span style=\"font-size:24px\"><strong>Kiếm tiền online dễ d&agrave;ng&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Hiện nay, kinh doanh online đang ng&agrave;y c&agrave;ng trở n&ecirc;n phổ biến với tốc độ ph&aacute;t triển ch&oacute;ng mặt. Cũng ch&iacute;nh điều n&agrave;y đ&atilde; đặt ra th&aacute;ch thức cho c&aacute;c nh&agrave; kinh doanh trong việc phải l&agrave;m sao để nắm vững thị trường v&agrave; kinh doanh th&agrave;nh c&ocirc;ng.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Xuất ph&aacute;t từ điều n&agrave;y, c&aacute;c kh&oacute;a học kinh doanh - khởi nghiệp tr&ecirc;n ESTO đ&atilde; được x&acirc;y dựng, nhằm biến ước mơ l&agrave;m gi&agrave;u trong thời đại c&ocirc;ng nghệ số của bạn th&agrave;nh hiện thực.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Theo đ&oacute;, kh&oacute;a học l&agrave;m&nbsp;kinh doanh - khởi nghiệp được chia th&agrave;nh th&agrave;nh từng nh&oacute;m chủ đề cụ thể, bao gồm: Kinh doanh online, kinh doanh, Startup, Kiếm tiền online, bất động sản, kinh doanh cafe, chứng kho&aacute;n, đầu tư forex.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>Tiếp cận tối đa c&aacute;c k&ecirc;nh kinh doanh&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Nhiều người Startup kh&ocirc;ng th&agrave;nh c&ocirc;ng do chưa biết c&aacute;ch tiếp cận tối đa c&aacute;c k&ecirc;nh kinh doanh. Ch&iacute;nh v&igrave; vậy, trong c&aacute;c kh&oacute;a học kinh doanh - khởi nghiệp, c&aacute;c giảng vi&ecirc;n sẽ tập trung khai th&aacute;c v&agrave; hướng dẫn bạn c&aacute;c k&ecirc;nh kinh doanh hiệu quả, cũng như c&aacute;ch sử dụng c&aacute;c k&ecirc;nh n&agrave;y.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Một số k&ecirc;nh kinh doanh th&agrave;nh c&ocirc;ng nhất hiện nay m&agrave; học vi&ecirc;n c&oacute; thể tiếp cận qua c&aacute;c kh&oacute;a học l&agrave;m kinh doanh như: Youtube, Ebay Dropshipping, Forex, Cryptocurrency, Amazon&hellip;&nbsp;</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>Chủ động hơn trong việc học kinh doanh</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">C&aacute;c kh&oacute;a học kinh doanh - khởi nghiệp tr&ecirc;n ESTO đều được thực hiện theo h&igrave;nh thức online, v&igrave; vậy người d&ugrave;ng ho&agrave;n to&agrave;n c&oacute; thể chủ động trong việc học. Bạn sẽ kh&ocirc;ng phải g&ograve; b&oacute; về thời gian giống như việc học ở c&aacute;c trung t&acirc;m hay đội nh&oacute;m.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Thay v&agrave;o đ&oacute;, bạn c&oacute; thể học bất cứ l&uacute;c n&agrave;o bạn cảm thấy thoải m&aacute;i v&agrave; c&oacute; thể tiếp thu tốt nhất, nhờ vậy m&agrave; hiệu quả đạt được cũng cao hơn. Đặc biệt, bạn sẽ được giảng dạy bởi những giảng vi&ecirc;n gi&agrave;u kinh nghiệm, gi&uacute;p cho việc tiếp nhận kiến thức được dễ d&agrave;ng hơn.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Nếu bạn muốn trở th&agrave;nh triệu ph&uacute; trong thời gian ngắn nhất th&igrave; nhất định đừng bỏ lỡ c&aacute;c kh&oacute;a học kinh doanh - khởi nghiệp tr&ecirc;n ESTO nh&eacute;!&nbsp;</span></p>', 1, 0, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(6, 'Lập trình Web', NULL, '<h2>&nbsp;</h2>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>Tự tay thiết kế một website ho&agrave;n chỉnh, chuy&ecirc;n nghiệp&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Lập tr&igrave;nh web l&agrave; một lĩnh vực phổ biến v&agrave; th&ocirc;ng dụng nhất hiện nay, bởi trong thời đại 4.0, việc tra cứu th&ocirc;ng tin v&agrave; ph&aacute;t triển mạng Internet l&agrave; điều rất cần thiết. Ch&iacute;nh điều n&agrave;y đặt ra y&ecirc;u cầu cho những nh&agrave; kinh doanh cũng như nh&agrave; thiết kế phải biết c&aacute;ch x&acirc;y dựng website ho&agrave;n chỉnh, chuy&ecirc;n nghiệp.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Nhằm gi&uacute;p c&aacute;c học vi&ecirc;n c&oacute; thể trở th&agrave;nh một nh&agrave; lập tr&igrave;nh web chuy&ecirc;n nghiệp, ESTO đ&atilde; x&acirc;y dựng những kh&oacute;a học li&ecirc;n quan đến lập tr&igrave;nh web b&agrave;i bản, được thực hiện bởi những giảng vi&ecirc;n gi&agrave;u chuy&ecirc;n m&ocirc;n. Dựa tr&ecirc;n nền tảng kiến thức thực tiễn kết hợp với t&iacute;nh thực h&agrave;nh cao, c&aacute;c kh&oacute;a học sẽ gi&uacute;p bạn c&oacute; thể tự tay thiết kế một website ho&agrave;n chỉnh.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Đặc biệt, c&aacute;c kiến thức trong kh&oacute;a học đều được x&acirc;y dựng theo lộ tr&igrave;nh từ cơ bản đến n&acirc;ng cao, v&igrave; vậy với những người mới bắt đầu l&agrave;m quen với lĩnh vực lập tr&igrave;nh web cũng c&oacute; thể nắm bắt kiến thức v&agrave; thực h&agrave;nh một c&aacute;ch dễ d&agrave;ng. Trong qu&aacute; tr&igrave;nh học, nếu c&oacute; vấn đề n&agrave;o m&agrave; bạn cần được giải đ&aacute;p hoặc chưa nắm r&otilde; sẽ được giảng vi&ecirc;n chỉ dẫn một c&aacute;ch tận t&igrave;nh, từ đ&oacute; việc lập tr&igrave;nh web sẽ kh&ocirc;ng c&ograve;n l&agrave; nỗi &aacute;m ảnh.&nbsp;</span></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>N&acirc;ng tầm kiến thức, hưởng ng&agrave;n ưu đ&atilde;i&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Thực tế, lập tr&igrave;nh web l&agrave; một lĩnh vực kh&aacute; phức tạp, đ&ograve;i hỏi t&iacute;nh s&aacute;ng tạo về mặt tư duy kết hợp với t&iacute;nh logic v&agrave; b&agrave;i bản. Do đ&oacute;, việc x&acirc;y dựng một lộ tr&igrave;nh học chuy&ecirc;n nghiệp l&agrave; điều rất cần thiết. V&agrave; với yếu tố n&agrave;y th&igrave; kh&oacute;a học lập tr&igrave;nh web tr&ecirc;n ESTO ho&agrave;n to&agrave;n đ&aacute;p ứng được cho bạn.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Cụ thể, giảng vi&ecirc;n sẽ chia sẻ cho bạn những kiến thức mang t&iacute;nh chuy&ecirc;n m&ocirc;n cao theo từng chủ đề nhất định như: Lập tr&igrave;nh Restful Webservice, lập tr&igrave;nh Android, lập tr&igrave;nh Backend cho website, c&aacute;ch x&acirc;y dựng website Responsive, lập tr&igrave;nh web tốc độ cao, x&acirc;y dựng website ho&agrave;n chỉnh với Laravel PHP Framework, lập tr&igrave;nh Wordpress Theme cho doanh nghiệp, lập tr&igrave;nh với kh&oacute;a học PHP&nbsp;online&hellip;&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">B&ecirc;n cạnh việc gi&uacute;p bạn n&acirc;ng tầm kiến thức về lập tr&igrave;nh web, c&aacute;c kh&oacute;a học tr&ecirc;n ESTO c&ograve;n gi&uacute;p bạn c&oacute; thể ho&agrave;n th&agrave;nh mục ti&ecirc;u của m&igrave;nh dễ d&agrave;ng hơn với những ưu đ&atilde;i, khuyến m&atilde;i hấp dẫn, c&oacute; mức ưu đ&atilde;i l&ecirc;n đến 50%. Điều n&agrave;y sẽ gi&uacute;p cho mức chi ph&iacute; m&agrave; bạn cần bỏ ra cho qu&aacute; tr&igrave;nh học kh&ocirc;ng c&ograve;n l&agrave; vấn đề.&nbsp;</span></p>', 1, 7, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(7, 'Công nghệ thông tin', '<p><span style=\"font-size:16px\"><strong>Trong thời đại c&ocirc;ng nghệ 4.0, việc nắm vững c&ocirc;ng nghệ th&ocirc;ng tin sẽ gi&uacute;p bạn l&agrave;m chủ được tương lai. Ch&iacute;nh v&igrave; vậy, UNICA đ&atilde; kết hợp c&ugrave;ng với những giảng vi&ecirc;n gi&agrave;u kinh nghiệm x&acirc;y dựng n&ecirc;n 56 kh&oacute;a học c&ocirc;ng nghệ th&ocirc;ng tin online b&agrave;i bản, chất lượng. V&agrave; nếu muốn th&agrave;nh c&ocirc;ng, bạn nhất định kh&ocirc;ng thể bỏ lỡ những kh&oacute;a học n&agrave;y.&nbsp;</strong></span></p>', '<h2>&nbsp;</h2>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>L&agrave;m chủ c&ocirc;ng nghệ số nhanh ch&oacute;ng&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">56 kh&oacute;a học c&ocirc;ng nghệ th&ocirc;ng tin online tr&ecirc;n ESTO được chia th&agrave;nh 3 lĩnh vực ch&iacute;nh l&agrave;: ng&ocirc;n ngữ lập tr&igrave;nh, lập tr&igrave;nh web v&agrave; lập tr&igrave;nh mobile. Đ&acirc;y l&agrave; 3 lĩnh vực quan trọng gi&uacute;p bạn c&oacute; thể l&agrave;m chủ được c&ocirc;ng nghệ v&agrave; ho&agrave;n th&agrave;nh mục ti&ecirc;u c&ocirc;ng việc đề ra.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Một số nội dung học quan trọng, hữu &iacute;ch m&agrave; c&aacute;c giảng vi&ecirc;n chia sẻ cho bạn bao gồm: lập tr&igrave;nh Web tr&igrave;nh độ cao, to&agrave;n tập ng&ocirc;n ngữ lập tr&igrave;nh, x&acirc;y dựng Website ho&agrave;n chỉnh, lập tr&igrave;nh Matlab, lập tr&igrave;nh LinQ to&agrave;n tập, lập tr&igrave;nh Wordpress, lập tr&igrave;nh Android&hellip;.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Nếu nắm chắc những kiến thức m&agrave; c&aacute;c giảng vi&ecirc;n chia sẻ, chắc chắn bạn sẽ l&agrave;m chủ được c&ocirc;ng nghệ số trong thời gian ngắn nhất.&nbsp;</span></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>Tiết kiệm chi ph&iacute; học hiệu quả&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Thực tế, việc học c&ocirc;ng nghệ th&ocirc;ng tin online ở c&aacute;c trung t&acirc;m sẽ tốn rất nhiều chi ph&iacute;, khiến cho nhiều người cảm thấy e ngại khi đăng k&yacute; học. Ch&iacute;nh v&igrave; vậy, c&aacute;c kh&oacute;a học c&ocirc;ng nghệ th&ocirc;ng tin tr&ecirc;n ESTO sẽ gi&uacute;p bạn giải quyết nỗi lo n&agrave;y.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Với gi&aacute; th&agrave;nh rẻ c&ugrave;ng với c&aacute;c ưu đ&atilde;i, khuyến m&atilde;i si&ecirc;u shock, chắc chắn sẽ biến ước mơ l&agrave;m chủ c&ocirc;ng nghệ th&ocirc;ng tin của bạn sớm th&agrave;nh hiện thực. Đặc biệt, bạn c&oacute; thể tăng hiệu quả việc tiếp nhận kiến thức nhờ lợi thế học mọi l&uacute;c mọi nơi, chủ động về thời gian cũng như địa điểm học.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Nếu bạn đang gặp kh&oacute; khăn trong việc tiếp nhận v&agrave; l&agrave;m chủ c&ocirc;ng nghệ th&ocirc;ng tin th&igrave; h&atilde;y đăng k&yacute; c&aacute;c kh&oacute;a học tr&ecirc;n ESTO ngay từ h&ocirc;m nay nh&eacute;!&nbsp;</span></p>', 1, 0, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(8, 'Tiếng Hàn', NULL, '<h2 dir=\"ltr\"><span style=\"font-size:24px\"><strong>Tiếng H&agrave;n c&oacute; thực sự quan trọng?</strong></span></h2>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Thời buổi hiện nay, ch&uacute;ng ta c&oacute; thể thấy y&ecirc;u cầu về tiếng Anh ng&agrave;y c&agrave;ng đ&ograve;i hỏi cao. Đầu ti&ecirc;n l&agrave; trong ng&agrave;nh gi&aacute;o dục th&igrave; tiếng Anh l&agrave; một trong những bộ m&ocirc;n kh&ocirc;ng thể thiếu. Tiếp đ&oacute; l&agrave; trong c&ocirc;ng việc v&agrave; giao tiếp th&igrave; tiếng Anh được coi l&agrave; một ti&ecirc;u chuẩn đ&aacute;nh gi&aacute; gắt gao. Tuy nhi&ecirc;n kh&ocirc;ng thể kh&ocirc;ng nhắc đến Tiếng H&agrave;n. Một trong những ng&ocirc;n ngữ đang c&oacute; xu hướng ph&aacute;t triển tại Việt Nam kh&ocirc;ng k&eacute;m g&igrave; tiếng Anh</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Những năm gần đ&acirc;y nền văn ho&aacute; của H&agrave;n Quốc du nhập v&agrave;o Việt Nam với tốc độ nhanh ch&oacute;ng như: ẩm thực, &acirc;m nhạc, thị trường c&ocirc;ng nghiệp tại Việt Nam, gi&aacute;o dục,... Thị trường xuất khẩu lao động, du học sang H&agrave;n cũng đang rất HOT hiện nay. Nhiều bạn trẻ đều bắt đầu thực hiện mơ ước n&agrave;y của m&igrave;nh bằng c&aacute;ch&nbsp;học tiếng H&agrave;n online</span></p>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<h2 dir=\"ltr\"><span style=\"font-size:24px\"><strong>Lựa chọn phương ph&aacute;p học tiếng H&agrave;n hiệu quả</strong></span></h2>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Nếu bạn sở hữu th&ecirc;m một ng&ocirc;n ngữ cho m&igrave;nh, đ&oacute; l&agrave; tiếng H&agrave;n th&igrave; sẽ c&oacute; rất nhiều cơ hội đang chờ bạn. Tuy nhi&ecirc;n với những bạn mới học tiếng H&agrave;n m&agrave; muốn nhanh ch&oacute;ng th&agrave;nh c&ocirc;ng th&igrave; cần phải lựa chọn phương ph&aacute;p học ph&ugrave; hợp.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">C&oacute; rất nhiều phương ph&aacute;p học tiếng H&agrave;n được c&aacute;c bạn trẻ lựa chọn để cải thiện vốn từ vựng của m&igrave;nh như: tự học tại nh&agrave;, học hỏi c&aacute;c phương ph&aacute;p tr&ecirc;n mạng, học tại c&aacute;c trung t&acirc;m, đến nơi nhiều người bản địa tự giao tiếp học hỏi,... Rất nhiều phương ph&aacute;p được đưa ra. Tuy nhi&ecirc;n vẫn c&ograve;n tồn tại nhiều trường hợp chưa t&igrave;m được giải ph&aacute;p ph&ugrave; hợp.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Điều kiện kinh tế hạn chế? Kh&ocirc;ng c&oacute; nhiều thời gian đi đến c&aacute;c trung t&acirc;m luyện thi? Bận rộn với c&ocirc;ng việc, gia đ&igrave;nh v&agrave; muốn t&igrave;m giải ph&aacute;p tiện lợi?</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">H&atilde;y đến với c&aacute;c kho&aacute; học tiếng H&agrave;n Online tại Unica thay v&igrave; tất bật cho việc học ở trung t&acirc;m th&igrave; bạn c&oacute; thể học tại nh&agrave;, học ở trường, học mọi l&uacute;c mọi nơi với c&aacute;c kh&oacute;a học tiếng H&agrave;n tr&ecirc;n UNICA.</span></p>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<h2 dir=\"ltr\"><span style=\"font-size:24px\"><strong>Kh&oacute;a học tiếng H&agrave;n online c&ugrave;ng chuy&ecirc;n gia h&agrave;ng đầu</strong></span></h2>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">C&aacute;c kh&oacute;a học tiếng H&agrave;n online tr&ecirc;n UNICA đều được thực hiện bởi những giảng vi&ecirc;n h&agrave;ng đầu về tiếng H&agrave;n, với tr&igrave;nh độ chuy&ecirc;n m&ocirc;n cao c&ugrave;ng phương ph&aacute;p giảng dạy khoa học, b&agrave;i bản.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Nhờ vậy, việc tiếp nhận kiến thức của bạn sẽ kh&ocirc;ng c&ograve;n nh&agrave;m ch&aacute;n m&agrave; trở n&ecirc;n nhẹ nh&agrave;ng v&agrave; th&uacute; vị hơn. Đặc biệt, trong qu&aacute; tr&igrave;nh học, c&aacute;c học vi&ecirc;n sẽ được kết hợp giữa học v&agrave; thực h&agrave;nh, nhằm tăng khả năng ghi nhớ tốt hơn.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Giảng vi&ecirc;n cũng sẽ cố gắng trong việc ph&aacute;t hiện lỗi sai, lỗ hổng m&agrave; bạn thường mắc phải trong qu&aacute; tr&igrave;nh học tiếng H&agrave;n, để khắc phục một c&aacute;ch kịp thời. Từ đ&oacute;, gi&uacute;p n&acirc;ng cao khả năng tiếng H&agrave;n của bạn để đạt được level cao nhất.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Chỉ cần thiết bị học của bạn được kết nối với Internet, bạn c&oacute; thể tự x&acirc;y dựng lộ tr&igrave;nh học cũng như thời gian biểu sao cho hợp l&yacute; nhất. Cũng ch&iacute;nh t&iacute;nh chủ động n&agrave;y m&agrave; hiệu quả tiếp nhận kiến thức được n&acirc;ng cao hơn so với những phương ph&aacute;p học truyền thống.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Th&ocirc;ng thường, c&aacute;c kh&oacute;a học tiếng H&agrave;n chỉ đề cập đến một lượng kiến thức nhất định theo form chủ đề c&oacute; sẵn, c&ograve;n việc thực h&agrave;nh th&igrave; bị hạn chế. Tuy nhi&ecirc;n, c&aacute;c kh&oacute;a học tiếng H&agrave;n online tr&ecirc;n UNICA th&igrave; c&oacute; sự kh&aacute;c biệt hơn.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Bởi, b&ecirc;n cạnh tiếp nhận c&aacute;c kiến thức cơ bản th&igrave; bạn c&ograve;n được thực h&agrave;nh luyện đề với từng cấp độ kh&aacute;c nhau. Đ&acirc;y ch&iacute;nh l&agrave; phương ph&aacute;p học th&ocirc;ng minh, gi&uacute;p bạn biết được lượng kiến thức m&agrave; m&igrave;nh tiếp nhận đang nằm ở mức độ n&agrave;o, từ đ&oacute; c&oacute; c&aacute;ch khắc phục lỗ hổng để mang lại kết quả tốt nhất.</span></p>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<h2 dir=\"ltr\"><span style=\"font-size:24px\"><strong>Chủ đề học tiếng H&agrave;n online đa dạng&nbsp;</strong></span></h2>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Kh&ocirc;ng chỉ được luyện đề, c&aacute;c kh&oacute;a học tiếng H&agrave;n online tr&ecirc;n UNICA c&ograve;n gi&uacute;p bạn &ldquo;mở mang tầm mắt&rdquo; với nhiều chủ đề học phong ph&uacute;, đa dạng. Điển h&igrave;nh như: học tiếng H&agrave;n sơ cấp, trung cấp, học tiếng H&agrave;n giao tiếp, học tiếng H&agrave;n cấp tốc, tiếng H&agrave;n du lịch, học tiếng H&agrave;n 3 th&aacute;ng&hellip;&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Với c&aacute;ch chia chủ đề như vậy sẽ gi&uacute;p cho việc tiếp nhận kiến thức của học vi&ecirc;n được thuận lợi hơn, ph&ugrave; hợp với những người mới bắt đầu v&agrave; cả những người đ&atilde; c&oacute; nền tảng.</span></p>', 1, 1, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(9, 'Tiếng anh', NULL, '<h2 dir=\"ltr\"><span style=\"font-size:24px\"><strong>Tầm quan trọng của Tiếng Anh</strong></span></h2>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Ng&agrave;y nay Tiếng Anh đ&atilde; trở th&agrave;nh ng&ocirc;n ngữ to&agrave;n cầu được nhiều quốc gia sử dụng. Đ&acirc;y cũng l&agrave; thứ ng&ocirc;n ngữ ch&iacute;nh được ưu &aacute;i sử dụng trong nhiều ng&agrave;nh nghề v&agrave; nhiều cuộc giao tiếp kh&aacute;c nhau. V&agrave; bạn c&oacute; thể thấy bộ m&ocirc;n tiếng Anh l&agrave; một trong những bộ m&ocirc;n kh&ocirc;ng thể thiếu trong chương tr&igrave;nh học của nhiều quốc gia tr&ecirc;n thế giới.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Với một đất nước đang ph&aacute;t triển như Việt Nam v&agrave; đang t&iacute;ch cực hội nhập kinh tế quốc tế th&igrave; việc ph&aacute;t triển ng&ocirc;n ngữ to&agrave;n cầu n&agrave;y l&agrave; bước nền quan trọng để giao tiếp với c&aacute;c nh&agrave; đầu tư, đối t&aacute;c nước ngo&agrave;i.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Chưa dừng lại ở đ&oacute;, việc trang bị th&ecirc;m cho m&igrave;nh một ng&ocirc;n ngữ tiếng Anh nữa sẽ gi&uacute;p bạn c&oacute; nhiều cơ hội thăng tiến trong c&ocirc;ng việc, mở rộng hơn c&aacute;c mối quan hệ, tự tin trong giao tiếp v&agrave; c&oacute; cơ hội tiếp cận với nguồn tri thức, văn ho&aacute; mới.</span></p>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<h2 dir=\"ltr\"><span style=\"font-size:24px\"><strong>Tuy nhi&ecirc;n vẫn c&ograve;n nhiều vấn đề đang tồn tại</strong></span></h2>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">D&ugrave; tiếng Anh mang đến cho ch&uacute;ng ta rất nhiều lợi &iacute;ch v&agrave; cơ hội nhưng hiện thực ho&aacute; ở Việt Nam vấn đề học tiếng Anh vẫn c&ograve;n đang gặp rất nhiều hạn chế.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Đầu ti&ecirc;n phải kể đến đ&oacute; ch&iacute;nh l&agrave; vấn đề quan trọng. D&ugrave; được đưa v&agrave;o nền gi&aacute;o dục Việt Nam tuy nhi&ecirc;n kh&ocirc;ng phải hầu hết c&aacute;c bạn học sinh, sinh vi&ecirc;n đều &ldquo;tiếp thu&rdquo; hết to&agrave;n bộ kiến thức để x&acirc;y dựng nền tảng tiếng Anh vững chắc. C&ugrave;ng với đ&oacute; l&agrave; chương tr&igrave;nh học tập đang ch&uacute; trọng nhiều v&agrave;o ngữ ph&aacute;p, từ vựng m&agrave; qu&ecirc;n mất việc bổ sung m&ocirc;i trường thực h&agrave;nh để ph&aacute;t triển v&agrave; t&ocirc;i luyện. Điều n&agrave;y khiến cho nhiều học sinh ở Việt Nam c&oacute; kỹ năng giao tiếp k&eacute;m.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Nhiều bạn c&oacute; t&igrave;nh trạng ch&aacute;n học, kh&ocirc;ng tiếp thu dẫn đến t&igrave;nh trạng &ldquo;chữ thầy trả thầy&rdquo;. D&ugrave; nhiều năm học hỏi những kiến thức đ&aacute;nh gi&aacute; bằng 0.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Vấn đề tiếp theo nữa m&agrave; rất nhiều người gặp phải đ&oacute; ch&iacute;nh l&agrave; việc học tập, r&egrave;n luyện th&ecirc;m kỹ năng qua c&aacute;c kh&oacute;a học. Nhiều người lựa chọn phương ph&aacute;p đến c&aacute;c trung tập dạy học chuy&ecirc;n nghiệp, nhiều người lại lựa chọn phương &aacute;n tham khảo c&aacute;c kỹ năng tự học tiếng Anh r&egrave;n luyện tại nh&agrave;. V&agrave; tất nhi&ecirc;n kh&ocirc;ng thể kh&ocirc;ng nhắc đến những người đang &ldquo;mất phương hướng&rdquo; chưa t&igrave;m được giải ph&aacute;p cho m&igrave;nh để thay đổi tiếng Anh của m&igrave;nh.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Hiểu được điều n&agrave;y ESTO h&acirc;n hạnh mang đến cho bạn c&aacute;c kho&aacute; học tiếng Anh online v&ocirc; c&ugrave;ng hấp dẫn chắc chắn sẽ gi&uacute;p bạn cải thiện vốn tiếng Anh của m&igrave;nh.</span></p>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<h2 dir=\"ltr\"><span style=\"font-size:24px\"><strong>ESTO mang đến giải ph&aacute;p to&agrave;n diện cho bạn qua c&aacute;c kho&aacute; học tiếng Anh online</strong></span></h2>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Đến với c&aacute;c kh&oacute;a học tiếng Anh trực tuyến tại ESTO bạn kh&ocirc;ng chỉ được tiếp cận với nền tảng l&yacute; thuyết cơ bản, m&agrave; c&ograve;n được kết hợp với những b&agrave;i thực h&agrave;nh cụ thể để c&oacute; thể ghi nhớ b&agrave;i học tốt hơn.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Đặc biệt, những b&agrave;i thực h&agrave;nh n&agrave;y đều rất sống động, phong ph&uacute;, th&uacute; vị chứ kh&ocirc;ng chỉ &aacute;p dụng l&yacute; thuyết một c&aacute;ch đơn thuần, kh&ocirc; khan. Do đ&oacute;, những bạn đang lo lắng kh&ocirc;ng thể &ldquo;gặm nhấm&rdquo; được m&ocirc;n tiếng Anh th&igrave; c&oacute; thể ho&agrave;n to&agrave;n y&ecirc;n t&acirc;m. Với đội ngũ gi&aacute;o vi&ecirc;n d&agrave;y dặn kinh nghiệm chắc chắn sẽ đồng h&agrave;nh c&ugrave;ng bạn trong suốt qu&aacute; tr&igrave;nh học tập của bạn để đạt được hiệu quả tối đa nhất.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Kiến thức của c&aacute;c kh&oacute;a học tiếng Anh Online tr&ecirc;n ESTO được tổng hợp theo từng chủ đề, từng cấp độ nhất định sao cho ph&ugrave; hợp với tr&igrave;nh độ của học vi&ecirc;n. Đối với những người &ldquo;mất gốc&rdquo; hay với những người đ&atilde; c&oacute; nền tảng cơ bản v&agrave; muốn n&acirc;ng cao th&ecirc;m kỹ năng, th&igrave; c&aacute;c kh&oacute;a học ho&agrave;n to&agrave;n c&oacute; thể đ&aacute;p ứng.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Việc x&acirc;y dựng c&aacute;c kh&oacute;a học tiếng Anh online cơ bản đến n&acirc;ng cao sẽ gi&uacute;p học vi&ecirc;n cảm thấy dễ d&agrave;ng hơn trong việc tiếp cận một lộ tr&igrave;nh học b&agrave;i bản. Cụ thể, bạn c&oacute; thể ph&aacute;t hiện ra lỗ hổng của m&igrave;nh để khắc phục, cũng như biết được những điểm mạnh m&agrave; m&igrave;nh cần n&acirc;ng cao.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Chắc chắn, sau khi kết th&uacute;c c&aacute;c kh&oacute;a học tiếng Anh tr&ecirc;n hệ thống học trực tuyến ESTO bạn kh&ocirc;ng chỉ cải thiện tr&igrave;nh độ tiếng Anh của m&igrave;nh, m&agrave; c&ograve;n ng&agrave;y c&agrave;ng y&ecirc;u th&iacute;ch v&agrave; hứng th&uacute; với ng&ocirc;n ngữ to&agrave;n cầu n&agrave;y.&nbsp;</span></p>', 1, 1, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(11, 'tiếng trung', NULL, '<h2><span style=\"font-size:24px\"><strong>Lộ tr&igrave;nh học tiếng Trung chuy&ecirc;n nghiệp&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Học tiếng Trung n&oacute;i ri&ecirc;ng v&agrave; c&aacute;c ng&ocirc;n ngữ kh&aacute;c n&oacute;i chung lu&ocirc;n cần một lộ tr&igrave;nh học b&agrave;i bản, chuy&ecirc;n nghiệp, bởi đ&acirc;y l&agrave; nền tảng quan trọng để đạt được kết quả tốt nhất. Nắm bắt được điều n&agrave;y, UNICA đ&atilde; kết hợp với những giảng vi&ecirc;n gi&agrave;u chuy&ecirc;n m&ocirc;n x&acirc;y dựng n&ecirc;n c&aacute;c kh&oacute;a học tiếng Trung với lộ tr&igrave;nh học v&ocirc; c&ugrave;ng khoa học.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Cụ thể, đối với những người mới bắt đầu học tiếng Trung th&igrave; c&oacute; thể tham khảo th&ecirc;m c&aacute;c kh&oacute;a học tương ứng với sơ cấp 1, sơ cấp 2, tiếng Trung cơ bản, cơ bản 1&hellip; C&ograve;n đối với những bạn đang muốn luyện đề thi th&igrave; c&oacute; thể tham khảo kh&oacute;a học tiếng Trung thực h&agrave;nh.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Hay bạn học tiếng Trung với mục đ&iacute;ch l&agrave; để đi du lịch th&igrave; c&oacute; thể tham khảo c&aacute;c kh&oacute;a học như: &ldquo;Học tiếng Quảng Đ&ocirc;ng, thong dong du lịch, tự tin mua b&aacute;n&rdquo;, &ldquo;Tiếng Trung thương mại v&agrave; du lịch&rdquo;, &ldquo;Tiếng Trung du lịch&rdquo;... C&aacute;c kh&oacute;a học tiếng Trung n&acirc;ng cao tr&ecirc;n UNICA cũng rất ph&ugrave; hợp với những bạn đang c&oacute; nhu cầu cải thiện tr&igrave;nh độ tiếng Trung.&nbsp;</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>Chinh phục tiếng Trung trong thời gian ngắn nhất&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Nhiều bạn lo lắng khi bắt đầu học tiếng Trung v&igrave; kh&ocirc;ng c&oacute; nhiều thời gian d&agrave;nh cho ng&ocirc;n ngữ n&agrave;y. Đừng qu&aacute; lo lắng, bởi c&aacute;c kh&oacute;a học tr&ecirc;n UNICA sẽ gi&uacute;p đỡ bạn c&oacute; thể chinh phục tiếng Trung trong thời gian ngắn nhất.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Cụ thể, c&aacute;c chủ đề học được chia th&agrave;nh từng nh&oacute;m ri&ecirc;ng với lượng kiến thức mang t&iacute;nh t&iacute;ch hợp cao. Do đ&oacute;, vẫn thời gian học như vậy, nhưng lượng kiến thức bạn tiếp nhận được sẽ nhiều hơn. Đặc biệt, việc chinh phục n&agrave;y kh&ocirc;ng chỉ đ&aacute;nh v&agrave;o một kỹ năng m&agrave; bao h&agrave;m nhiều kỹ năng kh&aacute;c nhau như: nghe, n&oacute;i, đọc, viết.&nbsp;</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>Ph&aacute;t triển thương mại hiệu quả với kho&aacute; học tiếng Trung tại UNICA&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Hiện nay, Trung Quốc đang được xem l&agrave; thị trường thương mại v&ocirc; c&ugrave;ng ph&aacute;t triển với nhiều lĩnh vực kh&aacute;c nhau. Do đ&oacute;, việc th&agrave;nh thạo tiếng Trung sẽ gi&uacute;p cho bạn c&oacute; thể chinh phục được thị trường thương mại ở đ&acirc;y một c&aacute;ch ho&agrave;n hảo nhất.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">C&aacute;c kh&oacute;a học tiếng Trung online&nbsp;tr&ecirc;n UNICA cũng t&iacute;ch hợp theo chủ đề tiếng Trung &nbsp;thương mại, tiếng Trung du lịch, gi&uacute;p cho học vi&ecirc;n c&oacute; thể tiếp nhận kiến thức một c&aacute;ch nhanh ch&oacute;ng v&agrave; ch&iacute;nh x&aacute;c nhất.&nbsp;</span></p>', 1, 1, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(12, 'tiếng nhật', NULL, '<h2><span style=\"font-size:24px\"><strong>Th&agrave;nh thạo tiếng Nhật với 4 kỹ năng</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">C&aacute;c kh&oacute;a học tiếng Nhật online tr&ecirc;n UNICA sẽ cung cấp cho bạn kiến thức cũng như c&aacute;c phương ph&aacute;p khoa học nhất, gi&uacute;p bạn chinh phục th&agrave;nh c&ocirc;ng 4 kỹ năng nghe, n&oacute;i, đọc, viết.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Đặc biệt, c&oacute; những kh&oacute;a học cơ bản, sơ cấp d&agrave;nh cho những người mới bắt đầu học tiếng Nhật, c&ugrave;ng với những kh&oacute;a học n&acirc;ng cao d&agrave;nh cho những người đ&atilde; c&oacute; nền tảng cơ bản v&agrave; muốn cải thiện tr&igrave;nh độ của m&igrave;nh. Như vậy, c&aacute;c kh&oacute;a học tiếng Nhật tr&ecirc;n UNICA thực sự ph&ugrave; hợp với bất kỳ ai đang c&oacute; nhu cầu học tiếng Nhật.&nbsp;</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>Kh&oacute;a học tiếng Nhật online t&iacute;ch hợp c&aacute;c phương ph&aacute;p giải đề&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Nhiều người học tiếng Nhật v&igrave; muốn vượt qua c&aacute;c kỳ thi để đủ điều kiện đi du học, xuất khẩu lao động hay đơn giản l&agrave; đi du lịch. Thấu hiểu điều đ&oacute;, UNICA đ&atilde; kết hợp với giảng vi&ecirc;n thực hiện c&aacute;c kh&oacute;a học t&iacute;ch hợp một số phương ph&aacute;p giải đề cụ thể.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">V&iacute; dụ như c&aacute;c kh&oacute;a học tiếng Nhật online: &ldquo;Học tiếng Nhật: Hướng dẫn c&aacute;ch giải v&agrave; dịch đề thi JLPT N3&rdquo;, &ldquo;Ngữ ph&aacute;p N3 - Thi một ph&aacute;t đậu lu&ocirc;n&rdquo;, &ldquo;Học tiếng Nhật: Luyện thi JLPT N5 ngữ ph&aacute;p&rdquo;...<br />\r\nNếu chăm chỉ luyện c&aacute;c đề thi trong kh&oacute;a học tiếng Nhật m&agrave; UNICA cung cấp, chắc chắn bạn sẽ c&oacute; thể &ldquo;vượt vũ m&ocirc;n&rdquo; một c&aacute;ch th&agrave;nh c&ocirc;ng mỹ m&atilde;n.&nbsp;</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>Tăng điểm nhanh ch&oacute;ng trong c&aacute;c kỳ thi&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Bạn muốn tăng điểm nghe 50% trong kỳ thi JLPT chỉ trong v&ograve;ng 1 th&aacute;ng, vậy h&atilde;y để UNICA gi&uacute;p bạn với kh&oacute;a học &ldquo;B&iacute; k&iacute;p tăng 50% điểm nghe JLPT trong 1 th&aacute;ng - N5&rdquo;.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">B&ecirc;n cạnh đ&oacute;, c&aacute;c kh&oacute;a học tiếng Nhật kh&aacute;c về kỹ năng, ngữ ph&aacute;p, luyện đề, kiến thức từ cơ bản đến n&acirc;ng cao cũng gi&uacute;p bạn chinh phục tiếng Nhật trong c&aacute;c kỳ thi một c&aacute;ch dễ d&agrave;ng.&nbsp;</span></p>', 1, 1, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(13, 'Tử vi - Phong thủy', NULL, '<h2>&nbsp;</h2>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>Học phong thủy từ cơ bản đến chuy&ecirc;n s&acirc;u&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Thực tế, phong thủy l&agrave; m&ocirc;n học kh&aacute; trừu tượng v&agrave; mơ hồ, do đ&oacute; nhiều người cảm thấy e ngại v&agrave; kh&oacute; khăn khi bắt đầu t&igrave;m hiểu về lĩnh vực n&agrave;y. Tuy nhi&ecirc;n, thực chất kh&ocirc;ng phải ho&agrave;n to&agrave;n như vậy, bởi bạn c&oacute; thể học phong thủy th&agrave;nh thạo với c&aacute;c kh&oacute;a học tr&ecirc;n ESTO.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">C&oacute; thể khẳng định như vậy bởi c&aacute;c kh&oacute;a học phong thủy online tr&ecirc;n ESTO sẽ chia sẻ cho bạn những kiến thức về phong thủy từ cơ bản đến chuy&ecirc;n s&acirc;u. Từ đ&oacute;, gi&uacute;p bạn c&oacute; c&aacute;i nh&igrave;n kh&aacute;i qu&aacute;t, cụ thể v&agrave; chi tiết hơn về lĩnh vực n&agrave;y. Sau khi kết th&uacute;c kh&oacute;a học, bạn cũng ho&agrave;n to&agrave;n c&oacute; thể tự xem phong thủy cho ch&iacute;nh m&igrave;nh v&agrave; những người xung quanh.&nbsp;</span></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>Ứng dụng phong thủy v&agrave;o cuộc sống dễ d&agrave;ng&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Dựa tr&ecirc;n nền tảng kiến thức về phong thủy từ cơ bản đến chuy&ecirc;n s&acirc;u m&agrave; giảng vi&ecirc;n chia sẻ trong kh&oacute;a học, bạn c&oacute; thể ứng dụng v&agrave;o cuộc sống một c&aacute;ch dễ d&agrave;ng, kể cả những lĩnh vực mang t&iacute;nh khoa học.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Cụ thể, bạn c&oacute; thể ứng dụng v&agrave;o một số lĩnh vực như: phong thủy trong bất động sản, phong thủy nh&agrave; ở căn bản, phong thủy ứng dụng cho doanh nh&acirc;n v&agrave; nh&agrave; quản l&yacute;, tử vi luận cầu t&agrave;i, phong thủy lựa chọn bạn đời - đối t&aacute;c h&oacute;a giải xung khắc, phong thủy đ&aacute;nh thức sự gi&agrave;u c&oacute;, phong thủy khai th&ocirc;ng t&agrave;i vận, phong thủy năm mới - đ&oacute;n đầu th&agrave;nh c&ocirc;ng&hellip;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">C&oacute; thể thấy, c&aacute;c chủ đề về phong thủy ứng dụng v&ocirc; c&ugrave;ng phong ph&uacute;, đa dạng. T&ugrave;y theo nhu cầu t&igrave;m hiểu của bản th&acirc;n m&agrave; bạn h&atilde;y lựa chọn kh&oacute;a học phong sao cho ph&ugrave; hợp.&nbsp;</span></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>Học phong thuỷ với mức chi ph&iacute; cực ưu đ&atilde;i&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Th&ocirc;ng thường, c&aacute;c lớp học về phong thủy ứng dụng c&oacute; lộ tr&igrave;nh kh&aacute; phức tạp v&agrave; mức chi ph&iacute; đắt đỏ. Tuy nhi&ecirc;n, đến với c&aacute;c kh&oacute;a học tr&ecirc;n ESTO, bạn ho&agrave;n to&agrave;n c&oacute; thể y&ecirc;n t&acirc;m về nỗi lo n&agrave;y. Bởi c&aacute;c kh&oacute;a học đều c&oacute; mức chi ph&iacute; v&ocirc; c&ugrave;ng rẻ. Chỉ cần bỏ ra v&agrave;i trăm ngh&igrave;n l&agrave; bạn c&oacute; thể sở hữu trong tay một bộ kiến thức khổng lồ về phong thủy ứng dụng.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">V&igrave; vậy, nếu muốn cải thiện t&agrave;i vận, h&atilde;y tham gia c&aacute;c kh&oacute;a học phong thủy online tr&ecirc;n ESTO ngay h&ocirc;m nay bạn nh&eacute;!</span></p>', 1, 2, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(14, 'Ẩm thực - Nấu ăn', NULL, '<h2 dir=\"ltr\">&nbsp;</h2>\r\n\r\n<h2 dir=\"ltr\"><span style=\"font-size:24px\"><strong>Ẩm thực - Nấu ăn - Tr&agrave;o lưu mới của giới trẻ</strong></span></h2>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Qua nhiều năm ph&aacute;t triển th&igrave; đến nay nhịp sống của x&atilde; hội thay đổi nhiều khiến cho nhu cầu cũng v&igrave; thế m&agrave; thay đổi. Từ &ldquo;cơm no &aacute;o ấm&quot; giờ đ&acirc;y con người ta lại c&oacute; nhu cầu &ldquo;ăn ngon mặc đẹp&quot;. Ăn uống ng&agrave;y c&agrave;ng được ch&uacute; trọng v&agrave; quan t&acirc;m nhiều hơn bởi n&oacute; ảnh hưởng trực tiếp đến sức khoẻ của con người.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Một trong những vấn đề đ&aacute;ng lo ngại của rất nhiều người đ&oacute; ch&iacute;nh l&agrave; vệ sinh an to&agrave;n thực phẩm. Rất nhiều h&agrave;ng qu&aacute;n v&igrave; lợi nhuận m&agrave; lựa chọn thực phẩm k&eacute;m chất lượng v&agrave; chế biến mất vệ sinh. Ch&iacute;nh bởi vậy m&agrave; nhiều người lựa chọn việc tự nấu nướng ở nh&agrave; để đảm bảo c&aacute;c ti&ecirc;u ch&iacute; ngon - sạch - rẻ.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Hiểu được nhu cầu cấp thiết n&agrave;y ESTO&nbsp; mang đến những kh&oacute;a học ẩm thực - nấu ăn được hướng dẫn trực tiếp bởi c&aacute;c chuy&ecirc;n gia ẩm thực, đầu bếp h&agrave;ng đầu Quốc tế với nhiều năm kinh nghiệm.&nbsp;&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<h2 dir=\"ltr\"><span style=\"font-size:24px\"><strong>Đến với ESTO bạn sẽ học được g&igrave;?</strong></span></h2>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Đến với ESTO bạn sẽ được tham gia những kh&oacute;a học chia sẻ kinh nghiệm nấu ăn cũng như tất tần tật những c&ocirc;ng thức b&iacute; mật v&agrave; những mẹo trong nh&agrave; bếp gi&uacute;p c&ocirc;ng việc nấu ăn của bạn thuận lợi ngon hơn rất nhiều. Bạn cũng sẽ biết được những c&aacute;ch để giữ trọn vẹn hương vị cũng như dinh dưỡng c&oacute; trong thực phẩm. Hay những c&aacute;ch b&agrave;y tr&iacute; m&oacute;n ăn sao cho sang trọng v&agrave; đẹp mắt nhất,...</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Tất cả đều sẽ được chia sẻ trong những kho&aacute; học hấp dẫn tại ESTO!</span></p>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<h2 dir=\"ltr\"><span style=\"font-size:24px\"><strong>C&aacute;c kho&aacute; học Ẩm thực - Nấu ăn hấp dẫn tại UNICA</strong></span></h2>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Rất nhiều c&aacute;c kho&aacute; học tại Tag ẩm thực - nấu ăn tr&ecirc;n ESTO đang chờ đ&oacute;n bạn. Dưới đ&acirc;y l&agrave; một số kho&aacute; học được đ&aacute;nh gi&aacute; 5 sao v&agrave; nhận được phản hồi rất tốt đến từ c&aacute;c học vi&ecirc;n sau khi ho&agrave;n th&agrave;nh kho&aacute; học.</span></p>', 1, 2, '2021-12-16 05:02:04', '2021-12-16 12:03:08');
INSERT INTO `danhmuc` (`MADM`, `TENDM`, `GIOITHIEUDM`, `CHITIETDM`, `ACTIVE`, `MADMCHA`, `CREATE_AT`, `UPDATE_AT`) VALUES
(15, 'Yoga', NULL, '<h2>&nbsp;</h2>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>Gi&uacute;p bạn khỏe hơn, trẻ hơn v&agrave; đẹp hơn ngay tại nh&agrave;</strong></span><span style=\"font-size:16px\"><strong>&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Theo c&aacute;c nghi&ecirc;n cứu về sức khỏe v&agrave; l&agrave;m đẹp, Yoga đang được xem l&agrave; một phương ph&aacute;p gi&uacute;p cải thiện sức khỏe v&agrave; sắc đẹp một c&aacute;ch hiệu quả, đặc biệt l&agrave; đối với c&aacute;c chị em phụ nữ. Xuất ph&aacute;t từ thực tiễn n&agrave;y, UNICA đ&atilde; kết hợp với c&aacute;c giảng vi&ecirc;n tr&ecirc;n UNICA x&acirc;y dựng n&ecirc;n c&aacute;c kh&oacute;a học Yoga ngay tại nh&agrave;, nhằm gi&uacute;p bạn khỏe hơn, trẻ hơn v&agrave; đẹp hơn.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Giờ đ&acirc;y, chẳng cần phải đến c&aacute;c trung t&acirc;m hay lớp học Yoga theo lịch tr&igrave;nh b&oacute; buộc, bạn cũng chẳng phải &aacute;p dụng chế độ ăn uống qu&aacute; ki&ecirc;ng khem m&agrave; vẫn c&oacute; được một v&oacute;c d&aacute;ng v&agrave; sức khỏe như &yacute;, nhờ &aacute;p dụng c&aacute;c b&agrave;i tập Yoga tr&ecirc;n UNICA. Chỉ cần bạn chăm chỉ tập luyện đ&uacute;ng phương ph&aacute;p v&agrave; đều đặn, nhất định bạn sẽ đạt được mục ti&ecirc;u.&nbsp;</span></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>Chủ đề học phong ph&uacute;&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Tương tự như c&aacute;c bộ m&ocirc;n kh&aacute;c, Yoga cũng được chia th&agrave;nh nhiều chủ đề học kh&aacute;c nhau t&ugrave;y theo nhu cầu tập luyện của từng người. V&agrave; đến với c&aacute;c kh&oacute;a học Yoga tr&ecirc;n UNICA, bạn ho&agrave;n to&agrave;n c&oacute; thể t&igrave;m được bất cứ chủ đề học Yoga n&agrave;o m&agrave; m&igrave;nh đang c&oacute; nhu cầu tập luyện.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Sở dĩ c&oacute; điều n&agrave;y l&agrave; v&igrave; c&aacute;c kh&oacute;a học Yoga tr&ecirc;n UNICA được t&iacute;ch hợp với nhiều chủ đề phong ph&uacute;, đa dạng. Cụ thể như: Yoga trẻ h&oacute;a v&agrave; l&agrave;m đẹp cho khu&ocirc;n mặt, Yoga chữa bệnh trị liệu cho cột sống, Yoga giảm c&acirc;n an to&agrave;n, Yoga trị liệu bệnh tiền đ&igrave;nh, Yoga dưỡng sinh d&agrave;nh cho nam giới, Yoga bầu - mẹ khỏe con th&ocirc;ng minh, Yoga chữa bệnh dạ d&agrave;y, Yoga cơ bản cho người mới bắt đầu&hellip;</span></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>Tập luyện c&ugrave;ng đại sứ Yoga</strong></span><span style=\"font-size:16px\"><strong>&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Khi tham gia c&aacute;c kh&oacute;a học Yoga tr&ecirc;n UNICA, bạn sẽ được tập luyện c&ugrave;ng c&aacute;c đại sứ Yoga Việt Nam, trong đ&oacute; kh&ocirc;ng thể kh&ocirc;ng kể đến giảng vi&ecirc;n Nguyễn Hiếu - CEO Zenlife Yoga.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Với kiến thức chuy&ecirc;n m&ocirc;n s&acirc;u rộng, khoa học, c&aacute;c giảng vi&ecirc;n sẽ cung cấp cho học vi&ecirc;n những b&agrave;i tập Yoga hiệu quả nhất. B&ecirc;n cạnh đ&oacute;, bạn c&ograve;n được giảng vi&ecirc;n chia sẻ những lời tư vấn về sức khỏe như chế độ ăn uống, chế độ tập luyện. Chắc chắn, sau khi ho&agrave;n th&agrave;nh c&aacute;c kh&oacute;a học Yoga tr&ecirc;n UNICA, bạn sẽ c&oacute; được một sức khỏe ho&agrave;n hảo c&ugrave;ng cuộc sống an nhi&ecirc;n, hạnh ph&uacute;c.&nbsp;</span></p>', 1, 2, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(17, 'Bất động sản', NULL, '<h2>&nbsp;</h2>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>Hướng dẫn kinh doanh bất động sản to&agrave;n diện&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Để c&oacute; thể kinh doanh th&agrave;nh c&ocirc;ng trong lĩnh vực bất động sản th&igrave; đ&ograve;i hỏi bạn phải thực sự nắm được c&aacute;ch thức học kinh doanh bất động sản to&agrave;n diện. Đ&oacute; kh&ocirc;ng chỉ đơn thuần l&agrave; kỹ năng đầu tư, khả năng nh&igrave;n nhận, ph&acirc;n t&iacute;ch biến động của thị trường, m&agrave; c&ograve;n biết nắm bắt c&aacute;c yếu tố kh&aacute;c như: phong thủy, &ldquo;thi&ecirc;n thời địa lợi nh&acirc;n h&ograve;a&rdquo;...&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">V&agrave; c&aacute;c kh&oacute;a học bất động sản tr&ecirc;n UNICA sẽ gi&uacute;p bạn nắm trọn tất cả c&aacute;c kiến thức n&agrave;y. V&iacute; dụ, bạn c&oacute; thể t&igrave;m hiểu về kỹ năng đầu tư bất động sản đỉnh cao theo m&ocirc; h&igrave;nh thu&ecirc; v&agrave; cho thu&ecirc; lại bất động sản, b&iacute; quyết gia tăng lợi nhuận bền vững trong kinh doanh bất động sản cho người c&oacute; &iacute;t vốn, b&iacute; quyết kiếm tiền m&ocirc;i giới bất động sản 4.0, phong thủy ứng dụng trong kinh doanh bất động sản, phong thủy nh&agrave; ở căn bản&hellip; Tất cả sẽ c&oacute; trong những chia sẻ đến từ chuy&ecirc;n gia trong những kho&aacute;&nbsp;học kinh doanh bất động sản</span></p>\r\n\r\n<p><span style=\"font-size:16px\">T&ugrave;y theo nhu cầu tiếp cận kiến thức m&agrave; bạn c&oacute; thể lựa chọn chủ đề học ph&ugrave; hợp trong c&aacute;c kh&oacute;a học về bất động sản m&agrave; UNICA chia sẻ. Việc lĩnh hội những kiến thức n&agrave;y thực sự quan trọng đối với qu&aacute; tr&igrave;nh kinh doanh của bạn.&nbsp;</span></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>Giải m&atilde; th&agrave;nh c&ocirc;ng khi học kinh doanh v&agrave; m&ocirc;i giới bất động sản</strong></span><span style=\"font-size:16px\"><strong>&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Kinh doanh bất động sản n&oacute;i chung v&agrave; m&ocirc;i giới bất động sản n&oacute;i ri&ecirc;ng lu&ocirc;n l&agrave; b&agrave;i to&aacute;n khiến nh&agrave; đầu tư, người kinh doanh phải đau đầu. V&agrave; để c&oacute; thể th&agrave;nh c&ocirc;ng th&igrave; bắt buộc người trong cuộc phải biết c&aacute;ch giải m&atilde; chuẩn x&aacute;c.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Trong c&aacute;c kh&oacute;a học bất động sản tr&ecirc;n UNICA, c&aacute;c giảng vi&ecirc;n sẽ hướng dẫn bạn c&aacute;ch giải m&atilde; th&agrave;nh c&ocirc;ng khi kinh doanh v&agrave; m&ocirc;i giới bất động sản. H&igrave;nh thức giải m&atilde; n&agrave;y được t&iacute;ch hợp dựa tr&ecirc;n kiến thức chuy&ecirc;n m&ocirc;n v&agrave; kinh nghiệm thực tiễn. V&igrave; vậy, sau kh&oacute;a học, nh&agrave; đầu tư c&oacute; thể ho&agrave;n to&agrave;n y&ecirc;n t&acirc;m khi vận dụng v&agrave;o m&ocirc; h&igrave;nh kinh doanh của m&igrave;nh.&nbsp;</span></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>B&iacute; quyết chăm s&oacute;c kh&aacute;ch h&agrave;ng để tăng khả năng chốt đơn&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Kh&aacute;ch h&agrave;ng ch&iacute;nh l&agrave; yếu tố quan trọng nhất quyết định đến khả năng chốt đơn trong bất động sản. Do đ&oacute;, c&aacute;c nh&agrave; đầu tư cần nắm được những b&iacute; quyết chăm s&oacute;c kh&aacute;ch h&agrave;ng tối ưu, đặc biệt l&agrave; đối với những kh&aacute;ch h&agrave;ng tiềm năng.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Giờ đ&acirc;y, bạn chẳng cần nghi&ecirc;n cứu đ&acirc;u xa m&agrave; vẫn c&oacute; thể nắm trọn b&iacute; quyết chăm s&oacute;c kh&aacute;ch h&agrave;ng th&ocirc;ng qua những kiến thức hữu &iacute;ch, m&agrave; giảng vi&ecirc;n chia sẻ trong c&aacute;c kh&oacute;a học&nbsp;bất động sản tr&ecirc;n UNICA. Nếu nắm vững v&agrave; vận dụng chuẩn x&aacute;c, chắc chắn khả năng chốt đơn đối bạn kh&ocirc;ng c&ograve;n l&agrave; nỗi &aacute;m ảnh.&nbsp;</span></p>', 1, 5, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(18, 'Kinh doanh Online', NULL, '<h2><span style=\"font-size:24px\"><strong>Định hướng về kỹ năng b&aacute;n h&agrave;ng online&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Hiện nay, b&aacute;n h&agrave;ng online đang l&agrave; lĩnh vực được nhiều người đặc biệt quan t&acirc;m, bởi t&iacute;nh chiếm hữu thị trường v&agrave; khả năng tiếp cận kh&aacute;ch h&agrave;ng rất cao. Tuy nhi&ecirc;n, trong lĩnh vực b&aacute;n h&agrave;ng online kh&ocirc;ng phải ai cũng c&oacute; thể gặt h&aacute;i được th&agrave;nh c&ocirc;ng. V&agrave; đa phần những người gặp phải thất bại l&agrave; do chưa x&acirc;y dựng được định hướng về kỹ năng b&aacute;n h&agrave;ng online đ&uacute;ng đắn.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">V&agrave; để nắm được c&aacute;ch x&acirc;y dựng một định hướng chắc chắn về kỹ năng b&aacute;n h&agrave;ng online th&igrave; bạn h&atilde;y tham khảo th&ecirc;m c&aacute;c kh&oacute;a học quản trị kinh doanh online tr&ecirc;n ESTO. Với những kinh nghiệm &ldquo;xương m&aacute;u&rdquo; được đ&uacute;c kết trong qu&aacute; tr&igrave;nh thực tiễn, c&aacute;c giảng vi&ecirc;n sẽ gi&uacute;p bạn biết được điểm mạnh, điểm yếu trong hệ thống kinh doanh của bạn. C&aacute;c kho&aacute; học quản trị kinh doanh online gi&uacute;p&nbsp;bạn c&oacute; thể tự x&acirc;y dựng định hướng v&agrave; c&aacute;c kỹ năng quan trọng trong việc b&aacute;n h&agrave;ng online.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:24px\"><strong>Kh&ocirc;ng cần đầu tư nhiều vốn vẫn th&agrave;nh c&ocirc;ng&nbsp;</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Nếu bạn kh&ocirc;ng c&oacute; nhiều vốn, đừng qu&aacute; ngần ngại m&agrave; kh&ocirc;ng đầu tư v&agrave;o kinh doanh online, bởi vốn &iacute;t hay nhiều kh&ocirc;ng quyết định đến mức độ doanh thu m&agrave; bạn nhận được, điều quan trọng l&agrave; kiến thức chuy&ecirc;n m&ocirc;n v&agrave; khả năng vận dụng v&agrave;o thực tiễn.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Tất cả những điều n&agrave;y sẽ được giảng vi&ecirc;n giải đ&aacute;p trong c&aacute;c kh&oacute;a học kinh doanh online tr&ecirc;n UNICA. Cụ thể, giảng vi&ecirc;n sẽ chia sẻ v&agrave; hướng dẫn bạn c&aacute;ch &aacute;p dụng c&aacute;c kỹ năng quan trọng để kh&ocirc;ng cần nhiều vốn vẫn c&oacute; thể đầu tư th&agrave;nh c&ocirc;ng.&nbsp;</span></p>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>Kho&aacute; học kinh doanh Online với chủ đề học phong ph&uacute;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Kinh doanh online l&agrave; một lĩnh vực kh&aacute; rộng với nhiều chủ đề con kh&aacute;c nhau. Ch&iacute;nh v&igrave; vậy, để c&oacute; thể đ&aacute;p ứng tối đa nhu cầu t&igrave;m hiểu v&agrave; học hỏi của c&aacute;c học vi&ecirc;n về lĩnh vực n&agrave;y, ESTO đ&atilde; kết hợp c&ugrave;ng với những giảng vi&ecirc;n gi&agrave;u chuy&ecirc;n m&ocirc;n x&acirc;y dựng n&ecirc;n c&aacute;c chủ đề học phong ph&uacute;, đa dạng.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Cụ thể, bạn c&oacute; thể đăng k&yacute; tham gia c&aacute;c kh&oacute;a học quản trị kinh doanh online theo từng chủ đề như: Chạy quảng c&aacute;o Facebook, Facebook Marketing to&agrave;n tập, CEO Internet, Chatbot Viral, kinh doanh online với sản phẩm c&oacute; sẵn, Ebay Dropshipping, b&aacute;n h&agrave;ng tr&ecirc;n Internet, học quản trị kinh doanh online,&hellip;&nbsp;</span></p>', 1, 5, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(36, 'Lập trình Android', NULL, '<h2><span style=\"font-size:24px\"><strong>Gi&aacute;o tr&igrave;nh học kết hợp giữa l&yacute; thuyết v&agrave; thực h&agrave;nh&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Việc học c&aacute;c lĩnh vực c&ocirc;ng nghệ th&ocirc;ng tin n&oacute;i chung v&agrave; học lập tr&igrave;nh Android n&oacute;i ri&ecirc;ng, nếu muốn th&agrave;nh c&ocirc;ng th&igrave; phải kết hợp giữa l&yacute; thuyết v&agrave; thực h&agrave;nh. Tuy nhi&ecirc;n, c&aacute;c phương ph&aacute;p học hiện nay thường ch&uacute; trọng nhiều hơn về l&yacute; thuyết m&agrave; qu&ecirc;n đi tầm quan trọng của thực h&agrave;nh.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Nhưng khi đăng k&yacute; c&aacute;c kh&oacute;a học về lập tr&igrave;nh Android tr&ecirc;n ESTO th&igrave; bạn c&oacute; thể ho&agrave;n to&agrave;n y&ecirc;n t&acirc;m về t&iacute;nh hiệu quả m&agrave; m&igrave;nh nhận được sau kh&oacute;a học. Bởi c&aacute;c giảng vi&ecirc;n sẽ &aacute;p dụng phương ph&aacute;p giảng dạy mang t&iacute;nh đan xen giữa l&yacute; thuyết v&agrave; thực h&agrave;nh. Điều n&agrave;y sẽ gi&uacute;p bạn kh&ocirc;ng c&ograve;n bỡ ngỡ sau khi kết th&uacute;c kh&oacute;a học v&agrave; c&oacute; thể &aacute;p dụng v&agrave;o c&ocirc;ng việc của m&igrave;nh một c&aacute;ch th&agrave;nh thạo.&nbsp;</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>Tự tay s&aacute;ng tạo sản phẩm ngay trong qu&aacute; tr&igrave;nh học&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Nhờ phương ph&aacute;p giảng dạy kết hợp giữa thực h&agrave;nh v&agrave; l&yacute; thuyết m&agrave; ngay trong qu&aacute; tr&igrave;nh học, học vi&ecirc;n c&oacute; thể tự tay s&aacute;ng tạo n&ecirc;n những sản phẩm chất lượng nhất. Điều n&agrave;y sẽ gi&uacute;p tiết kiệm tối đa thời gian học cũng như nghi&ecirc;n cứu, đặc biệt l&agrave; những học vi&ecirc;n đang trong qu&aacute; tr&igrave;nh học tập v&agrave; nộp sản phẩm.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Bạn c&oacute; thể tham khảo một số kh&oacute;a học để đ&aacute;p ứng y&ecirc;u cầu của bản th&acirc;n một c&aacute;ch ho&agrave;n hảo như: &ldquo;Lập tr&igrave;nh Android từ cơ bản đến th&agrave;nh thạo&rdquo;, &ldquo;Lập tr&igrave;nh Android to&agrave;n tập&rdquo;, &ldquo;Lập tr&igrave;nh Android cơ bản&rdquo;, &ldquo;Lập tr&igrave;nh Android n&acirc;ng cao&rdquo;, &ldquo;Thiết kế ứng dụng IOS, Android theo chuẩn Material Design bằng Photoshop&rdquo;. Chắc chắn, sau khi ho&agrave;n th&agrave;nh c&aacute;c kh&oacute;a học n&agrave;y, việc lập tr&igrave;nh Android sẽ trở n&ecirc;n dễ d&agrave;ng hơn bao giờ hết.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp;</span></p>\r\n\r\n<h2><span style=\"font-size:24px\"><strong>Học ph&iacute; &ldquo;rẻ như cho&rdquo;</strong></span><span style=\"font-size:16px\"><strong>&nbsp;</strong></span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Ưu điểm lớn nhất m&agrave; c&aacute;c kh&oacute;a học lập tr&igrave;nh Android mang lại cho c&aacute;c học vi&ecirc;n đ&oacute; ch&iacute;nh l&agrave;, bạn c&oacute; thể tham gia một lộ tr&igrave;nh học b&agrave;i bản, chuy&ecirc;n nghiệp với một mức học ph&iacute; &ldquo;rẻ như cho&rdquo;.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Chỉ cần bỏ ra v&agrave;i trăm ngh&igrave;n đồng, bạn đ&atilde; sở hữu trong tay một bộ kiến thức &ldquo;si&ecirc;u to khổng lồ&rdquo;. B&ecirc;n cạnh đ&oacute;, ESTO c&ograve;n thường xuy&ecirc;n &aacute;p dụng c&aacute;c chương tr&igrave;nh khuyến m&atilde;i, ưu đ&atilde;i hấp dẫn, gi&uacute;p hiện thực h&oacute;a ước mơ tiếp cận kiến thức của bạn hiệu quả hơn.&nbsp;</span></p>', 1, 7, '2021-12-17 09:21:22', '2021-12-17 16:21:22');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MAHD` int(11) NOT NULL,
  `MAHV` int(11) DEFAULT NULL,
  `NGAYHD` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MAHD`, `MAHV`, `NGAYHD`) VALUES
(25, 202, '2022-01-04 08:35:26'),
(28, 202, '2022-01-04 08:41:55'),
(32, 206, '2022-01-07 10:48:54'),
(33, 206, '2022-01-07 10:49:34'),
(34, 202, '2022-01-07 14:44:14'),
(35, 201, '2022-01-08 01:40:46'),
(36, 201, '2022-01-08 01:40:59'),
(37, 201, '2022-01-08 01:42:08');

-- --------------------------------------------------------

--
-- Table structure for table `khoahoc`
--

CREATE TABLE `khoahoc` (
  `MAKH` int(11) NOT NULL,
  `TENKH` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ANH` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DONGIA` float DEFAULT NULL,
  `GIOITHIEUKH` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `CHITIETKH` text COLLATE utf8_unicode_ci NOT NULL,
  `MAGV` int(11) DEFAULT NULL,
  `MADM` int(11) DEFAULT NULL,
  `TRUCTUYEN` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khoahoc`
--

INSERT INTO `khoahoc` (`MAKH`, `TENKH`, `ANH`, `DONGIA`, `GIOITHIEUKH`, `CHITIETKH`, `MAGV`, `MADM`, `TRUCTUYEN`) VALUES
(16, 'Bùng nổ doanh số cùng Google Shopping ', 'sieuuudai_6.jpg', 399999, 'Biết cách triển khai Google shopping và kết hợp nó với các kênh Online Marketing khác để tạo ra hiệu quả cao, gia tăng doanh số.', '- Bạn mong muốn tiếp cận khách hàng hiệu quả nhất?\r\n- Bạn gặp khó khăn trong việc triển khai Google Shopping?\r\n- Bạn chưa biết cách kết hợp Google Shopping với các kênh Online khác?\r\n- Hãy đăng ký ngay khóa học Bùng nổ doanh số cùng Google Shopping của Giảng viên Phạm Huy Long, để cập nhật ngay xu thế, gia tăng doanh số. ', 11, 18, b'1'),
(19, 'Làm chủ tuổi 20', 'kinhdoanh_khoinghiep_1.jpg', 499000, 'Làm chủ tuổi 20 - Phương pháp đạt tối đa hiệu quả trong học tập và công việc. Cách làm như thế nào để Làm chủ trọn vẹn cuộc sống của bạn. Công thức tuyệt mật đem đến những thành công ở tuổi 18-25 nhanh và chính xác hơn bất kỳ ai khác.', '- Những điều sau khoá học này bạn nhận được:\r\n- Phương pháp đạt tối đa hiệu quả trong học tập và công việc.\r\n- Cách làm như thế nào để Làm chủ trọn vẹn cuộc sống của bạn.\r\n- Công thức tuyệt mật đem đến những thành công ở tuổi 18-25 nhanh và chính xác hơn bất kỳ ai khác.\r\n- Cách tìm kiếm môi trường, người huấn luyện và những người đồng đội cho mình.\r\nHọc được cách biến nỗi sợ thành sức mạnh giúp bạn vượt lên trên chính mình\r\n- Không những thế, bạn sẽ được định hướng cách tạo tiền hiệu quả từ 0 đồng. Bạn sẽ nắm vững được 5 chiến lược học tập hiệu quả để vận dụng thành công. Bạn sẽ làm chủ được bản thân và tài chính tuổi 20 của mình!\r\n- Tất cả được gói gọn trong KHÓA HỌC \"LÀM CHỦ TUỔI 20\" của giảng viên Dương Duy Bách   ', 14, 18, NULL),
(20, 'TikTok : Tiếp cận 100.000+ khách hàng trong 30 ngày với chi phí 0 đồng', 'kinhdoanh_khoinghiep_2.jpg', 599000, 'Video ngắn và TikTok đang ngày càng chiếm được vị trí quan trọng, và là kênh Marketing online không thể thiếu... HÃY BẮT ĐẦU NGAY !', '- Đây là khóa học đóng gói kiến thức của những thành công vang dội trên, nó được đóng gói theo lộ trình: \r\n- Hiểu về tầm nhìn, và lý do tại sao TikTok lại giúp chúng ta kiếm rất nhiều tiền \r\n- Hiểu rõ về thuật toán TikTok: Tại sao có clip nhiều view, clip ít view; Làm sao để có 1 video lên đề xuất; Định hình rõ con đường bạn muốn đi, để dẫn dắt khách hàng, từ lúc họ biết đến bạn đến khi họ mua hàng; Những điều cơ bản cần tránh khi làm TikTok để tài khoản phát triển mạnh mẽ, bền vững; Làm sao để có những clip triệu view ... \r\n- 10 kỹ năng edit clip của các TikToker, mà chỉ cần dùng điện thoại \r\n- Rất nhiều học viên của đã áp dụng những kiến thức trên và thành công. Nếu bạn muốn tìm hiểu kỹ hơn về tôi thì hãy tìm Facebook \"Cấn Mạnh Linh\" hoặc vào tìm TikTokVip nhé. ', 15, 18, NULL),
(21, 'Bí quyết bán lẻ ngàn đơn trên Shopee, Zalo và Facebook', 'kinhdoanh_khoinghiep_3.jpg', 599000, 'Đột phá doanh thu nhờ các bí quyết bán hàng trên các trang thương mại điện tử', '- Sau khóa học bán hàng online này bạn sẽ nhận được:\r\n- Tư duy bán hàng “đúng từ khởi đầu để thành công” của người bán xuất sắc. Điều này quyết định đến 7-% sự thành công của khách hàng\r\n- Hướng dẫn a - z với các mẫu, các chiến lược và công thức học kinh doanh hiệu quả\r\n- Các mấu chốt để kinh doanh thành công và các cách lựa chọn sản phẩm nguồn hàng phù hợp\r\n- Hướng dẫn chi tiết từng phương pháp đa kênh để bán hàng hiệu quả: facebook, zalo, shopee,... để khách hàng tìm đến chúng ta nhiều hơn. \r\n- Chiến lược kinh doanh, phương pháp chốt sale hiệu quả, cách xử lý từ chối thâm thuý\r\n- Giúp gia tăng doanh số bán hàng bằng cách chăm sóc khách hàng sau bán \r\n- Đăng ký khoá học Bí quyết bán lẻ ngàn đơn trên Shopee, Zalo và Facebook của giảng viên Trần Hoa ngay hôm nay! Và còn rất nhiều những khóa học quản trị kinh doanh khác đang chờ bạn khám phá trên Esto nhé!', 16, 18, NULL),
(22, 'Kinh doanh theo mạng từ A đến Z', 'kinhdoanh_khoinghiep_4.jpg', 599000, 'Trang bị đủ kỹ năng, phương pháp để bạn hiểu rõ về giá trị của ngành kinh doanh theo mạng hiện đại. Hiểu được bí mật công thức thành công trong kinh doanh theo mạng và ứng dụng nhanh chóng vào doanh nghiệp', '- Khóa học \"MLM 2.0 - Bí mật hệ thống MLM vận hành tự động\"\r\n- Dưới phương pháp giảng dạy các tình huống chân thực, có hình ảnh và các dẫn chứng thực tế với kinh nghiệm hơn 10 năm trong nghành được sắp xếp có hệ thống bài học chiến lược kinh doanh khoa học giúp học viên dễ hiểu và thực hành và đưa vào thực tế. Kiến thức được chuyển giao từ các chuyên gia MLM và những người thành công nhanh nhất trong ngành chuyển giao. Qua đó giúp các bạn học viên có đủ kỹ năng, phương pháp và niềm tin để thành công bền vững trong MLM.\r\n- Vậy còn chờ gì nữa nắm trong tay bí mật hệ thống kinh doanh MLM vận hành tự động hiệu quả bền vững ngay hôm nay chỉ với một khóa học làm giàu duy nhất \"MLM 2.0 - Bí mật hệ thống MLM vận hành tự động\" chỉ có tại Esto!', 17, 18, NULL),
(23, 'Học Forex - Những giá trị mang lại thành công', 'kinhdoanh_khoinghiep_5.jpg', 599000, 'Forex là một trong những lĩnh vực đầu tư tạo ra lợi nhuận, trước khi kiếm được lợi nhuận bạn trải qua quá trình học hỏi. Bước đầu của quá trình đó bạn phải hiểu được sự nguy hiểm tiềm ẩn trên thị trường Forex.', '- Khóa học Học Forex - Những giá trị mang lại thành công của giảng viên Trần Quốc Minh trên Esto sẽ phơi bày ra tất cả những góc tối của thị trường. Để trang bị cho mọi người kỹ năng tránh khỏi sự lừa đảo tràn lan hiện nay. Giữ được tiền chính là kiếm được tiền. \r\nBạn sẽ được giảng viên giảng viên giảng dạy theo lộ trình học kinh doanh từ đơn giản đến nâng cao, hiểu được tư duy đầu tư là như nào, giá trị đầu tư và lời khuyên, hiểu được thị trường Forex vận hành như thế nào, biết cách chọn sàn giao dịch Forex, nắm được những yếu tố cơ bản của cơ chế hoạt động một sàn giao dịch nói chung và các mô hình nến trong giao dịch Forex.                                                                                                                \r\n- Tư duy thực tế, nhìn nhận đúng đắn theo góc nhìn đa chiều khách quan.\r\n- Bí mật của những chiếc bẫy làm cho bạn mất mát trên thị trường.  \r\n- Forex là một trong những lĩnh vực đầu tư tạo ra lợi nhuận, trước khi kiếm được lợi nhuận bạn trải qua quá trình học hỏi. Bước đầu của quá trình đó bạn phải hiểu được sự nguy hiểm tiềm ẩn trên thị trường Forex. \r\n- Chúng tôi khẳng định là nơi duy nhất dám chia sẻ cho bạn những điều này, bạn có thể tìm hiểu và so sánh sau khi học xong.  ', 18, 18, NULL),
(24, 'Thu nhập thụ động từ việc Đóng gói kiến thức & tạo khoá học Online', 'kinhdoanh_khoinghiep_6.jpg', 399999, 'Khóa học giúp bạn xây dựng khóa học online một cách bài bản và thành công.', '- Đây là khoá học được đúc kết từ hơn 10 năm kinh nghiệm giảng dạy và kinh doanh của tôi, đây là một trong những khóa học kiếm tiền online mang tính chất giáo dục và kinh doanh. Nội dung của khoá học sẽ dẫn bạn đi từ lúc bắt đầu cho đến khi tạo ra được dòng tiền thụ động. \r\n- Tất cả những gì bạn cần làm là: LÀM CHO CÁI THÙNG RỖNG HẾT. Điều này có nghĩa là, bạn hãy quên đi cái tôi của mình, sẵn sàng đón nhận kiến thức, từng bước thực hiện theo hướng dẫn của bài học. Rồi bạn sẽ khám phá ra điều tuyệt vời của nó.\r\n- Với mức chi phí rất thấp, nhưng nội dung của khoá học cực kỳ chất lượng, bạn không chỉ được học kinh doanh các kiến thức của khoá học, mà còn có cơ hội được hổ trợ trực tiếp & gián tiếp từ giảng viên. Chúng tôi sẽ giúp bạn thực hiện ước mơ của mình.', 19, 18, NULL),
(25, 'Khởi nghiệp thực chiến từ A - Z', 'kinhdoanh_khoinghiep_7.jpg', 499000, 'Giúp bạn hiểu đúng đắn và sẵn sàng khởi nghiệp để thành công.', '-Bạn có một ý tưởng bạn cho là siêu phàm, bạn dành vài tháng để nghĩ về nó nhưng cũng chẳng dám làm gì với nó vì “ngại”, bạn quá thoải mái với vòng an toàn của mình, và bạn tự thuyết phục bản thân mình rằng là mình chưa đủ chín để thực thi ý tưỏng này. Nhưng nếu không bắt đầu thì sẽ không có kết quả. Khởi nghiệp là con đường bạn nên cân nhắc và quyết đoán lựa chọn từ hôm này. Khóa học Khởi nghiệp thực chiến từ A - Z sẽ giúp bạn hiểu đúng đắn về khởi nghiệp, chuẩn bị để khởi nghiệp thành công. \r\n- Với kinh nghiệm hơn 12 năm xây dựng, vận hành doanh nghiệp và đào tạo kỹ năng kinh doanh, giảng viên sẽ giúp cho học viên có thêm kiến thức và tự tin trong khởi nghiệp. Khóa học trang bị đầy đủ thông tin, kiến thức để một người chưa có kinh nghiệm có thể bắt đầu ngay công việc kinh doanh của mình. Các nội dung đào tạo gồm: Tư duy khởi nghiệp cho người mới bắt đầu; quy trình xây dựng và hoàn thiện kế hoạch kinh doanh; xây dựng kế hoạch marketing & truyền thông; xây dựng quy trình cho doanh nghiệp từ nhân sự, bán hàng, sản xuất và định giá sản phẩm; kỹ năng huy động vốn hiệu quả; kỹ năng quản lý nhân sự quản lý tài chính.\r\n- Tham gia khóa học, học viên sẽ định vị lại bản thân và có thêm sự tự tin khi khởi nghiệp. Bạn sẽ được thúc đẩy tinh thần, động lực khởi nghiệp và đồng thời nắm được những khó khăn và thách thức trong quá trình làm doanh nghiệp. Đăng ký ngay khóa học tại Esto để bứt phá khỏi vùng an toàn và khởi nghiệp thành công. ', 17, 18, NULL),
(27, 'Anh văn giao tiếp cho người hoàn toàn mất gốc', 'tienganh_1.jpg', 499000, '<p><span style=\"font-size:16px\">Kh&oacute;a học tiếng Anh giao tiếp cho người mất gốc khơi dậy niềm đam m&ecirc; tiếng Anh, tự tin giao tiếp tiếng Anh như người bản xứ, mở ra cơ hội học tập, l&agrave;m việc tại c&aacute;c c&ocirc;ng ty đa quốc gia v&agrave; tự tin hơn trong giao tiếp với người bản địa d&ugrave; ở bất kỳ ho&agrave;n cảnh n&agrave;o</span></p>', '<p><span style=\"font-size:16px\"><strong>Tầm quan trọng của tiếng Anh</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Học một ng&ocirc;n ngữ đồng nghĩa với việc bạn sẽ học th&ecirc;m một ng&ocirc;n ngữ của một nền văn h&oacute;a. Hiện nay, Tiếng Anh được xem l&agrave; ng&ocirc;n ngữ chung của thế giới, v&igrave; vậy ng&agrave;y c&agrave;ng nhiều người Việt đầu tư học tiếng Anh.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Bạn c&oacute; thể nhận thấy, rất nhiều t&agrave;i liệu học tập ng&agrave;y nay của c&aacute;c tổ chức, c&aacute;c trường đại học lớn đều đươc viết bằng tiếng Anh. &frac12; t&agrave;i liệu tr&ecirc;n c&aacute;c website lớn đều được viết bằng tiếng Anh.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Kh&ocirc;ng những thế, sự hội nhập của thế giới v&agrave;o thị trường Việt Nam của c&aacute;c c&ocirc;ng ty nước ngo&agrave;i khiến cho tiếng Anh c&agrave;ng trở n&ecirc;n quan trọng. Nếu bạn biết tiếng Anh th&igrave; sẽ rất dễ d&agrave;ng xin được c&ocirc;ng việc tốt, nhanh ch&oacute;ng thăng tiến.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Học tiếng Anh bắt đầu từ đ&acirc;u?</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Tuy nhi&ecirc;n, bạn l&agrave; những đối tượng mất căn bản tiếng Anh, mất gốc tiếng Anh? Bạn đ&atilde; qu&aacute; ch&aacute;n nản với việc học tiếng Anh nhiều năm chưa tiến bộ? Bạn đang t&igrave;m kiếm kho&aacute; học ngoại ngữ online cho người mất gốc nhưng chưa biết t&igrave;m ở đ&acirc;u.&nbsp;Bạn đang muốn t&igrave;m kiếm một giải ph&aacute;p hiệu quả để học được tiếng Anh nhưng bạn lại qu&aacute; &ldquo;lười&rdquo; để t&igrave;m kiếm c&aacute;c trung t&acirc;m học.<br />\r\n&nbsp;<br />\r\nNhững điều bạn băn khoăn sẽ được xua tan ngay khi bạn đăng k&yacute; kh&oacute;a học của Unica, kh&oacute;a học tiếng anh mất gốc&nbsp;sẽ gi&uacute;p bạn khắc phục tất cả kh&oacute; khăn để vực dậy, khơi nguồn niềm đam m&ecirc; với TIẾNG ANH. Kh&oacute;a học tiếng anh giao tiếp cho người mất gốc gi&uacute;p&nbsp;bạn biết được c&aacute;ch học tiếng Anh đ&uacute;ng c&aacute;ch. C&aacute;c bạn sẽ được nhập vai v&agrave;o c&aacute;c t&igrave;nh huống tiếng Anh giao tiếp hết sức th&uacute; vị thực tế h&agrave;ng ng&agrave;y.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Lộ tr&igrave;nh học &ldquo;<strong>Anh văn giao tiếp cho người ho&agrave;n to&agrave;n mất gốc</strong>&rdquo; của Giảng vi&ecirc;n Ruby Thảo Trần giao tiếp c&ugrave;ng phương ph&aacute;p phản xạ truyền cảm hứng sẽ gi&uacute;p bạn n&acirc;ng cao tr&igrave;nh độ một c&aacute;ch nhanh ch&oacute;ng v&agrave; hiệu quả, bạn sẽ ho&agrave;n to&agrave;n tự tin với tr&igrave;nh độ tiếng Anh giao tiếp mới của bản th&acirc;n đấy! &nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Với tầm quan trọng của tiếng Anh, đ&oacute; ch&iacute;nh l&agrave; l&yacute; do m&agrave; bạn kh&ocirc;ng n&ecirc;n chậm trễ để trở th&agrave;nh học vi&ecirc;n của kh&oacute;a học &ldquo;<strong>Tiếng Anh cho người ho&agrave;n to&agrave;n mất gốc</strong>&rdquo; tr&ecirc;n ESTO</span></p>', 21, 9, b'0'),
(28, 'Phát âm chuẩn và luyện nói hay Tiếng Anh', 'tienganh_2.jpg', 599000, '<p>Kh&oacute;a học chuy&ecirc;n s&acirc;u gi&uacute;p học vi&ecirc;n ph&aacute;t &acirc;m CHUẨN tất cả c&aacute;c từ trong Tiếng Anh. Kh&ocirc;ng chỉ vậy, kh&oacute;a học c&ograve;n hướng dẫn học vi&ecirc;n c&aacute;ch luyến l&aacute;y, diễn đạt Tiếng Anh một c&aacute;ch tự nhi&ecirc;n, cũng như gi&uacute;p cải thiện tốc độ n&oacute;i Tiếng Anh.</p>', '<p dir=\"ltr\"><span style=\"font-size:16px\"><em><strong>C&oacute; phải,&nbsp;</strong></em></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">❌ Bạn l&agrave; người mới bắt đầu học ngoại ngữ online muốn t&igrave;m một lộ tr&igrave;nh luyện N&oacute;i khoa học v&agrave; hiệu quả?</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">❌ Bạn đ&atilde; học Tiếng Anh l&acirc;u năm nhưng kh&ocirc;ng h&agrave;i l&ograve;ng với ph&aacute;t &acirc;m v&agrave; ngữ điệu n&oacute;i của m&igrave;nh?</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">❌ Gi&aacute;o vi&ecirc;n Tiếng Anh muốn t&igrave;m một nguồn bổ trợ n&acirc;ng cao kỹ năng N&oacute;i của m&igrave;nh?</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\"><em><strong>Nhưng bạn đừng qu&aacute; lo lắng,&nbsp;</strong></em></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">✔️ Bởi kh&oacute;a học&nbsp;<em><strong>Ph&aacute;t &acirc;m chuẩn v&agrave; luyện n&oacute;i hay Tiếng Anh</strong></em>&nbsp;tại <strong><em>ESTO&nbsp;</em></strong>ch&iacute;nh l&agrave; lựa chọn tốt nhất d&agrave;nh cho bạn.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">✔️ Kh&oacute;a học n&agrave;y l&agrave; ch&igrave;a kh&oacute;a gi&uacute;p bạn ho&agrave;n to&agrave;n lột x&aacute;c với Kỹ năng N&oacute;i Tiếng Anh của m&igrave;nh. Kh&oacute;a học chuy&ecirc;n s&acirc;u gi&uacute;p học vi&ecirc;n ph&aacute;t &acirc;m CHUẨN tất cả c&aacute;c từ trong Tiếng Anh. Kh&ocirc;ng chỉ vậy, kh&oacute;a học c&ograve;n hướng dẫn học vi&ecirc;n c&aacute;ch luyến l&aacute;y, diễn đạt Tiếng Anh một c&aacute;ch tự nhi&ecirc;n, cũng như gi&uacute;p cải thiện tốc độ n&oacute;i Tiếng Anh, điều m&agrave; gần như c&aacute;c kh&oacute;a học online hiện nay chưa l&agrave;m được.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\"><em><strong>Nội dung kh&oacute;a học</strong></em></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">✔️ Gi&aacute;o tr&igrave;nh c&oacute; 45 b&agrave;i giảng với 5 phần học ch&iacute;nh</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">- Phần 1: Giới thiệu bảng phi&ecirc;n &acirc;m, kh&aacute;i niệm &acirc;m tiết v&agrave; trọng &acirc;m</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">- Phần 2: Luyện ph&aacute;t &acirc;m chuẩn</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">- Phần 3: Luyện n&oacute;i hay cấp độ đoạn văn ngắn&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">- Phần 4: Luyện n&oacute;i hay cấp độ đoạn văn d&agrave;i</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\"><em><strong>Lợi &iacute;ch của kh&oacute;a học</strong></em></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Sau khi ho&agrave;n th&agrave;nh kh&oacute;a học, bạn sẽ c&oacute; thể:&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">1. Ph&aacute;t &acirc;m chuẩn 44 nguy&ecirc;n &acirc;m v&agrave; phụ &acirc;m trong Tiếng Anh</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">2. Đọc chuẩn tất cả c&aacute;c từ trong Tiếng Anh dựa tr&ecirc;n phi&ecirc;n &acirc;m</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">3. Biết c&aacute;ch ngắt c&acirc;u khi n&oacute;i để tăng tốc độ n&oacute;i khi giao tiếp</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">4. X&oacute;a bỏ ho&agrave;n to&agrave;n giọng địa phương khi n&oacute;i Tiếng Anh v&agrave; n&oacute;i Tiếng Anh c&oacute; luyến l&aacute;y ngữ điệu</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">5. Giải th&iacute;ch v&agrave; dạy lại cho những người kh&aacute;c dựa tr&ecirc;n kiến thức đ&atilde; học.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">H&atilde;y đăng k&yacute; kh&oacute;a học&nbsp;<em><strong>Ph&aacute;t &acirc;m chuẩn v&agrave; luyện n&oacute;i hay Tiếng Anh</strong></em>&nbsp;của giảng vi&ecirc;n&nbsp;<em><strong>Nguyễn Cảnh Tuấn</strong></em>&nbsp;để trải nghiệm những kiến thức th&uacute; vị v&agrave; phương ph&aacute;p học đặc biệt ngay h&ocirc;m nay!</span></p>', 22, 9, b'0'),
(29, '12 chủ đề giao tiếp Tiếng Anh quan trọng', 'tienganh_3.jpg', 659999, '<p>Nắm ngay những tuyệt chi&ecirc;u cực hay để giao tiếp tiếng Anh th&agrave;nh thạo tự nhi&ecirc;n theo phong c&aacute;ch Tracey&#39;s Home ngay tại nh&agrave;</p>', '<p><span style=\"font-size:16px\"><strong>C&oacute; phải,&nbsp;</strong>Bạn&nbsp;đ&atilde; từng học tiếng Anh, bạn c&oacute; biết kiến thức sơ đẳng về tiếng Anh nhưng ph&aacute;t &acirc;m c&ograve;n sai, kh&ocirc;ng nhớ từ v&agrave; cấu tr&uacute;c c&acirc;u, đặc biệt kh&ocirc;ng thể nghe, n&oacute;i v&agrave; phản xạ trong giao tiếp???</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Đ&oacute; kh&ocirc;ng phải l&agrave; lỗi của bạn, v&agrave;&nbsp;bạn cũng kh&ocirc;ng phải l&agrave; người duy nhất đang chật vật trong &quot;v&ograve;ng v&acirc;y&quot; học ngoại ngữ online n&oacute;i chung v&agrave; tiếng Anh n&oacute;i ri&ecirc;ng bởi vẫn c&ograve;n rất nhiều người họ &quot;vất vả&quot; hơn bạn nhiều trong chặng đường chinh phục ngoại ngữ.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Thế nhưng khi bạn đến được tại kh&oacute;a học n&agrave;y th&igrave; bạn ch&iacute;nh l&agrave; người MAY MẮN NHẤT, việc học tiếng Anh của bạn sẽ kh&ocirc;ng c&ograve;n l&agrave; &aacute;c mộng nữa!</span></p>\r\n\r\n<p><span style=\"font-size:16px\">H&atilde;y tham gia ngay kh&oacute;a học &quot;<strong>12 chủ đề giao tiếp Tiếng Anh quan trọng&quot;&nbsp;</strong>của giảng vi&ecirc;n Tracey Peace!</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Tham gia kh&oacute;a học n&agrave;y bạn sẽ&nbsp;được:</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;✔️ Tiếp x&uacute;c c&aacute;ch truyền đạt ho&agrave;n to&agrave;n mới, gi&uacute;p nhớ ngay v&agrave; l&acirc;u tới hơn 70% lượng kiến thức trong b&agrave;i giảng.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;✔️ Được thực h&agrave;nh ngay trong b&agrave;i học với giảng vi&ecirc;n.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;✔️ Phương thức giảng dạy: Giảng vi&ecirc;n luyện ph&aacute;t &acirc;m r&otilde; từng chữ trong phần từ vựng v&agrave; cụm từ. Sau đ&oacute; sẽ giả định hỏi học vi&ecirc;n những c&acirc;u đ&atilde; được chuẩn bị sẵn, c&acirc;u trả lời được đưa ra sẵn, học vi&ecirc;n chỉ cần thực h&agrave;nh theo.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;✔️ Ph&aacute;t &acirc;m từ vựng quan trọng v&agrave; hay gặp trong chủ đề cụ thể.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;✔️ Thực h&agrave;nh mẫu c&acirc;u li&ecirc;n quan đến chủ đề.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;✔️ Thực h&agrave;nh hỏi v&agrave; trả lời những kiến thức trọng t&acirc;m của chủ đề.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Điểm đặc biệt của kho&aacute; học so với những kh&oacute;a học kh&aacute;c:</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;???? Ho&agrave;n to&agrave;n &aacute;p dụng phương ph&aacute;p Effortless English</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;???? Học tiếng Anh theo phương ph&aacute;p thuận theo tự nhi&ecirc;n.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;???? Kh&ocirc;ng ph&acirc;n t&iacute;ch ngữ ph&aacute;p.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;???? N&oacute;i đ&uacute;ng v&agrave; chuẩn theo IPA quốc tế.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;???? Kho&aacute; học được thiết kế ri&ecirc;ng biệt, tăng thời lượng thực h&agrave;nh tối đa cho học vi&ecirc;n trong suốt qu&aacute; tr&igrave;nh luyện tập online.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;???? C&aacute;ch giảng dạy duy nhất khiến học vi&ecirc;n h&agrave;o hứng lặp theo v&agrave; bắt chủ đề ngay kh&ocirc;ng bị qu&ecirc;n</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Vậy c&ograve;n chờ đợi g&igrave; nữa, tham gia kh&oacute;a học &quot;<strong>12 chủ đề giao tiếp Tiếng Anh quan trọng&quot;</strong>&nbsp;tại <strong>ESTO</strong> ngay th&ocirc;i!</span></p>', 23, 9, b'0'),
(30, 'Tiếng Anh giao tiếp trẻ em từ 04-12 tuổi', 'tienganh_4.jpg', 599000, '<p><span style=\"font-size:16px\">Kho&aacute; học Tiếng Anh giao tiếp cho trẻ em gi&uacute;p c&aacute;c con y&ecirc;u th&iacute;ch Tiếng Anh hơn qua c&aacute;c h&igrave;nh ảnh sinh động v&agrave; những c&acirc;u chuyện th&uacute; vị, để trẻ tự tin khi giao tiếp với người nước ngo&agrave;i.</span></p>', '<p><span style=\"font-size:16px\"><strong>Lợi &iacute;ch việc cho trẻ học tiếng Anh sớm</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">B&ecirc;n cạnh những m&acirc;u thuẫn về việc tranh c&atilde;i c&oacute; n&ecirc;n cho trẻ con trong độ tuổi từ 3 đến 6 tuổi học tiếng Anh hay kh&ocirc;ng? Nhưng ch&uacute;ng ta vẫn kh&ocirc;ng thể phủ nhận được tầm quan trọng cũng như lợi &iacute;ch khi cho trẻ học ng&ocirc;n ngữ kh&aacute;c.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">✔️<strong>&nbsp;B&eacute; học ng&ocirc;n ngữ một c&aacute;ch tự nhi&ecirc;n</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Ngay từ nhỏ, bố mẹ cho trẻ tiếp thu ngoại ngữ một c&aacute;ch tự nhi&ecirc;n thay v&igrave; thụ động sẽ gi&uacute;p trẻ học nhanh hơn v&agrave; dễ d&agrave;ng tiếp thu kiến thức hơn. Nếu bố mẹ c&oacute; &yacute; định cho trẻ học ngoại ngữ th&igrave; kh&ocirc;ng n&ecirc;n bỏ qua giai đoạn n&agrave;y.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">✔️<strong>Nghe, n&oacute;i chuẩn từ đầu</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Ngo&agrave;i việc tiếp thu b&agrave;i giảng nhanh th&igrave; trẻ c&ograve;n c&oacute; khả năng nghe v&agrave; n&oacute;i chuẩn, tự nhi&ecirc;n theo giao vi&ecirc;n v&igrave; giai đoạn n&agrave;y trẻ rất dễ bắt chước ngữ điệu giỏi, ngữ &acirc;m nghe thấy.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">✔️&nbsp;<strong>B&eacute; giao tiếp tự tin hơn</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Ngay c&ograve;n nhỏ, bố mẹ đ&atilde; cho trẻ học tiếng Anh, l&agrave;m quen với tiếng Anh th&igrave; trẻ sẽ kh&ocirc;ng c&ograve;n sợ tiếng Anh, kh&ocirc;ng những thể trẻ c&ograve;n tự tin, mạnh dạn hơn khi n&oacute;i chuyện với người nước ngo&agrave;i.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Nội dung kh&oacute;a học&nbsp;Tiếng Anh giao tiếp cho trẻ em</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Để trẻ nh&agrave; bạn nắm được những lợi &iacute;ch đ&oacute;, bạn cần cho trẻ l&agrave;m quen v&agrave; học tiếng Anh ngay từ nhỏ. Ch&iacute;nh v&igrave; thế kh&oacute;a học tiếng Anh &ldquo;<strong>Tiếng Anh giao tiếp trẻ em từ 04-12 tuổi</strong>&rdquo; của giảng vi&ecirc;n Hương Elena tr&ecirc;n ESTO ra đời.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Kh&oacute;a học được bi&ecirc;n soạn dựa tr&ecirc;n gi&aacute;o tr&igrave;nh của Oxford, gồm c&aacute;c b&agrave;i học ngoại ngữ online&nbsp;c&oacute;&nbsp;tất cả c&aacute;c t&igrave;nh huống cơ bản phổ biến h&agrave;ng ng&agrave;y cho trẻ em, l&agrave;m tiền đề vững chắc cho c&aacute;c b&eacute; khi bắt đầu học m&ocirc;n Tiếng Anh.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Với c&aacute;c h&igrave;nh ảnh sinh động, hấp dẫn, c&ugrave;ng c&aacute;c b&agrave;i h&aacute;t giọng Mỹ v&agrave; c&aacute;c c&acirc;u chuyện Tiếng Anh r&egrave;n luyện cả nghe, n&oacute;i, đọc, viết gi&uacute;p c&aacute;c b&eacute; y&ecirc;u th&iacute;ch Tiếng Anh ngay từ khi c&ograve;n nhỏ.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">C&aacute;c con c&ugrave;ng bố mẹ sẽ được thực h&agrave;nh kh&ocirc;ng chỉ giao tiếp m&agrave; c&ograve;n nhớ từ vựng, cấu tr&uacute;c hơn qua c&aacute;c phiếu b&agrave;i tập được c&ocirc; Hương Elena bi&ecirc;n soạn với c&aacute;c h&igrave;nh ảnh hấp dẫn, l&ocirc;i cuốn.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Ngay h&ocirc;m nay, h&atilde;y nhanh tay đăng k&yacute; kh&oacute;a học &quot;<strong>Tiếng Anh giao tiếp trẻ em từ 04-12 tuổi</strong>&rdquo; để được hưởng nhiều ưu đ&atilde;i bất ngờ!</span></p>', 24, 9, b'0'),
(31, 'Học giỏi Tiếng Anh toàn diện: Nghe, Nói, Đọc, Viết', 'tienganh_5.jpg', 499000, '<p><span style=\"font-size:16px\">Học giỏi Tiếng Anh to&agrave;n diện gi&uacute;p bạn th&agrave;nh thạo 4 kỹ năng quan trọng nhất: Nghe, N&oacute;i, Đọc, Viết.</span></p>', '<p dir=\"ltr\"><span style=\"font-size:16px\">X&atilde; hội ng&agrave;y c&agrave;ng ph&aacute;t triển, Tiếng Anh trở th&agrave;nh một ng&ocirc;n ngữ mang t&iacute;nh chất to&agrave;n cầu m&agrave; bất cứ ai cũng muốn sở hữu n&oacute;. Giao tiếp tiếng Anh tốt kh&ocirc;ng chỉ gi&uacute;p bạn kh&aacute;m ph&aacute; nền văn h&oacute;a của nhiều nước thế giới, l&agrave; cơ hội để học hỏi v&agrave; hội nhập m&agrave; n&oacute; c&ograve;n l&agrave; một &ldquo;vũ kh&iacute; lợi hại&rdquo; để bạn mở rộng cơ hội việc l&agrave;m với mức lương cao. Để l&agrave;m được điều n&agrave;y, bạn cần nắm chắc 4 kỹ năng: Nghe, n&oacute;i, đọc, viết trong Tiếng Anh.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\"><em><strong>Thực tế chỉ ra rằng,</strong></em></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Tiếng Anh c&oacute; khoảng 750.000 từ vựng. Nhưng thực ra, nếu bạn nắm được 3000 từ th&ocirc;ng dụng nhất, bạn c&oacute; thể th&agrave;nh thạo 4 kỹ năng tiếng anh m&agrave; nhiều người hằng mong đợi.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\"><em><strong>Tuy nhi&ecirc;n,&nbsp;</strong></em></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">- Đối với những người học tiếng Anh online, một trong những điều kh&oacute; khăn nan giải nhất ch&iacute;nh l&agrave; học từ vựng v&agrave; thực h&agrave;nh ch&uacute;ng thế n&agrave;o để đạt được hiệu quả tối ưu nhất ?</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">- Bạn đang ph&aacute;t triển vốn từ bằng c&aacute;ch cố gắng tiếp thu c&agrave;ng nhiều từ một ng&agrave;y c&agrave;ng tốt?</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">- Bạn đang học từ vựng bằng c&aacute;ch nhẩm đi nhẩm lại để nhớ kĩ hơn?</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">- Bạn đang học vật v&atilde; để cho 4 kỹ năng nghe n&oacute;i đọc viết được th&agrave;nh thạo nhưng m&atilde;i vẫn kh&ocirc;ng hiệu quả&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">- Cho d&ugrave; bạn đang học bằng c&aacute;ch n&agrave;o nhưng sau một thời gian nh&igrave;n lại, bạn thấy vốn từ vựng của m&igrave;nh kh&ocirc;ng kh&aacute; l&ecirc;n bao nhi&ecirc;u, 4 kỹ năng cũng chẳng hề cải thiện.</span></p>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\"><em><strong>Vậy nguy&ecirc;n nh&acirc;n l&agrave; g&igrave;?</strong></em></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">C&acirc;u trả lời: đ&oacute; l&agrave; do bạn đ&atilde; chọn SAI PHƯƠNG PH&Aacute;P HỌC TIẾNG ANH&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Kh&oacute;a học&nbsp;<em><strong>Học giỏi Tiếng Anh to&agrave;n diện: Nghe, n&oacute;i, đọc, viết</strong></em>&nbsp;của giảng vi&ecirc;n&nbsp;<em><strong>B&ugrave;i Đức Tiến</strong></em>&nbsp;sẽ gi&uacute;p bạn hệ thống lại những kiến thức vốn c&oacute; của m&igrave;nh một c&aacute;ch khoa học v&agrave; gi&uacute;p bạn nắm chắc 4 kỹ năng quan trọng của tiếng anh.</span></p>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\"><em><strong>Nội dung kh&oacute;a học</strong></em></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Phần 1: Tăng 3000 từ vựng Tiếng Anh th&ocirc;ng dụng trong 30 ng&agrave;y</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Phần 2: Chắc 10 ngữ ph&aacute;p Tiếng Anh th&ocirc;ng dụng nhất trong giao tiếp</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Phần 3: Chiến lược học ph&aacute;t &acirc;m chuẩn Tiếng Anh</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Phần 4: 4 Chiến lược để nghe được Tiếng Anh</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Phần 5: 5 Chiến lược học phản xạ n&oacute;i Tiếng Anh</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Phần 6: Chiến lược đọc Tiếng Anh hiểu nhanh</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Phần 7: Kỹ thuật luyện viết Tiếng Anh cho người bận rộn.</span></p>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">C&ograve;n chần chừ g&igrave; m&agrave; kh&ocirc;ng nhanh tay đăng k&yacute; kh&oacute;a học ngoại ngữ&nbsp;<em><strong>Học giỏi Tiếng Anh to&agrave;n diện: Nghe, n&oacute;i, đọc, viết</strong></em>&nbsp;c&oacute; tại <strong><em>ESTO&nbsp;</em></strong>để c&oacute; thể chinh phục ng&ocirc;n ngữ tiếng Anh trong thời gian ngắn nhất.&nbsp;</span></p>', 25, 9, b'0'),
(32, 'Tiếng Anh giao tiếp cho người mới bắt đầu', 'tienganh_6.jpg', 250000, '<p><span style=\"font-size:16px\">Kho&aacute; học tiếng Anh cho người mới bắt đầu tại Unica sẽ gi&uacute;p bạn r&egrave;n luyện phản xạ giao tiếp trong những t&igrave;nh huống cụ thể, d&agrave;nh cho c&aacute;c bạn mất gốc, mất tự tin giao tiếp Tiếng Anh d&ugrave; ở bất kỳ ho&agrave;n cảnh n&agrave;o</span></p>', '<p dir=\"ltr\"><span style=\"font-size:16px\">Kh&oacute;a học&nbsp;<strong>Tiếng Anh giao tiếp cho người mới bắt đầu của giảng vi&ecirc;n Vũ Thuỳ Linh (Linh Vũ)&nbsp;</strong>CỰC KỲ PH&Ugrave; HỢP với bạn. V&igrave; sao?</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Bởi v&igrave; kh&oacute;a&nbsp;học tiếng Anh online cho người mới bắt đầu n&agrave;y sẽ&nbsp;cung cấp cho bạn một c&aacute;ch đầy đủ v&agrave; c&oacute; hệ thống c&aacute;c b&agrave;i học với c&aacute;c chủ đề cực kỳ th&ocirc;ng dụng trong cuộc sống h&agrave;ng ng&agrave;y. Kho&aacute; học n&agrave;y sẽ gi&uacute;p bạn n&acirc;ng cao vốn từ vựng của m&igrave;nh, củng cố ngữ ph&aacute;p đồng thời chỉnh lại phần ph&aacute;t &acirc;m.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Kho&aacute; học tiếng Anh cho người mới bắt đầu học ngoại ngữ online&nbsp;sẽ gi&uacute;p c&aacute;c bạn học th&ecirc;m từ vựng, củng cố ngữ ph&aacute;p về c&aacute;c chủ đề cơ bản, th&ocirc;ng dụng hay được d&ugrave;ng trong văn n&oacute;i h&agrave;ng ng&agrave;y. Sau khi c&aacute;c bạn c&oacute; &acirc;m tốt v&agrave; học hết c&aacute;c chủ đề trong chương tr&igrave;nh n&agrave;y. C&aacute;c bạn c&oacute; thể bắn tiếng Anh trong 5 hay 10 ph&uacute;t li&ecirc;n tục m&agrave; c&aacute;c bạn kh&ocirc;ng phải suy nghĩ hay lục t&igrave;m từ vựng trong tr&iacute; nhớ. Tất cả đều trở th&agrave;nh phản xạ tự nhi&ecirc;n của bạn gi&uacute;p bạn ph&aacute;t &acirc;m chuẩn 100% ngữ ph&aacute;p. Đồng thời c&oacute; thể n&oacute;i chuẩn 100% Anh Mỹ</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Bạn sẽ gặp những t&igrave;nh huống giao tiếp thực tế đ&ograve;i hỏi bạn cần phải c&oacute; phản xạ giao tiếp tốt v&agrave; sau khi học xong mỗi b&agrave;i học bạn ho&agrave;n to&agrave;n c&oacute; thể &aacute;p dụng ngay để sử dụng trong học tập cũng như trong c&ocirc;ng việc của m&igrave;nh. Kh&oacute;a học đồng thời cũng hướng dẫn c&aacute;ch ph&aacute;t &acirc;m v&agrave; củng cố vốn từ vựng, ngữ ph&aacute;p căn bản trong tiếng Anh.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Vậy n&ecirc;n c&aacute;c bạn h&atilde;y bắt đầu đăng k&yacute; ngay kh&oacute;a học&nbsp;<strong>Tiếng Anh giao tiếp cho người mới bắt đầu của giảng vi&ecirc;n Vũ Thuỳ Linh (Linh Vũ)</strong>&nbsp;v&agrave; luyện tập theo c&aacute;c chủ đề th&ocirc;ng dụng trong kh&oacute;a học n&agrave;y nh&eacute;!</span></p>', 26, 9, b'0'),
(33, 'Luyện thi IELTS online: listening, speaking, reading, writing', 'tienganh_7.jpg', 699999, '<p><span style=\"font-size:16px\">R&egrave;n luyện 4 kĩ năng, k&egrave;m theo giảng giải chi tiết về cấu tr&uacute;c đề thi, nhưng lưu &yacute; khi l&agrave;m b&agrave;i sẽ gi&uacute;p bạn tự tin đạt 5 - 5,5 điểm IELTS.</span></p>', '<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\"><em><strong>Như bạn đ&atilde; biết,&nbsp;</strong></em></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">IELTS viết tắt cho International English Language Testing System, tạm dịch l&agrave; Hệ thống Kiểm tra Anh ngữ Quốc tế với 4 kỹ năng Nghe, N&oacute;i, Đọc v&agrave; Viết. IELTS l&agrave; cuộc thi kiểm tra tr&igrave;nh độ th&ocirc;ng thạo Anh ngữ quan trọng v&agrave; phổ biến nhất thế giới cho mục đ&iacute;ch học tập, l&agrave;m việc v&agrave; định cư với hơn hai triệu th&iacute; sinh dự thi.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Thấu hiểu được tầm quan trọng của việc luyện thi IELTS, Unica hợp t&aacute;c c&ugrave;ng giảng vi&ecirc;n&nbsp;<em><strong>B&ugrave;i Đức Tiến</strong></em>&nbsp;xuất bản kh&oacute;a học<em><strong>&nbsp;Luyện thi IELTS Online: listening, speaking, reading, writing</strong></em>. Kh&oacute;a học ngoại ngữ sẽ gi&uacute;p học vi&ecirc;n r&egrave;n luyện cả 4 kỹ năng, k&egrave;m theo giảng giải chi tiết về cấu tr&uacute;c đề thi, những lưu &yacute; khi l&agrave;m b&agrave;i tập sẽ gi&uacute;p bạn tự tin bước v&agrave;o kỳ thi IELTS với kết quả như mong đợi.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Lớp học d&agrave;nh cho những học vi&ecirc;n mới tiếp x&uacute;c với IELTS, tr&igrave;nh độ c&aacute;c kỹ năng c&ograve;n thấp, vốn từ vựng, ngữ ph&aacute;p c&ograve;n chưa cao, v&agrave; ph&aacute;t &acirc;m c&ograve;n nhiều khiếm khuyết. Sau kho&aacute; học, học vi&ecirc;n sẽ hiểu hơn về bố cục b&agrave;i thi IELTS, c&aacute;ch thức học &ocirc;n IELTS, cũng như t&igrave;m ra được hướng đi đ&uacute;ng đắn cho sự học tiếng Anh của m&igrave;nh.</span></p>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\"><em><strong>Nội dung kh&oacute;a học&nbsp;</strong></em></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Gi&aacute;o tr&igrave;nh được bi&ecirc;n soạn c&oacute; 50 b&agrave;i giảng, bao gồm 8 phần học ch&iacute;nh như sau:&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Phần 1: Từ vựng</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Phần 2: Ngữ ph&aacute;p</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Phần 3: Cấu tr&uacute;c c&acirc;u</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Phần 4: Đọc</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Phần 5: Viết</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Phần 6: Nghe</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Phần 7: Ph&aacute;t &acirc;m</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Phần 8: N&oacute;i</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Đến với kh&oacute;a học n&agrave;y c&ugrave;ng Thạc sĩ B&ugrave;i Đức Tiến, bạn sẽ nắm vững c&aacute;c bước l&agrave;m b&agrave;i thi cũng như vận dụng hiệu quả c&aacute;c tuyệt chi&ecirc;u để nhắm đến mục ti&ecirc;u đạt 5.5 - 7.0 điểm IELTS. Với 4 chủ đề ch&iacute;nh được bi&ecirc;n soạn ứng với 4 phần của b&agrave;i thi IELTS l&agrave; Nghe, N&oacute;i, Đọc, Viết,&nbsp; kh&oacute;a học sẽ gi&uacute;p bạn tự tin, vững v&agrave;ng với c&aacute;c cuộc thi IELTS.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Vậy c&ograve;n chần chừ g&igrave; m&agrave; kh&ocirc;ng nhanh tay đăng k&yacute; tham gia kh&oacute;a học luyện thi tiếng Anh&nbsp;<em><strong>Luyện thi IELTS online: listening, speaking, reading, writing&nbsp;</strong></em>c&oacute; tại <strong><em>ESTO</em></strong>&nbsp;để trang bị những kiến thức cần thiết để c&oacute; thể Luyện thi IELTS hiệu quả !</span></p>', 25, 9, b'0'),
(34, 'Thành thạo và lưu loát 12 chủ đề tiếng Anh cơ bản hay gặp nhất', 'tienganh_8.jpg', 599000, '<p><span style=\"font-size:16px\">Để giao tiếp tiếng Anh th&agrave;nh thạo tự nhi&ecirc;n theo phong c&aacute;ch Tracey&#39;s Home</span></p>', '<h3 dir=\"ltr\">&nbsp;</h3>\r\n\r\n<h3 dir=\"ltr\"><em><span style=\"font-size:16px\"><strong>Bạn c&oacute; biết:</strong></span></em></h3>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Bạn c&oacute; biết th&agrave;nh thạo v&agrave; lưu lo&aacute;t được khi giao tiếp tiếng Anh rất kh&oacute;. Để l&agrave;m được điều đ&oacute; th&igrave; mỗi người cần tập luyện mỗi ng&agrave;y rất nhiều.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Bạn muốn tr&igrave;nh độ tiếng Anh của m&igrave;nh được cải thiện, được n&acirc;ng cao để cơ hội việc l&agrave;m được mở rộng, được c&aacute;c nh&agrave; tuyển dụng săn đ&oacute;n.</span></p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3><em><span style=\"font-size:16px\"><strong>Tuy nhi&ecirc;n:</strong></span></em></h3>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">❌ Bạn đ&atilde; từng học tiếng Anh ở trường học hay c&aacute;c trung t&acirc;m Anh ngữ nhưng kh&ocirc;ng hiệu quả?</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">❌ Bạn c&oacute; kiến thức sơ đẳng về tiếng Anh nhưng ph&aacute;t &acirc;m c&ograve;n sai, kh&ocirc;ng nhớ từ v&agrave; cấu tr&uacute;c c&acirc;u?</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;❌Bạn đ&atilde; học Tiếng Anh nhiều năm nhưng vẫn kh&ocirc;ng tự tin nghe n&oacute;i v&agrave; phản xạ trong giao tiếp?&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Những ngại ng&ugrave;ng, lo lắng của bạn sẽ được xua tan ngay khi bạn đăng k&yacute; kh&oacute;a học&nbsp;<strong>Th&agrave;nh thạo v&agrave; lưu lo&aacute;t 12 chủ đề tiếng Anh cơ bản hay gặp nhất</strong>&nbsp;của giảng vi&ecirc;n Tracey Peace tại ESTO</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Kh&oacute;a học ho&agrave;n to&agrave;n &aacute;p dụng phương ph&aacute;p Effortless English, học tiếng Anh theo phương ph&aacute;p thuận theo tự nhi&ecirc;n. Kh&ocirc;ng ph&acirc;n t&iacute;ch ngữ ph&aacute;p, n&oacute;i đ&uacute;ng v&agrave; chuẩn theo IPA quốc tế. Kho&aacute; học được thiết kế ri&ecirc;ng biệt, tăng thời lượng thực h&agrave;nh tối đa cho học vi&ecirc;n trong suốt qu&aacute; tr&igrave;nh luyện tập online. C&aacute;ch giảng dạy duy nhất khiến học vi&ecirc;n h&agrave;o hứng lặp theo v&agrave; bắt chủ đề ngay kh&ocirc;ng bị qu&ecirc;n.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\"><strong>✔️&nbsp;</strong>&nbsp;Ph&aacute;t &acirc;m từ vựng quan trọng v&agrave; hay gặp trong chủ đề cụ thể.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\"><strong>✔️&nbsp;</strong>&nbsp;Thực h&agrave;nh&nbsp; mẫu c&acirc;u li&ecirc;n quan đến chủ đề.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\"><strong>✔️&nbsp;</strong>&nbsp;Thực h&agrave;nh hỏi v&agrave; trả lời những kiến thức trọng t&acirc;m của chủ đề.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\"><strong>✔️&nbsp;</strong>Học vi&ecirc;n được tiếp x&uacute;c c&aacute;ch truyền đạt ho&agrave;n to&agrave;n mới, gi&uacute;p nhớ ngay l&agrave; l&acirc;u tới hơn 70% lương kiến thức trong b&agrave;i giảng. Thực h&agrave;nh ngay trong b&agrave;i với giảng vi&ecirc;n, giảng vi&ecirc;n luyện ph&aacute;t &acirc;m r&otilde; từng chữ trong phần từ vựng, v&agrave; cụm từ, sau đ&oacute; sẽ giả định hỏi học vi&ecirc;n những c&acirc;u đ&atilde; được chuẩn bị sẵn, c&acirc;u trả lời được đưa ra sẵn, học vi&ecirc;n chỉ cần thực h&agrave;nh theo.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Nhanh tay đăng k&yacute; kh&oacute;a học ngoại ngữ online &ldquo;<strong>Th&agrave;nh thạo v&agrave; lưu lo&aacute;t 12 chủ đề tiếng Anh cơ bản hay gặp nhất</strong>&rdquo; ngay h&ocirc;m nay để nhận nhiều ưu đ&atilde;i!</span></p>', 23, 9, b'0'),
(43, 'Bí quyết trẻ đẹp từ trong ra ngoài', 'suckhoe_1.jpg', 599000, 'Là con gái thì phải biết \"Làm trẻ đẹp da từ trong da ngoài\". Biết cách xây dựng nền tảng cho bản thân để trở nên đẹp, thấy giá trị của bản thân và yêu bản thân hơn.', '- Đây là khóa học dạy kĩ năng sống và phát triển con người, dành cho phụ nữ trên 18 tuổi. Khóa học đã được tổ chức cho hơn 20,000 phụ nữ trên toàn thế giới, phổ biến tại hơn 30 quốc gia, nay đã có mặt tại Esto để giúp các bạn gái, những phụ nữ có được những bí quyết để trẻ đẹp, khỏe khoắn, hấp dẫn ngay từ bên trong.   \r\n- Trong cuộc sống, không có thành công nào trải đầy hoa hồng. Chẳng bao giờ tiền tài rớt xuống chỉ sau một giấc ngủ say. Chính vì vậy, hãy cố gắng cải thiện bản thân từng ngày, kiên trì từng chút một và không khuất phục trước thất bại. Hãy đẹp theo cách của riêng bạn, đẹp từ bên trong.', 34, 15, NULL),
(44, 'Massage dưỡng sinh Đầu - Vai - Gáy', 'suckhoe_2.jpg', 399999, 'Massage là một phương pháp giúp bảo vệ sức khỏe và thư giãn hệ thần kinh. Massage thường xuyên nhằm tăng cường thể chất, củng cố hệ miễn dịch để chăm sóc bản thân và gia đình mình một cách hiệu quả.', '- Phương pháp Massage dưỡng sinh đầu - vai - gáy là phương pháp bảo vệ sức khỏe và thư giãn hệ thần kinh hiệu quả nhất, giúp tăng cường thể chất, củng cố hệ miễn dịch, nâng cao sức đề kháng cho cơ thể.\r\n- Vùng đầu, vai, gáy là những bộ phận quan trọng của cơ thể, thường xuyên massage đầu, vai, gáy có tác dụng thúc đẩy sự tuần hoàn máu, cải thiện việc cung cấp máu cho não bộ, tốt cho hệ thần kinh trung ương. Ngoài ra, Massage còn giúp cho tình thần thoải mái, giúp ngủ ngon, phòng tránh các bệnh về suy nhược thần kinh, các bệnh về mạch máu não, tăng cường chức năng điều tiết các cơ quan trong cơ thể.\r\n- Ngoài ra, sử dụng liệu pháp massage còn hỗ trợ cung cấp máu đến các khớp xương, gân cơ, dây chằng được tốt hơn. Nhờ đó làm gia tăng sự tiết dịch giúp dây chằng luôn giữ được tính đàn hồi. Nếu thực hiện đúng kỹ thuật Massage có thể mang lại những hiệu quả tốt cho sức khỏe người bệnh. ', 35, 15, NULL),
(45, 'Tập Yoga cơ bản ngay tại nhà với Nguyễn Hiếu', 'suckhoe_3.jpg', 250000, 'Học Yoga cơ bản ngay tại nhà giúp cải thiện sức khoẻ tinh thần, thể chất của bạn. Ngoài ra, việc học Yoga Online tại nhà cũng giúp bạn tiết kiệm được nhiều thời gian và chi phí so với việc học ở các trung tâm.', '- Các bài giảng trong khóa học được hướng dẫn chi tiết bởi đại sứ Yoga.\r\n- Với lộ trình khóa học được thiết kế gồm nhiều bài giảng. Kết thúc khóa học yoga tại nhà này bạn sẽ biết cách tập một số động tác Yoga cơ bản ngay tại nhà, giúp cải thiện cơ bắp, tăng tính linh hoạt, giúp cân bằng, thư giãn và giảm stress. Không những thế những bài tập Yoga trong khóa học này còn giúp bạn giảm các triệu trứng của bệnh trầm cảm, lo âu và đau mãn tính…', 36, 15, NULL),
(46, '36 Thế Yoga tăng cường sinh lý', 'suckhoe_4.jpg', 350000, 'Bài tập kích hoạt sinh lực, tăng sự linh hoạt, quyến rũ, tạo niềm vui cuộc sống, hạnh phúc gia đình.', '- Với 36 Thế tăng cường sinh lý được hướng dẫn chi tiết bởi Đại sứ Yoga Nguyễn Hiếu, bạn không chỉ cảm thấy cơ thể được thanh lọc nhẹ nhàng, uyển chuyển, linh hoạt và quyến rũ hơn mà còn giúp kích hoạt sinh lực, tạo niềm vui trong cuộc sống.\r\n- Thêm một điểm đặc biệt của khóa học là mua một lần sở hữu trọn đời. Bạn có thể học mọi lúc, mọi nơi khi điện thoại hoặc máy tính có kết nối Internet. Điều này giúp bạn chủ động hơn trong việc học, tiết kiệm thời gian và chi phí so với hình thức học offline tại trung tâm. ', 36, 15, NULL),
(47, 'Yoga cho Thân Khỏe, Tâm An', 'suckhoe_5.jpg', 599000, 'Khóa học giúp bạn cảm nhận chuyển biến tích cực về thể chất lẫn tinh thần. Nhờ đó bạn có thể làm việc hiệu quả và tận hưởng cuộc sống với năng lượng dồi dào.', '- Sức khoẻ là nền tảng của hạnh phúc, nhưng cuộc sống bận rộn dễ khiến chúng ta lơ là việc chăm sóc sức khoẻ. Dẫn tới nhiều vấn đề về thể chất lẫn tinh thần như mệt mỏi, đau nhức, căng thẳng, trầm cảm.  Với khoá học \"Yoga cho Thân Khoẻ, Tâm An\", Milena sẽ đồng hành cùng bạn mỗi ngày để giúp bạn trở nên khoẻ khoắn và hạnh phúc hơn.  \r\n- Khoá học được hướng dẫn bởi giảng viên Milena Nguyễn - Giảng viên Yoga quốc tế, diễn giả, blogger nổi tiếng, người sáng lập ra Soulful Garden - nơi phụ nữ tìm lại vẻ đẹp và tình yêu qua Yoga, Pilates, Thiền, và Nghệ Thuật. Những chia sẻ của chị về sức khoẻ, tình yêu, và cuộc sống được yêu thích bởi độc giả khắp thế giới.', 37, 15, NULL),
(48, 'Yoga chữa bệnh trị liệu cho cột sống', 'suckhoe_6.jpg', 399999, 'Đại sứ Yoga Nguyễn Hiếu hướng dẫn bạn 20 bài tập Yoga chữa bệnh trị liệu cho cột sống giúp bạn có thân hình xương khớp dẻo dai.', '- Cơ thể là kiệt tác của tạo hóa và cột sống chính là trụ cột vững chắc, nơi tập trung hơn 90% các dây thần kinh dẫn truyền trực tiếp lên não bộ, điều khiển chức năng vận động. Nếu cột sống bị tổn thương dễ gây ra những biến chứng làm ảnh hưởng đến công việc và cuộc sống của chúng ta.Và Yoga được biết đến là một phương pháp trị liệu tự nhiên giúp phục hồi chức năng, gia tăng sức khỏe và điều hòa cơ thể mà không cần dùng thuốc.\r\n- Tất cả chúng ta đều có thể tự cải thiện chức năng bằng phương pháp Yoga trị liệu cột sống để có một cơ thể dẻo dai khỏe mạnh. Đến với khóa học Online Yoga chữa bệnh trị liệu cột sống của giảng viên Nguyễn Hiếu sẽ mang đến cho bạn chế độ trị liệu và điều dưỡng hoàn hảo từ chế độ dinh dưỡng đến xây dựng phương pháp luyện tập hiệu quả cao.', 36, 15, NULL),
(49, 'Yoga 30 ngày, con người mới - toàn diện trong ngoài', 'suckhoe_7.jpg', 599000, 'Chỉ với 30 ngày học Yoga giúp bạn trở thành con người hoàn toàn mới- Yoga giúp bạn hiểu sâu hơn về cơ thể mình tâm trí trở nên sáng khoái hơn, sức khoẻ dồi dào', '- Trong cuộc sống hiện đại ngày nay, bên cạnh những công việc hằng ngày tất cả mọi người đều quan tâm đến sức khỏe, sắc đẹp không chỉ có chị em phụ nữ mà các phái nam cũng theo đuổi bộ môn yoga này bên cạnh tập gym hoặc loại hình khác.\r\n- Chỉ với các bài tập đơn giản, sau một tuần bạn sẽ cảm nhận được sự thay đổi khác biệt về cơ thể, sự chuyển động linh hoạt và nhẹ nhàng hơn trong từng cử chỉ sẽ làm bạn cảm thấy phấn khởi và tự tin trong cuộc sống. Gắn kết lâu dài với những bài tập này mỗi ngày bạn sẽ càng yêu thích và đam mê nó nhiều hơn. \r\n- Chỉ 15 phút mỗi ngày, với tuyển tập Clip được biên soạn tỉ mỉ, sắp xếp công phu, truyền đạt ngắn gọn, DiỄN ĐẠT SÚC TÍCH, Alex Vinh tài tình đưa người tập những điều then chốt, căn bản nhất nhưng không kém phần thú vị, trong khoảng thời gian quý giá của mỗi người. ', 38, 15, NULL),
(50, 'Yoga tăng cường sinh lý, giãn cơ, giảm stress dành cho nam giới', 'suckhoe_8.jpg', 500000, 'Khóa học chia sẻ bí quyết tập yoga hiệu quả giúp giảm stress, kích thích sinh lực, gia tăng hạnh phúc gia đình', '- Khóa học được thiết kế riêng cho nam giới, cung cấp đầy đủ những điều căn bản, nền tảng cho các bạn nam để tập yoga đạt kết quả, từ việc hít thở, lợi ích về cơ thể, tâm trí, những lưu ý,,,\r\n- Với các bài tập, các động tác, cách hít thở, kiểm soát cơ thể các bạn sẽ đạt được những mục tiêu tăng cường sinh lý, một cuộc sống viên mãn hạnh phúc của gia đình mình. Khoá học bao gồm 21 bài, trong đó các bài tập, kỹ thuật được chọn lọc từ các bậc thầy yoga, thiền, khí công, thái cực.\r\n- Đến với khoá học bạn sẽ tìm được không gian riêng tư dành cho chính mình, giảng viên có thể theo dõi tiến độ của bạn trong suốt quá trình học trong chính ngôi nhà bạn. Tất cả được cô đọng một cách khoa học, đem đến cho học viên dù ở mọi trình độ yoga, lứa tuổi hoặc đặc điểm ngành nghề.', 38, 15, b'0'),
(51, 'Tự học tiếng Hàn thật dễ - Sơ cấp 1', 'tienghan_1.jpg', 350000, 'Khoá học tiếng Hàn sơ cấp giúp bạn nâng cao vốn từ vựng, ngữ pháp theo chủ đề, tự tin giao tiếp cơ bản với người Hàn Quốc, phát âm chuẩn - phản xạ nhanh.', '- Hướng dẫn bạn cách đọc và giải thích từ vựng trong mỗi bài\r\n- Giải thích ngữ pháp trong các bài của giáo trình, so sánh các ngữ pháp tương đồng\r\n- Hướng dẫn làm các kỹ năng nghe, nói, đọc, viết trong giáo trình\r\n- Đóng vai cùng học viên trong các bài hội thoại thực hành nói theo yêu cầu của sách\r\n- Hướng dẫn phát âm chuẩn.', 88, 8, NULL),
(52, 'Tự học tiếng Hàn thật dễ - Trung cấp 1', 'tienghan_2.jpg', 659999, 'Dựa trên giáo trình Tiếng Hàn tổng hợp dành cho người Việt - Quyển 3, khóa học giúp bạn tự học Tiếng Hàn trung cấp ngay tại nhà.', '- Hướng dẫn đọc và giải thích từ vựng trong mỗi bài\r\n- Giải thích ngữ pháp trong các bài của giáo trình, so sánh các ngữ pháp tương đồng\r\n- Hướng dẫn học viên làm các kỹ năng nghe, nói, đọc, viết trong giáo trình\r\n- Đóng vai cùng học viên trong các bài hội thoại thực hành nói theo yêu cầu của sách\r\n- Hướng dẫn phát âm chuẩn', 88, 8, NULL);
INSERT INTO `khoahoc` (`MAKH`, `TENKH`, `ANH`, `DONGIA`, `GIOITHIEUKH`, `CHITIETKH`, `MAGV`, `MADM`, `TRUCTUYEN`) VALUES
(53, 'Tự học tiếng Hàn thật dễ - Sơ cấp 2', 'tienghan_3.jpg', 659999, 'Khoá học tiếng Hàn sơ cấp 2 giúp học viên nâng cao toàn bộ vốn từ vựng, ngữ pháp, luyện phát âm, phản xạ tiếng Hàn, giúp bạn thi đỗ TOPIK cấp 2. Bạn có thể hoàn toàn tự tin giao tiếp trước đám đông hoặc bất kỳ hoàn cảnh nào.', '- Bài giảng chi tiết, tỉ mỉ từ giảng viên Nguyễn Văn Khánh  có nhiều kinh nghiệm dạy tiếng Hàn sẽ giúp bạn học viên tiếp thu kiến thức dễ dàng hơn. Với sự chuẩn bị bài giảng chi tiết, chỉn chu, âm thanh rõ ràng, dạy học bằng tiếng Việt sẽ giúp học viên nắm được bài học nhanh chóng và dễ dàng hơn.\r\n- Kết thúc 57 bài giảng, phát âm tiếng âm tiếng Hàn của bạn sẽ chính xác lên rất nhiều, ngữ pháp chắc chắn, hội thoại tự nhiên như người Hàn, biết cách học ngoại ngữ online từ vựng và ngữ pháp mới thông qua các ví  dụ hằng ngày, cải thiện sự hiểu biết về tiếng Hàn….', 88, 8, NULL),
(54, 'Tiếng Hàn sơ cấp 1: Chuẩn phát âm, chắc ngữ pháp', 'tienghan_4.jpg', 399999, 'Giúp bạn nhanh chóng nắm được kiến thức tiếng Hàn sơ cấp từ phát âm, từ vựng tới ngữ pháp.', '- Tham gia khóa học, bạn sẽ có cho mình một nền tảng cơ bản về tiếng Hàn kiến thức về phát âm chuẩn, từ vựng và ngữ pháp. Các kiến thức này được chia theo chủ đề rõ ràng giúp quá trình học ngoại ngữ online thuận tiện hơn và dễ nhớ hơn. Bạn có thể hiểu thêm về văn hóa Hàn Quốc, nhanh chóng giao tiếp cơ bản được và tự tin để học lên các cấp độ cao hơn hoặc đi du lịch Hàn Quốc mà không sợ bỡ ngỡ. \r\n- Lợi ích sau khi tham gia khóa học là bạn sẽ phát âm chuẩn tiếng Hàn, nắm ngữ pháp chắc chắn và giao tiếp được văn bản thông qua các ví dụ hội thoại hàng ngày, thông qua các tài liệu khác nhau về từ vựng cơ bản, ngữ pháp, nói, nghe, viết và đọc.', 89, 8, NULL),
(55, 'Tiếng Hàn sơ cấp 2: Giao tiếp như người Hàn', 'tienghan_5.jpg', 499000, 'Khóa học sẽ giúp bạn nắm chắc kiến thức để chinh phục tiếng Hàn sơ cấp 2 và giao tiếp như người bản địa. Tăng lượng từ vựng giao tiếp tiếng Hàn cũng như phản xạ ngoại ngữ đỉnh cao', '- Phát âm tiếng Hàn chính xác, ngữ pháp chắc chắn, hội thoại tự nhiên như người Hàn;\r\n- Được trang bị các kỹ năng cần thiết cho cuộc sống hàng ngày trong các tình huống thực tế;\r\n-Học từ vựng và ngữ pháp mới thông qua các ví dụ hàng ngày và phổ biến;', 89, 8, NULL),
(56, 'Chinh phục tiếng Hàn trung cấp 1 - Từng bước nâng cao', 'tienghan_6.jpg', 599000, 'Giúp bạn nâng cao khả năng tiếng Hàn, chinh phục tiếng Hàn trung cấp nhanh chóng và dễ dàng.', '- Đây là khóa học phù hợp cho bạn. Trong khóa học, giảng viên Nguyễn Vy Thảo Trang sẽ giảng dạy một cách chi tiết, tỉ mỉ giúp học viên tiếp thu kiến thức dễ dàng hơn. Giảng viên dạy học bằng tiếng Việt giúp học viên nắm được bài học ngoại ngữ online dễ dàng hơn. \r\n- Bạn có thể tìm hiểu các chức năng giao tiếp cần thiết cho cuộc sống hàng ngày và các mối quan hệ của con người thông qua khóa học, để áp dụng vào việc giao tiếp tiếng Hàn. Các kiến thức này được chia theo chủ đề rõ ràng giúp quá trình học thuận tiện hơn và dễ nhớ hơn.\r\n- Sau khi tham gia khóa học bạn sẽ có thể phát âm tiếng Hàn chính xác, ngữ pháp chắc chắn, hội thoại tự nhiên như người Hàn; trang bị các kỹ năng cần thiết cho cuộc sống hàng ngày trong các tình huống thực tế; học từ vựng và ngữ pháp mới thông qua các ví dụ hàng ngày; cải thiện sự hiểu biết về tiếng Hàn thông qua các tài liệu khác nhau về từ vựng cơ bản, ngữ pháp, nghe, nói, đọc và viết.', 89, 8, NULL),
(57, 'Chinh phục tiếng Hàn trung cấp 2: Tiếng Hàn chuyên nghiệp', 'tienghan_7.jpg', 250000, 'Giúp bạn nhanh chóng thành thạo tiếng Hàn và chinh phục trung cấp 2.', '- Tiếp nối khóa học Chinh phục tiếng Hàn trung cấp 1: Tiếng Hàn chuyên nghiệp thì khóa học Chinh phục tiếng Hàn trung cấp 2: Tiếng Hàn chuyên nghiệp của giảng viên Nguyễn Thảo Vy là lựa chọn phù hợp cho bạn.\r\n- Trong khóa học, giảng viên Nguyễn Vy Thảo Trang sẽ giảng dạy một cách chi tiết, tỉ mỉ giúp học viên tiếp thu kiến thức dễ dàng hơn. Giảng viên dạy học bằng tiếng Việt giúp học viên nắm được bài học dễ dàng hơn. Bạn có thể tìm hiểu các chức năng giao tiếp cần thiết cho cuộc sống hàng ngày và các mối quan hệ của con người thông qua khóa học, để áp dụng vào việc giao tiếp tiếng Hàn. Các kiến thức này được chia theo chủ đề rõ ràng giúp quá trình học ngoại ngữ online thuận tiện hơn và dễ nhớ hơn.', 89, 8, NULL),
(58, 'Luyện Thi Topik I', 'tienghan_8.jpg', 659999, 'Khóa học chính là giải pháp tối ưu giúp bạn tiết kệm thời gian, chi phí học tập, ôn luyện Topik I để đạt điểm số cao như bạn mong muốn.', 'Giáo trình khóa học có 75 bài giảng bao gồm các phần học chính như sau:\r\n- Phần 1: Từ vựng thường gặp trong Topik 1 \r\n- Phần 2: Ngữ pháp cần biết trong Topik 1\r\n- Phần 3: Luyện kỹ năng giải đề\r\nGiảng viên Châu Thùy Trang tốt nghiệp khoa Hàn Quốc Ngữ trường Đại học Hannam, có 6 năm kinh nghiệm giảng dạy tiếng Hàn sẽ giúp bạn ôn luyện và chuẩn bị tốt nhất cho kì thi Topik I. ', 90, 8, NULL),
(59, 'Luyện thi Topik II', 'tienghan_9.jpg', 899999, 'Khóa học luyện Thi Topik II chính là giải pháp tối ưu dành cho bạn, giúp bạn tiết kệm thời gian, chi phí học tập, ôn luyện, mà vẫn đạt được kết quả cao khi tham gia kì thi.', '- Khóa học \"Luyện Thi Topik II\"  chính là giải pháp tối ưu dành cho bạn, giúp bạn tiết kệm thời gian, chi phí học tập, ôn luyện. Khóa học sẽ giúp bạn ôn lại một số từ vựng cần nắm khi thi Topik II, ôn lại tất cả các cấu trúc ngữ pháp khi thi Topik II, đặc biệt là luyện giải đề thi với 16 dạng câu thường gặp trong Topik II', 90, 8, NULL),
(60, 'Học giao tiếp tiếng Hàn thật dễ', 'tienghan_10.jpg', 799999, 'Khoá học giao tiếp tiếng Hàn giúp bạn nắm chắc từ vựng, cấu trúc ngữ pháp tiếng Hàn trong giao tiếp nhanh chóng để tự tin học và làm việc trong môi trường tiếng Hàn.', '- Với 54 bài giảng về 8 chủ đề về học tiếng Hàn quốc giao tiếp từ những kiến thức cơ bản về nguyên âm, phụ âm của Tiếng Hàn, đến cách sử dụng tiếng Hàn trong các trường hợp sinh hoạt hàng ngày như: ở nhà, đời sống, cuối tuần, trường học, thời tiết, du lịch, mua sắm,...với vồn từ vựng đầy đủ cũng như cấu trúc ngữ pháp, xử lý tình huống trong từng văn cảnh hội thoại cụ thể.\r\n- Chắc chắn sau khóa học Học giao tiếp tiếng Hàn rất dễ cùng cô Thùy Trang, trình độ tiếng Hàn của bạn sẽ được cải thiện, bạn sẽ tự tin hơn để trò chuyện với người Hàn Quốc.', 90, 8, NULL),
(61, 'Luyện Thi Topik II _ Kỹ năng Nghe - Viết', 'tienghan_11.jpg', 599000, 'Khóa học dành cho tất cả những người sử dụng tiếng Hàn như ngôn ngữ thứ hai', 'Khóa học Luyện Thi Topik II _ Kỹ Năng Nghe - Viết cùng giảng viên Châu Thuỳ Trang sẽ giúp bạn nhanh chóng luyện tập các nghĩ năng nghe viết một cách hiệu quả.\r\n-Luyện Kỹ năng Nghe Trung cấp câu 1~30.\r\n- Luyện Kỹ năng Viết Câu 51-52-53.\r\n- Giải thích và làm quen mẫu câu viết số 54.', 90, 8, NULL),
(62, 'Nói tiếng Hàn như người bản ngữ - Sơ cấp', 'tienghan_12.jpg', 399999, 'Giúp bạn tự học Tiếng Hàn ngay tại nhà, đạt trình độ sơ cấp.', '- Khóa học có sự kết hợp hội thoại cùng giáo viên Hàn quốc giúp tăng khả năng phát âm chính xác từ vựng theo đúng ngữ điệu của người bản địa.\r\n- 100% giáo viên Hàn Quốc giảng dạy. \r\n- Giọng chuẩn Seoul cực dễ nghe. \r\n- Có cả sub Hàn và sub Việt hỗ trợ tối đa bài giảng. \r\n- Phương pháp BIGMAX COACHING áp dụng tuyệt đối trong việc tạo nên thói quen ngôn ngữ ngay từ những bài đầu tiên. \r\n- Chương trình luyện nghe sâu bổ sung kỹ năng được nâng cấp từ nền tảng BIG GEN. \r\n- Học dễ dàng ngay tại nhà chẳng cần đi xa với máy tính, điện thoại, máy tính bảng đều được. ', 91, 8, NULL),
(63, 'Nói tiếng Hàn như người bản ngữ - Trung cấp', 'tienghan_13.jpg', 499000, 'Khoá học sẽ dạy bạn nói tiếng Hàn sao cho thành thạo giống người bản địa. Bạn có thể tự học Tiếng Hàn ngay tại nhà vô cùng tiện lợi. Chỉ trong thời gian ngắn chắc chắn bạn sẽ đạt trình độ trung cấp một cách bất ngờ.', 'Nội dung khóa học dạy nói tiếng Hàn:\r\n- HỌC TỪ MỚI siêu trực quan, sinh động với cả hình ảnh và âm thanh.\r\n- HỌC NGỮ PHÁP thần tốc, dễ dàng theo cách của người bản ngữ\r\n- LUYỆN PHÁT ÂM siêu kỹ lưỡng nhờ giọng thu bản địa với các tốc độ từ mới bắt đầu đến tốc độ bản ngữ. \r\n- LUYỆN NGHE SÂU đến nỗi \"nối ấm, âm cuối, tiểu từ\"... không còn là nỗi sợ! \r\n- HỌC HÀO HỨNG CẢ VỚI BẢN RADIO NGHE SÂU & VIDEO.', 91, 8, NULL),
(64, 'Tự học Tiếng Hàn trong 3 tháng', 'tienghan_14.jpg', 659999, 'Bạn sẽ có nền tảng kiến thức, trình độ cơ bản vững chắc về tiếng Hàn, bạn sẽ biết phương pháp, lộ trình học tiếng Hàn đúng đắn và hiệu quả nhất từ người đã trực tiếp trải nghiệm thực tế và đã thành công, bạn sẽ có thể tự học tiếng Hàn để đạt trình độ cao hơn.', 'Hãy thử đến với khóa học: Tự học Tiếng Hàn trong 3 tháng của giảng viên Nguyễn Trang trên ESTO. Khóa học sẽ cùng đồng hành và hướng dẫn các bạn tự học tiếng Hàn từ những cái cơ bản nhất, mình sẽ cung cấp cho bạn 1 nền tảng kiến thức và một trình độ cơ bản vững chắc về tiếng Hàn, phương pháp học tiếng Hàn sao nhanh nhất, đúng hướng nhất và hiệu quả nhất, giúp bạn tiết kiệm thời gian và công sức để đạt được mục tiêu Topik mà mình là người trực tiếp trải nghiệm thực tế và đã thành công và nay mình mới chia sẻ lại ở trong khóa học này.', 92, 8, NULL),
(65, 'Cách giải đề đọc tiếng Hàn Topik II', 'tienghan_15.jpg', 599000, 'Chia sẻ cho bạn các bí quyết nâng điểm đề Đọc Topik II.', 'Khóa học sẽ giới thiệu các dạng đề thi Topik và cách giải đề thật nhanh và chính xác. Với giáo trình do chuyên gia Hàn Quốc nhiều năm kinh nghiệm dạy ôn thi Topik biên soạn, học viên sẽ được giảng dạy một cách có hệ thống, tỉ mỉ, phát âm chính xác. Bài giảng chi tiết, chỉn chu, âm thanh nghe rõ từ giảng viên có nhiều kiến thức và kinh nghiệm giảng dạy tiếng Hàn. Bạn có thể học văn hóa Hàn Quốc một cách tự nhiên dựa trên ngôn ngữ Hàn Quốc.', 93, 8, NULL),
(66, 'Vui Học Tiếng Hàn', 'tienghan_16.jpg', 250000, 'Nói Tiếng Hàn như người bản xứ.', '- Thông qua khóa học, chúng ta sẽ thấy, học tiếng Hàn không hề khóa như chúng ta nghĩ nhưng nó đòi hỏi bạn phải kiên trì, chú tâm rất nhiều ngữ âm. Tuy nhiên, bất kỳ ngôn ngữ nào  cũng gây khó khăn cho người học vì nó không giống như ngôn mẹ đẻ của chúng ta, nó khác biệt hoàn toàn.\r\n- Nhưng với kiến thức và kinh nghiệm dạy tiếng Hàn  nhiều năm của giảng viên Đỗ Ngọc Luyến sẽ giúp cho người học nắm rõ kiến thức về tiếng Hàn. Phát âm và nói giống người bản xứ dựa vào phương pháp shadowing và tương tác trực tiếp.', 94, 8, NULL),
(67, 'Tiếng Trung Giao Tiếp - 1', 'tiengtrung_1.jpg', 659999, 'Giúp bạn giao tiếp tiếng trung cơ bản một cách thành thạo và tự tin học lên trình độ cao hơn.', '- Khóa học được soạn theo sườn của giáo trình \"301 câu đàm thoại tiếng Hoa\", đây là một trong những giáo trình nổi tiếng cho những bạn không chuyên học tiếng Trung. 3 bài đầu tiên admin dậy rất kỹ về học phát âm tiếng Trung, các bạn cần tập trung năng lượng để hoàn thiện 3 bài đầu về học phát âm nhé.\r\n- Sau đó thì chúng ta sẽ học 20 bài trong giáo trình, mỗi bài đều có cấu trúc lần lượt như sau \"từ vựng - ngữ pháp - mẫu câu - hội thoại - chữ Hán\". Ngoài ra để các bạn học hiệu quả, thì sau mỗi bài các bạn cần làm bài tập như (nghe file mp3 của người bản địa, tự thu âm lại, làm các bài tập trong giáo trình, tập gõ chữ Hán, tập viết chữ Hán).', 95, 11, NULL),
(68, 'Tiếng Trung Giao Tiếp - 2', 'tiengtrung_2.jpg', 599000, 'Khóa học \"Tiếng Trung Giao Tiếp - 2\" là chương trình tiếp tục của khóa học \"Tiếng Trung Giao Tiếp - 1', '- Khóa học ngoại ngữ \"Tiếng Trung Giao Tiếp - 2\" là chương trình tiếp tục của khóa học \"Tiếng Trung Giao Tiếp - 1\". Chúng ta sẽ học thêm nhiều chủ đề hơn, nhiều mẫu câu hơn trong giao tiếp.\r\n- Khóa học sẽ giúp bạn phát triển thêm về từ vựng cũng như mẫu câu đàm thoại.', 95, 11, NULL),
(69, 'Tiếng Trung sơ cấp 1 - Dành cho người mới bắt đầu', 'tiengtrung_3.jpg', 399999, 'Giúp những người mới bắt đầu nhanh chóng nắm vững các kiến thức cơ bản của tiếng Trung.', '- Học xong khóa 1 bạn sẽ có đầy đủ kiến thức để thực hành cả 4 kỹ năng này trong giao tiếp cơ bản, thi đạt HSK, sử dụng hàng ngày một cách tốt nhất. Các cuộc đối thoại với người Trung Quốc về giới thiệu bản thân, gia đình, nghề nghiệp, mua bán, kinh doanh sẽ được dạy để áp dụng được ngay lập tức.\r\n- Bạn sẽ được làm quen với ngữ âm của tiếng Trung, bảng chữ cái tiếng Trung, bạn nắm được cách kết hợp cách ghép chữ, cách viết tiếng Trung.', 96, 11, NULL),
(70, 'Tiếng trung sơ cấp 2 - Tự tin giao tiếp', 'tiengtrung_4.jpg', 499999, 'Giúp bạn nhanh chóng tự tin giao tiếp tiếng Trung ở trình độ sơ cấp.', 'Chương trình học ngoại ngữ online sẽ giúp bạn phát triển đầy đủ 4 kỹ năng Nghe - nói - đọc - viết, được biên soạn và tối ưu thêm dựa trên những bộ giáo trình phổ biến như Hán Ngữ hoặc BOYA. Học xong khóa học này bạn sẽ có đầy đủ kiến thức để thực hành cả 4 kỹ năng này trong giao tiếp cơ bản, thi đạt HSK, sử dụng hàng ngày một cách tốt nhất. Các cuộc đối thoại với người Trung Quốc về giới thiệu bản thân, gia đình, nghề nghiệp, mua bán, kinh doanh sẽ được dạy để áp dụng được ngay lập tức.', 96, 11, NULL),
(71, 'Tiếng Trung thương mại và du lịch', 'tiengtrung_5.jpg', 399999, 'Khoá học tiếng Trung thương mại giúp bạn tự tin giao tiếp tiếng Trung khi đi du lịch và trong việc mua bán với người Trung Quốc dễ dàng hơn rất nhiều. Những cuộc trao đổi, giao dịch đều sẽ diễn ra thuận lợi và mang về kết quả ngoài mong đợi', 'Tiếng Trung thương mại khác tiếng Trung thông thường ở từ vựng và cách nói chuyện. Để nâng cao vốn từ vựng, chúng tôi giới thiệu đến các bạn khóa học Tiếng Trung thương mại và du lịch của giảng viên Nguyễn Danh Vân trên ESTO để giúp bạn Tự tin giao tiếp tiếng Trung khi đi du lịch và trong việc mua bán với người Trung Quốc.', 97, 11, NULL),
(72, 'Tiếng Trung ứng dụng thực hành cấp tốc (Sơ cấp)', 'tiengtrung_6.jpg', 399999, 'Lấy lại căn bản tiếng Trung, tự tin giao tiếp với người bản địa.', '- Mỗi bài giảng bao gồm: Các mẫu câu cần ghi nhớ, bài khóa với phần giảng giải chi tiết từ vựng, ngữ pháp, giúp bạn ghi nhớ nhanh các từ vựng, ngữ pháp trọng tâm, các mẫu câu hội thoại, thực hành giao tiếp được ngay.\r\n- Bài giảng trực quan như học trực tiếp, nội dung chi tiết, đầy đủ giúp bạn nhanh chóng làm chủ tiếng Trung, tự tin giao tiếp với người bản địa.', 97, 11, NULL),
(73, 'Tiếng Trung ứng dụng thực hành cấp tốc (Trung cấp)', 'tiengtrung_7.jpg', 499000, 'Lấy lại căn bản tiếng Trung, tự tin giao tiếp với người bản địa.', '- Chương trình Tiếng Trung ứng dụng thực hành cấp tốc, được chia thành 3 khóa (Sơ cấp, Trung cấp, Cao cấp) với những bài giảng đi từ cơ bản đến nâng cao, giảng viên sẽ giúp bạn học và thực hành tiếng Trung ngay, bạn không cần phải tốn quá nhiều thời gian.\r\n- Mỗi bài giảng bao gồm: Các mẫu câu cần ghi nhớ; bài khóa với phần giảng giải chi tiết từ vựng, ngữ pháp, giúp bạn ghi nhớ nhanh các từ vựng, ngữ pháp trọng tâm, các mẫu câu hội thoại, thực hành giao tiếp được ngay.\r\n- Bài giảng trực quan như học trực tiếp, nội dung chi tiết, đầy đủ giúp bạn nhanh chóng làm chủ tiếng Trung, tự tin giao tiếp với người bản địa.', 97, 11, NULL),
(74, 'Tiếng Trung ứng dụng thực hành cấp tốc (Cao cấp)', 'tiengtrung_8.jpg', 599000, 'Lấy lại căn bản tiếng Trung, tự tin giao tiếp với người bản địa.', '- Mỗi bài giảng bao gồm: Các mẫu câu cần ghi nhớ; bài khóa với phần giảng giải chi tiết từ vựng, ngữ pháp, giúp bạn ghi nhớ nhanh các từ vựng, ngữ pháp trọng tâm, các mẫu câu hội thoại, thực hành giao tiếp được ngay.\r\nLợi ích của khóa học: \r\n- Có ngay hơn 400 từ vựng giao tiếp thông dụng trong tiếng Trung\r\n- Thành thạo các cấu trúc ngữ pháp chuyên sâu trong tiếng Trung\r\n- Có đủ kiến thức để thi được HSK 4/6 (Mức HKS thứ 4 trong 6 cấp HSK theo quy định của Trung Quốc và có giá trị toàn cầu)\r\n- Tự tin giao tiếp với người Trung Quốc', 97, 11, NULL),
(75, 'Tiếng Trung cơ bản dành cho dân văn phòng - Phần 1', 'tiengtrung_9.jpg', 399999, 'Bạn là nhân viên công ty muốn học thêm về tiếng Trung giao tiếp cơ bản thì đây chính là khóa học dành cho bạn! Khoá học sẽ giúp bạn được trang bị kiến thức từ vựng, giao tiếp toàn diện và việc giao tiếp sẽ trở nên dễ dàng hơn!', '- Khóa học Tiếng Trung cơ bản dành cho dân văn phòng - Phần 1 của giảng viên Nguyễn Danh Vân ra đời với mục đích giúp các bạn tiết kiệm được thời gian, công sức, tiền bạc, nhưng vẫn đảm bảo các bạn nắm vững và sử dụng tiếng Trung một cách thành thạo với các trường hợp thực tế.\r\n- Bạn sẽ không phải mất thời gian đi lại để tham gia các khóa học tập trung hoặc đóng tiền học rồi mà vẫn phải lo lắng không biết giáo viên ở đó phát âm thế nào, dạy có dễ hiểu không, hiệu quả ra sao.', 97, 11, NULL),
(76, 'Tiếng Trung cơ bản dành cho dân văn phòng - Phần 2', 'tiengtrung_10.jpg', 499000, 'Bạn sẽ không còn lo lắng vì gặp khó khăn trong giao tiếp tiếng Trung công sở.', '- Khóa học với những bài giảng được giảng viên Nguyễn Danh Vân biên soạn tổng hợp từ các giáo trình sử dụng phổ biến hiện nay, với những mẫu câu đối thoại ngắn gọn, xúc tích, những hình ảnh trực quan đơn giản, giúp tăng khả năng ghi nhớ chữ Hán, nắm vững ngữ pháp Tiếng Trung và biết cách sử dụng tiếng Trung nhanh hơn.\r\n- Và điều quan trọng nhất là, chỉ với mức đầu tư vô cùng thấp, bạn đã có cơ hội để giao tiếp tiếng Trung thành thạo. ', 97, 11, NULL),
(77, 'Tiếng Trung ứng dụng thực hành cấp tốc siêu cấp (phần 1)', 'tiengtrung_11.jpg', 399999, 'Học tiếng Trung ứng dụng với 10 chủ đề, học cấp tốc, học xong thực hành được ngay, tự tin giao tiếp với người Trung Quốc.', '- Học và ứng dụng giao tiếp những chủ đề thông dụng với người Trung Quốc\r\n- Hiểu được cấu trúc ngữ pháp câu và cách sử dụng ngữ pháp để hành văn\r\n- Tự tin giao tiếp tiếng Trung như người bản xứ thông qua các bài học\r\n- Học Online 24/7 ngay tại nhà giúp tiết kiệm thời gian và chi phí.', 97, 11, NULL),
(78, 'Tiếng Trung ứng dụng thực hành cấp tốc siêu cấp (phần 2)', 'tiengtrung_12.jpg', 499000, 'Dành cho học viên là người đã đạt trình độ tiếng Trung trung cấp trở lên', '- Trong khóa học Tiếng Trung ứng dụng thực hành cấp tốc nâng cao 2, các bạn sẽ được học về 10 chủ đề với các cấp độ nâng cao hơn, như : Bố dượng, tôi nên làm như thế nào, người tốt khó làm, trường học mạng máy tính, chủ đề trăm họ, tiếng Hán càng học càng thú vị,....', 97, 11, NULL),
(79, 'Tiếng trung sơ cấp 1', 'tiengtrung_13.jpg', 399999, 'Khoá học tiếng Trung sơ cấp giúp bạn Học tiếng Trung dễ dàng hơn qua các mẫu câu, hội thoại, luyện phát âm, viết chữ Hán, luyện phản xạ giao tiếp và nhanh chóng thành thạo tiếng Trung.', '- Khóa học Tiếng Trung sơ cấp 1 được biên soạn và giảng dạy bởi trung tâm dạy ngoại ngữ Online lớn nhất Đài Loan EZ Language sẽ giúp bạn nhanh chóng thành thạo tiếng Trung trong thời gian ngắn nhất. \r\n- Nội dung khóa học đi từ giao tiếp cơ bản như các lời chào hỏi thông thường đến các đoạn hội thoại thông dụng trong cuộc sống hằng ngày, giúp bạn hiểu được về ngôn ngữ tiếng Trung, nắm được từ vựng, ngữ pháp, phát âm và cách viết tiếng Trung ở mức cơ bản.', 98, 11, NULL),
(80, 'Tiếng Trung sơ cấp 2', 'tiengtrung_14.jpg', 499000, 'Tự học Tiếng Trung hiệu quả qua các mẫu hội thoại giao tiếp thực tế, giúp nâng cao vốn từ, ngữ pháp, luyện phản xạ giao tiếp để tự tin giao tiếp với người Trung Quốc, tăng thêm cơ hội lương bổng cao', 'Khóa học Dựa trên những kiến thức căn bản đã có ở khóa tiếng Trung sơ cấp 1. Tuy nhiên, ở  phần 2 này, bạn sẽ tiếp tục được củng cố lại các kiến thức căn bản, đồng thời mở rộng kiến thức ngôn ngữ bằng các đoạn hội thoại giao tiếp về những vấn đề cuộc sống hàng ngày như thời tiết, ăn uống, sinh nhật, hỏi đường... Từ đó bạn sẽ có kiến thức căn bản, làm nền tảng để học lên cao hơn nữa.', 98, 11, NULL),
(81, 'Tiếng Trung trung cấp', 'tiengtrung_15.jpg', 399999, 'Khóa học củng cố lại các kiến thức căn bản đồng thời mở rộng và đi sâu qua các đoạn hội thoại giao tiếp qua những vấn đề cuộc sống hàng ngày như đi lại, ăn ở...', '- Dựa trên những kiến thức căn bản đã có ở khóa học tiếng Trung sơ cấp ở phần 1 và  phần 2 , khóa học Tiếng Trung trung cấp sẽ tiếp tục củng cố lại các kiến thức căn bản đồng thời mở rộng và đi sâu qua các đoạn hội thoại giao tiếp qua những vấn đề cuộc sống hàng ngày như đi lại, ăn ở, mua sắm, lễ tết,... \r\n- Khóa học sẽ cho bạn khi học tiếng Trung trung cấp thì cần trang bị những kiến thức cơ bản nào cũng như các kỹ năng để bạn khởi nghiệp thành công, bạn có thể lựa chọn cho mình những ngành nghề khác nhau sau khi học tiếng trung trung cấp này như du lịch, ngoại giao, phiên dịch…', 98, 11, NULL),
(82, 'Tiếng Trung cao cấp', 'tiengtrung_16.jpg', 599000, 'Khoá học giúp bạn Cải thiện khả năng nghe nói đọc viết bằng tiếng Trung cũng như tự tin giao tiếp với người bản địa', 'Dựa trên những kiến thức căn bản đã có ở khóa học tiếng Trung sơ cấp ở phần 1,2 và Tiếng Trung trung cấp, khóa học tiếng Trung cao cấp sẽ tiếp tục củng cố lại các kiến thức căn bản đồng thời mở rộng và đi sâu qua các đoạn hội thoại giao tiếp ngoài những đoạn hội thoại với chủ đề cuộc sống quen thuộc, giáo trình tiếng Trung cao cấp còn thêm vào các chủ đề đa dạng hơn như: thời trang, du lịch, thể thao, giải trí,..', 98, 11, NULL),
(83, 'Ngữ pháp N3 - Thi 1 phát đậu luôn', 'tiengnhat_1.jpg', 399999, 'Khóa học này sẽ giúp bạn Nắm vững toàn bộ ngữ pháp để vượt qua được kì thi năng lực tiếng nhật N3. Dễ dàng được chấp nhận Visa qua Nhật du học, làm việc bên đó để có tương lai tươi sáng hơn', 'Khóa học \"Ngữ pháp N3 - Thi 1 phát đậu luôn\" bao gồm: \r\n- Hơn 130 cấu trúc Ngữ pháp ở trình độ N3 được giải thích cụ thể, chi tiết. \r\n- Hơn 260 ví dụ thực tế dễ hiểu để học viên nắm rõ ý nghĩa và cách sử dụng.\r\n- Hơn 500 câu bài tập và đáp án giúp học viên hiểu được toàn bộ các trường hợp và tình huống sẽ xuất hiện trong cuộc sống\r\n- Hơn 1000 từ vựng và hán tự được bổ sung trong phần ví dụ và bài tập.', 99, 12, NULL),
(84, 'Luyện thi N2 ngữ pháp - Thi phát đậu luôn', 'tiengnhat_2.jpg', 499000, 'Bạn là sinh viên? Người đi làm? Muốn thi N2? Khóa học này sẽ giúp bạn nắm vững toàn bộ ngữ pháp, dễ dàng xin việc với mức lương cao hơn tại Việt Nam trong công ty Nhật', '- Khóa học này là toàn bộ ngữ pháp để thi JLPT N2. Với hơn 191 cấu trúc Ngữ pháp ở trình độ N2 được giải thích cụ thể, chi tiết. Hơn 380 ví dụ thực tế dễ hiểu để học viên nắm rõ ý nghĩa và cách sử dụng. 1000 câu bài tập và đáp án giúp học viên hiểu được toàn bộ các trường hợp và tình huống sẽ xuất hiện trong cuộc sống. Và hơn 3000 từ vựng và hán tự được bổ sung trong phần ví dụ và bài tập.\r\n- Không chỉ giúp học viên theo học ngoại ngữ online nắm vững về mặt ngữ pháp mà còn tự tin trong phần đọc hiểu, nghe và từ vựng mà còn giúp các học viên yên tâm và tự tin hơn để vượt qua kì thi năng lực tiếng nhật N2 dễ dàng. ', 99, 12, NULL),
(85, 'Học Tiếng Nhật - Luyện Thi JLPT N4 Ngữ Pháp', 'tiengnhat_3.jpg', 599000, 'Nắm vững toàn bộ ngữ pháp để vượt qua được kì thi năng lực tiếng nhật N4,Giao tiếp trôi chảy với người Nhật trong cuộc sống thường ngày', '- Với hơn 100 cấu trúc Ngữ pháp ở trình độ N4 được giải thích cụ thể, chi tiết. 300 ví dụ thực tế dễ hiểu để học viên nắm rõ ý nghĩa và cách sử dụng.Hơn 800 câu bài tập và đáp án giúp học viên hiểu được toàn bộ các trường hợp và tình huống sẽ xuất hiện trong cuộc sống. Hơn 2000 từ vựng và hán tự được bổ sung trong phần ví dụ và bài tập.\r\n- Không chỉ giúp bạn nắm vững về mặt ngữ pháp mà còn tự tin trong phần đọc hiểu, nghe và từ vựng.\r\n- Giúp các bạn yên tâm và tự tin hơn để vượt qua kì thi năng lực tiếng nhật N4 dễ dàng. ', 99, 12, NULL),
(86, 'Học Tiếng Nhật - Luyện Thi JLPT N5 ngữ pháp', 'tiengnhat_4.jpg', 659999, 'Thách thức Tiếng Nhật N5 chỉ trong 21 ngày - Nhanh chóng nắm vững kiến thức về mặt ngữ pháp, từ vựng, kỹ năng giao tiếp, phản xạ tiếng Nhật, sớm tự tin và giao tiếp chuẩn như người Nhật bản xứ', 'Khóa học này là một khóa học toàn diện với: \r\n- Toàn bộ kiến thức về ngữ pháp để thi JLPT N5.\r\n- Hơn 90 cấu trúc Ngữ pháp ở trình độ N5 được giải thích cụ thể, chi tiết.\r\n- 200+ ví dụ thực tế dễ hiểu để học viên nắm rõ ý nghĩa và cách sử dụng.\r\n- 600+ câu bài tập và đáp án giúp học viên hiểu được toàn bộ các trường hợp và tình huống sẽ xuất hiện trong cuộc sống.\r\n- 1200+ từ vựng và hán tự được bổ sung trong phần ví dụ và bài tập giúp học viên trau dồi và bổ sung thêm nhiều hơn kiến thức, từ vựng\r\n- Không chỉ giúp học viên nắm vững về mặt ngữ pháp mà còn tự tin trong phần đọc hiểu, nghe và từ vựng.\r\n- Giúp các học viên yên tâm và tự tin hơn để vượt qua kì thi năng lực tiếng nhật N5 dễ dàng.', 99, 12, NULL),
(87, 'Học tiếng Nhật Hướng dẫn cách giải và dịch đề thi JLPT N3', 'tiengnhat_5.jpg', 499000, 'Vượt qua kỳ thi năng lực tiếng Nhật N3 dễ dàng', '- Khóa học là toàn bộ cách giải và dịch đề thi JLPT, NAT TEST, N3.\r\n- Hướng dẫn, giải thích cấu trúc của 1 đề thi JLPT một cách chi tiết, cụ thể từng phần.\r\n- Hướng dẫn cách giải nhanh của từng phần trong đề thi mà không cần hiểu nghĩa.\r\n- Hướng dẫn cách giải từng Mondai trong phần Từ vựng, Ngữ pháp, Đọc hiểu, Nghe một cách cụ thể, chi tiết.\r\n- Hướng dẫn dịch nghĩa cụ thể, chi tiết từng câu, từng từ trong các phần Từ vựng, Ngữ pháp, Đọc hiểu, Nghe.\r\n- Giải thích cụ thể chi tiết vì sao chọn đáp án này mà không chọn đáp án kia.\r\n- Dịch và giải mẫu trọn vẹn các phần Từ vựng, Ngữ pháp, Đọc hiểu, Nghe của đề thi của các năm trước.', 99, 12, NULL),
(88, 'Học tiếng Nhật Hướng dẫn cách giải và dịch đề thi JLPT N4', 'tiengnhat_6.jpg', 599000, 'Luyện thi JLPT N4 một cách hiệu quả', 'Giáo trình có 52 bài giảng bao gồm các nội dung chính như sau: \r\n- Toàn bộ cách giải và dịch đề thi JLPT, NAT TEST, N4.\r\n- Hướng dẫn, giải thích cấu trúc của 1 đề thi.\r\n- Hướng dẫn cách giải nhanh của từng phần trong đề thi mà không cần hiểu nghĩa.\r\n- Hướng dẫn cách giải từng Mondai trong phần Từ vựng, Ngữ pháp, Đọc hiểu, Nghe một cách cụ thể, chi tiết.\r\n- Hướng dẫn dịch nghĩa cụ thể, chi tiết từng câu, từng từ trong các phần Từ vựng, Ngữ pháp, Đọc hiểu, Nghe.\r\n- Giải thích cụ thể chi tiết vì sao chọn đáp án này mà không chọn đáp án kia.\r\n- Dịch và giải mẫu trọn vẹn các phần Từ vựng, Ngữ pháp, Đọc hiểu, Nghe của đề thi của các năm trước.', 99, 12, NULL),
(89, 'Học tiếng Nhật Hướng dẫn cách giải và dịch đề thi JLPT N5', 'tiengnhat_7.jpg', 599000, 'Giải và dịch đề thi JLPT N5 một cách hiệu quả và nhanh nhất', '- Khóa học hướng dẫn toàn bộ cách giải và dịch đề thi JLPT, NAT TEST, N5.\r\n- Hướng dẫn, giải thích cấu trúc của 1 đề thi.\r\n- Hướng dẫn cách giải nhanh của từng phần trong đề thi mà không cần hiểu nghĩa.\r\n- Hướng dẫn cách giải từng Mondai trong phần Từ vựng, Ngữ pháp, Đọc hiểu, Nghe một cách cụ thể, chi tiết.\r\n- Hướng dẫn dịch nghĩa cụ thể, chi tiết từng câu, từng từ trong các phần Từ vựng, Ngữ pháp, Đọc hiểu, Nghe.\r\n- Giải thích cụ thể chi tiết vì sao chọn đáp án này mà không chọn đáp án kia.\r\n- Dịch và giải mẫu trọn vẹn các phần Từ vựng, Ngữ pháp, Đọc hiểu, Nghe đề thi - - Giúp các học viên yên tâm và tự tin hơn để vượt qua kì thi năng lực tiếng nhật N5 dễ dàng. ', 99, 12, NULL),
(90, 'Học tiếng Nhật thật dễ', 'tiengnhat_8.jpg', 399999, 'Học tiếng Nhật vỡ lòng một cách sinh động, hứng thú, đầy cảm quan với một giáo trình được biên soạn chi tiết, dễ hiểu và dễ ứng dụng.', '- Nhật Bản là một trong những đối tác kinh tế quan trọng hàng đầu của Việt Nam. Nhật Bản đang đầu tư vào thị trường Việt Nam ngày càng nhiều. Điều này cũng đồng nghĩa với việc nhu cầu tìm nguồn nhân lực biết tiếng Nhật cũng được chú trọng. Ngoài những kiến thức chuyên môn bạn được học trên ghế nhà trường thì sử dụng thành thạo tiếng Nhật chính là chìa khóa vàng giúp bạn mở ra nhiều cánh cửa lựa chọn việc làm trong và ngoài nước. \r\n- Hiểu được tầm quan trọng mà tiếng Nhật mang lại, ESTO hợp tác cùng giảng viên Thanh Trúc xuất bản khóa học Học tiếng Nhật thật dễ nhằm giúp các học viên tìm được phương pháp học siêu tốc kiểu Nhật, dễ học, dễ nói, dễ thành công.', 100, 12, NULL),
(91, 'Chinh phục tiếng Nhật giao tiếp siêu tốc', 'tiengnhat_9.jpg', 499000, 'Học cách viết và đọc chính xác tiếng nhật online. Khoá học giúp tự tin giao tiếp với người bản xứ gia tăng được vốn từ vựng để giao tiếp chuẩn hơn.', '- Mở đầu khóa học, giảng viên đưa ra một số cấu trúc câu về gặp gỡ và câu hỏi giúp học viên có thể giao tiếp những câu cơ bản nhất ngay từ khi bắt đầu. Tiếp theo là những chủ đề cụ thể như: phần 2 (bản thân), phần 3 (gia đình), phần 4 (công việc), phần 5 (mua sắm), phần 6 (giao thông), phần 7 (du lịch), phần 8 (hẹn hò rủ rê), phần 9 (ăn uống), phần 10 (sức khỏe và sắc đẹp), phần 11 (thể thao), phần 12 (những tình huống đặc biệt). \r\n- Khóa học sẽ giúp bạn nâng cao vốn từ vựng nghèo nàn của mình, cải thiện kiến thức về cấu trúc câu đàm thoại.Bên cạnh đó giảng viên sẽ hướng dẫn cho bạn các mẫu đối thoại thực tế để bạn áp dụng thực tế  ở mỗi phần như: Bản thân, gia đình, công việc, giao tiếng công cộng,... ', 100, 12, NULL),
(92, 'Luyện Nghe, Nói, Đọc, Viết tiếng Nhật thật dễ', 'tiengnhat_10.jpg', 599000, 'Chia sẻ bí quyết giúp bạn luyện nghe tiếng Nhật hiệu quả, luyện nói, luyện đọc, luyện viết thành thục. Chắc chắn bạn sẽ tự tin khi giao tiếp với người bản địa.', '- Khóa học bao gồm 35 bài giảng với 5 phần học chính. \r\n- Bí quyết giúp bạn luyện nghe tiếng Nhật hiệu quả\r\n- Luyện nói trong tiếng Nhật\r\n- Nhận biết và đọc văn bản một cách nhanh và đơn giản\r\n- Thực hành viết\r\n- Bạn sẽ thực sự tự tin hơn và không còn tự ti khi giao tiếp với người Nhật vì đã trang bị vững chắc cho mình 4 kỹ năng từ khóa học này. ', 100, 12, NULL),
(93, 'Tiếng Nhật sơ cấp 1 (N5)', 'tiengnhat_11.jpg', 399999, 'Học online tiếng Nhật với phương pháp tương tác như học tại trung tâm', '- Giảng viên sử dụng phương pháp\" dẫn dắt - liên tưởng \" để đảm bảo học viên dễ hình dung, dễ nắm bắt, dễ phát triển kỹ năng phản xạ bằng tiếng Nhật ngay tại bài học .\r\n- Đây là phương pháp giảng dạy được áp dụng rộng rãi tại các trường tiếng Nhật tại Nhật . Phương pháp này chú trọng việc học viên sẽ được nắm bắt ngữ pháp tiếng Nhật thông qua các tình huống giao tiếp giả định.\r\n- Qua khoá học,học viên sẽ học những nền tảng căn bản về cấu trúc ngữ pháp, cách dùng của ngữ pháp trong các tình huống cụ thể thường gặp.', 101, 12, NULL),
(94, 'Tiếng Nhật sơ cấp 2 (N5)', 'tiengnhat_12.jpg', 499999, 'Giảng viên sử dụng phương pháp \" DO-NYU\" , nghĩa là sử dụng cách \" dẫn dắt - liên tưởng \" để đảm bảo học viên dễ hình dung, dễ nắm bắt, dễ phát triển kỹ năng phản xạ bằng tiếng Nhật ngay tại bài học .', 'Giảng viên sử dụng phương pháp \" DO-NYU\" , nghĩa là sử dụng cách \" dẫn dắt - liên tưởng \" để đảm bảo học viên dễ hình dung, dễ nắm bắt, dễ phát triển kỹ năng phản xạ bằng tiếng Nhật ngay tại bài học . Đây là phương pháp giảng dạy được áp dụng rộng rãi tại các trường tiếng Nhật tại Nhật . Phương pháp này chú trọng việc học viên sẽ được nắm bắt ngữ pháp tiếng Nhật thông qua các tình huống giao tiếp giả định.', 101, 12, NULL),
(95, 'Tiếng Nhật sơ cấp 3 (N5)', 'tiengnhat_13.jpg', 599000, 'Giảng viên sử dụng phương pháp \" DO-NYU\" , nghĩa là sử dụng cách dẫn dắt vào ngữ pháp để đảm bảo học viên dễ hình dung, dễ nắm bắt, dễ phát triển kỹ năng phản xạ bằng tiếng Nhật ngay tại bài học', 'Giảng viên sử dụng phương pháp \" DO-NYU\" , nghĩa là sử dụng cách dẫn dắt vào ngữ pháp để đảm bảo học viên dễ hình dung, dễ nắm bắt, dễ phát triển kỹ năng phản xạ bằng tiếng Nhật ngay tại bài học . Đây là phương pháp giảng dạy được áp dụng rộng rãi tại các trường tiếng Nhật tại Nhật . Phương pháp này chú trọng việc học viên sẽ được nắm bắt ngữ pháp tiếng Nhật thông qua các tình huống giao tiếp giả định. Qua khoá học,học viên sẽ học những nền tảng căn bản về cấu trúc ngữ pháp, cách dùng của ngữ pháp trong các tình huống cụ thể thường gặp.', 101, 12, NULL),
(96, 'Tiếng Nhật sơ cấp 5 (N4)', 'tiengnhat_14.jpg', 659999, 'Giảng viên sử dụng phương pháp \" DO-NYU\" , nghĩa là sử dụng cách dẫn dắt vào ngữ pháp để đảm bảo học viên dễ hình dung, dễ nắm bắt, dễ phát triển kỹ năng phản xạ bằng tiếng Nhật ngay tại bài học . Đây là phương pháp giảng dạy được áp dụng rộng rãi tại các trường tiếng Nhật tại Nhật', 'Giảng viên sử dụng phương pháp \" DO-NYU\" , nghĩa là sử dụng cách dẫn dắt vào ngữ pháp để đảm bảo học viên dễ hình dung, dễ nắm bắt, dễ phát triển kỹ năng phản xạ bằng tiếng Nhật ngay tại bài học . Đây là phương pháp giảng dạy được áp dụng rộng rãi tại các trường tiếng Nhật tại Nhật . Phương pháp này chú trọng việc học viên sẽ được nắm bắt ngữ pháp tiếng Nhật thông qua các tình huống giao tiếp giả định. Qua khoá học,học viên sẽ học những nền tảng căn bản về cấu trúc ngữ pháp, cách dùng của ngữ pháp trong các tình huống cụ thể thường gặp.', 101, 12, NULL),
(97, 'Tiếng Nhật giao tiếp N4', 'tiengnhat_15.jpg', 499000, 'Tối ưu giao tiếp tiếng Nhật - N4', '- Khóa học tiếng Nhật này sẽ tập trung nhiều vào nâng cao khả năng nói, giao tiếp của bạn. Không chỉ giao tiếp, chương trình cũng cung cấp cho các bạn đầy đủ hệ thống ngữ pháp, từ vựng, để bạn có thể tự xây dựng hội thoại trong giao tiếp xã hội, công sở và tại môi trường kinh doanh. Thông qua các tình huống thật, chúng tôi đưa tới cho các bạn những thước film, hình ảnh bối cảnh cuộc sống, công sở, văn hóa, suy nghĩ, tác phong của người Nhật. Khi bước vào đời thực bạn sẽ thấy quen thuộc và nhanh chóng bắt nhịp khi giao tiếp với người Nhật hơn. Bạn được hơn cả kỹ năng giao tiếp đó là trở thành người có khả năng tư duy như người Nhật khi giao tiếp với người Nhật.\r\n- Bạn có thể xây dựng đoạn hội thoại phức tạp hơn và biết cách giải quyết các vấn đề có thể xảy ra trong cuộc sống đối với người nước ngoài tại Nhật, các vấn đề trong công việc của một nhân viên văn phòng. Bạn sẽ nắm vững các cấu trúc ngữ pháp và từ vựng thường dùng nhất trong hội thoại hằng ngày và trong kinh doanh; phản ứng tiếng Nhật nhanh hơn. ', 102, 12, NULL),
(98, 'Tiếng Nhật giao tiếp N5', 'tiengnhat_16.jpg', 599000, '<p>Tối ưu giao tiếp tiếng Nhật - N5</p>', '<p>C&oacute; phải bạn đang chuẩn bị v&agrave;o l&agrave;m cho c&ocirc;ng ty Nhật hoặc đang l&agrave;m trong c&ocirc;ng ty Nhật?&nbsp;</p>\r\n\r\n<p>Bạn chuẩn bị đi du học hoặc chuẩn bị kết h&ocirc;n với người Nhật v&agrave; c&oacute; kế hoạch sinh sống ở Nhật Bản l&acirc;u d&agrave;i?</p>\r\n\r\n<p>&nbsp;Bạn l&agrave; chủ doanh nghiệp c&oacute; giao dịch với đối t&aacute;c Nhật bản v&agrave; gặp kh&oacute; khăn trong việc tuyển dụng nh&acirc;n vi&ecirc;n n&oacute;i tiếng Nhật, thu&ecirc; phi&ecirc;n dịch với chi ph&iacute; rất cao m&agrave; chưa được việc?</p>\r\n\r\n<p>&nbsp;Bạn muốn học tiếng Nhật nhưng lại kh&ocirc;ng c&oacute; thời gian đến trung t&acirc;m, hoặc trung t&acirc;m qu&aacute; xa với chỗ ở?</p>\r\n\r\n<p>Bạn đ&atilde; học rồi nhưng mất cảm hứng do lần đầu tiếp x&uacute;c với tiếng Nhật kh&ocirc;ng th&agrave;nh c&ocirc;ng n&ecirc;n bỏ dở?</p>\r\n\r\n<p>Đến đ&acirc;y t&ocirc;i xin ch&uacute;c mừng bạn đ&atilde; t&igrave;m thấy kh&oacute;a học giao tiếp ph&ugrave; hợp nhất, thực tế nhất ở Việt Nam đến thời điểm hiện nay rồi đ&oacute;! Kh&oacute;a học tiếng Nhật n&agrave;y sẽ tập trung nhiều v&agrave;o n&acirc;ng cao khả năng n&oacute;i, giao tiếp của bạn. Kh&ocirc;ng chỉ giao tiếp, chương tr&igrave;nh cũng cung cấp cho c&aacute;c bạn đầy đủ hệ thống ngữ ph&aacute;p, từ vựng, để bạn c&oacute; thể tự x&acirc;y dựng hội thoại trong giao tiếp x&atilde; hội, c&ocirc;ng sở v&agrave; tại m&ocirc;i trường kinh doanh. Th&ocirc;ng qua c&aacute;c t&iacute;nh huống thật, ch&uacute;ng t&ocirc;i đưa tới cho c&aacute;c bạn những thước film, h&igrave;nh ảnh bối cảnh cuộc sống, c&ocirc;ng sở, văn h&oacute;a, suy nghĩ, t&aacute;c phong của người Nhật. Khi bước v&agrave;o đời thực bạn sẽ thấy quen thuộc v&agrave; nhanh ch&oacute;ng bắt nhịp khi giao tiếp với người Nhật hơn. Bạn được hơn cả kỹ năng giao tiếp đ&oacute; l&agrave; trở th&agrave;nh người c&oacute; khả năng tư duy như người Nhật khi giao tiếp với người Nhật.</p>', 102, 12, b'0'),
(100, 'Trọn bộ giao tiếp tiếng Anh và hoàn thiện bốn kỹ năng: NGHE - NÓI - ĐỌC - VIẾT', 'TgxZ_newtienganh.jpg', 499999, '<p><span style=\"font-size:16px\">Vốn từ vựng phong ph&uacute;, tận dụng được trong từng bối cảnh, tự tin giao tiếp với người bản ngữ</span>.</p>', '<p>Học tiếng Anh v&agrave; thực h&agrave;nh ch&uacute;ng thế n&agrave;o để đạt&nbsp;<strong>HIỆU QUẢ CAO NHẤT</strong>?</p>\r\n\r\n<p>Đ&acirc;y c&oacute; phải&nbsp;<strong>VẤN ĐỀ</strong>&nbsp;của bạn?</p>\r\n\r\n<ul>\r\n	<li>T&ocirc;i đang vật v&atilde; để th&agrave;nh thạo&nbsp;<strong>4 KỸ NĂNG&nbsp;</strong>m&atilde;i kh&ocirc;ng được</li>\r\n	<li>T&ocirc;i thấy tiếng Anh kh&oacute; v&agrave; c&oacute; rất nhiều&nbsp;<strong>TỪ</strong>&nbsp;v&agrave;&nbsp;<strong>CẤU TR&Uacute;C</strong>&nbsp;phải nhớ n&ecirc;n mỗi lần học t&ocirc;i lại thấy rất mệt v&agrave; căng thẳng.</li>\r\n	<li>T&ocirc;i biết rất nhiều&nbsp;<strong>TỪ TIẾNG ANH</strong>&nbsp;nhưng tại sao t&ocirc;i vẫn kh&ocirc;ng thể nghe được người bản xứ n&oacute;i g&igrave;?</li>\r\n	<li>T&ocirc;i c&oacute; thể học được rất nhiều&nbsp;<strong>TỪ MỚI</strong>&nbsp;c&ugrave;ng một l&uacute;c, nhưng chỉ 1, 2 ng&agrave;y sau hoặc 1 tuần sau kh&ocirc;ng động đến l&agrave; t&ocirc;i qu&ecirc;n lu&ocirc;n</li>\r\n	<li>T&ocirc;i học&nbsp;<strong>TỪ VỰNG&nbsp;</strong>v&agrave;&nbsp;<strong>NGỮ PH&Aacute;P</strong>&nbsp;rất tốt nhưng khi n&oacute;i vẫn bị sai cấu tr&uacute;c ngữ ph&aacute;p.</li>\r\n	<li>T&ocirc;i đ&atilde;&nbsp;<strong>HỌC TIẾNG ANH</strong>&nbsp;trong rất nhiều năm nhưng khi gặp người nước ngo&agrave;i t&ocirc;i vẫn kh&ocirc;ng thể l&agrave;m cho họ hiểu t&ocirc;i đang n&oacute;i g&igrave;?</li>\r\n	<li>Khi&nbsp;<strong>N&Oacute;I CHUYỆN</strong>&nbsp;bằng tiếng Anh, t&ocirc;i mất rất nhiều thời gian để nghĩ sau đ&oacute; mới n&oacute;i ra được th&igrave; lại kh&ocirc;ng được lưu lo&aacute;t.</li>\r\n	<li>T&ocirc;i c&oacute; thể n&oacute;i tiếng Anh về c&aacute;c<strong>&nbsp;CHỦ ĐỀ CƠ BẢN</strong>&nbsp;nhưng chưa biết c&aacute;ch để n&acirc;ng cao vốn tiếng Anh của m&igrave;nh&hellip;</li>\r\n</ul>\r\n\r\n<p>Kh&oacute;a học &quot;Trọn bộ tiếng Anh giao tiếp v&agrave; ho&agrave;n thiện 4 kỹ năng&quot;&nbsp;<strong>CỰC KỲ PH&Ugrave; HỢP</strong>&nbsp;với bạn. V&igrave; sao?</p>\r\n\r\n<p>Bởi v&igrave; kh&oacute;a học &ldquo;Trọn bộ tiếng Anh giao tiếp v&agrave; ho&agrave;n thiện 4 kỹ năng: NGHE &ndash; N&Oacute;I &ndash; ĐỌC &ndash; VIẾT sẽ gi&uacute;p bạn nắm chắc&nbsp;<strong>4 KỸ NĂNG</strong>&nbsp;quan trọng nhất trong tiếng Anh, hệ thống lại kiến thức vốn c&oacute; một c&aacute;ch&nbsp;<strong>KHOA HỌC</strong>&nbsp;phục vụ học tập v&agrave; l&agrave;m việc qua c&aacute;c b&agrave;i luyện viết email, th&agrave;nh lập đoạn hội thoại dựa tr&ecirc;n c&aacute;c chủ đề&nbsp;<strong>CỰC KỲ TH&Ocirc;NG DỤNG</strong>&nbsp;chỉ trong v&ograve;ng 29 giờ đ&ocirc;ng hồ.</p>', 104, 9, b'0'),
(101, 'Khóa học đầu tư bất động sản thuê và cho thuê thành công', 'RdRY_bds_1.jpg', 599000, '<p><span style=\"font-size:16px\">Kh&oacute;a học đầu tư bất động sản thu&ecirc; v&agrave; cho thu&ecirc; th&agrave;nh c&ocirc;ng</span></p>', '<p><span style=\"font-size:16px\">Kh&oacute;a học kinh doanh bất động sản thu&ecirc; v&agrave; cho thu&ecirc; bất động sản th&agrave;nh c&ocirc;ng được chia sẻ bởi Phạm Văn Nam với 48 module chia sẻ tới c&aacute;c bạn kiến thức chuy&ecirc;n s&acirc;u về học kinh doanh v&agrave; đầu tư bất động sản cho thu&ecirc;, Kh&oacute;a học trang bị những tư duy, chiến lược, c&ocirc;ng cụ, v&agrave; h&agrave;nh động cụ thể để bạn c&oacute; thể bắt đầu khởi nghiệp với bất động sản thu&ecirc; v&agrave; cho thu&ecirc; th&agrave;nh c&ocirc;ng</span></p>\r\n\r\n<h3><span style=\"font-size:24px\"><strong>Bạn sẽ học được g&igrave;</strong></span></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\">✔️ C&oacute; được kiến thức chuy&ecirc;n s&acirc;u về kinh doanh v&agrave; đầu tư bất động sản thu&ecirc; v&agrave; cho thu&ecirc; th&agrave;nh c&ocirc;ng</span></p>\r\n\r\n<p><span style=\"font-size:16px\">✔️ Biết c&aacute;ch l&agrave;m thế n&agrave;o c&oacute; thể đi thu&ecirc; bất động sản với gi&aacute; tốt nhất</span></p>\r\n\r\n<p><span style=\"font-size:16px\">✔️ Biết c&aacute;ch l&agrave;m thế n&agrave;o để cho thu&ecirc; bất động sản được gi&aacute; cao Biết c&aacute;ch đ&agrave;m ph&aacute;n thu&ecirc; v&agrave; cho thu&ecirc; bất động sản</span></p>\r\n\r\n<p><span style=\"font-size:16px\">✔️ Sở hữu c&aacute;c chiến lược kinh doanh bất động sản thu&ecirc; v&agrave; cho thu&ecirc; Module thi trực tuyến,</span></p>', 105, 17, b'0'),
(102, '36 Chiến lược đầu tư bất động sản thực chiến hiệu quả tức thì', 'blXI_bds_2.jpg', 699000, '<p><span style=\"font-size:16px\">Gi&uacute;p người học nắm được c&aacute;c chiến lược cụ thể trong lĩnh vực kinh doanh v&agrave; đầu tư bất động sản</span></p>', '<p><span style=\"font-size:16px\">Xin ch&agrave;o, anh chị v&agrave; c&aacute;c bạn. Ch&agrave;o mừng ACE đến với kh&oacute;a học 36 chiến lược kinh doanh v&agrave; đầu tư bất động sản thực chiến của Phạm Văn Nam,</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Sự ph&aacute;t triển rất nhanh của thị trường bất động sản đ&atilde; l&agrave;m c&aacute;c nh&agrave; đầu tư gi&agrave;u l&ecirc;n nhanh ch&oacute;ng.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Đầu tư bất động sản th&agrave;nh c&ocirc;ng quan trọng l&agrave; g&igrave;? Chiến lược, chiến thuật hay Sự may mắn? Sai lầm đầu ti&ecirc;n v&agrave; cơ bản nhất trong việc đầu tư BĐS ch&iacute;nh l&agrave; việc nh&agrave; đầu tư kh&ocirc;ng c&oacute; chiến lược r&otilde; r&agrave;ng.&nbsp;Ϲ&oacute; rất nhiều người mua một BĐS n&agrave;o đ&oacute; chỉ v&igrave; c&oacute; một ai đ&oacute; n&oacute;i với họ rằng Bất động sản sẽ tăng gi&aacute; theo thời gian. Hoặc đ&ocirc;i khi, nh&agrave; đầu tư quуết định mua BĐS chỉ v&igrave; họ biết rằng sẽ được hưởng chiết khấu lớn m&agrave; kh&ocirc;ng x&eacute;t đến việc muɑ b&aacute;n n&agrave;y c&oacute; gi&uacute;p họ đạt được mục ti&ecirc;u kinh doanh đ&atilde; đề ra hay kh&ocirc;ng.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp;Đ&acirc;y l&agrave; kh&oacute;a học m&agrave; t&ocirc;i rất t&acirc;m huyết v&agrave; muốn chia sẻ tới c&aacute;c anh chị em c&aacute;c chiến lược cụ thể trong lĩnh vực kinh doanh v&agrave; đầu tư bất động sản. Kh&oacute;a học sẽ gi&uacute;p học vi&ecirc;n:</span></p>\r\n\r\n<p>✔️&nbsp;<span style=\"font-size:16px\">C&oacute; c&aacute;i nh&igrave;n tổng quan về thị trường bất động sản tại Việt Nam</span></p>\r\n\r\n<p>✔️&nbsp;<span style=\"font-size:16px\">C&oacute; kiến thức tổng quan về c&aacute;c m&ocirc; h&igrave;nh đầu tư bất động sản phổ biến v&agrave; chưa phổ biến tại Việt Nam, C&oacute; thể thực hiện để th&agrave;nh c&ocirc;ng trong lĩnh vực n&agrave;y</span></p>\r\n\r\n<p>✔️&nbsp;<span style=\"font-size:16px\">C&oacute; kiến thức cụ thể về chiến lược trong từng ng&aacute;ch nhỏ trong thị trường bất động sản v&ocirc; c&ugrave;ng rộng lớn v&agrave; linh hoạt&nbsp;</span></p>\r\n\r\n<p>✔️&nbsp;<span style=\"font-size:16px\">Biết được ưu nhược điểm của từng m&ocirc; h&igrave;nh kinh doanh từ đ&oacute; r&uacute;t ra c&aacute;ch l&agrave;m cụ thể cho từng ng&aacute;ch của m&igrave;nh</span></p>\r\n\r\n<p>✔️&nbsp;<span style=\"font-size:16px\">Biết được c&aacute;c b&iacute; quyết đơn giản để c&oacute; thể th&agrave;nh c&ocirc;ng trong từng chiến lược đầu tư</span></p>\r\n\r\n<p>✔️&nbsp;<span style=\"font-size:16px\">Tạo ra nhiều &yacute; tưởng mới để c&oacute; thể đầu tư bất động sản th&agrave;nh c&ocirc;ng</span></p>\r\n\r\n<p>✔️&nbsp;<span style=\"font-size:16px\">Ch&uacute;ng ta sẽ c&ugrave;ng nhau chia sẻ v&agrave; b&agrave;n luận về c&aacute;c chiến lược n&agrave;y một c&aacute;ch cụ thể.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Cảm ơn v&agrave; ch&uacute;c mừng c&aacute;c anh chị đ&atilde; c&oacute; mặt ở đ&acirc;y trong kh&oacute;a học v&ocirc; c&ugrave;ng tuyệt vời n&agrave;y,.</span></p>', 105, 17, b'0'),
(103, 'Khóa học \"Bậc thầy bất động sản thuê và cho thuê\"', 'MNWq_bds_3.jpg', 399000, '<p><span style=\"font-size:16px\">B&iacute; quyết kiếm 30tr/th&aacute;ng ph&acirc;n kh&uacute;c thu&ecirc; v&agrave; cho thu&ecirc; bất động sản</span></p>', '<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Ch&uacute;ng ta định nghĩa như thế n&agrave;o về Người gi&agrave;u?</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Tất cả mọi người đều cho rằng người gi&agrave;u l&agrave; người c&oacute; nhiều t&agrave;i sản, tuy nhi&ecirc;n, c&ugrave;ng với sự ph&aacute;t triển của x&atilde; hội, thước đo của sự gi&agrave;u c&oacute; ch&iacute;nh l&agrave; nguồn thu nhập thụ động gi&uacute;p một người duy tr&igrave; mức sống như mong muốn ngay cả khi họ kh&ocirc;ng l&agrave;m việc nữa. Nguồn thu nhập thụ động do ch&iacute;nh bạn x&acirc;y dựng v&agrave; duy tr&igrave; trong qu&aacute; tr&igrave;nh bạn c&ograve;n l&agrave;m việc.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Một người đi l&agrave;m, ngo&agrave;i đam m&ecirc; th&igrave; mục đ&iacute;ch ch&iacute;nh l&agrave; kiếm 10 triệu đồng/th&aacute;ng, kh&oacute;a học bậc thầy bất động sản thu&ecirc; v&agrave; cho thu&ecirc; n&agrave;y sẽ gi&uacute;p bạn kiếm 10 triệu đồng/th&aacute;ng ổn định trong suốt 10 năm, chỉ cần l&agrave;m một lần, kh&ocirc;ng cần bạn phải đi l&agrave;m h&agrave;ng th&aacute;ng&hellip; bạn sẽ được tự do về thời gian để tạo th&ecirc;m nhiều d&ograve;ng thu nhập mới v&agrave; l&agrave;m những việc bạn y&ecirc;u th&iacute;ch</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp;H&atilde;y bắt đầu sự gi&agrave;u c&oacute; của m&igrave;nh bằng việc đăng k&iacute; kh&oacute;a học&nbsp;<strong>Bậc thầy bất động sản thu&ecirc; v&agrave; cho thu&ecirc;</strong>&nbsp;tại ESTO. Bạn sẽ sở hữu những b&iacute; quyết thu&ecirc; nh&agrave; của người kh&aacute;c với số tiền rất nhỏ v&agrave; trở th&agrave;nh người sử dụng l&acirc;u d&agrave;i để tạo ra 1, 2 hay N d&ograve;ng thu nhập thụ động mỗi th&aacute;ng.&nbsp;</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Nội dung kh&oacute;a học</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Kh&oacute;a học bao gồm 33 b&agrave;i giảng v&agrave; thời lượng học 01 giờ 48 ph&uacute;t, với 8 phần học ch&iacute;nh cụ thể từ. Bạn sẽ được học kinh doanh&nbsp;c&aacute;ch l&ecirc;n&nbsp;chiến lược thu&ecirc; v&agrave; cho thu&ecirc; bất động sản, lựa chọn ph&acirc;n kh&uacute;c thu&ecirc; v&agrave; cho thu&ecirc; bất động sản, đ&agrave;m pahsn cho thu&ecirc; nh&agrave;, khai th&aacute;c t&ograve;a nh&agrave; cho thu&ecirc; như c&aacute;ch tăng gi&aacute; trị t&ograve;a nh&agrave;, ch&iacute;nh sach cho thu&ecirc;, quảng c&aacute;o v&agrave; quản l&yacute;.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><span style=\"font-size:16px\">Những lợi &iacute;ch khi học Online tại ESTO:</span></strong></p>\r\n\r\n<p>✔️&nbsp;<span style=\"font-size:16px\">Mua 1 lần sở hữu TRỌN ĐỜI.</span></p>\r\n\r\n<p>✔️&nbsp;<span style=\"font-size:16px\">HỌC ONLINE mọi l&uacute;c mọi nơi tr&ecirc;n mọi thiết bị (điện thoại, laptop,pc).</span></p>\r\n\r\n<p>✔️&nbsp;<span style=\"font-size:16px\">TƯ VẤN hỗ trợ 24/7 từ chuy&ecirc;n gia.</span></p>\r\n\r\n<p>✔️&nbsp;<span style=\"font-size:16px\">Được HO&Agrave;N TIỀN trong v&ograve;ng 7 ng&agrave;y nếu kh&ocirc;ng h&agrave;i l&ograve;ng về kh&oacute;a học.</span></p>\r\n\r\n<p>✔️&nbsp;<span style=\"font-size:16px\">Giảm trực tiếp 10% CHI PH&Iacute; kh&oacute;a học khi thanh to&aacute;n Online.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp;H&atilde;y nhanh tay đăng k&yacute; kh&oacute;a học kinh doanh bất động sản&nbsp;<strong>Bậc thầy bất động sản thu&ecirc; v&agrave; cho thu&ecirc;</strong>&nbsp;ngay h&ocirc;m nay!</span></p>', 106, 17, b'0');
INSERT INTO `khoahoc` (`MAKH`, `TENKH`, `ANH`, `DONGIA`, `GIOITHIEUKH`, `CHITIETKH`, `MAGV`, `MADM`, `TRUCTUYEN`) VALUES
(104, 'Khóa học \"Sát thủ môi giới nhà thuê\" - Làm tự do, kiếm 30tr/tháng', 'SwoE_bds_4.jpg', 499000, '<p><span style=\"font-size:16px\">B&iacute; quyết kiếm 30tr/th&aacute;ng ph&acirc;n kh&uacute;c m&ocirc;i giới cho thu&ecirc; mặt bằng</span></p>', '<p><span style=\"font-size:16px\"><strong>T&igrave;nh h&igrave;nh cho thu&ecirc;, b&aacute;n căn hộ tại c&aacute;c th&agrave;nh phố lớn</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Hiện nay, cho thu&ecirc;/&nbsp;b&aacute;n căn hộ l&agrave; h&igrave;nh thức kinh doanh bất độn sản kh&aacute; phổ biến tại c&aacute;c th&agrave;nh phố. Nguồn cung sản phẩm cũng như kh&aacute;ch h&agrave;ng dồi d&agrave;o do nhu cầu của người d&acirc;n lu&ocirc;n thay đổi đ&atilde; tạo n&ecirc;n một tiềm năng cơ hội thu nhập rất lớn đối với người l&agrave;m nghề m&ocirc;i giới bất động sản. Đặc biệt tại c&aacute;c th&agrave;nh phố lớn tập trung nhiều trụ sở&nbsp;việc l&agrave;m v&agrave; mật độ d&acirc;n số cao, h&igrave;nh thức thu&ecirc; hay b&aacute;n căn hộ c&agrave;ng hoạt động nổi trội v&agrave; mạnh mẽ&nbsp;hơn.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Vậy l&agrave;m thế n&agrave;o để c&oacute; thể hoạt động trong lĩnh vực m&ocirc;i giới bất động sản một c&aacute;ch hiệu quả, kh&ocirc;ng gặp phải rủi ro, cũng như th&agrave;nh c&ocirc;ng trong c&aacute;c bước. N&ecirc;n bắt đầu học kinh doanh&nbsp;BĐS&nbsp;từ đ&acirc;u? L&agrave;m sao để c&oacute; thể bắt đầu nghề m&ocirc;i giới bất động sản th&agrave;nh c&ocirc;ng v&agrave; thu h&uacute;t được nhiều kh&aacute;ch h&agrave;ng?</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>H&atilde;y đến với kh&oacute;a học &quot;Bắt đầu kiếm tiền với nghề m&ocirc;i giới bất động sản&quot; tại Unica.vn.</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Kh&oacute;a học do giảng vi&ecirc;n Trung Phạm - Chủ tịch C&ocirc;ng ty Tư vấn v&agrave; đ&agrave;o tạo Bizway hướng dẫn sẽ hướng dẫn bạn chi tiết c&aacute;c bước để:</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; ✔️ Bắt đầu nghề m&ocirc;i giới bất động sản một c&aacute;ch hiệu quả.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; ✔️ Biết c&aacute;ch lựa chọn ph&acirc;n kh&uacute;c để bắt đầu tiến cận kh&aacute;ch h&agrave;ng tiềm năng của bạn</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; ✔️ BIết c&aacute;ch l&ecirc;n mục ti&ecirc;u t&agrave;i ch&iacute;nh v&agrave; kế hoạch ho&agrave;n th&agrave;nh mục ti&ecirc;u</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; ✔️ Biết c&aacute;ch t&igrave;m kiếm kh&aacute;ch h&agrave;ng tiềm năng.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; ✔️ B&iacute; quyết để viết được&nbsp;kịch bản chốt sale tr&ecirc;n k&ecirc;nh mạng x&atilde; hội v&agrave; khi trực tiếp nhận điện thoại của kh&aacute;ch h&agrave;ng</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; ✔️ Biết c&aacute;ch chốt sales v&agrave; kiếm bộn tiền từ nghề m&ocirc;i giới bất động sản.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; ✔️ Nắm được c&aacute;ch l&ecirc;n&nbsp;hợp đồng m&ocirc;i giới nhanh ch&oacute;ng, ch&iacute;nh x&aacute;c, đảm bảo y&ecirc;u cầu ph&aacute;p l&yacute; cơ bản.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Đừng bỏ lỡ cơ hội trở th&agrave;nh chuy&ecirc;n gia m&ocirc;i giới bất động sản đỉnh cao chỉ với kh&oacute;a học bất động sản&nbsp;&quot;<strong>Bắt đầu kiếm tiền với nghề m&ocirc;i giới bất động sản 1&quot;</strong>&nbsp;ngay h&ocirc;m nay tại ESTO!</span></p>', 106, 17, b'0'),
(105, 'Tự làm các món ăn vặt mùa hè ngay tại nhà', 'hxsb_amthuc_1.jpg', 600000, '<p><span style=\"font-size:16px\">Hướng dẫn chi tiết c&aacute;ch l&agrave;m c&aacute;c m&oacute;n ăn vặt hot cho m&ugrave;a h&egrave;: c&aacute;c m&oacute;n ch&egrave;, tr&acirc;n ch&acirc;u, thạch, c&aacute;c m&oacute;n từ hoa quả tươi, caramen, sữa chua....</span></p>', '<p dir=\"ltr\"><span style=\"font-size:16px\"><em><strong>C&oacute; phải,&nbsp;</strong></em></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">❌ Bạn c&oacute; niềm đam m&ecirc; ẩm thực v&agrave; mong muốn tự tay m&igrave;nh l&agrave;m ra những m&oacute;n ăn vặt m&ugrave;a h&egrave; như ch&egrave;, thạch, sữa chua thơm ngon m&aacute;t lạnh mời người th&acirc;n v&agrave; bạn b&egrave;.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">❌ Bạn muốn tham gia c&aacute;c kh&oacute;a học về &ldquo;m&oacute;n ăn vặt&rdquo; để phục vụ cho nhu cầu v&agrave; sở th&iacute;ch của bản th&acirc;n nhưng lại kh&ocirc;ng c&oacute; thời gian đến c&aacute;c trung t&acirc;m do khoảng c&aacute;ch địa l&yacute; tạo r&agrave;o cản c&ugrave;ng với mức học ph&iacute; kh&aacute; cao.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">❌ Bạn muốn mở một tiệm ăn vặt nhỏ hoặc bạn đang kinh doanh thức uống, muốn mở rộng sản phẩm sang ăn vặt&hellip;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\"><em><strong>Nhưng bạn đừng qu&aacute; lo lắng,&nbsp;</strong></em></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">✔️ H&atilde;y đến với kh&oacute;a học&nbsp;<em><strong>Tự l&agrave;m c&aacute;c m&oacute;n ăn vặt m&ugrave;a h&egrave; ngay tại nh&agrave;</strong></em>, của giảng vi&ecirc;n&nbsp;<em><strong>Hương Cho&eacute;&nbsp;(Cho&eacute; Cooking)</strong></em>. Hương Cho&eacute; c&oacute; hơn 4 năm kinh nghiệm l&agrave;m việc với lĩnh vực ẩm thực. L&agrave; food blogger được giải thưởng Influence-asia b&igrave;nh chọn trong top 15 người c&oacute; ảnh hưởng tr&ecirc;n cộng đồng mạng trong lĩnh vực food.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">✔️ Kh&oacute;a học hướng dẫn bạn chi tiết c&aacute;ch thực hiện c&aacute;c m&oacute;n ăn vặt hot cho m&ugrave;a h&egrave;: C&aacute;c m&oacute;n ch&egrave;, c&aacute;c m&oacute;n tr&acirc;n ch&acirc;u, thạch, c&aacute;c m&oacute;n từ hoa quả tươi, caramen, sữa chua....</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">✔️ Sau khi học xong kh&oacute;a n&agrave;y, bạn sẽ c&oacute; đầy đủ kiến thức, kỹ năng tự l&agrave;m được c&aacute;c đồ ăn vặt ngon miệng, đảm bảo vệ sinh an to&agrave;n thực phẩm cho người th&acirc;n.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\"><em><strong>Kh&oacute;a học n&agrave;y d&agrave;nh cho ai</strong></em></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">❗ Những người sẽ hoặc đang l&agrave; chủ qu&aacute;n muốn c&oacute; th&ecirc;m những m&oacute;n ăn hot nhất để tăng doanh thu v&agrave; hiệu quả kinh doanh</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">❗ Mọi đối tượng c&oacute; nhu cầu mở qu&aacute;n kinh doanh v&agrave; những người c&oacute; nhu cầu muốn học nghề.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">❗ Những người th&iacute;ch tự tay l&agrave;m đồ ăn vặt an to&agrave;n vệ sinh cho gia đ&igrave;nh, bạn b&egrave;&nbsp;&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">❗ Sẽ c&ograve;n v&ocirc; v&agrave;n những điều hấp dẫn kh&aacute;c c&oacute; trong c&aacute;c b&agrave;i giảng m&agrave; giảng vi&ecirc;n bi&ecirc;n soạn. Nhanh tay đăng k&yacute; tham gia kh&oacute;a học&nbsp;<em><strong>Tự l&agrave;m c&aacute;c m&oacute;n ăn vặt m&ugrave;a h&egrave; ngay tại nh&agrave;&nbsp;</strong></em>để c&oacute; cơ hội sở hữu ngay h&ocirc;m nay bạn nh&eacute; !</span></p>', 107, 14, b'0'),
(106, 'Eat Clean chuẩn cho người Việt', 'X34U_amthuc_2.jpg', 599000, '<p><span style=\"font-size:16px\">Hiểu r&otilde; về chế độ ăn Eat Clean, tự x&acirc;y dựng được chế độ ăn hợp l&yacute;, biết c&aacute;ch chế biến c&aacute;c m&oacute;n ăn để kh&ocirc;ng nh&agrave;m ch&aacute;n, linh hoạt</span></p>', '<p dir=\"ltr\"><span style=\"font-size:16px\">C&oacute; l&uacute;c n&agrave;o bạn cảm thấy cần l&agrave;m mới lại chế độ ăn uống của m&igrave;nh? Hoặc sau kỳ nghỉ lễ, bạn muốn tống hết chất độc ra khỏi cơ thể bằng c&aacute;ch ăn uống l&agrave;nh mạnh &ldquo;đặc biệt hơn ng&agrave;y thường&rdquo;? H&atilde;y &aacute;p dụng chế độ ăn Eat Clean. Đ&acirc;y l&agrave; một chế độ ăn uống được rất nhiều chị em lựa chọn để giảm c&acirc;n bởi t&iacute;nh hiệu quả, an to&agrave;n m&agrave; n&oacute; mang lại.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">C&oacute; lẽ, chế độ ăn Eat clean kh&ocirc;ng c&ograve;n l&agrave; kh&aacute;i niệm qu&aacute; lạ lẫm đối với c&aacute;c bạn c&oacute; th&oacute;i quen sống l&agrave;nh mạnh, nhưng kh&ocirc;ng phải ai cũng biết r&otilde; về Eat clean.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Kh&oacute;a học&nbsp;<strong>Eat Clean chuẩn cho người Việt</strong>&nbsp;của&nbsp;<strong>Hương Cho&eacute;</strong>&nbsp;gi&uacute;p học vi&ecirc;n hiểu r&otilde; hơn về chế độ ăn Eat clean. Từ đ&oacute; c&oacute; thể tự x&acirc;y dựng chế độ ăn hợp l&yacute; cho bản th&acirc;n cũng như cho gia đ&igrave;nh m&igrave;nh. Với kho&aacute; học n&agrave;y bạn sẽ học được c&aacute;ch chế biến, nấu nướng những m&oacute;n Eat Clean đ&uacute;ng chuẩn hương vị, thơm ngon gi&uacute;p bữa ăn giảm c&acirc;n bớt nh&agrave;m ch&aacute;n.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Kh&oacute;a học giải giải đ&aacute;p tất cả những thắc mắc, những sai lầm của học vi&ecirc;n khi &aacute;p dụng chế độ ăn Eat Clean. Hơn thế nữa, trong kh&oacute;a học n&agrave;y, giảng vi&ecirc;n sẽ định hướng v&agrave; hướng dẫn chi tiết bạn từ c&aacute;ch l&ecirc;n thực đơn, c&aacute;ch t&iacute;nh khẩu phần, định lượng thực phẩm c&aacute;c bạn cần ăn trong 1 ng&agrave;y để tăng c&acirc;n hoặc giảm c&acirc;n. Hướng dẫn chi tiết c&aacute;ch nấu c&aacute;c m&oacute;n ăn chia theo từng dạng nguy&ecirc;n liệu như chuy&ecirc;n salad, chuy&ecirc;n m&oacute;n g&agrave;, chuy&ecirc;n m&oacute;n b&ograve;, hải sản.v.v..&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Bạn sẽ đang trang bị kiến thức to&agrave;n diện về từng thực phẩm với h&agrave;m lượng dinh dưỡng, c&ocirc;ng dụng đến c&ocirc;ng thức chế biến m&oacute;n ăn đảm bảo đủ h&agrave;m lượng calo m&agrave; một bữa ăn cung cấp cho cơ thể. Ngo&agrave;i ra những ch&uacute; &yacute; trong việc bảo quản đồ ăn, thực phẩm sao cho đảm bảo tối đa h&agrave;m lượng dinh dưỡng cũng sẽ đều được giảng vi&ecirc;n Hương Cho&eacute; chia sẻ chi tiết trong kho&aacute; học.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Bạn đ&atilde; sẵn s&agrave;ng c&ugrave;ng kh&oacute;a học nấu ăn&nbsp;<strong>Eat Clean chuẩn cho người Việt</strong>&nbsp;đồng h&agrave;nh tr&ecirc;n con đường giảm c&acirc;n của m&igrave;nh chưa? Đăng k&yacute; ngay h&ocirc;m nay để ESTO c&oacute; cơ hội c&ugrave;ng bạn sở hữu th&acirc;n h&igrave;nh thon gọn, khoẻ mạnh ngay h&ocirc;m nay nh&eacute;!</span></p>', 107, 14, b'0'),
(108, 'Hướng dẫn làm các món ăn vặt hot nhất thị trường', 'lo36_amthuc_3.jpg', 399000, '<p><span style=\"font-size:16px\">Trổ t&agrave;i kh&eacute;o tay hay l&agrave;m với hơn 40 m&oacute;n ăn vặt đang được y&ecirc;u th&iacute;ch nhất tr&ecirc;n thị trường</span></p>', '<p dir=\"ltr\"><span style=\"font-size:16px\"><strong>Hướng dẫn l&agrave;m c&aacute;c m&oacute;n ăn vặt hot nhất thị trường do c&ocirc; Hương Cho&eacute;&nbsp;</strong>x&acirc;y dựng, gồm 5 chương v&agrave; 42 b&agrave;i hướng dẫn chi tiết c&aacute;ch chế biến đồ ăn vặt hot nhất hiện nay. Bạn sẽ được học hơn 40 m&oacute;n đồ ăn vặt v&ocirc; c&ugrave;ng được y&ecirc;u th&iacute;ch tr&ecirc;n thị trường như: dồi sụn nướng, chim c&uacute;t quay, khoai lang lắc ph&ocirc; mai, ch&egrave; kh&uacute;c bạch, ch&egrave; khoai dẻo, ch&egrave; bơ ch&egrave; xo&agrave;i,...&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Kho&aacute; học kh&ocirc;ng chỉ dạy c&aacute;ch nấu ăn đơn thuần m&agrave; giảng vi&ecirc;n c&ograve;n hướng dẫn chi tiết c&aacute;ch sử dụng c&aacute;c loại nguy&ecirc;n liệu sạch, nguy&ecirc;n liệu đảm bảo an to&agrave;n m&agrave; c&aacute;c b&eacute; ăn dặm từ 2 tuổi đ&atilde; c&oacute; thể ăn được. Bạn sẽ c&oacute; th&ecirc;m kiến thức về kinh doanh qu&aacute;n ăn, định lượng đồ ăn, setup menu cho m&oacute;n ăn th&ecirc;m phong ph&uacute; v&agrave; hợp l&yacute; hấp dẫn nhất. Ngo&agrave;i c&aacute;c c&ocirc;ng thức, c&aacute;ch l&agrave;m c&aacute;c m&oacute;n ăn vặt bạn c&oacute; thể biến tấu từ c&aacute;c m&oacute;n cơ bản mang dấu ấn ri&ecirc;ng của qu&aacute;n.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">C&ograve;n chần chờ g&igrave; nữa? Nhanh tay đăng k&yacute; kho&aacute; học&nbsp;<strong>Hướng dẫn l&agrave;m c&aacute;c m&oacute;n ăn vặt hot nhất thị trường do c&ocirc; Hương cho&eacute;&nbsp;</strong>x&acirc;y dựng tại ESTO.</span></p>', 107, 14, b'0'),
(109, 'Công thức làm sốt nướng - lẩu cho người kinh doanh nhà hàng, quán ăn', 'rZKr_amthuc_4.jpg', 700000, '<p><span style=\"font-size:16px\">Gi&uacute;p bạn nắm được c&ocirc;ng thức v&agrave; b&iacute; quyết tuyệt vời cho c&aacute;c loại sốt ướp, sốt chấm v&agrave; lẩu.</span></p>', '<p dir=\"ltr\"><span style=\"font-size:16px\">✔️ Kh&oacute;a học gồm 4 chương hướng dẫn chi tiết c&aacute;ch chế biến c&aacute;c loại nước sốt ướp nướng, sốt chấm, sốt salad v&agrave; lẩu bằng những b&iacute; quyết ri&ecirc;ng.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">✔️ Bắt đầu đi v&agrave;o phần thực h&agrave;nh c&aacute;c bạn sẽ được hiện c&aacute;c m&oacute;n như: sốt ướp hải sản, sốt cay H&agrave;n Quốc, sốt riềng mẻ, sốt tiso Trung Quốc, sốt Nhật, sốt chanh leo, lẩu th&aacute;i&nbsp; ...</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">✔️ Kho&aacute; học kh&ocirc;ng chỉ dạy c&aacute;ch nấu đơn thuần m&agrave; giảng vi&ecirc;n c&ograve;n hướng dẫn chi tiết c&aacute;ch sử dụng c&aacute;c loại nguy&ecirc;n liệu sạch, nguy&ecirc;n liệu đảm bảo an to&agrave;n m&agrave; c&aacute;c b&eacute; ăn dặm từ 2 tuổi đ&atilde; c&oacute; thể ăn được.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\"><em><strong>Lợi &iacute;ch của kh&oacute;a học</strong></em></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">❗ Sau khi ho&agrave;n th&agrave;nh kh&oacute;a học, bạn c&oacute; thể tự tin tạo ra c&aacute;c loại nước sốt ngon miệng cho qu&aacute;n ăn của m&igrave;nh hoặc gia đ&igrave;nh m&igrave;nh, nấu đ&uacute;ng vị của c&aacute;c m&oacute;n lẩu v&agrave; tr&igrave;nh b&agrave;y đẹp mắt.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">❗ Hơn thế, c&aacute;c bạn c&oacute; thể s&aacute;ng tạo ra những loại sốt mới mẻ kh&aacute;c nhau dựa tr&ecirc;n c&ocirc;ng thức của c&aacute;c loại sốt cơ bản được hướng dẫn trong kh&oacute;a học.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Đăng k&yacute; ngay kh&oacute;a học&nbsp;<em><strong>C&ocirc;ng thức l&agrave;m sốt nướng - lẩu cho người kinh doanh nh&agrave; h&agrave;ng, qu&aacute;n ăn</strong></em>&nbsp;tại&nbsp;<em><strong>Unica.vn</strong></em>&nbsp;để ẵm trọn b&iacute; quyết nấu nướng cho nh&agrave; h&agrave;ng của bạn.</span></p>', 107, 14, b'0'),
(110, 'Phong thủy giúp hưng phúc, vượng tài cho ngôi nhà bạn', 'EGqL_phongthuy_1.jpg', 599000, '<p><span style=\"font-size:16px\">Kh&oacute;a học gi&uacute;p&nbsp;bạn chọn được mảnh đất&nbsp;hay ng&ocirc;i nh&agrave; c&oacute; tốt cho sức khỏe kh&ocirc;ng, c&oacute; mang t&agrave;i lộc v&agrave;o cho gia đ&igrave;nh kh&ocirc;ng hoặc nếu đất xấu th&igrave; c&aacute;ch h&oacute;a giải như thế n&agrave;o.</span></p>', '<p><span style=\"font-size:16px\">Kh&oacute;a&nbsp;<strong>Phong thủy gi&uacute;p hưng ph&uacute;c, vượng t&agrave;i cho ng&ocirc;i nh&agrave; bạn</strong>&nbsp;được giảng dạy bởi&nbsp;chuy&ecirc;n gia phong thủy, Kiến Tr&uacute;c Sư Ho&agrave;ng H&agrave; -&nbsp;Gi&aacute;m đốc c&ocirc;ng ty TNHH kiến tr&uacute;c nh&agrave; theo phong thủy AF. Với hơn 10 năm nghi&ecirc;n cứu v&agrave; giảng dạy phong thủy ở Việt Nam v&agrave; Trung Quốc. Phong thủy c&oacute; rất nhiều trường ph&aacute;i: b&aacute;t trạch, huyền kh&ocirc;ng... học phong thủy kh&ocirc;ng kh&oacute;, quan trọng l&agrave; ta phải c&oacute; th&agrave;y dạy tốt v&agrave; phương ph&aacute;p học tốt.<br />\r\nKh&oacute;a học sẽ gi&uacute;p&nbsp;bạn chọn được mảnh đất&nbsp;hay ng&ocirc;i nh&agrave; tốt, c&oacute; mang lại vượng kh&iacute; gi&uacute;p cho gia chủ c&oacute; sức khỏe tốt hay&nbsp;kh&ocirc;ng?&nbsp;Ng&ocirc;i nh&agrave; c&oacute; mang t&agrave;i lộc v&agrave;o cho gia đ&igrave;nh kh&ocirc;ng?&nbsp;Kh&oacute;a học c&ograve;n gi&uacute;p bạn biết được c&aacute;c thế đất xấu, như: đường lao v&agrave;o nh&agrave;, nh&agrave; gần nghĩa trang, b&atilde;i r&aacute;c....v&agrave; c&aacute;ch xử l&yacute; h&oacute;a giải như thế n&agrave;o. Bạn sẽ biết được hướng nh&agrave; c&oacute;&nbsp;hợp với m&igrave;nh hay kh&ocirc;ng,&nbsp;hướng b&agrave;n thờ, hướng bếp, hướng b&agrave;n l&agrave;m việc, hướng giường ngủ c&oacute; hợp kh&ocirc;ng? Nếu kh&ocirc;ng tốt&nbsp;th&igrave; h&oacute;a giải như thế n&agrave;o? Mở cửa chỗ n&agrave;o tốt, chỗ n&agrave;o kh&ocirc;ng n&ecirc;n mở cửa để tăng t&agrave;i lộc v&agrave; tốt cho sức khỏe... Bạn sẽ biết được năm n&agrave;o l&agrave;m được nh&agrave; m&agrave; kh&ocirc;ng&nbsp;phạm kim l&acirc;u, l&agrave;m năm kim l&acirc;u nguy đến mạng của gia chủ, biết được đường nước v&agrave;o ra chỗ n&agrave;o, bể phốt vệ sinh để đ&acirc;u kh&ocirc;ng bị phạm ốm đau, bệnh tật... Kh&oacute;a học cũng gi&uacute;p&nbsp;bạn cũng biết được lấy vợ tuổi n&agrave;o, người như thế n&agrave;o th&igrave; tốt để mang lại&nbsp;hạnh ph&uacute;c gia đ&igrave;nh... Biết được chọn đối t&aacute;c l&agrave;m ăn hay nh&acirc;n vi&ecirc;n, người dưới quyền hợp phong thủy tuổi của m&igrave;nh..</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><span style=\"font-size:24px\"><strong>Bạn sẽ học được g&igrave;</strong></span></h3>\r\n\r\n<p>✔️&nbsp;<span style=\"font-size:16px\">Bạn sẽ biết bạn l&agrave; người đ&ocirc;ng tứ trạch hay t&acirc;y tứ trạch</span></p>\r\n\r\n<p>✔️&nbsp;<span style=\"font-size:16px\">Biết được c&aacute;c hướng sinh kh&iacute;, thi&ecirc;n y, phục vị, ph&uacute;c đức của m&igrave;nh l&agrave; hướng n&agrave;o</span></p>\r\n\r\n<p>✔️&nbsp;<span style=\"font-size:16px\">Biết&nbsp;hướng nh&agrave; n&agrave;o hợp với m&igrave;nh hay bố mẹ, anh em của m&igrave;nh&nbsp;</span></p>\r\n\r\n<p>✔️&nbsp;<span style=\"font-size:16px\">Biết đặt hướng ban thờ, hướng bếp, hướng b&agrave;n l&agrave;m việc, hướng giường ngủ&nbsp;tốt, mang lại t&agrave;i lộc, sức khỏe</span></p>\r\n\r\n<p>✔️&nbsp;<span style=\"font-size:16px\">Bạn sẽ tự tin l&agrave; 1 chuy&ecirc;n gia phong thủy v&igrave; c&aacute;c kiến thứ trong kh&oacute;a học&nbsp;chỉ c&oacute; chuy&ecirc;n</span></p>', 108, 13, b'0'),
(111, 'Tử Vi - Đệ Nhất Thần Số: giải đoán giàu nghèo, thọ yểu, hôn nhân vận mệnh đời người', 'I1YE_phongthuy_2.jpg', 299000, '<p><span style=\"font-size:16px\">Kh&oacute;a học sẽ gi&uacute;p bạn nắm được những kiến thức tổng qu&aacute;t về bộ m&ocirc;n tử vi, giải m&atilde; được những b&iacute; ẩn về cuộc đời của mỗi con người như: gi&agrave;u ngh&egrave;o, thọ yểu...</span></p>', '<p><span style=\"font-size:16px\">Tử vi l&agrave; 1 m&ocirc;n khoa học nghi&ecirc;n cứu về số mệnh con người, kỳ diệu v&ocirc; c&ugrave;ng biết được gi&agrave;u ngh&egrave;o, thọ yểu, h&ocirc;n nh&acirc;n hạnh ph&uacute;c của đời người. L&aacute; số tử vi c&oacute; khoảng 100 sao v&agrave; chia ra 12 cung mệnh, huynh đệ, phu th&ecirc;, tử tức, t&agrave;i bạch, tật &aacute;ch, thi&ecirc;n di, n&ocirc; bộc, quan lộc điền trạch, ph&uacute;c đức, phụ mẫu. Muốn xem tiền bạc kiếm được nhiều kh&ocirc;ng ch&uacute;ng ta xem ở cung t&agrave;i bạch, xem bố mẹ như n&agrave;o ta xem ở cung phụ mẫu, xem vợ hay chồng của ta l&agrave; người như n&agrave;o th&igrave; xem ở cung phu th&ecirc;...</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Ch&uacute;ng ta ai cũng muốn kinh doanh l&agrave;m gi&agrave;u, n&ecirc;n đ&acirc;y l&agrave; bộ&nbsp;m&ocirc;n rất cần để học, biết được năm n&agrave;o cần đầu tư l&agrave;m ăn lớn, năm n&agrave;o ch&uacute;ng ta im để chờ thời, ngay cả biết năm n&agrave;o gặp hạn, hạn về vấn đề g&igrave;, rồi xem được tuổi thọ của bất kỳ ai...</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Kh&oacute;a học&nbsp;<strong>Tử Vi - Đệ Nhất Thần Số : giải đo&aacute;n gi&agrave;u ngh&egrave;o, thọ yểu, h&ocirc;n nh&acirc;n vận mệnh đời người</strong><strong>&nbsp;</strong>sẽ mang lại cho bạn kiến thức tổng quan v&agrave; s&acirc;u sắc nhất về việc giải m&atilde; những b&iacute; ẩn của vũ trụ v&agrave; con người.</span></p>\r\n\r\n<h3><span style=\"font-size:24px\"><strong>Bạn sẽ học được g&igrave;</strong></span></h3>\r\n\r\n<p>✔️&nbsp;<span style=\"font-size:16px\">Bạn sẽ biết&nbsp;giai đoạn n&agrave;o l&agrave; thời cơ tốt nhất để triển khai những dự định của m&igrave;nh</span></p>\r\n\r\n<p>✔️&nbsp;<span style=\"font-size:16px\">Bạn sẽ biết được năm n&agrave;o xấu, hạn&nbsp;để tr&aacute;nh</span></p>\r\n\r\n<p>✔️&nbsp;<span style=\"font-size:16px\">Bạn sẽ biết được t&iacute;nh c&aacute;ch của ch&iacute;nh m&igrave;nh, ph&aacute;t huy điểm mạnh, khắc phục điểm yếu</span></p>\r\n\r\n<p>✔️&nbsp;<span style=\"font-size:16px\">Bạn sẽ xem được số mệnh của bất kỳ ai</span></p>', 108, 13, b'0'),
(112, 'Tử vi dễ hiểu', 'awbG_phongthuy_3.jpg', 399000, '<p><span style=\"font-size:16px\">Kh&oacute;a học tử vi V&ocirc; c&ugrave;ng đơn giản, v&ocirc; c&ugrave;ng dễ hiểu l&agrave; những g&igrave; Tử vi dễ hiểu c&ugrave;ng giảng vi&ecirc;n sẽ mang tới bạn trong kh&oacute;a học n&agrave;y, gi&uacute;p bạn c&oacute; thể nắm được tử vi một c&aacute;ch b&agrave;i bản, đầy đủ v&agrave; chi tiết nhất.</span></p>', '<p><span style=\"font-size:16px\">Tử vi (hay tử vi đẩu số) l&agrave;&nbsp;một h&igrave;nh thức luận đo&aacute;n vận mệnh con người&nbsp;bằng c&aacute;ch lập l&aacute; số tử vi dựa tr&ecirc;n c&aacute;c cơ sở c&aacute;c triết l&yacute; v&agrave; c&aacute;c thuyết &acirc;m dương ngũ h&agrave;nh, thi&ecirc;n can địa chị, miếu h&atilde;m, c&aacute;c cung sao, ... căn cứ v&agrave;o giờ, ng&agrave;y, th&aacute;ng, năm sinh theo &acirc;m lịch v&agrave; giới t&iacute;nh để l&yacute; giải những diễn biến xảy ra trong đời người.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Nhu cầu học c&aacute;c kh&oacute;a học tử vi ng&agrave;y một nhiều bởi ch&uacute;ng c&oacute; thể luận đo&aacute;n cho người xem những g&igrave; m&agrave; hiện người đ&oacute; đang c&oacute; cả tốt cả xấu, từ đ&oacute; gi&uacute;p người xem c&oacute; thể hiểu r&otilde; hơn những điểm mạnh, điểm yếu của bản th&acirc;n, từ đ&oacute;&nbsp;biết c&aacute;ch khắc phục v&agrave; h&oacute;a giải những điều kh&ocirc;ng tốt hiện l&ecirc;n trong l&aacute; số để gi&uacute;p cuộc sống v&agrave; c&ocirc;ng việc của bạn gặp nhiều may mắn th&agrave;nh c&ocirc;ng hơn.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Đ&uacute;ng với t&ocirc;n chỉ của kh&oacute;a học tử vi n&agrave;y l&agrave;: Đơn giản, dễ hiểu, đầy đủ, hệ thống v&agrave; hữu dụng, kh&oacute;a học&nbsp;&quot;<strong>Tử vi dễ hiểu&quot;</strong>&nbsp;c&ugrave;ng giảng vi&ecirc;n&nbsp;<strong>Chu Nhật Huy</strong>&nbsp;sẽ cung cấp những kiến thức kh&aacute;i qu&aacute;t v&agrave; cơ bản, c&oacute; li&ecirc;n quan trực tiếp đến c&aacute;c lĩnh vực trong đời sống, một c&aacute;ch dễ hiểu nhất tới học vi&ecirc;n.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Kiến thức được cung cấp từ dễ đến kh&oacute; một c&aacute;ch hệ thống, gi&uacute;p học vi&ecirc;n nhớ l&acirc;u, chuy&ecirc;n s&acirc;u về học xem tử vi&nbsp;v&agrave; c&oacute; c&aacute;ch nh&igrave;n to&agrave;n diện về m&ocirc;n học. Tuy nhi&ecirc;n, trong phạm vi kh&oacute;a học n&agrave;y tất cả kiến thức đều l&agrave; phổ th&ocirc;ng mệnh l&yacute;. Những kiến thức n&acirc;ng cao sẽ được truyền tải trong những kh&oacute;a học xem tử vi&nbsp;tiếp theo.</span></p>', 109, 13, b'0'),
(113, 'Tử vi dễ dùng', 'zpem_phongthuy_4.jpg', 699000, '<p><span style=\"font-size:16px\">Kh&oacute;a học&nbsp;nhấn mạnh việc thực h&agrave;nh giải số, cung cấp cho học vi&ecirc;n c&aacute;c c&aacute;ch cục căn bản nhất cũng như c&aacute;ch ph&acirc;n biệt c&aacute;t hung của vận tr&igrave;nh, cung cấp những kiến thức dưới dạng c&ocirc;ng thức h&oacute;a, gi&uacute;p người học c&oacute; những trụ cột nương theo trong qu&aacute; tr&igrave;nh xem l&aacute; số thực tế.</span></p>', '<p dir=\"ltr\"><span style=\"font-size:16px\">Với T&ocirc;n chỉ &quot;Đơn giản v&agrave; Hữu dụng với tinh thần: Ch&acirc;n l&yacute; l&agrave; thực tế.&quot;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Kh&oacute;a học&nbsp;<strong>Tử vi dễ d&ugrave;ng</strong>&nbsp;của giảng vi&ecirc;n&nbsp;<strong>Chu Nhật Huy</strong>&nbsp;nhấn mạnh việc thực h&agrave;nh giải số, cung cấp cho học vi&ecirc;n c&aacute;c c&aacute;ch cục căn bản nhất cũng như c&aacute;ch ph&acirc;n biệt c&aacute;t hung của vận tr&igrave;nh, cung cấp những kiến thức dưới dạng c&ocirc;ng thức h&oacute;a, gi&uacute;p người học c&oacute; những trụ cột nương theo trong qu&aacute; tr&igrave;nh xem l&aacute; số thực tế.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Kh&ocirc;ng phải ai trong ch&uacute;ng ta cũng biết, con người th&igrave; thường được đ&aacute;nh gi&aacute; bằng những việc m&agrave; họ l&agrave;m, c&ograve;n c&aacute;c sự vật th&igrave; n&oacute; được đ&aacute;nh gi&aacute; bằng những ứng dụng của sự vật thực tế trong đời sống. V&agrave; để đ&aacute;nh gi&aacute; một con người trong cuộc đời th&igrave; sẽ nh&igrave;n v&agrave;o những vấn đề m&agrave; họ giải quyết. Vấn đề được giải quyết c&agrave;ng lớn th&igrave; c&agrave;ng vĩ đại. V&iacute; dụ như những vĩ nh&acirc;n thường giải quyết c&aacute;c vấn đề tầm quốc gia, thế giới được ghi nhận. Ch&iacute;nh bởi vậy kh&oacute;a học n&agrave;y sẽ hướng dẫn ch&uacute;ng ta đ&aacute;nh gi&aacute; được c&aacute;t hung của sao, cung v&agrave; vận. Sau kh&oacute;a học, người học phong thủy online c&oacute; thể giải m&atilde; được &iacute;t nhất 80% th&ocirc;ng tin từ l&aacute; số.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Điều quan trọng hơn l&agrave; kh&oacute;a học&nbsp;<strong>Tử vi dễ d&ugrave;ng</strong>&nbsp;gợi mở cho người học những hướng đi để tự m&igrave;nh ph&aacute;t triển trường ph&aacute;i của ri&ecirc;ng m&igrave;nh m&agrave; kh&ocirc;ng xa rời những kiến thức cơ bản.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Giảng vi&ecirc;n&nbsp;<strong>Chu Nhật Huy&nbsp;</strong>sẽ giới thiệu về c&aacute;ch xem vận của Tử vi Đ&ocirc;ng A, v&agrave; c&oacute; điểm nhẹ những kiến thức ảo diệu về ngũ h&agrave;nh dụng ph&aacute;p nhằm khai mở cho người c&oacute; duy&ecirc;n t&igrave;m hiểu s&acirc;u hơn.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Kh&oacute;a học&nbsp;<strong>Tử vi dễ d&ugrave;ng</strong>&nbsp;sử dụng hơn 40 l&aacute; số danh nh&acirc;n thế giới l&agrave;m v&iacute; dụ th&eacute;p đ&atilde; được định giờ địa phương cẩn thận để minh chứng sự ch&iacute;nh x&aacute;c của tử vi v&agrave; để nghiệm l&yacute; c&aacute;ch cục. Những l&aacute; số n&agrave;y được lựa chọn một c&aacute;ch hệ thống v&agrave; c&oacute; những c&aacute;ch cục đặc sắc. Th&ocirc;ng qua những l&aacute; số thực tế n&agrave;y, học vi&ecirc;n sẽ thấy những nhận định đ&uacute;ng v&agrave; sai của tử vi kinh điển v&agrave; g&oacute;c nh&igrave;n đời thực kh&aacute;c biệt thế n&agrave;o từ thế giới tử vi.</span></p>', 109, 13, b'0'),
(114, 'Lập trình với Scratch 3.0 cơ bản', 'PHIL_nnlaptrinh_1.jpg', 650000, '<p><span style=\"font-size:16px\">Hướng dẫn trực quan, sinh động c&oacute; gi&aacute;o tr&igrave;nh PDF đi k&egrave;m gi&uacute;p học vi&ecirc;n nắm kiến thức nhanh ch&oacute;ng v&agrave; thực h&agrave;nh th&agrave;nh thạo.</span></p>', '<p><span style=\"font-size:16px\"><strong>Nội dung kh&oacute;a học &quot;Lập tr&igrave;nh Scratch 3 cơ bản&quot;</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Kh&oacute;a học bao gồm 4 dự &aacute;n ch&iacute;nh v&agrave; được chia th&agrave;nh c&aacute;c nội dung kiến thức nhỏ gi&uacute;p học vi&ecirc;n hiểu v&agrave; dễ d&agrave;ng ho&agrave;n th&agrave;nh dự &aacute;n.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>M&egrave;o đuổi chuột</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Trong dự &aacute;n, học vi&ecirc;n sẽ hiểu được c&aacute;ch để nh&acirc;n vật di chuyển theo một đối tượng kh&aacute;c v&agrave; đuổi theo đối tượng kh&aacute;c, hiểu cơ bản về v&ograve;ng lặp v&agrave; c&aacute;c khối lệnh sự kiện</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Thiệp sinh nhật động</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Qua dự &aacute;n n&agrave;y, bước đầu học vi&ecirc;n sẽ sử dụng c&aacute;c c&ocirc;ng cụ vẽ để tạo h&igrave;nh c&aacute;c nh&acirc;n vật cơ bản như chiếc chong ch&oacute;ng v&agrave; vẽ nền cho dự &aacute;n. Sau bước tạo h&igrave;nh, học vi&ecirc;n sẽ học c&aacute;ch để c&aacute;c đối tượng tr&ecirc;n tấm thiệp chuyển động v&agrave; xoay. V&iacute; dụ: chong ch&oacute;ng xoay, nến ch&aacute;y, mũ nhảy b&oacute;ng bay bay l&ecirc;n v&agrave; sao nhấp nh&aacute;y.... Ngo&agrave;i ra c&aacute;c học vi&ecirc;n sẽ được t&igrave;m hiểu th&ecirc;m về khu &acirc;m thanh cũng như c&aacute;ch th&ecirc;m nhạc nền cho dự &aacute;n sinh động v&agrave; hấp dẫn hơn.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Đường l&ecirc;n đỉnh Olympia</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Dự &aacute;n Đường l&ecirc;n đỉnh Olympia l&agrave; một dự &aacute;n kết hợp giữa học v&agrave; chơi. Học vi&ecirc;n sẽ tạo ra một dự &aacute;n v&agrave; lập tr&igrave;nh để Doraemon đưa ra c&aacute;c c&acirc;u hỏi to&aacute;n học v&agrave; y&ecirc;u cầu Nobita trả lời c&aacute;c c&acirc;u hỏi đ&oacute;. Người chơi sẽ đ&oacute;ng vai tr&ograve; trả lời c&acirc;u hỏi của Doraemon v&agrave; gi&uacute;p Nobita chinh phục đỉnh Olympia. Qua dự &aacute;n n&agrave;y, học vi&ecirc;n sẽ hiểu th&ecirc;m về kh&aacute;i niệm biến trong lập tr&igrave;nh, c&aacute;ch hoạt động của cấu tr&uacute;c điều kiện cũng như c&aacute;ch đưa ra c&acirc;u hỏi trong dự &aacute;n.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Bảo vệ đảo</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Bảo vệ đảo l&agrave; một tr&ograve; chơi m&agrave; người chơi sẽ điều khiển ph&aacute;o bắn c&aacute;c t&agrave;u địch đang muốn tiến đến x&acirc;m chiếm 2 h&ograve;n đảo. Khi t&agrave;u bị bắn tr&uacute;ng t&agrave;u sẽ ph&aacute;t nổ v&agrave; điểm sẽ được cộng cho người chơi. Qua dự &aacute;n n&agrave;y, học vi&ecirc;n sẽ cần sử dụng c&aacute;c c&ocirc;ng cụ vẽ để tạo h&igrave;nh khẩu ph&aacute;p, bản đồ, t&agrave;u địch v&agrave; c&aacute;c đối tượng kh&aacute;c. Sau bước tạo h&igrave;nh c&aacute;c nh&acirc;n vật, học vi&ecirc;n sẽ tiến h&agrave;nh lập tr&igrave;nh cho từng đối tượng để c&aacute;c đối tượng hoạt động v&iacute; dụ: T&acirc;m ngắm di chuột, khi t&agrave;u bị bắn tr&uacute;ng sẽ ph&aacute;t nổ, t&agrave;u hướng về ph&iacute;a 2 h&ograve;n đảo v&agrave; di chuyển tới mục ti&ecirc;u....<br />\r\n<br />\r\nTh&ocirc;ng qua kh&oacute;a học, học vi&ecirc;n sẽ hiểu được c&aacute;c kiến thức cơ bản trong&nbsp;<a href=\"https://unica.vn/course/cong-nghe-thong-tin\">học c&ocirc;ng nghệ th&ocirc;ng tin</a>&nbsp;như cấu tr&uacute;c tuần tự, v&ograve;ng lặp, cấu tr&uacute;c điều kiện (cấu tr&uacute;c rẽ nh&aacute;nh), h&agrave;m....Ngo&agrave;i ra c&aacute;c học vi&ecirc;n sẽ tiếp thu th&ecirc;m c&aacute;c kiến thức thực tiễn như c&aacute;c tư duy để giải quyết vấn đề, t&igrave;m v&agrave; sửa lỗi sai....<br />\r\nC&ocirc;ng nghệ l&agrave; điều kh&ocirc;ng thể thiếu trong kỷ nguy&ecirc;n 4.0. Thay v&igrave; ngăn cấm trẻ em sử dụng SẢN PHẨM c&ocirc;ng nghệ một c&aacute;ch thụ động, h&atilde;y để c&aacute;c em thảo sức s&aacute;ng tạo ra c&aacute;c ứng dụng của ri&ecirc;ng m&igrave;nh.</span></p>', 110, 4, b'0'),
(115, 'Lập trình với Scratch 3.0 nâng cao', '6dlh_nnlaptrinh_2.jpg', 800000, '<p><span style=\"font-size:16px\">Kh&oacute;a học d&agrave;nh cho người y&ecirc;u th&iacute;ch lập tr&igrave;nh, gi&uacute;p bạn nắm được c&aacute;c kiến thức n&acirc;ng cao về lập tr&igrave;nh để tạo ra những sản phẩm hấp dẫn.</span></p>', '<h2><strong><span style=\"font-size:16px\">Giới thiệu kh&oacute;a học</span></strong></h2>\r\n\r\n<p><span style=\"font-size:16px\">KH&Oacute;A HỌC LẬP TR&Igrave;NH SCRATCH 3.0 N&Acirc;NG CAO<br />\r\nGi&uacute;p học sinh từ 8 - 16 tuổi t&igrave;m hiểu chuy&ecirc;n s&acirc;u hơn về bộ m&ocirc;n Lập tr&igrave;nh th&ocirc;ng qua việc tạo ra c&aacute;c chương tr&igrave;nh tr&ecirc;n m&aacute;y t&iacute;nh bằng ng&ocirc;n ngữ lập tr&igrave;nh k&eacute;o thả Scratch theo c&aacute;c cấp độ từ dễ đến kh&oacute;.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Nội dung ch&iacute;nh của kh&oacute;a học</strong>:<br />\r\n&nbsp;Nội dung kh&oacute;a học được x&acirc;y dựng dựa tr&ecirc;n một phần cuốn gi&aacute;o tr&igrave;nh &quot;Lập tr&igrave;nh với Scratch 3.0&quot; xuất bản tại NXB Đại học Quốc Gia H&agrave; Nội do Học Viện VIETSTEM bi&ecirc;n soạn. Đồng thời bổ sung th&ecirc;m c&aacute;c chương tr&igrave;nh phần mềm hỗ trợ học tập một số m&ocirc;n học như m&ocirc;n To&aacute;n, L&yacute;, Lịch sử.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Kh&oacute;a học bao gồm 05 chương:</strong><br />\r\nChương 1: Thiết kế v&agrave; Lập tr&igrave;nh sản phẩm Thiệp sinh nhật.<br />\r\nChương 2: Thiết kế v&agrave; Lập tr&igrave;nh m&ocirc; phỏng hoạt động của Đồng hồ<br />\r\nChương 3: Thiết kế v&agrave; Lập tr&igrave;nh m&ocirc; phỏng mạch điện<br />\r\nChương 4: Thiết kế v&agrave; Lập tr&igrave;nh tr&ograve; chơi Điện Bi&ecirc;n Phủ tr&ecirc;n kh&ocirc;ng<br />\r\nChương 5: Thiết kế v&agrave; Lập tr&igrave;nh tr&ograve; chơi Flappy Bird.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Học Vi&ecirc;n được lợi g&igrave; khi mua kh&oacute;a học:</strong><br />\r\n<strong>✔️&nbsp;</strong>L&agrave;m chủ ng&ocirc;n ngữ lập tr&igrave;nh Srcatch trong thời gian ngắn v&agrave; đơn giản nhất.<br />\r\n<strong>✔️&nbsp;</strong>Nắm được c&aacute;c kh&aacute;i niệm n&acirc;ng cao về ng&ocirc;n ngữ lập tr&igrave;nh l&agrave;m l&agrave;m bước đệm vững chắc để học l&ecirc;n c&aacute;c&nbsp;<a href=\"https://unica.vn/course/cong-nghe-thong-tin\">kh&oacute;a học c&ocirc;ng nghệ th&ocirc;ng tin</a>&nbsp;kh&aacute;c<br />\r\n<strong>✔️&nbsp;</strong>Hiểu r&otilde; hơn về thế giới c&ocirc;ng nghệ xung quanh, c&aacute;ch m&aacute;y t&iacute;nh v&agrave; c&aacute;c thiết bị di động th&ocirc;ng minh nghĩ v&agrave; hoạt động.<br />\r\n<strong>✔️&nbsp;</strong>L&agrave;m chủ ng&ocirc;n ngữ lập tr&igrave;nh Scratch gi&uacute;p học vi&ecirc;n trang bị một c&ocirc;ng cụ mới trong r&egrave;n luyện tư duy cũng như phục học tập nghi&ecirc;n cứu c&aacute;c m&ocirc;n học kh&aacute;c như To&aacute;n, L&yacute;, H&oacute;a, Sinh học, Lịch sử....<br />\r\n<strong>✔️&nbsp;</strong>Phương thức học tập thuận tiện c&oacute; hiệu quả kinh tế cao. Học vi&ecirc;n c&oacute; thể&nbsp;<a href=\"https://unica.vn/tag/ngon-ngu-lap-trinh\">học ng&ocirc;n ngữ lập tr&igrave;nh</a>&nbsp;mọi l&uacute;c, mọi nơi th&ocirc;ng qua m&aacute;y t&iacute;nh hoặc thiết bị di động c&oacute; kết nối internet.<br />\r\n<strong>✔️&nbsp;</strong>Nhận sự hỗ trợ tận t&igrave;nh từ c&aacute;c chuy&ecirc;n gia của Học Viện VIETSTEM.</span></p>', 110, 4, b'0'),
(116, 'Học lập trình C/C++ TỪ A - Z', 'WuTk_nnlaptrinh_3.jpg', 350000, '<p><span style=\"font-size:16px\">Trang bị cho bạn kỹ năng lập tr&igrave;nh ng&ocirc;n ngữ C/C++ từ cơ bản đến n&acirc;ng cao, được minh họa th&ocirc;ng qua c&aacute;c b&agrave;i tập thực h&agrave;nh thực tế nhất về C/C++</span></p>', '<p><span style=\"font-size:16px\"><strong>Ng&ocirc;n ngữ lập tr&igrave;nh bậc cao C/C++</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Ng&ocirc;n ngữ lập tr&igrave;nh C++ được x&acirc;y dựng v&agrave; ph&aacute;t triển từ ng&ocirc;n ngữ C. Ng&ocirc;n ngữ C++ kh&ocirc;ng phải l&agrave; ng&ocirc;n ngữ hướng đối tượng ho&agrave;n to&agrave;n m&agrave; l&agrave; ng&ocirc;n ngữ &ldquo;đa hướng&rdquo;. V&igrave; C++ hỗ trợ cả lập tr&igrave;nh hướng h&agrave;nh động v&agrave; lập tr&igrave;nh hướng đối tượng. N&oacute; l&agrave; một trong những ng&ocirc;n ngữ phổ biến để viết c&aacute;c ứng dụng m&aacute;y t&iacute;nh&nbsp;&ndash; v&agrave; ng&ocirc;n ngữ th&ocirc;ng dụng nhất để lập tr&igrave;nh games. &nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Kh&oacute;a học lập tr&igrave;nh C&nbsp;n&agrave;y ch&iacute;nh l&agrave; d&agrave;nh ri&ecirc;ng cho bạn:</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">- Học sinh đ&atilde; tốt nghiệp PTTH, c&oacute; sự y&ecirc;u th&iacute;ch v&agrave; đam m&ecirc; lập tr&igrave;nh hệ thống, y&ecirc;u th&iacute;ch m&aacute;y t&iacute;nh, c&ocirc;ng nghệ th&ocirc;ng tin, muốn học ngay từ đầu về C/C++ một c&aacute;ch b&agrave;i bản, chi tiết</span></p>\r\n\r\n<p><span style=\"font-size:16px\">- Sinh vi&ecirc;n, học vi&ecirc;n c&aacute;c trường đại học chuy&ecirc;n ng&agrave;nh CNTT, khoa học m&aacute;y t&iacute;nh, c&ocirc;ng nghệ phần mềm, bảo mật... đang t&igrave;m kiếm c&aacute;c kho&aacute; học c&ocirc;ng nghệ th&ocirc;ng tin online&nbsp;để&nbsp;học C/C++ chuy&ecirc;n s&acirc;u bằng những b&agrave;i tập thực h&agrave;nh để tăng kiến thức v&agrave; trau dồi hơn kỹ năng lập tr&igrave;nh của m&igrave;nh</span></p>\r\n\r\n<p><span style=\"font-size:16px\">- Nh&acirc;n vi&ecirc;n lập tr&igrave;nh x&acirc;y dựng v&agrave; ph&aacute;t triển ứng dụng phần mềm tại c&aacute;c doanh nghiệp, muốn học C/C++ để n&acirc;ng cao hơn kỹ năng lập tr&igrave;nh của bản th&acirc;n, vừa học vừa ứng dụng được ngay v&agrave;o c&ocirc;ng việc.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">- Một người ho&agrave;n to&agrave;n chưa biết g&igrave; về lập tr&igrave;nh, muốn học ng&ocirc;n ngữ lập tr&igrave;nh C/C++ để mở th&ecirc;m những cơ hội mới cho bản th&acirc;n</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Kh&oacute;a học lập tr&igrave;nh C/C++&nbsp;c&oacute; g&igrave; d&agrave;nh cho bạn?</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Kh&oacute;a học sẽ&nbsp;trang bị cho học vi&ecirc;n c&aacute;c kỹ năng lập tr&igrave;nh được minh hoạ cụ thể bằng ng&ocirc;n ngữ lập tr&igrave;nh C/C++ từ cơ bản đến n&acirc;ng cao. Kh&oacute;a học bao gồm c&aacute;c kỹ thuật lập tr&igrave;nh tr&ecirc;n c&aacute;c kiểu dữ liệu cơ bản, c&aacute;c ph&aacute;t biểu lựa chọn, c&acirc;u lệnh điều khiển, v&ograve;ng lặp, mảng, con trỏ, kiểu cấu tr&uacute;c. B&ecirc;n cạnh đ&oacute; kh&oacute;a học cũng trang bị cho học vi&ecirc;n kiến thức xử l&yacute; tập tin, c&aacute;ch viết chương tr&igrave;nh theo kiểu lập tr&igrave;nh h&agrave;m...</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Qua kh&oacute;a học&nbsp;<strong>Học lập tr&igrave;nh C/C++ TỪ A - Z</strong>&nbsp;tại Unica.vn, học vi&ecirc;n c&oacute; thể tự n&acirc;ng cao kỹ năng lập tr&igrave;nh của m&igrave;nh, dễ d&agrave;ng tiếp cận c&aacute;c ng&ocirc;n ngữ cấp cao v&agrave; c&ocirc;ng nghệ mới. Đ&acirc;y l&agrave; kh&oacute;a học tạo tiền đề tốt cho việc tiếp cận phương ph&aacute;p lập tr&igrave;nh hướng đối tượng, một phương ph&aacute;p lập tr&igrave;nh cần phải c&oacute; của một lập tr&igrave;nh vi&ecirc;n.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Những lợi &iacute;ch khi tham gia&nbsp;<strong>Kh&oacute;a học lập tr&igrave;nh C/C++</strong>&nbsp;tại ESTO:</span></p>\r\n\r\n<p><span style=\"font-size:16px\">✔️ Mua 1 lần sở hữu TRỌN ĐỜI kho&aacute;&nbsp;học</span></p>\r\n\r\n<p><span style=\"font-size:16px\">✔️ Học&nbsp;ONLINE&nbsp;mọi l&uacute;c mọi nơi tr&ecirc;n mọi thiết bị (điện thoại, laptop,pc).</span></p>\r\n\r\n<p><span style=\"font-size:16px\">✔️ TƯ VẤN&nbsp;hỗ trợ 24/7&nbsp;từ giảng vi&ecirc;n</span></p>\r\n\r\n<p><span style=\"font-size:16px\">✔️ Được&nbsp;HO&Agrave;N TIỀN&nbsp;trong v&ograve;ng 7 ng&agrave;y nếu kh&ocirc;ng h&agrave;i l&ograve;ng về chất lượng&nbsp;kh&oacute;a học</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Vậy c&ograve;n chờ g&igrave; nữa, h&atilde;y tham gia ngay kh&oacute;a học&nbsp;<strong>&quot;Học lập tr&igrave;nh C/C++ TỪ A - Z&quot;&nbsp;</strong>th&ocirc;i n&agrave;o!</span></p>', 111, 4, b'0'),
(117, 'Lập Trình Python Từ Zero - Hero', 'iKcG_nnlaptrinh_4.jpg', 599000, '<p><span style=\"font-size:16px\">Kh&oacute;a học lập tr&igrave;nh Python từ Zero đến Hero gi&uacute;p bạn c&oacute; được 1 nền tảng vững chắc từ ng&ocirc;n ngữ Python để x&acirc;y dựng website, game, application hoặc automation</span></p>', '<p><span style=\"font-size:16px\">Thế giới ng&agrave;y nay c&oacute; rất rất nhiều ng&ocirc;n ngữ lập tr&igrave;nh được sử dụng phổ biến, trong đ&oacute; phải kể đến c&aacute;c ng&ocirc;n ngữ&nbsp;C++, C#, Java, Python,&nbsp;PHP,... Đặc biệt, Python đang l&agrave; ng&ocirc;n ngữ lập tr&igrave;nh m&agrave; những người mới&nbsp;<a href=\"https://unica.vn/course/cong-nghe-thong-tin\">học c&ocirc;ng nghệ th&ocirc;ng tin</a>&nbsp;t&igrave;m học nhiều nhất. Cho đến nay những lập tr&igrave;nh vi&ecirc;n Python vẫn lu&ocirc;n được c&aacute;c nh&agrave; tuyển dụng tại c&aacute;c doanh nghiệp lớn nhỏ chi&ecirc;u mộ với những ưu &aacute;i cực tốt với mức thu nhập xếp v&agrave;o loại cao nhất.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Những l&yacute; do bạn n&ecirc;n học Python b&ecirc;n cạnh c&aacute;c ng&ocirc;n ngữ lập tr&igrave;nh kh&aacute;c:&nbsp;</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">✔️L&yacute; do 1: Python l&agrave; ng&ocirc;n ngữ mới v&agrave; dễ học hơn bất k&igrave; ng&ocirc;n ngữ n&agrave;o</span></p>\r\n\r\n<p><span style=\"font-size:16px\">✔️L&yacute; do 2: Python l&agrave; ng&ocirc;n ngữ h&agrave;ng đầu tại c&aacute;c đất nước tr&ecirc;n thế giới nhất l&agrave; Ch&acirc;u &Acirc;u. V&agrave; bạn cũng đ&atilde; biết tương lai Việt Nam sẽ được hội nhập với c&aacute;c nước tr&ecirc;n thế giới vậy cho n&ecirc;n nguồn lực cho m&atilde; nguồn Python l&agrave; cực k&igrave; nhiều.V&igrave; đa phần c&aacute;c nước ch&acirc;u &Acirc;u họ đều s&agrave;i Python thay cho C.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">✔️L&yacute; do 3: Python l&agrave; ng&ocirc;n ngữ gi&uacute;p bạn viết được tr&ecirc;n đa nền tảng n&ecirc;n v&iacute; dụ như lập tr&igrave;nh website, lập tr&igrave;nh di động v&agrave; cả lập tr&igrave;nh game th&igrave; Python đều c&oacute; thể l&agrave;m được.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">✔️L&yacute; do 4: Đảm bảo đ&acirc;y l&agrave; nội dung đầy đủ v&agrave; kỹ c&agrave;ng nhất về ng&ocirc;n ngữ lập tr&igrave;nh Python để từ đ&oacute; bạn c&oacute; thể &aacute;p dụng Python v&agrave;o c&aacute;c c&ocirc;ng việc bạn muốn hướng tới hoặc tạo th&ecirc;m nhiều cơ hội việc l&agrave;m cho bạn.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">H&atilde;y tham gia kh&oacute;a học lập tr&igrave;nh web trực tuyến&nbsp;<strong>&quot;Lập Tr&igrave;nh Python Từ Zero - Hero&quot;</strong>&nbsp;của giảng vi&ecirc;n Vũ Quốc Tuấn để nhanh ch&oacute;ng trở&nbsp;th&agrave;nh chuy&ecirc;n gia lập tr&igrave;nh Python ngay tại nh&agrave;!</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Những lợi &iacute;ch khi tham gia học&nbsp;<strong>Lập Tr&igrave;nh Python Từ Zero - Hero</strong>&nbsp;tại ESTO:</span></p>\r\n\r\n<p><span style=\"font-size:16px\">✔️ Mua 1 lần sở hữu TRỌN ĐỜI kho&aacute;&nbsp;học</span></p>\r\n\r\n<p><span style=\"font-size:16px\">✔️ Học ONLINE&nbsp;mọi l&uacute;c mọi nơi tr&ecirc;n mọi thiết bị (điện thoại, laptop,pc).</span></p>\r\n\r\n<p><span style=\"font-size:16px\">✔️ TƯ VẤN&nbsp;hỗ trợ 24/7&nbsp;từ giảng vi&ecirc;n</span></p>\r\n\r\n<p><span style=\"font-size:16px\">✔️ Được&nbsp;HO&Agrave;N TIỀN&nbsp;trong v&ograve;ng 7 ng&agrave;y nếu kh&ocirc;ng h&agrave;i l&ograve;ng về chất lượng&nbsp;kh&oacute;a học</span></p>\r\n\r\n<p><span style=\"font-size:16px\">C&ograve;n chờ đợi g&igrave; nữa đăng k&yacute; ngay kh&oacute;a học<strong>&nbsp;&quot;Lập Tr&igrave;nh Python Từ Zero - Hero&quot;</strong>&nbsp;tại ESTO n&agrave;o!</span></p>', 112, 4, b'0'),
(118, 'Lập trình Android từ cơ bản đến thành thạo', 'D6v9_android_1.png', 550000, '<p><span style=\"font-size:16px\">Kh&oacute;a học lập tr&igrave;nh Android to&agrave;n tập tạo dựng một kiến thức vững chắc để học vi&ecirc;n c&oacute; thể tự vận h&agrave;nh c&aacute;c ứng dụng tr&ecirc;n Appstore một c&aacute;ch nhanh ch&oacute;ng</span></p>', '<p><span style=\"font-size:16px\">&nbsp; &nbsp;Hệ điều h&agrave;nh Android&nbsp;hiện nay đang l&agrave; hệ điều h&agrave;nh số một thế giới chiếm tới hơn 85% thị phần di động to&agrave;n cầu. Đ&acirc;y l&agrave; hệ điều h&agrave;nh c&oacute; m&atilde; nguồn do ch&iacute;nh Google ph&aacute;t h&agrave;nh, do đ&oacute; cho đến nay ch&uacute;ng đ&atilde; cho ph&eacute;p c&aacute;c nh&agrave; ph&aacute;t triển, lập tr&igrave;nh vi&ecirc;n điều chỉnh v&agrave; ph&acirc;n phối Android một c&aacute;ch tự do nhất.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; Android t&iacute;ch hợp cho gần như cho tất cả c&aacute;c thiết bị điện tử: điện thoại di động, m&aacute;y t&iacute;nh bảng, smart TV, Smartwatch... cho n&ecirc;n những lập tr&igrave;nh vi&ecirc;n Android lu&ocirc;n c&oacute; vai tr&ograve; rất lớn trong việc lập tr&igrave;nh v&agrave; ph&aacute;t triển c&aacute;c &uacute;ng dụng như thế n&agrave;y.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; Với thị trường kh&aacute;t nh&acirc;n lực như hiện nay nghề lập tr&igrave;nh vi&ecirc;n Android đ&atilde; tạo ra v&ocirc; v&agrave;n cơ hội rộng lớn cho c&aacute;c bạn trẻ, nhất l&agrave; đối với những bạn y&ecirc;u th&iacute;ch&nbsp;học c&ocirc;ng nghệ th&ocirc;ng tin, lập tr&igrave;nh v&agrave;&nbsp;y&ecirc;u th&iacute;ch c&ocirc;ng việc ph&acirc;n t&iacute;ch v&agrave; ph&aacute;t triển hệ điều h&agrave;nh Android.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; Nhận thấy nhu cầu đ&oacute;, giảng vi&ecirc;n Vũ Quốc Tuấn kết hợp c&ugrave;ng Unica đ&atilde; cho ra mắt&nbsp;<strong>kh&oacute;a học</strong>&nbsp;<strong>lập tr&igrave;nh Android từ cơ bản đến th&agrave;nh thạo&quot;</strong>&nbsp;cung cấp những kiến thức cần thiết về lập tr&igrave;nh Java v&agrave; c&aacute;c ứng dụng:</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;✔️ Quy tr&igrave;nh thiết kế ứng dụng Android tr&ecirc;n Android Studio;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;✔️ C&aacute;c đối tượng cơ bản trong Android; Đối tượng Form; T&igrave;m hiểu về đối tượng Seekbar</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;✔️&nbsp;Xử l&yacute; c&aacute;c vấn đề về thời gian</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;✔️ Animation v&agrave; game bằng Animation</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;✔️ Chạy quảng c&aacute;o Admob v&agrave; Publish ứng dụng...</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;✔️ X&acirc;y dựng ứng dụng Clone Mp3.Zing.vn</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;✔️ X&acirc;y dựng cửa h&agrave;ng b&aacute;n quần &aacute;o đơn giản ...&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; Kh&oacute;a học&nbsp;<strong>Lập tr&igrave;nh Android từ cơ bản đến th&agrave;nh thạo&nbsp;</strong>của giảng vi&ecirc;n Vũ Quốc Tuấn&nbsp;sẽ tạo dựng một kiến thức vững chắc để học vi&ecirc;n c&oacute; thể tự vận h&agrave;nh c&aacute;c ứng dụng tr&ecirc;n Appstore một c&aacute;ch nhanh ch&oacute;ng. Học lập tr&igrave;nh android thực h&agrave;nh&nbsp;để l&agrave;m được việc chứ kh&ocirc;ng chỉ l&agrave; l&yacute; thuyết su&ocirc;ng.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; Trao kiến thức v&agrave; kỹ năng lập tr&igrave;nh cơ bản nhất để c&aacute;c bạn kh&ocirc;ng bị ngỡ ng&agrave;ng cũng như dễ d&agrave;ng t&igrave;m ra c&aacute;i gốc của vấn đề, từ đ&oacute; đưa ra hướng giải quyết v&agrave; ph&aacute;t triển; Trở th&agrave;nh một chuy&ecirc;n vi&ecirc;n lập tr&igrave;nh ứng dụng di động chuy&ecirc;n nghiệp với c&aacute;c ứng dụng thực tế trong kho&aacute; học ng&ocirc;n ngữ lập tr&igrave;nh</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; Tham gia kh&oacute;a học&nbsp;&quot;<strong>Lập tr&igrave;nh Android từ cơ bản đến th&agrave;nh thạo&quot;</strong>&nbsp;ngay h&ocirc;m nay để nhanh ch&oacute;ng l&agrave;m chủ được Java v&agrave;&nbsp;sớm trở th&agrave;nh một chuy&ecirc;n vi&ecirc;n lập tr&igrave;nh ứng dụng Android t&agrave;i năng nhất!</span></p>', 112, 36, b'0');
INSERT INTO `khoahoc` (`MAKH`, `TENKH`, `ANH`, `DONGIA`, `GIOITHIEUKH`, `CHITIETKH`, `MAGV`, `MADM`, `TRUCTUYEN`) VALUES
(119, 'Lập trình Android toàn tập', '3TkC_android_2.jpg', 599000, '<p><span style=\"font-size:16px\">Lập tr&igrave;nh Android kh&ocirc;ng kh&oacute;, v&igrave; kh&oacute;a học n&agrave;y sẽ hướng dẫn bạn chi tiết về lập tr&igrave;nh Android, cung cấp thủ thuật về ASO gi&uacute;p bạn tăng thu nhập với lập tr&igrave;nh Android.</span></p>', '<p><span style=\"font-size:16px\"><strong>ạn th&acirc;n mến,</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Android hiện nay đang l&agrave; xu hướng ph&aacute;t triển của c&aacute;c h&atilde;ng điện thoại di động, được x&acirc;y dựng, ph&aacute;t triển v&agrave; hỗ trợ bởi Google, dễ lập tr&igrave;nh&nbsp;dễ tương t&aacute;c. Cứ 10 người d&ugrave;ng di động th&igrave; c&oacute; tới 6 người sử dụng di động chạy hệ điều h&agrave;nh Android. Đ&acirc;y cũng hệ điều h&agrave;nh lớn nhất thế giới, chiếm tới 87,7% thị phần di động tr&ecirc;n to&agrave;n cầu (theo số liệu 2017)</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Thu nhập b&igrave;nh qu&acirc;n của một lập tr&igrave;nh vi&ecirc;n Android tại Việt Nam dao động từ&nbsp;<strong>$500 - $2000</strong>&nbsp;mỗi th&aacute;ng. Chưa kể nếu bạn c&oacute; &yacute; tưởng x&acirc;y dựng những ứng dụng c&oacute; nhiều người d&ugrave;ng th&igrave; thu nhập của bạn sẽ tăng l&ecirc;n gấp nhiều lần. Do đ&oacute; lập tr&igrave;nh vi&ecirc;n Android c&oacute; vị tr&iacute; rất quan trọng,&nbsp;lu&ocirc;n c&oacute; được sự ưu &aacute;i rất lớn đối với c&aacute;c doanh nghiệp với mức lương thưởng rất cao.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Nhận thấy nhu cầu t&igrave;m học c&aacute;c kh&oacute;a học ng&ocirc;n ngữ lập tr&igrave;nh chuy&ecirc;n biệt về Android tại nh&agrave; của c&aacute;c bạn trẻ ng&agrave;y c&agrave;ng bức thiết, giảng vi&ecirc;n Trần Duy Thanh kết hợp c&ugrave;ng Unica đ&atilde; cho ra mắt kh&oacute;a học &quot;<strong>Lập tr&igrave;nh Android to&agrave;n tập&quot;</strong>&nbsp;cung c&acirc;́p trọn b&ocirc;̣ ki&ecirc;́n thức từ cơ bản đ&ecirc;́n n&acirc;ng cao của l&acirc;̣p tr&igrave;nh &nbsp;Android, gi&uacute;p học vi&ecirc;n c&oacute; th&ecirc;̉ tạo ra m&ocirc;̣t ứng dụng Android ho&agrave;n chỉnh sau khi ho&agrave;n th&agrave;nh kh&oacute;a học n&agrave;y. Học vi&ecirc;n cũng sẽ được hướng dẫn từng bước để đưa ứng dụng l&ecirc;n Google Play v&agrave; bật kiếm tiền từ ứng dụng do ch&iacute;nh m&igrave;nh tạo ra.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">B&ecirc;n cạnh việc x&acirc;y dựng được 1 ứng dụng ho&agrave;n chỉnh, bạn c&ograve;n được giới thiệu những thủ thuật về ASO (App Store Optimization - tối ưu để đưa ứng dụng l&ecirc;n TOP khi người d&ugrave;ng t&igrave;m kiếm từ kho&aacute;), từ đ&oacute; tăng lượt tải, v&agrave; thu nhập cũng tăng l&ecirc;n.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Kh&oacute;a học Android&nbsp;&quot;Lập tr&igrave;nh Android to&agrave;n tập&quot; ch&iacute;nh l&agrave; D&Agrave;NH CHO BẠN:</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;✔️ Sinh vi&ecirc;n, học vi&ecirc;n theo học c&ocirc;ng nghệ th&ocirc;ng tin v&agrave; c&oacute; đam m&ecirc; lớn với lập tr&igrave;nh ứng dụng</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;✔️ Nh&acirc;n vi&ecirc;n ứng dụng đang l&agrave;m c&ocirc;ng việc x&acirc;y dựng v&agrave; ph&aacute;t triển ứng dụng Android tại c&aacute;c c&ocirc;ng ty, doanh nghiệp</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;✔️ Người đ&atilde; đi l&agrave;m v&agrave;&nbsp;đang đi t&igrave;m cho m&igrave;nh cơ hội c&ocirc;ng việc mới về lập tr&igrave;nh Android</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;✔️ Người đam m&ecirc; lập tr&igrave;nh ứng dụng di động tr&ecirc;n hệ điều h&agrave;nh Android&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Vậy c&ograve;n chờ đợi g&igrave; nữa, tham gia kh&oacute;a học&nbsp;&quot;<strong>Lập tr&igrave;nh Android to&agrave;n tập&quot;</strong>&nbsp;tại Unica v&agrave; trở th&agrave;nh một lập tr&igrave;nh vi&ecirc;n ứng dụng di động ngay h&ocirc;m nay th&ocirc;i!</span></p>', 113, 36, b'0'),
(120, 'Lập trình Android cơ bản', 'WzdV_android_3.jpg', 399000, '<p><span style=\"font-size:16px\">Nắm r&otilde; những kiến thức về lập tr&igrave;nh Android từ cơ bản đến n&acirc;ng cao - Biết c&aacute;ch upload những ứng dụng Android l&ecirc;n google play để kiếm tiền từ ứng dụng</span></p>', '<p><span style=\"font-size:16px\">Kh&oacute;a học đến từ giảng vi&ecirc;n Trần Duy Thanh cung c&acirc;́p trọn b&ocirc;̣ ki&ecirc;́n thức từ cơ bản đ&ecirc;́n n&acirc;ng cao của l&acirc;̣p tr&igrave;nh java cũng như l&acirc;̣p tr&igrave;nh android gi&uacute;p học vi&ecirc;n c&oacute; th&ecirc;̉ tạo ra m&ocirc;̣t ứng dụng android ho&agrave;n chỉnh sau khi ho&agrave;n th&agrave;nh kh&oacute;a học<br />\r\nCung c&acirc;́p những cơ h&ocirc;̣i thực h&agrave;nh tạo ứng dụng Android ngay trong qu&aacute; tr&igrave;nh học ng&ocirc;n ngữ lập tr&igrave;nh<br />\r\nSau khi ho&agrave;n th&agrave;nh kh&oacute;a học, c&oacute; th&ecirc;̉ ki&ecirc;́m ti&ecirc;̀n từ Google Play nhờ c&aacute;c ứng dụng tự tạo<br />\r\nKh&oacute;a họ̣c sử dụng những c&ocirc;ng cụ, Framework mới nh&acirc;́t.<br />\r\nT&igrave;m hi&ecirc;̉u cơ bản v&ecirc;̀ ng&ocirc;n ngữ l&acirc;̣p tr&igrave;nh Java (Từ định nghĩa đ&ecirc;́n ki&ecirc;̉u dữ li&ecirc;̣u, bi&ecirc;́n, c&acirc;u l&ecirc;̣nh, mảng, chu&ocirc;̃i ... c&acirc;́u tr&uacute;c đi&ecirc;̀u khi&ecirc;̉n trong java, phương thức, lớp...). Cung cấp cho bạn kiến thức nền tảng vững chắc để học hỏi c&aacute;c&nbsp;kh&oacute;a học c&ocirc;ng nghệ th&ocirc;ng tin<br />\r\nCung c&acirc;́p những ki&ecirc;́n thức c&ocirc;́t l&otilde;i cơ bản v&ecirc;̀ 1 ứng dụng android bằng c&aacute;ch n&oacute;i v&ecirc;̀ v&ograve;ng đời của m&ocirc;̣t ứng dụng<br />\r\nCung c&acirc;́p ki&ecirc;́n thức v&ecirc;̀ th&agrave;nh ph&acirc;̀n cơ bản c&acirc;́u th&agrave;nh n&ecirc;n ứng dụng android ( activity + intent +content provider + service)<br />\r\nHướng d&acirc;̃n thực h&agrave;nh tạo ứng dụng android: ứng dụng quản l&yacute;, ứng dụng media, ứng dụng tr&ecirc;n Google play<br />\r\nHướng d&acirc;̃n c&aacute;ch ki&ecirc;́m ti&ecirc;̀n từ c&aacute;c ứng dụng tr&ecirc;n google play&nbsp;<br />\r\nCung c&acirc;́p m&ocirc;̣t s&ocirc;́ thủ thu&acirc;̣t cơ bản v&ecirc;̀ ASO ( C&aacute;ch đặt t&ecirc;n ứng dụng, SEO từ kh&oacute;a l&ecirc;n top, ki&ecirc;́m ti&ecirc;̀n từ quản c&aacute;o, từ s&ocirc;́ lượt tải ứng dụng ...)</span></p>\r\n\r\n<h3><strong><span style=\"font-size:16px\">Bạn sẽ học được g&igrave;</span></strong></h3>\r\n\r\n<p>✔️&nbsp;<span style=\"font-size:16px\">C&oacute; được ki&ecirc;́n thức to&agrave;n diện về ng&ocirc;n ngữ lập tr&igrave;nh Java</span></p>\r\n\r\n<p>✔️&nbsp;<span style=\"font-size:16px\">Nắm r&otilde; những ki&ecirc;́n thức về lập tr&igrave;nh Android từ cơ bản đến n&acirc;ng cao</span></p>\r\n\r\n<p>✔️&nbsp;<span style=\"font-size:16px\">C&oacute; khả năng tạo được những ứng dụng Android, ứng dụng game Android</span></p>\r\n\r\n<p>✔️&nbsp;<span style=\"font-size:16px\">Bi&ecirc;́t c&aacute;ch upload những ứng dụng Android l&ecirc;n google play để kiếm tiền từ ứng dụng</span></p>', 113, 36, b'0'),
(121, 'Lập trình Android nâng cao', 'mha4_android_4.jpg', 599000, '<p><span style=\"font-size:16px\">Kh&oacute;a học cung cấp cho bạn kiến thức v&agrave; kỹ năng lập tr&igrave;nh Java, gi&uacute;p bạn biết c&aacute;ch lập tr&igrave;nh v&agrave; upload những ứng dụng Android l&ecirc;n Google Play để kiếm tiền từ ứng dụng đ&oacute;</span></p>', '<p><span style=\"font-size:16px\"><strong>Nếu bạn l&agrave;:</strong></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\">Bạn l&agrave; học sinh, sinh vi&ecirc;n muốn định hướng nghề nghiệp theo học c&ocirc;ng nghệ th&ocirc;ng tin?</span></li>\r\n	<li><span style=\"font-size:16px\">Bạn muốn học lập tr&igrave;nh Java để&nbsp;tạo ứng dụng Android&nbsp;cho điện thoại?</span></li>\r\n	<li><span style=\"font-size:16px\">Bạn đang tốn qu&aacute; nhiều thời gian cho việc học lập tr&igrave;nh m&agrave; vẫn chưa thấy t&iacute;nh ứng dụng của n&oacute;?</span></li>\r\n	<li><span style=\"font-size:16px\">Bạn cần một lộ tr&igrave;nh học Java b&agrave;i bản, chi tiết v&agrave; đầy đủ tổng hợp đầy đủ kiến thức v&agrave; những kỹ thuật n&acirc;ng cao?</span></li>\r\n	<li><span style=\"font-size:16px\">Hay bạn đ&atilde; học ng&ocirc;n ngữ lập tr&igrave;nh&nbsp;Java, đ&atilde; đi l&agrave;m nhưng lại đang gặp kh&oacute; khăn trong việc thiết lập Data&nbsp;Binding, c&aacute;c dữ liệu SQ Lite hay xử l&yacute; th&ocirc;ng tin với cảm biến...?</span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:16px\"><strong>H&atilde;y đến với kh&oacute;a học &quot;L&acirc;̣p tr&igrave;nh Android n&acirc;ng cao&quot; tại Unica!</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Kh&oacute;a học do giảng vi&ecirc;n Trần Duy Thanh hướng dẫn sẽ&nbsp;cung c&acirc;́p trọn b&ocirc;̣ ki&ecirc;́n thức từ cơ bản đ&ecirc;́n n&acirc;ng cao của l&acirc;̣p tr&igrave;nh Java cũng như l&acirc;̣p tr&igrave;nh Android gi&uacute;p học vi&ecirc;n c&oacute; th&ecirc;̉ tạo ra m&ocirc;̣t ứng dụng android ho&agrave;n chỉnh, cung c&acirc;́p những cơ h&ocirc;̣i thực h&agrave;nh tạo ứng dụng Android ngay trong qu&aacute; tr&igrave;nh học.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><em>Sau khi ho&agrave;n th&agrave;nh kh&oacute;a học bạn sẽ c&oacute; được kiến thức v&agrave; kỹ năng lập tr&igrave;nh Java cần thiết để:</em></span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp; ✔️ Bắt tay tự&nbsp;tạo ứng dụng v&agrave; c&oacute; th&ecirc;̉ ki&ecirc;́m ti&ecirc;̀n từ Google Play nhờ c&aacute;c ứng dụng tự tạo</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp; ✔️ Kh&oacute;a họ̣c sử dụng những c&ocirc;ng cụ, Framework mới nh&acirc;́t.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp; ✔️ T&igrave;m hi&ecirc;̉u cơ bản v&ecirc;̀ ng&ocirc;n ngữ l&acirc;̣p tr&igrave;nh Java (Từ định nghĩa đ&ecirc;́n ki&ecirc;̉u dữ li&ecirc;̣u, bi&ecirc;́n, c&acirc;u l&ecirc;̣nh, mảng, chu&ocirc;̃i ... c&acirc;́u tr&uacute;c đi&ecirc;̀u khi&ecirc;̉n trong java, phương thức, lớp...)</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp; ✔️ Cung c&acirc;́p những ki&ecirc;́n thức c&ocirc;́t l&otilde;i cơ bản v&ecirc;̀ 1 ứng dụng android bằng c&aacute;ch n&oacute;i v&ecirc;̀ v&ograve;ng đời của m&ocirc;̣t ứng dụng</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp; ✔️ Cung c&acirc;́p ki&ecirc;́n thức v&ecirc;̀ th&agrave;nh ph&acirc;̀n cơ bản c&acirc;́u th&agrave;nh n&ecirc;n ứng dụng android ( activity + intent +content provider + service)</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp; ✔️ Hướng d&acirc;̃n thực h&agrave;nh tạo ứng dụng android: ứng dụng quản l&yacute;, ứng dụng media, ứng dụng tr&ecirc;n Google play</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp; ✔️ Hướng d&acirc;̃n c&aacute;ch ki&ecirc;́m ti&ecirc;̀n từ c&aacute;c ứng dụng tr&ecirc;n google play&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp; ✔️ Cung c&acirc;́p m&ocirc;̣t s&ocirc;́ thủ thu&acirc;̣t cơ bản v&ecirc;̀ ASO ( C&aacute;ch đặt t&ecirc;n ứng dụng, SEO từ kh&oacute;a l&ecirc;n top, ki&ecirc;́m ti&ecirc;̀n từ quảng c&aacute;o, từ s&ocirc;́ lượt tải ứng dụng ...&nbsp;)</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Vậy c&ograve;n chờ g&igrave; nữa, chinh phục kh&oacute;a học&nbsp;<strong>&quot;L&acirc;̣p tr&igrave;nh Android n&acirc;ng cao&quot;</strong>&nbsp;ngay h&ocirc;m nay tại ESTO th&ocirc;i!</span></p>', 113, 36, b'1'),
(122, 'Học jQuery từ cơ bản đến nâng cao', 'oiKX_web_1.jpg', 599000, '<p><span style=\"font-size:16px\">Kh&oacute;a Học jQuery Từ Cơ Bản Đến N&acirc;ng Cao l&agrave; c&aacute;ch nhanh ch&oacute;ng để vận dụng những t&iacute;nh năng tối ưu của n&oacute; v&agrave;o c&ocirc;ng việc</span></p>', '<p dir=\"ltr\"><span style=\"font-size:16px\">Với sự ph&aacute;t triển nhanh ch&oacute;ng của Internet, người d&ugrave;ng ng&agrave;y c&agrave;ng quan t&acirc;m hơn đến giao diện hay h&igrave;nh thức của một trang web. Nếu như trước đ&acirc;y, quy chuẩn đẹp của một trang web l&agrave; chỉ cần c&oacute; banner, nội dung v&agrave; một &iacute;t footer đơn giản. Nhưng theo thời gian, thị hiếu người đọc cũng thay đổi, một trang web phải c&oacute; banner bắt mắt, nội dung l&ocirc;i cuốn k&egrave;m theo c&aacute;c hiệu ứng lạ mắt mới c&oacute; thể thu h&uacute;t được người đọc d&agrave;i l&acirc;u.&nbsp;</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Ch&iacute;nh v&igrave; vậy, c&aacute;c web developers, web designers cần thiết phải n&acirc;ng cao tay nghề. V&agrave; một trong những c&ocirc;ng cụ cần thiết đến từ c&aacute;c thư viện JavaScript mở được quan t&acirc;m nhiều nhất đ&oacute; ch&iacute;nh l&agrave; jQuery, c&ocirc;ng cụ gi&uacute;p tạo ra c&aacute;c hiệu ứng c&oacute; thể tương t&aacute;c trực tiếp với người đọc một c&aacute;ch nhanh ch&oacute;ng v&agrave; dễ d&agrave;ng hơn so với việc sử dụng thuần JavaScript.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Bạn muốn t&igrave;m hiểu v&agrave; vận dụng những t&iacute;nh năng tối ưu của jQuery nhưng kh&ocirc;ng biết bắt đầu từ đ&acirc;u v&agrave; thế n&agrave;o?</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\"><strong>Kh&oacute;a học</strong>&nbsp;<strong>jQuery cơ bản đến n&acirc;ng cao</strong>&nbsp;của giảng vi&ecirc;n&nbsp;<strong>Nguyễn Đức Việt</strong>&nbsp;tr&ecirc;n UNICA ra đời gi&uacute;p c&aacute;c bạn c&oacute; thể chỉnh sửa giao diện của một website bất kỳ; tăng khả năng tương t&aacute;c với người d&ugrave;ng; tạo hiệu ứng động cho nội dung; c&oacute; khả năng tự đọc hiểu c&aacute;c t&agrave;i liệu tự lập tr&igrave;nh jQuery trong suốt kh&oacute;a học jQuery&nbsp;online n&agrave;y.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\"><strong>V&igrave; sao n&ecirc;n đăng k&yacute; kh&oacute;a học&nbsp;jQuery cơ bản đến n&acirc;ng cao</strong></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Với 5 năm kinh nghiệm giảng dạy, bằng c&aacute;ch học qua trải nghiệm, c&aacute;c hướng dẫn tự l&agrave;m, v&agrave; qua c&aacute;c b&agrave;i tập thực h&agrave;nh tập trung v&agrave;o n&acirc;ng cao chuy&ecirc;n m&ocirc;n để mang đến c&aacute;c&nbsp;kh&oacute;a học c&ocirc;ng nghệ th&ocirc;ng tin&nbsp;chất lượng nhất, Giảng vi&ecirc;n Nguyễn Đức Việt sẽ gi&uacute;p bạn:</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">✔️ Sử dụng th&agrave;nh thạo jQuery sau kh&oacute;a học n&agrave;y.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">✔️ C&oacute; thể l&agrave;m lại được hầu hết c&aacute;c hiệu ứng gặp được tr&ecirc;n mạng.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">✔️ C&oacute; khả năng lập tr&igrave;nh v&agrave; quản trị hiệu ứng cho c&aacute;c trang Web phục vụ nhu cầu giải tr&iacute;, kinh doanh, khởi nghiệp.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">✔️ Đọc v&agrave; hiểu c&aacute;c thuật ngữ về jQuery một c&aacute;ch thuần thục.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">✔️ C&aacute;c kĩ thuật check lỗi, t&igrave;m v&agrave; sửa lỗi lập tr&igrave;nh jQuery.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">H&atilde;y nhanh tay đăng k&yacute;&nbsp;<strong>kh&oacute;a học Học jQuery từ cơ bản đến n&acirc;ng cao</strong>&nbsp;tr&ecirc;n ESTO để nhận nhiều ưu đ&atilde;i bất ngờ từ gi&aacute;!</span></p>', 114, 6, b'0'),
(123, 'Học HTML5/CSS3, BOOTSTRAP 4 và học cắt Web từ file thiết kế', 'WfdT_web_2.jpg', 399000, '<p><span style=\"font-size:16px\">Kho&aacute; học BOOTSTRAP 4, HTML5/CSS3 gi&uacute;p bạn th&agrave;nh thạo c&aacute;c kỹ năng, phương ph&aacute;p, hiệu ứng,... cắt Web từ file thiết kế gi&uacute;p nắm vững kiến thức về CSS, HTML, hiểu r&otilde; Bootstrap v&agrave; kỹ năng cắt Web với Illustrate, Pix v&agrave; xử l&yacute; nội dung website chuy&ecirc;n nghiệp chỉ với 5 ng&agrave;y</span></p>', '<p><span style=\"font-size:16px\"><strong>C&oacute; phải bạn:&nbsp;</strong></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\">Bạn bắt đầu l&agrave;m quen v&agrave; biết đến cắt web, thiết kế website?</span></li>\r\n	<li><span style=\"font-size:16px\">Bạn y&ecirc;u th&iacute;ch những c&ocirc;ng việc đầy s&aacute;ng tạo, &yacute; tưởng mới lạ cắt, thiết kế web?</span></li>\r\n	<li><span style=\"font-size:16px\">C&ocirc;ng việc của bạn đ&ograve;i hỏi bạn cần biết bắt web, xử l&yacute; th&ocirc;ng tin, tr&igrave;nh b&agrave;y c&aacute;c nội dung tr&ecirc;n web?</span></li>\r\n	<li><span style=\"font-size:16px\">Bạn cần học c&ocirc;ng nghệ th&ocirc;ng tin online&nbsp;để trang bị th&ecirc;m những kiến thức cơ bản nhất về cắt, thiết kế web để phục vụ cho c&ocirc;ng việc của m&igrave;nh, cũng như c&oacute; th&ecirc;m cơ hội thăng tiến, kiếm th&ecirc;m thu nhập cho bản th&acirc;n?</span></li>\r\n	<li><span style=\"font-size:16px\">Bạn mới chỉ biết về cắt, thiết kế web chứ kh&ocirc;ng th&agrave;nh thạo v&agrave; biết c&aacute;c c&ocirc;ng cụ sử dụng trong cắt web?</span></li>\r\n	<li><span style=\"font-size:16px\">Bạn đang t&igrave;m kiếm một&nbsp;kh&oacute;a học lập tr&igrave;nh web&nbsp;ph&ugrave; hợp với m&igrave;nh</span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:16px\">Tất cả những kh&oacute; khăn đ&oacute; của bạn sẽ được giải quyết nhanh ch&oacute;ng, ngay lập tức khi bạn tham gia kh&oacute;a. Kh&oacute;a học BOOTSTRAP 4,&nbsp;HTML5/CSS3&nbsp;sẽ gi&uacute;p bạn cải thiện v&agrave; n&acirc;ng cao ngay lập tức tr&igrave;nh độ cắt web, sử dụng c&ocirc;ng cụ t&aacute;c nghiệp tr&ecirc;n website. Đặc biệt, đ&acirc;y l&agrave; kh&oacute;a học d&agrave;nh cho những người mới bắt đầu, cơ bản từ con số 0 về thiết kế website.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Giảng&nbsp;vi&ecirc;n Nguyễn Đức Việt sẽ c&ugrave;ng với Học vi&ecirc;n Online Unica.vn mang đến cho c&aacute;c bạn một kh&oacute;a học&nbsp;<strong>&ldquo;Học HTML5/CSS3, BOOTSTRAP 4 v&agrave; học cắt Web từ file thiết kế&rdquo;</strong>&nbsp;với 13 phần gi&uacute;p c&aacute;c học vi&ecirc;n biến những kỹ&nbsp;năng cắt web trở n&ecirc;n đơn giản v&ocirc; c&ugrave;ng. Kh&oacute;a học cung cấp cho học vi&ecirc;n đầy đủ những kỹ năng cắt web từ cơ bản đến n&acirc;ng cao. Trong qu&aacute; tr&igrave;nh học, học vi&ecirc;n cũng được thực h&agrave;nh cắt web cụ thể tr&ecirc;n c&aacute;c trang b&aacute;o như: VnExpress, Dantri, Kenh14, Baomoi, Vietnamnet.vn,...</span></p>\r\n\r\n<p><span style=\"font-size:16px\">C&aacute;c bạn sẽ được r&egrave;n luyện th&agrave;nh thục tất cả c&aacute;c kỹ năng cắt web được sử dụng nhiều nhất hiện nay, sử dụng Bootstrap 4 - c&ocirc;ng cụ lập tr&igrave;nh HTML Front End mới nhất đang được nhiều đơn vị web lựa chọn. &nbsp;C&ugrave;ng rất nhiều những t&iacute;nh năng cắt web tối ưu, đảm bảo sản phẩm đẹp c&aacute;c sử dụng font icon v&agrave; l&agrave;m c&aacute;c hiệu ứng hover trực tiếp tr&ecirc;n web,...</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Tr&igrave;nh độ cắt web của bạn sẽ được &ldquo;n&acirc;ng cấp&rdquo; khiến bạn kh&ocirc;ng khỏi bất ngờ. Bạn kh&ocirc;ng chỉ thỏa m&atilde;n được đam m&ecirc; của m&igrave;nh, thỏa sức s&aacute;ng tạo với c&aacute;c hiệu ứng v&agrave; kĩ năng cắt web, m&agrave; c&ograve;n mở th&ecirc;m nhiều cơ hội để thăng tiến trong c&ocirc;ng việc v&agrave; thể hiện tr&igrave;nh độ chuy&ecirc;n m&ocirc;n của m&igrave;nh.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Vậy c&ograve;n chờ đợi g&igrave; nữa, đăng k&yacute; kh&oacute;a học&nbsp;<strong>&ldquo;Học HTML5/CSS3, BOOTSTRAP 4 v&agrave; học cắt Web từ file thiết kế&rdquo;&nbsp;</strong>của giảng vi&ecirc;n Nguyễn Đức Việt ngay h&ocirc;m nay trước khi hết chương tr&igrave;nh ưu đ&atilde;i kh&oacute;a học tại ESTO th&ocirc;i!</span></p>', 114, 6, b'0'),
(124, 'Lập trình Backend cho website bằng PHP/Mysql theo mô hình MVC', 'FC12_web_3.jpg', 399000, '<p><span style=\"font-size:16px\">Kh&oacute;a học gi&uacute;p bạn th&agrave;nh thạo lập tr&igrave;nh Backend. Tự thiết kế phần mềm quản l&yacute; cho ri&ecirc;ng m&igrave;nh, quản l&yacute; contact, quản l&yacute; c&ocirc;ng việc, quản l&yacute; h&agrave;ng hoặc học cao hơn l&ecirc;n lập tr&igrave;nh Fullstack</span></p>', '<p><span style=\"font-size:16px\"><strong>Điểm kh&aacute;c biệt của kh&oacute;a học&nbsp;</strong><strong>&quot;Lập tr&igrave;nh Backend cho website bằng PHP/Mysql theo m&ocirc; h&igrave;nh MVC&quot;&nbsp;</strong><strong>n&agrave;y so với c&aacute;c kh&oacute;a học online kh&aacute;c c&ugrave;ng chủ đề lập tr&igrave;nh PHP l&agrave; g&igrave; vậy?</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Kh&aacute;c người tr&igrave;nh b&agrave;y bạn ạ. M&igrave;nh nghĩ cũng ảnh hưởng một phần đ&oacute;, mỗi người một c&aacute;ch tr&igrave;nh b&agrave;y v&agrave; tiếp cận kh&aacute;c nhau, sẽ hợp với từng người kh&aacute;c nhau, hi vọng bạn v&agrave; m&igrave;nh &quot;tương th&iacute;ch&quot;. Hơn nữa m&igrave;nh tự tin ở phần l&agrave; rất chi tiết, m&igrave;nh nghĩ l&agrave; kh&ocirc;ng ai n&oacute;i chi tiết như thế bạn ạ, để đảm bảo l&agrave; bạn hiểu tận ng&oacute;c ng&aacute;ch v&agrave; bản chất của vấn đề. Einestern đ&atilde; n&oacute;i l&agrave; nếu bạn kh&ocirc;ng thể giải th&iacute;ch cho một đứa trẻ hiểu th&igrave; bạn cũng chẳng hiểu r&otilde; vấn đề. Bạn thử học ng&ocirc;n ngữ lập tr&igrave;nh nh&eacute;!</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Tham khảo qua nội dung kh&oacute;a học của m&igrave;nh</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><em>&nbsp; &nbsp; Phần 1: C&agrave;i đặt c&ocirc;ng cụ lập tr&igrave;nh</em></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><em>&nbsp; &nbsp; Phần 2: C&agrave;i đặt m&ocirc;i trường v&agrave; kiến tr&uacute;c MVC</em></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><em>&nbsp; &nbsp; Phần 3: Ứng dụng MVC đầu ti&ecirc;n</em></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><em>&nbsp; &nbsp; Phần 4: Học Mysql tạo cơ sở dữ liệu v&agrave; kết nối</em></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><em>&nbsp; &nbsp; Phần 5: Ho&agrave;n thiện dự &aacute;n đầu ti&ecirc;n với MVC v&agrave; Mysql</em></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><em>&nbsp; &nbsp; Phần 6: Giới thiệu về dữ liệu kiểu mảng</em></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><em>&nbsp; &nbsp; Phần 7: B&agrave;i to&aacute;n kinh điển - Lập tr&igrave;nh th&ecirc;m + sửa + x&oacute;a dữ liệu với PHP-Mysql</em></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><em>&nbsp; &nbsp; Phần 8: Học PHP Mysql qua b&agrave;i số 2 - quản l&yacute; nh&acirc;n sự</em></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><em>&nbsp; &nbsp; Phần 9: Thiết kế dữ liệu v&agrave; thiết kế frontend bằng bootstrap 4</em></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><em>&nbsp; &nbsp; Phần 10: Lập tr&igrave;nh chức năng th&ecirc;m dữ liệu</em></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><em>&nbsp; &nbsp; Phần 11: Lập tr&igrave;nh chức năng sửa v&agrave; x&oacute;a dữ liệu</em></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><em>&nbsp; &nbsp; Phần 12: Viết jquery cho Frontend load dữ liệu m&agrave; ko cần load lại trang</em></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><em>&nbsp; &nbsp; Phần 13: Kiểu dữ liệu hiện đại - JSON</em></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><em>&nbsp; &nbsp; Phần 14: Hiểu bản chất của json th&ocirc;ng qua l&agrave;m một web ho&agrave;n chỉnh</em></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><em>&nbsp; &nbsp; Phần 15: Đưa Json v&agrave;o lập tr&igrave;nh backend</em></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><em>&nbsp; &nbsp; Phần 16: Chức năng th&ecirc;m mởi slide ảnh d&ugrave;ng Json</em></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><em>&nbsp; &nbsp; Phần 17: Ho&agrave;n thiện Backend cho phần slide</em></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><em>&nbsp; &nbsp; Phần 18: Ho&agrave;n thiện Frontend cho phần slide</em></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><em>&nbsp; &nbsp; Phần 19: Tổng kết kh&oacute;a học v&agrave; c&aacute;c kiến thức sẽ học phần n&acirc;ng cao</em></span></p>\r\n\r\n<p><span style=\"font-size:16px\">M&igrave;nh tin rằng với nội dung kh&oacute;a học lập tr&igrave;nh web online chi tiết như vậy sau khi kết th&uacute;c kh&oacute;a học bạn ho&agrave;n to&agrave;n c&oacute; thể nhanh ch&oacute;ng trở th&agrave;nh một lập tr&igrave;nh vi&ecirc;n Backend bằng PHP, MySQL cho website, tự tin với khả năng của m&igrave;nh ứng tuyển v&agrave;o c&aacute;c vị tr&iacute; Dev backend tại c&aacute;c c&ocirc;ng ty, hoặc học cao hơn l&ecirc;n lập tr&igrave;nh Fullstack ngay tại nh&agrave;.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">H&atilde;y để m&igrave;nh đồng h&agrave;nh c&ugrave;ng c&aacute;c bạn trong kh&oacute;a học&nbsp;<strong>&quot;Lập tr&igrave;nh Backend cho website bằng PHP/Mysql theo m&ocirc; h&igrave;nh MVC&quot;&nbsp;</strong>c&ugrave;ng<strong>&nbsp;Nguyễn Đức Việt&nbsp;</strong>n&agrave;y nh&eacute;. Ngo&agrave;i ra c&ograve;n rất nhiều những kho&aacute;&nbsp;học c&ocirc;ng nghệ th&ocirc;ng tin online&nbsp;kh&aacute;c tr&ecirc;n Unica đang chờ bạn kh&aacute;m ph&aacute;.&nbsp;Let&#39;s go!</span></p>', 114, 6, b'0'),
(125, 'Lập trình FULLSTACK với ANGULAR - PHP - MYSQL', 'mYrv_web_4.jpg', 499000, '<p><span style=\"font-size:16px\">Hướng dẫn học vi&ecirc;n Học v&agrave; l&agrave;m Lập tr&igrave;nh Fullstack với ng&ocirc;n ngữ Angular JS một c&aacute;ch b&agrave;i bản, đơn giản v&agrave; ứng dụng được ngay. C&oacute; nền tảng để tiệp cận v&agrave; bắt kịp xu hướng Angular JS mới nhất</span></p>', '<p><span style=\"font-size:16px\"><strong>Ng&ocirc;n ngữ Angular JS l&agrave; g&igrave;?</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>AngularJS</strong>&nbsp;l&agrave; một framework m&atilde; nguồn mở d&ugrave;ng cho c&aacute;c ứng dụng web được x&acirc;y dựng tr&ecirc;n nền Javascript. Hiện tại ng&ocirc;n ngữ n&agrave;y&nbsp;vẫn đang được duy tr&igrave; bởi Google v&agrave; bởi cộng đồng c&aacute;c c&aacute; nh&acirc;n, doanh nghiệp để giải quyết c&aacute;c vấn đề khi x&acirc;y dựng một ứng dụng website.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">So với c&aacute;c ng&ocirc;n ngữ lập tr&igrave;nh kh&aacute;c, ng&ocirc;n ngữ Angular JS c&oacute; rất nhiều ưu điểm vượt trội như:</span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\">Cung cấp khả năng tạo ra c&aacute;c Single Page Aplication dễ d&agrave;ng.</span></li>\r\n	<li><span style=\"font-size:16px\">Cung cấp khả năng data binding tới HTML, khiến cho người d&ugrave;ng cảm gi&aacute;c linh hoạt, th&acirc;n thiện.</span></li>\r\n	<li><span style=\"font-size:16px\">Dễ d&agrave;ng Unit test</span></li>\r\n	<li><span style=\"font-size:16px\">Dễ d&agrave;ng t&aacute;i sử dụng component</span></li>\r\n	<li><span style=\"font-size:16px\">Gi&uacute;p lập tr&igrave;nh vi&ecirc;n viết code &iacute;t hơn với nhiều chức năng hơn.</span></li>\r\n	<li><span style=\"font-size:16px\">Chạy được tr&ecirc;n c&aacute;c loại tr&igrave;nh duyệt, tr&ecirc;n cả PC lẫn mobile.</span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:16px\"><strong>V&agrave; nếu bạn l&agrave;...&nbsp;</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;❗ Người c&oacute; đam m&ecirc;, mong muốn&nbsp;trở th&agrave;nh một&nbsp;Web Developer&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;❗ Sinh vi&ecirc;n c&aacute;c trường Đại học, Cao đẳng, Trung cấp nghề v&agrave; học sinh đ&atilde; tốt nghiệp PTTH, nhất l&agrave; c&aacute;c bạn sinh vi&ecirc;n theo &nbsp;học c&ocirc;ng nghệ th&ocirc;ng tin online, kỹ thuật phần mềm...</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;❗ Người đ&atilde; v&agrave; đang l&agrave;m việc trong lĩnh vực IT c&oacute; định hướng ph&aacute;t triển về&nbsp;Web&nbsp;Developer.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;❗ Hoặc thậm ch&iacute; bạn đ&atilde; c&oacute; kiến thức về&nbsp;HTML, CSS&nbsp;v&agrave; ng&ocirc;n ngữ lập tr&igrave;nh&nbsp;JavaScript, l&agrave; một lập tr&igrave;nh vi&ecirc;n Front - End.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">th&igrave; kh&oacute;a học n&agrave;y ch&iacute;nh l&agrave; d&agrave;nh cho bạn:&nbsp;<strong>&quot;Lập tr&igrave;nh FULLSTACK với ANGULAR - PHP - MYSQL&quot;.</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Kh&oacute;a học do giảng vi&ecirc;n&nbsp;<strong>Nguyễn Đức Việt</strong>&nbsp;trực tiếp hướng dẫn học vi&ecirc;n học lập tr&igrave;nh web online v&agrave; tự thực h&agrave;nh lập tr&igrave;nh Fullstack với ng&ocirc;n ngữ&nbsp;Angular JS 1 ngay tại nh&agrave;, gi&uacute;p bạn c&oacute; thể sớm nhanh ch&oacute;ng ứng dụng linh hoạt v&agrave;o c&ocirc;ng việc v&agrave; qu&aacute; tr&igrave;nh học tập của m&igrave;nh hiện nay.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong><a href=\"https://inet.vn/hosting/web-hosting?affSource=INET-UNICA\">Tặng 01 th&aacute;ng sử dụng hotsting tại iNET</a></strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Nội dung ch&iacute;nh của kh&oacute;a học:</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;✔️ Phần một l&agrave; l&yacute; thuyết cơ bản về ng&ocirc;n ngữ Angular JS 1.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;✔️ Phần hai l&agrave; học thực h&agrave;nh để hiểu bản chất c&aacute;ch l&agrave;m một ứng dụng Single Page web App với Angular&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;✔️ Phần ba l&agrave; &aacute;p dụng c&aacute;c kiến thức của 2 phần trước để l&agrave;m phần Backend ho&agrave;n chỉnh với Angular js v&agrave; API sử dụng l&agrave; PHP/MYsql</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp;✔️ Điểm kh&aacute;c biệt của kh&oacute;a học l&agrave; nội dung đầy đủ, thực h&agrave;nh chi tiết, cung cấp đủ thời lượng để bạn c&oacute; thể hiểu được bản chất của việc lập tr&igrave;nh Fullstack với ng&ocirc;n ngữ Angular js.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Đừng bỏ lỡ cơ hội trở th&agrave;nh một lập tr&igrave;nh vi&ecirc;n Fullstack ngay tại nh&agrave; với ng&ocirc;n ngữ&nbsp;Angular JS 1 ngay h&ocirc;m nay chỉ với một kh&oacute;a học duy nhất&nbsp;<strong>&quot;Lập tr&igrave;nh FULLSTACK với ANGULAR - PHP - MYSQL&quot;.</strong></span></p>', 114, 6, b'0');

-- --------------------------------------------------------

--
-- Table structure for table `khoahoc_baihoc`
--

CREATE TABLE `khoahoc_baihoc` (
  `id` int(11) NOT NULL,
  `MAKH` int(11) NOT NULL,
  `MABH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khoahoc_baihoc`
--

INSERT INTO `khoahoc_baihoc` (`id`, `MAKH`, `MABH`) VALUES
(5, 33, 284),
(6, 33, 285),
(7, 33, 286),
(8, 33, 287),
(9, 33, 288),
(10, 33, 289),
(11, 33, 290),
(12, 33, 291),
(13, 33, 292),
(14, 33, 293),
(15, 33, 294),
(16, 33, 295),
(17, 33, 296),
(18, 33, 297),
(19, 33, 298),
(20, 33, 299),
(21, 33, 300),
(22, 33, 301),
(23, 33, 302),
(24, 33, 303),
(45, 33, 304),
(46, 33, 305),
(47, 33, 306),
(48, 33, 307),
(49, 33, 308),
(50, 33, 309),
(51, 33, 310),
(52, 33, 311),
(53, 33, 312),
(54, 33, 313),
(55, 33, 314),
(56, 33, 315),
(57, 33, 316),
(58, 33, 317),
(59, 33, 318),
(60, 33, 319),
(61, 33, 320),
(62, 33, 321),
(63, 33, 322),
(64, 33, 323),
(65, 33, 324),
(66, 33, 325),
(67, 33, 326),
(68, 33, 327),
(69, 33, 328),
(70, 33, 329),
(71, 33, 330),
(72, 33, 331),
(73, 33, 332),
(74, 33, 333);

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MAKM` int(11) NOT NULL,
  `TENKM` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NGAYBD` datetime DEFAULT NULL,
  `NGAYKT` datetime DEFAULT NULL,
  `MATT` int(11) DEFAULT NULL,
  `TYLEKM` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`MAKM`, `TENKM`, `NGAYBD`, `NGAYKT`, `MATT`, `TYLEKM`) VALUES
(10, 'DEMO', '2022-02-01 05:56:00', '2022-02-02 05:56:00', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `lophoc`
--

CREATE TABLE `lophoc` (
  `MALH` int(11) NOT NULL,
  `MAKH` int(11) NOT NULL,
  `TENLOP` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SLGIOIHAN` int(11) DEFAULT NULL,
  `NGAYMOLOP` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lophoc`
--

INSERT INTO `lophoc` (`MALH`, `MAKH`, `TENLOP`, `SLGIOIHAN`, `NGAYMOLOP`) VALUES
(1, 16, 'Lop 1', 46, '2022-01-12 10:37:29'),
(2, 16, 'Lop 2', 49, '2022-01-02 04:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `lophoc_baihoc`
--

CREATE TABLE `lophoc_baihoc` (
  `MABH` int(11) NOT NULL,
  `MALH` int(11) NOT NULL,
  `TGBD` datetime DEFAULT NULL,
  `TGKT` datetime DEFAULT NULL,
  `LINK` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lophoc_baihoc`
--

INSERT INTO `lophoc_baihoc` (`MABH`, `MALH`, `TGBD`, `TGKT`, `LINK`) VALUES
(335, 2, '2022-01-07 15:43:08', '2022-01-07 15:43:08', 'https://duytan.zoom.us/j/96213743123?pwd=MS8rak5VSTBsSmRSRXlPREhvcjYzQT09'),
(337, 1, '2022-01-07 15:43:32', '2022-01-07 15:43:32', 'https://duytan.zoom.us/j/96213743123?pwd=MS8rak5VSTBsSmRSRXlPREhvcjYzQT09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2015_05_06_194030_create_youtube_access_tokens_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `USER-ID` int(11) NOT NULL,
  `PROVIDER-USER-ID` varchar(200) NOT NULL,
  `PROVIDER` varchar(200) NOT NULL,
  `USER` int(11) NOT NULL,
  `PROVIDER-USER-EMAIL` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`USER-ID`, `PROVIDER-USER-ID`, `PROVIDER`, `USER`, `PROVIDER-USER-EMAIL`) VALUES
(55, '102591101811075028919', 'GOOGLE', 201, 'vinhtk0209@gmail.com'),
(56, '665249907974177', 'FACEBOOK', 202, 'khanhsktt1hktt1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `ID` int(11) NOT NULL,
  `HOTEN` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NGAYSINH` date DEFAULT NULL,
  `GIOITINH` tinyint(1) DEFAULT NULL,
  `ANHDAIDIEN` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SODIENTHOAI` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EMAIL` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MATKHAU` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `LOAITK` int(11) DEFAULT NULL,
  `TRANGTHAI` bit(1) DEFAULT b'0',
  `TOKEN` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CTCANHAN` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MACHUNGCHI` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`ID`, `HOTEN`, `NGAYSINH`, `GIOITINH`, `ANHDAIDIEN`, `SODIENTHOAI`, `EMAIL`, `MATKHAU`, `LOAITK`, `TRANGTHAI`, `TOKEN`, `CTCANHAN`, `MACHUNGCHI`, `created_at`, `updated_at`) VALUES
(1, 'Hà Kế Tú', '2021-12-03', 1, NULL, '0364050203', 'haketu123@gmail.com', '', 2, b'0', NULL, 'Giảng viên Hà Kế Tú - Haketu với kinh nghiệm 12 năm để chơi đàn và nghiên cứu về âm nhạc, 5 năm kinh nghiệm tổ chức các khóa học Guitar offline tại Úc và Hà Nội, đào tạo hàng trăm học viên trong những khóa: Guitar cổ điển, Fingerstyle và Đệm hát.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:09'),
(2, 'Đặng Trọng Khang', '2021-12-03', 1, NULL, '0364070402', 'dangtrongkhang123@gmail.com', '', 2, b'1', NULL, 'Giảng viên Đặng Trọng Khang là người có thâm niên đầu tư thực tế gần 15 năm trong thị trường chứng khoán từ 2006 - 2020. Người chia sẻ về Phương pháp đầu tư chứng khoán theo Luật Nhân Quả - Causality Investing', NULL, '2021-12-07 19:51:43', '2021-12-09 13:51:13'),
(3, 'Đỗ Trung Thành', '2021-12-03', 1, NULL, '0364050804', 'dotrungthanh123@gmail.com', '', 2, b'0', NULL, 'Giảng viên Trường Cao đẳng Sư phạm Yên Bái, Thạc sỹ Khoa học Máy tính.Có kinh nghiệm giảng dạy Tin học Văn phòng; thiết kế đồ họa; biên tập âm thanh; biên tập videos; lập trình thiết kế, xây dựng website, xây dựng phần mềm với các ngôn ngữ C# và PHP', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:09'),
(4, 'Lê Thẩm Dương', '2021-12-03', 1, NULL, '0364050834', 'lethamduong123@gmail.com', '', 2, b'0', NULL, 'Diễn giả chuyên nghiệp, chuyên gia hàng đầu trong nhiều lĩnh vực như Tài chính, Lãnh đạo, Nhân sự …', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:09'),
(5, 'Trần Thị Minh Hải', '2021-12-03', 0, NULL, '0364070403', 'tranthiminhhai123@gmail.com', NULL, 2, b'0', NULL, 'Trần Thị Minh Hải phụ trách chuyên môn và Đào tạo Chương trình Làm chủ Giọng nói – I Love My Voice trực thuộc Công ty TNHH Đào tạo và Hỗ trợ Giáo dục 2A&H (từ năm 2012 đến nay)', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(6, 'Hiển Râu', '2021-12-03', 1, NULL, '0364020304', 'hienrau123@gmail.com', NULL, 2, b'1', NULL, 'Giảng viên guitar với gần 10 năm kinh nghiệm giảng dạy hơn 300.000 học viên trên toàn quốc. Với phong cách trẻ trung và năng động, Hiển Râu đã thu hút được hơn 125 nghìn lượt thích với trang Hiển Râu Guitar và gần 250 nghìn lượt theo dõi kênh Youtube Hiển Râu.\r\n', NULL, '2021-12-07 19:51:43', '2021-12-16 13:38:54'),
(7, 'Hoàng Linh', '2021-12-03', 1, NULL, '0364050810', 'hoanglinh123@gmail.com', NULL, 2, b'0', NULL, 'Thạc sĩ Kinh tế - Master NLP Hoàng Linh (Link PUA) được biết đến như người đầu tiên đặt nền móng cho lĩnh vực ‘’Nghệ thuật quyến rũ’’ tại Việt Nam. Anh nổi tiếng trong giới trẻ qua những Clip ‘’Tán gái bá đạo’’ hay những Vlog chia sẻ kinh nghiệm thu hút hàng triệu Views trên Youtube.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(8, 'Nguyễn Ngọc Long', '2021-12-03', 1, NULL, '0364050845', 'nguyenngoclong123@gmail.com', NULL, 2, b'0', NULL, 'Giảng viên - Leader Team Google Ads IVIET SOLUTION', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(9, 'Y Lợi Ẩn', '2021-12-03', 1, NULL, '0364020401', 'yloian123@gmail.com', NULL, 2, b'0', NULL, 'Đầu bếp Y Lợi Ẩn bắt đầu sự nghiệp đầu bếp chuyên nghiệp từ năm 1998 tới nay đã có hơn 20 kinh nghiệp nghề bếp chuyên các món ẩm thực hương vị Tứ Xuyên Hàng Châu với kinh nghiệm giảng dạy 8 năm', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(10, 'Nguyễn Lê Hoàng', '2021-12-03', 1, NULL, '0364070423', 'nguyenlehoang123@gmail.com', NULL, 2, b'0', NULL, 'Nguyễn Lê Hoàng - CEO - Sáng lập Học Viện Kế Toán Việt Nam - Nơi huấn luyện kế toán thực tế chất lượng, uy tín, tận trình, trách nhiệm và chuyên sâu. Hơn 10 năm kinh nghiệm làm kế toán và huấn luyện kế toán thực tế', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(11, 'Phạm Huy Long', '2021-12-03', 1, NULL, '0364070422', 'phamhuylong123@gmail.com', NULL, 2, b'0', NULL, 'Giám đốc Công ty Cổ phần ANZMedia chuyên triển khai hệ thống Marketing Online cho hàng trăm doanh nghiệp.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(12, 'Cụ Minh Rock', '2021-12-03', 1, NULL, '0364070433', 'cuminhrock123@gmail.com', NULL, 2, b'0', NULL, 'Cụ Minh Rock - Tên Thật là Nguyễn Anh Minh - Guitarist, Composer, VIDEO & MUSIC producer.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(13, 'Nguyễn Tài Tuệ', '2021-12-03', 1, NULL, '0364070444', 'nguyentaitue123@gmail.com', NULL, 2, b'0', NULL, 'Nguyễn Tài Tuệ hiện đang là Founder & CEO công ty TNHH Clecard Việt Nam Nguyễn Tài Tuệ, 1 trong số ít công ty ở Việt Nam áp dụng mô hình marketing thông minh', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(14, 'Dương Duy Bách', '2021-12-03', 1, NULL, '0364050216', 'duongduybach123@gmail.com', NULL, 2, b'0', NULL, 'Diễn giả, Doanh nhân trẻ Dương Duy Bách - người sáng lập công ty giáo dục và tổ chức sự kiện FLY Việt Nam.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(15, 'Cấn Mạnh Linh', '2021-12-03', 1, NULL, '0364020411', 'canmanhlinh123@gmail.com', NULL, 2, b'1', NULL, 'Kinh nghiệm 5 năm làm việc với thị trường công nghệ Trung Quốc. Top những chuyên gia đào tạo Tiktok sớm nhất Việt Nam', NULL, '2021-12-07 19:51:43', '2021-12-16 13:38:51'),
(16, 'Trần Hoa', '2021-12-03', 0, NULL, '0364020344', 'tranhoa123@gmail.com', NULL, 2, b'0', NULL, 'Kinh nghiệm hơn 5 năm trong lĩnh vực kinh doanh bán hàng và 3 năm thực chiến về Marketing online đã đúc kết được rất nhiều kinh nghiệm trong nghề.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(17, 'Nguyễn Minh Cường', '2021-12-03', 1, NULL, '0364050233', 'nguyenminhcuong123@gmail.com', NULL, 2, b'0', NULL, 'Giảng Viên Nguyễn Minh Cường không chỉ là một nhà diễn giả đào tạo kỹ năng kinh doanh, khai phá khả năng con người mà còn là người làm việc nhiều năm trong lĩnh vực kinh doanh và đạt những thành tích xuất sắc.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(18, 'Trần Quốc Minh', '2021-12-03', 1, NULL, '0364070456', 'tranquocminh@gmail.com', NULL, 2, b'0', NULL, 'Chuyên gia Trần Quốc Minh hiện là nhà đầu tư tài chính, trader trên lĩnh vực Forex và Vàng', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(19, 'Nguyễn Chương', '2021-12-03', 1, NULL, '0364050811', 'nguyenchuong123@gmail.com', NULL, 2, b'0', NULL, 'Chuyên gia huấn luyện kỹ năng mềm hơn 5 năm, chuyên gia huấn luyện kinh doanh sàn TMĐT hơn 3 năm, có 7 năm kinh nghiệm bán hàng B2B, B2C & TMĐT', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(20, 'KNSV TV', '2021-12-03', 1, NULL, '0364070498', 'knsvtv123@gmail.com', NULL, 2, b'0', NULL, 'Hơn 3 năm kinh nghiệm đào tạo về video marketing, và xây dựng kênh youtube từ con số 0, 4 năm liên tục trong lĩnh vực MMO, và Digital Marketing, 3 năm liên tục giảng dạy và đào tạo Ekip của mình về thiết kế đồ họa.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(21, 'Ruby Thảo Trần', '2021-12-03', 0, NULL, '0364070488', 'rubythaotran123@gmail.com', NULL, 2, b'0', NULL, 'Ruby Thảo Trần nhận bằng thạc sỹ Lý Luận và phương pháp giảng dạy tiếng Anh của Southern Queensland Australia University', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(22, 'Nguyễn Cảnh Tuấn', '2021-12-03', 1, NULL, '0364050234', 'nguyencanhtuan123@gmail.com', NULL, 2, b'0', NULL, 'Là giảng viên Tiếng Anh có kinh nghiệm giảng dạy hơn 6 năm tại tổ chức học bổng Passerelles Numeriques và các trung tâm Tiếng Anh lớn tại Đà Nẵng như Trung tâm Việt Úc, Việt Mỹ và Scots.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(23, 'Tracey Peace', '2021-12-03', 0, NULL, '0364050898', 'traceypeace123@gmail.com', NULL, 2, b'0', NULL, 'Sáng lập và điều hành Tracey’s Home,chuyên nghành nghiên cứu ngôn ngữ học tại Yersin University, từng quản lí resort 5 sao tiêu chuẩn quốc tế.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(24, 'Hương Elena', '2021-12-03', 0, NULL, '0364020343', 'huongelena123@gmail.com', NULL, 2, b'0', NULL, 'Giảng viên tiếng Anh tại Trung tâm Tiếng Anh ETC', NULL, '2021-12-07 19:51:43', '2021-12-22 11:56:39'),
(25, 'Bùi Đức Tiến', '2021-12-03', 1, NULL, '0364050812', 'buiductien123@gmail.com', NULL, 2, b'0', NULL, 'Thạc sĩ ngôn ngữ học, giảng viên chính tại Anh Ngữ EMC - English Master Center, Có nhiều kinh nghiệm trong việc ứng dụng CNTT trong giảng dạy, đặc biệt là dùng các phần mềm, ứng dụng để thiết kế các bài học mang tính tương tác cao.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(26, 'Vũ Thùy Linh', '2021-12-03', 0, NULL, '0364050223', 'vuthuylinh123@gmai.com', NULL, 2, b'0', NULL, 'Vũ Thùy Linh Giám đốc công ty TNHH đào tạo Lego, cô là nhà đào tạo, tác giả, diễn giả truyền cảm hứng học tiếng Anh cho hàng triệu người Việt Nam.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(27, 'Trần Văn Tuấn', '2021-12-03', 1, NULL, '0364050843', 'tranvantuan123@gmail.com', NULL, 2, b'0', NULL, 'Chuyên gia tư vấn, nhà đào tạo bán hàng Trần Văn Tuấn đã huấn luyện cho hơn 5.000 người về kinh doanh, bán hàng,người sáng lập và Giám đốc điều hành của Công ty Chiến Lược và Đào Tạo TASA', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(28, 'Bùi Quang Dương', '2021-12-03', 1, NULL, '0364020312', 'buiquangduong123@gmail.com', NULL, 2, b'0', NULL, 'Nhà huấn luyện bán hàng có trên 8 năm kinh nghiệm trong vai trò chuyên gia huấn luyện Sales ở Hà Nội và từng là lãnh đạo của rất nhiều đội ngũ kinh doanh xuất chúng với doanh số gấp 2-5 lần trong nhiều năm liền. Anh cũng là founder của 1 tổ chức giáo dục tại Hà Nội.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(29, 'Hán Quang Dự', '2021-12-03', 1, NULL, '0364070497', 'hanquangdu123@gmail.com', NULL, 2, b'0', NULL, 'Hán Quang Dự được mọi người biết đến như một người truyền cảm hứng mãnh liệt với các chương trình đào tạo dạy học kinh doanh online nổi tiếng đang được tổ chức tại Hà Nội và Hồ Chí Minh: Bán hàng như hơi thở, Email marketing dành cho chủ doanh nghiệp, Nghệ thuật viết sách, xây dựng hệ thống bán hàng tự động, Thuyết trình bán hàng.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(30, 'Trần Ngọc Thiện', '2021-12-03', 1, NULL, '0364050243', 'tranngocthien123@gmail.com', NULL, 2, b'0', NULL, 'Mr Trần Ngọc Thiện từng phụ trách hoạt động đào tạo tại Công ty CPCN Vĩnh Tường, Dược phẩm Nhất Tâm. Cũng như đào tạo tại một số trường đại học: Kinh tế Quốc dân, Ngoại thương, Thương mại, Lao động Xã hội, ĐH Công nghệ - ĐH Quốc gia,...Kinh nghiệm chuyên sâu về hoạt động dịch vụ cũng như tổ chức sự kiện khách hàng tại nhiều nước trên thế giới: Thái Lan, Singapore, Malaysia, Hàn Quốc, Dubai. Liên kết đào tạo tại một số siêu thị lớn: Co.opMart, Lotte, Fivi,...', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(31, 'Nguyễn Vĩnh Cường', '2021-12-03', 1, NULL, '0364020334', 'nguyenvinhcuong123@gmail.com', NULL, 2, b'0', NULL, 'Diễn giả - Doanh nhân Nguyễn Vĩnh Cường Chuyên gia Marketing Online với hơn 11 năm kinh nghiệm Chuyên gia Marketing với hàng nghìn học viên', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(32, 'Trần Quang Minh', '2021-12-03', 1, NULL, '0364020375', 'tranquangminh123@gmail.com', NULL, 2, b'0', NULL, 'Chủ tịch HĐQT của Salesmaster - Tổ chức huấn luyện Sales & Telesales bùng nổ nhất Việt Nam.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(33, 'Nguyễn Duy Kha', '2021-12-03', 1, NULL, '0364020336', 'nguyenduykha123@gmail.com', NULL, 2, b'0', NULL, 'Thạc sỹ Nguyễn Duy Kha có 20 năm kinh nghiệm làm việc cho các tập đoàn Đa Quốc Gia lớn ở vị trí Quản lý cấp cao và hiện nay đang làm Giám Đốc Kinh Doanh Toàn Quốc cho thị trường Việt Nam của Công ty Fonterra Brands Vietnam - một Công ty của Newzealand.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(34, 'Vũ Ngọc Hoa', '2021-12-03', 0, NULL, '0364070494', 'vungochoa123@gmail.com', NULL, 2, b'0', NULL, 'Thạc sĩ Xã hội học Vũ Ngọc Hoa, nhà đào tạo - huấn luyện phát triển con người đã có 10 năm kinh nghiệm làm việc và đào tạo cộng đồng, phát triển con người trong các tổ chức phi chính phủ quốc tế và các công ty đào tạo.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(35, 'Tina Đỗ', '2021-12-03', 0, NULL, '0364050276', 'tinado123@gmail.com', NULL, 2, b'0', NULL, 'Chuyên gia đào tạo massage dưỡng sinh Tina Đỗ - Spa Dưỡng Sinh, đã có trên 16 năm giảng dạy, biên tập tài liệu, giáo trình & sách về massage dưỡng sinh.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(36, 'Nguyễn Hiếu', '2021-12-03', 0, NULL, '0364050874', 'nguyenhieu123@gmail.com', NULL, 2, b'0', NULL, 'Chuyên gia Yoga Nguyễn Hiếu đã có hơn 12 năm nghiên cứu và dạy học Yoga và học thiền tại các khoá học online trên Unica và các trung tâm và đã huấn luyện cho hàng nghìn học viên khắp Việt Nam và thế giới.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(37, 'Milena Nguyễn', '2021-12-03', 0, NULL, '0364050873', 'milenanguyen123@gmail.com', NULL, 2, b'0', NULL, 'Milena Nguyễn người sáng lập ra Soulful Garden - nơi phụ nữ tìm thấy vẻ đẹp và tình yêu qua Yoga, Pilates, Thiền, và Nghệ Thuật.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(38, 'Alex Vinh', '2021-12-03', 1, NULL, '0364020341', 'alexvinh123@gmail.com', '', 2, b'0', NULL, 'Alex Vinh Giám đốc trung tâm Mint Centre - Trung tâm ứng dụng và đào tạo Yoga - Trị liệu tự nhiên', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:09'),
(39, 'Test', '2021-12-09', 1, NULL, '0123456789', 'test@gmail.com', '$2y$10$GopENx2dYBBKqR8o4iaSc.CSd5Duay9pHnno88A1D25.S9F2BJixG', 1, b'0', NULL, NULL, NULL, '2021-12-07 12:55:35', '2021-12-14 13:29:09'),
(88, 'Nguyễn Văn Khánh', '2021-12-17', 1, NULL, '0364070443', 'nguyenvankhanh123@gmail.com', NULL, 2, b'0', NULL, 'Nguyễn Văn Khánh là cựu sinh viên khoa tiếng Hàn Quốc, Trường đại học Hà Nội. Hiện anh là giáo viên tiếng Hàn và là giám đốc trung tâm “Tiếng Hàn bá đạo thầy Khánh” ở Mỹ Đình, Hà Nội.\r\n', NULL, '2021-12-17 17:20:31', '2021-12-18 00:21:24'),
(89, 'Nguyễn Vy Thảo Trang', '2021-12-17', 0, NULL, '0364050805', 'nguyenvythaotrang123@gmail.com', NULL, 2, b'0', NULL, 'Thạc sĩ chuyên ngành Giáo dục tiếng Hàn bằng ngôn ngữ nước ngoài, đại học Dongguk (Seoul), có kinh nghiệm giảng dạy phong phú tại các trung tâm tiếng Hàn.', NULL, '2021-12-17 17:24:57', '2021-12-18 00:24:57'),
(90, ' Châu Thùy Trang', '2021-12-17', 0, NULL, '0364050202', 'chauthuytrang123@gmail.com', NULL, 2, b'0', NULL, 'Hiện đang công tác giảng dạy tiếng Việt và tiếng Hàn cho đối tượng người Hàn và người Việt, kinh nghiệm dạy học đã được 6 năm dạy song ngữ tiếng Hàn và tiếng Việt.', NULL, '2021-12-17 17:27:47', '2021-12-18 00:27:47'),
(91, ' Kim Min Su', '2021-12-17', 1, NULL, '0364050201', 'kimminsu123@gmail.com', NULL, 2, b'0', NULL, 'Kim Min Su là Giảng dạy tiếng Hàn doanh nghiệp BNI 2 năm tại Việt Nam, đồng tác giả giáo trình BIGMAXX (Gồm 6 hệ giáo trình đã được bảo hộ bản quyền và giấy phép xuất bản). ', NULL, '2021-12-17 17:56:48', '2021-12-18 00:56:48'),
(92, 'Nguyễn Thị Trang (Trang Korean)', '2021-12-17', 0, NULL, '0364050204', 'trangkorea123@gmail.com', NULL, 2, b'0', NULL, 'Tốt nghiệp cử nhân loại giỏi, Trường Đại học ngoại ngữ, Đại học quốc gia hà nội, có nhiều năm kinh nghiệm làm biên, phiên dịch tiếng Hàn cho các công ty và tập đoàn lớn của Hàn Quốc, tại Việt Nam cho đến nay.', NULL, '2021-12-17 18:04:36', '2021-12-18 01:04:36'),
(93, 'Nguyễn Thị Thùy Ngân', '2021-12-17', 0, NULL, '0364050206', 'nguyenthithuyngan123@gmail.com', NULL, 2, b'0', NULL, 'Thạc sĩ chuyên ngành Hàn Quốc học Trường Đại học Quốc gia Seoul, tiến sĩ chuyên ngành Hàn Quốc học Trường Đại học Ngoại ngữ Hàn Quốc, giáo viên tiếng Hàn trung tâm Hàn Quốc học Tổ chức di dân Hàn Quốc tại TP. Hồ Chí Minh', NULL, '2021-12-17 18:06:15', '2021-12-18 01:06:15'),
(94, 'Đỗ Ngọc Luyến', '2021-12-17', 0, NULL, '0364020402', 'dongocluyen123@gmail.com', NULL, 2, b'0', NULL, 'Đỗ Ngọc Luyến, giảng viên khoa tiếng Hàn của trường Đại học Khoa học Xã hội và Nhân văn Tp.HCM, giảng viên thỉnh giảng tại Đại học Yonsei, Hàn Quốc. Có gần 15 năm giảng dạy tiếng Hàn tại Việt Nam và Hàn Quốc.  ', NULL, '2021-12-17 18:07:06', '2021-12-18 01:07:06'),
(95, 'Phan Hồng Đạt', '2021-12-17', 1, NULL, '0364070405', 'phanhongdat123@gmail.com', NULL, 2, b'0', NULL, 'Thành lập và điều hành tại TTBCHINESE.COM, trực tiếp giảng tại channel Youtube \"TTB Chinese - Chuyên Tiếng Trung Giao Tiếp\".', NULL, '2021-12-17 18:18:16', '2021-12-18 01:18:16'),
(96, 'Hương Vy', '2021-12-17', 0, NULL, '0364050209', 'huongvy123@gmail.com', NULL, 2, b'0', NULL, 'Giảng viên Hương Vy - tốt nghiệp xuất sắc Đại học Ngoại Ngữ - ĐH Quốc gia Hà Nội.', NULL, '2021-12-17 18:23:46', '2021-12-18 01:23:46'),
(97, 'Nguyễn Danh Vân', '2021-12-17', 1, NULL, '0364050807', 'nguyendanhvan123@gmail.com', NULL, 2, b'0', NULL, 'Thạc sỹ tiếng Trung đã có trên 10 năm kinh nghiệm giảng dạy tại các trung một số trường đại học và các trung tâm tiếng trung lớn ở Hà Nội.', NULL, '2021-12-17 18:28:20', '2021-12-18 01:28:20'),
(98, 'EZ Language', '2021-12-17', 1, NULL, '0364050806', 'ezlanguage123@gmail.com', NULL, 2, b'0', NULL, 'Với 7 năm kinh nghiệm trong lĩnh vực giáo dục, EZ Language luôn có những đội ngũ nhân viên, giáo viên dày dặn kinh nghiệm để tạo ra những bài giảng hay nhất, tốt nhất.', NULL, '2021-12-17 18:46:31', '2021-12-18 01:46:31'),
(99, 'Ngô Trần Minh Thảo', '2021-12-17', 1, NULL, '0364050808', 'ngotranminhthao123@gmail.com', NULL, 2, b'0', NULL, 'Giảng viên Phòng Đào Tạo Quốc Tế, Đại Học Bách Khoa TP.HCM​​, Trưởng chương trình Kỹ sư Việt Nhật, Đại Học Bách Khoa, Đại Học Quốc Gia TP. Hồ Chí Minh.', NULL, '2021-12-17 18:59:32', '2021-12-18 01:59:32'),
(100, 'Thanh Trúc', '2021-12-17', 0, NULL, '0364050803', 'thanhtruc123@gmail.com', NULL, 2, b'0', NULL, 'Giảng viên Thanh Trúc tốt nghiệp trường Đại học Ngoại Ngữ Tin Học TP.HCM, chuyên ngành Nhật ngữ. Cô sở hữu bằng chứng chỉ về lớp văn hóa doanh nghiệp Nhật của Công ty Pasonatech chứng nhận. Kinh nghiệm 3 năm giảng dạy tại các Trung tâm ngoại ngữ, công ty, trường THPT…', NULL, '2021-12-17 19:11:54', '2021-12-18 02:11:54'),
(101, 'Trung tâm Nhật ngữ Toàn Tâm', '2021-12-17', 1, NULL, '0364070406', 'nhatngutoantam123@gmail.com', NULL, 2, b'0', NULL, 'Với những kinh nghiệm quý báu về du học chúng tôi muốn chia sẻ lại cho các bạn  “Một du học Nhật Bản” bằng những giá trị “Thực sự”: sang để học tập, học hỏi và giao lưu. Chúng tôi mong rằng những giá trị của việc du học có thể truyền đạt cho các thế hệ sau, để các bạn Việt Nam có thể rèn luyện cả về kiến thức, về ý trí và tìm được đam mê cho mỗi người. Đây cũng chính là sứ mệnh và nhiệm vụ của tôi cũng như những người cộng sự của Toàn Tâm đã chọn và đang hỗ trợ thực hiện', NULL, '2021-12-17 19:18:51', '2021-12-18 02:18:51'),
(102, ' Ngô Hương Lan', '2021-12-17', 0, NULL, '0364050801', 'ngohuonglan123@gmail.com', NULL, 2, b'0', NULL, 'Hơn ai hết, tiến sĩ Ngô Hương Lan hiểu rằng người Việt Nam gặp khó khăn gì khi học tiếng Nhật, cũng như những cách nào để học được tiếng Nhật một cách dễ dàng nhất. Giáo trình tiếng Nhật tại Học Nữa, do tiến sĩ Ngô Hương Lan biên soạn chính là giáo trình tiếng Nhật duy nhất dành riêng cho người Việt Nam.', NULL, '2021-12-17 19:26:42', '2021-12-18 02:26:42'),
(104, 'Vũ Thùy Hà', '2021-12-25', 0, NULL, '0364050234', 'dsad123@gmail.com', NULL, 2, b'0', NULL, 'Vũ Thùy hà trong hơn 7 năm nghiên cứu các phương pháp học tiếng Anh hàng đầu thế giới, đồng thời đúc kết kinh nghiệm từ thực tế học tiếng Anh của bản thân, Ms.Linh Vũ đã sáng tạo ra phương pháp học tiếng Anh mới, hiệu quả và phù hợp nhất với người Việt. Cô đã giúp đỡ hàng ngàn người từ không biết gì có thể giao tiếp thành thạo tiếng Anh trong thời gian vô cùng ngắn', NULL, '2021-12-25 07:29:05', '2021-12-25 14:29:05'),
(105, 'Phạm Văn Nam', '2021-12-27', 1, NULL, '0364070412', 'phamvannam123@gmail.com', NULL, 2, b'0', NULL, 'Trong 5 năm vừa qua tôi đã chia sẻ và giúp đỡ cho hàng 1000 người về các vấn đề Pháp Lý, Kinh Doanh, Đầu tư, Mua bán bất động sản, Đã giảng dạy và chia sẻ cho gần 10.000 học viên về kinh doanh và đầu tư bất động sản, Đào tạo cho các sàn giao dịch bất động sản trên toàn quốc', NULL, '2021-12-27 09:02:04', '2021-12-27 16:02:04'),
(106, 'Trung Phạm', '2021-12-27', 1, NULL, '0364050212', 'trungpham123@gmail.com', NULL, 2, b'0', NULL, 'Với vai trò doanh nhân: Anh có hơn 20 năm kinh nghiệm trực tiếp điều hành doanh nghiệp, hiện Anh đang sở hữu 03 doanh nghiệp thuộc các lĩnh vực \"Đào tạo kinh doanh; Đầu tư bất động sản và Đầu tư chứng khoán\".', NULL, '2021-12-27 09:02:04', '2021-12-27 16:03:16'),
(107, 'Nguyễn Thu Hương (Choé)', '2021-12-27', 0, NULL, '0364050124', 'nguyenthihuong123@gmail.com', NULL, 2, b'0', NULL, 'Hương Choé đã có hơn 4 năm kinh nghiệm làm việc với lĩnh vực ẩm thực, là food blogger được giải thưởng Influence-asia bình chọn trong top 15 người có ảnh hưởng trên cộng đồng mạng trong lĩnh vực food.', NULL, '2021-12-27 09:31:37', '2021-12-27 16:31:37'),
(108, 'Hoàng Hà', '2021-12-27', 1, NULL, '0364050824', 'hoangha123@gmail.com', NULL, 2, b'0', NULL, 'Tôi là Chuyên Gia Phong Thủy - Tử Vi - Kinh Dịch, Kiến Trúc Sư Hoàng Hà. Giám Đốc Công Ty TNHH Kiến Trúc Nhà Theo Phong Thủy AF.', NULL, '2021-12-27 09:46:28', '2021-12-27 16:46:28'),
(109, 'Chu Nhật Huy', '2021-12-27', 1, NULL, '0364050245', 'chunhathuy123@gmail.com', NULL, 2, b'0', NULL, 'Giảng viên là người có hơn 20 năm kinh nghiệm nghiên cứu tử vi, hiện đã có nhiều bài viết nghiên cứu về tử vi trên facebook Alex Alpha được cộng đồng mệnh lý đón nhận và ủng hộ.', NULL, '2021-12-27 09:52:45', '2021-12-27 16:52:45'),
(110, 'Học viện VIETSTEM', '2021-12-27', 1, NULL, '0364050814', 'vietstem123@gmail.com', NULL, 2, b'0', NULL, 'Học viện Vietstem dựa trên nền tảng giáo dục STEM của các đơn vị uy tín và nổi tiếng trên thế giới như viện công nghệ Massachusetts Hoa Kỳ (MIT) và Makeblock.', NULL, '2021-12-27 10:10:40', '2021-12-27 17:10:40'),
(111, 'Dương Tích Đạt', '2021-12-27', 1, NULL, '0364050813', 'duongtichdat123@gmail.com', NULL, 2, b'0', NULL, 'Giảng viên Dương Tích Đạt - tốt nghiệp Thạc sĩ Khoa học máy tính tại Trường Đại học Công nghệ Thông tin - Đại học Quốc gia TP.HCM, có kinh nghiệm giảng dạy tại các trường: Trường Đại học Khoa học Tự nhiên TP. HCM, Trường Đại học Hoa Sen, Trường CĐ Nghề CNTT iSPACE.', NULL, '2021-12-27 10:17:27', '2021-12-27 17:17:27'),
(112, 'Vũ Quốc Tuấn', '2021-12-27', 1, NULL, '0364020306', 'vuquoctuan123@gmail.com', NULL, 2, b'0', NULL, 'Giảng viên Vũ Quốc Tuấn hiện là Founder trung tâm Quoctuan.info chuyên đào tạo lập trình di động Android , lập trình di động iOS và lập trình website PHP & MySQL chất lượng và uy tính nhất TP.HCM', NULL, '2021-12-27 10:18:18', '2021-12-27 17:18:18'),
(113, 'Trần Duy Thanh', '2021-12-27', 1, NULL, '0364050226', 'tranduythanh123@gmail.com', NULL, 2, b'0', NULL, 'Trình độ chuyên môn: Thạc sĩ khoa học máy tính tốt nghiệp đại học quốc gia TP.HCM, Đại học Công Nghệ Thông Tin', NULL, '2021-12-27 10:31:13', '2021-12-27 17:31:13'),
(114, 'Nguyễn Đức Việt', '2021-12-27', 1, NULL, '0364050232', 'nguyenducviet123@gmail.com', NULL, 2, b'0', NULL, 'Với 5 năm kinh nghiệm giảng dạy và làm việc trong lĩnh vực thiết kế web, anh đã đào tạo hàng nghìn học viên đã tốt nghiệp và làm việc trong lĩnh vực thiết kế, đặc biệt là thiết kế web chuyên nghiệp.', NULL, '2021-12-27 10:39:06', '2021-12-27 17:39:06'),
(201, 'vinh nguyễn', NULL, 1, '', '0899305132', 'vinhtk0209@gmail.com', '', 1, b'1', '', NULL, NULL, '2021-12-31 07:06:43', '2022-01-08 08:41:36'),
(202, 'Khánh Nguyễn', NULL, NULL, 'https://graph.facebook.com/v3.3/665249907974177/picture?type=normal', '', 'khanhsktt1hktt1@gmail.com', '', 1, b'1', NULL, NULL, NULL, '2022-01-01 11:21:13', '2022-01-01 18:21:13'),
(206, 'nguyenquangvinh', NULL, NULL, NULL, '0899305132', 'khanhnguyentk6@gmail.com', '$2y$10$ZNAk7wlSrW5gznZPn7FmWu6JsacXajfXoKMIa975JvvfN5Ou2wyF2', 1, b'1', NULL, NULL, NULL, '2022-01-07 10:45:31', '2022-01-07 17:45:51'),
(209, 'nguoikiemduyet', '2021-12-09', 1, NULL, '0123456789', 'nkd@gmail.com', '$2y$10$GopENx2dYBBKqR8o4iaSc.CSd5Duay9pHnno88A1D25.S9F2BJixG', 4, b'0', NULL, NULL, NULL, '2021-12-07 12:55:35', '2022-05-05 14:09:44'),
(211, 'Luan25092000', NULL, NULL, NULL, '0123456789', 'nguyenhuuluan17@gmail.com', '$2y$10$xEC8KAnFV1eLlELGApChOuX2FxUodYsj1ceJg/gbptL15R.5ohov2', 1, b'1', 'c6rxnQbuAEviMz6XwePu', NULL, NULL, '2022-05-05 07:54:51', '2022-05-05 14:55:39');

-- --------------------------------------------------------

--
-- Table structure for table `youtube_access_tokens`
--

CREATE TABLE `youtube_access_tokens` (
  `id` int(10) UNSIGNED NOT NULL,
  `access_token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `youtube_access_tokens`
--

INSERT INTO `youtube_access_tokens` (`id`, `access_token`, `created_at`) VALUES
(1, '{\"access_token\":\"ya29.a0ARrdaM9y7gMFY5zbkoKqg_JyE5dtC174P3AnL89DIwEjf8T4EMJyXwlEHD-d0fpU9cKx3RS312E6r0kAMOr_5IiJZNtQFr67ZHWPPCMthX7GqO-DBS3dc-Q3VJeKkmGny6osxm7T7O5UzlgyQOAlUCaWTQTR\",\"expires_in\":3599,\"refresh_token\":\"1\\/\\/0ggG6plC103iCCgYIARAAGBASNwF-L9IrOHwuaeRupzhC8hIzBoQFLKZh8B8p9si3yqOqFgvF9xczcNNUMEb3JmxJZ5RVZNLyJLY\",\"scope\":\"https:\\/\\/www.googleapis.com\\/auth\\/youtube https:\\/\\/www.googleapis.com\\/auth\\/youtube.upload https:\\/\\/www.googleapis.com\\/auth\\/youtube.readonly\",\"token_type\":\"Bearer\",\"created\":1641389516}', '2022-01-05 06:31:56'),
(2, '{\"access_token\":\"ya29.a0ARrdaM8Uukb3WNf6Pq-ael0ge3R2HtFpPBUCxUyHTSWvx43JZ5xTLb_NIx5xg6F_81PMk2Rxu4rEABe_YMU6qWDx2m9nnnLC153-dyBY-iEIWtBx6Ru4WLVt7GuViglRHU17Pea50J3UsfWwtYfrFMQcxAxt\",\"expires_in\":3599,\"scope\":\"https:\\/\\/www.googleapis.com\\/auth\\/youtube.readonly https:\\/\\/www.googleapis.com\\/auth\\/youtube https:\\/\\/www.googleapis.com\\/auth\\/youtube.upload\",\"token_type\":\"Bearer\",\"created\":1641393316,\"refresh_token\":\"1\\/\\/0ggG6plC103iCCgYIARAAGBASNwF-L9IrOHwuaeRupzhC8hIzBoQFLKZh8B8p9si3yqOqFgvF9xczcNNUMEb3JmxJZ5RVZNLyJLY\"}', '2022-01-05 07:35:16'),
(3, '{\"access_token\":\"ya29.a0ARrdaM_36S8-g7dV3FcBDNg7yHDcdCkqqruDUPbAtvlJq8lvEXp64rO9Z7UYMVNLALlzjFwWP-wE-yMrX867l3TRsApDL4mX6wrAdVushviAOfCNHPAKjahsmHPHkPOdrvFURRr9Fw6BXvfrW_6Nzv1jGnpK\",\"expires_in\":3599,\"scope\":\"https:\\/\\/www.googleapis.com\\/auth\\/youtube.readonly https:\\/\\/www.googleapis.com\\/auth\\/youtube https:\\/\\/www.googleapis.com\\/auth\\/youtube.upload\",\"token_type\":\"Bearer\",\"created\":1641397304,\"refresh_token\":\"1\\/\\/0ggG6plC103iCCgYIARAAGBASNwF-L9IrOHwuaeRupzhC8hIzBoQFLKZh8B8p9si3yqOqFgvF9xczcNNUMEb3JmxJZ5RVZNLyJLY\"}', '2022-01-05 08:41:44'),
(4, '{\"access_token\":\"ya29.a0ARrdaM-ET8-AV9208HT5GA0KiKz-28CQnmkbsFHsg-LcD6xNCwfUz5I-DJCnja7qkqcYDHqfk1kvv1Hgr9E0UnvnIKeDC08S2Q1GyBuzFQL1RB-pbsW7S00Jsuz_-EP6f_dZvzY4A1Mpnwj0xGH_mO3x7y_c\",\"expires_in\":3599,\"refresh_token\":\"1\\/\\/0grTgFIHeWXbgCgYIARAAGBASNwF-L9Irvk4efcVnT4BCD4b8asfeJe-DJzAlzm5Vt2T9Cb1N5tP1Qbq8ytTVzZ3jsr0MFc9iJ4E\",\"scope\":\"https:\\/\\/www.googleapis.com\\/auth\\/youtube https:\\/\\/www.googleapis.com\\/auth\\/youtube.readonly https:\\/\\/www.googleapis.com\\/auth\\/youtube.upload\",\"token_type\":\"Bearer\",\"created\":1641443170}', '2022-01-05 21:26:10'),
(5, '{\"access_token\":\"ya29.a0ARrdaM9eurn2F767XIxM4nAFHEbnK70M2-K-9uLkFPJ7CIkZf1HUAnLJr2YQBtJ9XtUlMPrYsn_rSh1ZS4qUtEjqPStmvCRdHEyvbrLSNejHlXXCvTbwTeEaD8a7sg07r2NYcICK-rn8Z83vGwLCddVOirnw\",\"expires_in\":3599,\"refresh_token\":\"1\\/\\/0glwwuHD4PCJCCgYIARAAGBASNwF-L9IrMDn0EQK-W3Q2x-Lxbee9TyFUjChTv5Qu-ynm1r69JJU8Yu2BLNElkERMAfprW4hImEc\",\"scope\":\"https:\\/\\/www.googleapis.com\\/auth\\/youtube.upload https:\\/\\/www.googleapis.com\\/auth\\/youtube.readonly https:\\/\\/www.googleapis.com\\/auth\\/youtube\",\"token_type\":\"Bearer\",\"created\":1641443359}', '2022-01-05 21:29:19'),
(6, '{\"access_token\":\"ya29.a0ARrdaM_l9FtfZilD-oywOVSnN71Mll97QyLH5MhspHKs1ZT8KMHHelH56VG9fIEeBQP6AGYKRI5aA0TPkMKCIywg7CIuJNH_ntBhdbvlZQSC1Wo5WOVv4dwFOgUu74YF12cViEUGGhCyIg0GfrlKwdxLY-Qi\",\"expires_in\":3599,\"refresh_token\":\"1\\/\\/0g3cxXtITMvlBCgYIARAAGBASNwF-L9IryiNLeBfrE6K3QdfxVfpm1mU2ViconA8bueF_-WzkGYhSHEm3roBnwtnymi6Z5gFHFgg\",\"scope\":\"https:\\/\\/www.googleapis.com\\/auth\\/youtube.upload https:\\/\\/www.googleapis.com\\/auth\\/youtube.readonly https:\\/\\/www.googleapis.com\\/auth\\/youtube\",\"token_type\":\"Bearer\",\"created\":1641443831}', '2022-01-05 21:37:11'),
(7, '{\"access_token\":\"ya29.a0ARrdaM85CRDACFNMq5iClXX_StyGlMShjnIiBD2GWvGsAcGWhT2lxXGvicyLAwuqcxYFsoy_Q3Crn0T_c_-Jzgsy_5j8R_GbjNU2iwVciuuTMkgfRy4ezF1KVZCNNqq3FFBXV7e0d3shWZ7fxc3-8e9c4ghh\",\"expires_in\":3599,\"refresh_token\":\"1\\/\\/0gNh_wrKWBt3iCgYIARAAGBASNwF-L9Ir-_OZtU1k3lqB-aL5f0ns5BOXWOAC3uWo1jqA317W8BtaiP-Igo-NZNzhdjzZkv7Uov0\",\"scope\":\"https:\\/\\/www.googleapis.com\\/auth\\/youtube.readonly https:\\/\\/www.googleapis.com\\/auth\\/youtube https:\\/\\/www.googleapis.com\\/auth\\/youtube.upload\",\"token_type\":\"Bearer\",\"created\":1641444471}', '2022-01-05 21:47:51'),
(8, '{\"access_token\":\"ya29.a0ARrdaM9Wkx8Az9r9f-Oh_x3O4D-os-30S6MwgVsRQ26sAy7cN21ZiXIjDwbiMj3XNPCaG1B3KTPM32fLec3wBLG24-R-XpRHe5DmrRVUO-M3nFK75wkLm-mqhHX39xhfVbOtjcaLjUX-mxGg68ZPl1tH8_J9\",\"expires_in\":3599,\"refresh_token\":\"1\\/\\/0gO-FCF3SeNzKCgYIARAAGBASNwF-L9IrV8o5DS34FMEEXY6OZ0Cc7Xu9Ni1zuyZkhB5rAxJCU2kVHxnQ2oBgoiCAiitWVFhdDoc\",\"scope\":\"https:\\/\\/www.googleapis.com\\/auth\\/youtube.upload https:\\/\\/www.googleapis.com\\/auth\\/youtube.readonly https:\\/\\/www.googleapis.com\\/auth\\/youtube\",\"token_type\":\"Bearer\",\"created\":1641444837}', '2022-01-05 21:53:57'),
(9, '{\"access_token\":\"ya29.A0ARrdaM-viCMxzdvPPO4Mo-S9-_c9QgLsksn5BLuN0ItAZeh_lXcjF21evutwipiGHc6IjtZ93-sTAiR77dUkNVa_DFfsq-SXHukI_LIM9yQQf2BMkWUYNKqIzwIgLVqn4NtXFt5cTazhU-5TwV_B837i9a0a\",\"expires_in\":3599,\"refresh_token\":\"1\\/\\/0gYJtsx9BRW-8CgYIARAAGBASNwF-L9IrE-lsxrcNDcRvTs3DyQLLj6m7e-aLLPzoT-7EIpcjnaB6MLxeZslRktS4YRa4RntAvvg\",\"scope\":\"https:\\/\\/www.googleapis.com\\/auth\\/youtube.upload https:\\/\\/www.googleapis.com\\/auth\\/youtube.readonly https:\\/\\/www.googleapis.com\\/auth\\/youtube\",\"token_type\":\"Bearer\",\"created\":1641444879}', '2022-01-05 21:54:39'),
(10, '{\"access_token\":\"ya29.a0ARrdaM_s7TV1rjSx51WAuqoUqU_HTitzMBIYL_GVHh5jyjFR3LgvuLvE1o42h4GXIrY4yfZKg-iBEbKA0mGu5IdLIQXvvnatDD-yQWxNnQtdSVGnbEm_sNhpsPxCFYtWd04JW0xOOgcJo52ZkBHi8koPq-D6\",\"expires_in\":3599,\"refresh_token\":\"1\\/\\/0gyB6DRUGq9IPCgYIARAAGBASNwF-L9IrPjs49t-9DqMX8SKscQJXrot45oVl3Wz-y07HJDWNjsVnXyP-9pjsjUumzPULOxa-1Hg\",\"scope\":\"https:\\/\\/www.googleapis.com\\/auth\\/youtube.upload https:\\/\\/www.googleapis.com\\/auth\\/youtube.readonly https:\\/\\/www.googleapis.com\\/auth\\/youtube\",\"token_type\":\"Bearer\",\"created\":1641545801}', '2022-01-07 01:56:41'),
(11, '{\"access_token\":\"ya29.a0ARrdaM8fElCiCf6kf-0H7loAiwmxSLS4JtZWgAOHUmTG8nmx70qWDHCqSgJdLLMJ3IoMLZMc8YsEiac93OsL8j2T52Odhl6e7DLyOsvSvBs4DUNI614jRY5li620_X-23FccFoPbugIRQZp4pS3goYBq8sq3tQ\",\"expires_in\":3599,\"scope\":\"https:\\/\\/www.googleapis.com\\/auth\\/youtube.upload https:\\/\\/www.googleapis.com\\/auth\\/youtube.readonly https:\\/\\/www.googleapis.com\\/auth\\/youtube\",\"token_type\":\"Bearer\",\"created\":1641571769,\"refresh_token\":\"1\\/\\/0gyB6DRUGq9IPCgYIARAAGBASNwF-L9IrPjs49t-9DqMX8SKscQJXrot45oVl3Wz-y07HJDWNjsVnXyP-9pjsjUumzPULOxa-1Hg\"}', '2022-01-07 16:09:29'),
(12, '{\"access_token\":\"ya29.a0ARrdaM9Bq8CMgX-xIzXLi9xtBehOX-IX62HsKUpEDBvGn9QB5nSIl4W9iI7QvBPtC5FlCckxrs4xOC2yQElBvEcdcxB0v05COh7IyjG-Kpc31azsbBT_upNabqjaMBaPKSr-xQ2eFFMln_p20-O0jJmne11L\",\"expires_in\":3599,\"refresh_token\":\"1\\/\\/0gyeSMTFGu_o7CgYIARAAGBASNwF-L9IrzmU_OEX9JvDywu3lTqgz5ciydUSfe2MEb9GMx9VYNyP0DHHGPzbEuwH_V_d7_Edyzxo\",\"scope\":\"https:\\/\\/www.googleapis.com\\/auth\\/youtube.upload https:\\/\\/www.googleapis.com\\/auth\\/youtube.readonly https:\\/\\/www.googleapis.com\\/auth\\/youtube\",\"token_type\":\"Bearer\",\"created\":1641594980}', '2022-01-07 22:36:20'),
(13, '{\"access_token\":\"ya29.a0ARrdaM-ZprAqQw8rs6GIsfwoMSus3i8GCq766K2NSWW4P7D2g1lqWdWhcEEoX9UMQvSwQZV0ywofr47gTCliyawagYYonrLuCXkVftiT6C6R_TM-l0HBDfQefTBlLJQLLIwgtz4oSK9zEKCQcwhgCEBHvjAZ\",\"expires_in\":3599,\"refresh_token\":\"1\\/\\/0g99FcpzCw_rHCgYIARAAGBASNwF-L9IrwuwtKolOstrONZRLHUP3mhbDimjPd1x30GWAKOEv3pFPyBIIK1zHR9ojUmpReRSLg_4\",\"scope\":\"https:\\/\\/www.googleapis.com\\/auth\\/youtube.upload https:\\/\\/www.googleapis.com\\/auth\\/youtube.readonly https:\\/\\/www.googleapis.com\\/auth\\/youtube\",\"token_type\":\"Bearer\",\"created\":1641597671}', '2022-01-07 23:21:11'),
(14, '{\"access_token\":\"ya29.a0ARrdaM-JTibnUvETgu_aCijd37S2M00Ft3YuBz2y8tzN4gcM3NOtI0Oxd2hBlR_9C773Eo0WtAOS-1PKdIlEvup08TLNcv1GWOGoS16Yu70NbC3lIVJb4XJe9KTlszCWXxZp7gxTcbkwSFmG-vgB1o8quKl1\",\"expires_in\":3599,\"scope\":\"https:\\/\\/www.googleapis.com\\/auth\\/youtube https:\\/\\/www.googleapis.com\\/auth\\/youtube.readonly https:\\/\\/www.googleapis.com\\/auth\\/youtube.upload\",\"token_type\":\"Bearer\",\"created\":1641603679,\"refresh_token\":\"1\\/\\/0g99FcpzCw_rHCgYIARAAGBASNwF-L9IrwuwtKolOstrONZRLHUP3mhbDimjPd1x30GWAKOEv3pFPyBIIK1zHR9ojUmpReRSLg_4\"}', '2022-01-08 01:01:19'),
(15, '{\"access_token\":\"ya29.a0ARrdaM_Wt6AOWaGKCVG4UjY1RZ56351_J-Za_q67pANfi68vBAb-BIJEbd_AwmsLd6Qo4RwNGNXX1UsA-6djngKVvlWUGo1KhLtkpommWBsTAMAqmPeX-K8D-l7KSw9J_Q1LsS57C9-Hi1vZZTStRcstJS90\",\"expires_in\":3599,\"refresh_token\":\"1\\/\\/0gx7-rqyzp8SmCgYIARAAGBASNwF-L9IrW0a3yY4NmEGC-WPeV4PqS6IWM1A89P4FxBQFXEpa7t6lTRO3ykNGr78TA6dCqqXLkj4\",\"scope\":\"https:\\/\\/www.googleapis.com\\/auth\\/youtube https:\\/\\/www.googleapis.com\\/auth\\/youtube.readonly https:\\/\\/www.googleapis.com\\/auth\\/youtube.upload\",\"token_type\":\"Bearer\",\"created\":1641603732}', '2022-01-08 01:02:12'),
(16, '{\"access_token\":\"ya29.a0ARrdaM8BQJYdOYyyBnDpDvQnsWbcUusBSXIMXYa2hnBeuf4JYdnFH3MdX9VyuvQ_-dbi-TsV8rHx2rnpVIZ6fU6wWTUs7u-VPM2P1uGgT1ugP2LCvcgTYkQxKm3DyEVp1BoyVM1DsSyNEpTtalPdM2oaXvzY\",\"expires_in\":3599,\"refresh_token\":\"1\\/\\/0g5fSUX8cQVZfCgYIARAAGBASNwF-L9Ir7cNIq4_bV27e72d_lH8SCEPMTiRTWrKWdfgYWBwLA0YBoLzXv1sI-_V626WMrEcNNLk\",\"scope\":\"https:\\/\\/www.googleapis.com\\/auth\\/youtube https:\\/\\/www.googleapis.com\\/auth\\/youtube.upload https:\\/\\/www.googleapis.com\\/auth\\/youtube.readonly\",\"token_type\":\"Bearer\",\"created\":1641604442}', '2022-01-08 01:14:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baihoc`
--
ALTER TABLE `baihoc`
  ADD PRIMARY KEY (`MABH`),
  ADD KEY `FK_BAIHOC_KHOAHOC1` (`MACHUONG`);

--
-- Indexes for table `bailam`
--
ALTER TABLE `bailam`
  ADD PRIMARY KEY (`MABL`),
  ADD KEY `FK_BAILAM_BAITHI` (`MABT`),
  ADD KEY `FK_BAILAM_TAIKHOAN` (`MAHV`);

--
-- Indexes for table `baithi`
--
ALTER TABLE `baithi`
  ADD PRIMARY KEY (`MABT`),
  ADD KEY `FK_BAITHI_TAIKHOAN` (`MAGV`);

--
-- Indexes for table `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD PRIMARY KEY (`MACH`),
  ADD KEY `FK_CAUHOI_TAIKHOAN` (`MAGV`),
  ADD KEY `FK_CAUHOI_DANHMUC` (`MADM`);

--
-- Indexes for table `chungchi`
--
ALTER TABLE `chungchi`
  ADD PRIMARY KEY (`MACHUNGCHI`),
  ADD KEY `FK_CHUNGCHI_TAIKHOAN` (`MAGV`);

--
-- Indexes for table `chuonghoc`
--
ALTER TABLE `chuonghoc`
  ADD PRIMARY KEY (`MACHUONG`),
  ADD KEY `FK_CHUONGHOC_KHOAHOC` (`MAKH`);

--
-- Indexes for table `ctbailam`
--
ALTER TABLE `ctbailam`
  ADD PRIMARY KEY (`MACT`),
  ADD KEY `FK_CTBAILAM_BAILAM` (`MABL`);

--
-- Indexes for table `ctbaithi`
--
ALTER TABLE `ctbaithi`
  ADD KEY `FK_CTBAITHI_CAUHOI` (`MACH`),
  ADD KEY `FK_CTBAITHI_BAITHI` (`MABT`);

--
-- Indexes for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD KEY `FK_CTHOADON_KHOAHOC` (`MAKH`),
  ADD KEY `FK_CTHOADON_HOADON` (`MAHD`),
  ADD KEY `FK_CTHOADON_LOPHOC` (`MALH`);

--
-- Indexes for table `ctkhuyenmai`
--
ALTER TABLE `ctkhuyenmai`
  ADD KEY `FK_CTKHUYENMAI_KHUYENMAI` (`MAKM`),
  ADD KEY `FK_CTKHUYENMAI_KHOAHOC` (`MAKH`);

--
-- Indexes for table `ctlophoc`
--
ALTER TABLE `ctlophoc`
  ADD KEY `FK_CTLOPHOC_TAIKHOAN` (`MAHV`),
  ADD KEY `FK_CTLOPHOC_LOPHOC` (`MALH`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD KEY `FK_DANHGIA_TAIKHOAN` (`MAHV`),
  ADD KEY `FK_DANHGIA_KHOAHOC` (`MAKH`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MADM`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MAHD`),
  ADD KEY `FK_HOADON_TAIKHOAN` (`MAHV`);

--
-- Indexes for table `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`MAKH`),
  ADD KEY `FK_KHOAHOC_TAIKHOAN` (`MAGV`),
  ADD KEY `FK_KHOAHOC_DANHMUC` (`MADM`);

--
-- Indexes for table `khoahoc_baihoc`
--
ALTER TABLE `khoahoc_baihoc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `khoahoc_baihoc_ibfk_1` (`MAKH`),
  ADD KEY `khoahoc_baihoc_ibfk_2` (`MABH`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MAKM`),
  ADD KEY `FK_KHUYENMAI_TTKHUYENMAI` (`MATT`);

--
-- Indexes for table `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`MALH`),
  ADD KEY `FK_LOPHOC_KHOAHOC` (`MAKH`);

--
-- Indexes for table `lophoc_baihoc`
--
ALTER TABLE `lophoc_baihoc`
  ADD KEY `FK_LOPHOC_BAIHOC_LOPHOC` (`MALH`),
  ADD KEY `FK_LOPHOC_BAIHOC_BAIHOC` (`MABH`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`USER-ID`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_TAIKHOAN_QUYEN` (`LOAITK`),
  ADD KEY `FK_TAIKHOAN_CHUNGCHI` (`MACHUNGCHI`);

--
-- Indexes for table `youtube_access_tokens`
--
ALTER TABLE `youtube_access_tokens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baihoc`
--
ALTER TABLE `baihoc`
  MODIFY `MABH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=387;

--
-- AUTO_INCREMENT for table `bailam`
--
ALTER TABLE `bailam`
  MODIFY `MABL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `cauhoi`
--
ALTER TABLE `cauhoi`
  MODIFY `MACH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `chungchi`
--
ALTER TABLE `chungchi`
  MODIFY `MACHUNGCHI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chuonghoc`
--
ALTER TABLE `chuonghoc`
  MODIFY `MACHUONG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `ctbailam`
--
ALTER TABLE `ctbailam`
  MODIFY `MACT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `MADM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MAHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `khoahoc`
--
ALTER TABLE `khoahoc`
  MODIFY `MAKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `khoahoc_baihoc`
--
ALTER TABLE `khoahoc_baihoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MAKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lophoc`
--
ALTER TABLE `lophoc`
  MODIFY `MALH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `USER-ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `youtube_access_tokens`
--
ALTER TABLE `youtube_access_tokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baihoc`
--
ALTER TABLE `baihoc`
  ADD CONSTRAINT `FK_BAIHOC_CHUONGHOC` FOREIGN KEY (`MACHUONG`) REFERENCES `chuonghoc` (`MACHUONG`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bailam`
--
ALTER TABLE `bailam`
  ADD CONSTRAINT `FK_BAILAM_BAITHI` FOREIGN KEY (`MABT`) REFERENCES `baithi` (`MABT`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_BAILAM_TAIKHOAN` FOREIGN KEY (`MAHV`) REFERENCES `taikhoan` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `baithi`
--
ALTER TABLE `baithi`
  ADD CONSTRAINT `FK_BAITHI_TAIKHOAN` FOREIGN KEY (`MAGV`) REFERENCES `taikhoan` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD CONSTRAINT `FK_CAUHOI_DANHMUC` FOREIGN KEY (`MADM`) REFERENCES `danhmuc` (`MADM`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CAUHOI_TAIKHOAN` FOREIGN KEY (`MAGV`) REFERENCES `taikhoan` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chungchi`
--
ALTER TABLE `chungchi`
  ADD CONSTRAINT `FK_CHUNGCHI_TAIKHOAN` FOREIGN KEY (`MAGV`) REFERENCES `taikhoan` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chuonghoc`
--
ALTER TABLE `chuonghoc`
  ADD CONSTRAINT `FK_CHUONGHOC_KHOAHOC` FOREIGN KEY (`MAKH`) REFERENCES `khoahoc` (`MAKH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ctbailam`
--
ALTER TABLE `ctbailam`
  ADD CONSTRAINT `FK_CTBAILAM_BAILAM` FOREIGN KEY (`MABL`) REFERENCES `bailam` (`MABL`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ctbaithi`
--
ALTER TABLE `ctbaithi`
  ADD CONSTRAINT `FK_CTBAITHI_BAITHI` FOREIGN KEY (`MABT`) REFERENCES `baithi` (`MABT`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CTBAITHI_CAUHOI` FOREIGN KEY (`MACH`) REFERENCES `cauhoi` (`MACH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD CONSTRAINT `FK_CTHOADON_HOADON` FOREIGN KEY (`MAHD`) REFERENCES `hoadon` (`MAHD`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CTHOADON_KHOAHOC` FOREIGN KEY (`MAKH`) REFERENCES `khoahoc` (`MAKH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ctkhuyenmai`
--
ALTER TABLE `ctkhuyenmai`
  ADD CONSTRAINT `FK_CTKHUYENMAI_KHOAHOC` FOREIGN KEY (`MAKH`) REFERENCES `khoahoc` (`MAKH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CTKHUYENMAI_KHUYENMAI` FOREIGN KEY (`MAKM`) REFERENCES `khuyenmai` (`MAKM`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ctlophoc`
--
ALTER TABLE `ctlophoc`
  ADD CONSTRAINT `FK_CTLOPHOC_LOPHOC` FOREIGN KEY (`MALH`) REFERENCES `lophoc` (`MALH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CTLOPHOC_TAIKHOAN` FOREIGN KEY (`MAHV`) REFERENCES `taikhoan` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `FK_DANHGIA_KHOAHOC` FOREIGN KEY (`MAKH`) REFERENCES `khoahoc` (`MAKH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_DANHGIA_TAIKHOAN` FOREIGN KEY (`MAHV`) REFERENCES `taikhoan` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `FK_HOADON_TAIKHOAN` FOREIGN KEY (`MAHV`) REFERENCES `taikhoan` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD CONSTRAINT `FK_KHOAHOC_DANHMUC` FOREIGN KEY (`MADM`) REFERENCES `danhmuc` (`MADM`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_KHOAHOC_TAIKHOAN` FOREIGN KEY (`MAGV`) REFERENCES `taikhoan` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `khoahoc_baihoc`
--
ALTER TABLE `khoahoc_baihoc`
  ADD CONSTRAINT `khoahoc_baihoc_ibfk_1` FOREIGN KEY (`MAKH`) REFERENCES `khoahoc` (`MAKH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `khoahoc_baihoc_ibfk_2` FOREIGN KEY (`MABH`) REFERENCES `baihoc` (`MABH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lophoc`
--
ALTER TABLE `lophoc`
  ADD CONSTRAINT `FK_LOPHOC_KHOAHOC` FOREIGN KEY (`MAKH`) REFERENCES `khoahoc` (`MAKH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lophoc_baihoc`
--
ALTER TABLE `lophoc_baihoc`
  ADD CONSTRAINT `FK_LOPHOC_BAIHOC_BAIHOC` FOREIGN KEY (`MABH`) REFERENCES `baihoc` (`MABH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_LOPHOC_BAIHOC_LOPHOC` FOREIGN KEY (`MALH`) REFERENCES `lophoc` (`MALH`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

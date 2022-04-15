-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2021 at 05:26 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

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
  `VIDEO` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HOCTHU` bit(1) DEFAULT NULL,
  `MABT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bailam`
--

CREATE TABLE `bailam` (
  `MABL` int(11) NOT NULL,
  `MAHV` int(11) DEFAULT NULL,
  `MABT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `baithi`
--

CREATE TABLE `baithi` (
  `MABT` int(11) NOT NULL,
  `TENBT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TGBD` datetime DEFAULT NULL,
  `TGKT` datetime DEFAULT NULL,
  `MAGV` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `chuonghoc`
--

CREATE TABLE `chuonghoc` (
  `MACHUONG` int(11) NOT NULL,
  `TENCHUONG` text NOT NULL,
  `MAKH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `ctbaithi`
--

CREATE TABLE `ctbaithi` (
  `MABT` int(11) NOT NULL,
  `MACH` int(11) NOT NULL,
  `DIEM` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon`
--

CREATE TABLE `cthoadon` (
  `MAHD` int(11) NOT NULL,
  `MAKH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cthoadon`
--

INSERT INTO `cthoadon` (`MAHD`, `MAKH`) VALUES
(5, 50),
(5, 45),
(6, 47);

-- --------------------------------------------------------

--
-- Table structure for table `ctkhuyenmai`
--

CREATE TABLE `ctkhuyenmai` (
  `MAKH` int(11) NOT NULL,
  `MAKM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ctlophoc`
--

CREATE TABLE `ctlophoc` (
  `MALH` int(11) NOT NULL,
  `MAHV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(1, 'Ngoại ngữ', NULL, NULL, 1, 0, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(2, 'Đời sống', '', '', 1, 0, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(3, 'Thiết kế đồ họa', '', '', 1, 7, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(4, 'Ứng dụng phần mềm', '', '', 1, 7, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(5, 'Kinh doanh và khởi nghiệp', NULL, NULL, 1, 0, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(6, 'Lập trình', NULL, NULL, 1, 7, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(7, 'Công nghệ thông tin', NULL, NULL, 1, 0, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(8, 'Tiếng Hàn', '', '', 1, 1, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(9, 'Tiếng anh', NULL, NULL, 1, 1, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(11, 'tiếng trung', '', '', 1, 1, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(12, 'tiếng nhật', '', '', 1, 1, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(13, 'yoga', '', '', 1, 2, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(14, 'ẩm thực ', '', '', 1, 2, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(15, 'sức khỏe', '', '', 1, 2, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(16, 'nhiếp ảnh', '', '', 1, 2, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(17, 'Bất động sản', NULL, NULL, 1, 5, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(18, 'Kinh doanh Online', NULL, NULL, 1, 5, '2021-12-16 05:02:04', '2021-12-16 12:03:08'),
(36, 'Lập trình Python', NULL, NULL, 1, 7, '2021-12-17 09:21:22', '2021-12-17 16:21:22');

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
(5, 87, '2021-12-17 05:22:19'),
(6, 87, '2021-12-17 06:14:13');

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
(3, 'Học đệm hát Guitar cùng Haketu', 'topbanchay_1.jpg', 399999, 'Hãy đến với \"Học đệm hát cùng Haketu\" - Guitarist nổi tiếng Việt Nam, nhanh chóng làm chủ cây đàn guitar trong tay với kỹ thuật chơi guitar cực đỉnh, học guitar cơ bản đệm hát điêu luyện để cùng bạn bè người yêu nghêu ngao hòa mình vào âm nhạc', '- Hãy đến với khóa học âm nhạc \"Đệm hát Guitar cơ bản của Hà Kế Tú\" - một Guitarist - giảng viên Guitar nổi tiếng Việt Nam được nhắc đến với cái tên Haketu để làm chủ cây đàn Guitar trong tay và hát nghêu ngao cùng bạn bè, người yêu... chỉ trong một thời gian ngắn học guitar cơ bản đệm hát và thực hành.\r\nKhóa học có gì dành cho bạn?\r\nTrong khóa học, bạn sẽ biết các kiến thức cơ bản học guitar đệm hát trong Guitar để bạn có thể làm chủ một cách nhanh chóng cây đàn\r\n- Kiến thức nhạc lý cơ bản, đệm lý trong guitar đệm hát và một số hợp âm cơ bản cần nắm được\r\n- Mẹo chỉnh dây đàn guitar chuẩn và nhanh chóng\r\n- Được học guitar cơ bản đệm hát về các điệu: Valse, Boston, Slow Rock, Surf Ballad, Disco... thông qua 10+ bài tập thực hành chơi guitar các bài hát tiêu biểu.\r\n- Hoàn thiện kỹ năng chơi guitar một cách hoàn chỉnh thành thạo với 10+ bài đêm hát khác\r\n- Được định hướng phong cách chơi và định hướng con đường chuyên nghiệp cho người chơi guitar về sau.', 1, NULL, NULL),
(4, 'Tự do tài chính cùng chứng khoán', 'topbanchay_2.jpg', 350000, 'Khoá học đầu tư tài chính đến từ nhà đầu tư Đặng Trọng Khang \"Tự do tài chính cùng chứng khoán\" giúp bạn tránh được những rủi ro, cạm bẫy để tăng thu nhập nhờ chứng khoán.', '- Khóa học \"Tự do tài chính cùng chứng khoán\" của giảng viên Đặng Trọng Khang sẽ giúp bạn về các vấn đề cơ bản dành cho người mới bắt đầu, cung cấp tư duy đúng trong đầu tư chứng khoán, khóa học này mang đến một công thức kỳ diệu chinh phục thị trường chứng khoán. Và đặc biệt là bật mí bí quyết tạo thụ nhập thụ động, tự do tài chính từ đầu tư cổ phiếu. Đặc biệt trong khóa học đầu tư chứng khoán này sẽ chia sẻ những bí quyết tránh rủi ro hiệu quả nhất để tối thiểu thất thoát và thành công trong lĩnh vực đầu tư chứng khoán.\r\n- Thêm một điểm đặc biệt của khóa khóa học tự do tài chính cùng chứng khoán là mua một lần sở hữu trọn đời. Bạn có thể học mọi lúc, mọi nơi khi chỉ cần máy tính hoặc các thiết bị di động có kết nối Internet. Điều này giúp bạn chủ động hơn trong việc học, tiết kiệm thời gian, chi phí so với các hình thức học offline tại các trung tâm. \r\n- Còn vô vàn những điều bất ngờ có trong khóa học. Vậy bạn còn chần chừ gì mà không nhanh tay đăng ký tham gia khóa học Tự do tài chính cùng chứng khoán có tại Esto!', 2, NULL, NULL),
(5, 'Nhập môn chứng khoán', 'topbanchay_3.jpg', 399999, 'Khóa học chứng khoán online giúp bạn nắm bắt được kiến thức đầu tư chứng khoán đầy đủ, bài bản và chi tiết nhất dành cho người mới bắt đầu tham gia. Bí quyết để nhanh chóng có được nguồn lợi nhuận khổng lồ từ thị trường chứng khoán', '- Khóa học chứng khoán online đến từ chuyên gia Đặng Trọng Khang sẽ giúp bạn:\r\nCó được một cái nhìn tổng quan nhất về thị trường chứng khoán Việt Nam hiện nay, học chứng khoán cơ bản về tiềm năng lợi nhuận khổng lồ từ kênh thị trường này\r\n- Có được 7 tư duy đúng về đầu tư chứng khoán, củng cố những phẩm chất sáng suốt, tinh thần trách nhiệm, sự rõ ràng, tính khách quan và sự liều lĩnh cần thiết\r\n- Khoá học đầu tư chứng khoán giúp bạn nắm được 4 công cụ kiếm tiền tốt nhất ngày nay để bạn tự mình mở ra những cơ hội kiếm tiền mới\r\n- Những kỹ năng, bí quyết và mẹo để bạn xử lý những vấn đề thường gặp của nhà đầu tư hiện nay: cách đọc bảng giá, cách giao dịch, cách thanh toán giao dịch, cách nội tiền, cách rút tiền, cách khắc phục rủi ro thua lỗ...\r\n- Những định hướng đầu tư trong thời gian dài hạn, trung hạn dành cho bạn\r\nHãy tham gia ngay khóa học chứng khoán online \"Nhập môn chứng khoán\" để trở thành nhà đầu tư chứng khoán thông minh và giàu có !', 2, NULL, NULL),
(6, 'Thiết kế trình chiếu PowerPoint 2016 từ A-Z', 'topbanchay_4.jpg', 499999, 'Giúp bạn biết thiết kế âm thanh, video, hiệu ứng, hình 3D… ngay trên PowerPoint 2016 một cách chuyên nghiệp, đỉnh cao mà không cần biết Photoshop, giúp bạn có được những slide thuyết trình ấn tượng', '- Khóa học do giảng viên: Đỗ Trung Thành trực tiếp hướng dẫn và giảng dạy. Giờ đây bạn đã có thể tự thiết kế âm thanh, thiết kế video, thiết kế hiệu ứng, vẽ hình 3D… ngay trên PowerPoint.\r\n- Khóa học được xây dựng theo lộ trình từ cơ bản đến nâng cao sẽ giúp bạn làm chủ được phần mềm PowerPoint với phiên bản mới nhất hiện nay (Microsoft Office 2016)\r\n- Với quan điểm \"học đi đôi với hành\", Giảng viên cung cấp cho bạn nhiều ví dụ thực tế giúp bạn vừa học, vừa tự xây dựng được nội dung trình chiếu chuyên nghiệp, cuốn hút.\r\n- Kết thúc khóa học bạn sẽ làm được:\r\nLàm chủ hoàn toàn công cụ Powerpoint đầy đủ các cập nhật mới nhất đến từ Microsoft  \r\n- Khám phá những tính năng độc đáo và những kiến thức về thiết kế trình chiếu trong PowerPoint mà không phải ai cũng biết\r\n- Tư duy thẩm mĩ và kĩ năng thiết kế slide chuyên nghiệp\r\n-Tự tin thực hiện slide thuyết trình chỉ với G1/2 thời gian khi làm slide so với trước đó\r\n- Tự tin tạo nên một silde phác họa số liệu và trình bày ý tưởng một cách ấn tượng và thuyết phục \r\n- Tự tin Thiết kế CV, inforgraphic, video marketing... và còn nhiểu hơn thế!\r\n- Vậy còn chờ đợi gì nữa, tham gia khóa học \"Thiết kế trình chiếu PowerPoint 2016 từ A-Z\" ngay hôm nay tại Esto thôi nào!', 3, NULL, NULL),
(7, 'Quản trị cuộc đời - Đường đến thành công', 'topbanchay_5.jpg', 499000, 'Khóa học Quản trị cuộc đời định hướng đường đến mục tiêu thành công - Định hướng được đường đi đến mục tiêu thông qua việc kiểm soát, kết hợp, phân bổ hiệu quả nguồn lực của bạn', '- Với mong muốn chia sẻ kiến thức và kinh nghiệm sống thực tế tới tất cả mọi người, đặc biệt là với các bạn trẻ, TS.Lê Thẩm Dương sẽ giúp bạn giúp mọi người định vị lại chính mình và cuộc đời mình, biết trân trọng và yêu quý hơn những giá trị riêng có của bản thân để tự tin quản trị và sống cuộc đời của chính mình. Mỗi một cá thể là một thế giới riêng không ai có thể hiểu được bạn ngoài chính bản thân bạn, nhiệm vụ của chúng ta là khám phá nó và thành công, hạnh phúc đều khởi nguồn từ hành trình khám phá vô tận này. \r\n- Tham gia ngay khóa học \"Quản trị cuộc đời - Đường đến thành công\" của TS. Lê Thẩm Dương tại Esto. Đây là nơi để bạn khám phá được giá trị của bản thân và tìm kiếm con đường thành công cho chính mình. ', 4, NULL, NULL),
(8, 'Làm chủ giọng nói', 'topbanchay_6.jpg', 399999, 'Làm chủ giọng nói khóa học sẽ giúp bạn hiểu về giọng nói của mình, làm chủ giọng nói để có giọng nói hay truyền cảm hứng tạo thiện cảm thu hút người nghe', '- Giọng nói của mỗi người được hình thành từ khi sinh ra và giữ một vai trò vô cùng quan trọng trong việc nói lên tiềm năng của bản thân và khẳng định năng lực của người đó, đặc biệt với những công việc liên quan trực tiếp và sử dụng Giọng nói làm công cụ, phương tiện chính trong quá trình làm việc như Giảng viên, Giáo viên, Dịch vụ, Tư vấn và chăm sóc khách hàng, MC, đàm phán....\r\n- Trong môi trường làm việc ngày càng cạnh tranh hiện nay, giọng nói hay trở nên cần thiết hơn bao giờ hết, một giọng nói hay, trầm ấm, truyền cảm hứng sẽ tạo thiện cảm và sự cuốn hút tới người nghe, khiến người nghe chú ý và yêu mến.\r\n- Giọng nói hay sẽ mang lại nhiều cơ hội và thành công cho người sở hữu nó, cũng như mang lại nhiều niềm vui tới cho mình và những người xung quanh.\r\n- Việc quản lý giọng nói để nói đúng mục đích, nói đúng suy nghĩ để chinh phục người nghe là một điều không phải dễ và còn khó hơn khi quản lý giọng nói để không ảnh hưởng đến sức khỏe, thanh quản khi nói...', 5, NULL, NULL),
(9, 'Guitar đệm hát 30 ngày cùng Hiển Râu', 'topbanchay_7.jpg', 399999, 'Khóa học guitar online cùng Hiển Râu với khóa học \"Guitar Đệm hát 30 ngày cùng Hiển Râu\" khóa học bao gồm những kiến thức cơ bản nhất về Guitar giúp cho việc học đệm hát guitar đơn giản hơn, giúp bạn nhanh chóng làm chủ cây đàn guitar nhanh nhất', '- Khóa học guitar online \"Guitar đệm hát 30 ngày cùng Hiển Râu\" bao gồm những kiến thức cơ bản quan trọng, ngắn gọn và cần thiết nhất phục vụ cho mục đích đệm hát cơ bản.\r\n- Giáo trình được xây dựng dựa trên kinh nghiệm giảng dạy và cập nhật theo sát giáo trình thực tế tại lớp đàn Hiển Râu để phù hợp với tất cả mọi người, kể cả những người không có năng khiếu âm nhạc.\r\n- Học viên sẽ được hỗ trợ và giải đáp về mặt học thuật liên tục qua Fanpage Hiển Râu Guitar. \r\n- Sau khóa học này, học viên sẽ có nền tảng cơ bản vững chắc về guitar cũng như các cách chơi guitar thật hấp dẫn để tiếp tục lên những trình độ cao hơn với các khóa học tiếp theo của Hiển Râu.', 6, NULL, NULL),
(10, 'Làm chủ Word 2016 từ cơ bản đến nâng cao', 'topbanchay_8.jpg', 399999, 'Làm chủ Word 2016 từ cơ bản đến nâng cao giúp bạn tự tin làm chủ phần mềm Word 2016, nâng cao kỹ năng tin học văn phòng, tự tin thi chứng chỉ', '- Khóa học Làm chủ Word 2016 từ cơ bản đến nâng cao của giảng viên Đỗ Trung Thành phù hợp với tất cả các đối tượng, đặc biệt dành cho các bạn có nhu cầu học tin học văn phòng đặc biệt về Word từ những bước đi đầu tiên; những bạn cần nâng cao trình độ về công cụ tin học văn phòng; hay chuẩn bị thi các loại chứng chỉ tin học… \r\n-Khóa học gồm các bài giảng bằng video, được xây dựng theo lộ trình từ cơ bản đến nâng cao về Word với phiên bản mới nhất hiện tại (Office 2016), với đầy đủ các nội dung:\r\n- Cách định dạng văn bản\r\n- Cách chèn và định dạng các đối tượng\r\n- Các thiết lập cho văn bản\r\n- Với quan điểm \"Học đi đôi với hành\", trong từng nội dung của bài học sẽ có phần thực hành trực tiếp để học viên có thể hiểu và làm theo các hướng dẫn chi tiết của giảng viên.', 3, NULL, NULL),
(11, 'Trở thành nghệ sĩ tán gái bậc thầy', 'sieuuudai_1.jpg', 599000, 'Tán gái đâu phải là dễ mà để trở thành Nghệ Sĩ Tán Gái bậc thầy thì cần phải có cả một \"Bí Kíp Quyến Rũ\". 41 bài học là \"Chiếc chìa khóa vàng\" với nghệ thuật tán gái đỉnh cao để mở ra mọi mối quan hệ chất lượng cùng chuyên gia PUA', '- Hãy đến với khoá học Trở thành nghệ sĩ tán gái bậc thầy của chuyên gia Hoàng Linh ( Link PUA ) sẽ giúp giải quyết mọi vấn đề và sở hữu bí kíp, nghệ thuật tán gái quyến rũ \r\n- Nội dung khoá học Trở thành nghệ sĩ tán gái bậc thầy\r\n- Chuyên gia Link PUA với 8 năm kinh nghiệm về nghệ thuật tán gái và những bí kíp đột phá này sẽ được tôi rút ruột chia sẻ trong chương trình \"Trở thành nghệ sĩ tán gái bậc thầy\" - Niềm tự hào làm nên thương hiệu\r\n- Trong khoá học này LinkPUA sẽ chia sẻ đến các bạn:\r\n- Cách bắt chuyện làm quen với các cô gái trong từng tình huống cụ thể\r\n- Những cô gái đang đi trên đường, ngồi quán cà phê, hay cô bạn học cùng lớp,... đều có thể bắt chuyện làm quen và kết thân\r\n- Được chia sẻ những kiến thức về tâm lý học và cách kiểm soát cảm xúc của bản thân và duy trì năng lượng cả ngày để thành công không chỉ trong lĩnh vực nghệ thuật quyến rũ mà còn trong mọi lĩnh vực cuộc sống. \r\n- Tìm được lời giải mã mọi bí ẩn mang tên phái đẹp qua nghệ thuật tán gái\r\n- Thoải mái khám phá nửa kia của mình mà không gặp trở ngại nào\r\n- Đến với khoá học hôn nhân gia đình Trở thành nghệ sĩ tán gái bậc thầy của chuyên gia Hoàng Linh ( Link PUA)  ngay hôm nay để trở thành một chuyên gia quyến rũ!', 7, NULL, NULL),
(12, 'Google Ads Marketing toàn tập', 'sieuuudai_2.jpg', 659999, 'Khoá học Google Ads giúp học viên thành thạo cách để chạy quảng cáo Google Ads, nắm bắt xu hướng mới nhất Smart marketing và Google Shopping, tự chạy quảng cáo Google Ads Marketing cho sản phẩm của mình', '- Khóa học Google Ads Marketing toàn tập của giảng viên Nguyễn Ngọc Long trên Esto, hướng dẫn bạn chạy quảng cáo Google Ads từ cơ bản đến nâng cao. Bạn sẽ được học tất cả những kiến thức về Google Ads: Quảng cáo Google tìm kiếm, Quảng cáo Google hiển thị, Quảng cáo Google hiển thị, Quảng cáo Google Shopping. Đặc biệt trong khóa học bạn sẽ được hướng dẫn về các xu hướng mới nhất của Quảng cáo Google: Shopping, Smart Marketing. Ở đây bạn sẽ được hướng dẫn cách tư duy để có thể giải quyết các vấn đề trong quá trình chạy và các cách để có thể tối ưu tài khoản mà ít có người hướng dẫn online.\r\n- Khóa học Google Ads này sẽ giúp các bạn có thể nắm vững được kiến thức về quảng cáo Google Ads, các hình thức chạy, tư duy để có thể giải quyết các vấn đề khi chạy. Các kiến thức trong khóa học được đúc kết trực tiếp từ kinh nghiệm chạy của Giảng viên Nguyễn Ngọc Long, chia sẻ các mẹo khi chạy mà ít người tiết lộ. Sau khi học xong có thể tự tin triển khai ngay cho sản phẩm của mình.', 8, NULL, NULL),
(13, 'Soạn thảo văn bản Word 365 từ cơ bản đến nâng cao', 'sieuuudai_3.jpg', 399999, 'Khóa học cung cấp cho bạn các kiến thức và kỹ năng về xử lý văn bản trên phần mềm Word 365 của Microsoft.', '- Tin học văn phòng là một kỹ năng thiết yếu cho mọi người, cho đến nay nó đã trở thành một kỹ năng mềm gần như bắt buộc đối với các nhân viên làm việc trong môi trường công sở văn phòng, thậm chí là sinh viên, học viên đang ngồi học trên ghế nhà trường.\r\n- Kỹ năng học tin học văn phòng cũng đã trở thành một tiêu chuẩn tuyển dụng ở nhiều công ty, đặc biệt những vị trí Nhân viên văn phòng, cần xử lý công việc giấy tờ, máy tính, thuyết trình...\r\n- Microsoft Word là công cụ soạn thảo văn bản thông dụng mà hầu hết các doanh nghiệp và cá nhân đang sử dụng, không chỉ bởi sự đa dụng phổ biến của Word mà hơn hết là những tính năng, công cụ trong Word luôn được cập nhật mới mạnh mẽ. Word là một trong những kỹ năng mà bạn cần nắm vững để xử lý mọi vấn đề liên quan. \r\n- Hãy đến với Khóa học Soạn thảo văn bản Word 365 từ cơ bản đến nâng cao Giảng viên hướng dẫn: Đỗ Thành Trung. Khóa học cung cấp cho bạn các kiến thức và kỹ năng về xử lý văn bản trên phần mềm Word 365 của Microsoft.\r\n- Sau khóa học, bạn sẽ có được toàn bộ kiến thức về Word, biết soạn thảo văn bản theo tiêu chuẩn văn bản Việt Nam. Biết cách căn lề, chỉnh chữ, giãn dòng, đổi font, tạo mục lục,... một cách chuyên nghiệp và nhanh chóng.', 3, NULL, NULL),
(14, 'Bộ bí quyết công thức 20 món ăn Trung Hoa nổi tiếng', 'sieuuudai_4.jpg', 399999, 'Giúp bạn nắm được các bí quyết đặc biệt để làm nên đặc trưng các món ăn Trung Hoa, tự tay trổ tài ẩm thực chiêu đãi cho cả nhà và định hướng phát triển nhà hàng ẩm thực Trung Hoa của riêng bạn', '- Đừng bỏ qua cơ hội trổ tài bếp núc với người thân bạn bè chỉ với một khóa học \"Bộ bí quyết công thức 20 món ăn Trung Hoa nổi tiếng\" duy nhất tại Esto!\r\n- Tôi học được những gì từ khóa học nấu ăn hấp dẫn này ?\r\n- Học nấu ăn các công thức cách làm chuẩn, ngon đúng vị các món Hoa do đầu bếp người Hoa dạy lần đầu tiên có tại Việt Nam \r\n- Sau khi học xong khóa học bạn sẽ có kiến thức và hiểu biết sâu sắc về ẩm thực Tứ Xuyên, Hồ Nam, Trung Quốc.\r\n- Bạn sẽ biết được tác dụng của các loại sốt và cách phối hợp nguyên liệu trong món Trung do đầu bếp chuyên nghiệp giải thích.\r\n- Bạn sẽ là một trong những người đầu tiên tại Việt Nam nắm vững cách làm các món ăn này, để áp dụng vào công việc đầu bếp của bạn giúp gia tăng kiến thức và thu nhập của bạn.\r\n- Và đặc biệt bạn có thể phát triển mô hình kinh doanh nhà hàng với phong cách mới thu hút khách hàng đến bằng những món ăn nổi tiếng ít có tại Việt Nam.', 9, NULL, NULL),
(15, 'Kinh nghiệm kê khai và quyết toán thuế thu nhập cá nhân từ A - Z', 'sieuuudai_5.jpg', 599000, 'Hướng dẫn cách kê khai và làm quyết toán thuế thu nhập cá nhân, giúp kế toán viên tự tin trong công việc', '- Khóa học Kinh nghiệm kê khai và quyết toán thuế thu nhập cá nhân từ A – Z , được giảng dạy bởi Giảng viên - chuyên gia giàu kinh nghiệm Nguyễn Lê Hoàng, với các nội dung chính có trong khóa học:\r\n- Hướng dẫn chi tiết cài đặt và sử dụng các phần mềm kê khai thuế\r\n- Hiểu được các quy định chung về thuế thu nhập cá nhân\r\n- Phân biệt KHOÁN CHI và HỖ TRỢ\r\n- Cách tính thuế thu nhập cá nhân với mỗi loại hợp đồng\r\n- Cách xây dựng lương phù hợp để KHÔNG PHẢI ĐÓNG thuế TNCN\r\n- Cách ĐĂNG KÝ MÃ SỐ THUẾ thu nhập cho người lao động và người phụ thuộc\r\n- Hướng dẫn cách lập bảng lương theo từng loại hợp đồng\r\n- Nguyên tắc chung khi kê khai và quyết toán thuế thu nhập cá nhân\r\n- Thủ tục sử dụng chứng từ khấu trừ thuế thu nhập cá nhân\r\n- Chia sẻ các tình huống về thuế thu nhập cá nhân\r\n- Kê khai, tính thuế cho cá nhân có tài sản cho thuê, ký hợp đồng giao khoán...\r\n- Với 69 bài giảng được chia thành 4 học phần khác nhau, học viên sẽ được giới thiệu, cung cấp kiến thức và thực hành ngay các bài tập có tính ứng dụng cao vào công việc có trong các học phần như tính toán thu nhập miễn thuế, tính thuế thu nhập cá nhân theo hợp đồng, kê khai thuế thu nhập cá nhân, hoàn thuế, học tin học văn phòng cơ bản,...', 10, NULL, NULL),
(16, 'Bùng nổ doanh số cùng Google Shopping ', 'sieuuudai_6.jpg', 399999, 'Biết cách triển khai Google shopping và kết hợp nó với các kênh Online Marketing khác để tạo ra hiệu quả cao, gia tăng doanh số.', '- Bạn mong muốn tiếp cận khách hàng hiệu quả nhất?\r\n- Bạn gặp khó khăn trong việc triển khai Google Shopping?\r\n- Bạn chưa biết cách kết hợp Google Shopping với các kênh Online khác?\r\n- Hãy đăng ký ngay khóa học Bùng nổ doanh số cùng Google Shopping của Giảng viên Phạm Huy Long, để cập nhật ngay xu thế, gia tăng doanh số. ', 11, 18, NULL),
(17, 'Guitar tốc độ Shredder', 'sieuuudai_7.jpg', 499000, 'Các kĩ thuật từ trung cấp đến nâng cao trong guitar điện, cách sử dụng hợp âm, đặt hợp âm, cách đi scale, phương pháp luyện tập cho tới bí quyết để ứng tấu trên sân khấu.', '- Hãy đến với khóa học Từ mù tịt trở thành guitar lead tại Esto. Khoá học này sẽ mang đến cho  bạn công thức để bạn áp dụng chơi các ca khúc bạn yêu thích, bằng sự hiểu biết thực sự của bạn trong âm nhạc.\r\n- Hiểu về cây đàn điện, chức năng của từng bộ phận. Hiểu về nguyên lí vận hành của phơ loa \r\n- Các kĩ thuật cần có của một tay Guitar lead. Cách đi scale, cách đặt hợp âm, cách ứng tấu\r\n- Dành cho các bạn mới bắt đầu chơi hoặc đã chơi nhưng chưa có công thức chơi đúng. \r\n- Không cần trải qua chơi Guitar thùng trước đó bạn hoàn toàn có thể theo học được khoá học Guitar điện này\r\n- Tất cả các kĩ thuật từ cơ bản tới nâng cao, từ dễ tới khó. Các kiến thức , kĩ thuật cơ bản về đệm, về solo và ứng dụng - Bao gồm Backing Track & Tab Guitar Pro cho từng bài RẤT DỄ TẬP.Tất cả các tay Guitar mới học, mới tiếp cận đều tập được.\r\n- Đi kèm là những chia sẻ về cách cài đặt thông số loa, amply, phơ, chia sẻ cách thức tập luyện, bí quyết để đạt tốc độ.\r\n- Chia sẻ bí quyết luyện tập, duy trì đam mê hàng ngày để đạt được hiệu quả cao nhất. Công thức để đi nhanh hơn, giảm chi phí và thời gian tự mò mẫm\"', 12, NULL, NULL),
(18, 'Bí quyết kinh doanh, tư vấn bảo hiểm thành công', 'sieuuudai_8.jpg', 499000, 'Cài đặt tư duy của người thành công, có kiến thức đúng, công cụ đúng để khai thác nguồn khách hàng tiềm năng, thành công trong lĩnh vực tư vấn bảo hiểm.', '- Khóa học Bí quyết kinh doanh, tư vấn bảo hiểm thành công của giảng viên Nguyễn Tài Tuệ sẽ giúp người làm nghề tư vấn bảo hiểm có được:\r\n- TƯ DUY ĐÚNG – tư duy của người thành công, tư duy của người làm chủ.\r\n- Có được KIẾN THỨC ĐÚNG – Kiến thức về tài chính, marketing, bán hàng\r\n- Có CÔNG CỤ ĐÚNG – Các công cụ giúp tư vấn bảo hiểm có tiếp cận và khai thác nguồn khách hàng tiềm năng trên Internet.', 13, NULL, NULL),
(19, 'Làm chủ tuổi 20', 'kinhdoanh_khoinghiep_1.jpg', 499000, 'Làm chủ tuổi 20 - Phương pháp đạt tối đa hiệu quả trong học tập và công việc. Cách làm như thế nào để Làm chủ trọn vẹn cuộc sống của bạn. Công thức tuyệt mật đem đến những thành công ở tuổi 18-25 nhanh và chính xác hơn bất kỳ ai khác.', '- Những điều sau khoá học này bạn nhận được:\r\n- Phương pháp đạt tối đa hiệu quả trong học tập và công việc.\r\n- Cách làm như thế nào để Làm chủ trọn vẹn cuộc sống của bạn.\r\n- Công thức tuyệt mật đem đến những thành công ở tuổi 18-25 nhanh và chính xác hơn bất kỳ ai khác.\r\n- Cách tìm kiếm môi trường, người huấn luyện và những người đồng đội cho mình.\r\nHọc được cách biến nỗi sợ thành sức mạnh giúp bạn vượt lên trên chính mình\r\n- Không những thế, bạn sẽ được định hướng cách tạo tiền hiệu quả từ 0 đồng. Bạn sẽ nắm vững được 5 chiến lược học tập hiệu quả để vận dụng thành công. Bạn sẽ làm chủ được bản thân và tài chính tuổi 20 của mình!\r\n- Tất cả được gói gọn trong KHÓA HỌC \"LÀM CHỦ TUỔI 20\" của giảng viên Dương Duy Bách   ', 14, 18, NULL),
(20, 'TikTok : Tiếp cận 100.000+ khách hàng trong 30 ngày với chi phí 0 đồng', 'kinhdoanh_khoinghiep_2.jpg', 599000, 'Video ngắn và TikTok đang ngày càng chiếm được vị trí quan trọng, và là kênh Marketing online không thể thiếu... HÃY BẮT ĐẦU NGAY !', '- Đây là khóa học đóng gói kiến thức của những thành công vang dội trên, nó được đóng gói theo lộ trình: \r\n- Hiểu về tầm nhìn, và lý do tại sao TikTok lại giúp chúng ta kiếm rất nhiều tiền \r\n- Hiểu rõ về thuật toán TikTok: Tại sao có clip nhiều view, clip ít view; Làm sao để có 1 video lên đề xuất; Định hình rõ con đường bạn muốn đi, để dẫn dắt khách hàng, từ lúc họ biết đến bạn đến khi họ mua hàng; Những điều cơ bản cần tránh khi làm TikTok để tài khoản phát triển mạnh mẽ, bền vững; Làm sao để có những clip triệu view ... \r\n- 10 kỹ năng edit clip của các TikToker, mà chỉ cần dùng điện thoại \r\n- Rất nhiều học viên của đã áp dụng những kiến thức trên và thành công. Nếu bạn muốn tìm hiểu kỹ hơn về tôi thì hãy tìm Facebook \"Cấn Mạnh Linh\" hoặc vào tìm TikTokVip nhé. ', 15, 18, NULL),
(21, 'Bí quyết bán lẻ ngàn đơn trên Shopee, Zalo và Facebook', 'kinhdoanh_khoinghiep_3.jpg', 599000, 'Đột phá doanh thu nhờ các bí quyết bán hàng trên các trang thương mại điện tử', '- Sau khóa học bán hàng online này bạn sẽ nhận được:\r\n- Tư duy bán hàng “đúng từ khởi đầu để thành công” của người bán xuất sắc. Điều này quyết định đến 7-% sự thành công của khách hàng\r\n- Hướng dẫn a - z với các mẫu, các chiến lược và công thức học kinh doanh hiệu quả\r\n- Các mấu chốt để kinh doanh thành công và các cách lựa chọn sản phẩm nguồn hàng phù hợp\r\n- Hướng dẫn chi tiết từng phương pháp đa kênh để bán hàng hiệu quả: facebook, zalo, shopee,... để khách hàng tìm đến chúng ta nhiều hơn. \r\n- Chiến lược kinh doanh, phương pháp chốt sale hiệu quả, cách xử lý từ chối thâm thuý\r\n- Giúp gia tăng doanh số bán hàng bằng cách chăm sóc khách hàng sau bán \r\n- Đăng ký khoá học Bí quyết bán lẻ ngàn đơn trên Shopee, Zalo và Facebook của giảng viên Trần Hoa ngay hôm nay! Và còn rất nhiều những khóa học quản trị kinh doanh khác đang chờ bạn khám phá trên Esto nhé!', 16, 18, NULL),
(22, 'Kinh doanh theo mạng từ A đến Z', 'kinhdoanh_khoinghiep_4.jpg', 599000, 'Trang bị đủ kỹ năng, phương pháp để bạn hiểu rõ về giá trị của ngành kinh doanh theo mạng hiện đại. Hiểu được bí mật công thức thành công trong kinh doanh theo mạng và ứng dụng nhanh chóng vào doanh nghiệp', '- Khóa học \"MLM 2.0 - Bí mật hệ thống MLM vận hành tự động\"\r\n- Dưới phương pháp giảng dạy các tình huống chân thực, có hình ảnh và các dẫn chứng thực tế với kinh nghiệm hơn 10 năm trong nghành được sắp xếp có hệ thống bài học chiến lược kinh doanh khoa học giúp học viên dễ hiểu và thực hành và đưa vào thực tế. Kiến thức được chuyển giao từ các chuyên gia MLM và những người thành công nhanh nhất trong ngành chuyển giao. Qua đó giúp các bạn học viên có đủ kỹ năng, phương pháp và niềm tin để thành công bền vững trong MLM.\r\n- Vậy còn chờ gì nữa nắm trong tay bí mật hệ thống kinh doanh MLM vận hành tự động hiệu quả bền vững ngay hôm nay chỉ với một khóa học làm giàu duy nhất \"MLM 2.0 - Bí mật hệ thống MLM vận hành tự động\" chỉ có tại Esto!', 17, 18, NULL),
(23, 'Học Forex - Những giá trị mang lại thành công', 'kinhdoanh_khoinghiep_5.jpg', 599000, 'Forex là một trong những lĩnh vực đầu tư tạo ra lợi nhuận, trước khi kiếm được lợi nhuận bạn trải qua quá trình học hỏi. Bước đầu của quá trình đó bạn phải hiểu được sự nguy hiểm tiềm ẩn trên thị trường Forex.', '- Khóa học Học Forex - Những giá trị mang lại thành công của giảng viên Trần Quốc Minh trên Esto sẽ phơi bày ra tất cả những góc tối của thị trường. Để trang bị cho mọi người kỹ năng tránh khỏi sự lừa đảo tràn lan hiện nay. Giữ được tiền chính là kiếm được tiền. \r\nBạn sẽ được giảng viên giảng viên giảng dạy theo lộ trình học kinh doanh từ đơn giản đến nâng cao, hiểu được tư duy đầu tư là như nào, giá trị đầu tư và lời khuyên, hiểu được thị trường Forex vận hành như thế nào, biết cách chọn sàn giao dịch Forex, nắm được những yếu tố cơ bản của cơ chế hoạt động một sàn giao dịch nói chung và các mô hình nến trong giao dịch Forex.                                                                                                                \r\n- Tư duy thực tế, nhìn nhận đúng đắn theo góc nhìn đa chiều khách quan.\r\n- Bí mật của những chiếc bẫy làm cho bạn mất mát trên thị trường.  \r\n- Forex là một trong những lĩnh vực đầu tư tạo ra lợi nhuận, trước khi kiếm được lợi nhuận bạn trải qua quá trình học hỏi. Bước đầu của quá trình đó bạn phải hiểu được sự nguy hiểm tiềm ẩn trên thị trường Forex. \r\n- Chúng tôi khẳng định là nơi duy nhất dám chia sẻ cho bạn những điều này, bạn có thể tìm hiểu và so sánh sau khi học xong.  ', 18, 18, NULL),
(24, 'Thu nhập thụ động từ việc Đóng gói kiến thức & tạo khoá học Online', 'kinhdoanh_khoinghiep_6.jpg', 399999, 'Khóa học giúp bạn xây dựng khóa học online một cách bài bản và thành công.', '- Đây là khoá học được đúc kết từ hơn 10 năm kinh nghiệm giảng dạy và kinh doanh của tôi, đây là một trong những khóa học kiếm tiền online mang tính chất giáo dục và kinh doanh. Nội dung của khoá học sẽ dẫn bạn đi từ lúc bắt đầu cho đến khi tạo ra được dòng tiền thụ động. \r\n- Tất cả những gì bạn cần làm là: LÀM CHO CÁI THÙNG RỖNG HẾT. Điều này có nghĩa là, bạn hãy quên đi cái tôi của mình, sẵn sàng đón nhận kiến thức, từng bước thực hiện theo hướng dẫn của bài học. Rồi bạn sẽ khám phá ra điều tuyệt vời của nó.\r\n- Với mức chi phí rất thấp, nhưng nội dung của khoá học cực kỳ chất lượng, bạn không chỉ được học kinh doanh các kiến thức của khoá học, mà còn có cơ hội được hổ trợ trực tiếp & gián tiếp từ giảng viên. Chúng tôi sẽ giúp bạn thực hiện ước mơ của mình.', 19, 18, NULL),
(25, 'Khởi nghiệp thực chiến từ A - Z', 'kinhdoanh_khoinghiep_7.jpg', 499000, 'Giúp bạn hiểu đúng đắn và sẵn sàng khởi nghiệp để thành công.', '-Bạn có một ý tưởng bạn cho là siêu phàm, bạn dành vài tháng để nghĩ về nó nhưng cũng chẳng dám làm gì với nó vì “ngại”, bạn quá thoải mái với vòng an toàn của mình, và bạn tự thuyết phục bản thân mình rằng là mình chưa đủ chín để thực thi ý tưỏng này. Nhưng nếu không bắt đầu thì sẽ không có kết quả. Khởi nghiệp là con đường bạn nên cân nhắc và quyết đoán lựa chọn từ hôm này. Khóa học Khởi nghiệp thực chiến từ A - Z sẽ giúp bạn hiểu đúng đắn về khởi nghiệp, chuẩn bị để khởi nghiệp thành công. \r\n- Với kinh nghiệm hơn 12 năm xây dựng, vận hành doanh nghiệp và đào tạo kỹ năng kinh doanh, giảng viên sẽ giúp cho học viên có thêm kiến thức và tự tin trong khởi nghiệp. Khóa học trang bị đầy đủ thông tin, kiến thức để một người chưa có kinh nghiệm có thể bắt đầu ngay công việc kinh doanh của mình. Các nội dung đào tạo gồm: Tư duy khởi nghiệp cho người mới bắt đầu; quy trình xây dựng và hoàn thiện kế hoạch kinh doanh; xây dựng kế hoạch marketing & truyền thông; xây dựng quy trình cho doanh nghiệp từ nhân sự, bán hàng, sản xuất và định giá sản phẩm; kỹ năng huy động vốn hiệu quả; kỹ năng quản lý nhân sự quản lý tài chính.\r\n- Tham gia khóa học, học viên sẽ định vị lại bản thân và có thêm sự tự tin khi khởi nghiệp. Bạn sẽ được thúc đẩy tinh thần, động lực khởi nghiệp và đồng thời nắm được những khó khăn và thách thức trong quá trình làm doanh nghiệp. Đăng ký ngay khóa học tại Esto để bứt phá khỏi vùng an toàn và khởi nghiệp thành công. ', 17, 18, NULL),
(27, 'Anh văn giao tiếp cho người hoàn toàn mất gốc', 'tienganh_1.jpg', 499000, 'Khóa học tiếng Anh giao tiếp cho người mất gốc khơi dậy niềm đam mê tiếng Anh, tự tin giao tiếp tiếng Anh như người bản xứ, mở ra cơ hội học tập, làm việc tại các công ty đa quốc gia và tự tin hơn trong giao tiếp với người bản địa dù ở bất kỳ hoàn cảnh nào', '- Những điều bạn băn khoăn sẽ được xua tan ngay khi bạn đăng ký khóa học của Esto, khóa học tiếng anh mất gốc sẽ giúp bạn khắc phục tất cả khó khăn để vực dậy, khơi nguồn niềm đam mê với TIẾNG ANH. Khóa học tiếng anh giao tiếp cho người mất gốc giúp bạn biết được cách học tiếng Anh đúng cách. Các bạn sẽ được nhập vai vào các tình huống tiếng Anh giao tiếp hết sức thú vị thực tế hàng ngày.\r\n- Lộ trình học “Anh văn giao tiếp cho người hoàn toàn mất gốc” của Giảng viên Ruby Thảo Trần giao tiếp cùng phương pháp phản xạ truyền cảm hứng sẽ giúp bạn nâng cao trình độ một cách nhanh chóng và hiệu quả, bạn sẽ hoàn toàn tự tin với trình độ tiếng Anh giao tiếp mới của bản thân đấy!  \r\n- Với tầm quan trọng của tiếng Anh, đó chính là lý do mà bạn không nên chậm trễ để trở thành học viên của khóa học “Tiếng Anh cho người hoàn toàn mất gốc” trên Esto.', 21, 9, NULL),
(28, 'Phát âm chuẩn và luyện nói hay Tiếng Anh', 'tienganh_2.jpg', 599000, 'Khóa học chuyên sâu giúp học viên phát âm CHUẨN tất cả các từ trong Tiếng Anh. Không chỉ vậy, khóa học còn hướng dẫn học viên cách luyến láy, diễn đạt Tiếng Anh một cách tự nhiên, cũng như giúp cải thiện tốc độ nói Tiếng Anh.', '-Khóa học này là chìa khóa giúp bạn hoàn toàn lột xác với Kỹ năng Nói Tiếng Anh của mình. Khóa học chuyên sâu giúp học viên phát âm CHUẨN tất cả các từ trong Tiếng Anh. Không chỉ vậy, khóa học còn hướng dẫn học viên cách luyến láy, diễn đạt Tiếng Anh một cách tự nhiên, cũng như giúp cải thiện tốc độ nói Tiếng Anh, điều mà gần như các khóa học online hiện nay chưa làm được.', 22, 9, NULL),
(29, '12 chủ đề giao tiếp Tiếng Anh quan trọng', 'tienganh_3.jpg', 659999, 'Nắm ngay những tuyệt chiêu cực hay để giao tiếp tiếng Anh thành thạo tự nhiên theo phong cách Tracey\'s Home ngay tại nhà', 'Tham gia khóa học này bạn sẽ được:\r\n- Tiếp xúc cách truyền đạt hoàn toàn mới, giúp nhớ ngay và lâu tới hơn 70% lượng kiến thức trong bài giảng.\r\n- Được thực hành ngay trong bài học với giảng viên. \r\n- Phương thức giảng dạy: Giảng viên luyện phát âm rõ từng chữ trong phần từ vựng và cụm từ. Sau đó sẽ giả định hỏi học viên những câu đã được chuẩn bị sẵn, câu trả lời được đưa ra sẵn, học viên chỉ cần thực hành theo. \r\n- Phát âm từ vựng quan trọng và hay gặp trong chủ đề cụ thể.\r\n- Thực hành mẫu câu liên quan đến chủ đề.\r\n- Thực hành hỏi và trả lời những kiến thức trọng tâm của chủ đề.', 23, 9, NULL),
(30, 'Tiếng Anh giao tiếp trẻ em từ 04-12 tuổi', 'tienganh_4.jpg', 599000, 'Khoá học Tiếng Anh giao tiếp cho trẻ em giúp các con yêu thích Tiếng Anh hơn qua các hình ảnh sinh động và những câu chuyện thú vị, để trẻ tự tin khi giao tiếp với người nước ngoài.', '- Để trẻ nhà bạn nắm được những lợi ích đó, bạn cần cho trẻ làm quen và học tiếng Anh ngay từ nhỏ. Chính vì thế khóa học tiếng Anh “Tiếng Anh giao tiếp trẻ em từ 04-12 tuổi” của giảng viên Hương Elena trên Esto ra đời. \r\n- Khóa học được biên soạn dựa trên giáo trình của Oxford, gồm các bài học ngoại ngữ online có tất cả các tình huống cơ bản phổ biến hàng ngày cho trẻ em, làm tiền đề vững chắc cho các bé khi bắt đầu học môn Tiếng Anh.\r\n- Với các hình ảnh sinh động, hấp dẫn, cùng các bài hát giọng Mỹ và các câu chuyện Tiếng Anh rèn luyện cả nghe, nói, đọc, viết giúp các bé yêu thích Tiếng Anh ngay từ khi còn nhỏ.\r\n- Các con cùng bố mẹ sẽ được thực hành không chỉ giao tiếp mà còn nhớ từ vựng, cấu trúc hơn qua các phiếu bài tập được cô Hương Elena biên soạn với các hình ảnh hấp dẫn, lôi cuốn.\r\n- Ngay hôm nay, hãy nhanh tay đăng ký khóa học \"Tiếng Anh giao tiếp trẻ em từ 04-12 tuổi” để được hưởng nhiều ưu đãi bất ngờ!', 24, 9, NULL),
(31, 'Học giỏi Tiếng Anh toàn diện: Nghe, Nói, Đọc, Viết', 'tienganh_5.jpg', 499000, 'Học giỏi Tiếng Anh toàn diện giúp bạn thành thạo 4 kỹ năng quan trọng nhất: Nghe, Nói, Đọc, Viết.', '- Xã hội ngày càng phát triển, Tiếng Anh trở thành một ngôn ngữ mang tính chất toàn cầu mà bất cứ ai cũng muốn sở hữu nó. Giao tiếp tiếng Anh tốt không chỉ giúp bạn khám phá nền văn hóa của nhiều nước thế giới, là cơ hội để học hỏi và hội nhập mà nó còn là một “vũ khí lợi hại” để bạn mở rộng cơ hội việc làm với mức lương cao. Để làm được điều này, bạn cần nắm chắc 4 kỹ năng: Nghe, nói, đọc, viết trong Tiếng Anh. \r\n- Khóa học Học giỏi Tiếng Anh toàn diện: Nghe, nói, đọc, viết của giảng viên Bùi Đức Tiến sẽ giúp bạn hệ thống lại những kiến thức vốn có của mình một cách khoa học và giúp bạn nắm chắc 4 kỹ năng quan trọng của tiếng anh.', 25, 9, NULL),
(32, 'Tiếng Anh giao tiếp cho người mới bắt đầu', 'tienganh_6.jpg', 250000, 'Khoá học tiếng Anh cho người mới bắt đầu tại Unica sẽ giúp bạn rèn luyện phản xạ giao tiếp trong những tình huống cụ thể, dành cho các bạn mất gốc, mất tự tin giao tiếp Tiếng Anh dù ở bất kỳ hoàn cảnh nào', '- Khóa học Tiếng Anh giao tiếp cho người mới bắt đầu của giảng viên Vũ Thuỳ Linh (Linh Vũ) CỰC KỲ PHÙ HỢP với bạn. Vì sao?\r\n- Bởi vì khóa học tiếng Anh online cho người mới bắt đầu này sẽ cung cấp cho bạn một cách đầy đủ và có hệ thống các bài học với các chủ đề cực kỳ thông dụng trong cuộc sống hàng ngày. Khoá học này sẽ giúp bạn nâng cao vốn từ vựng của mình, củng cố ngữ pháp đồng thời chỉnh lại phần phát âm. \r\n- Khoá học tiếng Anh cho người mới bắt đầu học ngoại ngữ online sẽ giúp các bạn học thêm từ vựng, củng cố ngữ pháp về các chủ đề cơ bản, thông dụng hay được dùng trong văn nói hàng ngày. Sau khi các bạn có âm tốt và học hết các chủ đề trong chương trình này. Các bạn có thể bắn tiếng Anh trong 5 hay 10 phút liên tục mà các bạn không phải suy nghĩ hay lục tìm từ vựng trong trí nhớ. Tất cả đều trở thành phản xạ tự nhiên của bạn giúp bạn phát âm chuẩn 100% ngữ pháp. Đồng thời có thể nói chuẩn 100% Anh Mỹ\r\n- Bạn sẽ gặp những tình huống giao tiếp thực tế đòi hỏi bạn cần phải có phản xạ giao tiếp tốt và sau khi học xong mỗi bài học bạn hoàn toàn có thể áp dụng ngay để sử dụng trong học tập cũng như trong công việc của mình. Khóa học đồng thời cũng hướng dẫn cách phát âm và củng cố vốn từ vựng, ngữ pháp căn bản trong tiếng Anh.\r\n- Vậy nên các bạn hãy bắt đầu đăng ký ngay khóa học Tiếng Anh giao tiếp cho người mới bắt đầu của giảng viên Vũ Thuỳ Linh (Linh Vũ) và luyện tập theo các chủ đề thông dụng trong khóa học này nhé!', 26, 9, NULL),
(33, 'Luyện thi IELTS online: listening, speaking, reading, writing\r\n', 'tienganh_7.jpg', 699999, 'Rèn luyện 4 kĩ năng, kèm theo giảng giải chi tiết về cấu trúc đề thi, nhưng lưu ý khi làm bài sẽ giúp bạn tự tin đạt 5 - 5,5 điểm IELTS.', '- IELTS viết tắt cho International English Language Testing System, tạm dịch là Hệ thống Kiểm tra Anh ngữ Quốc tế với 4 kỹ năng Nghe, Nói, Đọc và Viết. IELTS là cuộc thi kiểm tra trình độ thông thạo Anh ngữ quan trọng và phổ biến nhất thế giới cho mục đích học tập, làm việc và định cư với hơn hai triệu thí sinh dự thi.\r\n- Thấu hiểu được tầm quan trọng của việc luyện thi IELTS, Unica hợp tác cùng giảng viên Bùi Đức Tiến xuất bản khóa học Luyện thi IELTS Online: listening, speaking, reading, writing. Khóa học ngoại ngữ sẽ giúp học viên rèn luyện cả 4 kỹ năng, kèm theo giảng giải chi tiết về cấu trúc đề thi, những lưu ý khi làm bài tập sẽ giúp bạn tự tin bước vào kỳ thi IELTS với kết quả như mong đợi. \r\n- Lớp học dành cho những học viên mới tiếp xúc với IELTS, trình độ các kỹ năng còn thấp, vốn từ vựng, ngữ pháp còn chưa cao, và phát âm còn nhiều khiếm khuyết. Sau khoá học, học viên sẽ hiểu hơn về bố cục bài thi IELTS, cách thức học ôn IELTS, cũng như tìm ra được hướng đi đúng đắn cho sự học tiếng Anh của mình.', 25, 9, NULL),
(34, 'Thành thạo và lưu loát 12 chủ đề tiếng Anh cơ bản hay gặp nhất', 'tienganh_8.jpg', 599000, 'Để giao tiếp tiếng Anh thành thạo tự nhiên theo phong cách Tracey\'s Home', 'Khóa học hoàn toàn áp dụng phương pháp Effortless English, học tiếng Anh theo phương pháp thuận theo tự nhiên. Không phân tích ngữ pháp, nói đúng và chuẩn theo IPA quốc tế. Khoá học được thiết kế riêng biệt, tăng thời lượng thực hành tối đa cho học viên trong suốt quá trình luyện tập online. Cách giảng dạy duy nhất khiến học viên hào hứng lặp theo và bắt chủ đề ngay không bị quên.\r\n- Phát âm từ vựng quan trọng và hay gặp trong chủ đề cụ thể.\r\n- Thực hành  mẫu câu liên quan đến chủ đề.\r\n- Thực hành hỏi và trả lời những kiến thức trọng tâm của chủ đề. \r\n- Học viên được tiếp xúc cách truyền đạt hoàn toàn mới, giúp nhớ ngay là lâu tới hơn 70% lương kiến thức trong bài giảng. Thực hành ngay trong bài với giảng viên, giảng viên luyện phát âm rõ từng chữ trong phần từ vựng, và cụm từ, sau đó sẽ giả định hỏi học viên những câu đã được chuẩn bị sẵn, câu trả lời được đưa ra sẵn, học viên chỉ cần thực hành theo. \r\n- Nhanh tay đăng ký khóa học ngoại ngữ online “Thành thạo và lưu loát 12 chủ đề tiếng Anh cơ bản hay gặp nhất” ngay hôm nay để nhận nhiều ưu đãi!', 23, 9, NULL),
(35, 'Bí quyết chốt đơn thành công 90% - Telesale, Bán hàng online', 'banhang_1.jpg', 349000, 'Khóa học cung cấp cho bạn 4 bước xây dựng kịch bản bán hàng và 7 chiến lược chốt sale khiến khách hàng không thể cưỡng lại được. Tăng tỉ lệ chốt đơn lên 90%.', '- Khoá học Bí quyết chốt đơn thành công 90% - Telesale, Bán hàng online thành công 90% của Giảng viên Trần Văn Tuấn - CEO Tasa sẽ giúp bạn chốt được sale ngay trong cuộc gọi điện thoại hoặc chat với khách hàng khi bán hàng online. Đồng thời cung cấp cho bạn 4 bước xây dựng kịch bản bán hàng và 7 chiến lược chốt sale khiến khách hàng không thể cưỡng lại được. Giúp bạn, doanh thu công ty của bạn Tăng Vọt với tỷ lệ chốt sale lên 90%.\r\n- Bạn hãy nhanh tay đăng ký khóa học “Bí quyết chốt đơn thành công 90% - Telesale, Bán hàng online” để được hưởng nhiều ưu đãi lớn!', 27, NULL, NULL),
(36, 'Chiến binh bán hàng', 'banhang_2.jpg', 399999, 'Khóa học giúp bạn đập tan mọi rào cản khó khăn từ khách hàng, nâng cao khả năng giao tiếp, đọc vị tâm lý khách hàng trong 60s.', '- Muốn kinh doanh thì bắt đầu từ đâu, học bán hàng online như thế nào, làm thế nào để tăng doanh số, tăng hiệu quả bán hàng? Kể cả khi bạn tự kinh doanh hay là nhân viên bán hàng, trưởng phòng kinh doanh đến chủ doanh nghiệp cũng vướng phải ít nhất một trong những vấn đề này.\r\n- Vậy thì bạn không thể bỏ qua khóa học này - Chiến binh bán hàng của Chuyên gia đào tạo Bùi Quang Dương. \r\n- Giảng viên Nguyễn Quang Dương là nhà huấn luyện bán hàng có trên 8 năm kinh nghiệm trong vai trò chuyên gia huấn luyện Sales ở Hà Nội và từng là lãnh đạo của rất nhiều đội ngũ kinh doanh xuất chúng với doanh số gấp 2-5 lần trong nhiều năm liền. ', 28, NULL, NULL),
(37, 'Nghệ thuật bán hàng qua điện thoại', 'banhang_3.jpg', 599999, 'Bí quyết để trở thành Sát thủ bán hàng qua điện thoại, có trong tay chiến lược xây dựng danh sách khách hàng, cùng hàng loạt tuyệt chiêu để có được những kịch bản tele ưng ý', '- Ngay khi tham dự khóa học bạn sẽ có toàn bộ các kịch bản để gọi điện cho bất kỳ ai.\r\n- Kich bản đặt lịch hẹn với khách hàng\r\n- Kịch bản để nhận diện khách hàng tiềm năng\r\n- Kịch bản CHỐT SALES\r\n- Kịch bản chăm sóc khách hàng sau chốt\r\n- Các kịch bản liên quan đến giao tiếp với khách hàng qua điện thoại khác.\r\n- Tất cả sẽ được tùy biến để áp dụng ngay vào công việc kinh doanh hiện tại của bạn. Và quan trọng nhất: Bạn sẽ được nhận lộ trình để từ 01 người bán hàng qua điện thoại bình thường trở thành sát thủ bán hàng qua điện thoại.\r\n- Nhanh tay đăng ký khóa học \"Nghệ thuật bán hàng qua điện thoại\" ngay hôm nay để trở thành một Sale Master ngay tại nhà!', 29, NULL, NULL),
(38, 'Tuyệt chiêu để chốt Sales', 'banhang_4.jpg', 659999, 'Làm sao để tiếp cận khách hàng, bí quyết chốt đơn ngay trong vài phút gặp mặt? Khoá học giúp nắm được những kỹ thuật căn bản để Tiếp cận, Chào hàng, Vượt qua phản đối, chốt Sales.', '- Những bí quyết vàng chốt đơn hàng nhanh chóng hiệu quả có trong khóa học Tuyệt chiêu để chốt sale được biên soạn bởi giảng viên Trần Ngọc Thiện sẽ mang đến cho bạn những kỹ năng bán được hàng mà khách hàng khó lòng nói không.  \r\n- Với phong cách giảng dạy chuyên nghiệp cùng với những kiến thức được biên soạn một cách bài bản. giảng viên sẽ giúp các bạn nắm được những kỹ thuật căn bản để tiếp cận, chào hàng và vượt qua phản đối, chốt sales thành công. \r\n', 30, NULL, NULL),
(39, '36 Tuyệt chiêu bán hàng siêu đẳng', 'banhang_5.jpg', 499000, 'Với 36 tuyệt chiêu bán hàng siêu đẳng bạn sẽ nắm trong tay tất tần tận các kỹ năng, phương pháp, kịch bản để thuyết phục khách hàng tin tưởng và sử dụng sản phẩm của mình lâu dài và hiệu quả nhất', '- Trong khóa học \"36 tuyệt chiêu bán hàng siêu đẳng\", Diễn giả - Doanh nhân Nguyễn Vĩnh Cường sẽ giúp bạn nắm bắt các bí quyết ấy Khóa học tập trung dạy bạn cách đập tan nỗi sợ hãi tiềm ẩn, khơi dậy, củng cố niềm tin của bạn và cả khách hàng. Khóa học đưa ra bí quyết thuyết phục, kèm các mẫu tình huống giá trị để bạn đánh gục tâm lý sợ hãi gạt bay lời từ chối của khách hàng.Bạn sẽ trở nên thật ấn tượng và để lại một dấu ấn tốt, sâu sắc trong lòng khách hàng. \r\n- Trong suốt khóa học Nguyễn Vĩnh Cường sẽ dạy bạn đầy đủ 36 tuyệt chiêu bán hàng siêu đẳng này với những bí quyết được đúc kết từ kinh nghiệm thực tế mà anh ấy đã, đang thực hiện, đây được xem là vũ khí bí mật của riêng anh được đúc kết từ 10 năm kinh doanh thành công. Ngoài ra bạn còn được chia sẻ về 36 kịch bản bán hàng giúp bạn có kỹ năng xử lý mọi tình hình kinh doanh với từng đối tượng khách hàng cụ thể. Cùng với đó là 36 kỹ thuật tấn công tâm lý giúp cho nghệ thuật thuyết phục khách hàng của bạn hiệu quả hơn. ', 31, NULL, NULL),
(40, '69 Tuyệt chiêu chốt sale trực tiếp', 'banhang_6.jpg', 599000, 'Chốt sale có thể xem là khâu quan trọng nhất của quá trình bán hàng. Khóa học giúp bạn Làm chủ bối cảnh khiến khách hàng không thể từ chối.', '- Điều đầu tiên mà giảng viên Hán Quang Dự chia sẻ với bạn không phải là những bí quyết nhỏ lẻ để chốt đơn mà là cách đưa tên bạn/ doanh nghiệp và sản phẩm của bạn có thể đến với khách hàng một cách tự nhiên mà đầy dụng ý. Với thị trường cạnh tranh như hiện tại, để khách hàng nhớ đến và có thiện cảm cũng là thành công lớn. \r\n- Bạn sẽ bất ngờ với cách giảng viên làm chủ bối cảnh trong mọi cuộc gặp gỡ với khách hàng và xây dựng mối quan hệ vững chắc khiến khách hàng không chỉ đến với bạn 1 lần mà còn hàng trăm lần cùng với những khách hàng mới.\r\n- Thứ hai, giảng viên sẽ chia sẻ cho 24 tuyệt chiêu chốt sales trực tiếp, chốt đâu “dính” đấy như: ưu đãi, giới hạn, cá nhân hóa, cam kết, tấn công tử huyệt tiền của khách hàng, tạo sự khan hiếm, tung tin…\r\n- Với một số chiêu chúng tôi bật mí trên, đã khiến các bạn tò mò và muốn khám phá hết các tuyệt chiêu còn lại chưa. Nhanh tay đăng ký khóa học ngay hôm nay để nắm trọn “bí kíp”.', 29, NULL, NULL),
(41, 'Bán hàng xuất sắc sau 7 ngày', 'banhang_7.jpg', 499000, 'Bí quyết bán hàng xuất sắc để trở thành những bậc thầy Telesale đỉnh cao.', '- Bạn cảm thấy rất ngại ngùng khi phải nhấc máy gọi điện thoại cho một người lạ. Bạn nghĩ nếu khách hàng đó mà dập máy luôn không nghe mình nói thì sao? Khách hàng sẽ mắng mình là làm phiền họ? Bạn cũng không biết cách làm sao để họ tập trung và lắng nghe mình nói ?\r\n- Bạn không có bất kỳ danh sách khách hàng tiềm năng nào. Bạn không biết làm thế nào để tìm được thông tin của những khách hàng giàu có và sẵn sàng mua hàng của bạn\r\n- Bạn không biết cách đặt hẹn với khách hàng trên điện thoại. Bạn nhấc máy lên chưa kịp nói gì thì khách hàng đã dập máy. \r\n- Bạn không biết cách trình bày sản phẩm logic và thuyết phục. Bạn không biết cách đặt câu hỏi như thế nào để có được thông tin khách hàng ? Bạn cũng chẳng biết phải trình bày tính năng, hay lợi ích gì để phù hợp với khách hàng của mình?\r\n- Khách hàng đưa ra nhiều câu từ chối nhưng bạn không biết giải thích sao cho đúng cả ? \r\n- Bạn không biết cách chốt bán hàng trên điện thoại để khiến khách hàng mua ngay lập tức.\r\n- Nếu bạn đang gặp những vấn đề trên mà không biết cách phải làm sao. Bạn muốn tìm một khóa học bán hàng online để giải quyết mọi vấn đề? Bạn muốn mình phải tạo ra bước ngoặt trong công việc bán hàng và kinh doanh. Bạn muốn là Người bán hàng xuất sắc nhất.\r\nĐã đến lúc bạn cần phải tìm hiểu về chương trình Huấn luyện đặc biệt, điên rồ nhất nhưng hiệu quả nhất và đơn giản nhất thế giới này trong khóa \"Bán hàng xuất sắc sau 7 ngày\" được biên soạn bởi giảng viên Trần Quang Minh có tại Esto', 32, NULL, NULL),
(42, 'Kỹ năng lấy đơn hàng trong bán hàng hiện đại', 'banhang_8.jpg', 399999, 'Khoá học Kỹ năng lấy đơn hàng trong bán hàng hiện đại giúp bạn tự tin lấy được những đơn hàng tiềm năng nhất, hiểu được đơn hàng theo mong muốn của khách hàng và chốt đơn đỉnh cao cực nhanh', '- Bán hàng - từ này chúng ta nghe rất quen trong thời kỳ mà hoạt động thương mại, buôn bán, trao đổi sôi động và mở rộng không chỉ trong nước mà còn khắp thế giới như hiện nay. Hình thức bán hàng đang diễn rất đa dạng, linh hoạt với nhiều phương thức, nhiều hệ thống và rất nhiều phương pháp tiếp cận, hoạt động bán hàng không chỉ diễn ra tại các nơi có nhu cầu trao đổi thương mại mà còn diễn ra trong gia đình, các mối quan hệ cá nhân và ngay trong giao tiếp hàng ngày của mỗi người. Nhưng việc bán được hàng, hay nói cách khác là bán cho được một sản phẩm,dịch vụ hay ý tưởng nào đó thì không dễ dàng chút nào vì thị trường rất cạnh tranh, mình có sản phẩm này, đối thủ cũng có sản phẩm khác không thua kém.\r\n- Như vậy, để bán được hàng thì vai trò và kỹ năng của người bán hàng rất rất quan trọng, nếu bạn là người bán hàng, nhiều kỹ năng khác của bạn thật tuyệt vời, nhưng cuối cùng bạn không biết cách lấy được đơn hàng thì quá trình bán hàng xem như thất bại vì chưa bán được sản phầm cho người mua.\r\n- Do vậy, kỹ năng lấy được đơn đặt hàng theo mong muốn của mình sau quá trình \"vòng vo tam quốc\" với khách hàng là rất cần thiết, Khóa học \"KỸ NĂNG LẤY ĐƠN HÀNG TRONG BÁN HÀNG HIỆN ĐẠI\" sẽ giúp các bạn biết cách lấy đơn hàng sao cho hiệu quả nhất.', 33, NULL, NULL),
(43, 'Bí quyết trẻ đẹp từ trong ra ngoài', 'suckhoe_1.jpg', 599000, 'Là con gái thì phải biết \"Làm trẻ đẹp da từ trong da ngoài\". Biết cách xây dựng nền tảng cho bản thân để trở nên đẹp, thấy giá trị của bản thân và yêu bản thân hơn.', '- Đây là khóa học dạy kĩ năng sống và phát triển con người, dành cho phụ nữ trên 18 tuổi. Khóa học đã được tổ chức cho hơn 20,000 phụ nữ trên toàn thế giới, phổ biến tại hơn 30 quốc gia, nay đã có mặt tại Esto để giúp các bạn gái, những phụ nữ có được những bí quyết để trẻ đẹp, khỏe khoắn, hấp dẫn ngay từ bên trong.   \r\n- Trong cuộc sống, không có thành công nào trải đầy hoa hồng. Chẳng bao giờ tiền tài rớt xuống chỉ sau một giấc ngủ say. Chính vì vậy, hãy cố gắng cải thiện bản thân từng ngày, kiên trì từng chút một và không khuất phục trước thất bại. Hãy đẹp theo cách của riêng bạn, đẹp từ bên trong.', 34, 15, NULL),
(44, 'Massage dưỡng sinh Đầu - Vai - Gáy', 'suckhoe_2.jpg', 399999, 'Massage là một phương pháp giúp bảo vệ sức khỏe và thư giãn hệ thần kinh. Massage thường xuyên nhằm tăng cường thể chất, củng cố hệ miễn dịch để chăm sóc bản thân và gia đình mình một cách hiệu quả.', '- Phương pháp Massage dưỡng sinh đầu - vai - gáy là phương pháp bảo vệ sức khỏe và thư giãn hệ thần kinh hiệu quả nhất, giúp tăng cường thể chất, củng cố hệ miễn dịch, nâng cao sức đề kháng cho cơ thể.\r\n- Vùng đầu, vai, gáy là những bộ phận quan trọng của cơ thể, thường xuyên massage đầu, vai, gáy có tác dụng thúc đẩy sự tuần hoàn máu, cải thiện việc cung cấp máu cho não bộ, tốt cho hệ thần kinh trung ương. Ngoài ra, Massage còn giúp cho tình thần thoải mái, giúp ngủ ngon, phòng tránh các bệnh về suy nhược thần kinh, các bệnh về mạch máu não, tăng cường chức năng điều tiết các cơ quan trong cơ thể.\r\n- Ngoài ra, sử dụng liệu pháp massage còn hỗ trợ cung cấp máu đến các khớp xương, gân cơ, dây chằng được tốt hơn. Nhờ đó làm gia tăng sự tiết dịch giúp dây chằng luôn giữ được tính đàn hồi. Nếu thực hiện đúng kỹ thuật Massage có thể mang lại những hiệu quả tốt cho sức khỏe người bệnh. ', 35, 15, NULL),
(45, 'Tập Yoga cơ bản ngay tại nhà với Nguyễn Hiếu', 'suckhoe_3.jpg', 250000, 'Học Yoga cơ bản ngay tại nhà giúp cải thiện sức khoẻ tinh thần, thể chất của bạn. Ngoài ra, việc học Yoga Online tại nhà cũng giúp bạn tiết kiệm được nhiều thời gian và chi phí so với việc học ở các trung tâm.', '- Các bài giảng trong khóa học được hướng dẫn chi tiết bởi đại sứ Yoga.\r\n- Với lộ trình khóa học được thiết kế gồm nhiều bài giảng. Kết thúc khóa học yoga tại nhà này bạn sẽ biết cách tập một số động tác Yoga cơ bản ngay tại nhà, giúp cải thiện cơ bắp, tăng tính linh hoạt, giúp cân bằng, thư giãn và giảm stress. Không những thế những bài tập Yoga trong khóa học này còn giúp bạn giảm các triệu trứng của bệnh trầm cảm, lo âu và đau mãn tính…', 36, 15, NULL),
(46, '36 Thế Yoga tăng cường sinh lý', 'suckhoe_4.jpg', 350000, 'Bài tập kích hoạt sinh lực, tăng sự linh hoạt, quyến rũ, tạo niềm vui cuộc sống, hạnh phúc gia đình.', '- Với 36 Thế tăng cường sinh lý được hướng dẫn chi tiết bởi Đại sứ Yoga Nguyễn Hiếu, bạn không chỉ cảm thấy cơ thể được thanh lọc nhẹ nhàng, uyển chuyển, linh hoạt và quyến rũ hơn mà còn giúp kích hoạt sinh lực, tạo niềm vui trong cuộc sống.\r\n- Thêm một điểm đặc biệt của khóa học là mua một lần sở hữu trọn đời. Bạn có thể học mọi lúc, mọi nơi khi điện thoại hoặc máy tính có kết nối Internet. Điều này giúp bạn chủ động hơn trong việc học, tiết kiệm thời gian và chi phí so với hình thức học offline tại trung tâm. ', 36, 15, NULL);
INSERT INTO `khoahoc` (`MAKH`, `TENKH`, `ANH`, `DONGIA`, `GIOITHIEUKH`, `CHITIETKH`, `MAGV`, `MADM`, `TRUCTUYEN`) VALUES
(47, 'Yoga cho Thân Khỏe, Tâm An', 'suckhoe_5.jpg', 599000, 'Khóa học giúp bạn cảm nhận chuyển biến tích cực về thể chất lẫn tinh thần. Nhờ đó bạn có thể làm việc hiệu quả và tận hưởng cuộc sống với năng lượng dồi dào.', '- Sức khoẻ là nền tảng của hạnh phúc, nhưng cuộc sống bận rộn dễ khiến chúng ta lơ là việc chăm sóc sức khoẻ. Dẫn tới nhiều vấn đề về thể chất lẫn tinh thần như mệt mỏi, đau nhức, căng thẳng, trầm cảm.  Với khoá học \"Yoga cho Thân Khoẻ, Tâm An\", Milena sẽ đồng hành cùng bạn mỗi ngày để giúp bạn trở nên khoẻ khoắn và hạnh phúc hơn.  \r\n- Khoá học được hướng dẫn bởi giảng viên Milena Nguyễn - Giảng viên Yoga quốc tế, diễn giả, blogger nổi tiếng, người sáng lập ra Soulful Garden - nơi phụ nữ tìm lại vẻ đẹp và tình yêu qua Yoga, Pilates, Thiền, và Nghệ Thuật. Những chia sẻ của chị về sức khoẻ, tình yêu, và cuộc sống được yêu thích bởi độc giả khắp thế giới.', 37, 15, NULL),
(48, 'Yoga chữa bệnh trị liệu cho cột sống', 'suckhoe_6.jpg', 399999, 'Đại sứ Yoga Nguyễn Hiếu hướng dẫn bạn 20 bài tập Yoga chữa bệnh trị liệu cho cột sống giúp bạn có thân hình xương khớp dẻo dai.', '- Cơ thể là kiệt tác của tạo hóa và cột sống chính là trụ cột vững chắc, nơi tập trung hơn 90% các dây thần kinh dẫn truyền trực tiếp lên não bộ, điều khiển chức năng vận động. Nếu cột sống bị tổn thương dễ gây ra những biến chứng làm ảnh hưởng đến công việc và cuộc sống của chúng ta.Và Yoga được biết đến là một phương pháp trị liệu tự nhiên giúp phục hồi chức năng, gia tăng sức khỏe và điều hòa cơ thể mà không cần dùng thuốc.\r\n- Tất cả chúng ta đều có thể tự cải thiện chức năng bằng phương pháp Yoga trị liệu cột sống để có một cơ thể dẻo dai khỏe mạnh. Đến với khóa học Online Yoga chữa bệnh trị liệu cột sống của giảng viên Nguyễn Hiếu sẽ mang đến cho bạn chế độ trị liệu và điều dưỡng hoàn hảo từ chế độ dinh dưỡng đến xây dựng phương pháp luyện tập hiệu quả cao.', 36, 15, NULL),
(49, 'Yoga 30 ngày, con người mới - toàn diện trong ngoài', 'suckhoe_7.jpg', 599000, 'Chỉ với 30 ngày học Yoga giúp bạn trở thành con người hoàn toàn mới- Yoga giúp bạn hiểu sâu hơn về cơ thể mình tâm trí trở nên sáng khoái hơn, sức khoẻ dồi dào', '- Trong cuộc sống hiện đại ngày nay, bên cạnh những công việc hằng ngày tất cả mọi người đều quan tâm đến sức khỏe, sắc đẹp không chỉ có chị em phụ nữ mà các phái nam cũng theo đuổi bộ môn yoga này bên cạnh tập gym hoặc loại hình khác.\r\n- Chỉ với các bài tập đơn giản, sau một tuần bạn sẽ cảm nhận được sự thay đổi khác biệt về cơ thể, sự chuyển động linh hoạt và nhẹ nhàng hơn trong từng cử chỉ sẽ làm bạn cảm thấy phấn khởi và tự tin trong cuộc sống. Gắn kết lâu dài với những bài tập này mỗi ngày bạn sẽ càng yêu thích và đam mê nó nhiều hơn. \r\n- Chỉ 15 phút mỗi ngày, với tuyển tập Clip được biên soạn tỉ mỉ, sắp xếp công phu, truyền đạt ngắn gọn, DiỄN ĐẠT SÚC TÍCH, Alex Vinh tài tình đưa người tập những điều then chốt, căn bản nhất nhưng không kém phần thú vị, trong khoảng thời gian quý giá của mỗi người. ', 38, 15, NULL),
(50, 'Yoga tăng cường sinh lý, giãn cơ, giảm stress dành cho nam giới', 'suckhoe_8.jpg', 500000, 'Khóa học chia sẻ bí quyết tập yoga hiệu quả giúp giảm stress, kích thích sinh lực, gia tăng hạnh phúc gia đình', '- Khóa học được thiết kế riêng cho nam giới, cung cấp đầy đủ những điều căn bản, nền tảng cho các bạn nam để tập yoga đạt kết quả, từ việc hít thở, lợi ích về cơ thể, tâm trí, những lưu ý,,,\r\n- Với các bài tập, các động tác, cách hít thở, kiểm soát cơ thể các bạn sẽ đạt được những mục tiêu tăng cường sinh lý, một cuộc sống viên mãn hạnh phúc của gia đình mình. Khoá học bao gồm 21 bài, trong đó các bài tập, kỹ thuật được chọn lọc từ các bậc thầy yoga, thiền, khí công, thái cực.\r\n- Đến với khoá học bạn sẽ tìm được không gian riêng tư dành cho chính mình, giảng viên có thể theo dõi tiến độ của bạn trong suốt quá trình học trong chính ngôi nhà bạn. Tất cả được cô đọng một cách khoa học, đem đến cho học viên dù ở mọi trình độ yoga, lứa tuổi hoặc đặc điểm ngành nghề.', 38, 15, b'0'),
(51, 'Tự học tiếng Hàn thật dễ - Sơ cấp 1', 'tienghan_1.jpg', 350000, 'Khoá học tiếng Hàn sơ cấp giúp bạn nâng cao vốn từ vựng, ngữ pháp theo chủ đề, tự tin giao tiếp cơ bản với người Hàn Quốc, phát âm chuẩn - phản xạ nhanh.', '- Hướng dẫn bạn cách đọc và giải thích từ vựng trong mỗi bài\r\n- Giải thích ngữ pháp trong các bài của giáo trình, so sánh các ngữ pháp tương đồng\r\n- Hướng dẫn làm các kỹ năng nghe, nói, đọc, viết trong giáo trình\r\n- Đóng vai cùng học viên trong các bài hội thoại thực hành nói theo yêu cầu của sách\r\n- Hướng dẫn phát âm chuẩn.', 88, 8, NULL),
(52, 'Tự học tiếng Hàn thật dễ - Trung cấp 1', 'tienghan_2.jpg', 659999, 'Dựa trên giáo trình Tiếng Hàn tổng hợp dành cho người Việt - Quyển 3, khóa học giúp bạn tự học Tiếng Hàn trung cấp ngay tại nhà.', '- Hướng dẫn đọc và giải thích từ vựng trong mỗi bài\r\n- Giải thích ngữ pháp trong các bài của giáo trình, so sánh các ngữ pháp tương đồng\r\n- Hướng dẫn học viên làm các kỹ năng nghe, nói, đọc, viết trong giáo trình\r\n- Đóng vai cùng học viên trong các bài hội thoại thực hành nói theo yêu cầu của sách\r\n- Hướng dẫn phát âm chuẩn', 88, 8, NULL),
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
(98, 'Tiếng Nhật giao tiếp N5', 'tiengnhat_16.jpg', 599000, 'Tối ưu giao tiếp tiếng Nhật - N5', '- Có phải bạn đang chuẩn bị vào làm cho công ty Nhật hoặc đang làm trong công ty Nhật? \r\n- Bạn chuẩn bị đi du học hoặc chuẩn bị kết hôn với người Nhật và có kế hoạch sinh sống ở Nhật Bản lâu dài?\r\n- Bạn là chủ doanh nghiệp có giao dịch với đối tác Nhật bản và gặp khó khăn trong việc tuyển dụng nhân viên nói tiếng Nhật, thuê phiên dịch với chi phí rất cao mà chưa được việc?\r\n- Bạn muốn học tiếng Nhật nhưng lại không có thời gian đến trung tâm, hoặc trung tâm quá xa với chỗ ở?\r\n- Bạn đã học rồi nhưng mất cảm hứng do lần đầu tiếp xúc với tiếng Nhật không thành công nên bỏ dở?\r\nĐến đây tôi xin chúc mừng bạn đã tìm thấy khóa học giao tiếp phù hợp nhất, thực tế nhất ở Việt Nam đến thời điểm hiện nay rồi đó! Khóa học tiếng Nhật này sẽ tập trung nhiều vào nâng cao khả năng nói, giao tiếp của bạn. Không chỉ giao tiếp, chương trình cũng cung cấp cho các bạn đầy đủ hệ thống ngữ pháp, từ vựng, để bạn có thể tự xây dựng hội thoại trong giao tiếp xã hội, công sở và tại môi trường kinh doanh. Thông qua các tính huống thật, chúng tôi đưa tới cho các bạn những thước film, hình ảnh bối cảnh cuộc sống, công sở, văn hóa, suy nghĩ, tác phong của người Nhật. Khi bước vào đời thực bạn sẽ thấy quen thuộc và nhanh chóng bắt nhịp khi giao tiếp với người Nhật hơn. Bạn được hơn cả kỹ năng giao tiếp đó là trở thành người có khả năng tư duy như người Nhật khi giao tiếp với người Nhật.', 102, 12, NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `ID` int(11) NOT NULL,
  `HOTEN` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NGAYSINH` datetime DEFAULT NULL,
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
(1, 'Hà Kế Tú', '2021-12-03 04:15:17', 1, NULL, '0364050203', 'haketu123@gmail.com', '', 2, b'0', NULL, 'Giảng viên Hà Kế Tú - Haketu với kinh nghiệm 12 năm để chơi đàn và nghiên cứu về âm nhạc, 5 năm kinh nghiệm tổ chức các khóa học Guitar offline tại Úc và Hà Nội, đào tạo hàng trăm học viên trong những khóa: Guitar cổ điển, Fingerstyle và Đệm hát.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:09'),
(2, 'Đặng Trọng Khang', '2021-12-03 04:26:44', 1, NULL, '0364070402', 'dangtrongkhang123@gmail.com', '', 2, b'1', NULL, 'Giảng viên Đặng Trọng Khang là người có thâm niên đầu tư thực tế gần 15 năm trong thị trường chứng khoán từ 2006 - 2020. Người chia sẻ về Phương pháp đầu tư chứng khoán theo Luật Nhân Quả - Causality Investing', NULL, '2021-12-07 19:51:43', '2021-12-09 13:51:13'),
(3, 'Đỗ Trung Thành', '2021-12-03 04:31:03', 1, NULL, '0364050804', 'dotrungthanh123@gmail.com', '', 2, b'0', NULL, 'Giảng viên Trường Cao đẳng Sư phạm Yên Bái, Thạc sỹ Khoa học Máy tính.Có kinh nghiệm giảng dạy Tin học Văn phòng; thiết kế đồ họa; biên tập âm thanh; biên tập videos; lập trình thiết kế, xây dựng website, xây dựng phần mềm với các ngôn ngữ C# và PHP', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:09'),
(4, 'Lê Thẩm Dương', '2021-12-03 04:35:31', 1, NULL, '0364050834', 'lethamduong123@gmail.com', '', 2, b'0', NULL, 'Diễn giả chuyên nghiệp, chuyên gia hàng đầu trong nhiều lĩnh vực như Tài chính, Lãnh đạo, Nhân sự …', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:09'),
(5, 'Trần Thị Minh Hải', '2021-12-03 04:36:44', 0, NULL, '0364070403', 'tranthiminhhai123@gmail.com', NULL, 2, b'0', NULL, 'Trần Thị Minh Hải phụ trách chuyên môn và Đào tạo Chương trình Làm chủ Giọng nói – I Love My Voice trực thuộc Công ty TNHH Đào tạo và Hỗ trợ Giáo dục 2A&H (từ năm 2012 đến nay)', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(6, 'Hiển Râu', '2021-12-03 04:40:41', 1, NULL, '0364020304', 'hienrau123@gmail.com', NULL, 2, b'1', NULL, 'Giảng viên guitar với gần 10 năm kinh nghiệm giảng dạy hơn 300.000 học viên trên toàn quốc. Với phong cách trẻ trung và năng động, Hiển Râu đã thu hút được hơn 125 nghìn lượt thích với trang Hiển Râu Guitar và gần 250 nghìn lượt theo dõi kênh Youtube Hiển Râu.\r\n', NULL, '2021-12-07 19:51:43', '2021-12-16 13:38:54'),
(7, 'Hoàng Linh', '2021-12-03 05:11:21', 1, NULL, '0364050810', 'hoanglinh123@gmail.com', NULL, 2, b'0', NULL, 'Thạc sĩ Kinh tế - Master NLP Hoàng Linh (Link PUA) được biết đến như người đầu tiên đặt nền móng cho lĩnh vực ‘’Nghệ thuật quyến rũ’’ tại Việt Nam. Anh nổi tiếng trong giới trẻ qua những Clip ‘’Tán gái bá đạo’’ hay những Vlog chia sẻ kinh nghiệm thu hút hàng triệu Views trên Youtube.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(8, 'Nguyễn Ngọc Long', '2021-12-03 05:14:38', 1, NULL, '0364050845', 'nguyenngoclong123@gmail.com', NULL, 2, b'0', NULL, 'Giảng viên - Leader Team Google Ads IVIET SOLUTION', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(9, 'Y Lợi Ẩn', '2021-12-03 05:16:35', 1, NULL, '0364020401', 'yloian123@gmail.com', NULL, 2, b'0', NULL, 'Đầu bếp Y Lợi Ẩn bắt đầu sự nghiệp đầu bếp chuyên nghiệp từ năm 1998 tới nay đã có hơn 20 kinh nghiệp nghề bếp chuyên các món ẩm thực hương vị Tứ Xuyên Hàng Châu với kinh nghiệm giảng dạy 8 năm', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(10, 'Nguyễn Lê Hoàng', '2021-12-03 05:18:44', 1, NULL, '0364070423', 'nguyenlehoang123@gmail.com', NULL, 2, b'0', NULL, 'Nguyễn Lê Hoàng - CEO - Sáng lập Học Viện Kế Toán Việt Nam - Nơi huấn luyện kế toán thực tế chất lượng, uy tín, tận trình, trách nhiệm và chuyên sâu. Hơn 10 năm kinh nghiệm làm kế toán và huấn luyện kế toán thực tế', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(11, 'Phạm Huy Long', '2021-12-03 05:22:28', 1, NULL, '0364070422', 'phamhuylong123@gmail.com', NULL, 2, b'0', NULL, 'Giám đốc Công ty Cổ phần ANZMedia chuyên triển khai hệ thống Marketing Online cho hàng trăm doanh nghiệp.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(12, 'Cụ Minh Rock', '2021-12-03 05:23:50', 1, NULL, '0364070433', 'cuminhrock123@gmail.com', NULL, 2, b'0', NULL, 'Cụ Minh Rock - Tên Thật là Nguyễn Anh Minh - Guitarist, Composer, VIDEO & MUSIC producer.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(13, 'Nguyễn Tài Tuệ', '2021-12-03 05:25:17', 1, NULL, '0364070444', 'nguyentaitue123@gmail.com', NULL, 2, b'0', NULL, 'Nguyễn Tài Tuệ hiện đang là Founder & CEO công ty TNHH Clecard Việt Nam Nguyễn Tài Tuệ, 1 trong số ít công ty ở Việt Nam áp dụng mô hình marketing thông minh', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(14, 'Dương Duy Bách', '2021-12-03 06:00:08', 1, NULL, '0364050216', 'duongduybach123@gmail.com', NULL, 2, b'0', NULL, 'Diễn giả, Doanh nhân trẻ Dương Duy Bách - người sáng lập công ty giáo dục và tổ chức sự kiện FLY Việt Nam.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(15, 'Cấn Mạnh Linh', '2021-12-03 06:01:27', 1, NULL, '0364020411', 'canmanhlinh123@gmail.com', NULL, 2, b'1', NULL, 'Kinh nghiệm 5 năm làm việc với thị trường công nghệ Trung Quốc. Top những chuyên gia đào tạo Tiktok sớm nhất Việt Nam', NULL, '2021-12-07 19:51:43', '2021-12-16 13:38:51'),
(16, 'Trần Hoa', '2021-12-03 06:07:33', 0, NULL, '0364020344', 'tranhoa123@gmail.com', NULL, 2, b'0', NULL, 'Kinh nghiệm hơn 5 năm trong lĩnh vực kinh doanh bán hàng và 3 năm thực chiến về Marketing online đã đúc kết được rất nhiều kinh nghiệm trong nghề.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(17, 'Nguyễn Minh Cường', '2021-12-03 06:09:44', 1, NULL, '0364050233', 'nguyenminhcuong123@gmail.com', NULL, 2, b'0', NULL, 'Giảng Viên Nguyễn Minh Cường không chỉ là một nhà diễn giả đào tạo kỹ năng kinh doanh, khai phá khả năng con người mà còn là người làm việc nhiều năm trong lĩnh vực kinh doanh và đạt những thành tích xuất sắc.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(18, 'Trần Quốc Minh', '2021-12-03 06:11:50', 1, NULL, '0364070456', 'tranquocminh@gmail.com', NULL, 2, b'0', NULL, 'Chuyên gia Trần Quốc Minh hiện là nhà đầu tư tài chính, trader trên lĩnh vực Forex và Vàng', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(19, 'Nguyễn Chương', '2021-12-03 06:13:27', 1, NULL, '0364050811', 'nguyenchuong123@gmail.com', NULL, 2, b'0', NULL, 'Chuyên gia huấn luyện kỹ năng mềm hơn 5 năm, chuyên gia huấn luyện kinh doanh sàn TMĐT hơn 3 năm, có 7 năm kinh nghiệm bán hàng B2B, B2C & TMĐT', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(20, 'KNSV TV', '2021-12-03 06:14:57', 1, NULL, '0364070498', 'knsvtv123@gmail.com', NULL, 2, b'0', NULL, 'Hơn 3 năm kinh nghiệm đào tạo về video marketing, và xây dựng kênh youtube từ con số 0, 4 năm liên tục trong lĩnh vực MMO, và Digital Marketing, 3 năm liên tục giảng dạy và đào tạo Ekip của mình về thiết kế đồ họa.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(21, 'Ruby Thảo Trần', '2021-12-03 06:37:28', 0, NULL, '0364070488', 'rubythaotran123@gmail.com', NULL, 2, b'0', NULL, 'Ruby Thảo Trần nhận bằng thạc sỹ Lý Luận và phương pháp giảng dạy tiếng Anh của Southern Queensland Australia University', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(22, 'Nguyễn Cảnh Tuấn', '2021-12-03 06:38:42', 1, NULL, '0364050234', 'nguyencanhtuan123@gmail.com', NULL, 2, b'0', NULL, 'Là giảng viên Tiếng Anh có kinh nghiệm giảng dạy hơn 6 năm tại tổ chức học bổng Passerelles Numeriques và các trung tâm Tiếng Anh lớn tại Đà Nẵng như Trung tâm Việt Úc, Việt Mỹ và Scots.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(23, 'Tracey Peace', '2021-12-03 06:40:31', 0, NULL, '0364050898', 'traceypeace123@gmail.com', NULL, 2, b'0', NULL, 'Sáng lập và điều hành Tracey’s Home,chuyên nghành nghiên cứu ngôn ngữ học tại Yersin University, từng quản lí resort 5 sao tiêu chuẩn quốc tế.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(24, 'Huong Elena', '2021-12-03 06:43:56', 0, NULL, '0364020343', 'huongelena123@gmail.com', NULL, 2, b'0', NULL, 'Giảng viên tiếng Anh tại Trung tâm Tiếng Anh ETC', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(25, 'Bùi Đức Tiến', '2021-12-03 06:46:47', 1, NULL, '0364050812', 'buiductien123@gmail.com', NULL, 2, b'0', NULL, 'Thạc sĩ ngôn ngữ học, giảng viên chính tại Anh Ngữ EMC - English Master Center, Có nhiều kinh nghiệm trong việc ứng dụng CNTT trong giảng dạy, đặc biệt là dùng các phần mềm, ứng dụng để thiết kế các bài học mang tính tương tác cao.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(26, 'Vũ Thùy Linh', '2021-12-03 06:48:08', 0, NULL, '0364050223', 'vuthuylinh123@gmai.com', NULL, 2, b'0', NULL, 'Vũ Thùy Linh Giám đốc công ty TNHH đào tạo Lego, cô là nhà đào tạo, tác giả, diễn giả truyền cảm hứng học tiếng Anh cho hàng triệu người Việt Nam.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(27, 'Trần Văn Tuấn', '2021-12-03 12:40:44', 1, NULL, '0364050843', 'tranvantuan123@gmail.com', NULL, 2, b'0', NULL, 'Chuyên gia tư vấn, nhà đào tạo bán hàng Trần Văn Tuấn đã huấn luyện cho hơn 5.000 người về kinh doanh, bán hàng,người sáng lập và Giám đốc điều hành của Công ty Chiến Lược và Đào Tạo TASA', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(28, 'Bùi Quang Dương', '2021-12-03 12:42:26', 1, NULL, '0364020312', 'buiquangduong123@gmail.com', NULL, 2, b'0', NULL, 'Nhà huấn luyện bán hàng có trên 8 năm kinh nghiệm trong vai trò chuyên gia huấn luyện Sales ở Hà Nội và từng là lãnh đạo của rất nhiều đội ngũ kinh doanh xuất chúng với doanh số gấp 2-5 lần trong nhiều năm liền. Anh cũng là founder của 1 tổ chức giáo dục tại Hà Nội.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(29, 'Hán Quang Dự', '2021-12-03 12:44:57', 1, NULL, '0364070497', 'hanquangdu123@gmail.com', NULL, 2, b'0', NULL, 'Hán Quang Dự được mọi người biết đến như một người truyền cảm hứng mãnh liệt với các chương trình đào tạo dạy học kinh doanh online nổi tiếng đang được tổ chức tại Hà Nội và Hồ Chí Minh: Bán hàng như hơi thở, Email marketing dành cho chủ doanh nghiệp, Nghệ thuật viết sách, xây dựng hệ thống bán hàng tự động, Thuyết trình bán hàng.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(30, 'Trần Ngọc Thiện', '2021-12-03 12:46:57', 1, NULL, '0364050243', 'tranngocthien123@gmail.com', NULL, 2, b'0', NULL, 'Mr Trần Ngọc Thiện từng phụ trách hoạt động đào tạo tại Công ty CPCN Vĩnh Tường, Dược phẩm Nhất Tâm. Cũng như đào tạo tại một số trường đại học: Kinh tế Quốc dân, Ngoại thương, Thương mại, Lao động Xã hội, ĐH Công nghệ - ĐH Quốc gia,...Kinh nghiệm chuyên sâu về hoạt động dịch vụ cũng như tổ chức sự kiện khách hàng tại nhiều nước trên thế giới: Thái Lan, Singapore, Malaysia, Hàn Quốc, Dubai. Liên kết đào tạo tại một số siêu thị lớn: Co.opMart, Lotte, Fivi,...', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(31, 'Nguyễn Vĩnh Cường', '2021-12-03 12:49:10', 1, NULL, '0364020334', 'nguyenvinhcuong123@gmail.com', NULL, 2, b'0', NULL, 'Diễn giả - Doanh nhân Nguyễn Vĩnh Cường Chuyên gia Marketing Online với hơn 11 năm kinh nghiệm Chuyên gia Marketing với hàng nghìn học viên', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(32, 'Trần Quang Minh', '2021-12-03 12:50:50', 1, NULL, '0364020375', 'tranquangminh123@gmail.com', NULL, 2, b'0', NULL, 'Chủ tịch HĐQT của Salesmaster - Tổ chức huấn luyện Sales & Telesales bùng nổ nhất Việt Nam.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(33, 'Nguyễn Duy Kha', '2021-12-03 12:52:10', 1, NULL, '0364020336', 'nguyenduykha123@gmail.com', NULL, 2, b'0', NULL, 'Thạc sỹ Nguyễn Duy Kha có 20 năm kinh nghiệm làm việc cho các tập đoàn Đa Quốc Gia lớn ở vị trí Quản lý cấp cao và hiện nay đang làm Giám Đốc Kinh Doanh Toàn Quốc cho thị trường Việt Nam của Công ty Fonterra Brands Vietnam - một Công ty của Newzealand.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(34, 'Vũ Ngọc Hoa', '2021-12-03 13:42:06', 0, NULL, '0364070494', 'vungochoa123@gmail.com', NULL, 2, b'0', NULL, 'Thạc sĩ Xã hội học Vũ Ngọc Hoa, nhà đào tạo - huấn luyện phát triển con người đã có 10 năm kinh nghiệm làm việc và đào tạo cộng đồng, phát triển con người trong các tổ chức phi chính phủ quốc tế và các công ty đào tạo.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(35, 'Tina Đỗ', '2021-12-03 13:43:42', 0, NULL, '0364050276', 'tinado123@gmail.com', NULL, 2, b'0', NULL, 'Chuyên gia đào tạo massage dưỡng sinh Tina Đỗ - Spa Dưỡng Sinh, đã có trên 16 năm giảng dạy, biên tập tài liệu, giáo trình & sách về massage dưỡng sinh.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(36, 'Nguyễn Hiếu', '2021-12-03 13:45:03', 0, NULL, '0364050874', 'nguyenhieu123@gmail.com', NULL, 2, b'0', NULL, 'Chuyên gia Yoga Nguyễn Hiếu đã có hơn 12 năm nghiên cứu và dạy học Yoga và học thiền tại các khoá học online trên Unica và các trung tâm và đã huấn luyện cho hàng nghìn học viên khắp Việt Nam và thế giới.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(37, 'Milena Nguyễn', '2021-12-03 13:46:21', 0, NULL, '0364050873', 'milenanguyen123@gmail.com', NULL, 2, b'0', NULL, 'Milena Nguyễn người sáng lập ra Soulful Garden - nơi phụ nữ tìm thấy vẻ đẹp và tình yêu qua Yoga, Pilates, Thiền, và Nghệ Thuật.', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:51'),
(38, 'Alex Vinh', '2021-12-03 13:47:56', 1, NULL, '0364020341', 'alexvinh123@gmail.com', '', 2, b'0', NULL, 'Alex Vinh Giám đốc trung tâm Mint Centre - Trung tâm ứng dụng và đào tạo Yoga - Trị liệu tự nhiên', NULL, '2021-12-07 19:51:43', '2021-12-14 13:29:09'),
(39, 'Test', '2021-12-09 00:00:00', 1, NULL, '0123456789', 'test@gmail.com', '$2y$10$GopENx2dYBBKqR8o4iaSc.CSd5Duay9pHnno88A1D25.S9F2BJixG', 1, b'0', NULL, NULL, NULL, '2021-12-07 12:55:35', '2021-12-14 13:29:09'),
(41, 'nguyenquangvinh2', '2000-01-21 00:00:00', 1, NULL, '0899305132', 'khanhnguyentk6@gmail.com', '$2y$10$ogVQ0.MdYEZLAHYSBCSkd.yr4qnqufka5qHzxbZHfMzH./gupkoEO', 1, b'0', NULL, NULL, NULL, '2021-12-07 21:18:08', '2021-12-14 15:58:03'),
(87, 'nguyenquangvinh', '2021-12-17 00:00:00', 1, NULL, '0899305132', 'vinhtk0209@gmail.com', '$2y$10$uUWPIyxpBzAIKh5JPEoakuwGppdvupxWJgxM8m0DoXNPPZK8jbLW2', 1, b'1', 'zzICsHgOkCSuOnOscJp7', NULL, NULL, '2021-12-14 08:53:40', '2021-12-21 11:19:30'),
(88, 'Nguyễn Văn Khánh', '2021-12-17 18:19:37', 1, NULL, '0364070443', 'nguyenvankhanh123@gmail.com', NULL, 2, b'0', NULL, 'Nguyễn Văn Khánh là cựu sinh viên khoa tiếng Hàn Quốc, Trường đại học Hà Nội. Hiện anh là giáo viên tiếng Hàn và là giám đốc trung tâm “Tiếng Hàn bá đạo thầy Khánh” ở Mỹ Đình, Hà Nội.\r\n', NULL, '2021-12-17 17:20:31', '2021-12-18 00:21:24'),
(89, 'Nguyễn Vy Thảo Trang', '2021-12-17 18:23:41', 0, NULL, '0364050805', 'nguyenvythaotrang123@gmail.com', NULL, 2, b'0', NULL, 'Thạc sĩ chuyên ngành Giáo dục tiếng Hàn bằng ngôn ngữ nước ngoài, đại học Dongguk (Seoul), có kinh nghiệm giảng dạy phong phú tại các trung tâm tiếng Hàn.', NULL, '2021-12-17 17:24:57', '2021-12-18 00:24:57'),
(90, ' Châu Thùy Trang', '2021-12-17 18:25:13', 0, NULL, '0364050202', 'chauthuytrang123@gmail.com', NULL, 2, b'0', NULL, 'Hiện đang công tác giảng dạy tiếng Việt và tiếng Hàn cho đối tượng người Hàn và người Việt, kinh nghiệm dạy học đã được 6 năm dạy song ngữ tiếng Hàn và tiếng Việt.', NULL, '2021-12-17 17:27:47', '2021-12-18 00:27:47'),
(91, ' Kim Min Su', '2021-12-17 18:55:28', 1, NULL, '0364050201', 'kimminsu123@gmail.com', NULL, 2, b'0', NULL, 'Kim Min Su là Giảng dạy tiếng Hàn doanh nghiệp BNI 2 năm tại Việt Nam, đồng tác giả giáo trình BIGMAXX (Gồm 6 hệ giáo trình đã được bảo hộ bản quyền và giấy phép xuất bản). ', NULL, '2021-12-17 17:56:48', '2021-12-18 00:56:48'),
(92, 'Nguyễn Thị Trang (Trang Korean)', '2021-12-17 19:03:32', 0, NULL, '0364050204', 'trangkorea123@gmail.com', NULL, 2, b'0', NULL, 'Tốt nghiệp cử nhân loại giỏi, Trường Đại học ngoại ngữ, Đại học quốc gia hà nội, có nhiều năm kinh nghiệm làm biên, phiên dịch tiếng Hàn cho các công ty và tập đoàn lớn của Hàn Quốc, tại Việt Nam cho đến nay.', NULL, '2021-12-17 18:04:36', '2021-12-18 01:04:36'),
(93, 'Nguyễn Thị Thùy Ngân', '2021-12-17 19:04:39', 0, NULL, '0364050206', 'nguyenthithuyngan123@gmail.com', NULL, 2, b'0', NULL, 'Thạc sĩ chuyên ngành Hàn Quốc học Trường Đại học Quốc gia Seoul, tiến sĩ chuyên ngành Hàn Quốc học Trường Đại học Ngoại ngữ Hàn Quốc, giáo viên tiếng Hàn trung tâm Hàn Quốc học Tổ chức di dân Hàn Quốc tại TP. Hồ Chí Minh', NULL, '2021-12-17 18:06:15', '2021-12-18 01:06:15'),
(94, 'Đỗ Ngọc Luyến', '2021-12-17 19:06:17', 0, NULL, '0364020402', 'dongocluyen123@gmail.com', NULL, 2, b'0', NULL, 'Đỗ Ngọc Luyến, giảng viên khoa tiếng Hàn của trường Đại học Khoa học Xã hội và Nhân văn Tp.HCM, giảng viên thỉnh giảng tại Đại học Yonsei, Hàn Quốc. Có gần 15 năm giảng dạy tiếng Hàn tại Việt Nam và Hàn Quốc.  ', NULL, '2021-12-17 18:07:06', '2021-12-18 01:07:06'),
(95, 'Phan Hồng Đạt', '2021-12-17 19:17:29', 1, NULL, '0364070405', 'phanhongdat123@gmail.com', NULL, 2, b'0', NULL, 'Thành lập và điều hành tại TTBCHINESE.COM, trực tiếp giảng tại channel Youtube \"TTB Chinese - Chuyên Tiếng Trung Giao Tiếp\".', NULL, '2021-12-17 18:18:16', '2021-12-18 01:18:16'),
(96, 'Hương Vy', '2021-12-17 19:22:02', 0, NULL, '0364050209', 'huongvy123@gmail.com', NULL, 2, b'0', NULL, 'Giảng viên Hương Vy - tốt nghiệp xuất sắc Đại học Ngoại Ngữ - ĐH Quốc gia Hà Nội.', NULL, '2021-12-17 18:23:46', '2021-12-18 01:23:46'),
(97, 'Nguyễn Danh Vân', '2021-12-17 19:27:46', 1, NULL, '0364050807', 'nguyendanhvan123@gmail.com', NULL, 2, b'0', NULL, 'Thạc sỹ tiếng Trung đã có trên 10 năm kinh nghiệm giảng dạy tại các trung một số trường đại học và các trung tâm tiếng trung lớn ở Hà Nội.', NULL, '2021-12-17 18:28:20', '2021-12-18 01:28:20'),
(98, 'EZ Language', '2021-12-17 19:45:31', 1, NULL, '0364050806', 'ezlanguage123@gmail.com', NULL, 2, b'0', NULL, 'Với 7 năm kinh nghiệm trong lĩnh vực giáo dục, EZ Language luôn có những đội ngũ nhân viên, giáo viên dày dặn kinh nghiệm để tạo ra những bài giảng hay nhất, tốt nhất.', NULL, '2021-12-17 18:46:31', '2021-12-18 01:46:31'),
(99, 'Ngô Trần Minh Thảo', '2021-12-17 19:58:47', 1, NULL, '0364050808', 'ngotranminhthao123@gmail.com', NULL, 2, b'0', NULL, 'Giảng viên Phòng Đào Tạo Quốc Tế, Đại Học Bách Khoa TP.HCM​​, Trưởng chương trình Kỹ sư Việt Nhật, Đại Học Bách Khoa, Đại Học Quốc Gia TP. Hồ Chí Minh.', NULL, '2021-12-17 18:59:32', '2021-12-18 01:59:32'),
(100, 'Thanh Trúc', '2021-12-17 20:11:11', 0, NULL, '0364050803', 'thanhtruc123@gmail.com', NULL, 2, b'0', NULL, 'Giảng viên Thanh Trúc tốt nghiệp trường Đại học Ngoại Ngữ Tin Học TP.HCM, chuyên ngành Nhật ngữ. Cô sở hữu bằng chứng chỉ về lớp văn hóa doanh nghiệp Nhật của Công ty Pasonatech chứng nhận. Kinh nghiệm 3 năm giảng dạy tại các Trung tâm ngoại ngữ, công ty, trường THPT…', NULL, '2021-12-17 19:11:54', '2021-12-18 02:11:54'),
(101, 'Trung tâm Nhật ngữ Toàn Tâm', '2021-12-17 20:17:57', 1, NULL, '0364070406', 'nhatngutoantam123@gmail.com', NULL, 2, b'0', NULL, 'Với những kinh nghiệm quý báu về du học chúng tôi muốn chia sẻ lại cho các bạn  “Một du học Nhật Bản” bằng những giá trị “Thực sự”: sang để học tập, học hỏi và giao lưu. Chúng tôi mong rằng những giá trị của việc du học có thể truyền đạt cho các thế hệ sau, để các bạn Việt Nam có thể rèn luyện cả về kiến thức, về ý trí và tìm được đam mê cho mỗi người. Đây cũng chính là sứ mệnh và nhiệm vụ của tôi cũng như những người cộng sự của Toàn Tâm đã chọn và đang hỗ trợ thực hiện', NULL, '2021-12-17 19:18:51', '2021-12-18 02:18:51'),
(102, ' Ngô Hương Lan', '2021-12-17 20:26:02', 0, NULL, '0364050801', 'ngohuonglan123@gmail.com', NULL, 2, b'0', NULL, 'Hơn ai hết, tiến sĩ Ngô Hương Lan hiểu rằng người Việt Nam gặp khó khăn gì khi học tiếng Nhật, cũng như những cách nào để học được tiếng Nhật một cách dễ dàng nhất. Giáo trình tiếng Nhật tại Học Nữa, do tiến sĩ Ngô Hương Lan biên soạn chính là giáo trình tiếng Nhật duy nhất dành riêng cho người Việt Nam.', NULL, '2021-12-17 19:26:42', '2021-12-18 02:26:42');

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
  ADD KEY `FK_CTHOADON_HOADON` (`MAHD`);

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
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_TAIKHOAN_QUYEN` (`LOAITK`),
  ADD KEY `FK_TAIKHOAN_CHUNGCHI` (`MACHUNGCHI`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baihoc`
--
ALTER TABLE `baihoc`
  MODIFY `MABH` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bailam`
--
ALTER TABLE `bailam`
  MODIFY `MABL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `baithi`
--
ALTER TABLE `baithi`
  MODIFY `MABT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cauhoi`
--
ALTER TABLE `cauhoi`
  MODIFY `MACH` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chungchi`
--
ALTER TABLE `chungchi`
  MODIFY `MACHUNGCHI` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chuonghoc`
--
ALTER TABLE `chuonghoc`
  MODIFY `MACHUONG` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ctbailam`
--
ALTER TABLE `ctbailam`
  MODIFY `MACT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `MADM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MAHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `khoahoc`
--
ALTER TABLE `khoahoc`
  MODIFY `MAKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MAKM` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lophoc`
--
ALTER TABLE `lophoc`
  MODIFY `MALH` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

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

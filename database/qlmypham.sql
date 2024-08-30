-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 26, 2023 lúc 08:14 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlmypham`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `note` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`note`) VALUES
('ok'),
('aosdkas fas'),
('aosdkas fas'),
('sdffd');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `ma_sp` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ten_sp` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `chi_tiet` text COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `gia_ban` decimal(18,0) DEFAULT NULL,
  `loaihang` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`ma_sp`, `ten_sp`, `chi_tiet`, `so_luong`, `gia_ban`, `loaihang`) VALUES
('sp1', 'Chanel le blanc la base', 'CHANEL LE BLANC LA BASE được làm giàu với chiết xuất từ hoa Ume, mang lại sự thoải mái và dưỡng ẩm cho da.\r\nLàm sáng và bảo vệ, công thức của sản phẩm giúp dưỡng ẩm sâu cho da. Ánh sáng được phản chiếu hoàn hảo trên da, mang lại vẻ ngoài rạng rỡ. Màu da được cân bằng, làm sáng và đều màu, với hiệu ứng trong suốt như ngọc trai.\r\nThiết kế gọn nhẹ, thích hợp mang theo bên mình giúp sản phẩm trở thành người bạn đồng hành mỗi ngày.\r\n\r\nCó ba tông màu giúp hiệu chỉnh màu da: Rosée, Orchidée và Pêche.\r\nThành phần\r\nĐược làm giàu với chiết xuất hoa Ume quý hiếm, sản phẩm giúp cấp ẩm và cải thiện làn da, giúp da mềm mại và mịn màng.\r\n\r\nCác hạt gốm bắt sáng phản chiếu và chủ động tạo ra ánh sáng, loại bỏ các khuyết điểm, hé lộ một làn da đều màu, rạng rỡ không tì vết.\r\n\r\nCác đặc tính làm sáng của sản phẩm làm tăng vẻ rạng rỡ và đồng nhất tông màu da, cho làn da sáng, đều màu, mờ vết thâm.', 50, '2000000', 'Kem lót'),
('sp10', 'POUDRE UNIVERSELLE COMPACTE', 'Một loại phấn phủ dạng nén có kết cấu mỏng nhẹ và thoáng khí, tạo hiệu ứng lì cho làn da và giúp cải thiện bề mặt kết cấu da. Thiết kế hộp dễ sử dụng, thích hợp cho du lịch, và dễ dàng trong việc dặm lại lớp trang điểm.\r\n\r\nKết quả: Một làn da rạng rỡ, tự nhiên và đều màu với hiệu ứng lì trong suốt.', 40, '1200000', 'Phấn phủ'),
('sp11', 'Nu dewy mist', 'Một loại xịt điều trị tốt hàng ngày được bổ sung axit hyaluronic, dầu jojoba và chiết xuất từ ​​​​quả lựu để làm đầy đặn & dưỡng ẩm cho làn da.', 50, '800000', 'Phấn phủ'),
('sp12', 'Les symboles de chanel les perles', 'ES SYMBOLES DE CHANEL. Phấn bắt sáng được cá nhân hóa có dập nổi biểu tượng của Thương hiệu đại diện cho bạn, và tông màu bạn lựa chọn. Sáng tạo Độc quyền với kích thước lớn.\r\n\r\nTHE PEARLS (NGỌC TRAI). Biểu tượng của sự rạng rỡ.\r\nCoco Chanel phối ngẫu hứng các chuỗi ngọc trai được đeo sát hoặc quấn vòng quanh cổ thể hiện tinh thần phóng khoáng và táo bạo, ngày hay đêm, trong thành phố và thậm chí ngoài bãi biển. Mang trong mình cả hơi ấm lẫn ánh sáng, những hạt ngọc trai giúp làm sáng nền da và đánh thức vẻ rạng rỡ nội tại cho những ai mang lên mình.\r\n\r\nVới kết cấu mỏng nhẹ, phấn bắt sáng giúp làm sáng khuôn mặt, mang lại vẻ rạng rỡ ánh ngọc trai hết mực tự nhiên, giúp làm sáng các vùng tối và tái định hình đường nét của khuôn mặt.', 15, '5000000', 'Phấn phủ'),
('sp13', 'Fantaisie de chanel', 'ES SYMBOLES DE CHANEL. Phấn bắt sáng được cá nhân hóa có dập nổi biểu tượng của Thương hiệu đại diện cho bạn, và tông màu bạn lựa chọn. Sáng tạo Độc quyền với kích thước lớn.\r\n\r\nTHE PEARLS (NGỌC TRAI). Biểu tượng của sự rạng rỡ.\r\nCoco Chanel phối ngẫu hứng các chuỗi ngọc trai được đeo sát hoặc quấn vòng quanh cổ thể hiện tinh thần phóng khoáng và táo bạo, ngày hay đêm, trong thành phố và thậm chí ngoài bãi biển. Mang trong mình cả hơi ấm lẫn ánh sáng, những hạt ngọc trai giúp làm sáng nền da và đánh thức vẻ rạng rỡ nội tại cho những ai mang lên mình.\r\n\r\nVới kết cấu mỏng nhẹ, phấn bắt sáng giúp làm sáng khuôn mặt, mang lại vẻ rạng rỡ ánh ngọc trai hết mực tự nhiên, giúp làm sáng các vùng tối và tái định hình đường nét của khuôn mặt.', 10, '3500000', 'Phấn phủ'),
('sp14', 'Diorshow iconic overcurl', 'Mascara Diorshow Iconic Overcurl đã được phát minh lại để giúp lớp trang điểm mắt trở nên dày và cong ấn tượng hơn. Được thiết kế cho mọi loại mi, nó định hình, phủ và làm dài mi đến mức tối đa chỉ sau một lần quét trong 24 giờ sử dụng. * Cọ mascara cong dễ sử dụng để tạo ra hàng mi trông dài hơn và giúp đôi mắt mở rộng hơn.\r\n\r\nMascara được làm giàu với mật hoa bông giúp hàng mi trông chắc khỏe và bóng mượt hơn mỗi ngày.\r\nThiết kế hiện đại của mascara Dior mang tính biểu tượng có dải mặt cùng màu với mascara: đen, xanh, nâu hoặc bạc lấp lánh.', 30, '1500000', 'Mascara'),
('sp15', 'Gogo Tales', 'Bảng Phấn Mắt Gogo Tales 25 Ô là sản phẩm chì kẻ mắt đến từ thương hiệu mỹ phẩm Gogo Tales nội địa Trung. Bảng mắt được thiết kế với 25 ô màu lì và nhũ với những gam màu trung tính dễ dàng phối hợp tạo ra những layout trang điểm khác nhau từ hằng ngày đến đi tiệc. \r\n\r\nHiện sản phẩm Bảng Phấn Mắt Gogo Tales Eyeshadow 25 Ô đã có mặt tại Hasaki với 4 màu: \r\n\r\nMàu 201 Rose Yam Purple\r\n\r\nMàu 202 Classic Orange\r\n\r\nMàu 203 Future Nostalgia\r\n\r\nMàu 204 Oat Milk Tea', 60, '1000000', 'Mascara'),
('sp16', 'Couture clutch eyeshadow palette', 'Bảng phấn mắt với 10 sắc thái mờ, ánh kim và sáng bóng lấy cảm hứng từ niềm đam mê của ông Yves Saint Laurent với môi trường sa mạc khắc nghiệt: cồn cát màu hổ phách, màu đồng Ma-rốc và làn da rám nắng màu đồng.', 15, '4500000', 'Mascara'),
('sp17', 'Le liner de chanel', 'Bút kẻ mắt nước với đầu cọ linh hoạt giúp kẻ mắt chuẩn xác chỉ trong một đường cọ.\r\nĐể có phong cách cá tính, kẻ từ chân mi trên và góc mắt ngoài, giúp tạo điểm nhấn và mở rộng mắt chỉ trong một bước.\r\nCông thức lâu trôi để lại một lớp màn mỏng như latex cho phép bạn kéo dài nét cọ. Chống thấm nước và chống lem, sản phẩm mang đến lớp trang điểm dày dặn suốt cả ngày dài.', 40, '900000', 'Mascara'),
('sp18', 'Son FEG', 'Serum dưỡng lông mày FEG Eyebrow Enhancer hàng Mỹ chính hãng với chiết xuất thiên nhiên vô cùng lành tính và an toàn cho việc kích thích sự phát triển của lông mày.\r\n-----------------------\r\n- Công dụng của dưỡng lông mày FEG Eyebrow Enhancer\r\n+ Dưỡng mày dày đậm tự nhiên từ gốc đến ngọn\r\n+ Kích mày con mọc dày, dài nhanh chóng\r\n+ Ngăn ngừa lông mày rụng đáng kể.\r\n+ Bảo vệ lông mày khỏi các tác động xấu từ môi trường: ánh nắng, bụi bẩn…', 70, '800000', 'Son môi'),
('sp19', 'La palette sourcils', 'Bộ sản phẩm dành cho chân mày bao gồm 1 wax định hình, 1 bột tán và 4 phụ kiện đi kèm. Sự lựa chọn hoàn hảo để tạo dáng chân mày một cách sắc sảo nhưng vẫn tự nhiên, tinh tế.\r\nSản phẩm bao gồm 3 tông màu khác nhau, phù hợp cho mọi nhu cầu.', 25, '1200000', 'Mascara'),
('sp2', 'Kem lót chống lão hóa SPF 30 / PA +++', 'Kem lót giúp dưỡng ẩm da, làm mịn và chuẩn bị làn da trước bước trang điểm.\r\nCông thức dạng lỏng không chứa dầu dễ dàng hòa tan vào da, đem đến hiệu quả trang điểm rạng rỡ và độ che phủ trong suốt, tự nhiên.', 30, '1500000', 'Kem lót'),
('sp20', 'Rouge dior colored lip balm', 'Son dưỡng môi có màu đầu tiên của Dior có công thức giàu phức hợp hoa, tập trung chiết xuất từ ​​hoa mẫu đơn, hoa cầm, hoa sung Barbary và hoa khiêu bụt đỏ cho đôi môi đẹp hơn mỗi ngày. Bao gồm 95%* thành phần có nguồn gốc tự nhiên, son dưỡng môi màu Rouge Dior mang lại hiệu quả làm dịu và cung cấp độ ẩm trong suốt 24 giờ.', 50, '1500000', 'Son môi'),
('sp21', 'Son DIOR ADDICT', 'Dior Addict là loại son môi tỏa sáng Dior được thiết kế giống như một phụ kiện thời trang, với công thức hiện bao gồm 90% thành phần có nguồn gốc tự nhiên, được đựng trong một hộp đựng cực kỳ thời trang và có thể tái sử dụng.\r\nMàu sắc đậm và tỏa sáng với hiệu ứng vinyl, dưỡng ẩm 24h và bền màu 6h, công thức chứa sáp hoa nhài với đặc tính dưỡng ẩm: Son môi Dior Addict nâng cao đôi môi với sắc thái tươi sáng và rực rỡ với độ bóng gợi cảm. Trong số các bảng màu, Dior 8 nổi bật: màu đỏ gạch phổ quát và gây nghiện lấy cảm hứng từ con số may mắn và thời thượng của House of Dior.\r\nSố lượng được tính toán dựa trên tiêu chuẩn ISO 16128-1 và ISO 16128-2. Các thành phần còn lại góp phần vào hiệu quả, sự hấp dẫn về cảm giác và sự ổn định của công thức.\r\nKiểm tra công cụ trên 10 môn.\r\nThử nghiệm lâm sàng trên 25 đối tượng.', 60, '1700000', 'Son môi'),
('sp22', 'DIOR ADDICT LIP MAXIMIZER', 'Dior Addict Lip Maximizer là loại son bóng mang tính biểu tượng của Dior, dưỡng ẩm và làm căng mọng môi chính hãng với hiệu ứng làm dày môi tối đa. Được bổ sung dầu anh đào và axit hyaluronic, công thức của nó bao gồm 90% thành phần có nguồn gốc tự nhiên.\r\nĐược dưỡng ẩm trong 24h và được tăng cường độ bóng như gương, đôi môi được làm mịn và căng mọng rõ rệt.\r\n\r\nSon bóng Dior Addict Lip Maximizer mới đã được làm lại để đáp ứng mọi mong muốn trang điểm với các sắc thái đậm đà và tự nhiên. Chất son bóng mang đến nhiều khả năng với nhiều lớp hoàn thiện hơn để lựa chọn: ngoài khả năng tỏa sáng với hiệu ứng phóng đại, Dior Addict Lip Maximizer hiện còn có các phiên bản cường độ cao, hình ba chiều và lung linh.', 35, '2000000', 'Son dạng lỏng'),
('sp23', 'SON TINT DIOR ADDICT', 'Dior Addict Lip Tint là loại son tint Dior không chuyển màu đầu tiên có thời gian sử dụng 12h, giúp làm nổi bật đôi môi với màu đậm trong lớp nền bán lì và hòa quyện với làn da để mang lại cảm giác môi trần.\r\n\r\nĐược cấu tạo từ 95% thành phần có nguồn gốc tự nhiên, Dior Addict Lip Tint được pha với dầu anh đào để dưỡng ẩm cho môi trong 24 giờ và nhờ đó mang lại sự thoải mái lâu dài.\r\n\r\nCó sẵn trong bảng màu gồm các sắc thái tươi tắn và tự nhiên, chẳng hạn như màu be, quả mâm xôi, màu san hô rực rỡ hoặc thậm chí là màu mận đậm, loại son tint Dior này tôn lên mọi tông màu da và làm đẹp chúng', 45, '1900000', 'Son dạng lỏng'),
('sp24', 'ROUGE DIOR FOREVER LIQUID', 'Rouge Dior Forever Liquid là loại son môi Dior dạng rời siêu sắc tố, chống chuyển màu đầu tiên, với màu sắc rực rỡ, siêu lì, chịu được tiếp xúc. Với màu sắc nổi bật, chất son sẽ không đọng lại thành đường viền môi, không phai, lem, hương kể cả trên vải và khẩu trang.\r\n\r\nRouge Dior Forever Liquid tiến lùi giới hạn trôi bằng công thức siêu. Không có hiệu ứng trang điểm đậm mang lại cảm giác thoải mái khi sử dụng môi trường trần, màu sắc của loại son môi chống chuyển màu này phủ lên môi một lớp sừng như không thể nhận thấy và sống động màu sắc chưa từng có . Son môi lì Rouge Dior Forever Liquid đảm bảo độ che phủ tối ưu trong 12 giờ mà không ảnh hưởng đến sự thoải mái, bất chấp những căng thẳng trong cuộc sống hàng ngày', 30, '2400000', 'Son dạng lỏng'),
('sp25', 'DIOR PRESTIGE LIGHT-IN-WHITE LA SOLUTION LUMIÈRE ACTIVATED SERUM', 'Serum làm sáng da với cấu trúc nhẹ nhàng giúp hồi phục và củng cố hàng rào bảo vệ da giúp điều chỉnh và làm mờ các loại tiền tông màu để tăng cường độ sáng tự nhiên của da.\r\n\r\nDior Prestige Light-in-White La Solution Lumière Activated Serum giải quyết phương pháp ánh sáng lý tưởng của sóng da bằng tác động cách lên hai thành phần chính của nó, độ tinh khiết màu sắc sắc và cường độ sáng.\r\n\r\nDo đó, khả năng chiếu sáng của hoa hồng trắng giúp khắc phục những hồng điểm về tông màu cơ bản của da để có làn sóng da trong trẻo, nhìn không tì vết. Lần đầu tiên, khoa học Dior đã làm phong phú thêm bó hoa quý giá của loại serum này với chiết xuất từ ​​​​loài hoa artemisia lâu đời, có đặc tính phát quang.\r\n', 20, '4500000', 'Serum'),
('sp26', 'OR ROUGE ANTI-AGING SERUM', 'Một loại serum tái tạo bề mặt da, chống lão hóa mạnh mẽ kết hợp nhụy hoa nghệ tây mạnh với nước nghệ tây quý giá để tái tạo làn da một cách ấn tượng.\r\nHãy trải nghiệm Or Rouge Serum mới được tăng cường hiện kết hợp nhụy hoa nghệ tây với nước nghệ tây để tái tạo năng lượng tế bào da, phục hồi làn da và chống lại 11 dấu hiệu lão hóa rõ rệt – thô ráp, săn chắc, xỉn màu, đàn hồi, nếp nhăn và nếp nhăn, tông màu da đồng đều, lỗ chân lông tầm nhìn, đốm đen, mẩn đỏ, chảy xệ và nếp nhăn khi cười. Đắm mình trong sự sang trọng bền vững với bao bì mới có thể tái sử dụng thân thiện với môi trường.', 15, '6000000', 'Serum'),
('sp27', 'LE LIFT LOTION', 'Đối mặt với các tác nhân gây hại từ môi trường hàng ngày, làn da trở nên mỏng manh và dễ mất nước. Làn da mất cân bằng không còn hấp thụ được tác dụng của các sản phẩm chăm sóc da. Là bước mở đầu thiết yếu trong chu trình dưỡng da, Nước cân bằng LE LIFT giữ vai trò thiết yếu giúp khôi phục chức năng và sự cân bằng của hàng rào bảo vệ để làn da dễ dàng tiếp nhận trọn vẹn các đặc tính làm săn chắc của dòng sản phẩm LE LIFT.\r\nNước cân bằng LE LIFT với kết cấu dạng gel nước, tương thích hoàn hảo với da. Các dưỡng chất được hấp thụ ngay lập tức, mang lại cảm giác tươi mát và thoải mái. Khi sử dụng, da trông căng mịn hơn. Sử dụng nước cân bằng đều đặn, làn da trở nên mịn màng, săn chắc và rạng rỡ hơn; kết cấu da cũng được củng cố.', 40, '2800000', 'Serum'),
('sp28', 'N°1 DE CHANEL REVITALIZING EYE CREAM', 'Hoa trà đỏ là một loài hoa không giống bất kỳ loại hoa nào khác. Đây là thành phần cốt lõi của N°1 DE CHANEL. Một loài hoa với sức mạnh hồi sinh, giữ được vẻ tươi trẻ bền bỉ nhờ nguồn năng lượng phi thường.\r\nCHANEL Research đã khai thác các đặc tính đặc biệt của loài hoa này để tạo ra một thế hệ sản phẩm mới, bao gồm sản phẩm dưỡng da, trang điểm và xịt toàn thân hương nước hoa.\r\nLà thành phần trọng tâm của dòng sản phẩm làm đẹp N°1 DE CHANEL, chiết xuất hoa trà đỏ nhắm vào giai đoạn đầu tiên của quá trình lão hóa da, ngăn ngừa và khắc phục sự xuất hiện của 5 dấu hiệu lão hóa. Sau khi trải qua chu trình chăm sóc da N°1 DE CHANEL, các nếp nhăn được giảm bớt, lỗ chân lông được se lại rõ rệt và độ đàn hồi của da được phục hồi. Da trở nên dễ chịu hơn và bừng sáng đầy sức sống.\r\n\r\nKem dưỡng dành cho vùng mắt N°1 DE CHANEL kết hợp chiết xuất hoa trà đỏ, một thành phần hoạt tính giúp tăng cường sức sống của tế bào và \"phức hợp làm sáng\", mang đến sự mịn màng, rạng rỡ và tràn đầy sức sống cho vùng mắt. Công thức chứa 91% thành phần có nguồn gốc tự nhiên và 40% thành phần chiết xuất từ hoa trà.\r\nHiệu quả sau khi sử dụng, vùng da quanh mắt trông khỏe mạnh hơn (+35% (1)) và các dấu hiệu mệt mỏi giảm rõ rệt (-13%', 50, '2200000', 'Dưỡng da'),
('sp29', 'SUBLIMAGE LA CRÈME TEXTURE SUPRÊME', 'SUBLIMAGE La Crème Texture Suprême là một sản phẩm chăm sóc da toàn diện được làm giàu với Vanilla Planifolia.\r\nVanilla Planifolia đa phân đoạn là một thành phần độc quyền của CHANEL* có nồng độ các phân tử hoạt tính cao gấp 40 lần so với nguyên liệu thô.\r\nThành phần hoạt tính chính của công thức làm tăng khả năng trẻ hóa tế bào gấp ba lần**.\r\nSUBLIMAGE La Crème Texture Suprême hoạt động dựa trên các thông số liên quan đến vẻ tươi trẻ của làn da, đã được xác định bởi CHANEL Research. Được thiết kế dành cho da khô, sản phẩm kem dưỡng mềm mịn, giàu dưỡng chất và bao bọc này giúp cấp ẩm, mang lại sự dễ chịu, làm giảm nếp nhăn, tái cấu trúc, củng cố sự đồng nhất, sức mạnh và sự rạng rỡ của làn da. Cho một làn da sáng mịn không gì so sánh được.\r\n\r\nSUBLIMAGE La Crème Texture Suprême có bao bì mới có thể thay lõi, thích hợp mang đi du lịch. Được thiết kế thông qua sự hợp tác với nhà sản xuất thủy tinh lớn của Pháp nổi tiếng về chuyên môn thủ công, lọ thủy tinh chứa sản phẩm này có thể được thay lõi khi dùng hết.\r\n\r\n* Được cấp bằng sáng chế ở Châu Âu, Nhật Bản và Hoa Kỳ\r\n**Thử nghiệm ex vivo được tiến hành trên thành phần hoạt tính', 20, '5500000', 'Dưỡng da'),
('sp3', 'Kem lót Diorsnow', 'Là lớp nền cần thiết cho một lớp trang điểm rạng rỡ, Kem nền trang điểm hiệu chỉnh màu Diorsnow ngay lập tức ngọc mục tiêu và giải quyết những dòng bạch kim trên da để có một lớp nền hoàn hảo và sóng da tươi viền. Công thức siêu thanh, không nồng nàn hòa quyện nhẹ nhàng và không thể nhận vào da để giữ lớp trang điểm hoàn hảo và giữ lớp nền lâu trôi.\r\n\r\nMàu hồng làm sống lại những vùng da bền màu trên mặt và làm sáng làn da thiếu sức sống bằng ánh sáng hồng hào tự nhiên. Làn da tinh khiết hơn, trẻ trẻ hơn và rạng rỡ hơn. Màu sắc giúp trung hòa và làm giảm vết đỏ của da. Làn da hoàn toàn đồng đều và trong suốt. Màu xanh lam che giấu độ bền màu để thể hiện độ sáng hoàn hảo, độ trong suốt và độ sáng hoàn hảo.', 40, '1800000', 'Kem lót'),
('sp30', 'DIOR PRESTIGE LA CRÈME MAINS DE ROSE', 'Khám phá Dior Prestige La Crème Mains de Rose, loại kem dưỡng tay Dior đầu tiên kết hợp sức mạnh của vi chất dinh dưỡng Rose de Granville với chiết xuất sợi hoa hồng, Sáp hoa hồng và dầu hoa hồng.\r\n\r\nMang lại cảm giác giác làm đẹp tối ưu với tác dụng chống lão hóa, loại dầu dưỡng mịn này bao bọc bàn tay và móng tay trong sức mạnh dinh dưỡng vi mô và phục hồi của Rose de Granville. Không có bất kỳ dư lượng nào, cấu hình của nó thành một góc màn hình thoải mái và mượt mà. Ngày qua ngày, đôi bàn tay trở nên rực rỡ rực rỡ với vẻ đẹp đến tận móng tay, được tô điểm bởi hương hoa hồng thoang thoang mời.\r\n\r\nBao gồm 94% thành phần có nguồn gốc tự nhiên, Dior Prestige La Crème Mains de Rose nuôi dưỡng bàn tay, lớp biểu bì và móng tay. Nó cũng có thể được sử dụng như một loại dầu dưỡng phục hồi trên những vùng rất khô cơ, sảng hạn như tụt tay và bàn chân, để sảng khoái tình trạng mất nước.\r\n\r\nThực hiện theo hướng dẫn của quy trình thoa Dior Prestige La Crème Mains de Rose để có một liệu pháp xoa bóp-xa đầy cảm giác góc nhọn, bao bọc bàn tay của bạn trong một tấm màn che thoáng mát và thoải mái.', 30, '3500000', 'Mặt nạ'),
('sp31', 'KEM DƯỠNG DA MẶT PURE SHOTS PERFECT PLUMPER', 'Kem dưỡng ẩm giúp kích thích collagen và ngăn ngừa sự xuất hiện của đường nhăn và nếp nhăn đồng thời mang lại làn da sáng mịn.\r\nĐược kết hợp với Ribose và Orange Blossom, công thức chống lão hóa độc đáo bắt đầu như một loại son dưỡng phục hồi sau đó vỡ ra thành một lớp mỏng, hấp thụ nhanh, để lại làn da tươi mới và cung cấp độ ẩm sâu. Các hạt ngọc trai siêu nhỏ hiệu chỉnh màu sắc ngay lập tức làm sáng làn da xỉn màu.\r\n', 45, '1900000', 'Kem lót'),
('sp32', 'DIOR PRESTIGE LE MICRO-CAVIAR DE ROSE', 'Tinh chất dinh dưỡng vi lượng cuối cùng của bộ sưu tập, Dior Prestige Le Micro-Caviar de Rose hoạt động như một phương pháp điều trị “phục hồi”mạnh mẽ cho sóng da.\r\n\r\nMỗi lọ 75 ml chứa 17.000 viên ngọc trai siêu nhỏ: công nghệ đóng gói tiên phong được sử dụng cho Dior Prestige Le Micro-Caviar de Rose tạo ra từng viên ngọc trai vô cùng thơm ngon.\r\n\r\nĐược bổ sung 22 dưỡng chất vi lượng Rose de Granville và cô đặc cao cấp, công thức chăm sóc da đặc biệt này bao gồm 88% thành phần có nguồn gốc tự nhiên. Nó mở ra một cấu hình trứng ngay lập tức vào da.\r\n', 20, '4000000', 'Mặt nạ'),
('sp33', 'SUBLIMAGE MASQUE', 'Mặt nạ tái tạo da SUBLIMAGE Essential Revitalising Mask là một phương pháp trị liệu dành cho da. Dày dặn, mượt mà và mềm mại, sản phẩm giúp thư giãn và cấp ẩm cho làn da trở nên rạng rỡ và căng mịn.', 10, '5000000', 'Mặt nạ'),
('sp34', 'Opium đen eau de parfum', 'Black Opium Eau de Parfum là loại nước hoa quyến rũ làm say đắm phụ nữ. Hương mở đầu của cà phê giàu adrenaline và cảm giác ngọt ngào của vani hòa vào sự mềm mại của hoa trắng tạo nên hương thơm lâu phai.', 10, '4000000', 'Nước hoa nữ'),
('sp35', 'Mon paris eau de parfum', 'Mon Paris Eau de Parfum là loại nước hoa hương hoa ngọt ngào dành cho phụ nữ. Hương thơm ngọt ngào của quả mọng đỏ được làm dịu đi bởi hoa cà độc dược và được neo giữ bởi hương gỗ của xạ hương trắng hòa quyện tuyệt đẹp cùng với hoắc hương tạo nên một hương thơm nữ tính lâu dài, lãng mạn về mọi mặt.', 25, '2800000', 'Nước hoa nữ'),
('sp36', 'Miss dior absolutely blooming', 'Tươi sáng và đầy màu sắc, Miss dior absolutely blooming là một loại nước hoa có hương hoa xa hoa mà bạn sẽ quay lại nhiều lần. Những nốt hương Red Berry thơm ngon được thêu trên nền hoa mẫu đơn tươi mới. Được tôn vinh bởi bộ đôi tuyệt vời của Hoa hồng Grasse và Hoa hồng Damascus, loài hoa tươi nở rộ vô tận này được an ủi nhờ hương cuối của xạ hương trắng. Một sự hài hòa khứu giác tích cực, sảng khoái dành cho một Miss Dior tinh nghịch và khó cưỡng.', 30, '3200000', 'Nước hoa nữ'),
('sp37', 'Love, don\'t be shy', 'Nước hoa Love, đừng ngại ngùng là một phần của gia đình KILIAN Narcotics. Từ hoa hồng đến hoa huệ, từ hoa cam đến hoa sơn chi… Hoa Kilian được cấu thành giống như một chất gây nghiện.\r\nRất nhiều sự chú ý được dành cho mỗi chai nước hoa KILIAN có thể tái sử dụng để biến chúng thành những đồ vật quý giá thực sự. Các chai nước hoa thuộc họ ma tuý được trang trí bằng một lớp sơn mài trắng đặc biệt và chai của chúng được chạm khắc tỉ mỉ ở mỗi bên, với hình tượng chiếc khiên Achilles. Giống như Kilian Hennessy nói: \"Trong ngành nước hoa, nó mang tính chất quyến rũ cũng như sự bảo vệ.\" Một tấm kim loại màu vàng có khắc tên nước hoa bằng tay làm tăng thêm nét tinh tế.\r\nNhững chi tiết này mang đến cho KILIAN sự đảm bảo về sự sang trọng, không phải phù du mà sẽ tồn tại suốt đời. của loại nước hoa hầm này có thể được nạp lại vô thời hạn.', 40, '2200000', 'Nước hoa nữ'),
('sp38', 'Myslf eau de parfum', 'MYSLF, nước hoa dành cho nam giới có thể tái sử dụng của Yves Saint Laurent. Hương thơm hoa gỗ đầu tiên của YSL Beauty mang dấu ấn độc đáo, lâu dài của sự hiện đại. Trên hết là hương thơm tươi mát và rực rỡ của cam bergamot lấp lánh, tiếp theo là hương giữa nồng nàn và mãnh liệt của hoa cam từ Tunisia. Ở lớp hương cuối, mùi hương được cân bằng bởi hương gỗ ấm áp và gợi cảm, bao gồm hoắc hương Indonesia và xạ hương Ambrofix™. Tuyên ngôn về sự nam tính hiện đại để tôn vinh con người thật của bạn. Không hối lỗi. Tự hào. Một hương thơm hòa quyện liền mạch với làn da của bạn, bộc lộ dấu ấn riêng biệt của mỗi cá nhân. Mùi hương của tôi, MYSLF', 15, '3600000', 'Nước hoa nam'),
('sp39', 'Black Phantom - \"Memento Mori\"', 'Mỗi chai KILIAN được biến thành một vật quý giá. Chiếc bình sơn mài màu đen được khắc trên nhiều mặt khác nhau bức bích họa bằng gốm tượng trưng cho tấm khiên của Achille và được trang trí bằng một tấm bạc, trên đó tên của loại nước hoa được khắc thủ công.\r\nChai được khóa bằng một chiếc chìa khóa tua rua đặt trong một chiếc quan tài bằng gỗ sơn mài màu đen. Một hộp sọ mỉm cười vươn lên như một tượng đài, chiếu sáng một vẻ đẹp lộng lẫy nghiệt ngã.\r\nSự sang trọng thực sự sẽ tồn tại suốt đời và do đó, loại chai này có thể được đổ lại.', 5, '7000000', 'Nước hoa nam'),
('sp4', 'Dior prestige le micro-fluide teint de rose', 'Là lớp nền cần thiết cho một lớp trang điểm rạng rỡ, Kem nền trang điểm hiệu chỉnh màu Diorsnow ngay lập tức ngọc mục tiêu và giải quyết những dòng bạch kim trên da để có một lớp nền hoàn hảo và sóng da tươi viền. Công thức siêu thanh, không nồng nàn hòa quyện nhẹ nhàng và không thể nhận vào da để giữ lớp trang điểm hoàn hảo và giữ lớp nền lâu trôi.\r\n\r\nMàu hồng làm sống lại những vùng da bền màu trên mặt và làm sáng làn da thiếu sức sống bằng ánh sáng hồng hào tự nhiên. Làn da tinh khiết hơn, trẻ trẻ hơn và rạng rỡ hơn. Màu sắc giúp trung hòa và làm giảm vết đỏ của da. Làn da hoàn toàn đồng đều và trong suốt. Màu xanh lam che giấu độ bền màu để thể hiện độ sáng hoàn hảo, độ trong suốt và độ sáng hoàn hảo.', 20, '3000000', 'Kem nền'),
('sp5', 'Les beiges cushion', 'LES BEIGES HEALTHY GLOW GEL TOUCH FOUNDATION là một sản phẩm đầy sáng tạo cho làn da tỏa sáng và rạng rỡ. Hiệu quả trang điểm mỏng mịn như sương, giúp hồi sinh làn da vào mọi thời điểm trong ngày, cùng với kết cấu gel-nước siêu mịn và tươi mát, cho phép tùy chỉnh độ che phủ trên cả da mộc lẫn da đã được trang điểm. Sản phẩm tiện dụng hơn với lớp màn vải linh hoạt giúp chiết ra liều lượng phấn phù hợp cho mỗi lần sử dụng.', 25, '2200000', 'Kem nền'),
('sp6', 'Diorsnow uv shield cushion', ' Diorsnow UV Shield Cushion là sản phẩm chăm sóc da có màu của Dior giúp bảo vệ, làm đều màu và làm sáng da chỉ bằng một bước đơn giản.\r\n\r\nCông thức của nó được trộn với edelweiss vector và vitamin C để có tác dụng chiếu sáng mạnh mẽ. Loại đệm chăm sóc da chống nước này cung cấp khả năng bảo vệ SPF 50 PA +++ và mang lại cho làn sóng da cảm giác thoáng khí, thoải mái nhờ khả năng dưỡng ẩm suốt 24 giờ*. Làn da được tăng cường nhờ hiệu ứng sáng tự nhiên, rạng rỡ, khỏe mạnh với độ sáng hoàn hảo.\r\n\r\nDiorsnow UV Shield Cushion che giấu những lợi ích trên da và làm sáng da ngay lập tức với độ sáng tự nhiên nhẹ nhàng. Thiết kế đệm nhỏ gọn và trang nhãn của nó tạo điều kiện thuận lợi cho việc sử dụng trực quan sản phẩm chăm sóc da có màu này và lý tưởng cho việc làm trang điểm suốt cả ngày.', 20, '2500000', 'Kem nền'),
('sp7', 'Le correcteur de chanel', 'LE CORRECTEUR PÊCHE - thích hợp với tông da từ trung bình đến ô liu - và LE CORRECTEUR ABRICOT - thích hợp với tông da từ ô liu đến tối màu - che đốm nâu, quầng thâm và hiệu chỉnh sắc tố da.\r\n\r\nLe CORRECTEUR VERT che các nốt đỏ, hiệu chỉnh vùng da mẩn đỏ.\r\n\r\nLe CORRECTEUR ROSE làm sáng vùng da xỉn màu, đặc biệt là vùng mắt. Có thể dặm để tạo độ che phủ từ trung bình đến cao.\r\nPhù hợp với mọi loại da. Đã kiểm nghiệm nhãn khoa.', 35, '1400000', 'Kem che khuyết điểm'),
('sp8', 'Le blanc', 'Kem che khuyết điểm với kết cấu nhẹ và độ che phủ cao. Chứa thành phần chống tia UV mạnh SPF 40 / PA +++, sản phẩm làm giảm sự hiện diện của các đốm nâu, tàn nhang và quầng thâm. Thiết kế nhỏ gọn để mang đi bất cứ đâu và thuận tiện khi cần dặm lại.Làm tăng sự rạng rỡ cho làn da 51%*.', 65, '1800000', 'Kem che khuyết điểm'),
('sp9', 'Dior forever cushion powder', 'Phấn phủ dạng bột số 1* giúp cố định lớp trang điểm và mang lại làn da sáng mịn, tinh tế mà không có hiệu ứng phấn phủ. Được đựng trong hộp đựng thời trang cao cấp thân thiện với du lịch, loại phấn phủ dạng lỏng này có kết cấu tươi và mượt, hài hòa với tông màu da để đạt được làn da đều màu, mờ và sống động tự nhiên trong mọi tình huống.', 25, '2800000', 'Kem che khuyết điểm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userbase`
--

CREATE TABLE `userbase` (
  `username` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `phonenumber` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `reenterpassword` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `AccType` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `userbase`
--

INSERT INTO `userbase` (`username`, `name`, `email`, `phonenumber`, `address`, `password`, `reenterpassword`, `AccType`) VALUES
('admin', 'admin', 'admin@rule.com', '0123456789', 'uneti,hanoi', 'admin', 'admin', 'admin'),
('alps', 'alps', 'alps@vvv.com', '0987654321', 'hà nội', 'alps', 'alps', 'user'),
('lam', 'Nguyễn Tùng Lâm', 'ntla@gmail', '0987654321', 'Hòa bình', 'lam', 'lam', 'user');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ma_sp`);

--
-- Chỉ mục cho bảng `userbase`
--
ALTER TABLE `userbase`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

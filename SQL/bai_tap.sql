-- do an

-- thêm data phản hồi
-- bán linh kiện theo combo thành một sản phẩm, giá bán theo combo
--  làm ntn để ghép linh kiện thành sản phẩm hoàn chỉnh đế bán cho khách

-- ------------------------------------------------------------------------------------------------------------------
-- BAI 1.3

-- cau 1: Liệt kê danh sách nhà xuất bản gồm có tên nhà xuất bản, địa chỉ, điện thoại.
SELECT ten_nha_xuat_ban, dia_chi, dien_thoai
FROM bs_nha_xuat_ban;
-- cau 2: Liệt kê danh sách người dùng gồm có các thông tin sau: họ tên, địa chỉ, điện thoại.
SELECT ho_ten, dia_chi, dien_thoai
FROM bs_nguoi_dung;
-- cau 3: Liệt kê danh sách tác giả gồm thông tin: tên tác giả, giới thiệu.
SELECT ten_tac_gia, gioi_thieu
FROM bs_tac_gia;
-- cau 4: Liệt kê danh sách người dùng gồm có các thông tin sau: họ tên, email, ngay_sinh, địa chỉ, điện thoại, danh sách sẽ được sắp tăng dần theo tên người dùng.
SELECT ho_ten, dia_chi, dien_thoai, email, ngay_sinh
FROM bs_nguoi_dung
ORDER BY ho_ten;
-- cau 5: Liệt kê danh sách sách gồm có: tên sách, sku, giới thiệu, kích thước, trọng lượng, đơn giá, giá bìa. Có sắp tăng theo cột tên sách, và sắp giảm theo cột đơn giá, giá bìa.
SELECT ten_sach, sku, gioi_thieu, kich_thuoc, trong_luong, don_gia, gia_bia
FROM bs_sach
ORDER BY ten_sach ASC, don_gia DESC, gia_bia DESC;
-- cau 6: Liệt kê danh sách sách gồm có: tên sách, sku, giới thiệu, kích thước, trọng lượng, đơn giá, giá bìa. Chỉ liệt kê các sách có tên bắt đầu là 'Series'.
SELECT ten_sach, sku, gioi_thieu, kich_thuoc, trong_luong, don_gia, gia_bia
FROM bs_sach
WHERE (ten_sach LIKE "%Series%");
-- cau 7: Liệt kê danh sách các tin tức có đuôi file của hình đại diện là '.jpg', gồm có các thông tin sau: id, tiêu đề tin, nội dung tóm tắt, nội dung chi tiết, hình đại diện, trạng thái.
SELECT id, tieu_de_tin, noi_dung_tom_tat, noi_dung_chi_tiet, hinh_dai_dien, trang_thai
FROM bs_tin_tuc
WHERE (hinh_dai_dien LIKE "%.jpg%");
-- cau 8: Liệt kê danh sách sách mà tên sách có chứa từ ‘Tái bản’.
SELECT *
FROM bs_sach
WHERE (ten_sach LIKE "%Tái bản%");
-- cau 9: Liệt kê danh sách sách có đơn giá lớn hơn 100.000 VNĐ, gồm các thông tin: tên sách, sku, giới thiệu, kích thước, trọng lượng, đơn giá, giá bìa, danh sách được xếp theo thứ tự tên sách giảm dần.
SELECT *
FROM bs_sach
WHERE don_gia > 100000
ORDER BY ten_sach DESC;
--  cau 10: Cho biết các sách có id loại sách là '17' và có mã nhà xuất bản là '11' gồm các thông tin sau: tên sách, sku, giới thiệu, kích thước, trọng lượng, đơn giá, giá bìa, danh sách được xếp theo thứ tự tên sách tăng dần
SELECT *
FROM bs_sach
WHERE id_loai_sach = 17 AND id_nha_xuat_ban = 11
ORDER BY ten_sach;
--  cau 11: Liệt kê danh sách sách có trọng lượng lớn hơn hay bằng 500 gr hoặc giá bìa lớn hơn 150.000 VNĐ
SELECT *
FROM bs_sach
WHERE trong_luong >= 500 OR gia_bia >= 150000;
-- cau 12: Liệt kê danh sách các sách có đơn giá từ 500.000 VNĐ đến 2.500.000 VNĐ
SELECT *
FROM bs_sach
WHERE don_gia BETWEEN 500000 AND 1500000;
-- cau 13: Liệt kê các sách có id loại sách là '56' hay '90' hay '92' và có trọng lượng lớn hơn hay bằng 300 gr, sắp tăng dần theo trọng lượng.
SELECT *
FROM bs_sach
WHERE (id_loai_sach IN(56, 90, 92)) AND trong_luong >= 300
ORDER BY trong_luong;
-- cau 14: Liệt kê các sách có id loại sách là '45' hoặc có đơn giá nhỏ hơn hay bằng 60.000 VNĐ
SELECT *
FROM bs_sach
WHERE id_loai_sach = 45 OR don_gia <= 60000;
-- cau 15: Liệt kê các sách có giới thiệu chứa một trong các từ 'huyền bí' và 'du lịch', gồm các thông tin: tên sách, sku, giới thiệu, kích thước, trọng lượng, đơn giá, giá bìa.
SELECT ten_sach, sku, gioi_thieu, kich_thuoc, trong_luong, don_gia, gia_bia
FROM bs_sach
WHERE (gioi_thieu LIKE "%huyền bí%" OR gioi_thieu LIKE "%du lịch%");
-- cau 16: Liệt kê các sách có trọng lượng là 280gr, 350gr hoặc 380 gr.
SELECT *
FROM bs_sach
WHERE trong_luong IN(280, 350, 380);
-- cau 17: Cho biết tên sách, giới thiệu, trọng lượng, đơn giá, giá bìa của 10 sách có đơn giá cao nhất.
SELECT ten_sach, gioi_thieu, trong_luong, gia_bia, don_gia
FROM bs_sach
ORDER BY don_gia DESC
LIMIT 0,10;
-- cau 18: Cho biết 3 sách có giới thiệu chứa một trong các từ sau ‘mạnh’, ‘magic’ và có đơn giá cao nhất, gồm các thông tin: tên sách, giới thiệu, trọng lượng, đơn giá, giá bìa.
SELECT ten_sach, gioi_thieu, trong_luong, gia_bia, don_gia
FROM bs_sach
WHERE (gioi_thieu LIKE "%mạnh%" OR gioi_thieu LIKE "%magic%")
ORDER BY don_gia DESC
LIMIT 0,3;
-- cau 19: Chỉ lấy ra danh sách nhà xuất bản có đầy đủ tất cả các thông tin.
SELECT *
FROM bs_nha_xuat_ban
WHERE (ten_nha_xuat_ban, dia_chi, email, dien_thoai) IS NOT NULL;
-- cau 20: Lấy danh sách sách có số trang lớn hơn 500 trang và có trọng lượng trên 500gr.
SELECT *
FROM bs_sach
WHERE (so_trang > 500 AND trong_luong > 500);
-- ----------------------------------------------------------------------------------------------
-- BAI 1.4

--cau 1. Thống kê tổng số sách của từng nhà xuất bản với các thông tin: tên nhà xuất bản, email, địa chỉ, điện thoại.
SELECT ten_nha_xuat_ban, email, dia_chi, dien_thoai, COUNT(s.id) AS so_luong_sach
FROM bs_nha_xuat_ban nxb JOIN bs_sach s ON nxb.id = s.id_nha_xuat_ban
GROUP BY nxb.id;
-- cau 2: Thống kê tổng số sách theo từng loại sách thuộc loại sách có id = 2 với các thông tin: tên loại sách, số lượng sách.

SELECT ten_loai_sach, id_loai_cha, COUNT(s.id) AS so_luong_sach
FROM bs_loai_sach ls JOIN bs_sach s ON ls.id = s.id_loai_sach
WHERE id_loai_cha = 2
GROUP BY ls.id;
-- cau 3: Cho biết giá bìa trung bình của sách theo từng nhà xuất bản với các thông tin: tên nhà xuất bản, điện thoại.
SELECT ten_nha_xuat_ban, AVG(s.don_gia) AS gia_trung_binh
FROM bs_nha_xuat_ban nxb JOIN bs_sach s ON nxb.id = s.id_nha_xuat_ban
GROUP BY nxb.id;
-- cau 4: Cho biết đơn giá thấp nhất của từng nhà xuất bản (làm tương tự cho đơn giá lớn nhất)
SELECT ten_nha_xuat_ban, MIN(s.don_gia) AS don_gia_thap_nhat
FROM bs_nha_xuat_ban nxb JOIN bs_sach s ON nxb.id = s.id_nha_xuat_ban
GROUP BY nxb.id;
-- cau 5: Liệt kê danh sách 10 quyển sách bán được số lượng nhiều nhất trong năm 2016 với các thông tin: tên sách, sku, giới thiệu, kích thước, trọng lượng, số lượng sách đã bán.
SELECT ten_sach, sku, gioi_thieu, kich_thuoc, trong_luong, COUNT(ctdh.id) AS so_luong_sach_da_ban
FROM bs_don_hang dh JOIN bs_chi_tiet_don_hang ctdh ON dh.id = ctdh.id_don_hang 
    JOIN bs_sach s ON ctdh.id_sach = s.id 
WHERE YEAR(ngay_dat) = 2016
GROUP BY s.id
ORDER BY so_luong_sach_da_ban DESC
LIMIT 0,10;
-- cau 6: Liệt kê danh sách 10 quyển sách có tổng doanh thu cao nhất trong năm 2016 với các thông 
-- tin: tên sách, sku, giới thiệu, kích thước, trọng lượng, đơn giá, giá bìa, tổng doanh thu.
SELECT ten_sach, sku, gioi_thieu, kich_thuoc, trong_luong, ngay_dat, SUM(dh.tong_tien) AS tong_doanh_thu
FROM bs_don_hang dh JOIN bs_chi_tiet_don_hang ctdh ON dh.id = ctdh.id_don_hang 
    JOIN bs_sach s ON ctdh.id_sach = s.id 
WHERE YEAR(ngay_dat) = 2016
GROUP BY s.id
ORDER BY tong_doanh_thu DESC
LIMIT 0,10;
-- cau 7: Liệt kê danh sách 3 quyển sách tổng doanh thu bán sách được trong tháng 3 năm 2016 cao nhất với: tên sách, sku, giới thiệu, kích thước, trọng lượng, đơn giá, giá bìa, doanh thu tháng 3.
SELECT ten_sach, sku, gioi_thieu, kich_thuoc, trong_luong, ngay_dat, SUM(dh.tong_tien) AS tong_doanh_thu
FROM bs_don_hang dh JOIN bs_chi_tiet_don_hang ctdh ON dh.id = ctdh.id_don_hang 
    JOIN bs_sach s ON ctdh.id_sach = s.id 
WHERE MONTH(ngay_dat) = 3 AND YEAR(ngay_dat) = 2016
GROUP BY s.id
ORDER BY tong_doanh_thu DESC
LIMIT 0,3;
-- cau 8 :Thống kê đơn hàng gồm các thông tin sau: id, ngày đặt, tổng số lượng, tổng tiền
SELECT id_don_hang, ngay_dat, SUM(ctdh.so_luong) AS tong_so_luong, tong_tien
FROM bs_don_hang dh JOIN bs_chi_tiet_don_hang ctdh ON ctdh.id_don_hang = dh.id
GROUP BY dh.id
--cau 9. Hãy cho biết danh sách các đơn hàng có giá trị trên 500.000 VNĐ
SELECT *
FROM bs_don_hang
WHERE tong_tien > 500000
--cau 10. Cho biết tổng số sách của từng tác giả với các thông tin sau: tên tác giả, tổng số lượng sách. 
SELECT ten_tac_gia, COUNT(s.id) AS tong_so_luong_sach
FROM bs_tac_gia tg JOIN bs_sach s ON tg.id = s.id_tac_gia
GROUP BY tg.id
--cau 11. Cho biết giá bìa cao nhất của từng tác giả với các thông tin: tên tác giả, tên sách, giá bìa.
SELECT ten_tac_gia, ten_sach, MAX(gia_bia)
FROM bs_tac_gia tg JOIN bs_sach s ON tg.id = s.id_tac_gia
GROUP BY tg.id
--cau 12. Cho biết danh sách 3 tác giả được nhiều nhà xuất bản khác nhau xuất bản sách nhất, với các thông tin: tên tác giả, số lượng nhà xuất bản sách.
SELECT ten_tac_gia, COUNT(nxb.id) AS so_luong_nxb_sach
FROM bs_nha_xuat_ban nxb JOIN bs_sach s ON nxb.id = s.id_nha_xuat_ban
    JOIN bs_tac_gia tg ON s.id_tac_gia = tg.id 
GROUP BY tg.id
ORDER BY so_luong_nxb_sach DESC
LIMIT 3
--cau 13. Liệt kê danh sách 5 nhà xuất bản có địa chỉ chứa từ ‘Hà Nội’ có nhiều sách nhất, cùng các thông tin: tên nhà xuất bản, địa chỉ, số sách xuất bản.
SELECT ten_nha_xuat_ban, dia_chi, COUNT(s.id) AS so_sach_xuat_ban
FROM bs_nha_xuat_ban nxb JOIN bs_sach s ON nxb.id = s.id_nha_xuat_ban
WHERE (dia_chi LIKE "%Hà Nội%")
GROUP BY nxb.id
ORDER BY so_sach_xuat_ban DESC
LIMIT 5;
--cau 14. Cho biết danh sách 3 nhà xuất bản đã mời nhiều tác giả nhất để xuất bản sách, cùng các thông tin: tên nhà xuất bản, địa chỉ, số lượng tác giả.
SELECT ten_nha_xuat_ban, dia_chi, COUNT(tg.id) AS so_luong_tac_gia
FROM bs_nha_xuat_ban nxb JOIN bs_sach s ON nxb.id = s.id_nha_xuat_ban
    JOIN bs_tac_gia tg ON s.id_tac_gia = tg.id
GROUP BY nxb.id
ORDER BY so_luong_tac_gia DESC
LIMIT 3
-- ----------------------------------------------------------------------------------------------
-- BAI 1.5
-- cau 1: Liệt kê nhà sản xuất không bán sách có trọng lượng 280gr, 300gr, 350gr
SELECT *
FROM bs_nha_xuat_ban
WHERE id NOT IN (SELECT DISTINCT nxb.id
FROM bs_nha_xuat_ban nxb JOIN bs_sach s ON nxb.id = s.id_nha_xuat_ban
WHERE trong_luong IN (280, 300, 350));
-- cau 2: Liệt kê các người dùng chưa mua sách lần nào
SELECT *
FROM bs_nguoi_dung
WHERE id NOT IN (SELECT DISTINCT id_nguoi_dung
FROM bs_don_hang
WHERE id_nguoi_dung IS NOT NULL);
-- cau 3: Liệt kê các người dùng có đơn hàng mua sách với tổng tiền cao nhất (lấy tất cả các khách hàng nếu bằng tổng tiền đơn hàng).
SELECT nd.*, tong_tien
FROM bs_nguoi_dung nd JOIN bs_don_hang dh ON nd.id = dh.id_nguoi_dung
WHERE tong_tien = (SELECT MAX(tong_tien)
FROM bs_don_hang)
-- cau 4: Thống kê tổng số sách theo từng loại sách thuộc loại “Sách Văn Học - Tiểu Thuyết” với các thông tin: tên loại sách, số lượng sách.
SELECT *
FROM bs_sach
WHERE id_loai_sach IN (SELECT id
    FROM bs_loai_sach
    WHERE id_loai_cha = (SELECT id
        FROM bs_loai_sach
        WHERE ten_loai_sach = "Sách Văn Học - Tiểu Thuyết"));
-- cau 5. Liệt kê danh sách sách cùng nhà xuất bản với sách có mã sku là ‘9780723295273’
SELECT *
FROM bs_sach
WHERE id_nha_xuat_ban = (SELECT id_nha_xuat_ban
    FROM bs_sach
    WHERE sku = "9780723295273")
-- cau 6. Liệt kê các loại sách chưa có sách nào.
SELECT *
FROM bs_loai_sach
WHERE ls.id NOT IN (SELECT DISTINCT ls.id, s.*
FROM bs_loai_sach ls JOIN bs_sach s ON ls.id = s.id_loai_sach)
-- cau 7. Liệt kê tất cả sách thuộc loại sách nào có nhiều sách nhất.
SELECT *
FROM bs_sach
WHERE id_loai_sach = (SELECT id
    FROM (SELECT ls.id, COUNT(DISTINCT s.id) so_sach
        FROM bs_loai_sach ls JOIN bs_sach s ON ls.id = s.id_loai_sach
        GROUP BY ls.id
        ORDER BY so_sach DESC
        LIMIT 1) AS temp)
-- cau 8. Liệt kê tất cả sách của tác giả được nhiều nhà xuất bản quan tâm nhất.
SELECT *
    FROM bs_sach
    WHERE id_tac_gia IN (SELECT id
        FROM (SELECT tg.id, COUNT(DISTINCT nxb.id) AS so_luong_nxb_sach
            FROM bs_nha_xuat_ban nxb JOIN bs_sach s ON nxb.id = s.id_nha_xuat_ban
                JOIN bs_tac_gia tg ON tg.id = s.id_tac_gia
            GROUP BY tg.id
            HAVING so_luong_nxb_sach = (SELECT COUNT(DISTINCT nxb.id) AS so_luong_nxb_sach
                FROM bs_nha_xuat_ban nxb JOIN bs_sach s ON nxb.id = s.id_nha_xuat_ban
                    JOIN bs_tac_gia tg ON tg.id = s.id_tac_gia
                GROUP BY tg.id
                ORDER BY so_luong_nxb_sach DESC
                LIMIT 1)) AS temp);
-- cau 9. Liệt kê tất cả sách của 3 nhà xuất bản mời được nhiều tác giả nhất.
SELECT * 
FROM bs_sach
WHERE id_nha_xuat_ban IN (SELECT id
    FROM (SELECT nxb.id, ten_nha_xuat_ban, COUNT(DISTINCT tg.id) so_luong_tac_gia
        FROM bs_tac_gia tg JOIN bs_sach s ON tg.id = s.id_tac_gia
            JOIN bs_nha_xuat_ban nxb ON nxb.id = s.id_nha_xuat_ban
        GROUP BY nxb.id
        HAVING so_luong_tac_gia >= (SELECT MIN(so_luong_tac_gia)
        FROM (SELECT ten_nha_xuat_ban, COUNT(DISTINCT tg.id) so_luong_tac_gia
            FROM bs_tac_gia tg JOIN bs_sach s ON tg.id = s.id_tac_gia
                JOIN bs_nha_xuat_ban nxb ON nxb.id = s.id_nha_xuat_ban
            GROUP BY nxb.id
            ORDER BY so_luong_tac_gia DESC
            LIMIT 3
        ) AS temp)
    )AS temp2)

-- ----------------------------------------------------------------------------------------------
-- BAI 1.6

-- cau 1. Cho biết trị giá trung bình của các đơn hàng được làm tròn đến hàng nghìn.
SELECT ROUND(AVG(tong_tien), -3)
FROM bs_don_hang
-- cau 2. Liệt kê danh sách các đơn hàng trong tháng 2 năm 2016 (dùng hàm day, month, year)
SELECT dh.*
FROM bs_don_hang dh JOIN bs_chi_tiet_don_hang ctdh ON dh.id = ctdh.id_don_hang
WHERE MONTH(ngay_dat) = 2 AND YEAR(ngay_dat) = 2016
-- cau 3. Liệt kê các đơn hàng và có thêm một cột là số ngày (bằng ngày hiện tại – ngày đặt)(datediff, hàm date, hàm curdate) sắp theo cột số ngày giảm dần 
SELECT *, DATEDIFF(CURDATE(), ngay_dat)
FROM bs_don_hang
-- cau 4. Liệt kê danh sách các nhà xuất bản có tên nhà xuất bản, địa chỉ, điện thoại, trong đó tên nhà xuất bản in HOA (dùng hàm upper)
SELECT UPPER(ten_nha_xuat_ban), dia_chi, dien_thoai
FROM bs_nha_xuat_ban
-- cau 5. Liệt kê danh sách sách đã bán được trong tháng 3 năm 2016 có tên sách, trọng lượng, đơn giá, trong đó: trọng lượng có thêm 'gr', đơn giá có định dạng tiền tệ và có thêm 'VNĐ'
SELECT ten_sach,CONCAT(trong_luong, ' gr') ,CONCAT(FORMAT(don_gia, '#,###'), ' VNĐ')
FROM bs_sach
-- cau 6. Liệt kê danh sách người dùng gồm: id_ten_nguoi_dung (thành 1 cột có tên là id_ten_nguoi_dung) (concat), id_loai_user (quản trị - thành viên) (dùng if(…) với id_loai_user >= 4 là quản trị, từ 1 đến 3 là thành viên) với tên loai_nguoi_dung
SELECT CONCAT(id,'-', ho_ten), IF(id_loai_user >=4, "quản trị","thành viên")
FROM bs_nguoi_dung
-- cau 7. Liệt kê danh sách sách có trọng lượng từ 200gr đến 500 gr, có thêm cột đánh giá như sau: nếu giá bìa nhỏ hơn hoặc bằng 100.000 VNĐ thì đánh giá là "sách giá trung bình", nếu giá bìa trên 100.000 VNĐ thì đánh giá là "sách giá cao" (dùng if(…))
SELECT *, IF(gia_bia <= 100000, "sách giá trung bình","sách giá cao")
FROM bs_sach
WHERE trong_luong BETWEEN 200 AND 500
-- cau 8. Liệt kê danh sách đơn hàng kèm theo ngày đặt được định dạng như sau "Thứ … (theo dạng tiếng Việt) ngày … tháng … năm …", sắp theo ngày tăng dần (dùng case dạng đơn giản: case … when … then)
SELECT *,
    CONCAT(CASE
        WHEN DAYOFWEEK(ngay_dat) = 1 THEN "chủ nhật"
        WHEN DAYOFWEEK(ngay_dat) = 2 THEN "thứ hai"
        WHEN DAYOFWEEK(ngay_dat) = 3 THEN "thứ ba"
        WHEN DAYOFWEEK(ngay_dat) = 4 THEN "thứ tư"
        WHEN DAYOFWEEK(ngay_dat) = 5 THEN "thứ năm"
        WHEN DAYOFWEEK(ngay_dat) = 6 THEN "thứ sáu"
        WHEN DAYOFWEEK(ngay_dat) = 7 THEN "thứ bảy"
        END, ' ngày ', DAY(ngay_dat), ' tháng ', MONTH(ngay_dat), ' năm ', YEAR(ngay_dat)
    ) AS ngay_dat_duoc_dinh_dang
FROM bs_don_hang
ORDER BY ngay_dat_duoc_dinh_dang
-- cau 9. Liệt kê danh sách người dùng với tên đăng nhập và khoảng thời gian đã đăng nhập đến thời điểm hiện tại( đơn vị tính là giây) (lưu ý: nếu thời gian quá mức cho phép 35 ngày thì sẽ báo là “Đã lâu quá bạn không đăng nhập”)
SELECT tai_khoan, thoi_gian_dang_nhap,
    CASE
        WHEN DATEDIFF(CURDATE(),thoi_gian_dang_nhap) > 35 THEN "Đã lâu quá bạn không đăng nhập"
        WHEN DATEDIFF(CURDATE(),thoi_gian_dang_nhap) <= 35 THEN ""
        ELSE "Bạn chưa đăng nhập lần nào"
    END AS trang_thai
FROM bs_nguoi_dung
-- --------------------------------------------------------------------------------
-- BAI 1.7:

-- cau 1. Thống kê số sản phẩm bán được trong tháng 3-2016 của mỗi sách
SELECT s.ten_sach, SUM(so_luong) AS so_luong_ban
FROM bs_sach s JOIN bs_chi_tiet_don_hang ctdh ON s.id = ctdh.id_sach
    JOIN bs_don_hang dh ON dh.id = ctdh.id_don_hang
WHERE MONTH(ngay_dat) = 3 AND YEAR(ngay_dat) = 2016
GROUP BY s.id
-- cau 2. Cho biết danh sách những nhà xuất bản có nhiều hơn 9 quyển sách, gồm id, tên nhà xuất bản, số sách.
SELECT nxb.id, ten_nha_xuat_ban, COUNT(s.id) AS so_luong_sach
FROM bs_nha_xuat_ban nxb JOIN bs_sach s ON nxb.id = s.id_nha_xuat_ban
GROUP BY nxb.id
HAVING so_luong_sach > 9
-- cau 3. Liệt kê danh sách các nhà xuất bản, số sách của từng nhà xuất bản, bổ sung thêm cột ghi chú. Tùy thuộc vào số sách của từng nhà xuất bản nếu số sách <5 thì sẽ ghi chú là "Có ít sách", từ 5 đến 10 sách thì ghi chú là "Có khá nhiều sách " và ngược lại thì ghi chú là "Có rất nhiều sách". (dùng case dạng biểu thức: case … when … then)
SELECT ten_nha_xuat_ban, COUNT(s.id) AS so_luong_sach,
    CASE 
        WHEN COUNT(s.id) < 5 THEN "Có ít sách" 
        WHEN COUNT(s.id) <= 10 THEN "Có khá nhiều sách" 
        ELSE "Có rất nhiều sách"
    END AS ghi_chu
FROM bs_sach s JOIN bs_nha_xuat_ban nxb ON s.id_nha_xuat_ban = nxb.id
GROUP BY nxb.id
-- cau 4. Liệt kê danh sách các tác giả, số sách của từng tác giả, bổ sung thêm cột ghi chú. Tùy thuộc vào số sách của từng tác giả – nếu số sách <5 thì sẽ ghi chú là "Có ít sách", từ 5 đến 10 sách thì ghi chú là "Có khá nhiều sách " và ngược lại thì ghi chú là "Có rất nhiều sách". (dùng if)
SELECT ten_tac_gia, COUNT(s.id) AS so_luong_sach,
    CASE 
        WHEN COUNT(s.id) < 5 THEN "Có ít sách" 
        WHEN COUNT(s.id) <= 10 THEN "Có khá nhiều sách" 
        ELSE "Có rất nhiều sách"
    END AS ghi_chu
FROM bs_sach s JOIN bs_tac_gia tg ON s.id_tac_gia = tg.id
GROUP BY tg.id


-- -------------------------------------------------------------------------------
-- BAI 1.8

-- cau 1: Thêm một người dùng mới vào bảng người dùng với những thông tin sau: linhnguyen – e10adc3949ba59abbe56e057f20f883e – 2 – (rỗng) – Linh Nguyễn – linhnguyen@gmail.com – 1992-13-6 – 20 Đường 3/2 P5, Quận 10, TPHCM Các giá trị tương ứng với các cột trong CSDL và lưu ý: (rỗng) nghĩa là để trống cột đó
INSERT INTO bs_nguoi_dung(tai_khoan, mat_khau, id_loai_user, id_phan_quyen, ho_ten, email, ngay_sinh, dia_chi)
VALUES ("linhnguyen", "e10adc3949ba59abbe56e057f20f883e", "2", NULL, "Linh Nguyễn", "linhnguyen@gmail.com", "1992-13-6", "20 Đường 3/2 P5, Quận 10, TPHCM" )
--  cau 2: Thêm một nhà xuất bản mới vào bảng nhà xuất bản với những thông tin sau: NXB Thế Giới Mới – 236 Bình Thới P.10, Q.11 TPHCM – 083.9633436 – hungbookstoreonline@gmail.com
INSERT INTO bs_nha_xuat_ban
VALUES (NULL,'NXB Thế Giới Mới','236 Bình Thới P.10, Q.11 TPHCM','083.9633436','hungbookstoreonline@gmail.com')
-- cau 3: Thêm các thông tin có trong bảng sách vào bs_sach_tam
INSERT INTO bs_sach_tam
SELECT *
FROM bs_sach
-- cau 4: Thêm các thông tin của sách thuộc nhà “NXB Trẻ” có trong bảng sách vào bảng bang_nxb_tre
INSERT INTO bang_nxb_tre
SELECT *
FROM bs_sach
WHERE id_nha_xuat_ban = (SELECT id
    FROM bs_nha_xuat_ban
    WHERE ten_nha_xuat_ban = "NXB Trẻ"
);

-- -----------------------------------------------
-- BAI 1.9
-- cau 1: Hãy cập nhật lại giá tiền cho sách trong bảng sách tạm có tên là 'Harry Potter 7 Volume Children'S Paperback Boxed Set': giá mới là 999000 VNĐ
UPDATE bs_sach_tam
   SET don_gia = 999000
 WHERE ten_sach = "Harry Potter 7 Volume Children'S Paperback Boxed Set";
-- cau 2. Hãy cập nhật lại tên cho khách hàng có tài khoản là 'admin' tên mới là 'Super User'
UPDATE bs_nguoi_dung
    SET tai_khoan = "Super User"
WHERE tai_khoan = 'admin'
-- cau 3. Hãy cập nhật lại tên của loại “Combo - Series Sách Đặc Sắc” thành “Tuyển tập sách đặc sắc”
UPDATE bs_loai_sach
    SET ten_loai_sach = 'Combo - Series Sách Đặc Sắc'
WHERE ten_loai_sach = "Tuyển tập sách đặc sắc"
-- cau 4. Hãy cập nhật lại đơn giá cho các sách của nhà xuất bản Kim Đồng trong bảng tạm: mỗi sáchcó đơn giá giảm 3000 VNĐ
UPDATE bs_sach_tam
    SET don_gia = don_gia - 3000
-- cau 5. Hãy cập nhật lại đơn giá của 10 sách bán chạy nhất trong bảng tạm theo công thức sau: đơn giá = đơn giá cũ + 5%
UPDATE bs_sach_tam
    SET don_gia = (SELECT don_gia
        FROM bs_sach_tam
        WHERE don_gia = (don_gia + 3000) + (don_gia + 3000)/ 100 * 5
        ORDER BY don_gia DESC
        LIMIT 10)
-- cau 6. Hãy tạo thêm cột tong_tien cho bảng bs_don_hang sau đó tính trị giá cho mỗi đơn hàng và cập nhật cho cột tong_tien của bảng này

--  -------------------------------------------------------------
-- BAI 1.10
-- cau 1: Hãy xóa sách có id là '91' trong bảng sách tạm
DELETE FROM bang_sach_tam
WHERE id = 91;
-- cau 2. Hãy xóa tất cả những sách của nhà xuất bản “Amazon” có trong bảng bang_sach_tam
DELETE FROM bang_sach_tam
WHERE id_nha_xuat_ban = (
    SELECT s.id_nha_xuat_ban
    FROM bs_nha_xuat_ban nxb JOIN bs_sach s ON s.id_nha_xuat_ban = nxb.id
    WHERE ten_nha_xuat_ban LIKE "%Amazon%"
    GROUP BY nxb.id
);
-- cau 3. Hãy xóa những sách có đơn giá nhỏ hơn 50000 VNĐ trong bang_sach_tam
DELETE FROM bang_sach_tam
WHERE don_gia < 50000
-- cau 4. Hãy xóa những sách của tác giả “Âu Dương Mặc Tâm” có đơn giá lớn hơn 50000 VNĐ trong bang_sach_tam
DELETE FROM bang_sach_tam
WHERE don_gia > 50000 AND id_tac_gia = (
    SELECT s.id_tac_gia
    FROM bs_tac_gia tg JOIN bs_sach s ON s.id_tac_gia = tg.id
    WHERE ten_tac_gia LIKE "%Âu Dương Mặc Tâm%"
    GROUP BY tg.id
)
-- cau 5. Hãy xóa những sách mà phần giới thiệu không có từ 'trẻ' trong bang_sach_tam
DELETE FROM bang_sach_tam
WHERE gioi_thieu NOT IN (
    SELECT gioi_thieu
    FROM bs_sach
    WHERE gioi_thieu LIKE "%trẻ%")
-- cau 6. Hãy xoá nhà xuất bản mà không có quyển sách nào
SELECT ten_nha_xuat_ban, email, dia_chi, dien_thoai, COUNT(s.id) AS so_luong_sach
FROM bs_nha_xuat_ban nxb JOIN bs_sach s ON nxb.id = s.id_nha_xuat_ban
WHERE so_luong_sach < 1
GROUP BY nxb.id

-- ---------------------------------------------
-- BAI 1.11

-- cau 1:Liệt kê danh sách nhân viên gồm có các thông tin sau: họ tên, ngày sinh, địa chỉ
SELECT ho_ten, ngay_sinh, dia_chi
FROM nhan_vien
--  cau 2: Liệt kê danh sách nhân viên gồm có các thông tin sau: họ tên, CMND, mức lương. Chỉ liệt kê các nhân viên có họ tên bắt đầu là ‘N’
SELECT ho_ten, CMND, muc_luong
FROM nhan_vien
WHERE ho_ten LIKE "N%"
-- cau 3: Liệt kê danh sách nhân viên sắp xếp giảm dần theo mức lương và tăng dần theo họ tên.
SELECT *
FROM nhan_vien
ORDER BY muc_luong DESC, ho_ten ASC;
-- cau 4: Liệt kê danh sách các nhân viên (họ tên) của đơn vị có ID=1 có thể được phân công vào loại công việc có ID=2.
SELECT nv.*
FROM nhan_vien nv JOIN phieu_phan_cong ppc ON nv.id = ppc.id_nhan_vien
WHERE id_don_vi = 1 AND id_loai_cong_viec = 2
GROUP BY ppc.id
-- cau 5: Liệt kê danh sách các phiếu phân công trong tháng 11/2014
SELECT *
FROM phieu_phan_cong
WHERE MONTH(ngay_bat_dau) = 4 AND YEAR(ngay_bat_dau) = 2014
--  cau 6: Liệt kê danh sách các phiếu phân công trong quý 4 năm 2014 của nhân viên có tên là “Trần thanh thụy Lan”
SELECT ppc.*
FROM phieu_phan_cong ppc JOIN nhan_vien nv ON ppc.id_nhan_vien = nv.id
WHERE MONTH(ppc.ngay_bat_dau) IN (10,11,12) AND YEAR(ppc.ngay_bat_dau) = 2014 AND ho_ten = "Trần thanh thụy Lan" 
-- cau 7: Liệt kê danh sách các nhân viên mà trong họ tên có từ “Trang”.
SELECT *
FROM nhan_vien
WHERE ho_ten LIKE "%Trang%"
-- cau 8: Liệt kê danh sách các nhân viên có mức lương từ 5.000.000 đến 8.000.000, danh sách được xếp theo thứ tự mức lương giảm dần.
SELECT *
FROM nhan_vien
WHERE muc_luong BETWEEN 5000000 AND 8000000
ORDER BY muc_luong DESC
-- cau 9: Liệt kê danh sách các nhân viên có mức lương từ 9.000.000 trở lên.
SELECT *
FROM nhan_vien
WHERE muc_luong >= 9000000
-- cau 10: Liệt kê danh sách các nhân viên có khả năng sử dụng từ 2 ngoại ngữ trở lên
SELECT nv.*, COUNT(kn.id) AS so_ngoai_ngu
FROM nhan_vien nv JOIN kha_nang kn ON nv.id = kn.id_nhan_vien
    JOIN ngoai_ngu nn ON nn.id = kn.id_ngoai_ngu
GROUP BY nv.id
HAVING so_ngoai_ngu >= 2
-- cau 11: Liệt kê danh sách các nhân viên có khả năng sử dụng 3 thứ tiếng: tiếng Anh, Pháp, Đức.
SELECT nv.*, COUNT(kn.id) AS so_ngoai_ngu
FROM nhan_vien nv JOIN kha_nang kn ON nv.id = kn.id_nhan_vien
    JOIN ngoai_ngu nn ON nn.id = kn.id_ngoai_ngu
WHERE nn.ten IN ('Anh','Pháp', 'Đức')
GROUP BY nv.id
HAVING so_ngoai_ngu >= 3
-- cau 12: Thống kê tổng số nhân viên theo từng đơn vị, gồm các thông tin: tên đơn vị, tổng số nhân viên.
SELECT nv.*, COUNT(nv.id) AS so_luong_nhan_vien
FROM nhan_vien nv JOIN don_vi dv ON nv.id_don_vi = dv.id
GROUP BY dv.id
-- cau 13: Cho biết mức lương trung bình của các nhân viên thuộc “Đơn vị C”
SELECT ho_ten, dv.ten, AVG(muc_luong) AS luong_trung_binh
FROM nhan_vien nv JOIN don_vi dv ON nv.id_don_vi = dv.id
WHERE dv.ten = "Đơn vị C"
GROUP BY nv.id
-- cau 14:Cho biết loại công việc nào có nhiều phiếu phân công nhất?
SELECT lcv.ten, COUNT(ppc.id) AS so_luong_phieu_phan_cong
FROM loai_cong_viec lcv JOIN phieu_phan_cong ppc ON lcv.id = ppc.id_loai_cong_viec
GROUP BY lcv.id
ORDER BY so_luong_phieu_phan_cong DESC
LIMIT 1
-- cau 15: Cho biết nhân viên nào trẻ tuổi nhất của “Đơn vị D”.
SELECT ho_ten, (YEAR(CURDATE()) - YEAR(ngay_sinh)) AS tuoi
FROM nhan_vien nv JOIN don_vi dv ON nv.id_don_vi = dv.id
WHERE dv.ten = "Đơn vị D"
ORDER BY tuoi 
LIMIT 1 
-- cau 16: Cho biết mức lương thấp nhất, mức lương cao nhất của từng đơn vị
SELECT dv.ten, MAX(nv.muc_luong) AS luong_cao_nhat, MIN(nv.muc_luong) AS luong_thap_nhat
FROM nhan_vien nv JOIN don_vi dv ON nv.id_don_vi = dv.id
GROUP BY dv.id
-- cau 17: Cho biết loại công việc nào yêu cầu cần phải biết tiếng “Brazil”.
SELECT lcv.ten
FROM loai_cong_viec lcv JOIN yeu_cau yc ON lcv.id = yc.id_loai_cong_viec
    JOIN ngoai_ngu nn ON nn.id = yc.id_ngoai_ngu
WHERE nn.ten = "Brazil"
GROUP BY yc.id
-- cau 18: Cho biết loại công việc nào chỉ yêu cầu biết 1 ngoại ngữ
SELECT lcv.ten, COUNT(yc.id_ngoai_ngu) AS so_ngoai_ngu
FROM loai_cong_viec lcv JOIN yeu_cau yc ON lcv.id = yc.id_loai_cong_viec
    JOIN ngoai_ngu nn ON nn.id = yc.id_ngoai_ngu
GROUP BY lcv.id
HAVING so_ngoai_ngu = 1
-- cau 19: Viết truy vấn và dựa vào kết quả truy vấn để trả lời câu hỏi sau: Có thể phân công nhân viên có ID=10 vào loại công việc có ID=1 với ngày bắt đầu là 20/1/2015 và số ngày = 2 không? Nếu câu trả lời là “Phân công được” thì không cần thực hiện gì thêm. Nếu câu trả lời là “Không phân công được” thì cho biết lý do tại sao?
SELECT IF(COUNT(*) > 0, 'Nhân viên không đủ khả năng ngoại ngữ', 'nhân viên đủ đáp ứng ngoại ngữ')
FROM (
    SELECT nv.ho_ten, kn.id_ngoai_ngu
    FROM nhan_vien nv JOIN kha_nang kn ON nv.id = kn.id_nhan_vien
    WHERE nv.id = 10
) temp
RIGHT JOIN
(
    SELECT lcv.ten, yc.id_ngoai_ngu
    FROM loai_cong_viec lcv JOIN yeu_cau yc ON lcv.id = yc.id_loai_cong_viec
    WHERE lcv.id = 1
) temp2
ON temp.id_ngoai_ngu = temp2.id_ngoai_ngu
WHERE temp.ho_ten IS NULL

SELECT nv.ho_ten, ppc.id, ppc.ngay_bat_dau, so_ngay, ADDDATE(ngay_bat_dau, so_ngay) AS ngay_ket_thuc,
    IF('2015-01-20' > ngay_bat_dau && '2015-01-20' < ADDDATE(ngay_bat_dau, so_ngay), 'Nhân viên đã bận', 'Nhân viên còn trống lịch'),
    IF('2015-01-20' > ngay_bat_dau && '2015-01-20' < ADDDATE(ngay_bat_dau, so_ngay), 0, 1) AS ket_luan
FROM nhan_vien nv JOIN phieu_phan_cong ppc ON nv.id = ppc.id_nhan_vien
WHERE nv.id = 10
HAVING ket_luan = 0;
-- cau 20: Thêm mới 1 nhân viên vào bảng nhân viên với những thông tin sau: Trần thạch Anh, 1, 1980-10-10, 023485214, 7.900.000, 357 Lê Hồng Phong phường 2 Quận 10, 1
INSERT INTO nhan_vien
VALUES (NULL,'Trần thạch Anh', 1, '1980-10-10', '023485214', 7900000, '357 Lê Hồng Phong phường 2 Quận 10', 1)
-- cau 21: Thêm mới khả năng cho nhân viên vừa thêm: nhân viên “Trần thạch Anh” có thể sử dụng tiếng “Anh” và tiếng “Pháp”.
INSERT INTO kha_nang(id_nhan_vien, id_ngoai_ngu)
SELECT *
FROM (
    SELECT id AS id_nhan_vien
    FROM nhan_vien
    WHERE ho_ten LIKE "%Trần thạch Anh%"
) AS temp_nhan_vien
JOIN (
    SELECT id AS id_ngoai_ngu
    FROM ngoai_ngu
    WHERE ten IN  ('Anh', 'Pháp')
) AS temp_ngoai_ngu
ON 1 = 1
-- cau 22: Tạo một bảng tạm có tên là nhan_vien_don_vi_A có cấu trúc giống như bảng nhan_vien và thêm các nhân viên thuộc “Đơn vị A” từ bảng nhan_vien vào bảng này.
INSERT INTO nhan_vien_don_vi_a
SELECT *
FROM nhan_vien 
WHERE id_don_vi = (
    SELECT id
    FROM don_vi
    WHERE ten LIKE "%Đơn vị A%"
)
-- cau 23: Hãy cập nhật lại mức lương của các nhân viên trong bảng nhan_vien_don_vi_A với mức lương mới bằng mức lương cũ + 5%.
UPDATE nhan_vien_don_vi_a
    SET muc_luong  = muc_luong + muc_luong / 100 * 5
-- cau 24:  Hãy xóa các nhân viên có năm sinh nhỏ hơn 1975 trong bảng nhan_vien_don_vi_A.
DELETE FROM nhan_vien_don_vi_a
WHERE YEAR(ngay_sinh) < 1975
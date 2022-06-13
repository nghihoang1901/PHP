-- BAI 1.3

-- cau 1
SELECT ten_nha_xuat_ban, dia_chi, dien_thoai
FROM bs_nha_xuat_ban;
-- cau 2
SELECT ho_ten, dia_chi, dien_thoai
FROM bs_nguoi_dung;
-- cau 3
SELECT ten_tac_gia, gioi_thieu
FROM bs_tac_gia;
-- cau 4
SELECT ho_ten, dia_chi, dien_thoai, email, ngay_sinh
FROM bs_nguoi_dung
ORDER BY ho_ten;
-- cau 5
SELECT ten_sach, sku, gioi_thieu, kich_thuoc, trong_luong, don_gia, gia_bia
FROM bs_sach
ORDER BY ten_sach ASC, don_gia DESC, gia_bia DESC;
-- cau 6
SELECT ten_sach, sku, gioi_thieu, kich_thuoc, trong_luong, don_gia, gia_bia
FROM bs_sach
WHERE (ten_sach LIKE "%Series%");
-- cau 7
SELECT id, tieu_de_tin, noi_dung_tom_tat, noi_dung_chi_tiet, hinh_dai_dien, trang_thai
FROM bs_tin_tuc
WHERE (hinh_dai_dien LIKE "%.jpg%");
-- cau 8
SELECT *
FROM bs_sach
WHERE (ten_sach LIKE "%Tái bản%");
-- cau 9
SELECT *
FROM bs_sach
WHERE don_gia > 100000
ORDER BY ten_sach DESC;
--  cau 10
SELECT *
FROM bs_sach
WHERE id_loai_sach = 17 AND id_nha_xuat_ban = 11
ORDER BY ten_sach;
--  cau 11
SELECT *
FROM bs_sach
WHERE trong_luong >= 500 OR gia_bia >= 150000;
-- cau 12
SELECT *
FROM bs_sach
WHERE don_gia >= 500000 AND don_gia <= 1500000;
-- cau 13
SELECT *
FROM bs_sach
WHERE id_loai_sach IN(56, 90, 92) AND trong_luong >= 300
ORDER BY trong_luong;
-- cau 14
SELECT *
FROM bs_sach
WHERE id_loai_sach = 45 OR don_gia <= 60000;
-- cau 15
SELECT *
FROM bs_sach
WHERE (gioi_thieu LIKE "%huyền bí%" OR gioi_thieu LIKE "%du lịch%");
-- cau 16
SELECT *
FROM bs_sach
WHERE trong_luong IN(280, 350, 380);
-- cau 17
SELECT ten_sach, gioi_thieu, trong_luong, gia_bia, don_gia
FROM bs_sach
ORDER BY don_gia DESC
LIMIT 0,10;
-- cau 18
SELECT ten_sach, gioi_thieu, trong_luong, gia_bia, don_gia
FROM bs_sach
WHERE (gioi_thieu LIKE "%mạnh%" OR gioi_thieu LIKE "%magic%")
ORDER BY don_gia DESC
LIMIT 0,3;
-- cau 19
SELECT *
FROM bs_nha_xuat_ban;
-- cau 20
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
SELECT ten_sach, sku, gioi_thieu, kich_thuoc, trong_luong,COUNT(ctdh.id) AS so_luong_sach_da_ban
FROM bs_don_hang dh JOIN bs_chi_tiet_don_hang ctdh ON dh.id = ctdh.id_don_hang JOIN bs_sach s ON ctdh.id_sach = s.id 
WHERE YEAR(ngay_dat) = 2016
GROUP BY s.id
ORDER BY so_luong_sach_da_ban DESC
LIMIT 0,10;
-- cau 6: Liệt kê danh sách 10 quyển sách có tổng doanh thu cao nhất trong năm 2016 với các thông 
-- tin: tên sách, sku, giới thiệu, kích thước, trọng lượng, đơn giá, giá bìa, tổng doanh thu.
SELECT ten_sach, sku, gioi_thieu, kich_thuoc, trong_luong, ngay_dat, SUM(dh.tong_tien) AS tong_doanh_thu
FROM bs_don_hang dh JOIN bs_chi_tiet_don_hang ctdh ON dh.id = ctdh.id_don_hang JOIN bs_sach s ON ctdh.id_sach = s.id 
WHERE YEAR(ngay_dat) = 2016
GROUP BY s.id
ORDER BY tong_doanh_thu DESC
LIMIT 0,10;
-- cau 7: Liệt kê danh sách 3 quyển sách tổng doanh thu bán sách được trong tháng 3 năm 2016 cao nhất với: tên sách, sku, giới thiệu, kích thước, trọng lượng, đơn giá, giá bìa, doanh thu tháng 3.
SELECT ten_sach, sku, gioi_thieu, kich_thuoc, trong_luong, ngay_dat, SUM(dh.tong_tien) AS tong_doanh_thu
FROM bs_don_hang dh JOIN bs_chi_tiet_don_hang ctdh ON dh.id = ctdh.id_don_hang JOIN bs_sach s ON ctdh.id_sach = s.id 
WHERE MONTH(ngay_dat) = 3 AND YEAR(ngay_dat) = 2016
GROUP BY s.id
ORDER BY tong_doanh_thu DESC
LIMIT 0,3;
-- cau 8 :Thống kê đơn hàng gồm các thông tin sau: id, ngày đặt, tổng số lượng, tổng tiền

--cau 9. Hãy cho biết danh sách các đơn hàng có giá trị trên 500.000 VNĐ

--cau 10. Cho biết tổng số sách của từng tác giả với các thông tin sau: tên tác giả, tổng số lượng sách. 
 
--cau 11. Cho biết giá bìa cao nhất của từng tác giả với các thông tin: tên tác giả, tên sách, giá bìa.

--cau 12. Cho biết danh sách 3 tác giả được nhiều nhà xuất bản khác nhau xuất bản sách nhất, với các  thông tin: tên tác giả, số lượng nhà xuất bản sách.

--cau 13. Liệt kê danh sách 5 nhà xuất bản có địa chỉ chứa từ ‘Hà Nội’ có nhiều sách nhất, cùng các thông tin: tên nhà xuất bản, địa chỉ, số sách xuất bản.

--cau 14. Cho biết danh sách 3 nhà xuất bản đã mời nhiều tác giả nhất để xuất bản sách, cùng các thông tin: tên nhà xuất bản, địa chỉ, số lượng tác giả.

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

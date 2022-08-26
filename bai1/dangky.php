<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Bai1</title>
</head>

<body>
    <form action="info.php" method="post">
        <div class="mt-3" style="border:1px solid black;width:550px;margin:auto;">
            <table width="500">
                <tr>
                    <td align="center" colspan="2">
                        <h4 style="display:inline;color:blue;">ĐĂNG KÝ THÔNG TIN CÁ NHÂN</h4>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><span style="color:blue;">THÔNG TIN CÁ NHÂN</span></td>
                </tr>
                <tr>
                    <td>Họ và tên:</td>
                    <td>
                        <input type="text" name="hoten">
                    </td>
                </tr>
                <tr>
                    <td>Giới tính:</td>
                    <td>
                        <select name="gioitinh">
                            <option value=1>Nam</option>
                            <option value=1>Nu</option>
                            <option value=1>Khac</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Địa chỉ:</td>
                    <td>
                        <input type="text" name="diachi" value="">
                    </td>
                </tr>
                <tr>
                    <td>Ngày sinh:</td>
                    <td>
                        <input type="date" name="ngaysinh" value="">
                    </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>
                        <input type="text" name="email" value="">
                    </td>
                </tr>
                <tr>
                    <td rowspan="2">Tình trạng hôn nhân</td>
                    <td>
                        <input type="radio" value="Độc thân" name="honnhan" checked>
                        Độc thân
                        <input type="radio" value="Đã đính hôn" name="honnhan">
                        Đã đính hôn
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" value="Ly dị" name="honnhan">
                        Ly dị
                        <input type="radio" value="Quá phụ" name="honnhan">
                        Quá phụ
                    </td>
                </tr>
                <tr>
                    <td>Nghề nghiệp:</td>
                    <td>
                        <select name="nghenghiep">
                            <option value="Kỹ sư phần mềm">Kỹ sư phần mềm</option>
                            <option value="Cử nhân kinh tế">Cử nhân kinh tế</option>
                            <option value="Lập trình viên">Lập trình viên</option>
                            <option value="Quản trị khách sạn">Quản trị khách sạn</option>
                            <option value="Giáo viên cntt">Giáo viên cntt</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Sở thích:</td>
                    <td>
                        <input type="checkbox" name="sothich[]" value="Đọc sách">
                        Đọc sách
                        <input type="checkbox" name="sothich[]" value="Đá banh">
                        Đá banh
                        <input type="checkbox" name="sothich[]" value="Lập trình">
                        Lập trình
                        <input type="checkbox" name="sothich[]" value="Games">
                        Games
                    </td>
                </tr>
                <tr>
                    <td>Ghi chú</td>
                    <td>
                        <textarea name="ghichu" cols="30" rows="10"></textarea>
                    </td>
                </tr>
                <tr>
                    <input type="hidden" name="action" value="dangky">
                    <td align="right"><input type="submit" name="btnDangKy" value="Đăng Ký"></td>
                    <td><input type="reset" name="btnNhapLai" value="Nhập lại"></td>
                </tr>
            </table>
        </div>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>
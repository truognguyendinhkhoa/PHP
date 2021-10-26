<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <style>
        img{
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['nguoidung'])) {
        // Ket noi CSDL
        require("connect.php");
        // Chuan bi cau truy van & Thuc thi cau truy van
        $strSQL = "SELECT * FROM nhanvien";
        $result = mysqli_query($dbc, $strSQL);
    }
    else {
        header("location: login.php");
    }
    
    if(mysqli_num_rows($result) == 0)
{
	echo "Chưa có dữ liệu";
}
else
{	echo "<h1 style='color: blue;' align='center'>Thông Tin Nhân Viên</h1>
		  <table align='center' width='800' border='1' cellpadding='2' cellspacing='2' 
				style='border-collapse: collapse;'>
		  	<tr style='background-color: #0084ab;' align='center'>
				<td><b>Mã NV</b></td>
				<td><b>Họ </b></td>
				<td><b>Tên</b></td>
				<td><b>Ngày sinh</b></td>
				<td><b>Giới tính</b></td>
                                <td><b>Địa chỉ</b></td>
                                <td><b>Ảnh</b></td>
		  	</tr>";
	$stt=1;
	while ($row = mysqli_fetch_array($result))
	{
		if($stt%2!=0)
		{	echo "<tr>";
			echo "<td>$row[0]</td>";
			echo "<td>$row[1]</td>";
			echo "<td>$row[2]</td>";
			echo "<td>$row[3]</td>";
                        if ($row['GIOITINH'] == 1) {
                    echo "<td>Nam</td>";
                } else {
                    echo "<td>Nữ</td>";
                }
                 echo "<td>$row[5]</td>";
                
                echo '<td width="500"  align="center"><img src="Hinh/'.$row['ANH'].'"/></td>';
			echo "</tr>";
		}
		else
		{
			echo "<tr style='background-color: #ffb1007a;'>";
			echo "<td>$row[0]</td>";
			echo "<td>$row[1]</td>";
			echo "<td>$row[2]</td>";
			echo "<td>$row[3]</td>";
                        if ($row['GIOITINH'] == 1) {
                    echo "<td>Nam</td>";
                } else {
                    echo "<td>Nữ</td>";
                }
                echo "<td>$row[5]</td>";
			echo '<td width="500" align="center"><img src="Hinh/'.$row['ANH'].'" /></td>';
			echo "</tr>";
		}
			$stt+=1;
	}
	echo '</table>';
}
        mysqli_close($dbc);
     ?>
   
    <a  margin: 0 auto; href="timNhanVien.php">Tìm nhân viên</a>
    <a href="chinhsuanhanvien.php">Chỉnh Sửa </a> 
    <a href="xoanhanvien.php"> Xóa Nhan viên </a>
    <a href="themnv.php"> Thêm nhân viên </a>

</body>
</html>
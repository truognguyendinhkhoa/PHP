<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>TÌM KIẾM THÔNG TIN NHÂN VIÊN</title>
    <style>
        img{
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>

    <form action="" method="get">
    <?php
        require('connect.php');
    ?>

    <table id="tracuu" bgcolor="#eeeeee" align="center" width="70%" border="1" 
               cellpadding="5" cellspacing="5" style="border-collapse: collapse;">

    <tr bgcolor="#eeee10">
            <td align="center"><font color="blue"><h3>TÌM KIẾM THÔNG TIN NHÂN VIÊN</h3></font></td>
    </tr>
    <tr>
            <td align="center">Tên nhân viên: <input type="text" name="tennv" size="30" 
                                    value="<?php if(isset($_GET['tennv'])) echo $_GET['tennv'];?>">
                            <input type="submit" name="tim" value="Tìm kiếm"></td>
    </tr>
    </table>
    </form>
    <?php 

    if($_SERVER['REQUEST_METHOD']=='GET')
    {
            if(empty($_GET['tennv'])) echo "<p align='center'>Vui lòng nhập tên nhân viên</p>";
            else
            {
                    $tennv=$_GET['tennv'];	

                    $query="Select nhanvien.*, TENLOAINV 
                          from nhanvien,loainv 
                          WHERE nhanvien.MALOAINV=loainv.MALOAINV
                                            AND TEN like '%$tennv%'";
                    $result=mysqli_query($dbc,$query);		
                    if(mysqli_num_rows($result)<>0)
                    {	$rows=mysqli_num_rows($result);
                            echo "<div align='center'><b>Có $rows nhân viên được tìm thấy.</b></div>";
                            while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                            {
                                    echo '<table border="1" cellpadding="5" cellspacing="5" style="border-collapse:collapse;">
                                            <tr bgcolor="#eeeeee"><td colspan="2" align="center"><h3>'.
                                                    $row['TEN'].' - '.$row['TENLOAINV'].'</h3></td></tr>';
                                    echo '<tr><td width="200" align="center"><img src="Hinh/'.$row['ANH'].'"/></td>';
                                    echo '<td><i><b>Địa chỉ:</i></b><br />'.$row['DIACHI'].'<br />';
                                    echo '<i><b>Giới Tính:</b></i>'.$row['GIOITINH'].'<br />';

                                    echo '</td></tr></table>';
                            }
                    }
                    else echo "<div><b>Không tìm thấy nhân viên này.</b></div>";
            }
    }

    ?>
    <a href="dsNhanVien.php">Back</a>
</body>
</html>

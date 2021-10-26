<html>
    <head>
        <title>CHỈNH THÔNG TIN NHÂN VIÊN</title>
    </head>
    <body>
        <?php 
        require('connect.php');
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <table bgcolor="#eeeeee" align="center" width="60%" border="0">
            <tr bgcolor="#eeee10">
                    <td colspan="2" align="center"><font color="blue"><h2>CHỈNH THÔNG TIN NHÂN VIÊN</h2></font></td>
            </tr>
            <tr>
                    <td>Mã nhân viên: </td>
                    <td><select name="MANV">
                                    <?php 
                                            $query="select * from nhanvien";    //Hiển thị tên các hãng sữa
                                            $result=mysqli_query($dbc,$query);
                                            if(mysqli_num_rows($result)<>0){
                                                    while($row=mysqli_fetch_array($result)){
                                                            
                                                            $ma_nv=$row['MANV'];
                                                            echo "<option value='$ma_nv' "; 
                                                                            if(isset($_REQUEST['MANV']) && ($_REQUEST['MANV']==$ma_nv)) echo "selected='selected'";
                                                            echo ">$ma_nv</option>";
                                                    }
                                            }
                                            mysqli_free_result($result);
                                    ?>                              
                            </select>
                    </td>
            </tr>
            <tr>
                    <td>Họ nhân viên: </td>
                    <td><input type="text" name="HO" size="50" value="<?php if(isset($_POST['HO'])) echo $_POST['HO'];?>" /></td>
            </tr>
            <tr>
                    <td>Tên nhân viên: </td>
                    <td><input type="text" name="TEN" size="50" value="<?php if(isset($_POST['TEN'])) echo $_POST['TEN'];?>" /></td>
            </tr>
            <tr>
                    <td>Ngày sinh: </td>
                    <td><input type="date" name="NGAYSINH" size="50" value="<?php if(isset($_POST['NGAYSINH'])) echo $_POST['NGAYSINH'];?>" /></td>
            </tr>
            <tr>
                    <td>Giới tính: </td>
                    <td><input type="text" name="GIOITINH" size="50" value="<?php if(isset($_POST['GIOITINH'])) echo $_POST['GIOITINH'];?>" /></td>
            </tr>
            <tr>
                    <td>Địa chỉ: </td>
                    <td><input type="text" name="DIACHI" size="50" value="<?php if(isset($_POST['DIACHI'])) echo $_POST['DIACHI'];?>" /></td>
            </tr>

            <tr>
                    <td>Loại nhân viên:</td>
                    <td><select name="loainv">
                                    <?php 
                                            $query="select * from loainv";  
                                            $result=mysqli_query($dbc,$query);
                                            if(mysqli_num_rows($result)<>0){
                                                    while($row=mysqli_fetch_array($result)){
                                                            $ma_loai_nv=$row['MALOAINV'];
                                                            $ten_loai_nv=$row['TENLOAINV'];
                                                            echo "<option value='$ma_loai_nv' "; 
                                                                            if(isset($_REQUEST['loainv']) && ($_REQUEST['loainv']==$ma_loai_nv)) echo "selected='selected'";
                                                            echo ">$ten_loai_nv</option>";
                                                    }
                                            }
                                            mysqli_free_result($result);
                                    ?>                              
                            </select>
                    </td>
            </tr>
            <tr>
                    <td>Phòng ban: </td>
                    <td><select name="phongban">
                                    <?php 
                                            $query="select * from phongban";    
                                            $result=mysqli_query($dbc,$query);
                                            if(mysqli_num_rows($result)<>0){
                                                    while($row=mysqli_fetch_array($result)){
                                                            $ma_phong_ban=$row['MAPHONG'];
                                                            $ten_phong_ban=$row['TENPHONG'];
                                                            echo "<option value='".$ma_phong_ban."' "; 
                                                                    if(isset($_REQUEST['TENPHONG']) && ($_REQUEST['TENPHONG']==$ma_phong_ban)) echo "selected='selected'";
                                                            echo ">".$ten_phong_ban."</option>";
                                                    }
                                            }
                                            mysqli_free_result($result);
                                    ?>                              
                            </select>
                    </td>
            </tr>

            <tr>
                    <td>Hình ảnh: </td>
                    <td><input type="FILE" name ="hinh" size="80" value="<?php if(isset($_POST['hinh'])) echo $_POST['hinh'];?>" /></td>
            </tr>
            <tr>
                    <td colspan="2" align="center"><input type="submit" name ="sua" size="10" value="Sửa nhân viên" /></td>
            </tr>
            </table>
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $errors=array(); //khởi tạo 1 mảng chứa lỗi
                
                
                //kiểm tra ho nhan vien
                if(empty($_POST['HO'])){
                        $errors[]="Bạn chưa nhập họ ";
                }
                else{
                        $ho=trim($_POST['HO']);
                }
                //kiểm tra ten nhan vien
                if(empty($_POST['HO'])){
                        $errors[]="Bạn chưa nhập tên ";
                }
                else{
                        $ten=trim($_POST['TEN']);
                }
                //kiểm tra ngày sinh
                if(empty($_POST['NGAYSINH'])){
                        $errors[]="Bạn chưa nhập ngày sinh ";
                }
                else{
                        $ngaysinh=trim($_POST['NGAYSINH']);
                }
               //kiểm tra giới tính
                
                $gioitinh=trim($_POST['GIOITINH']);
                
                //kiểm tra địa chỉ
                if(empty($_POST['DIACHI'])){
                        $errors[]="Bạn chưa nhập địa chỉ ";
                }
                else{
                        $diachi=trim($_POST['DIACHI']);
                }

                //cap nhat 
                $ma_phong_ban=$_POST['phongban'];
                $ma_loai_nv=$_POST['loainv'];
                $ma_nv = $_POST['MANV'];
                //kiem tra trong luong

                //kiểm tra hình sản phẩm và thực hiện upload file
                if($_FILES['hinh']['name']!=""){
                        $hinh=$_FILES['hinh'];
                        $ten_hinh=$hinh ['name'];
                        $type=$hinh['type'];
                        $size=$hinh['size'];
                        $tmp=$hinh['tmp_name'];
                        if(($type=='image/jpg' || ($type=='image/png') || ($type=='image/gif') && $size<8000))
                        {
                                move_uploaded_file($tmp,"Hinh_nv/".$ten_hinh);
                        }
                }
                if(empty($errors)){
                    $query="UPDATE nhanvien SET HO='$ho',TEN='$ten',NGAYSINH='$ngaysinh',GIOITINH='$gioitinh',DIACHI='$diachi',ANH='$ten_hinh',MALOAINV='$ma_loai_nv',MAPHONG='$ma_phong_ban'
                            WHERE MANV='$ma_nv'";
                    $result=mysqli_query($dbc,$query);
                    if ($dbc->query($query) === TRUE) {
                        echo "<div align='center'>Đã sửathành công!</div>";
                    }
                    else //neu khong them duoc
                    {
                            echo "<p>Có lỗi, không thể sửa được</p>";
                            echo "<p>".mysqli_error($dbc)."<br/><br />Query: ".$query."</p>";   
                    }
                }
                else
                {//neu co loi
                        echo "<h2>Lá»—i</h2><p>Có lỗi xảy ra:<br/>";
                        foreach($errors as $msg)
                        {
                                echo "- $msg<br /><\n>";
                        }
                        echo "</p><p>Hãy thử lại.</p>";
                }
            }
            mysqli_close($dbc);
        ?>
        <a href="dsNhanVien.php">Back</a>
    </body>
</html>
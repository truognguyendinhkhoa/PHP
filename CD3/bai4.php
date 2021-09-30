<html>
    <head>
        <title>Thong tin</title>
        <style type="text/css">

        body {  

            background-color: #cbbbd1;

        }

        .container{
            width: 450px;
            height: 280px;
            margin: 0 auto;
            border: solid 1px;
        }

    </style>
    </head>
    <body>
        <div class="container">
            <form action="KQbai4.php" method="POST">
            <table>
            <tr><td>Họ và tên:</td>
            <td><input type="text" name="ten" value="<?php if(isset($_POST['ten'])) echo $_POST['ten'];?>" /></td>
            </tr>

            <tr><td>Địa chỉ:</td>
            <td><input type="text" name="dia_chi" value="<?php if(isset($_POST['dia_chi'])) echo $_POST['dia_chi'];?>" /></td>
            </tr>

            <tr><td>Số điện thoại:</td>
            <td><input type="text" name="sdt" value="<?php if(isset($_POST['sdt'])) echo $_POST['sdt'];?>" /></td>
            </tr>

            <tr><td>Giới tính</td>
            <td><input type="radio" name="GT" value="Nam"<?php if(isset($_POST['radGT'])&&$_POST['radGT']=='Nam') echo 'checked="checked"';?> checked/>     Nam</td>
            <td><input type="radio" name="GT" value="Nu" <?php if(isset($_POST['radGT'])&&$_POST['radGT']=='Nu') echo 'checked="checked"';?>/>       Nữ</td>
            </tr>

            <tr>
                <td>Quốc gia:</td>
                <td>
                <select name="quoc_gia">
                <option value="Việt nam" <?php if(isset($_POST['quoc_gia'])&& $_POST['quoc_gia']=='Việt nam') echo 'selected';?> selected>
                Việt nam
                </option>
                <option value="Trung" <?php if(isset($_POST['quoc_gia'])&& $_POST['lunch']=='Trung') echo 'selected';?> >
                Trung
                </option>
                </select></td>
            </tr>
            
            <tr><td>Các môn đã học:</td>
            <td><input type="checkbox" name="chk1" value="PHP" <?php if(isset($_POST['chk1'])&& $_POST['chk1']=='PHP') echo 'checked'; else echo ""?>/>PHP</td>
            <td><input type="checkbox" name="chk2" value="Python" <?php if(isset($_POST['chk2'])&& $_POST['chk2']=='Python') echo 'checked'; else echo ""?>/>Python</td>
            </tr>
            
            <tr><td>Ghi chú</td>
            <td><textarea name="ghi_chu" rows="3" cols="40"><?php if(isset($_POST['ghi_chu'])) echo $_POST['ghi_chu']; ?></textarea></td>
                <tr><td><input type="submit" value="Gửi"/></textarea></td>
                    <td> <input type="reset" value="Hủy" /></textarea></td>
                </tr>
            </tr>
            
		</table>
        </form>
        
        </div>
        

    </body>
</html>





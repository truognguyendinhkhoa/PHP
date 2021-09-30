
<html>
    <head>
        <title>Tien Dien</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <style type="text/css">
            table{
                background: #ffd94d;
                border: 0 solid yellow;
            }
            thead{
                background: #fff14d;    
            }
            td{
                color: blue;
            }
            h3{
                font-family: verdana;
                text-align: center;
                color: #ff8100;
                font-size: medium;
        }

    </style>

    </head>
    <body>
       <?php
            if(isset($_POST['ten_chu_ho'])&&$_POST['chi_so_cu']&&$_POST['chi_so_moi']&&$_POST['don_gia'])
                $tien_dien = ($_POST['chi_so_cu'] - $_POST['chi_so_moi'])*$_POST['don_gia'];
            
        ?>
        <form action="bai2.php" method="POST" name="tien_dien">
            <table>
                <thead>
                    <th colspan="2" align="center"><h3>Thanh Toan Tien Dien</h3></th>
                </thead>
            <tr><td>Ten chu ho:</td>
                <td><input type="text" name="ten_chu_ho" value="<?php if(isset($_POST['ten_chu_ho'])) echo $_POST['ten_chu_ho'];?>" /></td>
            </tr>

            <tr>
                <td>Chi so cu:</td>
                <td><input type="text" name="chi_so_cu" value="<?php if(isset($_POST['chi_so_cu'])) echo $_POST['chi_so_cu'];?>" /></td>
            </tr>

            <tr>
                <td>Chi so moi:</td>
                <td><input type="text" name="chi_so_moi" value="<?php  if(isset($_POST['chi_so_moi'])) echo $_POST['chi_so_moi'];?>" /></td>
            </tr>

            <tr>
                <td>Don gia:</td>
                <td><input type="text" name="don_gia" value="<?php if(isset($_POST['don_gia'])) echo $_POST['don_gia'];?>" /></td>
            </tr>
            <tr>
                <td>Tien dien:</td>
                <td><input type="text" name="tien_dien" readonly="true" value="<?php if(isset($tien_dien)) echo $tien_dien;?>" /></td>
                <tr><td> <input type="submit" value="Tinh tien dien"> </td></tr>
            </tr>
        </form>
        
    </body>
</html>


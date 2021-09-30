<html> 
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>S hình chữ nhật </title>

    <style type="text/css"  display: inline-block;>
        table{
            display: inline-block;
            background: #ff4562;
            border: 0 solid blue;
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
            if(isset($_POST['chieu_dai'])&&$_POST['chieu_rong'])
                $dien_tich = $_POST['chieu_dai']*$_POST['chieu_rong'];
            
        ?>
        <form action="bai1.php" method="POST" name="chu_nhat"> 
            <table>
            <thead>
            <th colspan="2" align="center"><h3>DIỆN TÍCH HÌNH CHỮ NHẬT</h3></th>
            </thead>  
                <tr>
                    <td>Chiều dài</td>
                    <td><input type="text" name="chieu_dai" value="<?php if(isset($_POST['chieu_dai'])) echo $_POST['chieu_dai'];?>" /></td>
                </tr>    
                <tr>
                <td>Chiều rộng</td>
                <td><input type="text" name="chieu_rong" value="<?php if(isset($_POST['chieu_rong'])) echo $_POST['chieu_rong'];?>" /></td>
                </tr>
                
                <tr>
                <td>Diện tích</td>                
                <td><input type="text" name="dien_tich" readonly="true" value="<?php if(isset($dien_tich)) echo $dien_tich;?>" /></td>
                <tr><td><input type="submit" value="Tinh dien tich" ></td></tr>
            </table>
        </form>

    </body>
</html>



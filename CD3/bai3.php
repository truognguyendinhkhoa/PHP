<html>
    <head>
        <title>Phep tinh</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <style type="text/css"  display: inline-block;>
        table{
            display: inline-block;
            background: #ff8632;
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
        <form action="KQbai3.php" method="POST" name="phep_tinh">
            <table>
                <thead>
                    <th colspan="2" align="center"><h3>Chon phep tinh:</h3></th>
                </thead>
                <tr>
                    <td>
                    <input type="radio" name="phep" value="Cong" <?php if(isset($_POST['phep'])&&$_POST['phep']=='Cong') echo 'checked="checked"';?> checked />Cong
                    &nbsp;
                    <input type="radio" name="phep" value="Tru" <?php if(isset($_POST['phep'])&&$_POST['phep']=='Tru') echo 'checked="checked"';?>  /> Tru
                    &nbsp;
                    <input type="radio" name="phep" value="Nhan" <?php if(isset($_POST['phep'])&&$_POST['phep']=='Nhan') echo 'checked="checked"';?>  /> Nhan
                    &nbsp;
                    <input type="radio" name="phep" value="Chia" <?php if(isset($_POST['phep'])&&$_POST['phep']=='Chia') echo 'checked="checked"';?> /> Chia
                    </td>
                </tr>
                <tr>
                    <td>So 1:</td>
                    <td><input type="text" name="s1" value="<?php  if(isset($_POST['s1'])) echo $_POST['s1'];?>" /></td>
                </tr>  
                <tr>
                    <td>So 2:</td>
                    <td><input type="text" name="s2" value="<?php if(isset($_POST['s2'])) echo $_POST['s2'];?>" /></td>
                </tr>
                <tr><td> <input type="submit" value="Tinh"></td></tr>           
            </table>      
        </form>
            <a href="javascript:location.reload();">Tro ve trang truoc</a>

    </body>
</html>



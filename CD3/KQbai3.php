<?php
    if(isset($_POST['phep']) && ($_POST['s1'])&&($_POST['s2']))
    {
        switch ($_POST['phep']) {
            case 'Cong':
                $kq = $_POST['s1'] + $_POST['s2'];
                break;
            case 'Tru':
                $kq = $_POST['s1'] - $_POST['s2'];
                break;
            case 'Nhan':
                $kq = $_POST['s1'] * $_POST['s2'];
                break;
            case 'Chia':
                $kq = $_POST['s1'] / $_POST['s2'];
                break;
            default:
                break;
        }
    }
?>
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
        
        <form action="" method="POST" name="phep_tinh">
            <table>
                <thead>
                    <th colspan="2" align="center"><h3>Phep tinh:<?php echo $_POST['phep']; ?></h3></th>
                </thead>
                <tr>
                    <td>So 1:</td>
                    <td><input type="text" name="s1" value="<?php  if(isset($_POST['s1'])) echo $_POST['s1'];?>" /></td>
                </tr>  
                <tr>
                    <td>So 2:</td>
                    <td><input type="text" name="s2" value="<?php if(isset($_POST['s2'])) echo $_POST['s2'];?>" /></td>
                </tr>
                <tr><td>Ket qua:</td>
                    <td><input type="text" name="kq" readonly="true" value="<?php if(isset($kq)) echo $kq;?>" /></td>
                </tr>           
            </table>
        </form>
        <a href="javascript:window.history.back(-1);">Tro ve trang truoc</a>
    </body>
</html>


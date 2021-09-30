<html>
    <head>
        <title>Kết quả bài 4</title>
        <style type="text/css">

        body {  

            background-color: #cbbbd1;

        }

        .container{
            width: 180px;
            height: 155px;
            margin: 0 auto;
            border: solid 1px;
        }

    </style>
    </head>
    <body>
        <div class="container">
            <table>
                <tr>
                    <td>
                        Họ và tên: <?php echo $_POST['ten']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Giới tính: <?php echo $_POST['GT']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Địa chỉ: <?php echo $_POST['dia_chi']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Số điện thoại: <?php echo $_POST['sdt']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Quốc gia : <?php echo $_POST['quoc_gia'];?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Môn học:
                        <?php
                            if(isset($_POST['chk1'])) echo  $_POST['chk1'].",";
                            if(isset($_POST['chk2'])) echo  $_POST['chk2'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                         Ghi chú: <?php echo $_POST['ghi_chu']; ?>
                    </td>
                </tr>
            </table>   
            <a href="javascript:window.history.back(-1);">Trở về trang trước</a>
        </div>
         
         
    </body>
</html>



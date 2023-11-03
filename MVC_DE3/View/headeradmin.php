<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    a
    {
        text-decoration: none;
        color: black;
        font-size: 20px;
    }
    a:hover
    {
        color: red;
    }
    th,td {
            border: 1px solid #CCCCCC;
            padding: 1rem 2rem 1rem 2rem;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        tr:nth-child(1) {
            font-size: 20px;
            font-weight: bold;
        }

        tr:nth-child(1):hover {
            background-color: unset;
        }
        .text-name-ad
        {
            color: red;
           font-size: 15px;
           font-family: Arial, Helvetica, sans-serif; 
        }
        .text-ad
        {
            font-size: 15px;
        }
        #admin-text
        {
            font-weight: bold;
            color: red;
        }
</style>
<body>
    <table>
        <tr>
            
            <td width = "90%"><a href="#"><span id="admin-text">QUẢN TRỊ VIÊN</span></a></td>
            <td width = "10%"><a href="index.php"><span style="font-size:12px">Xin chào</span><span id="admin-text"> <?=$_SESSION['dangnhap'][0][3]?><br></span><button class="text-ad">THOÁT</button></a></td>
        </tr>
    </table>
</body>
</html>
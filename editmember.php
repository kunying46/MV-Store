<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this is webpage for edit data</title>
</head>
<body>
    <?php
        if(!isset($_GET['mbID'])){
            header("refresh: 0; url=mainmenumember.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM member WHERE mbID='$_GET[mbID]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>
    <form method="post" action="editsuccess.php">
        <p>
            <label>ID</label>
            <input type="text" name="mbID" id="mbID" value="<?=$row['mbID'];?>">
        </p>
        <p>
            <label>ชื่อ</label>
            <input type="text" name="mbname" id="mbname" value="<?=$row['mbname'];?>">

        </p>

        <p>

            <label>นามสกุล</label>

            <input type="text" name="mblastname" id="mblastname" value="<?=$row['mblastname'];?>">

        </p>

        <p>

            <label>ที่อยู่</label>

            <input type="text" name="address" id="address" value="<?=$row['address'];?>">

        </p>

        <p>

            <label>เบอร์โทร</label>

            <input type="text" name="telephone" id="telephone" value="<?=$row['telephone'];?>">

        </p>
        <input type="submit" value="บันทึก" class="input1">
        <a href="mainmenumember.php"><button> Home</button></a>
    </form>

</body>
</html>
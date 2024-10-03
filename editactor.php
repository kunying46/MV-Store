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
        if(!isset($_GET['aid'])){
            header("refresh: 0; url=mainmenuactor.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM actor WHERE aid='$_GET[aid]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>
    <form method="post" action="editsuccessat.php">
        <p>
            <label>ID</label>
            <input type="text" name="aid" id="aid" value="<?=$row['aid'];?>">
        </p>
        <p>
            <label>ชื่อ</label>
            <input type="text" name="aname" id="aname" value="<?=$row['aname'];?>">

        </p>

        <p>

            <label>นามสกุล</label>

            <input type="text" name="alastname" id="alastname" value="<?=$row['alastname'];?>">

        </p>

        <p>

            <label>จำนวนเรื่องที่แสดง</label>

            <input type="text" name="acount" id="acount" value="<?=$row['acount'];?>">

        </p>

        <p>

            <label>เพศ</label>
            
            <input type="radio" name="agender" id="agender" value="<?=$row['agender'];?>">f
            <input type="radio" name="agender" id="agender" value="<?=$row['agender'];?>">m
           
        </p>
        <input type="submit" value="บันทึก" class="input1">
        <a href="mainmenuactor.php"><button> Home</button></a>
    </form>

</body>
</html>
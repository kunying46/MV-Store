<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show data</title>
</head>
<body>
<form method="post" action="insertsuccessat.php">
    <h1>Insert</h1>
    <p>
            <label>ID</label>
            <input type="text" name="aid" id="aid" >
        </p>
        <p>
            <label>ชื่อ</label>
            <input type="text" name="aname" id="aname" >

        </p>

        <p>

            <label>นามสกุล</label>

            <input type="text" name="alastname" id="alastname" >

        </p>

        <p>

            <label>จำนวนเรื่องที่แสดง</label>

            <input type="text" name="acount" id="acount" >

        </p>

        <p>

            <label>เพศ</label>
            <input type="radio" name="agender" id="agender" >f
            <input type="radio" name="agender" id="agender" >m
        </p>
        <input type="submit" value="บันทึก" class="input1">
        <a href='mainmenuactor.php'> <button> Home </button></a>
    </form>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show data</title>
</head>
<body>
<form method="post" action="insertsuccess.php">
    <h1>Insert</h1>
    <p>
            <label>ID</label>
            <input type="text" name="mbID" id="mbID" >
        </p>
        <p>
            <label>ชื่อ</label>
            <input type="text" name="mbname" id="mbname" >

        </p>

        <p>

            <label>นามสกุล</label>

            <input type="text" name="mblastname" id="mblastname" >

        </p>

        <p>

            <label>ที่อยู่</label>

            <input type="text" name="address" id="address" >

        </p>

        <p>

            <label>เบอร์โทร</label>
            <input type="text" name="telephone" id="telephone" >
        </p>
        <input type="submit" value="บันทึก" class="input1">
        <a href='mainmenumember.php'> <button> Home </button></a>
    </form>

</body>
</html>
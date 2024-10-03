<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show data</title>
</head>
<body>
<form method="post" action="insertsuccesspd.php">
    <h1>Insert</h1>
    <p>
            <label>ID</label>
            <input type="text" name="pdid" id="pdid" >
        </p>
        <p>
            <label>ชื่อ</label>
            <input type="text" name="pdname" id="pdname" >

        </p>

        <p>

            <label>รายละเอียด</label>

            <input type="text" name="pddetails" id="pddetails" >

        </p>

        <p>

            <label>ระยะเวลา(ชั่วโมง)</label>

            <input type="text" name="pdperiod" id="pdperiod" >

        </p>

        <p>

            <label>วันที่</label>

            <input type="date" name="pddate" id="pddate" >

        </p>
        <input type="submit" value="บันทึก" class="input1">
        <a href='mainmenuproduct.php'> <button> Home </button></a>
    </form>

</body>
</html>
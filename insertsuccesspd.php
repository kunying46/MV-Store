<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show insert data</title>
</head>
<body>
    <?php
        require 'conn.php';
        $sql_update="INSERT INTO product(pdid,pdname,pddetails,pdperiod,pddate) VALUES ('$_POST[pdid]','$_POST[pdname]','$_POST[pddetails]' ,'$_POST[pdperiod]' ,'$_POST[pddate]')";

        $result= $conn->query($sql_update);

        if(!$result) {
            die("Error God Damn it : ". $conn->error);
        } else {

        echo "Insert Success <br>";
        header("refresh: 1; url=mainmenuproduct.php");
        }

    ?> 


</body>
</html>

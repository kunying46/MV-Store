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
        $sql_update="INSERT INTO member(mbID,mbname,mblastname,address,telephone) VALUES ('$_POST[mbID]','$_POST[mbname]','$_POST[mblastname]' ,'$_POST[address]' ,'$_POST[telephone]')";

        $result= $conn->query($sql_update);

        if(!$result) {
            die("Error God Damn it : ". $conn->error);
        } else {

        echo "Insert Success <br>";
        header("refresh: 1; url=mainmenumember.php");
        }

    ?> 


</body>
</html>

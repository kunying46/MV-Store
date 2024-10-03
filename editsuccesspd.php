
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpagemshow editing data</title>
</head>
<body>
    <?php
            require 'conn.php';
$sql_update="UPDATE product SET pdname='$_POST[pdname]',pddetails='$_POST[pddetails]' ,pdperiod='$_POST[pdperiod]' ,pddate='$_POST[pddate]' WHERE pdid='$_POST[pdid]' ";

            $result= $conn->query($sql_update);

            if(!$result) {
                die("Error God Damn it : ". $conn->error);
            } else {

            echo "Edit Success <br>";
            header("refresh: 1; url=mainmenuproduct.php");
            }

        ?>

</body>
</html>

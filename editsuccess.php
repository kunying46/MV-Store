
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
$sql_update="UPDATE member SET mbname='$_POST[mbname]',mblastname='$_POST[mblastname]' ,address='$_POST[address]' ,telephone='$_POST[telephone]' WHERE mbID='$_POST[mbID]' ";

            $result= $conn->query($sql_update);

            if(!$result) {
                die("Error God Damn it : ". $conn->error);
            } else {

            echo "Edit Success <br>";
            header("refresh: 1; url=mainmenumember.php");
            }

        ?>

</body>
</html>

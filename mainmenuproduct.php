
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ภาพยนตร์</h1><br>  //create ภาพยนตร์ table
    <?php
    require 'conn.php';
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
    ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ชื่อ</th>
                    <th>รายละเอียด</th>
                    <th>ระยะเวลา</th>
                    <th>วันที่</th>
                    <th> Edit </th>
                    <th> Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php // show data by fetch from database
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>".$row["pdid"]."</td>"."<td>".$row["pdname"]."</td>"."<td> ".$row["pddetails"]."</td>"."<td> ".$row["pdperiod"]."</td>"."<td>".$row["pddate"]."</td>"."<td>"."<a href='editproduct.php?pdid=".$row["pdid"]."'><button> Edit </button></a>"."</td>"."<td>"."<a href='deleteproduct.php?pdid=".$row["pdid"]."'><button > Delete </button></a>"."</td>";
                            echo "</tr>";
                            
                            
                        }
                        
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>  //close table
        <br>
        <a href='insertproduct.php'><button> Insert </button></a>
        <a href='home.html'> <button> Home </button></a>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>นักแสดง</h1><br>  //create นักแสดงtable
    <?php
    require 'conn.php';
    $sql = "SELECT * FROM actor";
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
                    <th>นามสกุล</th>
                    <th>จำนวนเรื่องที่แสดง</th>
                    <th>เพศ</th>
                    <th> Edit </th>
                    <th> Delete</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php // show data by fetch from database
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>".$row["aid"]."</td>"."<td>".$row["aname"]."</td>"."<td>".$row["alastname"]."</td>"."<td> ".$row["acount"]."</td>"."<td>".$row["agender"]."</td>"."<td>"."<a href='editactor.php?aid=".$row["aid"]."'><button> Edit </button></a>"."</td>"."<td>"."<a href='deleteactor.php?aid=".$row["aid"]."'><button> Delete </button></a>"."</td>";
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
        <a href='insertactor.php'><button> Insert </button></a>
        <a href='home.html'> <button> Home </button></a>

</body>
</html>

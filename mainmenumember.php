
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>สมาชิก</h1><br>  //create สมาชิก table
    <?php
    require 'conn.php';
    $sql = "SELECT * FROM member";
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
                    <th>ที่อยู่</th>
                    <th>เบอร์โทร</th>
                    <th> Edit </th>
                    <th> Delete</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php // show data by fetch from database
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>".$row["mbID"]."</td>"."<td>".$row["mbname"]."</td>"."<td>".$row["mblastname"]."</td>"."<td>".$row["address"]."</td>"."<td>".$row["telephone"]."</td>"."<td>"."<a href='editmember.php?mbID=".$row["mbID"]."'><button> Edit </button></a>"."</td>"."<td>"."<a href='deletemember.php?mbID=".$row["mbID"]."'><button > Delete </button></a>"."</td>";
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
        <a href='insertmember.php'><button> Insert </button></a>
        <a href='home.html'> <button> Home </button></a>

</body>
</html>

<?php
$servername = "localhost";
$username = "homestead";
$password = "secret";
$dbname = "TA";

$file = fopen("data", "r");
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname,33060);

mysqli_query($conn,'set names utf8');

// 检测连接

if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
while (!feof($file)) {
    $line = fgets($file);
    $arr = explode(" ", $line);
    $sql = "INSERT INTO courses (course_id,teacher,course_name) VALUES ('$arr[0]','$arr[2]','$arr[1]');";
    if ($conn->query($sql) === TRUE) {
        //echo "新记录插入成功";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

$result = mysqli_query($conn,"SELECT * FROM courses WHERE course_id='PH2522101'");

while($row = mysqli_fetch_array($result))
{
    echo $row['course_id'] . " " . $row['course_name'];
    echo "<br>";
}

$conn->close();
fclose($file);
?>
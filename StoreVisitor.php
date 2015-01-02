<?php
$servername = "localhost"; //database host url
$username = "root"; // database username
$password = "pass"; // database password
$dbname = "db"; //database name

$ip=$_POST["ip"];
$country=$_POST["country"];
$browser=$_POST["browser"];
$platform=$_POST["platform"];
$isp=$_POST["isp"];
$url=$_POST["url"];
$arriveTime=$_POST["arriveTime"];
$leaveTime=$_POST["leaveTime"];
$duration=$_POST["duration"];

					
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO visits (ip, country, browser,platform,isp,url,arrivetime,leavetime,duration)
VALUES ('$ip', '$country', '$browser','$platform', '$isp', '$url','$arriveTime','$leaveTime','$duration')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
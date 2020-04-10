<?php 
include 'database.php';


$username = test_input($_POST["username"]);
$password = test_input($_POST["password"]);

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


$conn = OpenCon();

$result = "select * from admission where Last_name = '$username' and Phone = '$password'";
$resultt = mysqli_query($conn,$result);
$row = mysqli_fetch_array($resultt);
if ($row['Last_name'] == $username && $row['Phone'] == $password) {
	echo "loging succesfull";
}
else
{
	echo "failed login";
}

CloseCon($conn);
?>
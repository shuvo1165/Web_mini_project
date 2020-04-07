<?php 
$fnameErr = $lnameErr = $emailErr = $phoneErr = $genderErr = $codeErr = "";
$first = $last = $email = $phone = $gender = $birthday = $code ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["first"])) {
    $fnameErr = "Name is required";
  } else {
    $first = test_input($_POST["first"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$first)) {
      $fnameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["last"])) {
    $lnameErr = "Name is required";
  } else {
    $last = test_input($_POST["last"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$last)) {
      $lnameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  if (empty($_POST["phone"])) {
    $phoneErr = "Phone number required";
  } else {
    $phone = test_input($_POST["phone"]);
    if (!filter_var($phone, FILTER_SANITIZE_NUMBER_INT)) {
      $phoneErr = "Invalid phone format";
    }
  }
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["birthday"])) {
    $birthday = "0000-00-00";
  } else {
    $birthday = test_input($_POST["birthday"]);
  }
  if (empty($_POST["code"])) {
    $codeErr = "Must include course code";
  } else {
    $code = test_input($_POST["code"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



$query = "INSERT INTO admission (First_name,Last_name,Email,Phone,Gender,Birthday,Course_code) 
VALUES('$first','$last','$email','$phone','$gender','$birthday','$code')";


$db = mysqli_connect('localhost', 'root', '', 'learn_with_me');
mysqli_query($db, $query);
?>
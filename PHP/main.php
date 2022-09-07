

<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);

$name = test_input($_POST["fname"]);
if (!preg_match("/^[a-zA-Z-'¬- ]*$/",$name)) {
  $nameErr = "Enter letters, white space, ', or - characters only."; 
}
$name = test_input($_POST["lname"]);
if (!preg_match("/^[a-zA-Z-'¬- ]*$/",$name)) {
  $nameErr = "Enter letters, white space, ', or - characters only."; 
}
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
}
$nameErr = $emailErr  ="";
$name = $email = $comment  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $nameErr = "First Name is required";
  } else {
    $name = test_input($_POST["fname"]);
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["lname"])) {
      $nameErr = "First Name is required";
    } else {
      $name = test_input($_POST["lname"]);
    }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 mail("ddd@gmail.com");
?>
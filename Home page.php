<?php 
  $value = $result = "";
  if($_SERVER['REQUEST_METHOD'] === "POST") {
    $value= "3";
    $result = "36";

    if($value === $_POST['value'] && $result === $_POST['result']) {

      if(isset($_POST['converter'])) {
        setcookie("value", $value, time() + 60*60*24*5);
        setcookie("result", $result, time() + 60*60*24*5);
       
      }

      session_start();
      $_SESSION['value'] = $value;
      $_SESSION['result'] = $result;

    
    }
  }

  if(isset($_COOKIE['converter'])) {
    $uname = $_COOKIE['value'];
    $pass = $_COOKIE['result'];
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 
?> 
<div
?><!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
    </head>
    <body>
        <html>
    <head>
    <body>

        <h1>Home page[1]</h1>
        <h1>Conversion site</h1>

        <select name="convert" id="Rname">
        <option value="">Select one</option>
        <option value="feetToinch" >feet To inch</option>
        <option value="inchTofeet">inch To feet</option>
    
        </select> <br> <br>
     

	     
    1 .<a href="home.php">Home</a>
    2 .<a href="rate.php">Conversion Rate</a>
    3 .<a href="history.php">History</a>

	 <br></br>
    

 <br></br>
  <label for="value">value :</label>
  <input type="text" id="value" name="value">

<br></br>
  <label for="result">result :</label>
  <input type="result" id="result" name="result">
  
    <br><br>

</body>
</html
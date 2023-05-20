
<?php 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up | By Code Info</title>
    <link rel="stylesheet" href="Css/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="signup-box">
      <h1>Sign Up</h1>
      
      <form method="post" action="functions.php">
        <label>First Name</label>
        <input type="text" placeholder="" name="first_name" value="ola" />
        <label>Last Name</label>
        <input type="text" placeholder="" />
        <label>Email</label>
        <input type="email" placeholder="" name="email" />
        <label>Password</label>
        <input type="password" placeholder="" name="pass" />
        <label>Confirm Password</label>
        <input type="password" placeholder="" />
        <button type="submit" onclick="<?php echo INSERT()?>" value="Submit" >submit</button>
        
      <closeform></closeform></form>
     
    </div>
    <p class="para-2">
      Already have an account? <a href="login.php">Login here</a>
    </p>
  </body>
</html>


<?php

function testfun()
{
   echo "Your test function on button click is working";
   die();
}

if(array_key_exists('test',$_POST)){
   testfun();
}

function INSERT()
 {
  $servername = "localhost";
  $username = "root";
  $password = "";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password,'test-pro');
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  
    $sql = "INSERT INTO usres (id, name, email,pass)
  VALUES (23455, 'ola', 'ola@example.com','12345')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
}
?>
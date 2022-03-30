<html>
<title>
My First App
</title>
<body>
<h1>My First Web Page</h1>

  <?php
  echo "<h1> This is my first app</h1>";
  ?>

   <table border=1> 
   <tr><td>User Name:</td><td><input type=text name=uname></td></tr>
   
   <tr><td>Password:</td><td><input type=password name=pwd></td></tr>
   </table><br>
  //<button type="submit" value="Submit">Submit</button>

  

<form method="post"action="<?php echo$_SERVER['PHP_SELF'];?>">
<input type="submit" Value="Connect to MySQL Server & Insert data in a table">

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {
  $servername = "bgpsqlserver.mysql.database.azure.com";
  $username = "bgp";
  $password = "abcd@123";
  $dbname = "bgpdb";
  }
  
  $conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";
  
  
  //Insert into table query
        $sql = "INSERT INTO student VALUES (4, 'Savani', 'Shivraj', '86565','abc@abc.com');";
        $sql .= "INSERT INTO Student VALUES (7, 'twinkal', 'karad', '55','abc@abc.com');";
        $sql .= "INSERT INTO Student VALUES (8, 'pooja', 'karad', '55','abc@abc.com');";
        $sql .= "INSERT INTO Student VALUES (9, 'komal', 'abad', '55','abc@abc.com');";
        $sql .= "INSERT INTO Student VALUES (10, 'shreya', 'abad', '55','abc@abc.com');";
        $sql .= "INSERT INTO Student VALUES (11, 'mayuri', 'avasari', '55','abc@abc.com')";
     
  
  if ($conn->multi_query($sql) === TRUE) {
        echo "New records inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
  
  ?>
   
  </form>


</body>
</html>

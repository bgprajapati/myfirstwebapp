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
   </table>
   <tr><td align="center"> <button type="submit" value="Submit">Submit</button></td></tr>
   
  
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <input type="submit" Value="Connect to MySQL Server & Insert data in a table">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$servername = "bgpsqlserver.mysql.database.azure.com";
$username = "bgp";
$password = "abcd@123";
$dbname = "bgpdb";
  
  
    // Create connection
$conn = newmysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {​
die("Connection failed: ".$conn->connect_error);
}​
/*echo"Connected successfully<br>";
$sql = "INSERTINTO student VALUES (4, 'Savani', 'Shivraj', '86565');";
$sql.="INSERTINTO Student VALUES (7, 'twinkal', 'karad', '55');";
$sql.="INSERTINTO Student VALUES (8, 'pooja', 'karad', '55');";
$sql.="INSERTINTO Student VALUES (9, 'komal', 'abad', '55');";
$sql.="INSERTINTO Student VALUES (10, 'shreya', 'abad', '55');";
$sql.="INSERTINTO Student VALUES (11, 'mayuri', 'avasari', '55')";*/


</body>
</html>

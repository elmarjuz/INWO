<?php /*
$con = mysqli_connect('mysql.cs.ut.ee', 'juzar', 's33bim2gi');
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
*/
?>



<?php
/* $con=mysqli_connect("mysql.cs.ut.ee", "juzar", "s33bim2gi");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Create database
$sql="CREATE DATABASE test_db";
if (mysqli_query($con,$sql))
  {
  echo "Database my_db created successfully";
  }
else
  {
  echo "Error creating database: " . mysqli_error($con);
  }
*/?>

<?php 

$con=mysql_connect("mysql.cs.ut.ee", "juzar", "s33bim2gi");
if (mysql_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysql_connect_error();
  }
 
  $sql = 'DROP DATABASE test_db';
if (mysql_query($sql, $con)) {
    echo "Database my_db was successfully dropped\n";
} else {
    echo 'Error dropping database: ' . mysql_error() . "\n";
}
  
   
 /*$sql = "CREATE TABLE Comments
	(
	CID INT NOT NULL AUTO_INCREMENT, 
	PRIMARY KEY(CID),
	UserID INT,
	Time TIMESTAMP,
	Email VARCHAR(100),
	AdminStatus BIT,
	FacebookId INT
	)";
	
	
	 $sql = "CREATE TABLE Comments
	(
	 UID INT NOT NULL AUTO_INCREMENT, 
	PRIMARY KEY(UID),
	NickName CHAR(15),
	Email VARCHAR(100),
	AdminStatus BIT,
	FacebookId INT
	)";*/
	
// Execute query
/*if (mysqli_query($con,$sql))
  {
  echo "Table test_table created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }*/
  

  
?>

<?php  /*
// Create table
$sql="CREATE TABLE test_table(FirstTest CHAR(30),LastTest CHAR(30),IntTest INT)";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table test_table created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }

  */?>  

  <?php 
 /* mysqli_query($con,"INSERT INTO test_table (FirstTest, LastTest, IntTest)
VALUES ('Peter', 'Griffin',35)");


$result = mysqli_query($con,"SELECT * FROM test_table");

while($row = mysqli_fetch_array($result))
  {
  echo $row['FirstTest'] . " " . $row['LastTest'];
  echo "<br>";
  }
  */
  ?>
  
  <?php 
  mysql_close($con);
	unlink("deleteme.php"); 
  ?>
  
  
  
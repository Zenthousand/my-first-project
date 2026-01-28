<?php
$servername = "localhost";
$username = "root"; 
$password = "";    
$dbname = "abuton_db";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Id, Name, Email, Password, Contact, Gender FROM usertbl";
$result = $conn->query($sql);

echo "<h2>User Table Data</h2>";

if ($result->num_rows > 0) {
  
    echo "<table border='1' cellpadding='10' style='border-collapse: collapse; width: 100%;'>";
    echo "<tr style='background-color: #f2f2f2;'>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Contact</th>
            <th>Gender</th>
          </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Id"]. "</td>
                <td>" . $row["Name"]. "</td>
                <td>" . $row["Email"]. "</td>
                <td>" . $row["Password"]. "</td>
                <td>" . $row["Contact"]. "</td>
                <td>" . $row["Gender"]. "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results found.";
}


$conn->close();
?>
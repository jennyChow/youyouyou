
<?php
/**
 * Created by IntelliJ IDEA.
 * User: silinhuang
 * Date: 10/28/15
 * Time: 10:54 AM
 */

//$servername = "localhost";
//$username = "username";
//$password = "password";
//$dbname = "myDB";

// Create connection
$conn = db_connect();
//$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$current_comment = addslashes ($_POST['message-text']);

$sql = "UPDATE comment SET content='Doe' WHERE email = $current_comment";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
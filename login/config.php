
<?php
$conn = new mysqli ("localhost","root","","hakaa");

// Check connection
if ($conn->connect_error){
	die(" Connection failed: " . $conn->connect_error );
}
session_start();

<?php
$hostname = "localhost";
$username= "root";
$userPassword = "root";
$dbName = "todo";

$con = mysqli_connect($hostname, $username, $userPassword, $dbName);

if($con){
	echo "Connection is ok <br>";
}else{
	echo " Error!! " . mysqli_connect_error();
	die();
}
//$taskList = array("Bazar", "Playing", "testing", "Programming");
//$result = mysqli_query($con, "SELECT * FROM users WHERE email = 'apple@gmail.com'");
//if($result){
//	$row = mysqli_fetch_assoc($result);
//	$user_id = $row['id'];
//	foreach ($taskList as $task) {
//		$query        = "INSERT INTO tasks (task,status,user_id) VALUES ('$task', 0, $user_id)";
//		$insertResult = mysqli_query( $con, $query );
//		if(!$insertResult){
//			echo mysqli_error($con) . "<br>";
//		}
//	}
//}

//$query = "UPDATE tasks SET status = 1, task = 'Going to school' WHERE id = 15";
//$updateResult = mysqli_query($con, $query);
//echo "<pre>";
//print_r( $updateResult );
//echo "</pre>";
$query = "DELETE FROM tasks WHERE status=1 AND user_id = 1";
$deleteResult = mysqli_query($con, $query);
echo "<pre>";
print_r( $deleteResult );
echo "</pre>";

//if()
//echo "<pre>";
//print_r( $row );
//echo "</pre>";
////
//
//if($userResult){
//	$user_id = mysqli_insert_id($con);
// 	$query = "INSERT INTO tasks (task,status,user_id) VALUES ('Going', 0, $user_id)";
//	$insertResult = mysqli_query($con, $query);
//}
//
//
//
//echo "<br> ===========<br>";
//$query = "SELECT * FROM tasks";
//$data = mysqli_query($con,$query);
//if(mysqli_num_rows($data)) {
//	echo "<table style='with:300px;' border='1'>";
//	echo "<tr><th>ID</th><th>Task</th><th>Status</th><th>User</th></tr>";
//	while ( $row = mysqli_fetch_assoc($data) ) {
//		$status = empty($row['status']) ? " Incomplete" : "Completed";
//		echo "<tr><td>{$row['id']}</td><td>{$row['task']}</td><td>{$status}</td><td>{$row['user_id']}</td></tr>";
//	}
//	echo "</table>";
//}else{
//	echo "No data found.";
//}
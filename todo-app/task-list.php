<?php
require_once "inc/functions.php";
if ( ! is_user_logged_in() ) {
	header( "Location: login.php" );
	die();
}
require_once "inc/db.php";
$user_id = get_current_user_id();
$query   = "SELECT * FROM tasks WHERE user_id=$user_id";
$result  = mysqli_query( $con, $query );

require_once "header.php";
?>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">My Task List</h1>
        <p class="lead">List of my data</p>
    </div>
    <div class="container">
        <form>
            <input type="text" class="form-control" name="search">
            <input type="date" class="form-control" name="date">
            <button class="btn btn-primary">Filter</button>
        </form>
    </div>
    <div class="container">
        <table class='table'>
            <tr>
                <th>ID</th>
                <td>Task</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
			<?php
			if ( mysqli_num_rows( $result ) ) {
			    $i = 1;
				while ( $row = mysqli_fetch_assoc( $result ) ) {
				    $status = $row['status'] ? "Completed" : "In Completed";
                    echo "<tr>
                                <td>{$i}</td>
                                <td>{$row['task']}</td>
                                <td>$status</td>
                                <td>
                                    <a class='btn btn-info' href='edit-task.php?id={$row['id']}'>Edit</a>
                                    <a class='btn btn-success' href='complete-task.php?id={$row['id']}'>Complete</a>
                                    <a class='btn btn-danger' href='delete-task.php?id={$row['id']}'>Delete</a>
                                 </td>
                           </tr>";
					$i++;
				}
			}else{
			    echo "No task found.";
            }
			?>
        </table>
    </div>

<?php
require_once "footer.php"; ?>
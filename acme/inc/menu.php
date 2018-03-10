<div class="container">
	<ul>
		<li><a href="index.php">Home</a></li>
		<?php
		if(is_user_logged_in()){
		    if(is_user_admin()){
			    echo "<li><a href='admin.php'>Admin</a></li>";
		    }
			echo "<li><a href='user.php'>User</a></li>";
		}
		?>
		<li>
			<?php
				if(is_user_logged_in()){
				    $user_email = get_user_email();
					echo "<a href='logout.php'>Logout ({$user_email})</a>";
				}else{
					echo "<a href='login.php'>Login</a>";
				}
			?>
			</li>
	</ul>
</div>
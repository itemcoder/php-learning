<table class="table table-striped table-hover">
	<?php
		$posts = POST;

		foreach ($posts as $post_id => $post){
			echo "<tr>";
				echo "<th><a href='?page=details&id={$post_id}'>{$post['title']}</a></th>";
				echo "<td>{$post['short']}</td>";
			echo "</tr>";
		}
	?>
</table>

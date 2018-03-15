<?php
if(!get_page_id()){
    redirect("index");
}
$post = POST[get_page_id()];
?>

<div class="card">
    <div class="card-header"><?php echo $post['title'] ?></div>
    <div class="card-body">
        <h5 class="card-title"><?php echo $post['short'] ?></h5>
        <p class="card-text"><?php echo $post['description'] ?></p>
    </div>
</div>


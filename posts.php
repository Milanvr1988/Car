<?php require "bootstrap.php"; ?>

<?php if(isset($_POST['insert_save'])): ?>
<?php echo $insert_post = $post->InsertPost("citroen"); ?>
<?php endif; ?>


<?php require "View/view.insert.post.php"; ?>
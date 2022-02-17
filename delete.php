<?php require "bootstrap.php"; ?>
<?php
if (isset($_GET['delete_id'])) {
    $singlPost = $post_cars_citroen->deletePost($_GET['delete_id']); 
} elseif(isset($_GET['delete_id'])) {
    $singlPost = $post_cars_bmw->deletePost($_GET['delete_id']); 
}
?>


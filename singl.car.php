<?php require "bootstrap.php"; ?>
<?php if(isset($_GET['citroen_id'])): ?>
<?php $singlPost = $post_cars_citroen->SelectSinglPost($_GET['citroen_id']); ?>



<?php elseif(isset($_GET['id_bmw'])): ?>
<?php $singlPost = $post_cars_bmw->SelectSinglPost($_GET['id_bmw']); ?>    
<?php endif; ?>

<?php require "View/view.singl.car.php"; ?>   
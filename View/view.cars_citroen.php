<?php require "Partials/header.php"; ?>
<div class="container">
<div class="row">
<?php foreach($post_cars_citroen as $post_citroen ): ?>
    <a href="singl.car.php?citroen_id=<?php  echo $post_citroen->id; ?>" class="nav-link">
        <div class="col-3" >
            <div class="card" style="width: 14rem;">
                <img src=" <?php echo $post_citroen->picture; ?> " class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> <?php echo $post_citroen->title; ?> </h5>
                    <!-- <p class="card-text"> <?php echo $post_citroen->description; ?> </p> -->
                    <!-- <p class="card-text"> <?php echo $post_citroen->price; ?> euro </p> -->
                </div>
            </div>
        </div>
    </a>
<?php endforeach; ?>
</div>
</div>
<?php require "Partials/footer.php"; ?>
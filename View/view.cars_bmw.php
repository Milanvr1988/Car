<?php require "Partials/header.php"; ?>
<div class="container">
<div class="row">
<?php foreach($post_cars_bmw as $post_bmw ): ?>
    <a href="singl.car.php?id_bmw=<?php  echo $post_bmw->id; ?>" class="nav-link">
        <div class="col-3" >
            <div class="card" style="width: 14rem;">
                <img src=" <?php echo $post_bmw->picture; ?> " class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> <?php echo $post_bmw->title; ?> </h5>
                    <!-- <p class="card-text"> <?php echo $post_bmw->description; ?> </p> -->
                    <!-- <p class="card-text"> <?php echo $post_bmw->price; ?> euro </p> -->
                </div>
            </div>
        </div>
    </a>
<?php endforeach; ?>
</div>
</div>
<?php require "Partials/footer.php"; ?>
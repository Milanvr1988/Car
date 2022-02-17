<?php require "Partials/header.php"; ?>

<?php if(isset($_SESSION['loggedUser'])): ?>
    <div class="col-3" >
            <div class="card" style="width: 14rem;">
                <img src=" <?php echo $singlPost->picture; ?> " class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> <?php echo $singlPost->title; ?> </h5>
                    <p class="card-text"> <?php echo $singlPost->description; ?> </p>
                    <p class="card-text"> <?php echo $singlPost->price; ?> euro </p>
                    <button class="btn btn-sm btn-info"> <a href="delete.php?delete_id=<?php echo $singlPost->id; ?>"> Ukloni oglas </a> </button><br>
                    <button class="btn btn-sm btn-success"> <a href="test_drive.php"> Test voznja </a> </button>
                </div>
            </div>
        </div>
    <?php elseif(!isset($_SESSION['loggedUser'])): ?>
        <div class="col-3" >
            <div class="card" style="width: 14rem;">
                <img src=" <?php echo $singlPost->picture; ?> " class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> <?php echo $singlPost->title; ?> </h5>
                    <p class="card-text"> <?php echo $singlPost->description; ?> </p>
                    <p class="card-text"> <?php echo $singlPost->price; ?> euro </p>
                </div>
            </div>
        </div>
<?php endif; ?>

<?php require "Partials/footer.php"; ?>
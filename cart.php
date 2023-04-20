<?php require 'inc/head.php'; ?>

<?php session_start();  

  $cart = $_SESSION['cart'];
  
  ?>

<section class="cookies container-fluid">
    <div class="row">
    <?php foreach ($cart as $id => $cookie) { ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                    </figcaption>
                </figure>
        </div>
    <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
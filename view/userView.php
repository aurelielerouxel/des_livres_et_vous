<?php 
    include ("view/template/header.php");
    include ("view/template/nav.php");
?>
<!-- <p>l'utilisateur sur lequel on a cliqué s'affiche sur cette page</p> -->
<main class="container">
    <article class="card" style="width: 18rem;">
    <img src="img/human.png" class="card-img-top" alt="...">
        <section class="card-body">
            <h5 class="card-title"><?php echo $user->getFirstname(); ?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="index.php" class="btn btn-primary">Go somewhere</a>
        </section>
    </article>
</main>
<?php 
    include ("view/template/footer.php");
?>

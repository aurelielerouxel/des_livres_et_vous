<?php 
    include ("view/template/header.php");
    include ("view/template/nav.php");
?>
<!-- <p>Le livre sur lequel on a cliqué s'affiche ici/p> -->
<main class="container">
    <article class="card_book" style="width: 18rem;">
    <img src="img/open-book.png" class="card-img-top" alt="...">
        <section class="card-body">
            <h5 class="card-title"><?php echo $book->getAutor(); ?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="index.php" class="btn btn-primary">Go somewhere</a>
        </section>
    </arcticle>
</main>

<?php 
    include ("view/template/footer.php");
?>
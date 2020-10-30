<?php 
    include ("view/template/header.php");
    include ("view/template/nav.php");
?>
<!-- <p>Le livre sur lequel on a cliqué s'affiche ici/p> -->
<main class="container">
    <article class="card_book col-md-5">
    <img src="assets/img/open-book.png" class="card-img-top" alt="...">
        <section class="card-body">
            <h4 class="card-title"><?php echo $book->getTitle() ?></h4>
            <h5 class="card-title"><?php echo $book->getAutor() ?></h5>
            <p class="card-text"><?php echo $book->getResume() ?></p>
            <a href="index.php" class="btn btn-primary">Retourner à la liste des livres</a>
        </section>
    </arcticle>
</main>

<?php 
    include ("view/template/footer.php");
?>
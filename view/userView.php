<?php 
    include ("view/template/header.php");
    include ("view/template/nav.php");
?>
<!-- <p>l'utilisateur sur lequel on a cliqué s'affiche sur cette page</p> -->
<main class="container my-4">
    <article class="card" style="width: 18rem;">
    <img src="assets/img/human.png" class="card-img-top" alt="...">
        <section class="card-body">
            <h5 class="card-title"><?php echo $user->getFirstname() ; echo "<br>"; echo $user->getLastname() ; ?></h5>
            <p class="card-text"></p>
            <a href="index.php" class="btn btn-primary">Retourner voir la liste des utilisateurs.</a>
        </section>
    </article>
</main>
<?php 
    include ("view/template/footer.php");
?>

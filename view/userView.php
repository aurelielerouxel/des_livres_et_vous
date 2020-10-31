<?php 
    include ("view/template/header.php");
    include ("view/template/nav.php");
?>
<!-- <p>l'utilisateur sur lequel on a cliqué s'affiche sur cette page</p> -->
<main class="container my-4">

    <div class="row my-4">

        <div class="col-12 col-md-4">
            <article class="card">
                <img src="assets/img/human.png" class="card-img-top" alt="...">
                    <section class="card-body">
                        <h5 class="card-title"><?php echo $user->getFirstname() ; echo "<br>"; echo $user->getLastname() ; ?></h5>
                        <p class="card-text"></p>
                        <a href="index.php" class="btn btn-primary">Retourner voir la liste des utilisateurs.</a>
                    </section>
            </article>
        </div>

            <div class="col-12 col-md-8">
                <table class="table mt-5">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Titre</th>
                            <th scope="col">Literary_style</th>
                            <th scope="col">See details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><?php echo $book->getId() ?></th>
                            <td><?php echo $book->getAutor() ?></td>
                            <td><?php echo $book->getTitle() ?></td>
                            <td><?php echo $book->getLiterary_style() ?></td>
                            <td><a href="book.php?id=<?php echo $book->getId(); ?>">More infos</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

    </div>
<?php 
    include ("view/template/footer.php");
?>

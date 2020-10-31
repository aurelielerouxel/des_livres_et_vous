<?php 
    include ("view/template/header.php");
    include ("view/template/nav.php");
?>
<!-- <p>Le livre sur lequel on a cliqué s'affiche ici/p> -->
<main class="container">
    <div class="row my-4">

        <div class="col-12 col-md-4">
            <article class="card_book">
                <img src="assets/img/open-book.png" class="card-img-top" alt="...">
                    <section class="card-body">
                        <h4 class="card-title"><?php echo $book->getTitle() ?></h4>
                        <h5 class="card-title"><?php echo $book->getAutor() ?></h5>
                        <p class="card-text"><?php echo $book->getResume() ?></p>
                        <a href="index.php" class="btn btn-primary">Retourner à la liste des livres</a>
                        <a href="" class="btn btn-primary" name="delete_book">Supprimer le livre</a>

                    </section>
            </arcticle>
        </div>

        <!-- condition + (boucle si plusieurs exemplaires du même livre) si un user_id est trouvé, j'affiche sa carte -->
        <?php if($book->getUser_id() !== null): ?>
        <div class="col-12 col-md-8">
            <table class="table mt-5">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Identifiant</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">See details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $user->getId() ?></th>
                        <td><?php echo $user->getUser_number() ?></td>
                        <td><?php echo $user->getFirstname() ?></td>
                        <td><?php echo $user->getLastname() ?></td>
                        <td><a href="user.php?id=<?php echo $user->getId(); ?>">More infos</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
         
        <!-- Sinon, j'affiche un formulaire pour emprunter le livre -->
        <?php else: ?>
        <div class="col-12 col-md-8">
            <form action="" method="post">
                <div class="form-group">
                    <label for="user_number">Identifiant</label>
                    <input type="text" class="form-control" id="user_number" name="user_number">
                </div>
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input type="text" class="form-control" id="firstname" name="firstname">
                </div>
            <button type="submit" class="btn btn-primary" name="emprunter">Emprunter le livre</button>
            </form>
        </div>
        <?php endif; ?>
    </div>
    
</main>

<?php 
    include ("view/template/footer.php");
?>
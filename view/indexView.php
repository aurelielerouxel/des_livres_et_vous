<!-- <p>Vos livre au catalogue s'affichent sur cette page</p> -->
<?php 
    include ("view/template/header.php");
    include ("view/template/nav.php");
?>

<main>
    <div class="container">
        <table class="table mt-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Title</th>
                    <th scope="col">Release date</th>
                    <th scope="col">Literary style</th>
                    <th scope="col">Status</th>
                    <th scope="col">See details</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books as $key => $book):?>
                    <tr>
                        <th scope="row"><?php echo $book->getId() ?></th>
                        <td><?php echo $book->getAutor() ?></td>
                        <td><?php echo $book->getTitle() ?></td>
                        <td><?php echo $book->getRelease_date() ?></td>
                        <td><?php echo $book->getLiterary_style() ?></td>
                        <td><?php echo $book->getStatus() ?></td>
                        <td><a href="book.php">More infos</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<?php 
    include ("view/template/footer.php");
?>
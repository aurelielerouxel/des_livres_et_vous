<!-- <p>Vos livre au catalogue s'affichent sur cette page</p> -->
<?php 
    include ("view/template/header.php");
    include ("view/template/nav.php");
?>

<main>
    <div class="container">
        <table class="table m-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Title</th>
                    <th scope="col">Release date</th>
                    <th scope="col">Literary style</th>
                    <th scope="col">Status</th>
                    <th scope="col">Resume</th>
                    <th scope="col">See details</th>
                </tr>
            </thead>
            <tbody>
                <?php ?>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php echo $books["id"];?></td>
                        <td><?php ?></td>
                        <td><?php ?></td>
                        <td><?php ?></td>
                        <td><?php ?></td>
                        <td><?php ?></td>
                        <td><a href="book.php">More infos</a></td>
                    </tr>
                <?php ?>
            </tbody>
        </table>
    </div>
</main>

<?php 
    include ("view/template/footer.php");
?>
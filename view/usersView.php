<?php 
    include ("view/template/header.php");
    include ("view/template/nav.php");
?>
<!-- <p>Vos utilisateurs en base de données s'affichent sur cette page</p> -->
<main>
    <div class="container">
        <table class="table mt-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">N° identifiant</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Adress</th>
                    <th scope="col">Postal code</th>
                    <th scope="col">City</th>
                    <th scope="col">See details</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $key => $user):?>
                    <tr>
                        <th scope="row"><?php echo $user->getId() ?></th>
                        <td><?php echo $user->getUser_number() ?></td>
                        <td><?php echo $user->getFirstname() ?></td>
                        <td><?php echo $user->getLastname() ?></td>
                        <td><?php echo $user->getEmail() ?></td>
                        <td><?php echo $user->getAdress() ?></td>
                        <td><?php echo $user->getPostal_code() ?></td>
                        <td><?php echo $user->getCity() ?></td>
                        <td><a href="user.php?id=<?php echo $user->getId(); ?>">More infos</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<?php 
    include ("view/template/footer.php");
?>
<?php 
    include ("view/template/header.php");
    include ("view/template/nav.php");
?>

<main class="container mt-5">
    <form class="row" action="" method="post">

        <div class="form-group col-12 col-md-6">
            <label for="firstname">Firstname</label>
            <input type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="form-group col-12 col-md-6">
            <label for="lastname">Lastname</label>
            <input type="text" class="form-control" id="lastname" name="lastname">
        </div>

        <div class="form-group col-12 col-md-6">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="form-group col-12 col-md-6">
            <label for="adress">Adress</label>
            <input type="text" class="form-control" id="adress" name="adress">
        </div>

        <div class="form-group col-12 col-md-6">
            <label for="postal_code">Postal code</label>
            <input type="text" class="form-control" id="postal_code" name="postal_code">
        </div>
        <div class="form-group col-12 col-md-6">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city">
        </div>

        <div class="form-group col-12 col-md-6">
            <label for="user_number">User Number</label>
            <input type="text" class="form-control" id="user_number" name="user_number">
        </div>

        <button type="submit" class="btn btn-primary btn-lg btn-block mb-4" name="submit_user">Ajouter un utilisateur</button>
    </form>
</main>

<?php 
    include ("view/template/footer.php");
?>
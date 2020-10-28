<?php 
    include ("view/template/header.php");
    include ("view/template/nav.php");
?>

<main class="container mt-5">
    <form class="row" action="" method="post">
        <div class="form-group col-12 col-md-6">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor">
        </div>
        <div class="form-group col-12 col-md-6">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group col-12 col-md-4">
            <label for="release_date">Release date</label>
            <input type="text" class="form-control" id="release_date" name="release_date">
        </div>
        <div class="form-group col-12 col-md-4">
            <label for="literary_style">Literary style</label>
            <input type="text" class="form-control" id="liteary_style" name="literary_style">
        </div>
        <div class="form-group col-12 col-md-4">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status">
        </div>

        <div class="form-group col-12 col-md-12">
            <label for="resume">Resume</label>
            <textarea type="text" class="form-control" id="resume" name="resume"></textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit_book">Ajouter le livre dans la bibliothèque</button>
    </form>
</main>

<?php 
    include ("view/template/footer.php");
?>
<?php  require_once("inc/header.php"); ?> 
<?php 
use TechStore\Classes\Models\Cat;

$cat = new Cat;
$cats = $cat->selectAll("id ,name ,created_at");

?>


    <div class="container py-5">
        <div class="row">

            <div class="col-md-6 offset-md-3">
                <h3 class="mb-3">Edit Category : </h3>
                <div class="card">
                    <div class="card-body p-5">
                        <form method="POST" action="<?= AURL . "handlers/handlers-edit-category.php" ?>">
                            <div class="form-group">
                              <label>Name</label>
                              <input type="text" class="form-control" value="<?= $cats['name']; ?>">
                            </div>
                            <div class="text-center mt-5">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                <a class="btn btn-dark" href="<?= AURL . "categories.php" ?>">Back</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>

<?php require_once("inc/footer.php");  ?>

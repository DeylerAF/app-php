<?php
include("../../db.php");
if ($POST) {
    // Get the date of method POST
    $position_name = (isset($_POST['position_name'])) ? $_POST['position_name'] : "";
    // Insert the data into the database
    $sentence = $connection->prepare("INSERT INTO `tb_positions` (id, position_name) VALUES (null, :position_name);");
    // Bind the parameters from the method POST
    $sentence->bindParam(':position_name', $position_name);
    $sentence->execute();
};

?>

<?php include("../../templates/header.php"); ?>

<div class="card bg-dark border-light text-light">
    <div class="card-header border-light">
        Employee data
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="position_name" class="form-label">Position name:</label>
                <input type="text" class="form-control" name="position_name" id="position_name" aria-describedby="helpId" placeholder="Position name">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
            <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancel</a>
        </form>
    </div>
    <div class="card-footer text-light border-light"></div>
</div>

<?php include("../../templates/footer.php"); ?>
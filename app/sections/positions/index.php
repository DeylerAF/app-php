<?php
include("../../db.php");
$sentence = $connection->prepare("SELECT * FROM `tb_positions`");
$sentence->execute();
$list_tb_positions = $sentence->fetchAll(PDO::FETCH_ASSOC);
//print_r($list_tb_positions);
?>
<?php include("../../templates/header.php"); ?>
<h1>Employees</h1>
<div class="card bg-dark border-light">
    <div class="card-header border-light">
        <a name="" id="" class="btn btn-primary" href="create.php" role="button">Add record</a>
    </div>
    <div class="card-body ">
        <div class="table-responsive-sm">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Position name</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_tb_positions as $list_tb_positions) { ?>
                        <tr class="">
                            <td scope="row"><?php echo $list_tb_positions['id']; ?></td>
                            <td><?php echo $list_tb_positions['position_name']; ?></td>
                            <td>
                                <a name="" id="" class="btn btn-info" href="edit.php?id=<?php echo $list_tb_positions['id']; ?>" role="button">Edit</a>
                                <a name="" id="" class="btn btn-danger" href="delete.php?id=<?php echo $list_tb_positions['id']; ?>" role="button">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
    <div class="card-footer bg-dark text-white border-light">
        <h2>Footer</h2>
    </div>
</div>
<?php include("../../templates/footer.php"); ?>
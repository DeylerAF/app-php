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
                        <th scope="col">Name</th>
                        <th scope="col">Photo</th>
                        <th scope="col">CV</th>
                        <th scope="col">Position</th>
                        <th scope="col">Date of admission</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">Deyler Alvarez Fernández</td>
                        <td>imagen.jpg</td>
                        <td>CV.pdf</td>
                        <td>Full Stack Engineer</td>
                        <td>2020-01-01</td>
                        <td>
                            <a name="" id="" class="btn btn-primary" href="" role="button">Letter</a>
                            <a name="" id="" class="btn btn-info" href="" role="button">Edit</a>
                            <a name="" id="" class="btn btn-danger" href="" role="button">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <div class="card-footer bg-dark text-white border-light">
        <h2>Footer</h2>
    </div>
</div>
<?php include("../../templates/footer.php"); ?>
<?php include("../../templates/header.php"); ?>

<div class="card bg-dark border-light text-light">
    <div class="card-header border-light">
        Employee data
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="first_name" class="form-label">First name</label>
                <input type="text" class="form-control" name="first_name" id="first_name" aria-describedby="helpId" placeholder="First name">
            </div>
            <div class="mb-3">
                <label for="second_name" class="form-label">Second name</label>
                <input type="text" class="form-control" name="second_name" id="second_name" aria-describedby="helpId" placeholder="Second name">
            </div>
            <div class="mb-3">
                <label for="first_surname" class="form-label">First surname</label>
                <input type="text" class="form-control" surname="first_surname" id="first_surname" aria-describedby="helpId" placeholder="First surname">
            </div>
            <div class="mb-3">
                <label for="second_surname" class="form-label">Second surname</label>
                <input type="text" class="form-control" name="second_surname" id="second_surname" aria-describedby="helpId" placeholder="Second surname">
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Photo:</label>
                <input type="file" class="form-control" name="photo" id="photo" aria-describedby="helpId" placeholder="Photo">
            </div>
            <div class="mb-3">
                <label for="cv" class="form-label">CV(pdf):</label>
                <input type="file" class="form-control" name="cv" id="cv" aria-describedby="helpId" placeholder="CV">
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <select class="form-select form-select-sm" name="position" id="position">
                    <option selected>Select one</option>
                    <option value="">New Delhi</option>
                    <option value="">Istanbul</option>
                    <option value="">Jakarta</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="date_of_admission" class="form-label">Date of admission</label>
                <input type="date" class="form-control" name="date_of_admission" id="date_of_admission" aria-describedby="emailHelpId">
            </div>
            <button type="submit" class="btn btn-primary">Add record</button>
            <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancel</a>
        </form>
    </div>
    <div class="card-footer text-light border-light"></div>
</div>

<?php include("../../templates/footer.php"); ?>
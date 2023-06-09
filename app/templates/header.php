<?php
$url_base = "http://localhost:8080/app";
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="bg-dark">
    <header>
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <div class="nav navbar-nav">
                <a class="nav-item nav-link active" href="#" aria-current="page">System <span class="visually-hidden">(current)</span></a>
                <a class="nav-item nav-link" href="<?php echo $url_base ?>/sections/employees">Employees</a>
                <a class="nav-item nav-link" href="<?php echo $url_base ?>/sections/positions">Positions</a>
                <a class="nav-item nav-link" href="<?php echo $url_base ?>/sections/users">Users</a>
                <a class="nav-item nav-link" href="#">Log Out</a>
            </div>
        </nav>
    </header>
    <main class="container">
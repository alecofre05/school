<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark sticky-top">
        <div class="menu container-fluid">
            <ul class="d-flex mt-1">
                <li><a class="navbar-brand" href="index.php?section=alumnos">Alumnos</a></li>
                <li><a class="navbar-brand" href="index.php?section=profesores">Profesores</a></li>
                <li><a class="navbar-brand" href="index.php?section=cursos">Cursos</a></li>
                <li><a class="navbar-brand" href="index.php?section=materias">Materias</a></li>
            </ul>
            <form class="d-flex me-2">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
        <div class="contenedor">
            <?php if(isset($_GET['section'])) {
                $path = 'views/'.$_GET['section'];

                if(file_exists($path)) {
                    require_once('config/autoload.php');
                } else {
                    include('404.php');
                }
            } else {
                include('home.php');
            }?>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<?php if(!empty($_GET['section'])) { ?>
    <script src="js/<?=$_GET['section']?>.js"></script>
<?php } ?>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <div class="menu">
            <ul>
                <li><a href="index.php?section=alumnos">Alumnos</a></li>
                <li><a href="index.php?section=profesores">Profesores</a></li>
                <li><a href="index.php?section=cursos">Cursos</a></li>
                <li><a href="index.php?section=materias">Materias</a></li>
            </ul>
        </div>

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
<?php if(!empty($_GET['section'])) { ?>
    <script src="js/<?=$_GET['section']?>.js"></script>
<?php } ?>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="views/encargado/index.html">Dueño</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="views/mascota/index.html">Mascota</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="views/medicamento/index.html">Medicamentos</a>
            </li>
            </ul>
        </div>
    </div>
</nav>
    <?php
        $nombre = $_POST['nombre'];
        $raza = $_POST['raza'];
        $color = $_POST['color'];
        $edad = $_POST['edad'];

        echo "<table class='table'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th scope='col'>Nombre</th>";
        echo "<th scope='col'>Raza</th>";
        echo "<th scope='col'>Color</th>";
        echo "<th scope='col'>Edad</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        echo "<tr>";
        echo "<th scope='row'>".$nombre."</th>";
        echo "<td>".$raza."</td>";
        echo "<td>".$color."</td>";
        echo "<td>".$edad."</td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
    ?>
</body>
</html>

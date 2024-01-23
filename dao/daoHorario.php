<?php

include_once('db/db_RH.php');

$Curso = $_GET['curso'];
$Fecha = $_GET['fecha'];

ContadorApu($Curso,$Fecha);

function ContadorApu($Curso,$Fecha)
{

    $con = new LocalConector();
    $conex = $con->conectar();

    $datos = mysqli_query($conex, "SELECT `Horario` FROM `Cursos` WHERE `NombreCurso` = '$Curso' and `Fecha` = '$Fecha'");
    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data" => $resultado));
}

?>
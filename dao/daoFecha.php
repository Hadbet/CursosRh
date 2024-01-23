<?php

include_once('db/db_RH.php');

$Curso = $_GET['curso'];

ContadorApu($Curso);

function ContadorApu($Curso)
{
    $fechainicial = date('Y-m-01');
    $fechafinal = date('Y-m-t');

    $con = new LocalConector();
    $conex = $con->conectar();

    $datos = mysqli_query($conex, "SELECT `Fecha` FROM `Cursos` WHERE `NombreCurso` = '$Curso' and `Fecha` BETWEEN '$fechainicial' and '$fechafinal'");
    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data" => $resultado));
}

?>
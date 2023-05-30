<?php
$nombre = $_GET["nombre"];
echo "nombre: " .$nombre . "<br><br>";

$edad = $_GET["edad"];
echo "edad: " .$edad . "<br><br>";

$escuela = $_GET["escuela"];
echo "escuela: " .$escuela . "<br><br>";

$fecha_ingreso = $_GET["fecha_ingreso"];
echo "fecha_ingreso: " .$fecha_ingreso . "<br><br>";

$direccion = $_GET["direccion"];
echo "direccion: " .$direccion . "<br><br>";

if($edad >= 18){
    echo "es mayor de edad" . "<br><br>";
} else{
    echo "es menor de edad" . "<br><br>";
}
if($escuela == "CETIS 107"){
    echo "<div style='background-color:blue;'>CETIS 107</div/>";
} else if($escuela == "CBTIS 224"){
    echo "<div style='background-color:red;'>CBTIS 224</div/>";
} else if($escuela == "COBAES"){  
    echo "<div style='background-color:green;'>COBAES </div/>";
}
?>
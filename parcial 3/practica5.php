<?php
echo "jose";
$cuadros = $_POST["cuadro"];
var_dump($cuadros);

for($i=0; $i<count($cuadros); $i++){
    echo $cuadros[$i]. ",";
    if($cuadros[$i] != "x" && $cuadros [$i] != "0"){
        echo "<h2>Solo se permiten X y/o 0<h2>";
        return;
    }
}
/*
      [0][1][2]
      [ ][ ][ ]
      [ ][ ][ ]
*/
if($cuadros[0] == "X" && $cuadros[1] == "X" && $cuadros[2] == "X"){
    echo "<h1>Ganador [X]<h1>";
    return;
}else if($cuadros[0] == "0" && $cuadros[1] == "0" && $cuadros[2] == "O"){ 
echo "<h1>Ganador [O]</h1>";
}   
/*
    [ ][ ][ ]
    [3][4][5]
    [ ][ ][ ]
    */
?>
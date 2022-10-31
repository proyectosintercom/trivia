<?php
function cargaridiomas(){
    //Conexion a la base de datos
    $conexion = new mysqli('localhost','root','','trivia',3306);
    //Consulta SQL a ejecutar para obtener los idiomas
    $consulta = "SELECT * FROM paises";
    //Se ejecuta la consulta
    $result = $conexion->query($consulta);
    $respuesta = "";
    //Si se obtuvo algun registro se recorre el resultado
    if($result->num_rows > 0){
  
        // Ciclo para crear la cadena con la lista de idiomas que va a retornar la funcion
  while($fila = $result->fetch_array()){
  
            // A cada idioma se le asigna el atributo id, lo vamos a utilizar a la hora de guardar en la base de datos
      $respuesta .= '<li id="'.$fila['id'].'">'.utf8_encode($fila['nombre']).'</li>';
  }
    }
    // Se regresa la cadena de respuesta
    return $respuesta;
}

?>
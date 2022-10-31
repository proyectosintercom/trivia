<?php
if( isset($_POST['accion']) ){
    // Variables con la informacion del alumno
    $accion = $_POST['accion'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $cedula = $_POST['cedula'];
    $paises = $_POST['paises'];
    $semifinal=$_POST['paisessemifinal'];
    //Se crea la respuesta del servidor
    $respuesta = new stdClass();
    // Se realiza la conexion con la base de datos
    $conexion = new mysqli('localhost','root','','trivia',3306);
$conexion->autocommit(FALSE);
     //echo json_encode($conexion);
$consulta = "INSERT INTO usuario (nombres, apellidos, cedula) VALUES('$nombres','$apellidos','$cedula');";
 if( $conexion->query($consulta) ){
      //Se obtiene el id del alumno que se insertó
    $idusuario = $conexion->insert_id;
      // Se elimina la ultima coma de la cadena
    $paises = trim($paises,',');
     $semifinal=trim($semifinal,',');
      // Se dividen los valores de la cadena en un arreglo
    $paises = explode(',', $paises);
     $semifinal=explode(',',$semifinal);
      // Se recorre el arreglo de idiomas
    foreach ($paises as $pais) {
          $consulta = "INSERT INTO usuariopaises (idusuario, idpais) VALUE($idusuario,'$pais')"; 
    if( $conexion->query($consulta) == FALSE )
    {
              // Se ejecuta este codigo si alguna consulta no se ejecutó correctamente
      $respuesta->estado = FALSE;
      $conexion->rollback();
      echo json_encode($respuesta);
      die();
    }
}
     
     
         foreach ($semifinal as $semi) {
 
         $consulta = "INSERT INTO usuariopaises (idusuario, idpais) VALUE($idusuario,'$semi')";
        
        
        
         
    if( $conexion->query($consulta) == FALSE )
    {
              // Se ejecuta este codigo si alguna consulta no se ejecutó correctamente
      $respuesta->estado = FALSE;
      $conexion->rollback();
      echo json_encode($respuesta);
      die();
    }
}
     
     
     
     
     
  }
  else{
      // Este codigo se ejecuta si la primer consula falló
    $respuesta->estado = FALSE;
    $conexion->rollback();
    echo json_encode($respuesta);
      die();
  }
 $respuesta->estado = TRUE;
    $conexion->commit();
    echo json_encode($respuesta);
  }

?>
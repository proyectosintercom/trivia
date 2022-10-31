<! DOCTYPE html>
<html>
    <?php require_once('cargaridioma.php');?>
    <head>
        <meta charset="utf-8">
        <title>jQuery example: drag and drop</title>
        


        
    
        
      
<!--
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
-->
        
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

        	

      <style>
        
        #informacion{
  width:500px;
  margin: 0 auto;
}
  
form{
  width:47s8px;
  border:1px solid #ddd;
  padding:10px;
  float:left;
}
  
form label{
  width:100%;
  float:left;
  margin: 5px 0;
}
  
form input{
  float:left;
  margin: 5px 0;
}
  
ul{
  width:200px;
  float:left;
  border:1px solid #ddd;
  margin:5px;
  padding:10px;
  list-style-type: none;
}
  
li{
  margin:5px 0;
  background:#ddd;
  cursor:move;
  padding:5px;
  list-style-type: none;
}
        </style>    
    </head>
    <body>
    <div>Drag Winston into the rectangle</div>
   
    
    
    

   
        
        <div id="informacion">
            
    <form id="frmAlumno">
        <label for="paterno">Nombres</label>
        <input id="nombres" type="text" name="nombres" value="" />
        <label for="apellidos">Apellidos</label>
        <input id="apellidos" type="text" name="apellidos" value="" />
        <label for="cedula">Cedula</label>
        <input id="cedula" type="text" name="cedula" value="" />
        <label>Cuartos de Final</label>
        <ul id="cuartosfinal"></ul>
         <label>Semifinal</label>
        <ul id="semifinal"></ul>
        
        <ul id="grupoA"  draggable="true"> 
            <li id="1">Catar</li>
            <li id="2">Ecuador</li>
            <li id="3">Senegal</li>
            <li id="4">Paises Bajos</li>
        
        </ul>
        
        <ul id="grupoB"> 
            <li id="5">Inglaterra</li>
            <li id="6">Irán</li>
            <li id="7">Estados Unidos</li>
            <li id="8">Gales</li>
        
        </ul>
        
         <ul id="grupoC"> 
            <li id="10">Argentina</li>
            <li id="11">Arabia Saudí</li>
            <li id="12">Mexico</li>
            <li id="13">Polonia</li>
        
        </ul>
        
           <ul id="grupoD"> 
            <li id="14">Francia</li>
            <li id="15">Australia</li>
            <li id="16">Dinamarca</li>
            <li id="17">Túnez</li>
        
        </ul>
        
             <ul id="grupoE"> 
            <li id="18">España</li>
            <li id="19">Costa Rica</li>
            <li id="20">Alemania</li>
            <li id="21">Japón</li>
        
        </ul>
        
        <ul id="grupoF"> 
            <li id="22">Bélgica</li>
            <li id="23">Canadá</li>
            <li id="24">Marruecos</li>
            <li id="25">Croacia</li>
        
        </ul>
        
        
        
        <ul id="paises">  </ul>
        <input type="submit" name="enviar" value="Enviar" />
           
    </form>
             
    
    
   
      
</div>
  
    
    </body>
               <script>
      

$(document).ready(function(){
    $( "#grupoA   li, #paisesseleccionados li" ).draggable({
        appendTo: "body",
  helper: 'clone',
    });
    
      $( "#grupoB   li, #paisesseleccionados li" ).draggable({
        appendTo: "body",
  helper: 'clone',
    });
    
    $( "#grupoC   li, #paisesseleccionados li" ).draggable({
        appendTo: "body",
  helper: 'clone',
    });
    
    $( "#grupoD   li, #paisesseleccionados li" ).draggable({
        appendTo: "body",
  helper: 'clone',
    });
    
    $( "#grupoE   li, #paisesseleccionados li" ).draggable({
        appendTo: "body",
  helper: 'clone',
    });
    
    
    
    $( "#grupoF   li, #cuartosfinal li" ).draggable({
        appendTo: "body",
  helper: 'clone',
    });
    var counter = 0;
           $( "#cuartosfinal" ).droppable({
            
    accept:'li',
    activeClass: "ui-state-default",
    hoverClass: "ui-state-hover",
     
    drop: function( event, ui ) {
         var limit = 8;   
counter++;
      
        if (counter == limit) {
                alert('Sólo clasifican 8 Equipos');
                $(this).droppable("disable");
            }
        ui.draggable.appendTo(this).fadeIn();
            
    }
});    
    
    
            $( "#semifinal" ).droppable({
    accept:'li',
    activeClass: "ui-state-default",
    hoverClass: "ui-state-hover",
  
    drop: function( event, ui ) {
        ui.draggable.appendTo(this).fadeIn();
    }
});    
});
        
      
       
            
//      $("#frmAlumno").submit(function(){
//    //Funcion para obtener los valores del formulario se explica mas adelante
//    datos = obtenerDatos();
//          console.log(datos);
//    $.ajax({
//      url:'guardaalumno.php', //URL del archivo php que procesa la petición. Se explica mas adelante
//      type:'post', // Los datos se envían mediante el método POST
//      dataType:'json', // La respuesta se obtiene como JSON
//      data:datos ,
//        
//        
//        // Los datos del formulario
//     success : function(data) {
//           alert("Ingresado con exito");
//        },
//        error : function(request, status, error) {
//console.log(request);
//        }
//          
//      
//           
//    });
//    return false; // Se regresa false para el que submit no se ejecute.
//});
//      
                   
  $("#frmAlumno").submit(function(){
    //Funcion para obtener los valores del formulario se explica mas adelante
    datos = obtenerDatos();
      console.log(datos);
    $.ajax({
      url:'guardaalumno.php', //URL del archivo php que procesa la petición. Se explica mas adelante
      type:'post', // Los datos se envían mediante el método POST
      dataType:'json', // La respuesta se obtiene como JSON
      data:datos, // Los datos del formulario
         success : function(data) {
             
             
           
        },
        error : function(jqXHR, textStatus, errorThrown) {
 console.log(textStatus, errorThrown);
        },
        
        
        
        
        
    
           
    }).done(function(respuesta){
        //Condición para verificar si se guardaron o no los datos
        if( respuesta.estado == true )
            alert("La información se guardó correctamente");
        else
          alert("Ocurrió un error al guardar la información, por favor vuelve a intentarlo");
    });
      
    return false; // Se regresa false para el que submit no se ejecute.
});                 
                   
                   
                  
            
            
            function obtenerDatos(){
    //Se crea la variable para la lista de idiomas seleccionados
    var paises ="";
    //Se obtiene todos los elementos li de la lista con id="idiomasseleccionados" y se recorren
    // utilizando el método .each
    $( "#cuartosfinal li" ).each(function (i) {
        // Se agrega a la variable idiomas el valor del atributo id y se le agrega una coma al final
        // para separar cada idioma
        paises += $(this).attr('id')+",";
    });
    // Se almacenan todos los datos en un arreglo
    datos = [{name:"accion",value:"guardar"},{name:"nombres", value:$("#nombres").val()},{name:"apellidos", value:$("#apellidos").val()},{name: "cedula", value:$("#cedula").val()},{name:"paises", value:paises}];
    // Se regresa la variable datos con toda la informacion del alumno
    return datos;
}
    </script>
</html>

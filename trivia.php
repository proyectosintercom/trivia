<! DOCTYPE html>
<html>
   
<head>
        <meta charset="utf-8">
        <title>Trivia Intercom</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    
<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>   
    
            <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
        
</head>
<body background="images/fondo1.jpg">
    
      <style>
        
        #informacion{
  width:500px;
  margin: 0 auto;
}
  
form{
  width:47s8px;
 
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
  width:250px;
  float:left;
  border:1px solid #ddd;
  margin:5px;
  padding:10px;
  list-style-type: none;
}
  
li{
  margin:2px 0;
  background:#ddd;
  cursor:move;
  padding:0px;
  list-style-type: none;
}
 
          .li2{
  margin:2px 0;
  background:#722F37;
  cursor:move;
  padding:0px;
  list-style-type: none;
}
          titulo{
              
              color: white;
              
          }
          
          
       div.row{
   margin-right: 0px;
}

div.container-fluid{
   padding-right: 0px;
}
        </style>
    
    

    
<div class="container center"> 
    
<form id="frmAlumno"> 
    
       
<input class="form-control form-control-sm is-valid"  id="nombres" type="text" placeholder="Nombres" required>   
        
   
    
    <input class="form-control form-control-sm" id="apellidos" type="text" placeholder="Apellidos" required>    
        
       <input class="form-control form-control-sm" id="cedula" type="text" placeholder="Cédula" required>    
        
        
 
    
    
    
    
  <div class="col">  
    
<p>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
    Cuartos de Final
  </button>
</p>
<div style="min-height: 10px;">
  <div class="collapse collapse-vertical" id="collapseWidthExample">
            <div class="row">>
            <div class="col">
                 <div class="col text-white">Grupo A</div>
                    <ul id="grupoA"  draggable="true"> 
                        <li id="Catar">Catar</li>
                        <li id="Ecuador">Ecuador</li>
                        <li id="Senegal">Senegal</li>
                        <li id="Paises Bajos">Paises Bajos</li>
                </ul>
               </div>
      
      
            <div class="col">
        <div class="col text-white">Grupo B</div>
          <ul id="grupoB"> 
                            <li id="Inglaterra">Inglaterra</li>
                            <li id="Iran">Irán</li>
                            <li id="Estados Unidos">Estados Unidos</li>
                            <li id="Gales">Gales</li>
         </ul>
      
        </div>
                
            <div class="col ">
                    <div class="col text-white">Grupo C</div>
                        <ul id="grupoC"> 
                            <li id="Argentina">Argentina</li>
                            <li id="Arabia Saudita">Arabia Saudí</li>
                            <li id="Mexico">Mexico</li>
                            <li id="Polonia">Polonia</li>

                        </ul>
            </div>  
                
                
                 <div class="col">
                        <div class="col text-white">Grupo D</div>
                            <ul id="grupoD"> 
                                    <li id="Francia">Francia</li>
                                    <li id="Australia">Australia</li>
                                    <li id="Dinamarca">Dinamarca</li>
                                    <li id="Tunez">Túnez</li>
                            </ul>
                </div> 
                
                
                       <div class="col ">
                            <div class="col text-white">Grupo E</div>
                                <ul id="grupoE"> 
                                    <li id="España">España</li>
                                    <li id="Costa Rica">Costa Rica</li>
                                    <li id="Alemania">Alemania</li>
                                    <li id="Japon">Japón</li>        
                                </ul>
                        </div>
                
                    <div class="col">
                            <div class="col text-white">Grupo F</div>
                                <ul id="grupoF"> 
                                    <li id="Bélgica">Bélgica</li>
                                    <li id="Canadá">Canadá</li>
                                    <li id="Marruecos">Marruecos</li>
                                    <li id="Croacia">Croacia</li>
                                </ul>
                        </div>
               
               
                    <div class="col">
                            <div class="col text-white">Grupo G</div>
                                <ul id="grupoG"> 
                                    <li id="Brasil">Brasil</li>
                                    <li id="Serbia">Serbia</li>
                                    <li id="Suiza">Suiza</li>
                                    <li id="Camerun">Camerun</li>
        
                                </ul>
                    </div>
                
                     <div class="col">
                            <div class="col text-white">Grupo H</div>
                                <ul id="grupoH"> 
                                    <li id="Portugal">Portugal</li>
                                    <li id="Ghana">Ghana</li>
                                    <li id="Uruguay">Uruguay</li>
                                    <li id="Corea del Sur">Corea del Sur</li>
        
                                </ul>
                    </div>
                
                
                
                 <div class="row  justify-content-md-center">
    
    
     <div class="col text-white col-lg-1"> Arrastre los equipos</div>
     <div class="col  col-lg-2 ">
      <ul class="#li2" style="color=fffff" id="cuartosfinal"></ul>
      </div>
   
 
      
      
         
      
    
  </div>
               
                
                
               
      
      
      </div>
      
      
             
  </div>
</div>
    </div> 
     <div class="col">     
<p>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapsemifinal" aria-expanded="false" aria-controls="collapseWidthExample">
    Semifinal
  </button>
</p>
<div style="min-height: 120px;">
  <div class="collapse collapse-vertical" id="collapsemifinal">
            <div class="row">>
            <div class="col">
                 <div class="col text-white">Grupo A</div>
                    <ul id="grupoA"  draggable="true"> 
                        <li id="Catar-S">Catar</li>
                        <li id="Ecuador-S">Ecuador</li>
                        <li id="Senegal-S">Senegal</li>
                        <li id="Paises Bajos-S">Paises Bajos</li>
                </ul>
               </div>
      
      
            <div class="col">
        <div class="col text-white">Grupo B</div>
          <ul id="grupoB"> 
                            <li id="Inglaterra-S">Inglaterra</li>
                            <li id="Irán-S">Irán</li>
                            <li id="Estados Unidos-S">Estados Unidos</li>
                            <li id="Gales-S">Gales</li>
         </ul>
      
        </div>
                
            <div class="col ">
                    <div class="col text-white">Grupo C</div>
                        <ul id="grupoC"> 
                            <li id="Argentina-S">Argentina</li>
                            <li id="Arabia Saudi-S">Arabia Saudí</li>
                            <li id="Mexico-S">Mexico</li>
                            <li id="Polonia-S">Polonia</li>

                        </ul>
            </div>  
                
                
                 <div class="col">
                        <div class="col text-white">Grupo D</div>
                            <ul id="grupoD"> 
                                    <li id="Francia-S">Francia</li>
                                    <li id="Australia-S">Australia</li>
                                    <li id="Dinamarca-S">Dinamarca</li>
                                    <li id="Tunez-S">Túnez</li>
                            </ul>
                </div> 
                
                
                       <div class="col ">
                            <div class="col text-white">Grupo E</div>
                                <ul id="grupoE"> 
                                    <li id="España-S">España</li>
                                    <li id="Costa Rica-S">Costa Rica</li>
                                    <li id="Alemania-S">Alemania</li>
                                    <li id="Japon-S">Japón</li>        
                                </ul>
                        </div>
                
                    <div class="col">
                            <div class="col text-white">Grupo F</div>
                                <ul id="grupoF"> 
                                    <li id="Belgica-S">Bélgica</li>
                                    <li id="Canada-S">Canadá</li>
                                    <li id="Marruecos-S">Marruecos</li>
                                    <li id="Croacia-S">Croacia</li>
                                </ul>
                        </div>
               
               
                    <div class="col">
                            <div class="col text-white">Grupo G</div>
                                <ul id="grupoG"> 
                                    <li id="Brasil-S">Brasil</li>
                                    <li id="Serbia-S">Serbia</li>
                                    <li id="Suiza-S">Suiza</li>
                                    <li id="Camerun-S">Camerun</li>
        
                                </ul>
                    </div>
                
                     <div class="col">
                            <div class="col text-white">Grupo H</div>
                                <ul id="grupoH"> 
                                    <li id="Portugal-S">Portugal</li>
                                    <li id="Ghana-S">Ghana</li>
                                    <li id="Uruguay-S">Uruguay</li>
                                    <li id="Corea del Sur-S">Corea del Sur</li>
        
                                </ul>
                    </div>
                
                
                
                 <div class="row  justify-content-md-center">
    
    
     <div class="col text-white col-lg-1"> Arrastre los equipos</div>
     <div class="col  col-lg-2 ">
      <ul class="#li2" style="color=fffff" id="semifinal"></ul>
      </div>
   
 
      
      
         
      
    
  </div>
               
                
                
               
      
      
      </div>
      
      
             
  </div>
</div>
        
                
    </div>
        
        

    
  
    
    
    <button  type="submit" name="enviar" class="btn btn-success">Participar</button>
    </form>  
</div>   
    
    
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
    
      $( "#grupoF   li, #paisesseleccionados li" ).draggable({
        appendTo: "body",
  helper: 'clone',
    });
    
    
      $( "#grupoG   li, #paisesseleccionados li" ).draggable({
        appendTo: "body",
  helper: 'clone',
    });
    
      $( "#grupoH   li, #paisesseleccionados li" ).draggable({
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
        
      
   
                   
  $("#frmAlumno").submit(function(){
    //Funcion para obtener los valores del formulario se explica mas adelante
    datos = obtenerDatos();
      console.log(datos);
    $.ajax({
      url:'guardapaises.php', //URL del archivo php que procesa la petición. Se explica mas adelante
      type:'post', // Los datos se envían mediante el método POST
      dataType:'json', // La respuesta se obtiene como JSON
      data:datos, // Los datos del formulario
         success : function(data) {
             
             
           
        },
        error : function(jqXHR, textStatus, errorThrown) {
 console.log(textStatus, errorThrown,jqXHR);
        },
        
        
        
        
        
    
           
    }).done(function(respuesta){
        //Condición para verificar si se guardaron o no los datos
        if( respuesta.estado == true )
            {
             
 $('#modalExito').modal('show'); 
        $('#modalExito').modal('hide');
                
                $("#modalExito").on("hidden.bs.modal", function () {
     window.location.href = "https://intercom.ec";
});
                
                
          //  alert("La información se guardó correctamente");
            }
        else
          alert("Ocurrió un error al guardar la información, por favor vuelve a intentarlo");
    });
      
    return false; // Se regresa false para el que submit no se ejecute.
});                 
                   
                   
                  
            
            
            function obtenerDatos(){
    //Se crea la variable para la lista de idiomas seleccionados
    var paises ="";
    var paisessemifinal  ="";
    //Se obtiene todos los elementos li de la lista con id="idiomasseleccionados" y se recorren
    // utilizando el método .each
    $( "#cuartosfinal li" ).each(function (i) {
        // Se agrega a la variable idiomas el valor del atributo id y se le agrega una coma al final
        // para separar cada idioma
        paises += $(this).attr('id')+",";
    });
                
     $( "#semifinal li" ).each(function (i) {
        // Se agrega a la variable idiomas el valor del atributo id y se le agrega una coma al final
        // para separar cada idioma
        paisessemifinal += $(this).attr('id')+",";
    });            
                
    // Se almacenan todos los datos en un arreglo
    datos = [
        {name:"accion",value:"guardar"},
        {name:"nombres", value:$("#nombres").val()},
        {name:"apellidos", value:$("#apellidos").val()},
        {name: "cedula", value:$("#cedula").val()},
        {name:"paises", value:paises},
        {name:"paisessemifinal", value:paisessemifinal },
    
    
    ];
    // Se regresa la variable datos con toda la informacion del alumno
    return datos;
}
    
    </script>
    
  <!-- Modal -->
<div class="modal fade" id="modalExito" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Mensaje del Sistema</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Sus respuestas fueron guardadas correctamente. Suerte!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="$('#modalExito').modal('hide');">Ceptarr</button>
      
      </div>
    </div>
  </div>
</div>
 
</body>
        
</html>
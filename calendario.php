<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario web (Pau Egea)</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css";>
    <script src="js/jquery.min.js"></script>
    <script src="js/moment.min.js"></script>
    <!-- Full Calendar-->
    <link rel="stylesheet" href="css/fullcalendar.min.css";>
    <script src="js/fullcalendar.min.js"></script>
    <script src="js/es.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<?php 

    require("menu.php");

?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="col-7"> <div id="CalendarioWeb"></div>
                    <div class="col">

                    </div>
                </div>
            </div> 
        </div>        
    </div>
    <div id="CalendarioWeb"></div>
    
    <script>
        
        $(document).ready(function(){
            $('#CalendarioWeb').fullCalendar({
                header:{
                    left:'today,prev,next',
                    center:'title',
                    right: 'month, basicWeek, basicDay,    agendaWeek, agendaDay'
                }, 
                customButtons:{
                    Miboton:{
                        text:"Boton 1",
                        click: function(){
                            alert("Accion del boton");
                        }
                    }    

                },
                dayClick:function(date,jEvent,view){
                    alert("Valor seleccionado:"+date.format());
                    alert("Vista actual:"+view.name);
                    $(this).css('background-color','red');
                    $("#exampleModal").modal();
                },
                

                    events: 'eventos.php',
               
            
                eventClick: function(calEvent, jsEvent, view){
                    $('#tituloEvento').html(calEvent.title);
                    $('#descripcionEvento').html(calEvent.descripcion);
                    $("#exampleModal").modal();
                }
                

            });
        });

        

            

    </script>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tituloEvento"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div id ="descripcionEvento"></div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" >Agregar</button>
            <button type="button" class="btn btn-success" >Modificar</button>
            <button type="button" class="btn btn-danger" >Borrar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

        </div>
      </div>
    </div>
  </div>

</body>
</html>
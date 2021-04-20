<?php 

    require("menu.php");

?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css";>
    <script src="fullCalendar/js/jquery.min.js"></script>
    <script src="fullCalendar/js/moment.min.js"></script>
    <!-- Full Calendar-->
    <link rel="stylesheet" href="fullCalendar/css/fullcalendar.min.css";>
    <script src="fullCalendar/js/fullcalendar.min.js"></script>

  </head>

  <body>
  
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
            $('#CalendarioWeb').fullCalendar();
        });

    </script>




  </body>
</html>
<?php require_once 'conexion.php'; 
     
     $userId = $_SESSION['user'];
     var_dump($userId);
     $sql = "SELECT * FROM `phpcalendar`.users where id = $userId";
     var_dump($sql);
     $guardar = mysqli_query($db, $sql);
    $resultado = $db->query($sql);
        
        if($resultado->num_rows>0){
    
            while($row=$resultado->fetch_assoc()){
            
                $type = $row["type"];
                $username = $row["username"];
                $pass = $row["pass"];
                
                $username = $row["username"];
                $name = $row["name"];
                $name = $row["telephone"];
                $name = $row["nif"];
               


            }
        }
        
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/register.css" />
    <title>registro</title>
</head>
<body>
<body>
    <div id="login" class="container">
      <h3>Modificar usuario</h3>

      <form <?php echo $_SERVER['PHP_SELF']; ?> method="POST">
          <div class="input-container">
            <label for="username">Username</label>
            <input type="text" name="username" required/>
          </div>
          <div class="input-container">
            <label for="pass">Contraseña</label>
            <input type="password" name="pass" required/>
          </div>
       
            <div class="input-container">
                <label for="email">Email</label>
                <input type="email" name="email"required />
            </div>
            <div> 
           

            
            </div>

            <div class="input-container">
                <label for="name">Nombre</label>
                <input type="text" name="name" required/>

            </div>

            <div class="input-container">
                <label for="surname">Apellido</label>
                <input type="text" name="surname" required/>
            </div>
            
            <div class="input-container">
                <label for="telephone">Telefono</label>
                <input type="text" name="telephone" required/>
            </div>
                <div class="input-container">
                    <label for="nif">Nif</label>
                    <input type="text" name="nif"required />
                </div>

            

            <input type="submit" name="submit" values="Registrar" />
            
      </form>
      
  </body>
    
</body>
</html>
<?php require_once 'conexion.php'; 
     $invalid = false;
     $mail = false;

    if($_POST){
        $username =$_POST['username'];
        $pass=$_POST['pass'];
        $email=$_POST['email'];
        $name= $_POST['name'];
        $telephone= $_POST['telephone'];
        $nif= $_POST['nif'];
        $type = $_POST['type'];
        
        
         //pass
         
    
       

        $sql = "SELECT * FROM `phpcalendar`.users where email = '$email' ";
        $guardar = mysqli_query($db, $sql);
        $resultado = $db->query($sql);

        if($resultado->num_rows>0){
            $mail = true;
           
        }else{
            $sql = "INSERT INTO `users` (`id`, `username`, `pass`, `email`, `name`, `surname`, `telephone`, `nif`, `date_registered`) VALUES (NULL,  '$username', '$pass', '$email', '$name', '$surname',  '$telephone', '$nif', CURRENT_DATE());";
            $guardar = mysqli_query($db, $sql);
            $resultado = $db->query($sql);
            header('Location: login.php ');

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
      <h3>Registrate</h3>

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

            <div class="input-container custom-select">
                <label for="type">Tipo alumno</label>
                <select name="type" id="type" required>
                    
                    <option value="1">   1      </option>
                    <option value="2">   2      </option>

                 </select>
            </div>

            <input type="submit" name="submit" values="Registrar" />
            
      </form>
      <?php 
      if($mail){
        echo "<h3>El mail introducido ya existe</h3>";
      }
      ?>
  </body>
    
</body>
</html>






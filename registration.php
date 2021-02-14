<?php
require_once('connessione.php');


?>
<html>
    <head>
        <title>form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <body>
    <?php
    if(isset($_GET['create'])){
        $firstname = $_GET['Nome'];
        $secondname = $_GET['Cognome'];
        $phone = $_GET['Telefono'];

        $sql="INSERT INTO utenti(`Nome`,`Cognome`,`Telefono`)
         VALUES('$firstname','$secondname','$phone')";
        $res=mysqli_query($conn,$sql);
       

    }
    ?>
<form action="registration.php" method="get">
  <div class="form-group">
    <label">Nome</label>
    <input type="text"  name="Nome" class="form-control"  required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your date with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="text">Cognome</label>
    <input type="text"  name="Cognome" class="form-control"  required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telefono</label>
    <input type="number"  name="Telefono" class="form-control" placeholder="Numero" required>
  </div>
  <button type="submit" name="create" class="btn btn-primary">Submit</button>
</form>
    <div>

    
        </form>
        <a  href="./visualizza.php">
            <button class="btn btn-primary"target="_parent">Visualizza</button>
        </a>
    </div> 
 

  
    
    </body>
</html>


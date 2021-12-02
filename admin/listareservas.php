<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAdmin</title>
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

     <!-- Jquery -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

       <!--Iconos-->
    <script
    src="https://kit.fontawesome.com/eb496ab1a0.js"
    crossorigin="anonymous"
  ></script>

    <!--CSS Files -->
    <link href="../asset/css/layout.css" rel="stylesheet">
    <link href="asset/css/index.css" rel="stylesheet">

</head>
<body>

    <header class="header">
        <div class="container">
            <a href="index.html" class="logo">
                <img src="" alt="Logo " />
              </a>
        </div>

        <nav id="site-nav" class="site-nav">
            <ul >
                <li ><a href="films.html"><i class="fa fa-home site-nav--icon"></i>Films</a></li>
                <li ><a href="reservas.html"><i class="fas fa-user-shield site-nav--icon"></i>reservas</a></li>
                <li ><a href="#" class="button">Cerrar Sesion</a></li>
            </ul>

        </nav>
        <div id="menu-toggle" class="menu-toggle" onClick="cambiarClase()">
            <div class="hamburger"></div>
        </div>
    </header>


    <div class="container">

        <form action="listareservas.php" method='POST'>
            <label for="buscar">Buscar:</label>
            <br/>
            <input type="text"
            name="buscar"
            id="buscar"
            placeholder="buscar" required>
            <input type="submit" value="buscar">
        </form>
    </div>


    <table class="table table-responsive">
        <thead>
            <tr>
                
                <th>Cliente</th>
                <th>documento</th>
                <th>email</th>
                <th>Alquiler</th>
                <th>direccion</th>
                <th>telefono</th>
                <th>Pelicula</th>
                
            </tr>
        </thead>
        <tbody>
        <?php

        
 $buscar = "";
          if(isset($_POST["buscar"])){
            $buscar = $_POST["buscar"];
          }
          require("../asset/Conexion.php");

       
          // 1st Query
          $result = $conn->query("SELECT * FROM `reservas` WHERE `documento` like '%$buscar%'");
          if($result){
            
            // Cycle through results
            while ($row = $result->fetch_object()){
        

              echo "
              <td>$row->cliente</td>
              <td>$row->documento</td>
              <td>$row->email</td>
            <td>$row->alquiler</td>
                <td>$row->devolucion</td>
                <td>$row->direccion</td>
                <td>$row->telefono</td>
                <td>$row->pelicula</td>
            </tr>
            ";
        }
        // Free result set
        $result->close();
        $conn->next_result();

      } 

            ?>
        </tbody>
    </table>




    <!-- Template Main JS File -->
    <script src="../asset/js/script.js"></script>

</body>
</html>
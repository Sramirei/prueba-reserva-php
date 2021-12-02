<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inico</title>
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

     <!-- Jquery -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	 <!-- Dependencias Ventana emergente -->
	 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.7/dist/sweetalert2.min.js"></script>
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/themes@5.0.4/dark/dark.min.css">

       <!--Iconos-->
    <script
    src="https://kit.fontawesome.com/eb496ab1a0.js"
    crossorigin="anonymous"
  ></script>

    <!--CSS Files -->
    <link href="../asset/css/layout.css" rel="stylesheet">
    <link href="../asset/css/reserva.css" rel="stylesheet">


	
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
                <li ><a href="index.html"><i class="fa fa-home site-nav--icon"></i>Home</a></li>
                <li ><a href="#"><i class="fas fa-user-shield site-nav--icon"></i>Login</a></li>
                <li ><a href="#"><i class="fas fa-address-card site-nav--icon"></i>Contact</a></li>
            </ul>

        </nav>
        <div id="menu-toggle" class="menu-toggle" onClick="cambiarClase()">
            <div class="hamburger"></div>
        </div>
    </header>

    <div class="container">


	
<?php

$titulo = $_POST["titulo"];

echo "

<form action='guardar-reserva.php' class='formulario' id='formulario' method='POST'>

		<input type='hidden' name='titulo' value= '$titulo'>

			<!-- Grupo: Nombre -->
			<div class='formulario__grupo' id='grupo__nombre'>
				<label for='nombre' class='formulario__label'>Nombre</label>
				<div class='formulario__grupo-input'>
					<input type='text' class='formulario__input' name='nombre' id='nombre' placeholder='Sebastian'>
				</div>
				<p class='formulario__input-error'>El nombre no puede contener numeros 1232 o  caracteres especiales '#%$&$/</p>
			</div>

            
			<!-- Grupo: Documento -->
			<div class='formulario__grupo' id='grupo__documento'>
				<label for='documento' class='formulario__label'>Documento</label>
				<div class='formulario__grupo-input'>
					<input type='text' class='formulario__input' name='documento' id='documento' placeholder='9901814723'>
					
				</div>
				<p class='formulario__input-error'>Por Favor Proporcione un numero de Documento valido</p>
			</div>



			<!-- Grupo: Correo Electronico -->
			<div class='formulario__grupo' id='grupo__email'>
				<label for='correo' class='formulario__label'>Correo Electrónico</label>
				<div class='formulario__grupo-input'>
					<input type='email' class='formulario__input' name='email' id='email' placeholder='correo@correo.com'>
					
				</div>
				<p class='formulario__input-error'>Por Favor Proporcione una direccion de correo Valida</p>
			</div>

            
			<!-- Grupo: Fecha Alquiler -->
			<div class='formulario__grupo' id='grupo__alquiler'>
				<label for='alquiler' class='formulario__label'>Fecha Alquiler</label>
				<div class='formulario__grupo-input'>
					<input type='date' class='formulario__input' name='alquiler' id='alquiler'>
					
				</div>
				<p class='formulario__input-error'>Por Favor Proporcione una Fecha Valida</p>
			</div>

			<!-- Grupo: Fecha Devolucion -->
			<div class='formulario__grupo' id='grupo__devolucion'>
				<label for='devolucion' class='formulario__label'>Fecha devolucion</label>
				<div class='formulario__grupo-input'>
					<input type='date' class='formulario__input' name='devolucion' id='devolucion'>
					
				</div>
				<p class='formulario__input-error'>Por Favor Proporcione una Fecha Valida</p>
			</div>



			<!-- Grupo: Direccion -->
			<div class='formulario__grupo' id='grupo__direccion'>
				<label for='direccion' class='formulario__label'>Direccion</label>
				<div class='formulario__grupo-input'>
					<input type='text' class='formulario__input' name='direccion' id='direccion' placeholder='Calle-siempre-viva-123'>
					
				</div>
				<p class='formulario__input-error'>Por Favor Proporcione una direccion de residencia valida Valida</p>
			</div>

            
			<!-- Grupo: Teléfono -->
			<div class='formulario__grupo' id='grupo__telefono'>
				<label for='telefono' class='formulario__label'>Teléfono</label>
				<div class='formulario__grupo-input'>
					<input type='text' class='formulario__input' name='telefono' id='telefono' placeholder='4491234567'>
					
				</div>
				<p class='formulario__input-error'>El telefono solo puede contener numeros y el maximo son 10 dígitos.</p>
			</div>



			<!-- Grupo: Terminos y Condiciones -->
			<div class='formulario__grupo' id='grupo__terminos'>
				<label class='formulario__label'>
					<input class='formulario__checkbox' type='checkbox' name='terminos' id='terminos'>
					Acepto los Terminos y Condiciones
				</label>
			</div>

			<div class='formulario__mensaje' id='formulario__mensaje'>
				<p><i class='fas fa-exclamation-triangle'></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>

			<div class='formulario__grupo formulario__grupo-btn-enviar'>
				<button type='submit' class='formulario__btn' onclick='Swal'>Reservar</button>
				<p class='formulario__mensaje-exito' id='formulario__mensaje-exito'>Formulario enviado exitosamente!</p>
			</div>
		</form>
    </div>

"
?>
        




    

    <!-- Template Main JS File -->
    <script src='../asset/js/script.js'></script>

</body>
</html>
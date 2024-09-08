<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<script src="https://cdn.tailwindcss.com"></script>
		<title>La Aguaje</title>
		<link rel="stylesheet" href="styles.css" />
		<link rel="stylesheet" href="slider.css">

<!-------------------------------------------	Prueba -------------------------------------------->

<!-- Favicons
    ================================================== -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
	<!-- Bootstrap -->
	<!-- Stylesheet
		================================================== -->
	<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
	<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

	</head>
	<body>
		

<!--------------------------------------------------------------------- menu --------------------------------------------->
		
			<div class="topnav" id="myTopnav">
			  <a href="https://laaguaje.website/" class="active">Inicio</a>
			  <a href="/html/senderos.html">Senderos</a>
			  <a href="/html/contacto.html">Contacto</a>
			  <a href="/html/compras.html">Tienda</a>
			 
			  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			  </a>
			</div>
			
			<script src="/js/topnav.js"></script>
			

<style>
	.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 15px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ee76;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

 </style>
<div class="icon-bar">
  <a href="https://www.facebook.com/profile.php?id=61556556317093&mibextid=ZbWKwL" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="https://api.whatsapp.com/send?phone=5214811169415&text=Hola, me gustaria Obtener más información de La Aguaje" class="twitter"><i class="fa fa-whatsapp"></i></a> 
  <a href="https://www.instagram.com/reel/C5xXshErvVV/?utm_source=ig_web_copy_link" class="google"><i class="fa fa-instagram"></i></a> 

</div>
<!-------------------------------------------------------------------------- carousel -------------------------------------------->

		<div class="carousel">
			<!-- list item -->
			<div class="list">
				<div class="item">
					<img src="/img/principal.jpg" alt="img">
					<div class="content">
						<div class="author">CELA</div>
						<div class="title">Comunidad Ecoturistica </div>
						<div class="topic">La Aguaje</div>
						<div class="des">
							
						</div>
						
					</div>
				</div>
				<div class="item">
					<img src="/img/DSC_0070.jpg" alt="img">
					<div class="content">
						<div class="author">CELA</div>
						<div class="title">Sendero de Aves</div>
						<div class="topic" style="color: rgb(255, 255, 255);">La naturaleza te sorprendera</div>					
						
					</div>
				</div>
				<div class="item">
					<img src="/img/pinta_7.JPG" alt="img">
					<div class="content">
						<div class="author">CELA</div>
						<div class="title">"Donde la aventura</div>
						<div class="topic"> se hace profunda"</div>
						<div class="des" style="font-size: 3.4vh;">
							Explora la fascinante combinación de senderos entre cuevas y la dulzura natural de la miel en nuestro exclusivo recorrido.
						</div>
						
					</div>
				</div>
				<div class="item">
					<img src="/img/vivero_1.jpg" alt="img">
					<div class="content">
						<div class="author">CELA</div>
						<div class="title" style="font-size: 8vh;">Flores, plantas y más, aquí crecen en paz</div>
						
						<div class="des" style="font-size: 3.4vh;">
							Cultiva belleza y tranquilidad en tu espacio con nuestras variedades de plantas cuidadosamente seleccionadas						</div>
						<div class="buttons">
							
						</div>
					</div>
				</div>
			</div>
			<!-- list thumnail -->
			<div class="thumbnail">
				
				<div class="item">
					<img src="/img/Miel_r3.JPG" alt="img">
					<div class="content">
						
					</div>
				</div>
				<div class="item">
					<img src="/img/Miel_r2.JPG" alt="img">
					<div class="content">
						
					</div>
				</div>
				<div class="item">
					<img src="/img/pinta_1.JPG" alt="img">
					<div class="content">
						
					</div>
				</div>
			</div>
			<!-- next prev -->
	
			<div class="arrows">
				<button id="prev"><</button>
				<button id="next">></button>
			</div>
			<!-- time running -->
			<div class="time"></div>
		</div>

		<script src="app.js"></script>

<!-----------------------------------------------  Boton wats app----------------------------------------------------------------------->

<!---------------------------------------------------------------------	 categorias	--------------------------->

		<main class="main-content">
			<section class="container container-features">
				<div class="card-feature">
					<i class="fa-solid fa-plane-up"></i>
					<div class="feature-content">
						<span>Envíos de pedido</span>
						<p>Solicitelos por correo </p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-wallet"></i>
					<div class="feature-content">
						<span>Productos naturales</span>
						<p>Venta de miel</p>
						<p>Cereal con nopal</p>
						<p>Polen</p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-gift"></i>
					<div class="feature-content">
						<span>Lugares para visitar</span>
						<p>Nuestro vivero </br>
						   Senderos para caminar </br>
						   
						   Nuestra produccion de miel
						</p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-headset"></i>
					<div class="feature-content">
						<span>Mas Información</span>
						<p>Correo: </br>CELAdventures@outlook.com </br> celadventuras@gmail.com</p>
						    
						    <!------------------------------------------------------------------login --------------------------------------------------------------->
						    <div>
				  
								<button onclick="document.getElementById('id01').style.display='block'" style="width:auto; color:#000">Login</button>
						
									<div id="id01" class="modal">
							
										<form class="modal-content animate" action="php/login_usuario_be.php" method="POST" class="formulario__login">
											<div class="imgcontainer">
												<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
											
											</div>
							
												<div class="container">
													<label for="uname" style="color: #000;"><b>Username</b></label>
													<input type="text" placeholder="Enter Username" name="usuario" required>
											
													<label for="psw" style="color: #000;"><b>Password</b></label>
													<input type="password" placeholder="Enter Password" name="password" required>
													
													<button type="submit">Login</button>
													
												</div>
					
						
										</form>
									</div>
								</div>
						    <!------------------------------------------------------------------ fin ---------------------------------------------------------------->
a								<script src="js/login.js"></script>
						</div>
				</div>
			</section>

			<section class="container top-categories">
				<h1 class="heading-1">Disfruta de nuestro lugar:</h1>
				<div class="container-categories">
					<div class="card-category category-moca">
						<p>Miel Tradicional</p>
						<span></span>
					</div>
					<div class="card-category category-expreso">
						<p>Sendero de Aves</p>
						<span></span>
					</div>
					<div class="card-category category-capuchino">
						<p>Vivero</p>
						<span></span>
					</div>
				</div>
			</section>

	<!------------------------------------------------------	Texto Eslogan		------------------------------------------>

	
	<!------------------------------------------------------	carrusel		------------------------------------------>

<div class="row">
	<div class="column" style="background-color: transparent; padding-top: 4%;">
	  <h2 style="text-align: right; font-size: 3.5vh; color: #2E2C24;"><b>
		¿Estás listo para explorar paisajes impresionantes, conocer culturas fascinantes y crear recuerdos inolvidables?
	  </b></h2></br></br>
	  <p style="font-size: 20px; margin-left:33%; color: #2B2826
	  ;"> Únete a nosotros en nuestro emocionante recorrido turístico</br> diseñado para satisfacer todos tus sentidos.</p>
	</div>
	<div class="column" style="align-items: center; justify-content: center;  
	display: flex; ">
		<div class="container-carousel">
			<div class="carruseles" id="slider">
				<section class="slider-section">
					<img src="/img/tototl.JPG" alt="r">
				</section>
				<section class="slider-section">
					<img src="/img/pinta_9.JPG" alt="t">
				</section> 
				<section class="slider-section">
					<img src="/img/Miel_4.JPG" alt="y">
				</section>
				<section class="slider-section">
					<img src="/img/AVE_2.jpg" alt="w">
				</section>
				<section class="slider-section">
					<img src="/img/pinta_10.JPG" alt="l">
				</section>
				<section class="slider-section">
					<img src="/img/escon_6.jpg" alt="h">
				</section>
				<section class="slider-section">
					<img src="/img/escon_1.jpg" alt="ñ">
				</section>
				<section class="slider-section">
					<img src="/img/vivero_7.jpg" alt="m">
				</section>
				<section class="slider-section">
					<img src="/img/vivero.jpg" alt="n">
				</section>

			</div>
			<div class="btn-left"><i class='bx bx-chevron-left'></i></div>
			<div class="btn-right"><i class='bx bx-chevron-right'></i></div>
			<script src="script.js"></script>
		</div>
	</div>
  </div>

<div >
	
</div>
    
			
			<!--------------------------------------------------------------------		Mapa		------------------------------------------------->

			<div style="margin: 20px; padding: 30px; text-align: center; color: #2B2826;">
				<h1 style="font-size: 4vh;">Mision</h1>
			  </br>
				<p style="font-size: 2.8vh;">Nuestra misión es preservar y promover la rica herencia ambiental de 
					nuestra comunidad La Aguaje, mientras ofrecemos experiencias turísticas 
					auténticas y sostenibles que fomenten el respeto por la naturaleza y la 
					conexión con nuestras tradiciones ancestrales.</p>
				</br>

					<h1 style="font-size: 4vh;">Vision</h1>
				</br>
				  <p style="font-size: 2.8vh;">Nuestra visión es ser reconocidos a nivel nacional e internacional como un 
					destino turístico ejemplar, donde la preservación del medio ambiente, la 
					promoción de la cultura indígena y el desarrollo económico sostenible se 
					fusionen armoniosamente para crear un modelo de convivencia equitativa y 
					respetuosa entre los seres humanos y la naturaleza.</p>
			  </div>
<!------------------------------------------------------------------ Servicios   ------------------------------------------>
		

		<div  class="responsive">
			<style>
				.responsive {
					max-width: 100%;
					max-width: 1000px;
					margin-left: 22%;
					padding: 15px;
					height: auto;
					display: flex;
					flex-wrap: wrap;
				}
			</style>
			<img src="/img/Cela_promo1.png" alt=""  width="400" height="400" style="padding: 5px;" >
			<img src="/img/P_Avez.png" alt=""  width="400" height="400"	style="padding: 5px;">
		</div>

<h1 style="font-size: 4vh; color:#000;">Realiza tu reservacion  y disfruta la naturaleza !</h1>
		

<form id="regForm" action="reser.php" method="POST">

	<h1>Realiza tu reservacion y disfruta de la magia:</h1>
	<!-- One "tab" for each step in the form: -->
	<div class="tab"><h2>Tus datos:</h2>
		
		<p><input type="text" oninput="this.className = ''"  name="nombre" placeholder="nombre" required id="form"></p>
		<p><input type="text" oninput="this.className = ''"  name="apellido" placeholder="apellido" required id="form"></p>
		<label for="">Ingresa tu fecha de nacimiento:</label>
		<p><input type="date" oninput="this.className = ''"  name="f_nac"  placeholder="fecha de nacimiento" required id="form" style="color#000;"></p>
		<p><input type="text" oninput="this.className = ''"  name="pais"  placeholder="pais" required id="form"></p>
		<p><input type="text" oninput="this.className = ''"  name="estado"  placeholder="estado" required id="form"></p>
		<p><input type="text" oninput="this.className = ''"  name="tutor"  placeholder="tutor (encargado)" required id="form"></p>
	</div>
	<div class="tab">Reserva tu visita:
	  <p><input type="text" oninput="this.className = ''"  name="correo" placeholder="correo"></p>
	  <label for=""> Seleccione la ruta que desea visitar:</label>
	  <p><select  style="color:black" oninput="this.className = ''"  name="visita" id="country">
		<option value="Ruta Miel" style="color:black">Ruta Miel</option>
		<option value="Sendero de Avez" style="color:black">Sendero de Avez</option>
		<option value="Cuevas (Monos, La Pinta, La Escondida)" style="color:black">Cuevas (Monos, La Pinta, La Escondida)</option>
		<option value="Todos" style="color:black">Todos</option>
    	</select>
	  </p>
	  
	  <p><input type="text" oninput="this.className = ''"  name="turistas" id="" placeholder="Ingrese sus acompañantes"></p>
	  <p><input type="text" name="fecha" placeholder="fecha" required></p>

	</div>
	
	<div style="overflow:auto;">
	  <div style="float:right;">
		<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
		<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
		
	  </div>
	</div>
	<!-- Circles which indicates the steps of the form: -->
	<div style="text-align:center;margin-top:40px;">
	  <span class="step"></span>
	  <span class="step"></span>
	  
	</div>
  </form>

  <script >
      var currentTab = 0; // Current tab is set to be the first tab (0)
	showTab(currentTab); // Display the current tab
	
	function showTab(n) {
	  // This function will display the specified tab of the form...
	  var x = document.getElementsByClassName("tab");
	  x[n].style.display = "block";
	  //... and fix the Previous/Next buttons:
	  if (n == 0) {
		document.getElementById("prevBtn").style.display = "none";
	  } else {
		document.getElementById("prevBtn").style.display = "inline";
	  }
	  if (n == (x.length - 1)) {
		document.getElementById("nextBtn").innerHTML = "Submit";
	  } else {
		document.getElementById("nextBtn").innerHTML = "Next";
	  }
	  //... and run a function that will display the correct step indicator:
	  fixStepIndicator(n)
	}
	
	function nextPrev(n) {
	  // This function will figure out which tab to display
	  var x = document.getElementsByClassName("tab");
	  // Exit the function if any field in the current tab is invalid:
	  if (n == 1 && !validateForm()) return false;
	  // Hide the current tab:
	  x[currentTab].style.display = "none";
	  // Increase or decrease the current tab by 1:
	  currentTab = currentTab + n;
	  // if you have reached the end of the form...
	  if (currentTab >= x.length) {
		// ... the form gets submitted:
		document.getElementById("regForm").submit();
		return false;
	  }
	  // Otherwise, display the correct tab:
	  showTab(currentTab);
	}
	
	function validateForm() {
	  // This function deals with validation of the form fields
	  var x, y, i, valid = true;
	  x = document.getElementsByClassName("tab");
	  y = x[currentTab].getElementsByTagName("input");
	  // A loop that checks every input field in the current tab:
	  for (i = 0; i < y.length; i++) {
		// If a field is empty...
		if (y[i].value == "") {
		  // add an "invalid" class to the field:
		  y[i].className += " invalid";
		  // and set the current valid status to false
		  valid = false;
		}
	  }
	  // If the valid status is true, mark the step as finished and valid:
	  if (valid) {
		document.getElementsByClassName("step")[currentTab].className += " finish";
	  }
	  return valid; // return the valid status
	}
	
	function fixStepIndicator(n) {
	  // This function removes the "active" class of all steps...
	  var i, x = document.getElementsByClassName("step");
	  for (i = 0; i < x.length; i++) {
		x[i].className = x[i].className.replace(" active", "");
	  }
	  //... and adds the "active" class on the current step:
	  x[n].className += " active";
	}
  </script>
<!------------------------------------------------------------------------------	Foooter		------------------------------------------------------------>
			
		</main>

		<footer class="footer">

			<div class="container container-footer">
				<div class="menu-footer">	
				

					<div class="copyright">
						<p>
						CELA &copy; 2024
						</p>	
					</div>
				</div>
			</div>
		</footer>
		<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
	</body>
</html>

<html>
	<body>
		<?php
			include "header.php";
			ini_set("display errors", E_ALL);
	
			//CONEXION
			$host="127.0.0.1";
			$port=3306;
			$socket="";
			$user="root";
			$password="Suripanta.98";
			$dbname="cinedb";

			$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
				or die ('Could not connect to the database server' . mysqli_connect_error());

			//$con->close();

			
			//COMPROBAR CONEXION
			if (mysqli_connect_errno()) {
				printf("Conexion fallida: %s\n", mysqli_connect_error());
				exit();
			}
			
			echo("Conexion exitosa");
			
			
			//RECUPERAR LOS REGISTROS
			
			$res = mysqli_query($con, "SELECT * FROM TipoProyeccion");
			
			echo("<table  border=1>");
			while ($registro = mysqli_fetch_row($res)){
				echo("<tr><td>$registro[0]</td><td>$registro[1]</td><td>$registro[2]</td></tr>");
			}
			echo("</table>");
			
			mysqli_free_result($res);
			mysqli_close($con);
		?>
		<form>
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<h1 class="my-4">Shop Name</h1>
						<div class="list-group">
						<a href="#" class="list-group-item">Category 1</a>
						<a href="#" class="list-group-item">Category 2</a>
						<a href="#" class="list-group-item">Category 3</a>
					</div>
				</div>
		<!-- /.col-lg-3 -->

					<div class="col-lg-9">

						<div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							</ol>
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
							</div>
						</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>

						<div class="row">

								<div class="col-lg-4 col-md-6 mb-4">
									<div class="card h-100">
									<a href="datosPelicula.php?idPelicula=" ><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
										<div class="card-body">
											<h4 class="card-title">
											<a href="#">Item One</a>
											</h4>
											<h5>$24.99</h5>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
										</div>
										<div class="card-footer">
											<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 mb-4">
									<div class="card h-100">
									<a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
									<div class="card-body">
										<h4 class="card-title">
										<a href="#">Item Two</a>
										</h4>
										<h5>$24.99</h5>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
									</div>
									<div class="card-footer">
										<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
									</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 mb-4">
									<div class="card h-100">
									<a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
									<div class="card-body">
										<h4 class="card-title">
										<a href="#">Item Three</a>
										</h4>
										<h5>$24.99</h5>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
									</div>
									<div class="card-footer">
										<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
									</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 mb-4">
									<div class="card h-100">
									<a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
									<div class="card-body">
										<h4 class="card-title">
										<a href="#">Item Four</a>
										</h4>
										<h5>$24.99</h5>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
									</div>
									<div class="card-footer">
										<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
									</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 mb-4">
									<div class="card h-100">
									<a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
									<div class="card-body">
										<h4 class="card-title">
										<a href="#">Item Five</a>
										</h4>
										<h5>$24.99</h5>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
									</div>
									<div class="card-footer">
										<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
									</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 mb-4">
									<div class="card h-100">
									<a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
									<div class="card-body">
										<h4 class="card-title">
										<a href="#">Item Six</a>
										</h4>
										<h5>$24.99</h5>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
									</div>
									<div class="card-footer">
										<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
									</div>
								</div>
							</div>
						</div>
					<!-- /.row -->
					</div>
			<!-- /.col-lg-9 -->
				</div>
		<!-- /.row -->
			</div>
		</form>

		
	</body>
</html>

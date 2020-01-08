<!DOCTYPE html>
<html lang="en">
<head>
	<title>SCAB</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="bootstrap-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-dist/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	
	
	<!---->
	<script type="text/javascript" src="bootstrap-dist/js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="bootstrap-dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="bootstrap-dist/js/spinner.js"></script>
	<script type="text/javascript" src="bootstrap-dist/js/jQuery.rut.js"></script>
	
	
	<script type="text/javascript" src="bootstrap-dist/js/script.js"></script>

	<style type="text/css">
		#col-md-3_1 {
			/*padding-left: 44px;*/
		}
		#col-md-6_1 {
			/*padding-left: 44px;*/
		}
		.row {
			margin-right: auto;
			margin-left: auto;
		}
	</style>

	<script type="text/javascript">
		
		$('#ingreso').click(function(){
			alert('kdkdkdkd');
		});
	</script>
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse"
	            data-target=".navbar-ex1-collapse">
	      <span class="sr-only">Desplegar navegación</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	    <a class="navbar-brand" href="#" style="color: #BDBDBD;">SCAB - Octaba Compañia Quinta Normal</a>
	  </div>
	 
	  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
	       otro elemento que se pueda ocultar al minimizar la barra -->
	  <div class="collapse navbar-collapse navbar-ex1-collapse">
	    <!--<ul class="nav navbar-nav">
	      <li class="active"><a href="#">Enlace #1</a></li>
	      <li><a href="#">Enlace #2</a></li>
	      <li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	          Menú #1 <b class="caret"></b>
	        </a>
	        <ul class="dropdown-menu">
	          <li><a href="#">Acción #1</a></li>
	          <li><a href="#">Acción #2</a></li>
	          <li><a href="#">Acción #3</a></li>
	          <li class="divider"></li>
	          <li><a href="#">Acción #4</a></li>
	          <li class="divider"></li>
	          <li><a href="#">Acción #5</a></li>
	        </ul>
	      </li>
	    </ul>
	 
	    <form class="navbar-form navbar-left" role="search">
	      <div class="form-group">
	        <input type="text" class="form-control" placeholder="Buscar">
	      </div>
	      <button type="submit" class="btn btn-default">Enviar</button>
	    </form>
	 
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="#">Enlace #3</a></li>
	      <li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	          Menú #2 <b class="caret"></b>
	        </a>
	        <ul class="dropdown-menu">
	          <li><a href="#">Acción #1</a></li>
	          <li><a href="#">Acción #2</a></li>
	          <li><a href="#">Acción #3</a></li>
	          <li class="divider"></li>
	          <li><a href="#">Acción #4</a></li>
	        </ul>
	      </li>
	    </ul>-->
	  </div>
	</nav>
	<div class="row">
	  
	  	<div id="col-md-3_1" class="col-md-2">
	  		<!--<h4 style="color:#BDBDBD;">Ingreso Bomberos</h4>-->
			<div class="form-group">
				<p>Rut Funcionario</p>
			    <input type="text" class="form-control input-sm" id="rut" data-toggle="tooltip" data-placement="top" title="Ingresar rut sin puntos ni guión!" required maxlength="12" autocomplete="off" placeholder="Ingrese su rut!">
			</div>
			  <!--<button type="submit" class="btn btn-default">Registrar Ingreso</button>-->
			 	<button id="ingresar" class="btn btn-primary btn-block">Registrar Ingreso</button>
		</div>
		<div id="col-md-10_1" class="col-md-10">
			<p>Funcionarios Ingresados</p>
			<div class="row" id="table">
			</div>
			
		</div>

</body>
</html>



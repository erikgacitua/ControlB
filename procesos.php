<?php
require('conexion.php');
error_reporting(E_ALL);
ini_set('display_errors', '1');

date_default_timezone_set("America/Santiago");

$accion = $_POST['accion'];

if ($accion == "Ingreso") {
	
	$rut = $_POST['rut_'];
	$row = "";
	//Query que identifica si el rut existe, si no existe cae en el if, si no 
	$sql = "SELECT * from usuarioB where rutB = '".$rut."'";
	$exe = mysql_query($sql);
	if (mysql_num_rows($exe) == 0) {
		$array = array("code"=>"404","status"=>"Not Found","message"=>"No existen registros en el sistema con el rut ingresado!");
		echo $json = json_encode($array);
			
	}else{
		
		//Carga de datos del usuario si es que existe
		$row_ = mysql_fetch_assoc($exe);
		
		$id = $row_['id'];
		$nombresB = $row_['nombresB'];
		$apellidosB = $row_['apellidosB'];
		$rutB = $row_['rutB'];
		$edadB = $row_['edadB'];
		$direccionB = $row_['direccionB'];
		$companiaB = $row_['companiaB'];
		$cuartelB = $row_['companiaB'];
		$estadoB = $row_['companiaB'];
		$rutaImg = $row_['rutaImgB'];

		
		$date_now = date('Y-m-d H:m:s');
		
		//Se valida que el usuario no existe y se genera el primer registro con estado 1
		$sql_ = "SELECT *from registrosB where rutR = '".$rutB."'";
		$exe_ = mysql_query($sql_);

		if (mysql_num_rows($exe_) == 0) {
			
			$insert = "INSERT into registrosB(rutR,
											  nombresR,
											  apellidosR,
											  entradaR,
											  salidaR,
											  estadoR,
											  imageR)
									  values('".$rutB."','".$nombresB."','".$apellidosB."','".$date_now."','','1','".$rutaImg."')";
			$exe_1 = mysql_query($insert);

			//Query para recorrer los registros y pintar en el data table
			$query = "SELECT distinct(rutR),idR,nombresR,apellidosR, entradaR,salidaR,imageR from registrosB group by rutR order by entradaR desc";
			$Exe = mysql_query($query);
			
			while ($rOw = mysql_fetch_array($Exe)) {
								
			
				$array = array($rOw);
				$id_R = $rOw['idR'];
				$rut_R = $rOw['rutR'];
				$nom_R = $rOw['nombresR'];
				$ape_R = $rOw['apellidosR'];
				$entrada_R = $rOw['entradaR'];
				$salida_R = $rOw['salidaR'];
				$image_R = $rOw['imageR'];

				$thumbails = "<div class='col-md-3'>
								<div class='panel-default'>
									<div class='panel-heading'>
									</div> 
									    <div class='thumbnail'>
									      <img class='class=img-rounded' src='".$image_R."' alt='...'>
									      <div class='caption'>
									        <h5>".$nom_R." ".$ape_R."</h5>
									        <p>Rut: ".$rut_R."<br>
									           Entrada: ".$entrada_R."
									        </p>
									      </div>
									    </div>

								  </div>
								</div>";
				//echo $thumbails;
				echo json_encode(array("code"=>"200","thumbails"=>$thumbails));
									
			}
				
			//echo $json_ = json_encode($array_);
		}

		//Si el usuario existe, se pregunta por el estado, si el estado es 1, quiere decir que el usuario ya marco una entrada, por lo tanto se debe registrar solo la salida en el campo salidaR de la tabla registrosB.
		if ($roW = mysql_num_rows($exe_) > 0) {

			//Se consulta por el ultimo registro ingresado del usuario para actualizar el campo salidaR.
			$query = "SELECT idR,estadoR,entradaR,salidaR from registrosB where rutR = '".$rutB."' order by idR desc limit 1";
			$exe__ = mysql_query($query);
		
			$row___ = mysql_fetch_assoc($exe__);
			//var_dump($row___);
			if ($row___['estadoR'] == 1 and $row___['salidaR'] == "0000-00-00 00:00:00") {
				
				$update = "UPDATE registrosB set salidaR = '".$date_now."', estadoR = 2 where idR = ".$row___['idR']."";
				$exe___ = mysql_query($update);

				echo json_encode(array("code"=>"200","status"=>"success","message"=>"Se registra salida con exito a las '".$date_now."' de '".$nombresB." ".$apellidosB."'"));

				//Se arma la tabal con los registros
				$sql__ = "SELECT distinct(rutR),idR,nombresR,apellidosR, entradaR,salidaR,imageR, estadoR from registrosB WHERE estadoR = 1 group by rutR order by entradaR desc";
				$exe = mysql_query($sql__);

				while ($Row = mysql_fetch_array($exe)) {
					
					$i = $Row['idR'];
					$r = $Row['rutR'];
					$n = $Row['nombresR'];
					$a = $Row['apellidosR'];
					$e = $Row['entradaR'];
					$im = $Row['imageR'];

					$thumbails_ = "<div class='col-md-3'>
								<div class='panel-default'>
									<div class='panel-heading'>
									</div> 
									    <div class='thumbnail'>
									      <img class='class=img-rounded' src='".$im."' alt='...'>
									      <div class='caption'>
									        <h5>".$n." ".$a."</h5>
									        <p>Rut: ".$r."<br>
									           Entrada: ".$e."
									        </p>
									      </div>
									    </div>

								  </div>
								</div>";
				//echo $thumbails;
				echo $thumbails_;

				}

			}
			//Si el regisstro del usuario se encuentra con el ingreso de entraR y salidaR con el formato 0000-00-00 00:00:00, se ingresara un nuevo registro
			if ($row___['entradaR'] != "0000-00-00 00:00:00" and $row___['salidaR'] != "0000-00-00 00:00:00") {

				$insert_ = "INSERT into registrosB(rutR,
											  nombresR,
											  apellidosR,
											  entradaR,
											  salidaR,
											  estadoR,
											  imageR)
									  values('".$rutB."','".$nombresB."','".$apellidosB."','".$date_now."','','1','".$rutaImg."')";
				$exe_2 = mysql_query($insert_);

				//query para volver a cargar la tabla actualizada en la vista de home
				/**/$qr = "SELECT distinct(rutR),idR,nombresR,apellidosR, entradaR,salidaR,imageR, estadoR from registrosB where estadoR = 1 group by rutR order by entradaR desc";
				$e = mysql_query($qr) or die(mysql_error());

				while ($r = mysql_fetch_array($e)) {
				//print_r($rOw);				
					$id_R__ = $r['idR'];
					$rut_R__ = $r['rutR'];
					$nom_R__ = $r['nombresR'];
					$ape_R__ = $r['apellidosR'];
					$entrada_R__ = $r['entradaR'];
					$salida_R__ = $r['salidaR'];
					$image_R__ = $r['imageR'];

					$thum = "<div class='col-md-3'>
									<div class='panel-default'>
										<div class='panel-heading'>
										</div> 
										    <div class='thumbnail'>
										      <img class='class=img-rounded' src='".$image_R__."' alt='...'>
										      <div class='caption'>
										        <h5>".$nom_R__." ".$ape_R__."</h5>
										        <p>Rut: ".$rut_R__."<br>
										           Entrada: ".$entrada_R__."
										        </p>
										      </div>
										    </div>

									  </div>
									</div>";
					//echo $thumbails;
					echo $thum;
				}
			
			}
		}

	}
}
?>
$(document).ready(function(){
	console.log('jquery esta funcionando');
	
	$("#rut").rut({
		formatOn: 'keyup',
		minimumLength: 9,
	});
	$('[data-toggle="tooltip"]').tooltip();

	//$("#table-register").dataTable(); 
});

$(function(){
	$("#ingresar").click(function(){
		//console.log("estamos acá");
		var rut = $("#rut").val();
		var accion = "Ingreso";
		
		if(rut == ""){
			alert("Favor ingresar rut!");
			$("#rut").focus();
		}else{

			var data = $.post("procesos.php", {accion: accion , rut_: rut});
			data.error(function(){
				alert("Error al enviar información, acción: " + accion);
			});
			data.success(function(resp){
				console.log("Aca "+resp);
				$("#table").html(resp);
				/*var json = JSON.parse(resp);
				console.log(json);
				$("#table").html(resp);
				if(json.code == "404"){
					alert(json.message);
					$("#rut").val("");
					$("#rut").focus();
				}
				
				if(json.code == "200"){
					console.log("200");
					console.log(json.table);
					alert(json.message);
					$("#rut").val("");
					$("#rut").focus();
					$("#table").html(json.table);
					$("#table-register").dataTable();
				}
				
				if(json.code == "201"){
					console.log(json);
					alert(json.message);
					$("#rut").val("");
					$("#rut").focus();
				}*/
			});
		}
	});
});


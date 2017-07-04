
//var btnIniciar = document.getElementById("iniciar")
var btnEntrar = document.getElementById("btnEntrar")

function mostrarLogin(evento){
	evento.preventDefault()
	$("#logearse").animate({
		marginLeft:5,
		marginRight:5
		},	1000);
}

function verificarContrasena(e){
		e.preventDefault()
		//alert("Comprobando")
		$.ajax({

				url: $("#fomularioIngresar").attr("action"),
				type: $("#fomularioIngresar").attr("method"),
				data: $("#fomularioIngresar").serialize()
				,success: function(resp){ 
					$("#status").html('<img src="http://av1salesport.esy.es/wp-content/uploads/2016/03/icono-de-visto-verde.png" alt="" />'); }

		});

}

function nuevoIngreso(e){
		e.preventDefault()
		//alert("Comprobando")
		$.ajax({

				url: $("#fomularioRegistro").attr("action"),
				type: $("#fomularioRegistro").attr("method"),
				data: $("#fomularioRegistro").serialize()
				,success: function(resp){ 
					$("#status").html('<img src="http://av1salesport.esy.es/wp-content/uploads/2016/03/icono-de-visto-verde.png" alt="" />'); }

		});

}


function ingresoMal(){
	$("#status").html('<img src="http://av1salesport.esy.es/wp-content/uploads/2016/03/icono-de-visto-verde.png" alt="" />'); 
}

function mostrarUsuarios(e){
	e.preventDefault()
	$.ajax({

				url: $("#btnMostrarUsuarios").attr("action"),
				type: $("#btnMostrarUsuarios").attr("method"),
				data: $("#btnMostrarUsuarios").serialize()
				,success: function(resp){ 
					$("#perfilAdministrador").html('<img src="http://av1salesport.esy.es/wp-content/uploads/2016/03/icono-de-visto-verde.png" alt="" />'); }

		});

}

function cargarDocumento() {
	//alert("Comprobando");
	 $("#iniciar").click(mostrarLogin);
	 
	 
	//btnIniciar.addEventListener("click", mostrarLogin);
	//btnEntrar.addEventListener("click", verificarContrasena);
	$("#fomularioIngresar").submit(verificarContrasena);
	$("#fomularioRegistro").submit(nuevoIngreso);
	$("#btnMostrarUsuarios").click(mostrarUsuarios);
	
}

$(document).on("ready", cargarDocumento());
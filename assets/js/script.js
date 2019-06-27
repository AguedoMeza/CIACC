function Ejecutar ()
{
	var t,p,pr,e,a,pa;


	t = parseFloat(document.getElementById("tareas").value)*.15; //tarea vale el 15%
	p = parseFloat(document.getElementById("practicas").value)*.20;
	pr =parseFloat(document.getElementById("proyectos").value)*.20;
	e = parseFloat(	document.getElementById("examen").value)*.30;
	a = parseFloat(	document.getElementById("asistencias").value)* .10;
	pa =parseFloat(	document.getElementById("participacion").value)*.05;

	res = t+p+pr+e+a+pa;
	res = res.toFixed(2);

	if(res >= 70)
	{
		alertify.success('Aprobado ->'+res);
		document.getElementById("imagen").src="imagenes/feliz.png";
	}
	else
	{
		alertify.success('Reprobado ->'+res);
		document.getElementById("imagen").src="imagenes/triste.png";
	}
	$('#contenedor').fadeIn("slow");

	document.getElementById('pro').style.width = res+"%";
	document.getElementById('num').textContent = res+"%";

}

function reiniciar()
{
	var validator = $("#calificaciones").validate();
	validator.resetForm();

	$('#contenedor').fadeOut("slow");
	document.getElementById("tareas").value = "";
	document.getElementById("practicas").value = "";
	document.getElementById("proyectos").value = "";
	document.getElementById("examen").value = "";
	document.getElementById("asistencias").value = "";
	document.getElementById("participacion").value = "";
	document.getElementById('pro').style.width = "0%";

}

// function ejecutar()
// {

// 	var tareas=document.getElementById("tareas").value;
// 	var practicas=document.getElementById("practicas").value;
// 	var proyecto=document.getElementById("proyectos").value;
// 	var examen=document.getElementById("examen").value;
// 	var participacion=document.getElementById("participacion").value;
// 	var asistencias=document.getElementById("asistencias").value;
// 	var res;

// 	var t= parseFloat(tareas)*.15;
// 	var pr= parseFloat(practicas)*.20;
// 	var pro= parseFloat(proyecto)*.20;
// 	var ex= parseFloat(examen)*.30;
// 	var asis= parseFloat(asistencias)*.10;
// 	var part= parseFloat(participacion)*.5;
	
// 	 res= t+pr+pro+ex+asis+part;
// 	 res=res.toFixed(2);

// 	 if (res >= 70)
// 	  {
// 	  	document.getElementById('imagen').src="imagenes/feliz.png";
// 	  }
// 	  else
// 	  {
// 	  	document.getElementById('imagen').src="imagenes/triste.png";
// 	  }
 
// }
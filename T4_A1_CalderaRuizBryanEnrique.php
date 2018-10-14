<!DOCTYPE html>
<html>
<head>
	<title>Calificaciones</title>
	<meta charset="utf-8">
</head>
<body>
	<?php

	function califAlumno(){
     

	$CalificacionesAlumnos=array("Byan"=>$calificaciones= array(80,90,100,30,40,50 ),
								 "Gonzalo"=>$calificaciones= array(100,100,100,100,100,100),
								 "Manuel"=>$calificaciones= array( 75,40,90,80,80,88),
								 "Liza"=>$calificaciones=array(90,99,88,77,66,78),
								 "Octaviano"=> $calificaciones= array(80,90,89,80,40,50 ),
								 "Lorena"=>$calificaciones= array(70,80,100,55,100,100),
								 "Jose"=>$calificaciones= array( 75,90,90,70,80,88),
								 "Maria"=>$calificaciones=array(90,99,88,77,66,78),
								 "Esteban"=>$calificaciones=array(60,80,77,98,89,100),
								 "David"=>$calificaciones=array(90,90,89,87,86,100)
								);

	

	return $CalificacionesAlumnos;
	}


	function promedios(){
		$suma=0;
	$sumAlumno=0;
	$CalificacionesAlumnos=califAlumno();

//======================================INICIO DE FOR QUE MUESTRA LAS CALIFICACIONES DE CADA ALUMNO======================
	foreach ($CalificacionesAlumnos as $key => $value) {
		# code...
		echo $key." ";

		for ($i=0; $i < sizeof($value); $i++) { 
			# code...
			$sumAlumno=($sumAlumno+$value[$i]);
			$suma= $suma+$value[$i];
			
	echo $value[$i]." ,";
		}
     echo "<br>";

	}
   echo "<br><br>";
   //======================================FIN DE FOR QUE MUESTRA LAS CALIFICACIONES DE CADA ALUMNO======================

	}
	

   //=== ===================================INICIO DE FOR QUE MUESTRA EL PROMEDIO DE CADA ALUMNO======================

function promCAlum(){
	$suma=0;
	$sumAlumno=0;
	$promAlumno=0;
	$promedioGeneral=promedioGeneral();
	$mayor=0;
	
	$contador=0;
	 $CalificacionesAlumnos=califAlumno();


	foreach ($CalificacionesAlumnos as $key => $value) {
		# code...
		

		for ($i=0; $i < sizeof($value); $i++) { 
			# code...
			$sumAlumno=($sumAlumno+$value[$i]);
			$suma= $suma+$value[$i];
			
		}

		$promAlumno=$sumAlumno/sizeof($value);
		if($promAlumno>$mayor){
			$mayor=$promAlumno;
		}
		if($promAlumno>$promedioGeneral){
			$contador++;
		}

			echo "Alumno ".$key." con promedio de: ".$promAlumno;
			echo "<br>";
			
		$sumAlumno=0;
		$promAlumno=0;
	}
   echo "<br>";
   echo "Promedio general por grupo es: ".$promedioGeneral;
	echo "<br>";
	echo "Promedio más alto es de: ".$mayor;
	echo "<br>";
	echo "cantidad de alumnos con promedio mayor que el general: ".$contador;
	echo "<br>";
	
}

function promedioGeneral(){
	$suma=0;
	$prom=0;
	 $CalificacionesAlumnos=califAlumno();

	foreach ($CalificacionesAlumnos as $key => $value) {
		# code...
		for ($i=0; $i < sizeof($value); $i++) { 
			# code...
			$suma= $suma+$value[$i];
			
		}
		
			$prom=$suma+$prom;
			$promedioGeneral=$prom/sizeof($CalificacionesAlumnos);
			
			
		$suma=0;	
	}
	
   $promedioGeneral=$prom/sizeof($CalificacionesAlumnos);
	
	return $promedioGeneral;
}

echo "<h1> Calificaciones y promedios</h1>";

 //$prom=promCAlum();
  echo promedios();
 echo promCAlum();


/*foreach ($CalificacionesAlumnos as $key => $value) {
		# code...
		

		for ($i=0; $i < sizeof($value); $i++) { 
			# code...
			$sumAlumno=($sumAlumno+$value[$i]);
			$suma= $suma+$value[$i];
			
		}


		$promAlumno=$sumAlumno/sizeof($value);
		
		
		
		$sumAlumno=0;
		$promAlumno=0;
		$suma=0;
	}*/

	//$promedioGeneral=$suma/sizeof($CalificacionesAlumnos);
	//echo "<br>";
	//echo "Promedio general por grupo es: ".$promedioGeneral;

//======================================FIN DE FOR QUE MUESTRA EL PROMEDIO DE CADA ALUMNO======================
	
	
	//======================================INICIO DE FOR QUE MUESTRA  PROMEDIO GENERAL POR GRUPO======================


	

	?>
     
    

</body>

</html>
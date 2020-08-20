<?php
	// Ejemplo de conexión a base de datos MySQL con PHP.
	//
	// Ejemplo realizado por Oscar Abad Folgueira: http://www.oscarabadfolgueira.com y https://www.dinapyme.com
	
    // Datos de la base de datos

    $conec= pg_connect("host=25.6.112.69 port=8081 dbname=postgres  user=postgres password=prueba123") or die ("Error de Conexion".pg_last_error());
    
	
	
	
	// Selección del a base de datos a utilizar

	// establecer y realizar consulta. guardamos en variable.
	$consulta = "SELECT * FROM alumnos";
	$resultado = pg_query( $conec, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// Motrar el resultado de los registro de la base de datos
	// Encabezado de la tabla
	echo "<table borde='2'>";
	echo "<tr>";
	echo "<th>Nombre</th>";
	echo "<th>Edad</th>";
	echo "</tr>";
	
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = pg_fetch_array( $resultado ))
	{
		echo "<tr>";
		echo "<td>" . $columna['nombre'] . "</td><td>" . $columna['edad'] . "</td>";
		echo "</tr>";
	}
	
	echo "</table>"; // Fin de la tabla

	// cerrar conexión de base de datos
    pg_close( $conec );
    
?>
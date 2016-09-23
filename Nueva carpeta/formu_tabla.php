<html>
		<head>
				<title>
				
				Página de Inicio
				</title>
		
		</head>

		<body>
		<table border>
		
	
		<?php //Ejemplo formularios - tablas
			       $fila = $_GET['fila'];
			       $colu = $_GET['colu'];
			      

				$contador = 1;
				
				for ($cont1 = 1; $cont1 <= $fila; $cont1++) 
				{
					
					echo "<tr>";
					
					for ($cont2 = 1; $cont2 <= $colu; $cont2++) 

					{
						
						
							echo "<td>$contador </td>";
						
							
						
						$contador++;
					}
					echo "</tr>";
				}


			
		?>


				

		
		</table>

		<form action = "formu_tabla.html" method="GET">

					
					<br>
					<input type ="submit" value ="volver">
				
				</form>
		</body>
</html>
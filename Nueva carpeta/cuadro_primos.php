<html>
		<head>
				<title>
				
				Página de Inicio
				</title>
		
		</head>

		<body>
		<table border>
		
		<?php
		function primo($num)
		{
		    $cont=0;
		    // Funcion que recorre todos los numero desde el 2 hasta el valor recibido
		    for($i=2;$i<=$num;$i++)
		    {
		        if($num%$i==0)
		        {
		            // Si se puede dividir por algun numero mas de una vez, no es primo
		            if(++$cont>1)
		                return false;
		        }
			}
		    	return true;
		}

				$contador = 1;
				
				for ($fila = 1; $fila <= 10; $fila++) 
				{
					
					echo "<tr>";
					
					for ($colu = 1; $colu <= 10; $colu++) 

					{
						
						//$divisor=$contador%2;
						if( primo($contador)== true )
						{
							
							echo "<td bgcolor= red >$contador </td>";
						}
						else
						{
							echo "<td bgcolor= green >$contador </td>";
						}
						$contador++;
					}
					echo "</tr>";
				}
			
		?>
		
		</table>
		</body>
</html>
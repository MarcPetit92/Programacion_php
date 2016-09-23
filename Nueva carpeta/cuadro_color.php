<html>
		<head>
				<title>
				
				Página de Inicio
				</title>
		
		</head>

		<body>
		<table border>
		
		<?php

				$contador = 1;
				
				for ($fila = 1; $fila <= 10; $fila++) 
				{
					
					echo "<tr>";
					
					for ($colu = 1; $colu <= 10; $colu++) 

					{
						
						//$divisor=$contador%2;
						if($colu <= 5 && $fila <= 5 )
						{
							
							echo "<td bgcolor= red >$contador </td>";
						}
						elseif ($colu <= 10 && $fila <= 5)

						{
							echo "<td bgcolor= blue >$contador </td>";
						}
						elseif ($colu <= 5 && $fila <= 10)

						{
							echo "<td bgcolor= yellow >$contador </td>";
						}
						
						else
						{
							echo "<td bgcolor= orange >$contador </td>";
						}
						$contador++;
					}
					echo "</tr>";
				}
			
		?>
		
		</table>
		</body>
</html>
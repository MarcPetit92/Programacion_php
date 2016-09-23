<html>
		<head>
				<title>
				
				Página de Inicio
				</title>
		
		</head>

		<body>
		<table border>
		<tr>
		<?php
		
		$contador=1;
		
		
		


		for ($cont = 1; $cont <= 100; $cont++) 

		{
			$color =rand() . "\n";
    				
				$divisible = $cont%10;
				
				$parimpar = $contador%2;


				if ($divisible == 0)
				{

					if($cont < 100)
					{
						echo "<td bgcolor = green> $cont</td> ";
						echo "</tr > <tr>";
					}	
					else
					{

						echo "<td bgcolor = green> $cont</td> ";
						
					}
					
				}
				else
				{
					echo "<td bgcolor = $cont + 200> $cont</td>";
				}

						
			
			
		
		}	
				
		?>
		
		</table>
		</body>
</html>
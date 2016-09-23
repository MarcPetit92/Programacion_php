<html>
		<head>
				<title>
				
				Pagina de Inicio
				</title>
		
		</head>

		<body>
			<h3> Es primo o no?</h3>
				<?php //Ejemplo formularios - primos
			       $num = $_GET['numero'];
			       echo "El número"." ".$num;
			     	echo " ";

       		$veces=0;
		    //  recorre todos los numero desde el 2 hasta el valor recibido
		    for($cont=2;$cont<=$num;$cont++)
		    {

		        if($num%$cont==0)
		        {
		        	$veces++;
		        	  // Si se puede dividir por algun numero mas de una vez, no es primo
		           	
			    }
			}

			if($veces>1)
	           	{
	                echo "no es primo";
	            }
            else
	            {
	            	echo "si es primo";
	            }   

		 
?>

				<form action = "pag1.html" method="GET">

					
					<br>
					<input type ="submit" value ="volver">
				
				</form>




		</body>
</html>		

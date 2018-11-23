<?php 
	$user = $_POST['b'];


	if (!empty($user)) {
		comprobar($user);
	}

	function comprobar($b){

		include("conex.inc");

		$sql="SELECT * FROM datos WHERE email = '".$b."'";

		$res=mysqli_query($db,$sql);

		$contar = 0;

		while($fila=mysqli_fetch_object($res)){
			if($fila->Nombre){
				$contar = $contar + 1;
			}else{
				echo "";
			}
		}
		
		
		if($contar == 0){
                  echo "<span style='font-weight:bold;color:green;'>Usuario disponible.</span>";
        }else{
                  echo "<span style='font-weight:bold;color:red;'>Usuario no disponible.</span><br>";
        }
	}
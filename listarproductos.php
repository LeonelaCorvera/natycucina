<?php

include 'funciones\database.php';

	$consulta="SELECT * FROM producto;";
	$resultado=db_query($consulta);


	foreach($resultado as $fila){		

		echo "<li class='wow fadeInUp' data-wow-duration='300ms' data-wow-delay='300ms'>
                <div class='item'>
                    <div class='item-title'>
                        <h2>"."$fila[nombre]"."</h2>
                        <div class='border-bottom'></div>
                        <span>$ "."$fila[precio]"."</span>
                    </div>
                    <p>"."$fila[descripcion]"."</p>
                </div>
            </li>";


	}

?>
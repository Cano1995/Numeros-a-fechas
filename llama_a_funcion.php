<!--esta pagina incluye a la "pagina_funcion" y recibe las 
	variables del index, llama a las funciones NumeroLetra que transforma los numeros en letras y 
	FraseFechaGrande que transforma las fechas en numeros-->
<?php

include('pagina_funcion.php');
echo $pagado =strtoupper(NumeroLetra($_POST['NUMERO']))."<BR>";

echo $fecha=strtoupper(FraseFechaGrande($_POST['FECHA']))."<BR>";;

?>


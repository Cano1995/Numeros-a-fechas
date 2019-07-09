<!--con este simple formulario podemos cambiar los numeros el letras, y fechas en letras, principalpente, entre otras cosas
  seria util para aquellos que lo necesitan, en clases de necesitabamos alguna libreria similar para la facturacion,
  si ven este codigo espero les sea util-->
<!DOCTYPE html>
<html>
<head>
<title></title>

</head>
<body>
  <!--predeterminadamente tiene dos ejemplos
    el de numero y la fecha, su funcionamiento es simple, 
    ingresas el numero y la fecha y clickeas en el boton
    ahi utilizamos un post y enviamos los datos a la pagina "llama_a_funcion" 
    en donde se llama a la funcion que nos interesa-->
<form action="llama_a_funcion.php" method="post">
    INGRESA NUMERO: <input type="text" name="NUMERO" /><br />
    FECHA:  <input type="DATE" name="FECHA" /><br />
    <input type="submit" name="submit" value="¡Consultame!" />
</form>
</body>
</html>
<html>
<head>
	<title></title>
</head>
<body>
 <form method ="Post">
 <input type="text" name="primero" >
 <br>
<input type="text" name="segundo">
 <br>
 
<input type="text" name="Tercero">
 <br>
 
<input type="submit" name="calcular">
<br>
 </form>
 <?php 
   var_dump($_POST)
   
   if ($_POST ["primero"] > $_POST ["segundo"] && $_POST ["segundo"] > $_POST ["Tercero"] )
   	{
   	 echo "el Mayor es: el segundo";
     }

     if ($_POST ["segundo"] > $_POST ["primero"] && $_POST ["segundo"] > $_POST ["Tercero"] )
   	{
   		echo "el Mayor es: el segundo";
     }

     if ($_POST ["Tercero"] > $_POST ["segundo"] && $_POST ["Tercero"] > $_POST ["Primero"] )
   	{
   		echo "el Mayor es: el Tercero;
     }


  ?>
</body>
</html>
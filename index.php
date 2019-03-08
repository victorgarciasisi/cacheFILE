<?php
// index.php

//importamos progama cacheador
include('cache.php');

// leer XML validamos si el fichero online e accesible y si no abrimos el XML local
$data = simplexml_load_file($file_data_cache);

?>

<html>
<h1>Playas de Gijón</h1>

<?php
	//bucle para recorrer los elementos del array
	foreach($data as $item){
?>
	<table border="1">
		<tr>
			<td>Nombre: </td>
			<td>
				<?php echo $item->nombre; ?>
			</td>
		</tr>
		<tr>
			<td>URL: </td>
			<td>
				<?php echo $item->url; ?>
			</td>
		</tr>
		<tr>
			<td>Descripcion: </td>
			<td>
				<?php echo $item->descripcion; ?>
			</td>
		</tr>
	</table><br />
<?php
	} //cerramos bucle
?>

</html>

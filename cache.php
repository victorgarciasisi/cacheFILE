<?php
//nombre del fichero cacheado
$filename = 'file.xml';

//url del fichero a cachear a cachear
$file_to_cache = 'http://datos.gijon.es/doc/turismo/playas.xml';

//funcion que graba el fichero
function write_data_to_file( $filename, $file_to_cache ) {
	$file = file_get_contents( $file_to_cache );
	file_put_contents( $filename, $file );
}

//cacheamos cada 15 minutos
if ( file_exists( $filename ) ) {
	$file_time = filemtime( $filename );
	$expire = 900; // 900 seg. 15min.
	if ( $file_time < ( time() - $expire ) ) {
		// si a caducado sobreescribimos
		write_data_to_file( $filename, $file_to_cache );
	}
} else {
	// si no existe el ficehro lo creamos
	write_data_to_file( $filename, $file_to_cache );
}

//creamos varaible con el fichero
$file_data_cache = $filename;



?>

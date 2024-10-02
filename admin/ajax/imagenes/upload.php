<?php
include "_autoload.php";

$file_archivo = $_FILES['userfile'];
$identificador = Gral::getVars(2, 'identificador', 0);
$padre = Gral::getVars(2, 'padre');
$clase = Gral::getVars(2, 'clase');
$tabla = Gral::getDBTablaDesdeClase($clase);

eval('$imagen = new '.$clase.'Imagen();');
if(trim($identificador) != '0'){ 
	$imagen->setId($identificador);
}
eval('$imagen->set'.$clase.'Id($padre);');

//$imagen->setArchivo(ereg_replace('[^A-Za-z0-9.]', '', $file_archivo['name'])); // ereg_replace discontinuado en PHP7
$imagen->setArchivo(preg_replace('/[^A-Za-z0-9.]/', '', $file_archivo['name']));
$imagen->setPeso((int)((float) $file_archivo['size'] / 1000));
$imagen->setTipo(File::getTipoFromMime($file_archivo['type']));
$imagen->setEstado(1);
$imagen->save();

// se actualiza nombre del archivo con el id de la imagen
$imagen->setArchivo($imagen->getFileNombre());
File::uploadImg($file_archivo, $imagen, $tabla.'_imagen', '../../../archivos/imagenes/');
$imagen->save();

//Gral::prr($imagen);
?>
<img src='../archivos/imagenes/<?php echo $tabla ?>_imagen/<?php echo $imagen->getArchivo() ?>' border='0' width="250">

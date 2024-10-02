<?php
include "_autoload.php";

$file_archivo = $_FILES['userfile'];
$identificador = Gral::getVars(2, 'identificador', 0);
$padre = Gral::getVars(2, 'padre');
$clase = Gral::getVars(2, 'clase');
$tabla = Gral::getDBTablaDesdeClase($clase);

eval('$archivo = new '.$clase.'Archivo();');
if(trim($identificador) != '0'){ 
	$archivo->setId($identificador);
}
eval('$archivo->set'.$clase.'Id($padre);');

//$archivo->setArchivo(ereg_replace('[^A-Za-z0-9.]', '', $file_archivo['name'])); // ereg_replace discontinuado en PHP7
$archivo->setArchivo(preg_replace('/[^A-Za-z0-9.]/', '', $file_archivo['name']));
$archivo->setPeso((int)((float) $file_archivo['size'] / 1000));
$archivo->setTipo(File::getTipoFromMime($file_archivo['type']));
$archivo->setEstado(1);
$archivo->save();

// se actualiza nombre del archivo con el id de la imagen
$archivo->setArchivo($archivo->getFileNombre());
//File::uploadImg($file_archivo, $imagen, $tabla.'_imagen', '../../../archivos/imagenes/');
move_uploaded_file($file_archivo['tmp_name'], Gral::getPathAbs().'archivos/archivos/'.$tabla.'_archivo/'.$archivo->getArchivo());
$archivo->save();

//Gral::prr($prd_tipo_producto_imagen);
?>
<div id="div_grupo_archivo_<?php Gral::_echo($archivo->getId()) ?>" class="uno" identificador="<?php Gral::_echo($archivo->getId()) ?>">
<?php include Gral::getPathAbs()."admin/ajax/modulos/".$tabla."_archivo/".$tabla."_archivo_uno.php" ?>
</div>